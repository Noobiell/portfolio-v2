<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/normalize.css">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--DEVICON-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">

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

    <section class="container mb-5">

        <div class="row text-center mb-3">

            <h1 class="titulo">Sobre mim<span class="ponto">.</span></h1>

        </div><!--Fim row-->

        <div class="row mb-5">

            <div class="col-12">

                <p class="branco text-center px-md-5">Desenvolvedor web apaixonado, com 22 anos de idade e mais de 3 anos de experiência. Minhas habilidades abrangem uma variedade de linguagens e tecnologias, incluindo HTML, CSS, JavaScript, PHP, MySQL, Bootstrap, JQuery, VueJS e Laravel. Com dedicação e criatividade, busco criar experiências digitais incríveis, desenvolvendo aplicativos e sites responsivos e intuitivos. Confira meu portfólio para ver alguns dos projetos em que trabalhei e descubra como posso ajudar a transformar suas ideias em realidade.</p>

            </div><!--Fim col-->

        </div><!--Fim row-->

        <div class="row pb-5">

            <div class="col-md-3">
                <a href="#" class="text-decoration-none d-flex flex-column justify-content-center align-items-center text-center gap-2 branco linkSobreM p-3">
                    <span class="iconeSobreMim"><i class="bi bi-person-fill"></i></span>
                    <div>
                        <h6 class="fw-bold">Nome completo</h6>
                        <span>Gabriel de Lima Oliveira</span>
                    </div>
                </a>
            </div><!--Fim col-->

            <div class="col-md-3">
                <a href="mailto:noobieldev@gmail.com" target="_blank" class="text-decoration-none d-flex flex-column justify-content-center align-items-center text-center gap-2 branco linkSobreM p-3">
                    <span class="iconeSobreMim"><i class="bi bi-envelope-at-fill"></i></span>
                    <div>
                        <h6 class="fw-bold">Email</h6>
                        <span>noobieldev@gmail.com</span>
                    </div>
                </a>
            </div><!--Fim col-->

            <div class="col-md-3">
                <a href="https://www.instagram.com/noobiel_/" target="_blank" class="text-decoration-none d-flex flex-column justify-content-center align-items-center text-center gap-2 branco linkSobreM p-3">
                    <!-- <span class="iconeSobreMim"><i class="bi bi-twitter"></i></span> -->
                    <span class="iconeSobreMim"><i class="bi bi-instagram"></i></span>
                    <div>
                        <h6 class="fw-bold">Instagram</h6>
                        <span>@noobiel_</span>
                    </div>
                </a>
            </div><!--Fim col-->

            <div class="col-md-3">
                <a href="http://wa.me/5511941741138" target="_blank" class="text-decoration-none d-flex flex-column justify-content-center align-items-center text-center gap-2 branco linkSobreM p-3">
                    <span class="iconeSobreMim"><i class="bi bi-whatsapp"></i></span>
                    <div>
                        <h6 class="fw-bold">Whatsapp</h6>
                        <span>+55 11 94174-1138</span>
                    </div>
                </a>
            </div><!--Fim col-->

        </div>

    </section>

    <section class="container mb-5">

        <div class="row text-center mb-4">
            <h1 class="titulo">Meus conhecimentos<span class="ponto">.</span></h1>
        </div><!--Fim row-->

        <div class="row d-flex align-content-stretch">

            <div class="col-md-3 mb-5">

                <div class="d-flex flex-column justify-content-center align-items-center gap-3 p-4 skill h-100">
                    <i class="devicon-html5-plain fs-2"></i>
                    <h3>HTML 5</h3>
                    <span>É a linguagem de marcação padrão para criar páginas da web. Ela fornece a estrutura básica e os elementos que compõem uma página, como cabeçalhos, parágrafos, imagens, links, entre outros.</span>
                </div>

            </div><!--Fim col-->

            <div class="col-md-3 mb-5">

                <div class="d-flex flex-column justify-content-center align-items-center gap-3 p-4 skill h-100">
                    <i class="devicon-css3-plain fs-2"></i>
                    <h3>CSS 3</h3>
                    <span>É usado para estilizar as páginas da web, permitindo que você altere a aparência dos elementos HTML. Com o CSS, você pode definir cores, fontes, margens, tamanhos, layouts e muito mais.</span>
                </div>

            </div><!--Fim col-->

            <div class="col-md-3 mb-5">

                <div class="d-flex flex-column justify-content-center align-items-center gap-3 p-4 skill h-100">
                    <i class="devicon-javascript-plain fs-2"></i>
                    <h3>Javascript</h3>
                    <span>É uma linguagem de programação de alto nível e interpretada, que é amplamente usada para criar interatividade nas páginas da web. Com JavaScript, você pode adicionar recursos dinâmicos, manipular eventos, criar animações e muito mais.</span>
                </div>

            </div><!--Fim col-->

            <div class="col-md-3 mb-5">

                <div class="d-flex flex-column justify-content-center align-items-center gap-3 p-4 skill h-100">

                    <i class="devicon-php-plain fs-1"></i>
                    <h3>PHP</h3>
                    <span>É uma linguagem de script do lado do servidor, especialmente adequada para o desenvolvimento web. Com o PHP, você pode criar aplicativos web dinâmicos, gerar conteúdo personalizado, trabalhar com bancos de dados e muito mais.</span>
                </div>

            </div><!--Fim col-->

        </div><!--Fim row-->

        <div class="row d-flex align-content-stretch">

            <div class="col-md-3 mb-5">

                <div class="d-flex flex-column justify-content-center align-items-center gap-3 p-4 skill h-100">
                    <i class="devicon-mysql-plain fs-2"></i>
                    <h3>MySQL</h3>
                    <span>É um sistema de gerenciamento de banco de dados relacional (RDBMS) amplamente usado. É frequentemente usado junto com o PHP para armazenar e recuperar informações de um banco de dados.</span>
                </div>

            </div><!--Fim col-->

            <div class="col-md-3 mb-5">

                <div class="d-flex flex-column justify-content-center align-items-center gap-3 p-4 skill h-100">
                    <i class="devicon-bootstrap-plain fs-2"></i>
                    <h3>Bootstrap</h3>
                    <span>É um framework de front-end que oferece uma série de estilos e componentes pré-construídos para facilitar o desenvolvimento de interfaces responsivas e atraentes. O Bootstrap utiliza HTML, CSS e JavaScript para ajudar na criação de layouts e designs consistentes.</span>
                </div>

            </div><!--Fim col-->

            <div class="col-md-3 mb-5">

                <div class="d-flex flex-column justify-content-center align-items-center gap-3 p-4 skill h-100">
                    <i class="devicon-jquery-plain fs-2"></i>
                    <h3>JQuery</h3>
                    <span>É uma biblioteca JavaScript rápida e concisa que simplifica a manipulação de documentos HTML, manipulação de eventos, animações e interações com AJAX.</span>
                </div>

            </div><!--Fim col-->

            <div class="col-md-3 mb-5">

                <div class="d-flex flex-column justify-content-center align-items-center gap-3 p-4 skill h-100">
                    <i class="devicon-vuejs-plain fs-2"></i>
                    <h3>VueJS</h3>
                    <span>É um framework JavaScript progressivo para a construção de interfaces de usuário. Ele é usado para criar aplicativos de página única (SPA) com uma renderização reativa e componentes reutilizáveis.</span>
                </div>

            </div><!--Fim col-->

        </div><!--Fim row-->

        <div class="row align-content-stretch">

            <div class="col-md-3 mb-5">

                <div class="d-flex flex-column justify-content-center align-items-center gap-3 p-4 skill h-100">
                    <i class="devicon-laravel-plain fs-2"></i>
                    <h3>Laravel</h3>
                    <span>É um framework de desenvolvimento web em PHP que segue o padrão MVC (Model-View-Controller). Ele fornece uma estrutura robusta e elegante para o desenvolvimento de aplicativos web modernos e escaláveis.</span>
                </div>

            </div><!--Fim col-->

        </div><!--Fim row-->


    </section>

    <section class="container mb-5">
        <div class="row text-center">
            <h1 class="titulo">Minhas Skills<span class="ponto">.</span></h1>
        </div><!--Fim row-->

        <div class="row">

            <div class="col-md-3 text-center">

                <h1 class="valorSkills">90%</h1>
                <span class="txtVlrSkill">HTML</span>

            </div><!--Fim col-->

            <div class="col-md-3 text-center">

                <h1 class="valorSkills">75%</h1>
                <span class="txtVlrSkill">CSS</span>

            </div><!--Fim col-->

            <div class="col-md-3 text-center">

                <h1 class="valorSkills">80%</h1>
                <span class="txtVlrSkill">JAVASCRIPT</span>

            </div><!--Fim col-->

            <div class="col-md-3 text-center">

                <h1 class="valorSkills">82%</h1>
                <span class="txtVlrSkill">PHP</span>

            </div><!--Fim col-->

        </div><!--Fim row-->

    </section>

    <section class="container">

        <div class="row text-center">
            <h1 class="titulo">Entre em contato<span class="ponto">.</span></h1>
        </div><!--Fim row-->

        <form>
            <div class="row mb-3">

                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Primeiro nome">
                    </div>
                </div><!--Fim col-->

                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Sobrenome">
                    </div>
                </div><!--Fim col-->

                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                </div><!--Fim col-->

                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone">
                    </div>
                </div><!--Fim col-->

                <div class="col-12">
                    <textarea class="form-control" id="message" name="message" placeholder="Mensagem" rows="5"></textarea>
                </div>

                <div class="col-12 text-center pt-3">
                    <button class="btn btn-lg btnVerde" type="submit">Enviar mensagem <i class="bi bi-chevron-right"></i></button>
                </div>

            </div>
        </form>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>