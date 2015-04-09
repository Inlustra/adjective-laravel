<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>{{$from->fullName}} requested a meeting.</h2>

<div>
    This is a quick message to inform you that {{$from->fullName}} has requested a meeting with you:
    <br>
    {{$meeting->agenda}}
    <br>
    {{$meeting->time}}

</div>
</body>
</html>
