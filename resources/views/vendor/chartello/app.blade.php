<!DOCTYPE html>
<html class="h-full">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="/vendor/chartello/favicon.ico">
    @vite(['resources/css/app.css'])
    <link rel="stylesheet" href="{{ mix('css/app.css', 'vendor/chartello') }}"/>
    @inertiaHead
</head>
<body class="min-h-full flex flex-col bg-gray-50">
    <div style="margin-top:3.5rem">
        @inertia
    </div>

    <div class="bg-black text-white p-4 fixed top-0 right-0 w-full" style="z-index: 20">
        <div class="container mx-auto flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mr-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M5 11m0 2a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z"></path>
                <path d="M12 16m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0"></path>
                <path d="M8 11v-4a4 4 0 0 1 8 0v4"></path>
            </svg>

            <span class="md:hidden">Ready-only</span>
            <span class="hidden md:inline">This is a read-only demo. Changes to dashboards are ignored.</span>

            <a href="https://github.com/chartello/chartello" class="flex items-center ml-auto">
                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1" width="24" height="24" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"></path>
                </svg>

                View on Github
            </a>
        </div>
    </div>

    <script src="{{ mix('js/app.js', 'vendor/chartello') }}"></script>
</body>
</html>
