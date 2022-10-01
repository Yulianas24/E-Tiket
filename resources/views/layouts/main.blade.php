<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>E-Tiket</title>
</head>
<body class="flex items-center py-10 h-screen bg-cover bg-fixed bg-[#35737C]/100 bg-blend-multiply" 
style="background-image: url('../assets/bg_image/Bus_AKAP.jpg');">
  @yield('container')
</body>
</html>