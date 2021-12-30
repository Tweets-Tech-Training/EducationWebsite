<section class="cover-image sptb bg-background-1" data-bs-image-src="{{asset('FrontTheme/assets/images/banners/banner5.jpg')}}">
    <div class="content-text mb-0">
        <div class="content-text mb-0">
            <div class="container">
                <div class="text-white">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mt-0">
                                <h1 class="mb-2 font-weight-semibold"> اشترك بالقائمة البريدية </h1>
                                <p class="fs-18 mb-0"> اشترك معنا ليصلك كل ما هو جديد ... </p>
                            </div>
                        </div>
                        <div class="col-lg-6">

                                <div class="mt-4">
                                    <div class="alert  alert-dismissible fade show" role="alert" style="display: none; padding:7px;">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="input-group sub-input mt-1 form-group ">
                                        <input type="email" class="form-control input-lg  br-ts-7  br-bs-7"  name="gmail" id="gmail" placeholder="أدخل إيميلك">
                                        <span class="text-danger" id="error_gmail"></span>
                                        <div class="input-group-text ">
                                            <button id="send"  type="button" class="btn btn-secondary btn-lg br-te-7  br-be-7 send"> اشتراك
                                                {{----}}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@push('script')
{{--    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}
    <script>
        $(document).ready(function (){
            // *** create mail system ajax  ***
            $('#send').click(function(e){
                console.log('riham');
                e.preventDefault();
                clearErrorMessage();
                var gmail= $('#gmail').val();
                var myformData  = new FormData();
                myformData.append("gmail", gmail);
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    url: "{{ route('mail.send') }}",
                    method: 'POST',
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: myformData , // it send form data to server
                    enctype: 'multipart/form-data',
                    success: function(result) {
                        console.log(result);
                        if(result.success){

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
                var spanID = ['gmail'];
                $.each(spanID, function(key, value) {
                    $('#error_'+value).text(" ");
                });
            }
        });
    </script>
@endpush
