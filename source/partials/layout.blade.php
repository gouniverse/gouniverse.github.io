<?php
$webpageTitle = isset($webpage_title) ? $webpage_title : 'None';
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>{{ $webpageTitle }} | BlockArea</title>
        @include('partials.styles')
        @stack('styles')
        @yield('styles')
    </head>

    <body>
        <!-- START: Page Wrapper -->
        <table class="Layout" cellspacing="0" cellpadding="0" style="width:100%;height:100%;">
            <!-- START: Header -->
            <tr>
                <td class="Header" align="center" valign="middle" style="height:1px;">
                    @include('partials.header')
                </td>
            </tr>
            <!-- END: Header -->

            <!-- START: Content-->
            <tr>
                <td class="Content" align="left" valign="top">
                    <!-- START: Main Content -->
                    @yield('content')
                    <!-- END: Main Content -->
                </td>
            </tr>
            <!-- END: Content -->

            <!-- START: Footer -->
            <tr>
                <td class="Footer" align="center" valign="middle" style="height:80px;">
                    @include('partials.footer')
                </td>
            </tr>
            <!-- END: Footer -->
        </table>
        <!-- END: Page Wrapper -->

        @include('partials.scripts')
        @stack('scripts')
        @yield('scripts')
    </body>

</html>
