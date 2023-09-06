<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Encoding</title>
</head>

<body>
    {{-- {!! $name !!} --}} {{-- ketika ada script berbahaya maka akan dijalankan --}}
    {{ $name }} {{-- ketika ada script berbahaya maka tidak akan dijalankan --}}
</body>

</html>
