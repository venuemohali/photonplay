<div>
    <div class="shadow-sm p-3">
        <p> Payment Status : <span class="{{$order->payment_status=='paid'?'text-success':'text-warning'}} p-1">
                                    {{ucfirst($order->payment_status)}} </span>   </p>
        <p> Order Status : <span class="p-1">
                                    {{strtoupper($order->delivery_status)}} </span>   </p>

        <p> Trasaction No. : <span>
                                {{$order->trx_id}}</span> </p>
        <p>  <b> Order Note: </b>  {{$order->order_notes??'Order notes not available.'}}</p>
        <a href="{{route('admin.generate_order_invoice',$order->id)}}" target="_blank">
            <i data-feather="printer"></i>  </a>
    </div>
</div>
