
<div>


    <div class=" col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center mb-1">

                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1">
                        <p>
{{--                            <span class="font-weight-bold ">رقم الفاتورة: الفاتورة    {{ $bill->id }}</span> <br>--}}
                            <span class="font-weight-bold">اسم الطالب : </span> <span class="font-weight-bold"  style="color: #3737e4;">{{$student->name}}</span> <br>
                        </p>
                        <p>
                        <span class="font-weight-bold ">   رقم الجوال  :</span>  <span class="font-weight-bold"  style="color: #3737e4;">  {{$student->mobile}} </span>

                        {{--                            <span class="font-weight-bold ">تاريخ الفاتورة:</span>--}}
{{--                            <span class="font-small-2"> {{(new \DateTime($bill->created_at))->format('Y/m/d') }}</span><br>--}}
{{--                            <span class="font-weight-bold ">  حالة الفاتورة  :</span>{{$bill->status == "recived"?'مسددة':'غير مسددة'}} <br>--}}
{{--                            <span class="font-weight-bold">  المبلغ المطلوب:</span> <span style="color: #0C9A9A">   {{ $bill->result }}</span>--}}
                        </p>


                    </div>

                    <div class="ml-auto user-like text-danger">

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">

                    </div>




                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">رقم الدورة </th>
                            <th scope="col">اسم الدورة </th>
                            <th scope="col">تاريخ البدء</th>
                            <th scope="col">تاريخ  الانتهاء </th>
                            <th scope="col"> السعر </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($courses  as $course)
                            <tr>
                                <td>{{$course->id}}</td>
                                <td>{{$course->name}}</td>
                                <td>{{$course->start_date }}</td>
                                <td>{{$course->end_date}}</td>
                                <td>{{$course->price}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>



                </div>
            </div>
        </div>
    </div>
</div>
