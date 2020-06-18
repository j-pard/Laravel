<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="style.css">
      <title>@yield('title')</title>
</head>
<body>
    <style>
          ul {
                border-bottom: 1px solid gray;
                margin: 10px auto;
                padding: 10px
          }
    </style>
      @yield('content')

</body>
</html>