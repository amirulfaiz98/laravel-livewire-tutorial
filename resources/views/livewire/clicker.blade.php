<div>
    <h1>{{ $username }}</h1>

    {{ count($users) }}
    <button wire:click="createNewUser">
        Click Me
    </button>
</div>
