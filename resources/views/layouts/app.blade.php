<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')



        <div class="px-2 py-5 mx-auto max-w-7xl ">
            <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8">
                @php
                    $routePrefix = \Illuminate\Support\Facades\Route::current()->getPrefix();
                    $routePrefix = str_replace('/', '', $routePrefix);

                @endphp
                @if (request()->is($routePrefix . '/dashboard'))
                    <div
                        class=" lg:col-span-3 mb-5 relative flex items-center justify-between rounded-lg p-5 sm:p-6 lg:p-7  bg-orange-200 pb-8 @4xl:col-span-2 @7xl:col-span-8 dark:bg-gray-100/30 lg:pb-9">
                        <div class="@2xl:max-w-[calc(100%-340px)] ">
                            <h2 class="mb-2 text-2xl font-bold text-blue-900 rizzui-title-h2 sm:mb-3 md:text-3xl">
                                {{ config('app.name', 'Laravel') }}</h2>
                            <p class="rizzui-text-p font-normal  text-sm leading-[1.6] text-gray-900  sm:text-base ">
                                The Development-Smart Innovation through Research in Agriculture (DeSIRA) Project is a
                                five-year EU-funded initiative aimed at improving productivity, profitability, and
                                sustainability of agriculture and food systems in Malawi. Implemented in 10 districts
                                across
                                all three agroecological zones, the project develops climate-smart, integrated
                                technological
                                innovations tailored to local conditions and smallholder farmers’ realities. Its key
                                objectives include developing climate-resilient technologies, understanding constraints
                                to
                                adoption, and informing policymakers on scaling strategies. Led by the International
                                Potato
                                Center (CIP), the project is implemented by eight CGIAR centers (CIP, Alliance
                                Bioversity-CIAT, CIMMYT, ICRAF, IFPRI, ICRISAT, IITA, and WFC) and two European partners
                                (University of Liège and CIRAD) in collaboration with Malawi’s Department of
                                Agricultural
                                Research Services (DARS).</p><a class="inline-flex"
                                href="/ecommerce/products/create"></a>
                        </div>

                    </div>
                @endif
                <div>
                    <x-sidebar-nav />

                </div>


                <div class="h-full rounded lg:col-span-2">

                    <main>
                        {{ $slot }}
                    </main>
                </div>
            </div>
        </div>



        <!-- Page Content -->

    </div>

    @stack('scripts')
</body>

</html>
