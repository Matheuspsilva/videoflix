<div>
    <x-slot name="header">Conteúdos cadastrados</x-slot>
    @foreach ($contents as $content )
        {{-- @livewire('content.content', ['content' => $content], key($content->id)) --}}
        <livewire:content.content :content="$content" :key="$content->id"  ></livewire:content.content>
    @endforeach

    {{$contents->links()}}
</div>
