<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade Components</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    {{-- @php
    $icon = "logo.svg"    
    @endphp

    <x-icon :src="$icon"/>
    <x-ui.button/> --}}

    <x-alert type="warning" id="my-alert" class="mt-4 " role="flash">
        {{-- {{ $component->icon() }} --}}
        <p class="mb-0">Data has been removed. {{ $component->link('Undo') }}</p>
    </x-alert>
    <x-form action="/images" method="POST">
        <input type="text" name="name">
        <button type="submit">Submit</button>
    </x-form>
</body>
</html>