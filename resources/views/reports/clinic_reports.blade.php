@extends('template.main')

@section('title', $title)

@section('content_title',"Прогнозирование")
@section('breadcrumbs')

<ol class="breadcrumb">
    <li><a href="{{route('dash')}}"><i class="fas fa-tachometer-alt"></i>Главная</a></li>
    <li class="active">Прогнозирование</li>
</ol>
@endsection

@section('main_content')
<?php $user = Auth::user();
$name = $user->name;
$user_type =$user->user_type;
$image_path =$user->img_path;
$outlet = 'Rural Ayruvedic Hospital Kesbawa'?>


<section class="content">

    <div class="box box-danger">
        <div class="box-header">
            <h3 class="box-title ">Прогнозирование</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example1" class="table table-bordered table-striped dataTable" role="grid"
                            aria-describedby="example1_info">
                            <thead>
                                <tr>
                                    <th>ФИО</th>
                                    <th>Ответственный врач</th>
                                    <th>Пол</th>
                                    <th>Диагноз</th>
                                    <th>Действия</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($patients as $patient)
                                <tr>
                                    <td>{{ $patient->name }}</td>
                                    <td>Врач-невролог Роман Кашапов</td>
                                    <td>{{ $patient->sex }}</td>
                                    <td>{{ $patient->nationality }}</td>
                                    <td><a href="{{ route('mon_stat_report', $patient->id) }}" class="btn btn-warning">
                                            Получить прогноз
                                        </a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- /.box-body -->
            {{-- print priview --}}
        </div>
    </div>
    <!-- /.row -->

</section>

@endsection
@section('optional_scripts')
<script>
    $(function () {

        $('#example1').DataTable({
            'paging': true,
            'lengthChange': true,
            'searching': true,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })

</script>
@endsection
