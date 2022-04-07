<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <header class="sticky top-0 bg-primary-dark">
      <div class="container">
        <nav>
            <ul class="flex justify-between items-center">
                <li>
                    <a href="/">
                        <img class="h-6" src="/images/logo.svg" alt="fontech logo">
                    </a>
                </li>
                <li class="p-4">
                    <a class="transition-color duration-300 hover:text-white" href="/events/create">
                        新增讀書會
                    </a>
                </li>
            </ul>
        </nav>
      </div>
    </header>
    <main class="min-h-screen">
        @yield('content')
    </main>
</body>
</html>
