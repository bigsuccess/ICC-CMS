@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">

        <section class="panel">
            <header class="panel-heading">
                <div class="row">
                    <div class="col-lg-6 text-left">
                        <h3>Danh sách tài khoản</h3>
                    </div>
                    <div class="col-lg-6 text-right">
                        {{ link_to_route('nevergiveup.users.create', 'Thêm tài khoản', null, ['class'=>'btn btn-danger btn-sm']) }}                    
                    </div>
                </div>
            </header>
            <div role="gird" class="dataTables_wrapper form-inline">
                <table id="example" class="display table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th><input type="checkbox" value="1" name="all"></th>
                            <th>Tài khoản</th>
                            <th>Email</th>
                            <th>Họ tên</th>
                            <th>Ngày sinh</th>
                            <th>Số ĐT</th>
                            <th class="hidden-phone">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr class="gradeX">
                            <td><input type="checkbox" value="{{ $user->id }}" name="id[]"></td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
                            <td>{{ $user->birthday }}</td>
                            <td>{{ $user->phone }}</td>
                            <td class="center hidden-phone">
                                {{ link_to_route('nevergiveup.users.show','Sửa', $user->id.'/edit',['class'=>'btn btn-success btn-xs pull-left btnEdit'])}}                         
                                @if($user->role_id != 1)
                                {{Form::delete('nevergiveup/users/'. $user->id)}}
                                @endif
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