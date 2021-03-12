<!<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>  نظام إدارة المدارس الشامل</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    

    @include('templates.partials.head')    
    
        
</head>
<body style="font-family:Baloo Bhaijaan;" class="page-container-bg-solid">
    
   
    @include('templates.partials.header')    

    @yield('content')
    
    @include('templates.partials.footer')    

</body>
</html>