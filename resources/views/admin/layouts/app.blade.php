<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Custom styles for this template-->
        <link href="{{ mix('css/admin/app.css') }}" rel="stylesheet">

        <!-- favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('images/logo-black.png?20210330') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @yield('css')
    </head>
    <body>
        <div id="app">
        <!-- Page Wrapper -->
        <div id="wrapper">

        @include('admin.layouts._sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

            @include('admin.layouts._topbar')

            <!-- Begin Page Content -->
            <div class="container-fluid">
                @include('admin.layouts.session-messages')
                @yield('content')
            </div>
            <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            @include('admin.layouts._footer')

        </div>
        <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#app">
                <i class="fas fa-angle-up"></i>
            </a>

            @include('admin.layouts._logout-modal')
        </div>

        <script src="{{ mix('js/admin/app.js') }}"></script>
        <script src="{{ mix('js/admin/sb-admin-2.js') }}"></script>

        @yield('js')
    </body>
</html>
