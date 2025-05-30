<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CAM</title>
  <link
    rel="shortcut icon"
    href="view/img/Projeto CAM - Logo do Site.png"
    type="image/x-icon" />
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
    crossorigin="anonymous" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
    rel="stylesheet" />
  <meta
    name="description"
    content="CAM: Sua jornada de bem-estar começa aqui. Descubra onde encontrar apoio emocional para uma mente mais saudável." />
  <meta
    name="keywords"
    content="CAM,saúde mental, apoio emocional, conscientização, bem-estar, solidariedade, comunidade, recursos, auto-cuidado, compreensão, esperança,depressão, suicídio." />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
  <link rel="stylesheet" href="view/css/style.css" />
  <!-- Google tag (gtag.js) -->
  <script
    async
    src="https://www.googletagmanager.com/gtag/js?id=G-DWYC0130QK"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-DWYC0130QK");
  </script>
</head>

<body>
  <header id="cabecalho">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h1 id="logo">
            <a href="index.php"><img src="view/img/Projeto_logo.png" alt="Logo" width="130"
                class="img-fluid" /></a>
          </h1>
        </div>
        <div id="menu" class="col-md-6">
          <nav>
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="view/sobre_nos.php">Sobre Nós</a></li>
              <li><a href="view/nt.php">Notícias e Atualizações</a></li>
              <li><a href="view/login.php">Entrar</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <main>
    <section id="banner">
      <div id="BM_CAM" class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 texto_banner">
            <h2 id="bem_vindo" class="mb-3 text-center" data-aos="fade-down">
              Bem vindo ao C.A.M.
            </h2>
            <h2 id="sig_cam" class="mb-4 text-center" data-aos="fade-down">
              <em>Caminhos para um Amanhã Melhor</em>
            </h2>
            <p id="objetivo" class="text-center" data-aos="fade-up">
              Nosso projeto visa fornecer informações cruciais e recursos
              essenciais para apoiar a saúde mental e prevenir o suicídio.
              Reconhecendo a importância de disponibilizar suporte e
              orientação para aqueles que enfrentam desafios emocionais,
              estamos comprometidos em criar uma plataforma informativa
              acessível e acolhedora.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section id="botoes">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <p id="botoes_aten" class="text-center" data-aos="fade-up">
              <button id="button_aten_online" class="btn bot" type="button" data-bs-toggle="collapse"
                data-bs-target="#aten_online" aria-expanded="false" aria-controls="aten_online">
                <h5>Instituições Online</h5>
                <img src="view/img/aten_online.png" alt="Atendimento Online. Clique para saber mais."
                  width="300" class="img-fluid bt_img" />
              </button>
              <button id="button_aten_presencial" class="btn bot" type="button" data-bs-toggle="collapse"
                data-bs-target="#aten_presencial" aria-expanded="false" aria-controls="aten_presencial">
                <h5>Instituições Presenciais</h5>
                <img src="view/img/aten_presencial.png" alt="Atendimento Presencial. Clique para saber mais."
                  width="300" class="img-fluid bt_img" />
              </button>
            </p>
          </div>
        </div>
      </div>
      <div class="container">
        <div id="rowonline" class="row justify-content-center coalp">
          <div class="col-md-10">
            <div class="collapse multi-collapse" id="aten_online">
              <div class="card card-body backBotoes">
                <div class="btn-group" role="group" aria-label="botoes_aten_online">
                  <button type="button" class="btn btn_text">
                    <a href="https://casademarias.com/" target="_blank">
                      <div class="boxImg">
                        <img src="view/img/casa_marias.png" alt="casa das marias" class="img-fluid" />
                      </div>
                      <h5>Casa De Marias</h5>
                    </a>
                  </button>
                  <button type="button" class="btn btn_text">
                    <a href="https://www.casaum.org/" target="_blank">
                      <div class="boxImg">
                        <img src="view/img/casa1.png" alt="casa1" class="img-fluid" />
                      </div>
                      <h5>Casa 1</h5>
                    </a>
                  </button>
                  <button type="button" class="btn btn_text">
                    <a href="https://www.bemdoestar.org/" target="_blank">
                      <div class="boxImg">
                        <img src="view/img/bem_do_estar.png" alt="Instituto bem do estar"
                          class="img-fluid" />
                      </div>
                      <h5>Bem Do Estar</h5>
                    </a>
                  </button>
                  <button type="button" class="btn btn_text">
                    <a href="https://institutoborboletaazul.org.br/" target="_blank">
                      <div class="boxImg">
                        <img src="view/img/borboletaAzul.png" alt="Instituto Borboleta Azul"
                          class="img-fluid" />
                      </div>
                      <h5>Borboleta Azul</h5>
                    </a>
                  </button>
                  <button type="button" class="btn btn_text">
                    <a href="https://ipefem.org.br/" target="_blank">
                      <div class="boxImg">
                        <img src="view/img/ipefem.png" alt="Instituto Ipefem" class="img-fluid" />
                      </div>
                      <h5>Ipefem</h5>
                    </a>
                  </button>
                  <button type="button" class="btn btn_text">
                    <a href="https://cvv.org.br/" target="_blank">
                      <div class="boxImg">
                        <img src="view/img/cvv.png" alt="Centro de Valorização da Vida"
                          class="img-fluid" />
                      </div>
                      <h5>CVV</h5>
                    </a>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div id="rowpresencial" class="row justify-content-center coalp">
          <div class="col-md-10">
            <div class="collapse multi-collapse" id="aten_presencial">
              <div class="card card-body backBotoes">
                <h5 class="text-center">Instituições - Marília-SP</h5>
                <h6 class="text-center">Clique para saber mais.</h6>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn_text">
                    <a href="https://www.gov.br/saude/pt-br/composicao/saes/desmad/raps/caps"
                      target="_blank">
                      <div class="boxImg">
                        <img src="view/img/caps.png" alt="caps" class="img-fluid" />
                      </div>
                      <h5>CAPS</h5>
                    </a>
                  </button>
                  <button type="button" class="btn toggle-button btn_text" onclick="toggleNumber()">
                    <div id="ahref">
                      <div class="boxImg">
                        <img src="view/img/samu.png" alt="samu" class="img-fluid" />
                      </div>
                      <h5>SAMU</h5>
                      <div id="samu-number" class="hidden-number">
                        Ligar 192
                      </div>
                    </div>
                  </button>
                  <button type="button" class="btn btn_text">
                    <a href="https://blog.unimar.br/2020/07/22/clinica-de-psicologia-da-unimar/"
                      target="_blank">
                      <div class="boxImg">
                        <img src="view/img/unimar.png" alt="Unimar" class="img-fluid" />
                      </div>
                      <h5>Unimar</h5>
                    </a>
                  </button>
                  <button type="button" class="btn btn_text">
                    <a href="https://www.aa.org.br/" target="_blank">
                      <div class="boxImg">
                        <img src="view/img/AA.png" alt="alcolicos anonimos" class="img-fluid" />
                      </div>
                      <h5>Alcoólicos Anônimos</h5>
                    </a>
                  </button>
                  <button type="button" class="btn btn_text">
                    <a href="https://www.gov.br/saude/pt-br/assuntos/saude-de-a-a-z/u/upa-24h" target="_blank">
                      <div class="boxImg">
                        <img src="view/img/upa.png" alt="UPA" class="img-fluid" />
                      </div>
                      <h5>UPA</h5>
                    </a>
                  </button>
                  <button type="button" class="btn btn_text">
                    <a href="https://amorexigente.org/grupos-presenciais/" target="_blank">
                      <div class="boxImg">
                        <img src="view/img/ae.png" alt="Assossiação Mariliense de Amor Exigente - AMAE" class="img-fluid" />
                      </div>
                      <h5>AMAE</h5>
                    </a>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="carrosel_fundo">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col titulo" data-aos="fade-up">
            <h2 class="text-center">Eventos Saúde Mental</h2>
            <h5 class="text-center">Marília-SP</h5>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
            <div id="carrosel" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carrosel" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carrosel" data-bs-slide-to="1"
                  aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carrosel" data-bs-slide-to="2"
                  aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                  <img src="view/img/PasseataIdosos.png" class="d-block w-100 img-carrosel"
                    alt="passeata dos idosos" />
                  <div class="carousel-caption d-none d-md-block texto_carrosel">
                    <h5>Passeata para Saúde</h5>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <img src="view/img/EventoSaúde.png" class="d-block w-100 img-carrosel" alt="evento" />
                  <div class="carousel-caption d-none d-md-block texto_carrosel">
                    <h5>Caminhada pela Vida</h5>
                  </div>
                </div>
                <div class="carousel-item" data-bs-interval="10000">
                  <img src="view/img/Palestra.png" class="d-block w-100 img-carrosel" alt="palestra" />
                  <div class="carousel-caption d-none d-md-block texto_carrosel">
                    <h5>Palestra Sobre Saúde Mental</h5>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carrosel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carrosel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Próximo</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer">
    <div id="rodape" class="container">
      <div class="row justify-content-center">
        <div class="col-md-2 rd">
          <h2>CAM</h2>
          <ul class="rp">
            <li><a href="index.php">Home</a></li>
            <li><a href="view/sobre_nos.php">Sobre Nós</a></li>
            <li><a href="view/nt.php">Notícias e Atualizações</a></li>
            <li>
              <a href="view/pdp.php">Política de Privacidade</a>
            </li>
            <li><a href="view/faq.php">FAQ</a></li>
            <li><a href="#">Aplicativo CAM</a></li>
          </ul>
        </div>
        <div class="col-md-2">
          <h2>Contato</h2>
          <ul class="rp">
            <li>
              <a href="mailto:cam@email.com">
                <i class="fa-solid fa-envelope"></i>cam@email.com
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div id="copyright">
      <p>2024 &copy; Copyright - Todos os direitos são reservados</p>
    </div>
  </footer>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="js/main.js"></script>
</body>

</html>