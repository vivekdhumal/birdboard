@if (count($activity->changes['after']) === 1)
    {{ $activity->user->name }} updated a {{ key($activity->changes['after']) }} of the project.
@else
    {{ $activity->user->name }} updated a project.
@endif
