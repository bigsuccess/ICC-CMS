@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Chuyên mục</header>
            <div class="panel-body">
                {{ Form::open(['route' => 'nevergiveup.categories.store', 'class' => 'form-horizontal tasi-form', 'role' => 'form'])}}
                <div class="form-group {{ statusValidator('name') }}">
                    {{ Form::label('name', 'Tên chuyên mục', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::text('name', null, ['class' => 'form-control']) }}
                        {{ alertError('name') }}
                    </div>
                </div>
                 <div class="form-group {{ statusValidator('slug') }}">
                    {{ Form::label('slug', 'Slug', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::text('slug', null, ['class' => 'form-control']) }}
                        {{ alertError('slug') }}
                    </div>
                </div>
                <div class="form-group {{ statusValidator('parent') }}">
                    {{ Form::label('parent', 'Cha', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::select('parent_id', $parent, null, ['class' => 'form-control']) }}
                        {{ alertError('parent') }}
                    </div>
                </div>
                <div class="form-group {{ statusValidator('status') }}">
                    {{ Form::label('status', 'Trạng thái', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::select('status', ['1' => 'Kích hoạt', '0' => 'Không kích hoạt'], null, ['class' => 'form-control']) }}
                        {{ alertError('status') }}
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