<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programmer & Skill</title>
  <!-- Boostsrap Style -->
  <link rel="stylesheet" href="{{ asset('') }}/vendor/bootstrap-twitter/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('') }}/vendor/bootstrap-twitter/css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="{{ asset('') }}/assets/css/soal6.css">
  @stack('style')
</head>
<body>
    <div class="container" id="app">
      @yield('content')
    </div>
  </body>

  <!-- Jquery Script -->
  <script src="{{ asset('') }}/vendor/jquery/jquery.min.js"></script>
  <!-- Bootstrap Script -->
  <script src="{{ asset('') }}/vendor/bootstrap-twitter/js/bootstrap.js"></script>
  <!-- Vue JS -->
  <script src="{{ asset('') }}/vendor/vue/vue.js"></script>
  <!-- Axios JS -->
  <script src="{{ asset('') }}/vendor/axios/axios.js"></script>
  <!-- Custom Script -->
  @stack('script')
</body>
</html>