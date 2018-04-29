@include('home.partial.layout.header')
@yield('slider')
@yield('breadcrum')
<div class="em-wrapper-main">
  <div class="container container-main">
      <div class="em-inner-main">
        @yield('banner_hotdeals')

        @yield('content')

      </div>
  </div>
</div>

@include('home.partial.layout.footer')
