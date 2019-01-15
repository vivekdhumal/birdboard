@extends('layouts.app')

@section('content')
<form action="/projects" method="POST">
    <h1 class="heading ls-l">Create a Project</h1>

    @csrf

    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input class="input" type="text" name="title">
        </div>
    </div>

    <div class="field">
        <label class="label">Description</label>
        <div class="control">
            <textarea class="textarea" name="description"></textarea>
        </div>
    </div>

    <div class="field is-grouped">
        <div class="control">
            <button class="button is-link">Submit</button>
            <a href="/projects">Cancel</a>
        </div>
    </div>
</form>
@endsection
