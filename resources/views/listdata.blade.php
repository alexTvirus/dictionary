@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="content">
            <div class="row>">
                <!-- SELECT2 EXAMPLE -->
                <div class="box box-primary">
                    @if(!empty(session()->get('msg')))
                        <div id="msg">
                            {!! session()->get('msg') !!}
                        </div>
                    @endif

                    <div class="box-body">
                        <div class="col-md-12" style="width: 100% ; margin-bottom: 2em"></div>
                        <div class="col-md-12">
                            @include('_table_data')
                        </div>
                        <div class="col-md-12" style="width: 100% ; margin-top: 2em"></div>
                    </div>

                </div>
            </div>
            <!-- /.box-body -->
            <!-- /.box -->
        </section>
    </div>
    </div>
    </div>
@endsection
