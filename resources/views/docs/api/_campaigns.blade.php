<div id="{{ $resource['name'] }}" class="subsection">
    <h2 class="mb-4">Campaigns</h2>
    <p class="mb-5">
        Manage campaigns
    </p>

    @if (isset($resource['children']))
        @foreach ($resource['children'] as $resource2)
            {!! $resource2['content'] !!}
        @endforeach
    @endif
</div>