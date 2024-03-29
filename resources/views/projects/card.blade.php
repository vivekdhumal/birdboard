<div class="card flex flex-col" style="height: 200px">
    <h3 class="font-normal text-xl py-4 -ml-5 border-l-4 mb-3 border-accent pl-4">
        <a href="{{ $project->path()    }}" class="text-default no-underline">{{ $project->title }}</a>
    </h3>

    <div class="flex-1 mb-4">{{ str_limit($project->description, 100) }}</div>

    @can('manage', $project)
        <form method="POST" action="{{ $project->path() }}" class="text-right">
            @method('DELETE')
            @csrf
            <button type="submit" class="text-xs">Delete</button>
        </form>
    @endcan
</div>
