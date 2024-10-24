@extends('layouts.app')

@section('content')
    <div class="container ">
        <br>
        <div class ="row mt-4">
            <div class="col">
                @include('planning._sprints')
                <br>
            </div>
            <div class="col">
                @include('planning._developers')
                <br>

            </div>
        </div>

        @include('planning._tasks')
    </div>
@endsection
