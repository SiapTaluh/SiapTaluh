<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @yield('title')
    </title>
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
{{-- header Part --}}

    @yield('header')
    
{{-- Ends header Part --}}

{{-- Body Part --}}

    @yield('body')
    
{{-- Ends Body Part --}}

{{-- Footer Part (Kalo Ada) --}}

    @yield('footer')
    
{{-- Ends Body Part --}}
  </body>
</html>
