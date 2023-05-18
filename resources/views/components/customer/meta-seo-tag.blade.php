@if(isset($seodata['title']))
    <title> {{$seodata['title']}} </title>
    <meta name="title" content="{{$seodata['title']}}">
@endif
@if(isset($seodata['description']))
    <meta name="description" content="{{$seodata['description']}}">
@endif

@if(isset($seodata['keywords']))
    <meta name="keywords" content="{{$seodata['keywords']}}">
@endif

<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="English">
<meta name="revisit-after" content="7 days">
<meta name="author" content="Photonplay">
<link rel = "icon" href =
    "{{asset('assets/images/photon_small.png')}}"
      type = "image/x-icon">
