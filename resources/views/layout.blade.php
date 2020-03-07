<!DOCTYPE html>
<html lang="en">
<head>
<title>Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>       

@include('common.header')

<section>  
  @if(count($errors)>0)
    <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach

    </ul>
  @endif  
    @yield('content')

</section>

@include('common.footer')

</body>
</html>
