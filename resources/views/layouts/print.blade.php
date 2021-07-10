<!DOCTYPE html>
<html>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/invoice_print.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 May 2021 14:16:50 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ subdomain_title(null) }}</title>

{{--    {!! Html::style('/css/app.css') !!}--}}
    {!! Html::style('/css/template/bootstrap.min.css') !!}
    {!! Html::style('/css/styles.css') !!}
    {!! Html::style('/font-awesome/css/font-awesome.css') !!}
    {!! Html::style('/css/template/animate.css') !!}
    {!! Html::style('/css/template/style.css') !!}

</head>

<body class="white-bg">
<div class="wrapper wrapper-content p-xl" data-type="{{ $datas[0] }}" data-start="{{ $datas[1] }}" data-end="{{ $datas[2] }}">
    <div class="ibox-content p-xl">
        <div class="row">
            <div class="col-sm-6">
                <h5>From:</h5>
                <address>
                    <strong>Inspinia, Inc.</strong><br>
                    106 Jorg Avenu, 600/10<br>
                    Chicago, VT 32456<br>
                    <abbr title="Phone">P:</abbr> (123) 601-4590
                </address>
            </div>

            <div class="col-sm-6 text-right">
                <h4>Invoice No.</h4>
                <h4 class="text-navy">INV-000567F7-00</h4>
                <span>To:</span>
                <address>
                    <strong>Corporate, Inc.</strong><br>
                    112 Street Avenu, 1080<br>
                    Miami, CT 445611<br>
                    <abbr title="Phone">P:</abbr> (120) 9000-4321
                </address>
                <p>
                    <span><strong>Invoice Date:</strong> Marh 18, 2014</span><br/>
                    <span><strong>Due Date:</strong> March 24, 2014</span>
                </p>
            </div>
        </div>

        <div class="table-responsive m-t">
            <table class="table invoice-table">
                <thead>
                <tr>
                    <th>Item List</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Tax</th>
                    <th>Total Price</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><div><strong>Admin Theme with psd project layouts</strong></div>
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></td>
                    <td>1</td>
                    <td>$26.00</td>
                    <td>$5.98</td>
                    <td>$31,98</td>
                </tr>
                <tr>
                    <td><div><strong>Wodpress Them customization</strong></div>
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </small></td>
                    <td>2</td>
                    <td>$80.00</td>
                    <td>$36.80</td>
                    <td>$196.80</td>
                </tr>
                <tr>
                    <td><div><strong>Angular JS & Node JS Application</strong></div>
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></td>
                    <td>3</td>
                    <td>$420.00</td>
                    <td>$193.20</td>
                    <td>$1033.20</td>
                </tr>

                </tbody>
            </table>
        </div><!-- /table-responsive -->

        <table class="table invoice-total">
            <tbody>
            <tr>
                <td><strong>Sub Total :</strong></td>
                <td>$1026.00</td>
            </tr>
            <tr>
                <td><strong>TAX :</strong></td>
                <td>$235.98</td>
            </tr>
            <tr>
                <td><strong>TOTAL :</strong></td>
                <td>$1261.98</td>
            </tr>
            </tbody>
        </table>
        <div class="well m-t"><strong>Comments</strong>
            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
        </div>
    </div>

</div>

<!-- Mainly scripts -->
{{--{!! Html::script('/js/app.js') !!}--}}
{!! Html::script('/js/template/jquery-3.1.1.min.js') !!}
{!! Html::script('/js/template/popper.min.js') !!}
{!! Html::script('/js/template/bootstrap.js') !!}
{!! Html::script('/js/template/plugins/metisMenu/jquery.metisMenu.js') !!}
{!! Html::script('/js/template/plugins/slimscroll/jquery.slimscroll.min.js') !!}

<!-- Custom and plugin javascript -->
{!! Html::script('/js/template/inspinia.js') !!}

<script>

    $(document).ready(function(){
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

        console.log('{!! $datas !!}');
        var datas = new Array();
        datas.push($('.wrapper').data('type'));
        datas.push($('.wrapper').data('start'));
        datas.push($('.wrapper').data('end'));

        $.get('{!! route('print-report-data') !!}', {
            datas: datas
        }, function(data){
            console.log(data);
            // window.print();
        });

    });

</script>

</body>


<!-- Mirrored from webapplayers.com/inspinia_admin-v2.9.4/invoice_print.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 20 May 2021 14:16:50 GMT -->
</html>
