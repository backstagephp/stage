<x-page>
    <x-slot:headFirst>
        <link rel="preconnect" href="https://rsms.me/">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    </x-slot>

    <h1>Betekenis van User Experience (UX)</h1>
    {!! $content->field('body') !!}

    <x-blocks field="blocks" />
    <x-blocks field="main" />
</x-page>