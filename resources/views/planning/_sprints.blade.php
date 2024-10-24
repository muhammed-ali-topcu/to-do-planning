<div class="card">
    <div class="card-header">{{ __('Result') }}</div>
    <div class="card-body">
        <h4>{{ __('All tasks need :hours hours to be completed', ['hours' => $tasks->sum('duration_for_developer')]) }}
        </h4>
        <h4>{{ __('All tasks need :weeks weeks to be completed', ['weeks' => $sprints->count()]) }} </h4>
    </div>
</div>
<br>

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

