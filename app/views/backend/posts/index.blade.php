@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">

        <section class="panel">
            <header class="panel-heading">
                <div class="row">
                    <div class="col-lg-6 text-left">
                        <h3>Danh sách bài viết</h3>
                    </div>
                    <div class="col-lg-6 text-right">
                        {{ link_to_route('nevergiveup.posts.create', 'Thêm bài viết', null, ['class'=>'btn btn-danger btn-sm']) }}                    
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
                        @if(count($posts)>0)
                        @foreach($posts as $post)
                        <tr class="gradeX">
                            <td><input type="checkbox" value="{{ $post->id }}" name="id[]"></td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->slug }}</td>
                            <td>{{ $post->cate_id }}</td>
                            <td>{{ $post->lang_code }}</td>
                            <td>{{ $post->post_date }}</td>
                            <td class="center hidden-phone">
                                {{ link_to_route('nevergiveup.posts.show','Sửa', $post->id.'/edit',['class'=>'btn btn-success btn-xs pull-left btnEdit'])}}                         
                                {{Form::delete('nevergiveup/posts/'. $post->id)}}
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr class="gradeX">
                            <td colspan="7">Chưa có bản ghi nào!</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </section>
    </div>
</div>
@stop