<!DOCTYPE html>
<html lang="zxx" class="js">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href="/assets/css/vendor.bundlec302.css?ver=130" >
        <link href="/assets/css/stylec302.css?ver=130" rel="stylesheet">
        <link href="/assets/css/theme-royel-tealc302.css?ver=130" rel="stylesheet" id="layoutstyle">
        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js?ver=130', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="overflow-scroll">

        @inertia

        <script src="/assets/js/jquery.bundlec302.js?ver=130"></script>
        <script src="/assets/js/scriptc302.js?ver=130"></script>
    </body>
</html>
