@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Đổi mật khẩu</header>
            <div class="panel-body">
                {{ Form::open(['route' => ['change-password-post'], 'class' => 'form-horizontal tasi-form', 'role' => 'form', 'method' => 'POST'])}}
                <div class="form-group {{ statusValidator('password') }}">
                    {{ Form::label('old_password', 'Mật khẩu cũ', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::password('old_password', ['class' => 'form-control']) }}
                        {{ alertError('old_password') }}
                    </div>
                </div>
                <div class="form-group {{ statusValidator('new_password') }}">
                    {{ Form::label('new_password', 'Mật khẩu mới', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::password('new_password',['class' => 'form-control']) }}
                        {{ alertError('new_password') }}
                    </div>
                </div>
                <div class="form-group {{ statusValidator('new_password') }}">
                    {{ Form::label('new_password_confirmation', 'Nhập lại mật khẩu', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::password('new_password_confirmation',['class' => 'form-control']) }}
                        {{ alertError('new_password_confirmation') }}
                    </div>
                </div>
                <div class="col-lg-offset-2 col-lg-10">
                    {{ Form::submit('Thay đổi', ['class' => 'btn btn-danger']) }}
                    {{ Form::reset('Làm mới', ['class' => 'btn btn-info']) }}
                </div>
                {{ Form::close() }}
            </div>
        </section>
    </div>
</div>
@stop