@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">Bài viết mới</header>
            <div class="panel-body">
                {{ Form::open(['route' => 'nevergiveup.posts.store', 'class' => 'form-horizontal tasi-form', 'role' => 'form'])}}
                <div class="form-group {{ statusValidator('') }}">
                    {{ Form::label('title', 'Tiêu đề', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-10">
                        {{ Form::text('title', null, ['class' => 'form-control']) }}
                        {{ alertError('title') }}
                    </div>
                </div>
                <div class="form-group {{ statusValidator('description') }}">
                    {{ Form::label('description', 'Mô tả', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-10">
                        {{ Form::textarea('description', null, ['class' => 'form-control']) }}
                        {{ alertError('description') }}
                    </div>
                </div>
                <div class="form-group {{ statusValidator('content') }}">
                    {{ Form::label('content', 'Nội dung', ['class' => 'col-lg-2 control-label ']) }}
                    <div class="col-lg-10">
                        {{ Form::textarea('content', null, ['class' => 'form-control ckeditor']) }}
                        {{ alertError('content') }}
                    </div>
                </div>
                <div class="form-group {{ statusValidator('cate_id') }}">
                    {{ Form::label('cate_id', 'Chuyên mục', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::select('cate_id', $cate_id, null, ['class' => 'form-control']) }}
                        {{ alertError('cate_id') }}
                    </div>
                </div>
                <div class="form-group {{ statusValidator('lang_code') }}">
                    {{ Form::label('lang_code', 'Ngôn ngữ', ['class' => 'col-lg-2 control-label']) }}
                    <div class="col-lg-6">
                        {{ Form::select('lang_code', ['1' => 'Việt Nam', '0' => 'English'], null, ['class' => 'form-control']) }}
                        {{ alertError('lang_code') }}
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