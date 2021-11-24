<div>

@section('sliderTitle','الدفعات المالية')
@section('sliderTitle2','الدفعات المالية  ')
    <div class="card mb-0">
        <div class="card-header">
            <h3 class="card-title"> الدفعات المالية للطالب   </h3>

        </div>
        <div class="card-body">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 select2-sm no-footer">
                {{--                            <div class="row">--}}
                <div class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1">
                    {{--                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-between mt-1">--}}
                    <div class="col-xl-8 col-sm-12 col-lg-6 col-md-12">
                        <label>عرض الدفعات المالية: </label>
                    </div>
                    <div class="col-xl-4 col-sm-12 col-lg-6 col-md-12">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label>البحث:<input type="search" class="form-control select2-sm form-control-sm" wire:model="search" placeholder="" aria-controls="DataTables_Table_0"></label></div></div>
                </div>
                <br>
            <div class="row">
                <div class="col-sm-12">

                    <table class="table table-bordered table-hover">

                        <thead>
                        <tr>
                            <th>الدورة </th>
                            <th>سعر الدورة الكلي  </th>
                            <th>المبلغ المطلوب </th>
                            <th> المبلغ المتبقي على الطالب </th>
                            <th> تاريخ الدفع  </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($payments as $payment)
                            <td>
                                <div class="media mt-0 mb-0">
{{--                                    <div class="card-aside-img">--}}
{{--                                        <a href="javascript:void(0)"></a>--}}
{{--                                        <img src="{{$payment->courses?asset('storage/images/'.$payment->courses->image):asset('storage/images/no-image.png')}}" alt="img">--}}
{{--                                    </div>--}}
                                    <div class="media-body">
                                        <div class="card-item-desc ms-2 p-0 mt-0">
                                            <a href="javascript:void(0)" class="text-dark"><h4 class="font-weight-bold">{{$payment->courses?$payment->courses->name:''}}</h4></a>
                                            <a href="javascript:void(0)" class="text-muted fs-12"><i class="fa fa-clock-o me-1"></i> {{$payment->courses?$payment->courses->start_date:''}}</a>
                                            <a href="javascript:void(0)" class="text-muted fs-12"><i class="fa fa-clock-o me-1"></i> {{$payment->courses?$payment->courses->start_date:''}}</a>

                                        </div>
                                    </div>
                                </div>
                            </td>

                          <td>
                              <a href="javascript:void(0)" class="btn btn-warning btn-sm">{{$payment->courses?$payment->courses->price:''}}</a>
                          </td>
                         <td>   <a href="javascript:void(0)" class="btn btn-success btn-sm"> {{$payment->payment_amount}}</a></td>
                            <td>  <a href="javascript:void(0)" class="btn btn-danger btn-sm">{{$payment->remaining_amount?$payment->remaining_amount:0}} </a> </td>
                        <td>
                            {{(new \DateTime($payment->created_at))->format('Y.m.d')}}
                        </td>
                        </tbody>
                        @empty
                            <x-nodata></x-nodata>
                        @endforelse

                    </table>
                </div>
            </div>
            </div>
        </div>

    </div>
</div>
