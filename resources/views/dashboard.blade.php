<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="px-2">
        <div class=" mb-5 relative flex items-center justify-between rounded-lg p-5 sm:p-6 lg:p-7  bg-blue-900 pb-8 @4xl:col-span-2 @7xl:col-span-8 dark:bg-gray-100/30 lg:pb-9"
            bis_skin_checked="1">
            <div class="@2xl:max-w-[calc(100%-340px)]" bis_skin_checked="1">
                <h2 class="mb-2 text-2xl font-bold text-orange-200 rizzui-title-h2 sm:mb-3 md:text-3xl">Good {{
                    Carbon\Carbon::now()->format('H') < 12 ? 'morning' :
                    (Carbon\Carbon::now()->format('H') < 18 ? 'afternoon' : 'evening')
                }}, {{ Auth::user()->name }} </h2>
                <p
                    class="rizzui-text-p font-normal  text-sm leading-[1.6] text-gray-100  sm:text-base ">
                    Here’s What happening on your dashboard today. <br> See the statistics and key metrics about your data.</p><a class="inline-flex"
                    href="/ecommerce/products/create"></a>
            </div>
            <div bis_skin_checked="1">
                <div class="absolute -bottom-6 end-4  w-[300px] @2xl:block lg:w-[320px] 2xl:-bottom-7 2xl:w-[230px]"
                    bis_skin_checked="1">
                    <div class="relative" bis_skin_checked="1"><img alt="Welcome shop image form freepik" loading="lazy"
                            width="2000" height="2000" decoding="async" data-nimg="1"
                            class="dark:brightness-95 dark:drop-shadow-md" style="color: transparent;"
                           src="{{ asset('assets/img/swpot.png') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div class="p-6 text-gray-900 dark:text-gray-100">
                {{ __("You're logged in!") }}
            </div>
        </div>

    </div>
</x-app-layout>
