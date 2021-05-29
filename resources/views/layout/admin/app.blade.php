<!doctype html>
<html class="no-js" lang="en">

<head>
    @include('layout.admin.header')
    @yield('internal_css')
</head>

<body>
   
    
    @include('layout.admin.side')
     
  
 
	@include('layout.admin.nav')


    @yield('content')



 @include('layout.admin.footer')
    @yield('footer_script')
    
 
</body>

</html>