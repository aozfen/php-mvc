<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Php MVC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @yield('css')

</head>
<body>
  @yield('content')

  <script>
    var base_url = '<?php echo base_url(); ?>'
  </script>
  <!--<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>-->
  <script src="{{asset_url('js/jquery-3.3.1.min.js')}}"></script>
  @yield('js')

</body>
</html>