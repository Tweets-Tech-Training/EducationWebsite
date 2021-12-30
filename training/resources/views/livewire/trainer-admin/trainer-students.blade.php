<div>
<section class="sptb">
    <div class="container">
        <div class="section-title d-md-flex">
            <div>
{{--                <h2>الطلاب  </h2>--}}
{{--                <p class="fs-18 lead">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>--}}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 users-list">
                <div class="page-header bg-white mb-4 p-4 border">
{{--                    <select class="form-control select2 page-select select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">--}}
{{--                        <option value="0" data-select2-id="3">Select Options</option>--}}
{{--                        <option value="1">Active</option>--}}
{{--                        <option value="2">Online</option>--}}
{{--                        <option value="3">Blocked</option>--}}
{{--                        <option value="4">Suspended</option>--}}
{{--                        <option value="4">A-Z</option>--}}
{{--                    </select>--}}
                    <h4> الطلاب   </h4>
                    <div class="page-options d-flex">
                        <div class="input-group">
                            <input type="text"   wire:model="search_array.name" class="form-control br-ts-7 br-bs-7" placeholder="البحث">
                            <div class="input-group-text ">
                                <a type="button" class="btn btn-primary br-te-7  br-be-7"  wire:click="search">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="user-tabel table-responsive border-top">
                            <table class="table card-table table-bordered table-hover table-vcenter text-nowrap table-user">
                                <tbody>
                                <tr>
                                    <th class="font-weight-bold"></th>
                                    <th class="font-weight-bold">اسم الطالب</th>
                                    <th class="font-weight-bold">اسم الدورة  </th>
                                    <th class="font-weight-bold">رقم الجوال </th>
                                    <th class="font-weight-bold"> الايميل </th>
                                </tr>
                                @forelse($course_registers as $course_register)
                                <tr>
                                    <td class=""><span class="avatar avatar-md  d-block  cover-image" data-bs-image-src="{{$course_register->students?asset('storage/images/'.$course_register->students->image):''}}" style=" "></span></td>
                                    <td><a href="userprofile.html" class="text-dark font-weight-bold">{{$course_register->students?$course_register->students->name:''}}</a></td>
                                    <td><a href="javascript:void(0)" class="text-dark font-weight-bold">{{$course_register->courses?$course_register->courses->name:''}}</a></td>

                                  <td> {{$course_register->students?$course_register->students->mobile:''}} </td>
                                    <td class="text-center">
{{--                                        <a href="userprofile.html" class="btn btn-outline-primary btn-sm me-1" data-bs-toggle="tooltip" data-bs-original-title="View"><i class="fe fe-eye"></i></a>--}}
{{--                                        <a href="edit-posts.html" class="btn btn-outline-success btn-sm me-1" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fe fe-edit"></i></a>--}}
{{--                                        <a href="javascript:void(0)" class="btn btn-outline-danger btn-sm" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fe fe-trash"></i></a>--}}
{{--                                   --}}

                                        {{$course_register->students?$course_register->students->email:''}}
                                    </td>
                                </tr>
                                    @empty
                                        <x-nodata></x-nodata>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <ul class="pagination mb-0">

                    {{ $course_registers->links() }}

                </ul>
            </div>
        </div>
    </div>
</section>
</div>
