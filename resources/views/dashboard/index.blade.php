<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  @include('dashboard.layouts.styles')
  @include('dashboard\layouts\navbar')
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    @include('dashboard\layouts\sidebar')
    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>
  
</div>
    @include('dashboard.layouts.footer')
    @include('dashboard.layouts.scripts')

</body>
</html>
