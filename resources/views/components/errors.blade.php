@if (isset($errors) && count($errors) > 0)
<section class="container mt-3">
    @component('shared.components.alert', ['alertClass' => 'danger animated swing'])
        <ul class="list-unstyled mb-0">
            @foreach ($errors->all() as $error)
            <li>
                <i class="icon-attention" aria-hidden="true"></i>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    @endcomponent
</section>
@endif