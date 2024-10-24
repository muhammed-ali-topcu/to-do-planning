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
            <tfoot>

                <tr></tr>
                <th colspan="3">{{ __('Total') }}</th>

                <th>{{ $developers->sum('tasks_sum_duration_for_developer') }}</th>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
