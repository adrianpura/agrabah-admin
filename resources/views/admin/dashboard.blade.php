@extends('master')

{{--@section('title', 'Dashboard | '.getRoleName('display_name'))--}}
@section('title', 'Dashboard')

@section('content')

    <section class="container animated fadeInRight">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget style1 blue-bg">
                    <div class="row">
                        <div class="col-4 text-center">
                            <i class="fa fa-money fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> Today's income </span>
                            <h2 class="font-bold">4,232</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 navy-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-users fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> Farmers </span>
                            <h2 class="font-bold">26</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 lazur-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-th-list fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> Inventories </span>
                            <h2 class="font-bold">260</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget style1 yellow-bg">
                    <div class="row">
                        <div class="col-4">
                            <i class="fa fa-truck fa-5x"></i>
                        </div>
                        <div class="col-8 text-right">
                            <span> Trace </span>
                            <h2 class="font-bold">12</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-lg-4">
{{--                <div class="panel panel-success">--}}
{{--                    <div class="panel-heading">--}}
{{--                        {{ $type }}--}}
{{--                    </div>--}}
{{--                    <div class="panel-body">--}}
{{--                        <h2>Head Office</h2>--}}
{{--                        <h4>subdomain: {{ $subdomain }}</h4>--}}
{{--                        <h4>domain: {{ $domain }}</h4>--}}
{{--                        <h4>domain ext: {{ config('dev.domain_ext') }}</h4>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

@endsection


@section('styles')
    {{--{!! Html::style('') !!}--}}
@endsection

@section('scripts')
    {{--{!! Html::script('') !!}--}}
    <script>
        $(document).ready(function(){

        });
    </script>
@endsection
