@extends('layouts.backend')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                <div class="row">
                    <div class="col-lg-6 text-left">
                        <h3>Sap xep chuyen muc</h3>
                    </div>
                    <!--                    <div class="col-lg-6 text-right">
                                            {{ link_to_route('nevergiveup.categories.create', 'Thêm chuyên mục', null, ['class'=>'btn btn-danger btn-sm']) }}
                                        </div>-->
                </div>
            </header>
            <div class="panel-body">
                <p class="alert alert-info">Kéo và thả để sắp xếp theo thứ tự, cấp độ bạn mong muốn. Sau đó ấn "Lưu lại" để hoàn thành</p>
                <div id="orderResult">{{ get_ol($categories) }}</div>

            <input type="button" id="save" value="Lưu lại" class="btn btn-primary" />
            </div>            
        </section>
    </div>
</div>
@stop
