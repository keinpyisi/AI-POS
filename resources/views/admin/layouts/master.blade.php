<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.layouts.css')

    @include('admin.layouts.js')

    <title>Lineone - Point of Sales App</title>


  </head>

  <body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    <div
      class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900"
    >
      <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>
    @include('admin.layouts.mobilesearch')
    @include('admin.layouts.leftsidebar')
    @include('admin.layouts.rightsidebar')
    @include('admin.layouts.headernav')


<!-- Page Wrapper -->
<div
id="root"
class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900"
x-cloak
>
@yield('content')






</div>


  </body>

    @include('admin.layouts.downjs')
<!-- Mirrored from lineone.piniastudio.com/apps-pos.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Sep 2022 02:51:06 GMT -->
</html>
