@if(Session::has('success'))
<section class="container mt-3">
    @component('shared.components.alert', ['alertClass' => 'success animated tada'])
        <i class="icon-info" aria-hidden="true"></i>
        {{ Session::get('success') }}
    @endcomponent
</section>
@endif