@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <br class="card">
                <div class="card-header">Dashboard</div>

                <br class="card-body">
                    @foreach($catagories as $catagorie)
                        {{$catagorie}}
                </br>
                @endforeach

            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
