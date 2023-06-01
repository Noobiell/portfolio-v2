<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--FONTAWESOME-->
    <script src="https://kit.fontawesome.com/59f636855b.js" crossorigin="anonymous"></script>

    <!--SWEETALERT-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!--Tema Padrão-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css">


    <title>Noobiel dev - Portfólio</title>
    <meta name="description" content="Olá, sou Gabriel, um desenvolvedor web apaixonado com 22 anos de idade e mais de 3 anos de experiência. Minhas habilidades abrangem uma variedade de linguagens e tecnologias, incluindo HTML, CSS, JavaScript, PHP, MySQL, Bootstrap, JQuery, VueJS e Laravel. Com dedicação e criatividade, busco criar experiências digitais incríveis, desenvolvendo aplicativos e sites responsivos e intuitivos. Confira meu portfólio para ver alguns dos projetos em que trabalhei e descubra como posso ajudar a transformar suas ideias em realidade.">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
</head>

<body>


    <nav class="navbar navbar-expand-md fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo_noobiel.png" alt="Logo Noobiel dev" class="logoHeader">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <i class="bi bi-list"></i>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3 gap-3">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre mim</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Entre em contato</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


    <header class="container mb-5">

        <section class="row">

            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">
                <div class="textoApresentacao">
                    <h1>Olá, Sou o Gabriel Oliveira</h1>
                    <p>Desenvolvedor FullStack</p>
                </div>

                <div class="d-flex align-items-start gap-3 w-100 ps-3">
                    <a href="#" class="btn btnVerde">Baixar CV</a>
                    <a href="#" class="btn btnOutlineCinza">Saiba mais</a>
                </div>
            </div><!--Fim col-->

            <div class="col-md-6 px-md-5">
                <img src="assets/img/foto_perfil_2-min.png" alt="Foto de perfil Noobiel Dev" class="img-fluid">
            </div><!--Fim col-->

        </section>

    </header>

    <section class="container">

        <div class="row text-center mb-3">

            <h1 class="titulo">Sobre mim <span class="ponto">.</span></h1>

        </div><!--Fim row-->

        <div class="row">

            <div class="col-12">

                <p class="branco text-center px-md-5">Olá, sou Gabriel, um desenvolvedor web apaixonado com 22 anos de idade e mais de 3 anos de experiência. Minhas habilidades abrangem uma variedade de linguagens e tecnologias, incluindo HTML, CSS, JavaScript, PHP, MySQL, Bootstrap, JQuery, VueJS e Laravel. Com dedicação e criatividade, busco criar experiências digitais incríveis, desenvolvendo aplicativos e sites responsivos e intuitivos. Confira meu portfólio para ver alguns dos projetos em que trabalhei e descubra como posso ajudar a transformar suas ideias em realidade.</p>

            </div><!--Fim col-->

        </div>

    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>