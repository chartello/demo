<!DOCTYPE html>
<html class="h-full">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/vendor/chartello/favicon.ico">
    <link rel="stylesheet" href="{{ mix('css/app.css', 'vendor/chartello') }}"/>
    @inertiaHead
</head>
<body class="min-h-full flex flex-col bg-gray-50">
    <div style="margin-top:3.5rem">
        @inertia
    </div>

    <div class="bg-black text-white p-4 fixed top-0 right-0 w-full flex items-center justify-center" style="z-index: 20">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M5 11m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
            <path d="M12 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
            <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
        </svg>

        This is a read-only demo. Changes to dashboards are ignored.
    </div>

    <script src="{{ mix('js/app.js', 'vendor/chartello') }}"></script>
</body>
</html>
