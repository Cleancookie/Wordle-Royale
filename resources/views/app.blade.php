<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    @routes
    <script src="{{ mix('/js/manifest.js') }}" defer></script>
    <script src="{{ mix('/js/vendor.js') }}" defer></script>
    <script src="{{ mix('/js/app.js') }}" defer></script>
    @inertiaHead
</head>

<body class="bg-gray-200 min-h-screen">
    @inertia
    <div id="app"></div>
</body>

</html>
