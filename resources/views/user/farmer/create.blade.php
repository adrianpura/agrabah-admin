@extends('master')

@section('title', 'Farmer Create')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-sm-4">
            <h2>@yield('title')</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="\">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>@yield('title')</strong>
                </li>
            </ol>
        </div>
        <div class="col-sm-8">
            <div class="title-action">
                <button type="button" class="btn btn-primary btn-action" data-action="store">Store</button>
            </div>
        </div>
    </div>

    <div id="app" class="wrapper wrapper-content">
{{--        {{ Form::open(array('route'=>array('farmer.store'), array('id'=>'form'))) }}--}}
{{--        {{ Form::open(array('route'=>array('farmer.store'), 'method'=>'post', 'id'=>'form')) }}--}}
        <form action="{!! route('farmer.store') !!}" method="post" id="form">
            <div class="row">
                @csrf
                <div class="col-sm-4">

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Primary Info
                        </div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>First name</label>
                                {{ Form::text('first_name', null, array('class'=>'form-control')) }}
{{--                                <input type="text" name="first_name" class="form-control">--}}
                            </div>
                            <div class="form-group">
                                <label>Middle name</label>
                                {{ Form::text('middle_name', null, array('class'=>'form-control')) }}
{{--                                <input type="text" name="middle_name" class="form-control">--}}
                            </div>
                            <div class="form-group">
                                <label>Last name</label>
                                {{ Form::text('last_name', null, array('class'=>'form-control')) }}
{{--                                <input type="text" name="last_name" class="form-control">--}}
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Secondary Info
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mobile</label>
                                        {{ Form::text('mobile', null, array('class'=>'form-control')) }}
{{--                                        <input type="text" name="mobile" class="form-control">--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        {{ Form::textarea('address', null, array('class'=>'form-control no-resize')) }}
{{--                                        <textarea name="address" class="form-control no-resize"></textarea>--}}
                                    </div>
                                    <div class="form-group">
                                        <label>Education</label>
                                        {{ Form::textarea('education', null, array('class'=>'form-control no-resize')) }}
{{--                                        <textarea name="education" class="form-control no-resize"></textarea>--}}
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                    <label>Membership / Group</label>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="i-checks">
                                                    <label>
                                                        {{ Form::checkbox('four_ps', 1) }}
{{--                                                        <input type="checkbox" name="four_ps" value="1">--}}
                                                        <i></i> 4P's
                                                    </label>
                                                </div>
                                                <div class="i-checks">
                                                    <label>
                                                        {{ Form::checkbox('pwd', 1) }}
{{--                                                        <input type="checkbox" name="pwd" value="1">--}}
                                                        <i></i> PWD
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="i-checks">
                                                    <label>
                                                        {{ Form::checkbox('indigenous', 1) }}
{{--                                                        <input type="checkbox" name="indigenous" value="1">--}}
                                                        <i></i> Indigenous
                                                    </label>
                                                </div>
                                                <div class="i-checks">
                                                    <label>
                                                        {{ Form::checkbox('livelihood', 1) }}
{{--                                                        <input type="checkbox" name="livelihood" value="1">--}}
                                                        <i></i> Livelihood
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Organization</label>
                                                {{ Form::text('organization', null, array('class'=>'form-control')) }}
{{--                                                <input type="text" name="organization" class="form-control">--}}
                                            </div>
                                            <div class="form-group">
                                                <label>Farm lot</label>
                                                {{ Form::text('farm_lot', null, array('class'=>'form-control')) }}
{{--                                                <input type="text" name="farm_lot" class="form-control">--}}
                                            </div>
                                            <div class="form-group">
                                                <label>Farming since</label>
                                                {{ Form::text('farming_since', null, array('class'=>'form-control')) }}
{{--                                                <input type="text" name="farming_since" class="form-control">--}}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
{{--                <div class="col-sm-4">--}}
{{--                    <div class="ibox float-e-margins">--}}
{{--                        <div class="ibox-content">--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Master Farmer</label>--}}
{{--                                <select name="master-id" class="form-control">--}}
{{--                                    <option value="">Select Master Farmer</option>--}}
{{--                                    @foreach($datas as $data)--}}
{{--                                        <option value="{{ $data->id }}">{{ $data->profile->first_name }} {{ $data->profile->last_name }}</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Email</label>--}}
{{--                                <input type="email" name="email" class="form-control">--}}
{{--                            </div>--}}
{{--                            <div class="form-group">--}}
{{--                                <label>Password</label>--}}
{{--                                <input type="password" name="password" class="form-control">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
{{--        </form>--}}
        {{ Form::close() }}

    </div>

    <div class="modal inmodal fade" id="modal" data-type="" tabindex="-1" role="dialog" aria-hidden="true" data-category="" data-variant="" data-bal="">
        <div id="modal-size">
            <div class="modal-content">
                <div class="modal-header" style="padding: 15px;">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="modal-save-btn">Save changes</button>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('styles')
    {!! Html::style('/css/template/plugins/iCheck/custom.css') !!}
    {{--{!! Html::style('') !!}--}}
    {{--    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">--}}
    {{--    {!! Html::style('/css/template/plugins/sweetalert/sweetalert.css') !!}--}}
@endsection

@section('scripts')
    {!! Html::script('/js/template/plugins/iCheck/icheck.min.js') !!}
    {{--    {!! Html::script('') !!}--}}
    {{--    {!! Html::script(asset('vendor/datatables/buttons.server-side.js')) !!}--}}
    {{--    {!! $dataTable->scripts() !!}--}}
    {{--    {!! Html::script('/js/template/plugins/sweetalert/sweetalert.min.js') !!}--}}
    {{--    {!! Html::script('/js/template/moment.js') !!}--}}
    <script>
        $(document).ready(function(){

            $(document).on('click', '.btn-action', function(){
                switch ($(this).data('action')) {
                    case 'store':
                        $('#form').submit();

                        // console.log($('input[name=four_ps]').val());
                        // console.log($('input[name=pwd]').val());
                        // console.log($('input[name=indigenous]').val());
                        // console.log($('input[name=livelihood]').val());
                        break;
                }
            });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });


            {{--var modal = $('#modal');--}}
            {{--$(document).on('click', '', function(){--}}
            {{--    modal.modal({backdrop: 'static', keyboard: false});--}}
            {{--    modal.modal('toggle');--}}
            {{--});--}}

            {{-- var table = $('#table').DataTable({--}}
            {{--     processing: true,--}}
            {{--     serverSide: true,--}}
            {{--     ajax: {--}}
            {{--         url: '{!! route('') !!}',--}}
            {{--         data: function (d) {--}}
            {{--             d.branch_id = '';--}}
            {{--         }--}}
            {{--     },--}}
            {{--     columnDefs: [--}}
            {{--         { className: "text-right", "targets": [ 0 ] }--}}
            {{--     ],--}}
            {{--     columns: [--}}
            {{--         { data: 'name', name: 'name' },--}}
            {{--         { data: 'action', name: 'action' }--}}
            {{--     ]--}}
            {{-- });--}}

            {{--table.ajax.reload();--}}

        });
    </script>
@endsection
