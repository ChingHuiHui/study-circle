<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <h1 class="container">
    Hello world!
  </h1>
  @foreach ($events as $event)
      {{ $event->title }}
  @endforeach
</body>
</html>
