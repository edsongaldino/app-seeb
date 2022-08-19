<!doctype html>
<html class="no-js" lang="pt-br">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Programa Jovem Aprendiz - Lar Maria de Lourdes</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="assets/site/images/favicon.png" type="image/png">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="assets/site/css/magnific-popup.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="assets/site/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="assets/site/css/LineIcons.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="assets/site/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="assets/site/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="assets/site/css/style.css">

    <!--====== Jquery js ======-->
    <script src="assets/site/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/site/js/vendor/modernizr-3.7.1.min.js"></script>

    <link href="{{ asset('assets/sistema/lib/sweetalert/dist/sweetalert.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area navbar-cadastro">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <a class="navbar-brand" href="#">
                            <img src="assets/img/logo2.png" alt="Logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item"><a class="page-scroll" href="#home">Home</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#about">Conheça a casa</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#portfolio">Onde estamos</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#contact">Contato</a></li>
                            </ul>
                        </div>

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li><a class="solid" href="/"><< VOLTAR</a></li>
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    @if(isset($cadastro))
    <section id="cadastro" class="formulario-cadastro">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Tudo certo {{ $cadastro->nome ?? '' }}</h3>
                        <p class="text cadastro">Seu cadastro foi realizado. Obrigado</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->

        </div> <!-- container -->
    </section>
    @else
    <section id="cadastro" class="formulario-cadastro">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">

                    <div class="contact-wrapper form-style-two"></div>

                        <div class="tab-content" id="nav-tabContent">

                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel">
                                <form name="cadastro-trabalhador" id="cadastro-trabalhador" action="{{ route('gravar-cadastro') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="tipo_cadastro" value="Trabalhador">
                                    <input type="hidden" name="id" value="{{ $cadastro->id ?? '' }}">

                                    <div class="row">

                                        <div class="titulo-modulo">1. Dados Pessoais</div>

                                        <div class="col-md-8">
                                            <div class="form-input mt-10">
                                                <label>Nome completo</label>
                                                <div class="input-items default">
                                                    <input name="nome" type="text" value="{{ $cadastro->nome_razao ?? '' }}" required>
                                                    <i class="lni lni-user"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-input mt-10">
                                                <label>Data de Nascimento</label>
                                                <div class="input-items default">
                                                    <input type="date" name="data_nascimento" id="data_nascimento" placeholder="00/00/0000" value="{{ $cadastro->data_nascimento ?? '' }}" required>
                                                    <i class="lni lni-calendar"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-input mt-10">
                                                <label>Email</label>
                                                <div class="input-items default">
                                                    <input type="email" name="email" placeholder="Email" value="{{ $cadastro->email ?? '' }}" required>
                                                    <i class="lni lni-envelope"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-input mt-10">
                                                <label>Telefone</label>
                                                <div class="input-items default">
                                                    <input type="text" name="telefone" class="telefone" placeholder="Telefone" value="{{ $cadastro->telefone ?? '' }}" required>
                                                    <i class="lni lni-phone"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-input mt-10">
                                                <label>Whatsapp</label>
                                                <div class="input-items default">
                                                    <input type="text" name="whatsapp" class="telefone"  placeholder="Whatsapp" value="{{ $cadastro->telefone ?? '' }}" required>
                                                    <i class="lni lni-phone"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>


                                        <div class="titulo-modulo">2. ENDEREÇO</div>

                                        <div class="col-md-4">
                                            <div class="form-input mt-10">
                                                <label>CEP</label>
                                                <div class="input-items default">
                                                    <input name="cep_endereco" id="cep_endereco" type="text" value="" required>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-input mt-10">
                                                <label>Logradouro</label>
                                                <div class="input-items default">
                                                    <input name="logradouro_endereco" id="logradouro_endereco" type="text" value="" required>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-input mt-10">
                                                <label>Número</label>
                                                <div class="input-items default">
                                                    <input name="numero_endereco" id="numero_endereco" type="text" value="" required>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-5">
                                            <div class="form-input mt-10">
                                                <label>Complemento</label>
                                                <div class="input-items default">
                                                    <input name="complemento_endereco" id="complemento_endereco" type="text" value="" required>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-input mt-10">
                                                <label>Bairro</label>
                                                <div class="input-items default">
                                                    <input name="bairro_endereco" id="bairro_endereco" type="text" placeholder="" value="" required>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-input mt-10">
                                                <label>Estado</label>
                                                <div class="input-items default">
                                                    <select class="sel" name="estado_endereco" id="estado_endereco">
                                                        <option value="">Selecione</option>
                                                        @foreach ($estados as $estado)
                                                        <option value="{{ $estado->id }}">{{ $estado->nome_estado }}</option>
                                                        @endforeach
                                                    </select>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-input mt-10" id="cidade_endereco">
                                                <label>Cidade</label>
                                                <div class="input-items default">
                                                    <select class="sel" name="cidade_endereco" data-placeholder="Selecione a cidade" required>
                                                        <option value="Selecione o estado">Selecione o estado</option>
                                                    </select>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="titulo-modulo">3. INFORMAÇÕES ADICIONAIS</div>

                                        <div class="col-md-4">
                                            <div class="form-input mt-10">
                                                <label>Está participando na Escola de Estudos Espíritas?</label>
                                                <div class="input-items default">
                                                    <select class="sel" name="ativo_eee" id="ativo_eee">
                                                        <option value="">Selecione</option>
                                                        <option value="Sim">Sim</option>
                                                        <option value="Não">Não</option>
                                                    </select>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-input mt-10" id="curso_eee">
                                                <label>Qual curso?</label>
                                                <div class="input-items default">
                                                    <select class="sel turno_matricula" name="curso_eee" id="curso_instituto">
                                                        <option value="">Selecione</option>
                                                        <option value="Noções Básicas de Doutrina Espírita">Noções Básicas de Doutrina Espírita</option>
                                                        <option value="Nosso Lar">Nosso Lar</option>
                                                        <option value="Passe">Passe</option>
                                                        <option value="Corrente Magnética">Corrente Magnética</option>
                                                        <option value="Vibração">Vibração</option>
                                                        <option value="Instituto">Instituto</option>
                                                    </select>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-input mt-10" id="instituto_pessoa">
                                                <label>Selecione o Instituto</label>
                                                <div class="input-items default">
                                                    <select class="sel turno_matricula" name="instituto_trabalho" id="instituto_trabalho">
                                                        <option value="">Selecione</option>
                                                        <option value="Caridade">Caridade</option>
                                                        <option value="Comunicação Social">Comunicação Social</option>
                                                        <option value="Divulgação">Divulgação</option>
                                                        <option value="Esclarecimento e Família">Esclarecimento e Família</option>
                                                        <option value="Criança">Criança</option>
                                                        <option value="Jovem">Jovem</option>
                                                    </select>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-input mt-10">
                                                <label>Está participando das atividades mediúnicas?</label>
                                                <div class="input-items default">
                                                    <select class="sel" name="atividade_mediunica" id="atividade_mediunica">
                                                        <option value="">Selecione</option>
                                                        <option value="Sim">Sim</option>
                                                        <option value="Não">Não</option>
                                                    </select>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-input mt-10">
                                                <label>Participa das Atividades Assistenciais?</label>
                                                <div class="input-items default">
                                                    <select class="sel turno_matricula" name="participa_atv_assistencial" id="participa_atv_assistencial">
                                                        <option value="">Selecione</option>
                                                        <option value="Sim">Sim</option>
                                                        <option value="Não">Não</option>
                                                    </select>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-input mt-10" id="qual_atividade">
                                                <label>Qual Atividade?</label>
                                                <div class="input-items default">
                                                    <select class="sel turno_matricula" name="atividade_assistencial" id="atividade_assistencial">
                                                        <option value="">Selecione</option>
                                                        <option value="Sábado de Manhã">Sábado de Manhã </option>
                                                        <option value="Campanha de Fraternidade Auta de Souza">Campanha de Fraternidade Auta de Souza</option>
                                                        <option value="Posto de Assistência">Posto de Assistência</option>
                                                    </select>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-input mt-10">
                                                <label>Em qual ano começou a frequentar a casa espírita?</label>
                                                <div class="input-items default">
                                                    <input name="ano_inicio" id="ano_inicio" type="number" placeholder="" value="" maxlength="4" required>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-input mt-10">
                                                <label>Como conheceu a casa espírita?</label>
                                                <div class="input-items default">
                                                    <select class="sel turno_matricula" name="como_conheceu" id="como_conheceu">
                                                        <option value="">Selecione</option>
                                                        <option value="Redes Sociais">Redes Sociais</option>
                                                        <option value="Mensagem Recebida">Mensagem Recebida</option>
                                                        <option value="Indicação de Alguém">Indicação de Alguém</option>
                                                        <option value="Buscadores">Buscadores (Google, Bing) </option>
                                                    </select>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="col-md-4">
                                            <div class="form-input mt-10">
                                                <label>O que te motivou a continuar?</label>
                                                <div class="input-items default">
                                                    <select class="sel turno_matricula" name="motivo_participacao" id="motivo_participacao">
                                                        <option value="">Selecione</option>
                                                        <option value="Tratamento Espiritual">Tratamento Espiritual</option>
                                                        <option value="Palestra Pública">Palestra Pública</option>
                                                        <option value="Escola de Estudos Espíritas">Escola de Estudos Espíritas</option>
                                                        <option value="Trabalho Assistencial">Trabalho Assistencial</option>
                                                        <option value="Mediunidade">Mediunidade</option>
                                                    </select>
                                                    <i class="lni lni-map-marker"></i>
                                                </div>
                                            </div> <!-- form input -->
                                        </div>

                                        <div class="titulo-modulo">4. CADASTRE SUA FOTO (SELFIE)</div>
                                        <div class="col-md-12">
                                            <div class="form-input light-rounded-buttons mt-30">
                                                <input type="file" class="main-btn light-rounded-two" value="Foto Perfil">
                                            </div> <!-- form input -->
                                        </div>

                                        <p class="form-message"></p>
                                        <div class="col-md-12">
                                            <div class="form-input light-rounded-buttons mt-30">
                                                <input type="submit" class="main-btn light-rounded-two enviar-cadastro" value="Finalizar Cadastro - Enviar Dados">
                                            </div> <!-- form input -->
                                        </div>

                                    </div>
                                </form>
                            </div>



                        </div>



                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>
    @endif


    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.php"><img src="assets/site/images/logo.png" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->
                    <div class="footer-support text-center">
                        <span class="number">(66) 3419-1184</span>
                        <span class="mail">jovemaprendiz@larmariadelourdes.org.br</span>
                    </div>
                    <div class="copyright text-center mt-35">
                        <a class="mt-30" href="index.php"><img src="assets/site/images/logo-datapix.png" alt="Logo"></a>
                    </div> <!--  copyright -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

<!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">

                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->


    <!--====== Bootstrap js ======-->
    <script src="assets/site/js/popper.min.js"></script>
    <script src="assets/site/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/site/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/site/js/jquery.magnific-popup.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="assets/site/js/ajax-contact.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/site/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/site/js/isotope.pkgd.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="assets/site/js/jquery.easing.min.js"></script>
    <script src="assets/site/js/scrolling-nav.js"></script>

    <!--====== Main js ======-->
    <script src="assets/site/js/main.js"></script>

    <script src="{{ asset('assets/global/js/cep.js') }}"></script>
    <script src="{{ asset('assets/global/js/busca.js') }}"></script>
    <script src="{{ asset('assets/global/js/jquery.maskMoney.js') }}"></script>
    <script src="{{ asset('/assets/sistema/lib/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <script src="assets/global/js/mascaras.js"></script>
    <script type="text/javascript" src="{{ asset('assets/sistema/lib/sweetalert/dist/sweetalert.min.js') }}" ></script>
    @include('sweetalert::alert')

    @if($idade_jovem ?? '' < 18):
       <script>
           $(".responsavel").prop('disabled', false);
       </script>
    @else
        <script>
            $(".responsavel").prop('disabled', true);
        </script>
    @endif

</body>

</html>
