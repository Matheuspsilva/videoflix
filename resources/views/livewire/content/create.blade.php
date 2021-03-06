<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <x-slot name="header">Criar novo conteúdo</x-slot>
    @if (session()->has('success'))
        <div class="w-full p-5 border border-green-500 bg-green-400">
            {{ session('success') }}
        </div>
    @endif

    <div class="mb-5">
        <label for="">Título</label>
        <input type="text" wire:model.defer="title">
        @error('title')
            {{$message}}
        @enderror
    </div>

    <div class="mb-5">
        <label for="">Conteúdo</label>
        <input type="text" wire:model.defer="body">
        @error('body')
            {{$message}}
        @enderror
    </div>

    <button class="border border-green-500 px-5 py-2 rounded" wire:click="saveContent">Salvar Conteúdo</button>
</div>
