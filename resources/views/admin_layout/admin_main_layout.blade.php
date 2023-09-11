@include('admin_layout.head')

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

@include('admin_layout.header')

@include('admin_layout.nav_bar')
@yield('main_content')

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

@include('admin_layout.footer')

@include('admin_layout.script')
@yield('script')
