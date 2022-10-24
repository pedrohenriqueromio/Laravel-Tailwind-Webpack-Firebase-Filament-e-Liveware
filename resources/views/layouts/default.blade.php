<!doctype html>
<html>
<head>
   @include('includes.head')
</head>
<body>
<div >

  <header class="row">
    @include('includes.header')
  </header>
  <div id="main" class="row">
    <div class="container mx-auto px-4">
      @yield('content')
    </div>  
  </div>
   <footer class="row">
       @include('includes.footer')
   </footer>
</div>
</body>
</html>