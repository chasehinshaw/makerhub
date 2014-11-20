<!DOCTYPE html>
<html lang="en">
<head>
  @include('layouts.partials.head')
</head>

<body>
  
  <!-- Main Navigation (top) -->
  @include('layouts.partials.nav')

  <!-- Main Page Container -->
  <div class="container">
    @include('flash::message')
    <div class="row">  

      @yield('sidebar')

      @yield('main')
      

    </div>
  </div>

  @yield('footer')
  @include('layouts.partials.footer-scripts')
</body>
</html>