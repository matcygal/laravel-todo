 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8" />
 <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
 </head>
 <body>
 @include('inc.navbar')
 <div class="container">
  @include('inc.msg')
 @yield('content')
</div>
<footer id="footer" class="container"><p>copywright &copy; matcygal.me 2017</p></footer>
 </body>
 </html>