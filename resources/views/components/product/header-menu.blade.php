<div class="row">

    <div class="col-md-2 mb-3">
        <a href="{{route('admin.product.edit',$pid)}}" class="btn btn-outline-{{$page==1?'primary':'dark'}} w-100" >Basic </a>
    </div>

    <div class="col-md-2 mb-3">
        <a href="{{route('admin.product_media_page',$pid)}}" class="btn btn-outline-{{$page==2?'primary':'dark'}} w-100" >Media </a>
    </div>

    <div class="col-md-2 mb-3">
        <a href="#" class="btn btn-outline-{{$page==3?'primary':'dark'}} w-100"  > Shipping </a>
    </div>
    <div class="col-md-2 mb-3">
        <a href="#" class="btn btn-outline-{{$page==3?'primary':'dark'}} w-100"  > SEO </a>
    </div>
    <div class="col-md-2 mb-3">
        <a href="#" class="btn btn-outline-{{$page==4?'primary':'dark'}} w-100"> Pricing </a>
    </div>
</div>
