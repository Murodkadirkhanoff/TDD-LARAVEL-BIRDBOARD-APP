<x-app-layout>
    <form method="POST" action="/projects" class="container">
        @csrf
        <h1 class="heading is-1">Create a project</h1>

        <div class="field">
            <label class="label" for="title">Title</label>
            <div class="control">
                <input type="text" class="input" id="title" name="title" placeholder="Title">
            </div>
        </div>

        <div class="field">
            <label class="label" for="description">Description</label>
            <div class="control">
                <textarea class="textarea" id="description" name="description"></textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Create a project</button>
                <a href="/projects">Cancel</a>
            </div>
        </div>
    </form>
</x-app-layout>>
