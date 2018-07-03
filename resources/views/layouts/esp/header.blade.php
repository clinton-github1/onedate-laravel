<! DOCTYPE html>
<html>
    <head>
       <title>La Unidad Cristiana de las Fechas de la Pascua</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css2/others/grid.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css2/others/normalize.css') }}">
         <link rel="stylesheet" type="text/css" href="{{ URL::asset('css2/others/ionicons.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css2/layout.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css2/resize.css') }}" media="screen">
        
        
    <header>
        <div class="logo">
        
            <img src="{{ URL::asset('images/esp-banner-Rom12-5.jpg') }}" alt="logo image">
        
        </div>
        
     </header>
        
    </head>
    
    <body>
    @include('layouts/esp.navbar')
        @yield('content')
    </body></html>
    