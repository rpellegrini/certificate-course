<html>
  <head>
    <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
        crossorigin="anonymous">

        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
        <link href="{{ asset('assets/css/certificate.css') }}" rel="stylesheet" type="text/css" />

    <title>Certificado</title>
  </head>
  <body>
  <div class="container">

    <ul class="nav nav-pills">
      <li role="presentation"><a href="#">Criar Certificado</a></li>
   </ul>

    @yield('content')

  </div>

  @section('scripts')
    @include('core.scripts')
    @parent
  @show

  </body>

</html>
