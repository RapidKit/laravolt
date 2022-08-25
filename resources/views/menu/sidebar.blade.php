@php($items = app('laravolt.menu.sidebar')->all())

<nav class="sidebar" data-role="sidebar" id="sidebar">
    <script>
        if (document.body.clientWidth < 991 || localStorage.getItem('layout-mode') === 'full') {
            document.getElementById('sidebar').classList.add('hide');
            document.getElementById('topbar').classList.add('full');
        } else {
            document.getElementById('sidebar').classList.add('show');
        }

    </script>
    <div class="sidebar__scroller">

        @include('laravolt::menu.sidebar_logo')
        @include('laravolt::menu.sidebar_menu')
        @include('laravolt::menu.sidebar_profile')

    </div>
</nav>
