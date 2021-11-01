
@extends('front_layout.main-layout')
@section('title',' اتصل بنا  ')
@section('css')
    <style>
        .form-control{
            /*border: 1px solid #9797b6;*/
            font-size: 13px;
        }




    </style>
@endsection
@section('sliderImage')
    <div class="cover-image bg-background-1" data-bs-image-src="{{asset('FrontTheme/assets/images/banners/banner1.jpg')}}">
        <!--Section-->
        <section>
            <div class="sptb-2 bannerimg">
                <div class="header-text mb-0">
                    <div class="container">
                        <div class="text-center text-white py-7">
                            <h1 class="fs-22"> اتصل بنا   </h1>
                            <ol class="breadcrumb text-center">
                                <li class="breadcrumb-item"><a href="{{route('front.index')}}"> الصفحة الرئيسية </a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page"> اتصل بنا  </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/Section-->
    </div>
    <!-- Shape Start -->
    <div class="relative">
        <div class="shape overflow-hidden text-white">
            <svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="#f5f4f9"></path>
            </svg>
        </div>
    </div>
    <!--Shape End-->
@endsection
@section('content')
<br>
<div class="container">
    <div class="sptb bg-white contacts">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row text-white">
                        <div class="col-lg-3 col-md-12">
                            <div class="card border-0 mb-lg-0">
                                <div class="support-service mb-0  text-center bg-primary">
                                    <i class="fa fa-phone"></i>
{{--                                    <h5>+{{$setting->}}</h5>--}}
                                    <p>Free Support!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="card border-0 mb-lg-0">
                                <div class="support-service mb-0 text-center bg-secondary">
                                    <i class="fa fa-clock-o"></i>
                                    <h5>Mon-Sat(10:00-19:00)</h5>
                                    <p>Working Hours!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="card border-0 mb-lg-0">
                                <div class="support-service mb-0 text-center bg-success">
                                    <i class="fa fa-map-marker"></i>
                                    <h5>Mon-Sat(10:00-19:00)</h5>
                                    <p>Working Hours!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <div class="card border-0 mb-0">
                                <div class="support-service mb-0 text-center bg-orange">
                                    <i class="fa fa-envelope-o"></i>
                                    <h5>yourdomain@gmail.com</h5>
                                    <p>Support us!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-7 col-md-12 mx-auto">
                    <div class="card mb-0 single-page customerpage contact">
                        <div class="card-body wrapper wrapper2 box-shadow-0">
                            <div class="mb-6 text-dark">
                                <h5 class="fs-25 font-weight-semibold">تواصل معنا </h5>
                                <div class="alert  alert-dismissible fade show" role="alert" style="display: none; padding:7px;">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                            <form id="" class="" tabindex="500">
                                <div class="form-group ">
                                    <span class="fw-bold" > الاسم </span>
                                    <input type="text" class="form-control"   name="name"   id="name" placeholder=" الاسم " style="font-size: 16px">
                                    <span class="text-danger" id="error_name"></span>
                                </div>
                                <div class="form-group ">
                                    <span class="fw-bold" > الايميل </span>
                                    <input type="email" class="form-control"   name="email" id="email"   placeholder="رقم الايميل ">
                                    <span class="text-danger" id="error_email"></span>

                                </div>
                                <div class="form-group ">
                                    <span class="fw-bold" > رقم الجوال </span>

                                    <input type="text" class="form-control" id="mobile"  name="mobile"   placeholder="رقم الجوال">
                                    <span class="text-danger" id="error_mobile"></span>

                                </div>
                                <div class="form-group ">
                                    <span class="fw-bold" >  الرسالة </span>

                                    <textarea placeholder="الرسالة" type="text" id="message" name="message" rows="4" class="form-control"></textarea>
                                    <span class="text-danger" id="error_message"></span>

                                </div>
                                <div class="submit">
                                    <button id="submit"  class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 submit" style="margin-left: 18px ; width: 95px; font-size: 16px" >
                                        ارسال
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--    <div class="card">--}}
{{--        <div class="card-body">--}}


{{--            <div class="row mtli-row-clearfix">--}}

{{--                <div class="p-40">--}}



{{--                    <div class="row">--}}

{{--                        <h4 style="margin-bottom: 20px; color:#18113c"> تواصل معنا :</h4>--}}
{{--                        <div class="alert  alert-dismissible fade show" role="alert" style="display: none; padding:7px;">--}}
{{--                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                                <span aria-hidden="true">&times;</span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-8">--}}
{{--                            <div class="col-md-10 col-sm-12">--}}
{{--                                <div class="form-group ">--}}
{{--                                    <span class="fw-bold" > الاسم </span>--}}
{{--                                    <input type="text" class="form-control"   name="name"   id="name" placeholder=" الاسم " style="font-size: 16px">--}}
{{--                                    <span class="text-danger" id="error_name"></span>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-md-10 col-sm-6">--}}
{{--                                <div class="form-group ">--}}
{{--                                    <span class="fw-bold" > الايميل </span>--}}
{{--                                        <input type="email" class="form-control"   name="email" id="email"   placeholder="رقم الايميل ">--}}
{{--                                        <span class="text-danger" id="error_email"></span>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="col-md-10 col-sm-12">--}}
{{--                                <div class="form-group ">--}}
{{--                                    <span class="fw-bold" > رقم الجوال </span>--}}

{{--                                        <input type="text" class="form-control" id="mobile"  name="mobile"   placeholder="رقم الجوال">--}}
{{--                                        <span class="text-danger" id="error_mobile"></span>--}}

{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="col-md-10 col-sm-6">--}}
{{--                            --}}
{{--                            </div>--}}
{{--                        </div>--}}


{{--                        <div class="col-md-4">--}}
{{--                            --}}{{--        <div style="height: 500px; width: 300px;">--}}
{{--                            <img src="{{asset('FrontTheme/assets/images/png/filament-bulb-lying-euro-coins.jpg')}}" style="height: 361px; width: 366px" alt="img">--}}

{{--                            --}}{{--        </div>--}}

{{--                        </div>--}}
{{--                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-5 mr-5 form-group " >--}}

{{--                            <button id="submit"  class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1 submit" style="margin-left: 18px ; width: 95px; font-size: 16px" >--}}
{{--                                ارسال--}}
{{--                            </button>--}}

{{--                            <button type="reset"  class="btn btn-outline-danger" style="width: 95px ; font-size: 16px " >الغاء</button>--}}
{{--                        </div>--}}



{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>

@endsection
 @section('script')
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
                $(document).ready(function (){
                    // *** create post ajax  ***
                    $('#submit').click(function(e){
                        e.preventDefault();

                        clearErrorMessage();
                        var name= $('#name').val();
                        var email= $('#email').val();
                        var mobile= $('#mobile').val();
                        var message= $('#message').val();
                        var myformData  = new FormData();
                        myformData.append("name", name);
                        myformData.append("email", email);
                        myformData.append("mobile", mobile);
                        myformData.append("message", message);
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            url: "{{ route('contact.send') }}",
                            method: 'POST',
                            dataType: 'json',
                            processData: false,
                            contentType: false,
                            cache: false,
                            data: myformData , // it send form data to server
                            enctype: 'multipart/form-data',
                            success: function(result) {
                                // console.log(result);
                                if(result.success){
                                  //  console.log('riham')
                                    $('.alert').addClass('alert-success').html(result.success).show();
                                    // $('.alert').show();
                                }
                                setTimeout(function(){
                                    $('.alert').hide();
                                    // window.location.reload();
                                }, 2500);
                            },
                            error:function(xhr,status,error){
                                $.each(xhr.responseJSON.errors, function(key, value) {
                                    $('#error_'+key).text(value);
                                });
                            }
                        });
                    });
                    function clearErrorMessage(){
                        var spanID = ['name', 'email','mobile','message'];
                        $.each(spanID, function(key, value) {
                            $('#error_'+value).text(" ");
                        });

                    }
                });
            </script>
@endsection
