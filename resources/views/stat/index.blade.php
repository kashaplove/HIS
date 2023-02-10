@extends('template.main')

@section('title', $title)

@section('content_title',"Общая статистика и аналитика за ".$year." год")
@section('breadcrumbs')

<ol class="breadcrumb">
    <li><a href="{{route('dash')}}"><i class="fas fa-tachometer-alt"></i>Главная</a></li>
    <li class="active">Статистика</li>
</ol>
@endsection

@section('main_content')
<script src="bower_components/chart.js/dist/Chart.js"></script>

@if ($year==date('Y'))

<div class="row">
    <div class="col-md-12">
        <h4>Данные за {{date('F, Y')}}</h4><br>
    </div>
</div>

<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fas fa-user-injured"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Выписанные пациенты</span>
                <span class="info-box-number">{{$out_patients_this_month}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fas fa-procedures"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Текущие пациенты</span>
                <span class="info-box-number">{{$in_patients_this_month}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-red "><i class="fas fa-user-injured"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Новые пациенты</span>
                <span class="info-box-number">{{$new_patient_regs_this_month}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="far fa-hospital"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Всего обследований</span>
                <span class="info-box-number">{{$total_checkings_this_month}}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
@endif

<div class="row">
    <div class="col-md-12">
        <div class="box box-dark">
            <div class="box-header with-border">
                <h3 class="box-title">Статистика по пациентам за {{$year}} год</h3>
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                            class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div>
                    <p class="h4">Все приведенные ниже графики отображают статистику за  {{$year}} год, для просмотра другого периода выберите другой год</p>
                    <div class="col-xs-4 m-0 p-0">
                        <form class="m-0 p-0 mb-3 mt-3" method="POST" action="{{route('stats_old')}}">
                            @csrf
                            <label for="year">Выбрать другой год</label>
                            <div class="input-group input-group">
                                <select class="form-control" name="year" id="year">
                                    <option @if($year==2018) selected @endif value="2018">2018</option>
                                    <option @if($year==2019) selected @endif value="2019">2019</option>
                                    <option @if($year==2020) selected @endif value="2020">2020</option>
                                    <option @if($year==2021) selected @endif value="2021">2021</option>
                                    <option @if($year==2022) selected @endif value="2022">2022</option>
                                    <option @if($year==2023) selected @endif value="2023">2023</option>
                                </select>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-info btn-flat">Получить данные <i
                                            class="fas fa-arrow-right"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Ежемесячная посещаемость амбулаторных пациентов</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="chart">
                                    <canvas id="outPatientMonthlyStat" width="400" height="100"></canvas>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>

                <script>
                    var ctx = document.getElementById("outPatientMonthlyStat").getContext("2d");

                var OutPatientData = {
                    labels: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                    datasets: [
                        {
                            label: "Мужчины",
                            backgroundColor: "RGBA(0,83,156,0.81)",
                            data: [
                                @php
                                use App\Appointment;
                                $i=1;
                                while($i<13){
                                    echo (Appointment::getMonthCount(2023,$i,'Мужчины','OUT'));
                                    echo (",");
                                    $i++;
                                }
                                @endphp
                            ]
                        },
                        {
                            label: "Женщины",
                            backgroundColor: "RGBA(206,91,120,0.51)",
                            data: [
                                @php
                                $i=1;
                                while($i<13){
                                    echo (Appointment::getMonthCount(2023,$i,'Женщины','OUT'));
                                    echo (",");
                                    $i++;
                                }
                                @endphp
                            ]
                        },
                        {
                            label: "Все",
                            backgroundColor: "RGBA(63,191,88,0.82)",
                            data: [
                                @php
                                $i=1;
                                while($i<13){
                                    echo (Appointment::getTotalCount(2023,$i,'OUT'));
                                    echo (",");
                                    $i++;
                                }
                                @endphp
                            ]
                        }
                    ]
                };

                var outPatientMonthlyStat = new Chart(ctx, {
                    type: 'bar',
                    data: OutPatientData,
                    options: {
                        title:{
                            text:"Ежемесячная посещаемость амбулаторных пациентов",
                            display:true,
                            position:'top',
                            fontSize:16,
                        },
                        barValueSpacing: 10,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    min: 0,
                                }
                            }]
                        }
                    }
                });
                </script>

                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Ежемесячный прием стационарных больных</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="chart">
                                    <canvas id="inPatientMonthlyStat" width="400" height="100"></canvas>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>

                <script>
                    var ctx = document.getElementById("inPatientMonthlyStat").getContext("2d");

                var InPatientData = {
                    labels: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                    datasets: [
                        {
                            label: "Мужчины",
                            backgroundColor: "RGBA(0,83,156,0.81)",
                            data: [
                                @php
                                $i=1;
                                while($i<13){
                                    echo (Appointment::getMonthCount(2023,$i,'Мужчины','IN'));
                                    echo (",");
                                    $i++;
                                }
                                @endphp
                            ]
                        },
                        {
                            label: "Женщины",
                            backgroundColor: "RGBA(206,91,120,0.51)",
                            data: [
                                @php
                                $i=1;
                                while($i<13){
                                    echo (Appointment::getMonthCount(2023,$i,'Женщины','IN'));
                                    echo (",");
                                    $i++;
                                }
                                @endphp
                            ]
                        },
                        {
                            label: "Все",
                            backgroundColor: "RGBA(63,191,88,0.82)",
                            data: [
                                @php
                                $i=1;
                                while($i<13){
                                    echo (Appointment::getTotalCount(2023,$i,'IN'));
                                    echo (",");
                                    $i++;
                                }
                                @endphp
                            ]
                        }
                    ]
                };

                var inPatientMonthlyStat = new Chart(ctx, {
                    type: 'bar',
                    data: InPatientData,
                    options: {
                        title:{
                            text:"Ежемесячный прием стационарных больных",
                            display:true,
                            position:'top',
                            fontSize:16,
                        },
                        barValueSpacing: 10,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    min: 0,
                                }
                            }]
                        }
                    }
                });
                </script>

                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Ежемесячная регистрация новых пациентов</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="chart">
                                    <canvas id="newRegsMonthlyStat" width="400" height="100"></canvas>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>


                <script>
                    var ctx = document.getElementById("newRegsMonthlyStat").getContext("2d");

                var newRegsMonthlyStat = {
                    labels: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
                    datasets: [
                        {
                            label: "Мужчины",
                            backgroundColor: "RGBA(0,83,156,0.81)",
                            data: [
                                @php
                                use App\Patients;
                                $i=1;
                                while($i<13){
                                    echo (Patients::regsMonth(2023,$i,'Мужчины'));
                                    echo (",");
                                    $i++;
                                }
                                @endphp
                            ]
                        },
                        {
                            label: "Женщины",
                            backgroundColor: "RGBA(206,91,120,0.51)",
                            data: [
                                @php
                                $i=1;
                                while($i<13){
                                    echo (Patients::regsMonth(2023,$i,'Женщины'));
                                    echo (",");
                                    $i++;
                                }
                                @endphp
                            ]
                        },
                        {
                            label: "Все",
                            backgroundColor: "RGBA(63,191,88,0.82)",
                            data: [
                                @php
                                $i=1;
                                while($i<13){
                                    echo (Patients::totalRegs(2023,$i));
                                    echo (",");
                                    $i++;
                                }
                                @endphp
                            ]
                        }
                    ]
                };

                var newRegsMonthlyStat = new Chart(ctx, {
                    type: 'bar',
                    data: newRegsMonthlyStat,
                    options: {
                        title:{
                            text:"Ежемесячная регистрация новых пациентов",
                            display:true,
                            position:'top',
                            fontSize:16,
                        },
                        barValueSpacing: 10,
                        scales: {
                            yAxes: [{
                                ticks: {
                                    min: 0,
                                }
                            }]
                        }
                    }
                });
                </script>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="box box-black">
            <div class="box-header with-border">
                <h3 class="box-title">Medicines Statistics For The Year {{$year}}</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                            class="fa fa-times"></i></button>
                </div>
            </div>
            <div class="box-body">
                <p class="h4 mb-4">Below charts show the detailed analysis about medicine usage of the hospital.</p>
                <p class="h4 mb-4">Change the year above to get analytics of previous years</p>

                <div class="row">
                    <div class="col-md-6">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Most Issued Medicines All Time</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="chart">
                                    <canvas id="medicineDougnet" width="400" height="200"></canvas>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="box box-success">
                            <div class="box-header with-border">
                                <h3 class="box-title">Most Prescribed Medicines ({{date('F, Y')}})</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                            class="fa fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                            class="fa fa-times"></i></button>
                                </div>
                            </div>
                            <div class="box-body">
                                <div class="chart">
                                    <canvas id="medicineDougnetMonth" width="400" height="200"></canvas>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
</div>


<script>
    var ctx = document.getElementById("medicineDougnet").getContext("2d");

    data = {
    datasets:
    [
        {
            data:
            [
            @foreach ($top_ten_meds as $medicine)
                @if($medicine->qty>0)
                {{$medicine->qty}},
                @endif
            @endforeach
            ],
            backgroundColor: [
                @foreach ($top_ten_meds as $medicine)
                    @if($medicine->qty>0)
                    "RGBA({{rand(22,210)}},{{rand(54,255)}},{{rand(0,200)}},1)",
                    @endif
                @endforeach
			]
        },

    ],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [


    @foreach ($top_ten_meds as $medicine)
        @if($medicine->qty>0)
            '{{$medicine->name_sinhala}}',
        @endif
    @endforeach

    ],

};


var myDoughnutChart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
                    display: true,
                    position:'bottom',
                    fontSize:16,
					text: 'Mostly Issued Medicines'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
});



var ctx = document.getElementById("medicineDougnetMonth").getContext("2d");

medicineDougnetMonth = {
    datasets:
    [
        {
            data:
            [
            @foreach ($this_month_meds as $medicine)
                @if($medicine->issues>0)
                {{$medicine->issues}},
                @endif
            @endforeach
            ],
            backgroundColor: [
                @foreach ($this_month_meds as $medicine)
                    @if($medicine->issues>0)
                    "RGBA({{rand(3,180)}},{{rand(0,90)}},{{rand(1,255)}},1)",
                    @endif
                @endforeach
			]
        },

    ],

    // These labels appear in the legend and in the tooltips when hovering different arcs
    labels: [


    @foreach ($this_month_meds as $medicine)
        @if($medicine->issues>0)
            '{{$medicine->name_sinhala}}',
        @endif
    @endforeach

    ],

};


var medicineDougnetMonthGraph = new Chart(ctx, {
    type: 'doughnut',
    data: medicineDougnetMonth,
    options: {
				responsive: true,
				legend: {
					position: 'top',
				},
				title: {
                    display: true,
                    position:'bottom',
                    fontSize:16,
					text: 'Mostly Issued Medicines'
				},
				animation: {
					animateScale: true,
					animateRotate: true
				}
			}
});
</script>

@endsection
@section('custom_style_sheets')
<link rel="stylesheet" href="bower_components/chart.js/dist/Chart.css">
@endsection

@section('optional_scripts')

@endsection
