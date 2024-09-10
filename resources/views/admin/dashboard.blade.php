{{-- @extends('admin.layouts.admin')

@section('content')
    <!-- page content -->
    <!-- top tiles -->
    <div class="row tile_count">
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-users"></i> {{ __('views.admin.dashboard.count_0') }}</span>
            <div class="count green">{{ $counts['users'] }}</div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-address-card"></i> {{ __('views.admin.dashboard.count_1') }}</span>
            <div>
                <span class="count green">{{  $counts['users'] - $counts['users_unconfirmed'] }}</span>
                <span class="count">/</span>
                <span class="count red">{{ $counts['users_unconfirmed'] }}</span>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-user-times "></i> {{ __('views.admin.dashboard.count_2') }}</span>
            <div>
                <span class="count green">{{  $counts['users'] - $counts['users_inactive'] }}</span>
                <span class="count">/</span>
                <span class="count red">{{ $counts['users_inactive'] }}</span>
            </div>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
            <span class="count_top"><i class="fa fa-lock"></i> {{ __('views.admin.dashboard.count_3') }}</span>
            <div>
                <span class="count green">{{  $counts['protected_pages'] }}</span>
            </div>
        </div>
    </div>
    <!-- /top tiles -->

    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div id="log_activity" class="dashboard_graph">

                <div class="row x_title">
                    <div class="col-md-6">
                        <h3>{{ __('views.admin.dashboard.sub_title_0') }}</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="date_piker pull-right"
                             style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span class="date_piker_label">
                                {{ \Carbon\Carbon::now()->addDays(-6)->format('F j, Y') }} - {{ \Carbon\Carbon::now()->format('F j, Y') }}
                            </span>
                            <b class="caret"></b>
                        </div>
                    </div>
                </div>

                <div class="col-md-9 col-sm-9 col-xs-12">
                    <div class="chart demo-placeholder" style="width: 100%; height:460px;"></div>
                </div>


                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                    <div class="x_title">
                        <h2>{{ __('views.admin.dashboard.sub_title_1') }}</h2>
                        <div class="clearfix"></div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-6">
                        <div>
                            <p>{{ __('views.admin.dashboard.log_level_0') }}</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar log-emergency" role="progressbar" data-transitiongoal="0"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>{{ __('views.admin.dashboard.log_level_1') }}</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar log-alert" role="progressbar" data-transitiongoal="0"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>{{ __('views.admin.dashboard.log_level_2') }}</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar log-critical" role="progressbar" data-transitiongoal="0"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>{{ __('views.admin.dashboard.log_level_3') }}</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="asdasdasd"></div>
                                    <div class="progress-bar log-error" role="progressbar" data-transitiongoal="0"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>{{ __('views.admin.dashboard.log_level_4') }}</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar log-warning" role="progressbar" data-transitiongoal="0"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>{{ __('views.admin.dashboard.log_level_5') }}</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar log-notice" role="progressbar" data-transitiongoal="0"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>{{ __('views.admin.dashboard.log_level_6') }}</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar log-info" role="progressbar" data-transitiongoal="0"></div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>{{ __('views.admin.dashboard.log_level_7') }}</p>
                            <div class="">
                                <div class="progress progress_sm" style="width: 76%;">
                                    <div class="progress-bar log-debug" role="progressbar" data-transitiongoal="0"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>

    </div>
    <br />

    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div id="registration_usage" class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                    <h2>{{  __('views.admin.dashboard.sub_title_2') }}</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-wrench"></i>
                            </a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="" style="width:100%">
                        <tr>
                            <th></th>
                            <th>
                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                                    <p class="">{{  __('views.admin.dashboard.sub_title_3') }}</p>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                                    <p class="">{{  __('views.admin.dashboard.sub_title_4') }}</p>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <canvas class="canvasChart" height="140" width="140" style="margin: 15px 10px 10px 0">
                                </canvas>
                            </td>
                            <td>
                                <table class="tile_info">
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square aero"></i>
                                                <span class="tile_label">
                                                     {{ __('views.admin.dashboard.source_0') }}
                                                </span>
                                            </p>
                                        </td>
                                        <td id="registration_usage_from"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square red"></i>
                                                <span class="tile_label">
                                                    {{ __('views.admin.dashboard.source_1') }}
                                                </span>
                                            </p>
                                        </td>
                                        <td id="registration_usage_google"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square blue"></i>
                                                <span class="tile_label">
                                                    {{ __('views.admin.dashboard.source_2') }}
                                                </span>
                                            </p>
                                        </td>
                                        <td id="registration_usage_facebook"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <p><i class="fa fa-square grren"></i>
                                                <span class="tile_label">
                                                     {{ __('views.admin.dashboard.source_3') }}
                                                </span>
                                            </p>
                                        </td>
                                        <td id="registration_usage_twitter"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @parent
    {{ Html::script(mix('assets/admin/js/dashboard.js')) }}
@endsection

@section('styles')
    @parent
    {{ Html::style(mix('assets/admin/css/dashboard.css')) }}
@endsection --}}


@extends('admin.layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="p-10 bg-[#F1F5F9] min-h-[calc(100vh-80px)]">
        <div class="grid grid-cols-5 gap-4">
            <div class="bg-white shadow-lg w-full p-5">
                <div class="size-12 rounded-full bg-gray-100 flex justify-center items-center">
                    <box-icon type='solid' name='report' color="#3C50E0"></box-icon>
                </div>
                <div class="text-2xl mt-5 text-gray-800 font-semibold">23</div>
                <div class="text-sm mt-2 text-gray-500">Total laporan</div>
            </div>
            <div class="bg-white shadow-lg w-full p-5">
                <div class="size-12 rounded-full bg-gray-100 flex justify-center items-center">
                    <box-icon type='solid' name='time-five' color="#a85799"></box-icon>
                </div>
                <div class="text-2xl mt-5 text-gray-800 font-semibold">23</div>
                <div class="text-sm mt-2 text-gray-500">Belum diverifikasi</div>
            </div>
            <div class="bg-white shadow-lg w-full p-5">
                <div class="size-12 rounded-full bg-gray-100 flex justify-center items-center">
                    <box-icon type='solid' name='badge-check' color="#a4d827"></box-icon>
                </div>
                <div class="text-2xl mt-5 text-gray-800 font-semibold">23</div>
                <div class="text-sm mt-2 text-gray-500">Sudah diverifikasi</div>
            </div>
            <div class="bg-white shadow-lg w-full p-5">
                <div class="size-12 rounded-full bg-gray-100 flex justify-center items-center">
                    <box-icon name='target-lock' color="#5ca36e"></box-icon>
                </div>
                <div class="text-2xl mt-5 text-gray-800 font-semibold">23</div>
                <div class="text-sm mt-2 text-gray-500">Selesai</div>
            </div>
            <div class="bg-white shadow-lg w-full p-5">
                <div class="size-12 rounded-full bg-gray-100 flex justify-center items-center">
                    <box-icon name='x' color="#e62f19"></box-icon>
                </div>
                <div class="text-2xl mt-5 text-gray-800 font-semibold">23</div>
                <div class="text-sm mt-2 text-gray-500">Dibatalkan</div>
            </div>
        </div>

        <div class="bg-white mt-10 shadow-lg rounded-sm border bg-white p-10 col-span-8">
            <div class="flex flex-wrap items-start justify-between gap-3 sm:flex-nowrap">
                <div class="whitespace-nowrap flex gap-5 items-center">
                    <div class="text-gray-800 font-semibold text-lg">Total laporan bulanan dan tahunan</div>
                </div>
                <div class="flex w-full max-w-45 justify-end">
                    <div class="inline-flex items-center rounded-md bg-gray-100 p-1.5">
                        <button class="rounded px-3 py-1 text-xs bg-white font-medium text-black hover:bg-white">
                            Monthly
                        </button>
                        <button class="rounded px-3 py-1 text-xs font-medium text-black hover:bg-white">
                            Yearly
                        </button>
                    </div>
                </div>
            </div>
            <div>
                <div id="chartOne" class="-ml-5"></div>
            </div>
        </div>

        <div class="grid grid-cols-2 gap-5">
            <div class="mt-10 bg-white p-10 shadow-lg border">

                <div class="text-gray-800 font-semibold text-lg mb-10">Total laporan per-kategori</div>

                <div class="mb-2">
                    <div id="chartThree" class="flex justify-center mx-auto"></div>
                </div>
                <div class="flex flex-wrap items-center justify-center -mx-8 gap-y-3">
                    <div class="w-full px-8 sm:w-1/2">
                        <div class="flex items-center w-full">
                            <span class="block w-full h-3 mr-2 rounded-full max-w-3 bg-primary"></span>
                            <p class="flex justify-between w-full text-sm font-medium text-black dark:text-white">
                                <span> Desktop </span>
                                <span> 65% </span>
                            </p>
                        </div>
                    </div>
                    <div class="w-full px-8 sm:w-1/2">
                        <div class="flex items-center w-full">
                            <span class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#6577F3]"></span>
                            <p class="flex justify-between w-full text-sm font-medium text-black dark:text-white">
                                <span> Tablet </span>
                                <span> 34% </span>
                            </p>
                        </div>
                    </div>
                    <div class="w-full px-8 sm:w-1/2">
                        <div class="flex items-center w-full">
                            <span class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#8FD0EF]"></span>
                            <p class="flex justify-between w-full text-sm font-medium text-black dark:text-white">
                                <span> Mobile </span>
                                <span> 45% </span>
                            </p>
                        </div>
                    </div>
                    <div class="w-full px-8 sm:w-1/2">
                        <div class="flex items-center w-full">
                            <span class="mr-2 block h-3 w-full max-w-3 rounded-full bg-[#0FADCF]"></span>
                            <p class="flex justify-between w-full text-sm font-medium text-black dark:text-white">
                                <span> Unknown </span>
                                <span> 12% </span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-10 bg-white p-10 shadow-lg border">
                <div class="text-gray-800 font-semibold text-lg mb-10">Daerah dengan laporan terbanyak</div>
                <table class="w-full text-sm">
                    <thead>
                        <tr>
                            <th class="bg-gray-100 text-start font-medium text-gray-600 p-3">Daerah</th>
                            <th class="bg-gray-100 text-start font-medium text-gray-600 p-3">Jumlah laporan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-b border-gray-100">
                            <td class="border-b-2 border-gray-100 p-3">Jawa Tengah</td>
                            <td class="border-b-2 border-gray-100 p-3">30</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="border-b-2 border-gray-100 p-3">Jawa Tengah</td>
                            <td class="border-b-2 border-gray-100 p-3">30</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="border-b-2 border-gray-100 p-3">Jawa Tengah</td>
                            <td class="border-b-2 border-gray-100 p-3">30</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="border-b-2 border-gray-100 p-3">Jawa Tengah</td>
                            <td class="border-b-2 border-gray-100 p-3">30</td>
                        </tr>
                        <tr class="border-b border-gray-100">
                            <td class="border-b-2 border-gray-100 p-3">Jawa Tengah</td>
                            <td class="border-b-2 border-gray-100 p-3">30</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <script>
        const chartOneOptions = {
            series: [{
                name: "Jumlah Laporan",
                data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30, 45],
            }],
            legend: {
                show: false,
                position: "top",
                horizontalAlign: "left",
            },
            colors: ["#3C50E0", "#80CAEE"],
            chart: {
                fontFamily: "Satoshi, sans-serif",
                height: 335,
                type: "area",
                dropShadow: {
                    enabled: true,
                    color: "#623CEA14",
                    top: 10,
                    blur: 4,
                    left: 0,
                    opacity: 0.1,
                },

                toolbar: {
                    show: false,
                },
            },
            responsive: [{
                    breakpoint: 1024,
                    options: {
                        chart: {
                            height: 300,
                        },
                    },
                },
                {
                    breakpoint: 1366,
                    options: {
                        chart: {
                            height: 350,
                        },
                    },
                },
            ],
            stroke: {
                width: [2, 2],
                curve: "straight",
            },

            markers: {
                size: 0,
            },
            labels: {
                show: false,
                position: "top",
            },
            grid: {
                xaxis: {
                    lines: {
                        show: true,
                    },
                },
                yaxis: {
                    lines: {
                        show: true,
                    },
                },
            },
            dataLabels: {
                enabled: false,
            },
            markers: {
                size: 4,
                colors: "#fff",
                strokeColors: ["#3056D3", "#80CAEE"],
                strokeWidth: 3,
                strokeOpacity: 0.9,
                strokeDashArray: 0,
                fillOpacity: 1,
                discrete: [],
                hover: {
                    size: undefined,
                    sizeOffset: 5,
                },
            },
            xaxis: {
                type: "category",
                categories: [
                    "Sep",
                    "Oct",
                    "Nov",
                    "Dec",
                    "Jan",
                    "Feb",
                    "Mar",
                    "Apr",
                    "May",
                    "Jun",
                    "Jul",
                    "Aug",
                ],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
            },
            yaxis: {
                title: {
                    style: {
                        fontSize: "0px",
                    },
                },
                min: 0,
                max: 100,
            },
        };

        const chartOne = new ApexCharts(
            document.querySelector("#chartOne"),
            chartOneOptions
        );

        chartOne.render();

        const chartThreeOptions = {
            series: [65, 34, 45, 12],
            chart: {
                type: "donut",
                width: 380,
            },
            colors: ["#3C50E0", "#6577F3", "#8FD0EF", "#0FADCF"],
            labels: ["Desktop", "Tablet", "Mobile", "Unknown"],
            legend: {
                show: false,
                position: "bottom",
            },

            plotOptions: {
                pie: {
                    donut: {
                        size: "65%",
                        background: "transparent",
                    },
                },
            },

            dataLabels: {
                enabled: false,
            },
            responsive: [{
                breakpoint: 640,
                options: {
                    chart: {
                        width: 200,
                    },
                },
            }, ],
        };

        const chartThree = new ApexCharts(
            document.querySelector("#chartThree"),
            chartThreeOptions
        );

        chartThree.render();
    </script>
@endsection
