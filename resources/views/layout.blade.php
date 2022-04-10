<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <link href="/public/app.css">
  <title>@yield('title')</title>
  </head>
 <body>
 <a href="public/login">Adminn</a>
 <h1>@yield('title')</h1>
@if(session('success'))
{{session('success')}}
 @endisset
  <br>
  @yield('content')
 </body>
</html>

