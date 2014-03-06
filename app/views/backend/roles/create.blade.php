@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Nhóm quyền</header>
            <div class="panel-body">
                {{ Form::open(['route' => 'nevergiveup.roles.store', 'class' => 'form-horizontal tasi-form', 'role' => 'form'])}}
                <div class="form-group {{ statusValidator('name') }}">
                    {{ Form::label('name', 'Tên nhóm', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                        {{ alertError('name') }}
                    </div>
                </div>
                <div class="form-group">
                    {{ Form::label('status', 'Trạng thái', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::select('status', ['1' => 'Kích hoạt', '0' => 'Không kích hoạt'], null, ['class' => 'form-control']) }}
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