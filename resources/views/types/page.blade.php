<x-page>
    <h1>{!! $content->name !!}</h1>
    {!! $content->field('body') !!}

    <x-blocks field="blocks" />
</x-page>