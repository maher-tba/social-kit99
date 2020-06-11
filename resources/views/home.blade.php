@extends('layouts.admin_layout.admin_layout')

@section('title')
    Home
@endsection
<!-- DataTables -->
@section('styles')

    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Bootstrap 3.3.2 -->
{{--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">--}}
{{--    <!-- Font Awesome Icons -->--}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
{{--    <!-- Ionicons -->--}}
{{--    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />--}}
{{--    <!-- Theme style -->--}}
{{--    <link href="{{ asset("dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />--}}

{{--    <!-- DataTables -->--}}
{{--    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />--}}


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
@endsection

@section('content')
    <!-- Content Header (Page header) -->
{{--first name =  {{$user_info['first_name']}}--}}
    {{--    width =  {{$user_info['width']}}--}}
    {{--    height =  {{$user_info['height']}}--}}
    {{--    <img src="{{$user_info['url']}}" alt="user imag" class="dropdown-nav-image">--}}


{{--    @foreach($userPages as $page)--}}
{{--        page name {{$page["name"]}}--}}
{{--    @endforeach--}}


    <section class="content ">
        <div class="row">

            <!-- ./col -->
            <div class="small-box col-lg-8 col-sm-6 col-xs-6 bg-blue ml-4">
                <div class="inner">
                    <h3>{{count($share)}}</h3>
                    <p>مشاركة</p>
                </div>
                <div class="icon" style="color: #ffffff;">
                    <i class="fa fa-facebook"></i>
                </div>
                <a href="#" class="small-box-footer">post now <i class="fa fa-arrow-circle-right"></i></a>
{{--                <a href="#" class="modalCreatePost pull-right " data-toggle="modal" data-target="#modalCreatePost"><i class="fa fa-facebook">&nbsp; نشر في</i></a>--}}
            </div>
            <!-- ./col -->
        {{--            <div class="small-box col-lg-4 col-sm-3 col-xs-3  ml-4" style="background-color: rgb(29, 161, 242);">--}}
        {{--                <div class="inner">--}}
        {{--                    <h3>3</h3>--}}

        {{--                    <p>تغريدة</p>--}}
        {{--                </div>--}}
        {{--                <div class="icon" style="color: #ffffff;">--}}
        {{--                    <i class="fa fa-twitter"></i>--}}
        {{--                </div>--}}
        {{--                <a href="#" class="small-box-footer">twitte now <i class="fa fa-arrow-circle-right"></i></a>--}}
        {{--                <a href="#" class="modalCreateTwitte pull-right " data-toggle="modal" data-target="#modalCreateTwitte"><i class="fa fa-twitter">&nbsp; تغريد في</i></a>--}}
        {{--            </div>--}}
        <!-- ./col -->

        </div>
        <form method="POST" action="{{route('message.send')}}">
            @csrf
            <div class="card" style="max-width: 77%;">

                <!-- /.card-head -->
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                    <div class="form-group row">
                        <div class="col-sm-12 ">
                            <input type="text" class="form-control text-right" name="message" id="message" placeholder="ماذا يخطر ببالك">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12 ">
                            {{-- <input type="text" class="form-control text-right" name="page_id" id="page_id" value="{{$ids[0]}}" placeholder="id page"> --}}
                            <select name="page_id" id="page_id" class="custom-select">
                            <?php $i=0;
                            ?>
                            @foreach($pages as $page)
                                <option value="{{$ids[$i]}}">{{$ids[$i]}} - {{$page}}</option>
                                
                                <?php $i++;
                            ?>
                            @endforeach
                        </select>
                        </div>
                    </div>
                 
                   {{--  <div class="form-group row">
                    </div> --}}

                        <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </div>
            <!-- /.modal-content -->
            <!-- /.modal-dialog -->
            <!-- /.modal -->
            </div>
        </form>

    </section>
{{--    <input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
    <div class="card" style="max-width: 77%;">
        <div class="card-header pull-right">
            <h3 class="card-title">مشاركات الفيس</h3>
        </div>
        <!-- /.card-head -->
        <div class="card-body">
            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">

                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>رقم المشاركة</th>
                                <th>اسم الصفحة</th>
                                <th>المحتوى</th>
                                <th>المرفقات</th>
                                <th>المنصة</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($share as $data)
                                <tr>
                                    <td>{{$data->share_id}} </td>
                                    <td>{{$data->page_name}} </td>
                                    <td>{{$data->data}}</td>
                                    <td>null </td>
                                    <td>{{$data->social_network}} </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>رقم المشاركة</th>
                                <th>اسم الصفحة</th>
                                <th>المحتوى</th>
                                <th>المرفقات</th>
                                <th>المنصة</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

        </div>



        <div class="modalKu"></div>
        <!-- /.card-body -->
    </div>




@section('footer_js')

    <!-- DataTables -->
{{--    <script src="{{ asset ("plugins/jQuery/jQuery.min.js") }}"></script>--}}
    <!-- Bootstrap 3.3.2 JS -->
{{--    <script src="{{ asset ("plugins/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>--}}
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- REQUIRED JS SCRIPTS -->

{{--<!-- jQuery 2.1.3 -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>--}}
{{--<!-- Bootstrap 3.3.2 JS -->--}}
{{--<script src="{{ asset ("plugins/bootstrap/js/bootstrap.js") }}" type="text/javascript"></script>--}}
{{--<!-- AdminLTE App -->--}}
{{--<script src="{{ asset ("js/app.js") }}" type="text/javascript"></script>--}}
{{--<!-- DataTables -->--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/jquery.dataTables.min.js"></script>--}}
{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.20/js/dataTables.bootstrap.min.js"></script>--}}

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->

<!-- page script -->
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('input[name="_token"]').val()
        }
    });

    // modal create post
    $('.modalCreatePost').click(function(event){
        event.preventDefault();
        $.ajax({
            url     : "{{url('modal_create_post')}}",
            method  : 'POST',
            success : function(response){
                $('.modalKu').html(response);
                $('#myModal').modal('show');
            }
        });
    });


    // modal create twitte
    $('.modalCreateTwitte').click(function(event){
        event.preventDefault();
        $.ajax({
            url     : "{{url('modal_create_twitte')}}",
            method  : 'POST',
            success : function(response){
                alert('response!!');
                $('.modalKu').html(response);
                $('#myModal').modal('show');
            }
        });
    });

    // MODAL EDIT
    function modalEditTriger(id){
        $.ajax({
            url     : "{{url('modal_edit')}}",
            method  : 'POST',
            data    : {
                'id' : id
            },
            success : function(response){
                // console.log(response);
                $('.modalKu').html(response);
                $('#myModal').modal('show');
            }
        });
    }

    // MODAL DELETE
    function modalDeleteTrigger(id){
        // var r = confirm("Apa anda yakin akan menghapus data?");
        // if (r == true){
        $.ajax({
            url     : "{{url('/modal_delete')}}",
            method  : 'POST',
            data    : {
                'id' : id
            },
            success : function(response){
                console.log(response);
                $('.modalKu').html(response);
                $('#myModal').modal('show');
                // if (response.status == 'error'){
                //   alert('Delete Error');
                // }else{
                //   alert('Delete Success!!');
                //   window.location.replace('/datasiswa/public/home');
                // }
            }
        });
        // }else{
        //   alert('Delete Canceled!');
        // }
    }
</script>
<script>
    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

</script>
{{--#################### end datatable JavaScript search #####################--}}

@endsection

@endsection
