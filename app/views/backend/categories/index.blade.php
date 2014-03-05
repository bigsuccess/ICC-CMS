@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="row">
                    <div class="col-lg-6 text-left">
                        <h3>Danh sách chuyên mục</h3>
                    </div>
                    <div class="col-lg-6 text-right">
                        {{ link_to_route('nevergiveup.categories.create', 'Thêm chuyên mục', null, ['class'=>'btn btn-danger btn-sm']) }}
                    </div>
                </div>
            </header>

            <div class="dataTables_wrapper form-inline" role="gird">
                <table class="display table table-bordered table-striped" id="example">
                    <thead>
                        <tr>
                            <th>{{ Form::checkbox('all', null, null, ['id' => 'selectall']) }}</th>
                            <th>Tên chuyên mục</th>
                            <th>Slug</th>
                            <th>Trạng thái</th>
                            <th class="hidden-phone">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $category)
                        <tr class="gradeX">
                            <td>{{ Form::checkbox('id[]', $category->id, null, ['class' => 'case']) }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->slug }}</td>
                            <td>{{ statusCategory($category->status) }}</td>
                            <td class="center hidden-phone">
                                {{ link_to_route('nevergiveup.categories.show','Sửa', $category->id.'/edit',['class'=>'btn btn-success btn-xs pull-left btnEdit'])}}
                                {{Form::delete('nevergiveup/categories/'. $category->id)}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
@stop