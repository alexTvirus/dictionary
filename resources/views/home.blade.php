@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="content">
            <div class="row>">
                <!-- SELECT2 EXAMPLE -->
                <div class="box box-primary">
                    <div class="box-body">
                        <div class="col-md-12" style="width: 100% ; margin-bottom: 2em"></div>
                        @include('_form_search')
                        <div class="col-md-12" style="width: 100% ; margin-top: 2em"></div>
                    </div>

                </div>
            </div>
            <!-- /.box-body -->
            <!-- /.box -->
        </section>
        <section class="content">
            <div class="row>">
                <!-- SELECT2 EXAMPLE -->
                <div class="box box-primary">
                    <div class="box-body">
                        <a href="{{route('danhmuc')}}" id="datatrongngay" class="btn btn-default"><span
                                    class="fa fa-refresh"></span>
                            danhmuc
                        </a>
                        <a href="{{route('themdata')}}" id="themdata" class="btn btn-default"><span
                                    class="fa fa-refresh"></span>
                            themdata
                        </a>
                    </div>

                </div>
            </div>
            <!-- /.box-body -->
            <!-- /.box -->
        </section>
    </div>
@endsection
