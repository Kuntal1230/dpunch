@include('home.partial.layout.header')
@yield('slider')
<div class="container container-main">
    <div class="em-inner-main">
      @yield('banner_hotdeals')

      @yield('content')

    </div>
</div>

@include('home.partial.layout.footer')
