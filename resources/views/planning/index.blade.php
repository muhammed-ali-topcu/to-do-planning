@extends('layouts.app')

@section('content')
    <div class="container ">
        <br>
        @include('planning._tasks')

        <div class ="row mt-4">
            <div class="col">
                @include('planning._sprints2')
                <br>
            </div>
            <div class="col">
                @include('planning._developers')
                <br>
            </div>
        </div>
    </div>
@endsection
