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
        $this->middleware(function ($request, $next) use ($fb) {
            if(isset(Auth::user()->token)){
                $fb->setDefaultAccessToken(Auth::user()->token);
                $this->api = $fb;
            }
            else
                return redirect(route(register));
            return $next($request);
        });
    }

    public function retrieveUserProfile(){
        // dd('retrieveUserProfile');
       try {
// start get user info

           $params = "first_name,last_name,age_range,gender,picture";

           $fb_user = $this->api->get('/me?fields='.$params)->getGraphUser();
//           $user_info=["first_name"=>$user["first_name"],"url"=>$user["picture"]["url"],"width"=>$user["picture"]["width"],"height"=>$user["picture"]["height"]];
           $user = Auth::user();
           $user->name = $fb_user['first_name'];
           $user->url = $fb_user["picture"]["url"];
// end get user info
           $userPages = $this->retrieveUserPages();
           $pages =array();
           $page_ids = array();
           foreach($userPages as $page)
           {
               array_push($pages, $page['name']);
               array_push($page_ids, $page['id']);
           }
           $user->pages = implode(".", $pages);
           $user->ids = implode(".",$page_ids );

           $user->save();
           $pages = explode(".", Auth::user()->pages);
           $ids = explode(".", Auth::user()->ids);
           //return [ Auth::user()->pages => $ids[0]];
           //logger('retrieveUserProfile Home.', [ Auth::user()->pages => Auth::user()->ids]);
           $share = Share::all();
           return view('home',compact('pages','ids','share'));
           return view('home' );

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
            $userPages = array();
            $i=0;
            foreach ($res['data'] as $page)
            {
                    $userPages += [$i++ => ['name' => $page['name'] ,'id' => $page['id'] ]];
            }
            return $userPages;


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
//        return view('home' );
            $share = new Share;
            $share->share_id = $request->page_id;
            //todo get name of publish name index
            $share->page_name = Auth::user()->pages;
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
