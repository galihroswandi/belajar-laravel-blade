<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Statement Blade</title>
</head>

<body>
    <p>
        @if (count($hobbies) === 1)
            I have one hobbie!
        @elseif(count($hobbies) > 1)
            I have multiple hobbie!
        @else
            I do not have hobbie!
        @endif
    </p>
</body>

</html>
