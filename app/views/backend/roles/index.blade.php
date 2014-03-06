@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="row">
                    <div class="col-lg-6 text-left">
                        <h3>Danh nhóm quyền</h3>
                    </div>
                    <div class="col-lg-6 text-right">
                        <a href="{{ url('/nevergiveup/roles/draft') }}" class="btn btn-info btn-sm">Chưa kích hoạt</a>
                        {{ link_to_route('nevergiveup.roles.create', 'Thêm nhóm quyền', null, ['class'=>'btn btn-danger btn-sm']) }}
                    </div>
                </div>
            </header>

            <div class="adv-table">
                
                <table  class="display table table-bordered table-striped" id="example">
                    <thead>
                        <tr>
                            <th>{{ Form::checkbox('all', null, null, ['id' => 'selectall']) }}</th>
                            <th>Nhóm quyền</th>
                            <th>Trạng thái</th>
                            <th class="hidden-phone">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($roles as $role)
                        <tr class="gradeX">
                            <td>{{ Form::checkbox('id[]', $role->id, null, ['class' => 'case']) }}</td>
                            <td>{{ $role->name }}</td>
                            <td>{{ status($role->status) }}</td>
                            <td class="center hidden-phone">
                                {{ link_to_route('nevergiveup.roles.show','Sửa', $role->id.'/edit',['class'=>'btn btn-success btn-xs pull-left btnEdit'])}}
                                {{ link_to_route('nevergiveup.roles.show','Xét quyền', $role->id.'/edit',['class'=>'btn btn-danger btn-xs pull-left btnEdit'])}}
                                <!--{{Form::delete('nevergiveup/roles/'. $role->id)}}-->
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