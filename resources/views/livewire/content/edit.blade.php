<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <x-slot name="header">Editar conteúdo</x-slot>
    @if (session()->has('success'))
        <div class="w-full p-5 border border-green-500 bg-green-400">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-5">
        <label for="">Título</label>
        <input type="text" wire:model.defer="content.title">
        @error('content.title')
            {{$message}}
        @enderror
    </div>

    <div class="mb-5">
        <label for="">Conteúdo</label>
        <input type="text" wire:model.defer="content.body">
        @error('content.body')
            {{$message}}
        @enderror
    </div>

    <button class="border border-green-500 px-5 py-2 rounded" wire:click="editContent">Editar conteúdo</button>

</div>
