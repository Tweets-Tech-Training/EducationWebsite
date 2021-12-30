<div>
    @section('sliderTitle','الدورات')
    @section('sliderTitle2','الدورات ')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">بيانات الدورة : <span style="color: #cc2828"> {{$course->name}} </span>  </h3>
        </div>
        <div class="card-body row">

           <div class="col-xl-8 col-lg-12 col-md-8">
            <table>
                <tbody>
                <tr>
                    <td><span class="fs-14 font-weight-bold text-default-dark">المدرب </span></td>
                    <td class="w-30 text-center"><span class="">:</span></td>
                    <td><span class="fs-14 font-weight-normal">{{$course->trainer?$course->trainer->name:''}}</span></td>
                </tr>
                <tr>
                    <td><span class="fs-14 font-weight-bold text-default-dark">التصنيف </span></td>
                    <td class="w-30 text-center"><span class="">:</span></td>
                    <td><span class="fs-14 font-weight-normal">{{$course->category?$course->category->name:''}}</span></td>
                </tr>
                <tr>
                    <td><span class="fs-14 font-weight-bold text-default-dark"> تاريخ بدأ الدورة </span></td>
                    <td class="w-30 text-center"><span class="">:</span></td>
                    <td><span class="fs-14 font-weight-normal">{{$course->start_date}}</span></td>
                </tr>
                <tr>
                    <td><span class="fs-14 font-weight-bold text-default-dark">تاريخ انتهاء الدورة </span></td>
                    <td class="w-30 text-center"><span class="">:</span></td>
                    <td><span class="fs-14 font-weight-normal">{{$course->end_date}}</span></td>
                </tr>
                <tr>
                    <td><span class="fs-14 font-weight-bold text-default-dark">عدد المحاضرات </span></td>
                    <td class="w-30 text-center"><span class="">:</span></td>
                    <td><span class="fs-14 font-weight-normal">{{$course->lectures_num}}</span></td>
                </tr>
                <tr>
                    <td><span class="fs-14 font-weight-bold text-default-dark">Course Time</span></td>
                    <td class="w-30 text-center"><span class="">:</span></td>
                    <td><span class="fs-14 font-weight-normal">{{$course->price}}</span></td>
                </tr>
                <tr>
                    <td><span class="fs-14 font-weight-bold text-default-dark">سعر الدورة</span></td>
                    <td class="w-30 text-center"><span class="">:</span></td>
                    <td><span class="fs-14 font-weight-normal">{{$course->price}}</span></td>
                </tr>
                <tr>
                    <td><span class="fs-14 font-weight-bold text-default-dark">المكان </span></td>
                    <td class="w-30 text-center"><span class="">:</span></td>
                    <td><span class="fs-14 font-weight-normal">{{$course->place}}</span></td>
                </tr>
                </tbody>
            </table>
           </div>
                <div class="col-xl-4 col-lg-12 col-md-4">
                                <img style="border: 3px solid #D3D3D3; border-radius: 15px; width: 100%; height: 100%" src="{{$course->image?asset('storage/images/'.$course->image):asset('storage/images/no-image.png')}}">
                </div>

        </div>
    </div>
</div>
