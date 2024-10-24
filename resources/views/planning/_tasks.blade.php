<div class="card">
    <div class="card-header d-flex justify-content-between">

        <div>{{ __('Tasks') }}</div>

        <form method="POST" action="{{ route('planning.plan') }}">
            @csrf
            <button type="submit" class="btn btn-primary">{{ __('Plan') }}</button>
        </form>
    </div>

    <div class="card-body">

        <table class="table">
            <thead>
                <tr></tr>
                <th>{{ __('Id') }}</th>
                <th>{{ __('Custome Id') }}</th>
                <th>{{ __('Difficulty') }}</th>
                <th>{{ __('Estimated Duration') }}</th>
                <th>{{ __('Score') }}</th>
                <th>{{ __('Sprint Id') }}</th>
                <th>{{ __('Developer Id') }}</th>
                <th>{{ __('Duration For Developer') }}</th>
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
                        <td>{{ $task->sprint_id }}</td>
                        <td>{{ $task->developer_id }}</td>
                        <td>{{ $task->duration_for_developer }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>

                <tr>
                    <th colspan="2">{{ __('Total') }}</th>
                    <th>{{ $tasks->sum('difficulty') }}</th>
                    <th>{{ $tasks->sum('estimated_duration') }}</th>
                    <th>{{ $tasks->sum('score') }}</th>
                    <th></th>
                    <th></th>
                    <th>{{ $tasks->sum('duration_for_developer') }}</th>


                </tr>
            </tfoot>
        </table>
    </div>
</div>
