<div class="wrapper">

    @include('layouts.navbars.game')

    <div class="main-panel">
        @include('layouts.navbars.navs.game')
        @yield('content')
        @include('layouts.footer')
    </div>
</div>
