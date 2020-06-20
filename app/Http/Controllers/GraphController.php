<?php

namespace App\Http\Controllers;


use App\Share;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;
use Facebook\Facebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class GraphController extends Controller
{
    private $api;
    public function __construct(Facebook $fb)
    {
        //Set up user access token in facebookServesProvider $fb
        // if this user has Facebook account every controller call
        $this->middleware(function ($request, $next) use ($fb) {
            if(isset(Auth::user()->token)){
                $fb->setDefaultAccessToken(Auth::user()->token);

                //set it in global variable for facebook Graph call function
                $this->api = $fb;
            }
            return $next($request);
        });
    }

    public function retrieveUserProfile(){
       try {
            // start get user info
           $params = "first_name,last_name,picture";

           $fb_user = $this->api->get('/me?fields='.$params)->getGraphUser();

           $user = Auth::user();
           $user->name = $fb_user['first_name'];
           $user->url = $fb_user["picture"]["url"];

            // end get user info
           $userPages = collect($this->retrieveUserPages());
           $user->pages = $userPages->pluck('name');
           $user->ids = $userPages->pluck('id');
           $user->save();

           return $userPages->firstWhere('id', "100485058362723");
           //return Auth::user()->user_pages->get(['id'=>$request->page_id]);

           $share = Share::all();
           return view('home',compact('share','userPages'));


       } catch (FacebookSDKException $e) {
            dd($e);
       }
    }

    public function retrieveUserPages(){

        try {
            $oauth = $this->api->getOAuth2Client();
            // Will throw a FacebookSDKException if invalid access-token
            $meta = $oauth->debugToken(Auth::user()->token);
            $meta->validateAppId(config('services.facebook.client_id') );
            //$meta->getIsValid(); // boolean

            $response = $this->api->get('/me/accounts', Auth::user()->token);
            $res = $response->getDecodedBody();

            $userPages = collect();
            foreach ($res['data'] as $page)
            {
                    $userPages->push([ 'name' => $page['name'] , 'id' => $page['id'] ]);
            }
            return $res;


        } catch (FacebookSDKException $e) {

        }
        //return $res;
    }
    public function getPageAccessToken($page_id){
        try {
            // Get the \Facebook\GraphNodes\GraphUser object for the current user.
            // If you provided a 'default_access_token', the '{access-token}' is optional.
            $response = $this->api->get('/me/accounts', Auth::user()->token);
        } catch(FacebookResponseException $e) {
            // When Graph returns an error
            echo 'Graph returned an error: ' . $e->getMessage();
            exit;
        } catch(FacebookSDKException $e) {
            // When validation fails or other local issues
            echo 'Facebook SDK returned an error: ' . $e->getMessage();
            exit;
        }

        try {
            $pages = $response->getGraphEdge()->asArray();
            foreach ($pages as $key) {
                if ($key['id'] == $page_id) {
                    return $key['access_token'];
                }
            }
        } catch (FacebookSDKException $e) {
            dd($e); // handle exception
        }
    }

    public function publishToPage(Request $request){
        // return [$request->page_id => $request->message];
        try {
            $post = $this->api->post('/' . $request->page_id . '/feed', array('message' => $request->message), $this->getPageAccessToken($request->page_id));

        $post = $post->getGraphNode()->asArray();
            $share = new Share;
            $share->share_id = $request->page_id;
            //todo get name of publish name index
            $share->page_name = ['id'=>$request->page_id, 'name'=>'page name'];
            //$share->page_name = Auth::user()->user_pages->get(['id'=>$request->page_id]);
            $share->data =  $request->message;
            //todo create function to attach image
            $share->attach =  "";
            $share->social_network = 'facebook';
            $share->save();
            // flash a success message to the session
            session()->flash('success', 'تم نشر البوست بنجاح!');

            // redirect to tasks index
            return redirect('/');
        } catch (FacebookSDKException $e)
        {
            dd($e); // handle exception
        }
    }

}
