@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">{{ __('Tasks') }}</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr></tr>
                        <th>{{ __('Id') }}</th>
                        <th>{{ __('Custome Id') }}</th>
                        <th>{{ __('Difficulty') }}</th>
                        <th>{{ __('Estimated Duration') }}</th>
                        <th>{{ __('Score') }}</th>
                        <th>{{ __('Duration For Developer') }}</th>
                        <th>{{ __('Developer') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->id }}</td>
                                <td>{{ $task->custome_id }}</td>
                                <td>{{ $task->difficulty }}</td>
                                <td>{{ $task->estimated_duration }}</td>
                                <td>{{ $task->score }}</td>
                                <td>{{ $task->duration_for_developer }}</td>
                                <td>{{ $task->developer_id }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
            <br>

            <div class="card">
                <div class="card-header">{{ __('Developers') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr></tr>
                            <th>{{ __('Id') }}</th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Speed') }}</th>
                            <th>{{ __('Filled Hours') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($developers as $developer)
                                <tr>
                                    <td>{{ $developer->id }}</td>
                                    <td>{{ $developer->name }}</td>
                                    <td>{{ $developer->speed }}</td>
                                    <td>{{ $developer->tasks_sum_duration_for_developer }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>


            <br/>
            <div class="card">
                <div class="card-header">{{ __('Sprints') }}</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr></tr>
                            <th>{{ __('Id') }}</th>
                            <th>{{ __('Hours') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sprints as $sprint)
                                <tr>
                                    <td>{{ $sprint->id }}</td>
                                    <td>{{ $sprint->hours }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    @endsection
