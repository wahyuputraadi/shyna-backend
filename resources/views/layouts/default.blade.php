<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ShaynaAdmin - HTML5 Admin Template</title>
    <meta name="description" content="ShaynaAdmin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- stack before --}}
    @stack('before-style')
    <!-- Style Move -->
    @include('includes.style')
    {{-- stack after --}}
    @stack('after-style')
 
</head>

<body>

    {{-- pindah ke views/includes --}}
    
    <!-- Sidebar Move -->
    @include('includes.sidebar')

    <div id="right-panel" class="right-panel">

        <!-- Navbar Move -->
        @include('includes.navbar')

        <div class="content">
            <!-- Content Move -->
              @yield('content')
        </div>

        <div class="clearfix"></div>
    </div>

    
    {{-- stack before --}}
    @stack('before-script')
    <!-- Script Move -->
    @include('includes.script')
    {{-- stack after --}}
    @stack('after-script')
    
</body>

</html>