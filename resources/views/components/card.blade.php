
<div class="card {{ empty($cardClass) ? '' : $cardClass }}">

    @if(isset($cardTitle))
    <div class="card-header {{ empty($cardTitleClass) ? 'bg-info' : $cardTitleClass }}">{!! $cardTitle !!}</div>
    @endif

    <div class="card-body">
        {{ $slot }}
    </div>
    
</div>