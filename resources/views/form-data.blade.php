<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="/data-handle/form" method="post">
    @csrf
    <input type="text" name="eventName">
    <input type="text" name="bandNames">
    <input type="text" name="startDate">
    <input type="text" name="endDate">
    <input type="text" name="portfolio">
    <input type="text" name="ticketPrice">
    <input type="text" name="status">
    <input type="submit" name="submit">
</form>
</body>
</html>
