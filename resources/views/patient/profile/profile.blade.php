@extends('template.main')

@section('title', $title)

@section('content_title',"Профиль пациента (".$patient->name.")")
@section('content_description',"")
@section('breadcrumbs')

<ol class="breadcrumb">
    <li><a href="{{route('dash')}}"><i class="fas fa-tachometer-alt"></i>Главная</a></li>
    <li class="active">Профиль пациента</li>
</ol>
@endsection
@section('main_content')

<div class="row">
    <div class="col-md-1"></div>

    <div class="col-md-10">
        <!-- Widget: user widget style 1 -->
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
                <h3 class="widget-user-username">{{ucwords($patient->name)}}</h3>
                <h5 class="widget-user-desc">ID : {{$patient->id}}</h5>
            </div>
            <div class="widget-user-image">
                <img class="img-circle" height="128px" width="128px" src="/dist/img/{{$patient->image}}"
                    alt="User Avatar">
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header"><span class="@if($status=='Активный') text-green @else
                                    text-danger @endif">{{$status}}</span></h5>
                            <span class="description-text">Статус</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 border-right">
                        <div class="description-block">
                            <h5 class="description-header">{{$hospital_visits}}</h5>
                            <span class="description-text">Посещения</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">{{$last_seen}}</h5>
                            <span class="description-text">Последнее посещение</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <!-- /.widget-user -->

    </div>
    <div class="col-md-1"></div>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Действия</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-sm-4">
                        @if(Auth::user()->user_type=='general')
                        <button type="button" onclick="goPrint()" class="btn btn-primary  pull-left"><i
                                class="far fa-id-card"></i>
                            Карточка пациента</button>

                        <script>
                            function goPrint(){
                                window.location.href="{{route('pregcard',$patient->id)}}"
                            }
                        </script>

                        @endif
                        @if(Auth::user()->user_type=="admin" && $status=="Активный")
                        <button type="button" onclick="go('delete')" class="btn btn-danger ml-2 pull-left"><i
                                class="far fa-id-card"></i>
                            Пометить как неактивного</button>
                        @elseif(Auth::user()->user_type=="admin" && $status=="Неактивный")

                        <button type="button" onclick="go('restore')" class="btn btn-success pull-left"><i
                                class="far fa-id-card"></i>
                            Пометить как активного</button>
                        @endif
                    </div>
                    <div style="align-content: center;justify-content: center;text-align: center"
                        class="col-sm-4 mx-auto text-center flex-center">
                        <form method="post" action="{{ route('editpatient') }}">
                            {{csrf_field()}}
                            <input type="hidden" name="reg_pid" value="{{$patient->id}}">
                            <button style="display:inline-block;align-content: center" class="btn btn-warning"><i
                                    class="fas fa-edit"></i> Редактировать</button>
                        </form>
                    </div>

                    <div class="col-sm-4">
                        @if(Auth::user()->user_type=="admin" || Auth::user()->user_type=="doctor")
                        <form action="">
                            <button type="button"
                                onclick="window.open('{{route('patientHistory',$patient->id)}}','myWin','scrollbars=yes,width=720,height=690,location=no').focus();"
                                class="btn btn-info pull-right"><i class="fas fa-history"></i> История болезни</button>
                        </form>
                        @endif
                    </div>
                </div>

            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-1"></div>
</div>

<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">

        <div class="box box-info" id="reginpatient2">
            <div class="box-header with-border">
                <h3 class="box-title">{{__('Информация о пациенте')}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form method="post" action="{{ route('editpatient') }}" class="form-horizontal">
                {{csrf_field()}}
                <input type="hidden" name="reg_pid" value="{{$patient->id}}">
                <div class="box-body">

                    <div class="form-group">
                        <label for="patient_id" class="col-sm-2 control-label">{{__('ID')}}</label>
                        <div class="col-sm-2">
                            <input type="text" value="{{$patient->id}}" readonly class="form-control" name="reg_pid"
                                id="patient_id">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">{{__('ФИО')}}</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$patient->name}}" readonly class="form-control" name="reg_pname"
                                id="patient_name" placeholder="Нет информации">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">{{__('Диагноз')}}</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ucfirst($patient->nationality)}}" readonly class="form-control"
                                   name="reg_ipbirthplace" placeholder="Нет информации">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">{{__('Номер полиса')}}</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$patient->nic}}" readonly class="form-control" name="reg_pnic"
                                id="patient_nic" placeholder="Нет информации">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">{{__('Адрес')}}</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{$patient->address}}" readonly class="form-control"
                                name="reg_paddress" id="patient_address" placeholder="Нет информации">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">{{__('Контактный номер')}}</label>
                        <div class="col-sm-10">
                            <input type="tel" readonly value="{{$patient->telephone}}" class="form-control"
                                name="reg_ptel" id="patient_telephone" placeholder="Нет информации">
                        </div>
                    </div>

                    <!-- select -->
                    <div class="form-group">
                        <label class="col-sm-2 control-label">{{__('Пол')}}</label>
                        <div class="col-sm-2">
                            <input type="text" value="{{ucfirst($patient->sex)}}" readonly class="form-control"
                                name="reg_poccupation" id="patient_occupation" placeholder="Not Found ">
                        </div>
                        <label for="patient_age" class="col-sm-2 control-label">{{__('Возраст')}}</label>
                        <div class="col-sm-2">
                            <input type="text" readonly value="{{$patient->getAge()}}" class="form-control"
                                name="reg_page" id="patient_age" placeholder="Нет информации">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">{{__('В браке')}}</label>
                        <div class="col-sm-2">
                            <input type="text" readonly value="{{ucfirst($patient->civil_status)}}" class="form-control"
                                name="reg_page" id="patient_age" placeholder="Нет информации">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">{{__('Адрес егистрации')}}</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ucfirst($patient->birth_place)}}" readonly class="form-control"
                                name="reg_ipbirthplace" placeholder="Нет информации">
                        </div>
                    </div>

                    <!-- currency input type -->

                    <div class="form-group">
                        <label class="col-sm-2 control-label">{{__('Опекун')}}</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ucwords($patient->guardian)}}" readonly class="form-control"
                                name="reg_ipguardname" placeholder="Нет информации">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label">{{__('Адрес опекуна')}}</label>
                        <div class="col-sm-10">
                            <input type="text" value="{{ucwords($patient->guardian_address)}}" readonly
                                class="form-control" name="reg_ipguardaddress" placeholder="Нет информации">
                        </div>
                    </div>

                    @if($patient->clinics->count()>0)

                    <div class="form-group">
                        <label class="col-sm-2 control-label">{{__('Другие клиники')}}</label>
                        <div class="col-sm-10">
                            @foreach ($patient->clinics as $clinic)
                            <span style="display:inline-block;font-size:14px;"
                                class="badge bg-info">{{$clinic->name_eng}}</span>
                            @endforeach
                        </div>
                    </div>
                    @endif
            </form>
        </div>

        <script>
            function go(action){
                if(action=="delete"){
                    window.location.href = "{{route('patientDelete',[$patient->id,"delete"])}}";
                }
                if(action=="restore"){
                    window.location.href = "{{route('patientDelete',[$patient->id,"restore"])}}";
                }

            }
        </script>

    </div>
    <div class="col-md-1"></div>
</div>

@endsection
