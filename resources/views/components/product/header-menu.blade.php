<div class="row">

    <div class="col-md-3 mb-3">
        <a href="#" class="btn btn-{{$page==1?'primary':'info'}} w-100" >Options </a>
    </div>

    <div class="col-md-3 mb-3">
        <a href="{{route('admin.product_media_page',$pid)}}" class="btn btn-{{$page==2?'primary':'info'}} w-100" >Media </a>
    </div>

    <div class="col-md-3 mb-3">
        <a href="#" class="btn btn-{{$page==3?'primary':'info'}} w-100"  > Shipping </a>
    </div>
    <div class="col-md-3 mb-3">
        <a href="#" class="btn btn-{{$page==4?'primary':'info'}} w-100"> Vat/Tax </a>
    </div>
</div>
