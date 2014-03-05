@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Cập nhập tài khoản</header>
            <div class="panel-body">
                {{ Form::model($user, ['route' => ['nevergiveup.users.update',$user->id], 'class' => 'form-horizontal tasi-form', 'role' => 'form', 'method' => 'PATCH'])}}
                <div class="form-group {{ statusValidator('first_name') }}">
                    {{ Form::label('first_name', 'Họ đệm', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::text('first_name', null, ['class' => 'form-control']) }}
                        {{ alertError('first_name') }}
                    </div>
                </div>
                <div class="form-group {{ statusValidator('last_name') }}">
                    {{ Form::label('last_name', 'Tên đệm', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::text('last_name', null, ['class' => 'form-control']) }}
                        {{ alertError('last_name') }}
                    </div>
                </div>

                <div class="form-group {{ statusValidator('email') }}">
                    {{ Form::label('email', 'Email', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::text('email', null, ['class' => 'form-control']) }}
                        {{ alertError('email') }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('gender', 'Giới tính', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        <div class="radio">
                            <label>
                                {{ Form::radio('gender', '1', true) }} Nam
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                {{ Form::radio('gender', '0') }} Nữ
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group {{ statusValidator('birthday') }}">
                    {{ Form::label('birthday', 'Ngày sinh', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-3">
                        {{ Form::text('birthday', null, ['class' => 'form-control datepicker','data-provide'=>'datepicker','data-date-format'=>'yyyy-mm-dd']) }}
                        {{ alertError('birthday') }}
                    </div>
                </div>
                <div class="form-group {{ statusValidator('phone') }}">
                    {{ Form::label('phone', 'Số điện thoại', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::text('phone', null, ['class' => 'form-control']) }}
                        {{ alertError('phone') }}
                    </div>
                </div>
                <div class="form-group {{ statusValidator('address') }}">
                    {{ Form::label('address', 'Địa chỉ', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::textarea('address', null, ['class' => 'form-control']) }}
                        {{ alertError('address') }}
                    </div>
                </div>
                <div class="col-lg-offset-2 col-lg-10">
                    {{ Form::submit('Lưu lại', ['class' => 'btn btn-danger']) }}
                    {{ Form::reset('Làm mới', ['class' => 'btn btn-info']) }}
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
</div>
@stop