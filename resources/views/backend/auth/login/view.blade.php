@extends('backend.layout')

@section('page')
    <x-main>
        <x-block>
            <x-card cardTitle="Login">
                @include('backend.parts.forms.login')
        </x-card>
        </x-block>
    </x-main>
@endsection