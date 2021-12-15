<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Restaurant Boca Come</title>

    @include('layout.script_cabecera')

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        @include('layout.menu_top')

        <!-- Main Sidebar Container -->
        @include('layout.menu')

        @yield('content')

        @include('layout.pie')
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    @include('layout.script_pie')
</body>

</html>