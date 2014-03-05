@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Đổi mật khẩu</header>
            <div class="panel-body">
<!--                {{ Form::open($user, ['route' => ['nevergiveup.users.update',$user->id], 'class' => 'form-horizontal tasi-form', 'role' => 'form', 'method' => 'PATCH'])}}
                <div class="form-group {{ statusValidator('password') }}">
                    {{ Form::label('password', 'Mật khẩu', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::password('password', ['class' => 'form-control']) }}
                        {{ alertError('password') }}
                    </div>
                </div>
                <div class="form-group {{ statusValidator('password_confirmation') }}">
                    {{ Form::label('password_confirmation', 'Nhập lại khẩu', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::password('password_confirmation',['class' => 'form-control']) }}
                        {{ alertError('password_confirmation') }}
                    </div>
                </div>-->
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