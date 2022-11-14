<div class="card mt-3">
    <ul class="text-sm list-reset">
        @foreach($project->activity as $activity)
            <li class="mb-1">
                @include("projects.activity.{$activity->description}")
            </li>
        @endforeach
    </ul>
</div>
