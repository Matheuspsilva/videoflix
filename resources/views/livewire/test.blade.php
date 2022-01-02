<div>
    @if (session()->has('success'))
        <div class="w-full p-5 border border-green-500 bg-green-400">
            {{ session('success') }}
        </div>
    @endif
    <h1>Exemplo componenete livewire</h1>
    <p>Bind: {{ $title }}</p>

    <div class="mb-5">
        <label for="">Título</label>
        <input type="text" wire:model="title">
        @error('title')
            {{$message}}
        @enderror
    </div>

    <div class="mb-5">
        <label for="">Conteúdo</label>
        <input type="text" wire:model="content">
        @error('content')
            {{$message}}
        @enderror
    </div>

    <button class="border border-green-500 px-5 py-2 rounded" wire:click="saveContent">Enviar dados</button>
</div>
