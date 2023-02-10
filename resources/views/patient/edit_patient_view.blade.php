@extends('template.main')

@section('title', $title)

@section('content_title',"Главная")
@section('breadcrumbs')
<ol class="breadcrumb">
    <li><a href="#"><i class="fas fa-tachometer-alt"></i>Главная</a></li>
    <li class="active">Редактирование информации о пациенте</li>
</ol>

@endsection

@section('main_content')

    <div class="row">
            <!-- right column -->
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <!-- Horizontal Form -->
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__('Редактирование информации о пациенте')}}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->


                @if ($patient)
                <form class="form-horizontal" action="{{route('updatepatientdetails')}}" method="POST">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">{{__('ФИО')}}</label>
                            <div class="col-sm-10">
                                <input  value="{{$patient->name}}" type="text" required class="form-control" name="reg_pname"
                                    placeholder="Enter Patient Full Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">{{__('Номер полиса')}}</label>
                            <div class="col-sm-10">
                                <input  value="{{$patient->nic}}" type="text" required class="form-control" name="reg_pnic"
                                    placeholder="National Identity Card Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">{{__('Адрес')}}</label>
                            <div class="col-sm-10">
                                <input  type="text" value="{{$patient->address}}" required class="form-control" name="reg_paddress"
                                    placeholder="Enter Patient Address ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">{{__('Контактный номер')}}</label>
                            <div class="col-sm-10">
                                <input  value="{{$patient->telephone}}" type="tel" class="form-control" name="reg_ptel"
                                    placeholder="Patient Telephone Number">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">{{__('Место работы')}}</label>
                            <div class="col-sm-10">
                                <input  value="{{$patient->occupation}}" type="text" required class="form-control" name="reg_poccupation"
                                    placeholder="Enter Patient Occupation ">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">{{__('Диагноз')}}</label>
                            <div class="col-sm-10">
                                <input  value="{{$patient->nationality}}" type="text" required class="form-control" name="reg_poccupation"
                                        placeholder="Enter Patient Occupation ">
                            </div>
                        </div>

                        <!-- select -->
                        <div class="form-group">

                            <label class="col-sm-2 control-label">{{__('Пол')}}</label>
                            <div class="col-sm-2 mr-0 pr-0">
                                <input  value="{{$patient->sex}}" type="text" required class="form-control" name="reg_psex"
                                    placeholder="Enter Patient Occupation ">
                            </div>

                            <label class="col-sm-2 control-label">{{__('Дата рождения')}}<span style="color:red">*</span></label>
                            <div class="col-sm-3">
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input  value="{{$patient->bod}}" type="text" class="form-control pull-right" name="reg_pbd"
                                        placeholder="Birthday">
                                    </div>
                                </div>
                                <input readonly value="{{$patient->id}}" type="text" class="form-control pull-right" name="reg_pid" style="display:none">

                            <div class="col-sm-3">
                                        <button type="submit" class="btn btn-danger pull-right"><i class="fas fa-update"></i> Сохранить </button>
                                </div>

                        </div>


                    </div>

                </form>
                @endif
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>


@endsection
