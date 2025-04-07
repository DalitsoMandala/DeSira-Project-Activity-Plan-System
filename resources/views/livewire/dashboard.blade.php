<div>




    <section class=" banner">
        <div
            class=" mb-5 relative flex items-center justify-between rounded-lg p-5 sm:p-6 lg:p-7  bg-blue-900 pb-8 @4xl:col-span-2 @7xl:col-span-8 dark:bg-gray-100/30 lg:pb-9">
            <div class="@2xl:max-w-[calc(100%-340px)]">
                <h2 class="mb-2 text-2xl font-bold text-orange-200 rizzui-title-h2 sm:mb-3 md:text-3xl">Good
                    {{ Carbon\Carbon::now()->format('H') < 12
                        ? 'morning'
                        : (Carbon\Carbon::now()->format('H') < 18
                            ? 'afternoon'
                            : 'evening') }},
                    {{ Auth::user()->name }} </h2>
                <p class="rizzui-text-p font-normal  text-sm leading-[1.6] text-gray-100  sm:text-base ">
                    Here’s What happening on your dashboard today. <br> See the statistics and key metrics about your
                    data.</p><a class="inline-flex" href="/ecommerce/products/create"></a>
            </div>
            <div>
                <div
                    class="absolute -bottom-6 end-4 hidden  w-[300px] md:block lg:w-[300px] 2xl:-bottom-3 2xl:w-[230px]">
                    <div class="relative"><img alt="Welcome shop image form freepik" loading="lazy" width="2000"
                            height="2000" decoding="async" data-nimg="1"
                            class="dark:brightness-95 dark:drop-shadow-md" style="color: transparent;"
                            src="{{ asset('assets/img/swpot.png') }}">
                    </div>
                </div>
            </div>
        </div>




    </section>
    <section class="statistics">
        <div class="max-w-6xl mx-auto space-y-8">


            <!-- Summary Cards -->
            <div class="grid grid-cols-2 gap-4 md:grid-cols-3">

                <div class="p-5 bg-white rounded-lg border-muted lg:p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div
                                class="flex items-center justify-center bg-blue-200 rounded-lg lg:h-12 lg:w-12 w-11 h-11">
                                <i class="mx-2 ri-team-line"></i>
                            </div>
                            <div class="ps-3">
                                <p class="rizzui-text-p font-normal mb-0.5 text-gray-500">Total Males</p>
                                <p
                                    class="text-lg font-semibold text-gray-900 rizzui-text-p font-lexend 2xl:xl:text-xl dark:text-gray-700">
                                    2,317</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5 bg-white rounded-lg border-muted lg:p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div
                                class="flex items-center justify-center bg-red-200 rounded-lg lg:h-12 lg:w-12 w-11 h-11">
                                <i class="mx-2 ri-team-line"></i>
                            </div>
                            <div class="ps-3">
                                <p class="rizzui-text-p font-normal mb-0.5 text-gray-500">Total Females</p>
                                <p
                                    class="text-lg font-semibold text-gray-900 rizzui-text-p font-lexend 2xl:xl:text-xl dark:text-gray-700">
                                    2,688</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-5 bg-white rounded-lg border-muted lg:p-6">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <div
                                class="flex items-center justify-center bg-gray-200 rounded-lg lg:h-12 lg:w-12 w-11 h-11">
                                <i class="mx-2 ri-team-line"></i>
                            </div>
                            <div class="ps-3">
                                <p class="rizzui-text-p font-normal mb-0.5 text-gray-500">Total Farmers</p>
                                <p
                                    class="text-lg font-semibold text-gray-900 rizzui-text-p font-lexend 2xl:xl:text-xl dark:text-gray-700">
                                    5,005</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-5 bg-white rounded-lg border-muted lg:p-6 md:col-span-3">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center">
                                <div
                                    class="flex items-center justify-center bg-blue-900 rounded-lg lg:h-12 lg:w-12 w-11 h-11">
                                    <i class="mx-2 text-white ri-bar-chart-line"></i>
                                </div>
                                <div class="ps-3">
                                    <p class="rizzui-text-p font-normal mb-0.5 text-gray-500">Top Activity</p>
                                    <p
                                        class="text-lg font-semibold text-gray-900 rizzui-text-p font-lexend 2xl:xl:text-xl dark:text-gray-700">
                                        Participatory Evaluation</p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="flex items-center justify-center px-5 font-bold text-white bg-blue-900 rounded-lg lg:h-12 h-11">
                            <i class="text-green-200 ri-arrow-right-up-long-line"></i> 5288
                        </div>
                    </div>

                </div>

            </div>

            <!-- ApexCharts Bar Chart -->
            <div class="p-6 bg-white shadow rounded-xl" x-data="{
                init() {
                        this.renderChart();
                    },
                    renderChart() {
                        const options = {
                            chart: {
                                type: 'bar',
                                height: 350,
                                toolbar: {
                                    show: false
                                }
                            },
                            series: [{
                                    name: 'Male',
                                    data: [665, 1127, 374, 151]
                                },
                                {
                                    name: 'Female',
                                    data: [762, 1416, 308, 202]
                                }
                            ],
                            xaxis: {
                                categories: ['Hosting', 'Participatory Evalulation', 'Economic Analysis',
                                    'Field Days'
                                ],
                                labels: {
                                    style: {
                                        fontSize: '14px'
                                    }
                                }
                            },
                            colors: ['#BFDBFE', '#FECACA'],
                            plotOptions: {
                                bar: {
                                    horizontal: false,
                                    columnWidth: '55%',
                                    endingShape: 'rounded'
                                }
                            },
                            dataLabels: {
                                enabled: false
                            },
                            legend: {
                                position: 'top'
                            }
                        };
            
                        const chart = new ApexCharts(document.querySelector('#barChart'), options);
                        chart.render();
                    }
            
            }">
                <h2 class="mb-4 text-xl font-semibold">Farmers by Activity & Gender</h2>
                <div id="barChart" class="w-full"></div>
            </div>
        </div>
    </section>
</div>
@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
@endpush
