<div class="row {{ isset($blockCentered) && !$blockCentered ? '' : 'justify-content-center' }}">
    <div class="col-{{ empty($blockBreakpoint) ? 'md' : $blockBreakpoint }}-{{ empty($blockWidth) ? 8 : $blockWidth }}">
        {{ $slot }}
    </div>
</div>