@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="content">
            <div class="row>">
                <!-- SELECT2 EXAMPLE -->
                <div class="box box-primary">
                    @if(!empty(session()->get('error')))
                        <div id="msg">
                            {!! session()->get('error') !!}
                        </div>
                    @endif

                    <div class="box-body">
                        <div class="col-md-12" style="width: 100% ; margin-bottom: 2em"></div>
                        @include('_form_themdata')
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
