<div>



    <div class=" col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-start align-items-center mb-1">

                    <div class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1">
                        <p>   <span class="font-weight-bold ">رقم القيد المالي :    {{ $payment->id }}</span> <br>
                            <span class="font-weight-bold">اسم الطالب</span> <span>{{$payment->students?$payment->students->name:''}}</span> <br>
                            <span class="font-weight-bold ">   رقم الطالب   :</span> {{$payment->students?$payment->students->mobile:''}} </p>

                        <p>
                            <span class="font-weight-bold"> كشف القيد المالي للطالب  </span> </p>

                        <p>

                            <span class="font-weight-bold ">   اسم الدورة  :</span> {{$payment->courses?$payment->courses->name:''}} <br>
                        <span class="font-weight-bold "> سعر الدورة   :</span> {{$payment->courses?$payment->courses->price:''}} <br>
                            <span class="font-weight-bold">  المبلغ المتبقي :</span> <span style="color: #0C9A9A">   {{ $payment->remaining_amount}}</span> </p>


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
                            <th scope="col">الدفعة </th>
                            <th scope="col"> تاريخ الدفعة  </th>
                            <th scope="col"> ملاحظات  </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($payment->orders  as $order)
                            <tr>
                                <td>{{$order->payment_amount }}</td>
                                <td>{{$order->date}}</td>
                                <td>{{$order->note}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <div class="card-footer">
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                <a  href="{{route('paymentSystem.index')}}" class="btn btn-danger"> رجوع  </a>
                </div>
            </div>
        </div>
    </div>
</div>
