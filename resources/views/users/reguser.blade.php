@extends('template.main')

@section('title', $title)

@section('content_title',__("Добавление нового пользователя"))
@section('breadcrumbs')

<ol class="breadcrumb">
    <li><a href="{{route('dash')}}"><i class="fas fa-tachometer-alt"></i>Главная</a></li>
    <li class="active">Добавление нового пользователя</li>
</ol>
@endsection

@section('main_content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">

            @if ($message = Session::get('success'))
            <div style="margin-top:3.5vh !important" class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i>Success!</h4>
                New User-{{$message}} Added To The System.
            </div>
            @endif

            <div style="padding:10px;margin-top:4.5vh !important" class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">{{__('Регистрация')}}</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="name">{{__('ФИО')}} <span class="text-red">*</span></label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">{{__('Email')}} <span class="text-red">*</span></label>
                            <input required id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">{{__('Пароль')}} <span class="text-red">*</span></label>
                            <input required value="12345678" readonly id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">{{__('Повторите пароль')}} <span class="text-red">*</span></label>
                            <input required readonly id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" value="12345678" required autocomplete="new-password">
                        </div>

                        <div class="form-group">
                            <label>{{__('Контактный номер :')}} </label>
                            <input required type="text" class="form-control" name="contactno"
                                placeholder="Enter Your Contact No...">
                        </div>


                        <div class="form-group">
                            <label for="user-type">{{ __('Должность') }} <span class="text-red">*</span></label>
                            <select required id="user-type" type="select" class="form-control" name="user_type"
                                required>
                                <option value="admin">Админ</option>
                                <option value="pharmacist">Заведующий отделением</option>
                                <option value="doctor">Врач-невролог</option>
                                <option value="doctor">Старшая медсестра</option>
                                <option value="doctor">Медсестра</option>
                                <option value="pharmacist">Фармацевт</option>
                                <option selected value="general">Персонал</option>
                            </select>
                        </div>

                        <!-- /.box-body -->

                        <div>

                            <button type="submit" class="pull-right btn btn-primary">{{__('Register')}}</button>

                        </div>

                    </div>

                </form>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
</div>


@endsection
