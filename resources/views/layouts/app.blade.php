<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="antialiased leading-normal tracking-normal" style="font-family:'Source Sans Pro', sans-serif;">
        @include('partials.navbar')
        <main>
            @yield('content')
        </main>
        @include('partials.footer')
        <script src="{{ asset('js/app.js') }}"></script>
        <script>           
            var navMenuDiv = document.getElementById("nav-content");
            var navMenu = document.getElementById("nav-toggle");
            
            document.onclick = check;
            function check(e){
              var target = (e && e.target) || (event && event.srcElement);
              //Nav Menu
              if (!checkParent(target, navMenuDiv)) {
                // click NOT on the menu
                if (checkParent(target, navMenu)) {
                  // click on the link
                  if (navMenuDiv.classList.contains("hidden")) {
                    navMenuDiv.classList.remove("hidden");
                  } else {navMenuDiv.classList.add("hidden");}
                } else {
                  // click both outside link and outside menu, hide menu
                  navMenuDiv.classList.add("hidden");
                }
              }
            }
            function checkParent(t, elm) {
              while(t.parentNode) {
                if( t == elm ) {return true;}
                t = t.parentNode;
              }
              return false;
            }
        </script>
</body>
</html>
