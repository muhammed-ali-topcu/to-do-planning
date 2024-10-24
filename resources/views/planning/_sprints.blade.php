@if (count($sprints) > 0)


    <div class="card">
        <div class="card-header">{{ __('Result') }}</div>
        <div class="card-body">
            <h4>{{ __('All tasks need :weeks weeks to be completed', ['weeks' => $sprints->count()]) }} </h4>
        </div>
    </div>
    <br>

    <div class="card">
        <div class="card-header">{{ __('Sprints') }}</div>
        <div class="card-body">
            @foreach ($sprints as $sprint)
                <h4>Sprint {{ $sprint->id }}:</h4>

                <table class="table">
                    <thead>
                        <tr>
                            <th>{{ __('Developer') }}</th>
                            <th>{{ __('Filled Hours') }}</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($developers as $developer)
                            <tr>
                                <td>{{ $developer->name }}</td>
                                <td>{{ $developer->tasks()->where('sprint_id', $sprint->id)->sum('duration_for_developer') }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <br>
            @endforeach

        </div>
    </div>
@endif
