<div>
    <form wire:submit="createUser" action="">
        <input wire:model="name" type="text" placeholder="name">
        <input wire:model="email" type="email" placeholder="email">
        <input wire:model="password" type="password" placeholder="password">

        <button >Create</button>

        {{-- <button wire:click.prevent="createUser">Create</button> --}}

        <hr>

        @foreach ( $users as $user)
            <h3>{{ $user->name }}</h3>
        @endforeach
    </form>
</div>
