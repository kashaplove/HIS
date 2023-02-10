@extends('template.main')

@section('title', 'Умный доктор')

@section('content_title',"Прогнозирование для пациента: " . $patient->name)
@section('breadcrumbs')

<ol class="breadcrumb">
    <li><a href="{{route('dash')}}"><i class="fas fa-tachometer-alt"></i>Главная</a></li>
    <li class="active">Прогнозирование</li>
</ol>
@endsection

@section('main_content')


<style>
    @media print {

        .no-print,
        .no-print * {
            display: none !important;
        }
    }
</style>

<section class="content">

    <div class="row">
        <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border no-print ">
                    <h3 class="box-title">{{__('Прогноз')}}</h3>
                </div>
                <!-- /.box-header -->

                <!-- form start -->
                <form class="form-horizontal">

                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <h2>Ключевые данные о пациенте</h2>
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                                       aria-describedby="example1_info">
                                    <tbody>
                                        <tr>
                                            <td>ФИО пациента</td>
                                            <td>{{ $patient->name }}</td>

                                        </tr>
                                        <tr>
                                            <td>Ответственный врач</td>
                                            <td>Врач-невролог Роман Кашапов</td>
                                        </tr>
                                        <tr>
                                            <td>Пол</td>
                                            <td>{{ $patient->sex }}</td>
                                        </tr>
                                        <tr>
                                            <td>Возраст</td>
                                            <td>56</td>
                                        </tr>
                                        <tr>
                                            <td>Диагноз</td>
                                            <td>{{ $patient->nationality }}</td>
                                        </tr>
                                        <tr>
                                            <td>Вес</td>
                                            <td>85</td>
                                        </tr>
                                        <tr>
                                            <td>Рост</td>
                                            <td>178</td>
                                        </tr>
                                        <tr>
                                            <td>Наличие диагноза у родителей</td>
                                            <td>Нет</td>
                                        </tr>
                                        <tr>
                                            <td>Признаки</td>
                                            <td>Паркинсонизм, характеризующийся двусторонней и симметричной брадикинезией с преобладанием аксиальной ригидности и отсутствием реакции на препараты леводопы. Глазодвигательные нарушения: парез вертикального взора</td>
                                        </tr>
                                        <tr>
                                            <td>Начало лечения</td>
                                            <td>29.11.2022</td>
                                        </tr>
                                        <tr>
                                            <td>Лечение</td>
                                            <td>Поддерживающая терапия. Амантадин</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-1">

                            </div>
                            <div class="col-sm-5">
                                <h2>Результаты прогноза</h2>
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                                       aria-describedby="example1_info">
                                    <tbody>
                                    <tr>
                                        <td>Выживаемость</td>
                                        <td class="text-danger text-bold">10%</td>
                                    </tr>
                                    <tr>
                                        <td>С учетом данных с таким диагнозом пациенты живут еще</td>
                                        <td>7 лет</td>
                                    </tr>
                                    <tr>
                                        <td>Стандартное лечение при данном диагнозе</td>
                                        <td>Амантадин. Коэнзим Q10 на протяжении первых 6 недель приема</td>
                                    </tr>
                                    </tbody>
                                </table>

                                <h2>Рекомендации по лечению</h2>
                                <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                                       aria-describedby="example1_info">
                                    <tbody>
                                    <tr>
                                        <td>Леводопа 100—200 мг 3—4 раза в день</td>
                                        <td>Эффективность <span class="text-success text-bold">35%</span></td>
                                    </tr>
                                    <tr>
                                        <td>Амантадин 100—200 мг 3 раза в день</td>
                                        <td>Эффективность <span class="text-success text-bold">20%</span></td>
                                    </tr>
                                    <tr>
                                        <td>Амитриптилин 75—150 мг 1 раз в день (при окуломоторном дефиците)</td>
                                        <td>Эффективность <span class="text-success text-bold">35%</span></td>
                                    </tr>
                                    <tr>
                                        <td>Золпидем 5—10 мг 1 раз в день (при нарушение сна)</td>
                                        <td>Эффективность <span class="text-success text-bold">20%</span></td>
                                    </tr>
                                    </tbody>
                                </table>

                                <div class="text-danger">
                                    Заболевание считается неизлечимым. Данные лекарства могут снять болезненные симптомы и продлить жизнь пациента на срок до 1 года.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-footer -->
                </form>
            </div>
            <!-- /.box -->
        </div>

    </div>
    <!-- /.row -->


</section>
<script>
    function myFunction() {
                var table = document.getElementById("myTable");
                var row = table.insertRow(2);

                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                var cell4 = row.insertCell(3);
                var cell5 = row.insertCell(4);

                var input="<input style='border: 0px none' type='text'>";
                cell1.innerHTML = input;
                cell2.innerHTML = input;
                cell3.innerHTML = input;
                cell4.innerHTML = input;
                cell5.innerHTML = input;
            }

            function myFunction2() {
            var table = document.getElementById("myTable2");
            var row = table.insertRow(2);

            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            var cell4 = row.insertCell(3);
            var cell5 = row.insertCell(4);

            var input="<input style='border: 0px none' type='text'>";
            cell1.innerHTML = input;
            cell2.innerHTML = input;
            cell3.innerHTML = input;
            cell4.innerHTML = input;
            cell5.innerHTML = input;
            }
</script>
@endsection
