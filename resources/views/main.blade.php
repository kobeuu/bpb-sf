<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Beasiswa Pemimpin Bangsa Sinergi Foundation</title>

    <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">

  </head>
  <body>
    <!-- header -->
    @include('pages.header')

    <!-- main content -->
    @yield('content')

    <!-- footer -->
    @include('pages.footer')

    <!-- search modal -->
    @include('partials.search')

    <script src="js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/search.js"></script>

  </body>
</html>