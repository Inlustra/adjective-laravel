<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>{{$from->fullName}} has accepted your meeting.</h2>

<div>
    This is a quick message to inform you that {{$from->fullName}} has accepted your
    meeting:
    <br>
    {{$meeting->agenda}}
    <br>
    {{$meeting->time}}

</div>
</body>
</html>
