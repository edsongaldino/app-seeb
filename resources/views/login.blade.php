<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="twitter:site" content="@datapix">
    <meta name="twitter:creator" content="@datapix">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="SEEB - Sistema de gestão do centro espírita">
    <meta name="twitter:description" content="Sistema de Gerenciamento interno">
    <meta name="twitter:image" content="https://app.euripedesbarsanulfo.org.br/assets/img/img-site.jpg">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Sistema de Gerenciamento interno">

    <meta property="og:image" content="https://app.euripedesbarsanulfo.org.br/assets/img/img-site.jpg">
    <meta property="og:image:secure_url" content="https://app.euripedesbarsanulfo.org.br/assets/img/img-site.jpg">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="SEEB - Sistema de gestão do centro espírita">
    <meta name="author" content="ThemePixels">

    <title>SEEB - Sistema de gestão do centro espírita</title>

    <!-- vendor css -->
    <link href="{{ asset('/assets/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/css/bracket.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/css/custom.css') }}">

    <link href="/assets/lib/sweetalert/dist/sweetalert.css" rel="stylesheet" type="text/css" />
  </head>

  <body>

    <div class="d-flex align-items-center justify-content-center bg-login ht-100v">
      <form name="FormLogin" method="POST" action="{{ route('login.do') }}">
      @csrf
      <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white rounded shadow-base">
        <div class="signin-logo tx-center tx-28 tx-bold tx-inverse"><img src="{{ asset('/assets/img/logo.png') }}" alt=""></div>
        <div class="tx-center mg-b-60">Sistema de gestão do centro espírita</div>

        <div class="form-group">
          <input type="text" class="form-control" placeholder="Seu e-mail" name="email">
        </div><!-- form-group -->
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Insira sua senha" name="password">
          <a href="" class="tx-info tx-12 d-block mg-t-10">Esqueceu sua senha?</a>
        </div><!-- form-group -->
        <button type="submit" class="btn btn-info btn-block">ENTRAR</button>
      </div><!-- login-wrapper -->
      </form>
    </div><!-- d-flex -->

    <script src="{{ asset('/assets/lib/jquery/jquery.js') }}"></script>
    <script src="{{ asset('/assets/lib/popper.js/popper.js') }}"></script>
    <script src="{{ asset('/assets/lib/bootstrap/bootstrap.js') }}"></script>

    <script type="text/javascript" src="/assets/lib/sweetalert/dist/sweetalert.min.js" ></script>
    <script src="/vendor/sweetalert/sweetalert.all.js"></script>

    @include('sweetalert::alert')
  </body>
</html>