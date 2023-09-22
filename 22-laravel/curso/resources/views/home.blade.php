<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Home page</title>
  @vite('resources/css/app.css')
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      color: #fff;
      font-family:  sans-serif;
    }
    body {
      min-height: 100vh;
      background: linear-gradient(45deg, #f7a224, #c513a7);
    }

  </style>
</head>

<body>
  <h1 class="text-center mt-8 mb-14 text-3xl font-bold">This is the home page</h1>

  <div class="text-center">Here the actions go</div>

</body>

</html>
