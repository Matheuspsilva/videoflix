<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    <x-slot name="header">Conteúdos cadastrados</x-slot>

    <a href="{{route('content.create')}}">Criar conteúdo</a>

    @if (session()->has('success'))
        <div class="w-full p-5 border border-green-500 bg-green-400">
            {{ session('success') }}
        </div>
    @endif

    @foreach ($contents as $content )
        {{-- @livewire('content.content', ['content' => $content], key($content->id)) --}}
        <livewire:content.content :content="$content" :key="$content->id"  ></livewire:content.content>
    @endforeach

    {{$contents->links()}}
</div>
