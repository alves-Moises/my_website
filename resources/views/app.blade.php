<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="Agência digital com foco em entregas de qualidade e performance." />

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body id="home" class="font-sans antialiased body">
    <section class="app-page">
        <div class="global-overlay"></div>
        <section class="menu-mobile">
            <nav class="navigation">
                <a class="link -active" href="#home">
                    home
                </a>
                <a class="link" href="#features">
                    diferênciais
                </a>
                <a class="link" href="#technologies">
                    tecnologias
                </a>
                <a class="link" href="#contact">
                    contato
                </a>
            </nav>
            <span class="close">Fechar</span>
        </section>
        <section class="main-banner">
            <img class="background" src="{{ Vite::asset('resources/images/banner.jpg') }}" />
            <div class="overlay"></div>
            <header class="main-header">
                <figure class="logo">
                    <img class="image" width="50px" height="50px" alt="Alvés Informática Logo"
                        src="{{ Vite::asset('resources/images/icons/logo-white.png') }}" />

                    <figcaption class="text">Alves Informática</figcaption>
                </figure>

                <img width="50" height="50" class="icon" alt="Abrir Menu"
                    src="{{ Vite::asset('resources/images/icons/menu.svg') }}" />

                <nav class="navigation">
                    <a class="link -active" href="#home">
                        home
                    </a>
                    <a class="link" href="#features">
                        serviços
                    </a>
                    <a class="link" href="#technologies">
                        portfólio
                    </a>
                    <a class="link" href="#contact">
                        como chegar
                    </a>
                    <a class="link" href="#contact">
                        CONTATO
                    </a>
                </nav>
            </header>

            <figure class="call">
                <figcaption class="text">
                    Sua empresa
                    está preparada
                    para o futuro?
                </figcaption>
            </figure>
        </section>

        <section id="services" class="services-section">
            <h2 class="title">Serviços</h2>
            <section class="wrapper">
                <div class="track">
                    <div class="slide">
                        <h3 class="title">Hardware</h3>
                        <hr class="separator">
                        <ul>
                            <li>Formataçao de computador</li>
                            <li>Backups</li>
                            <li>Troca de peças</li>
                            <li>Limpeza</li>
                            <li>Configuração de impressora</li>
                            <li>Troca de fonte</li>
                        </ul>
                    </div>
                </div>
            </section>
        </section>

        <section id="technologies" class="technologies-section">
            <div class="wrapper">
                <img width="500" height="500" class="image" alt="Logotipo com tecnologias orbitando ao redor"
                    src="{{ Vite::asset('resources/images/techs.svg') }}" />
                <article class="description">
                    <h2 class="title">
                        Utilizamos as melhores tecnologias em nosso projetos.
                    </h2>
                    <p class="text">
                        Nossas soluções são impulsionadas pelas melhores
                        tecnologias do mercado, oferecendo uma vantagem
                        competitiva significativa. Utilizamos tecnologias
                        de ponta para garantir a qualidade, eficiência e
                        inovação em cada projeto
                    </p>
                </article>
            </div>
        </section>

        <section id="contact" class="contact-section">
            <div class="wrapper">
                <img width="500" height="500" class="image" alt="Imagem do planeta terra feita com linhas"
                    src="{{ Vite::asset('resources/images/world.svg') }}" />
                <article class="description">
                    <h2 class="title">Entre em contato</h2>
                    <p class="text">
                        Deixe seu melhor e-mail ou seu numero de whatsapp e
                        nossa equipe entrará em contato com você.
                        <br><br>Não se preocupe, não enviaremos emails de
                        marketing, respeitamos sua privacidade.
                    </p>
                    <form method="post" action="{{ route('send.email') }}" class="form">
                        @csrf
                        @honeypot
                        <input type="text" name="email" class="email" placeholder="email ou whatsapp">

                        <button class="button" type="submit">
                            <img width="50" height="50" class="icon" alt="Enviar mensagem"
                                src="{{ Vite::asset('resources/images/plane.svg') }}" />
                        </button>
                    </form>
                    @isset($_GET['status'])
                        <span class=" bg-night-coal-800 text-green-500 text-sm p-2 text-center">
                            Sucesso! Em breve entraremos em contato.
                        </span>
                    @endisset
                </article>
            </div>

            <footer id="contact-send" class="footer">
                Rech Digital - Todos os direitos reservados
            </footer>
        </section>
    </section>

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</body>

</html>
