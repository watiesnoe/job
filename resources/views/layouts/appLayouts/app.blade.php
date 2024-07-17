@include('layouts.appLayouts.head')

<body class="nk-body bg-lighter npc-default has-sidebar ">
<div class="nk-app-root">
    <!-- main @s -->
    <div class="nk-main ">
        <!-- sidebar @s -->
    @include('layouts.appLayouts.sidebare')
    <!-- sidebar @e -->
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
        @include('layouts.appLayouts.navbare')
        <!-- main header @e -->
            <!-- content @s -->
        @yield('content')
            <!-- content @e -->
            <!-- footer @s -->
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- main @e -->
    @include('layouts.appLayouts.modale')
</div>
<!-- app-root @e -->
<!-- select region modal -->
<!-- JavaScript -->
@include('layouts.appLayouts.footer')
</body>

</html>