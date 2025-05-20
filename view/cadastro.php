<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CAM</title>
  <link
    rel="shortcut icon"
    href="img/Projeto CAM - Logo do Site.png"
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
  <link rel="stylesheet" href="css/style.css" />
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
            <a href="index.php"><img src="img/Projeto_logo.png" alt="Logo" width="130"
                class="img-fluid" /></a>
          </h1>
        </div>
        <div id="menu" class="col-md-6">
          <nav>
            <ul>
              <li><a href="../index.php">Home</a></li>
              <li><a href="sobre_nos.php">Sobre Nós</a></li>
              <li><a href="nt.php">Notícias e Atualizações</a></li>
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
          <div class="col-md-3 texto_banner_login">
            <form class="row g-3 needs-validation" novalidate>
              <div class="col-md-4">
                <label for="validationCustom01" class="form-label">Nome</label>
                <input
                  type="text"
                  class="form-control"
                  id="validationCustom01"
                  placeholder="Primeiro Nome"
                  required />
                <div class="valid-feedback">Muito bem!</div>
              </div>
              <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Sobrenome</label>
                <input
                  type="text"
                  class="form-control"
                  id="validationCustom02"
                  placeholder="Sobrenome"
                  required />
                <div class="valid-feedback">Muito bem!</div>
              </div>
              <div class="col-md-4">
                <label for="validationCustomUsername" class="form-label">Usuário</label>
                <div class="input-group has-validation">
                  <input
                    type="text"
                    class="form-control"
                    id="validationCustomUsername"
                    aria-describedby="inputGroupPrepend"
                    placeholder="Usuário"
                    required />
                  <div class="invalid-feedback">
                    Por favor, escolha um usuário.
                  </div>
                </div>
              </div>
              <div>
                <label for="inputPassword5" class="form-label">Senha</label>
                <input
                  type="password"
                  id="inputPassword5"
                  class="form-control"
                  aria-describedby="passwordHelpBlock"
                  placeholder="Sua senha deve conter no mínimo 8 caracteres" />
              </div>
              <div>
                <label for="inputPassword6" class="form-label">Confirmar Senha</label>
                <input
                  type="password"
                  id="inputPassword6"
                  class="form-control"
                  aria-describedby="passwordHelpBlock"
                  placeholder="Confirme sua senha" />
              </div>
              <div class="col-7">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="invalidCheck"
                    required />
                  <label class="form-check-label" for="invalidCheck">
                    Aceite os Termos e Condições
                  </label>
                  <div class="invalid-feedback">
                    Você precisa aceitar antes de se cadastrar.
                  </div>
                </div>
              </div>
              <div class="col-5 btnLogarCadastrarAlign">
                <button class="btn btn-primary btnLogarCadastrar" type="submit">
                  Cadastrar
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script src="js/main.js"></script>
</body>

</html>