@props(['name'])

@if ($name === 'down-arrow')
    <svg width="22" height="22" viewBox="0 0 22 22" {{ $attributes(['class' => 'transform -rotate-90']) }}>

        <g fill="none" fill-rule="evenodd">
            <path fill="#222" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
            </path>
        </g>

    </svg>
@endif

@if ($name === 'left-arrow')
    <svg width="22" height="22" viewBox="0 0 22 22" {{ $attributes(['class' => '']) }}>
        <g fill="none" fill-rule="evenodd">
            <path class="fill-current" d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
            </path>
        </g>
    </svg>
@endif
