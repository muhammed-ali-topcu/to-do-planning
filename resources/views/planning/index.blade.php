@extends('layouts.app')

@section('content')

        @include('planning._tasks')

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
@endsection
