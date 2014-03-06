@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Ngôn ngữ</header>
            <div class="panel-body">
                {{ Form::open(['route' => 'nevergiveup.langs.store', 'class' => 'form-horizontal tasi-form', 'role' => 'form'])}}
                <div class="form-group {{ statusValidator('') }}">
                    {{ Form::label('langs', 'Ngôn ngữ', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::text('code', null, ['class' => 'form-control']) }}
                        {{ alertError('code') }}
                    </div>
                </div>
                <div class="form-group {{ statusValidator('name') }}">
                    {{ Form::label('name', 'Tên gọi', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                        {{ alertError('name') }}
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