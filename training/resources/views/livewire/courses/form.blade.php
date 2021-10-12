<div>
   @push('style')
        <style>
            .upload-btn-wrapper{
                width: 250px !important;
                height: 250px !important;
            }

            .ck-editor__editable_inline {
                min-height: 200px;
            }
            .ck-editor__editable{
                text-align: right !important;
            }

            .select2-container--default .select2-selection--single {
                border: 1px solid #d9d9d9;
            }
        </style>
   @endpush
    <section class="users-edit">
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                <i class="feather icon-user mr-25"></i>
                                @if($course->id)
                                    <span class="d-none d-sm-block">تعديل الدورة </span>
                                @else
                                    <span class="d-none d-sm-block">اضافة دورة جديدة</span>
                                @endif

                            </a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
{{--                            <form  id="data_form_user" wire:submit.prevent="save" enctype="multipart/form-data">--}}
                                <div class="row">

                                    <div class="col-12 col-sm-8">
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <span> اسم الدورة </span>
                                                <input type="text" class="form-control" wire:model="course.name"  name="name"   placeholder="الاسم">
                                                @error('course.name') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <span> نوع الدورة </span>
                                                <div class="form-check " style="padding-top: 5px">
                                                    <input class="form-check-input" type="checkbox"  wire:model="course.course_type"  name="type">
                                                    <span> وجاهي </span>
{{--                                                    <label class="form-check-label" for="flexCheckDefault">--}}
{{--                                                        وجاهي--}}
{{--                                                    </label>--}}
                                                </div>
{{--                                                    <input type="checkbox" class="form-control" wire:model="course.course_type"  name="type" style="width: 50%; height: 20px;"  >online--}}
                                                @error('course.course_type') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div wire:ignore  class="col-md-6">
                                                <span> الصنف </span>
                                                <select wire:model="course.category_id" name="category_id" id="select2-dropdown" class="form-control"  data-placeholder="Select Category">
                                                    <option value=" " >اختر التصنيف </option>
                                                    @if($categories->count())
                                                        @foreach($categories as $category)
                                                            <option class="p-5" name="category_id" value="{{$category->id}}">  {{$category->name}}  </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @error('course.category_id') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div wire:ignore  class="col-md-6">
                                                <span> المدرب </span>
                                                <select wire:model="course.trainer_id" name="trainer_id" id="select2-dropdown" class="form-control"  >
                                                    <option value=" " >اختر المدرب </option>
                                                    @if($trainers->count())
                                                        @foreach($trainers as $trainer)
                                                            <option class="p-5" name="trainer_id" value="{{$trainer->id}}">  {{$trainer->name}}  </option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @error('course.category_id') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <span> مكان الانعقاد </span>
                                                <input type="text" class="form-control" wire:model="course.place"  name="place"   placeholder="المكان">
                                                @error('course.place') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <span> عدد المحاضرات </span>
                                                <input type="text" class="form-control" wire:model="course.lectures_num"  name="lectures_num"   placeholder="عدد المحاضرات">
                                                @error('course.lectures_num') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <span> مدة المحاضرة </span>
                                                <input type="text" class="form-control" wire:model="course.lecture_interval"  name="lecture_interval"   placeholder="مدة المحاضرة">
                                                @error('course.lecture_interval') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <span> تاريخ البدء </span>
                                                <input type="date" class="form-control" wire:model="course.start_date"  name="start_date"   placeholder="تاريخ البداية">
                                                @error('course.start_date') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-6">
                                                <span> تاريخ الانتهاء </span>
                                                <input type="date" class="form-control" wire:model="course.end_date"  name="end_date"   placeholder="تاريخ الانتهاء">
                                                @error('course.end_date') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                            <div class="col-md-6">
                                                <span> السعر </span>
                                                <input type="text" class="form-control" wire:model="course.price"  name="price"   placeholder="السعر">
                                                @error('course.price') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div  class="col-md-12" wire:ignore>
                                                <span> تفاصيل الدورة </span>
                                                <div id="detailsEditor"  name="detailsEditor">
                                                    {!! $course->details !!}
                                                </div>
                                            </div>
                                            @error('course.details') <span class="text-danger">{{ $message }}</span> @enderror


                                        </div>


                                    </div>

                                    <div class="col-12 col-sm-4">
                                        <h4 style="text-align: center">   الصورة</h4>
                                        <div class="upload-btn-wrapper mx-auto">
                                            <div class="upload-btn">
                                                @if($image)

                                                    <img src="{{$image->temporaryUrl()}}">

                                                @else

                                                    <div style="width: 250px ; height: 250px">
                                                        <div>
                                                            <img style="border: 3px solid #D3D3D3; border-radius: 15px; width: 100%; height: 100%" src="{{$course->image?asset('storage/images/'.$course->image):asset('storage/images/no-image.png')}}">
                                                            @error('course.image') <span class="text-danger" style="font-size: 1rem ;display: block;!important;">{{ $message }}</span> @enderror
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                            <input wire:click type="file" class="profile-img-input"  id="image"   wire:model="image" name="image" >

                                            <div wire:loading   wire:target="image" style="margin-top: 10px;">
                                                <h6 style="display: inline-block">   جار الرفع...   </h6>
                                                <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">

                                                    <span class="visually-hidden "> </span>

                                                </div>

                                            </div>
                                            @error('image') <span class="text-danger">{{ $message }}</span> @enderror
                                        </div>

                                    </div>
                                </div>

                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                                    @if($course->id)
                                        <button wire:click="save" wire:loading.attr="disabled" wire:target="image" type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                            تعديل
                                            <div wire:loading  wire:target="save"  style="margin-top: 10px;">
                                                <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                    <span class="visually-hidden "> </span>
                                                </div>
                                            </div>
                                        </button>
                                    @else
                                        <button wire:click="save" wire:loading.attr="disabled" wire:target="image" type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ
                                            <div wire:loading  wire:target="save"  style="margin-top: 10px;">
                                                <div  class="  spinner-border spinner-border-sm text-gray-200" role="status">
                                                    <span class="visually-hidden "> </span>
                                                </div>
                                            </div>
                                        </button>
                                    @endif

                                    <a href="{{route('courses.index')}}"  class="btn btn-outline-danger">الغاء</a>
                                </div>
{{--                            </form>--}}
                            <!-- users edit account form ends -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
   @push('script')
           <script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
           {{--    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>--}}
               <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer" ></script>
{{--               <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}
           <script>
               ClassicEditor
                   .create( document.querySelector( '#detailsEditor' ) )
                   .then( newEditor => {
                       var details= newEditor.getData();
                       newEditor.model.document.on('change:data', () => {
                           // $dispatch('detailsEditor', newEditor.getData())
                       @this.set('course.details', newEditor.getData());
                       })

                   } )
                   .catch( error => {
                       console.error( error );
                   } );
           </script>
           <script>
               $(document).ready(function () {
                   $('#select2-dropdown').select2();
                   $('#select2-dropdown').on('change', function (e) {
                       var data = $('#select2-dropdown').select2("val");
                       console.log(data)
                   @this.set('course.category_id', data);
                   });
               });
           </script>
   @endpush
</div>




