<!DOCTYPE html>
<html lang="en">

    <head>
    
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}"/>
        <title>Covid Road To Glory</title>
        
        @include('shared.layout.header.fonts')
        @include('shared.layout.header.favicon')
        
        <link rel="stylesheet" href="{{ config('app.url') }}{{ mix('css/backend.css', 'assets/build') }}"/>
        <link rel="preload" href="{{ config('app.url') }}{{ mix('js/backend.js, 'assets/build') }}" as="script"/>
        
    </head>
    
    <body>
        <header>
            @include('backend.layout.header.navigation')
        </header>