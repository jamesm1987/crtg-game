<div class="alert alert-{{ empty($alertClass) ? 'primary' : $alertClass }} fade show" role="alert" {!! empty($alertHidden) ? '' : 'style="display: none;"' !!}>
    <div class="row">   
        
        <div class="col-{{ empty($noAlertHide) ? 10 : 12 }}" {!! empty($alertId) ? '' : ('id="' . $alertId . '"') !!}>
            {{ $slot }}
        </div>
        
        @if(empty($noAlertHide))
        <div class="col-2">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    
    </div>
</div>