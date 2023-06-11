<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    />

    <meta
        name="description"
        content="Agência digital com foco em entregas de qualidade e performance."
    />

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
        <header class="main-header">
            <figure class="logo">
                <img
                    width="30"
                    height="50"
                    class="image"
                    alt="Rech Digital Logo"
                    src="{{ Vite::asset('resources/images/logo-left.svg') }}"
                />

                <img
                    width="30"
                    height="50"
                    class="image"
                    alt="Rech Digital Logo"
                    src="{{ Vite::asset('resources/images/logo-right.svg') }}"
                />

                <figcaption class="text">Rech Digital</figcaption>
            </figure>

            <img
                width="50"
                height="50"
                class="icon"
                alt="Abrir Menu"
                src="{{ Vite::asset("resources/images/menu.svg") }}"
            />

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
        </header>

        <video
            loop
            muted
            autoplay
            class="video"
        >
            <source
                type="video/mp4"
                src="{{Vite::asset("resources/images/banner.mp4")}}"
            />
            Seu navegador não suporta o elemento de vídeo.
        </video>

        <figure class="call">
            <figcaption class="text">
                Sua empresa
                está preparada
                para o futuro?
            </figcaption>
            <img
                alt="app"
                width="300"
                height="200"
                class="image"
                src="{{ Vite::asset('resources/images/app.webp') }}"
            />

            <img
                width="50"
                height="50"
                class="point"
                alt="Role para baixo"
                src="{{ Vite::asset('resources/images/point.svg') }}"
            />
        </figure>
    </section>

    <section id="features" class="features-section">
        <h2 class="title">Nossos diferenciais</h2>
        <p class="description">
            Estamos comprometidos em oferecer soluções de software
            sob medida que se destacam em qualidade e performance.
        </p>

        <section class="cards">
            <article data-aos="fade-up" class="card">
                <img
                    width="50"
                    height="50"
                    class="icon"
                    alt="Icone de caixa"
                    src="{{ Vite::asset('resources/images/box.svg') }}"
                />
                <span class="title">Sob-medida</span>
                <p class="description">
                    Flexibilidade, eficiência e alinhamento: um software
                    sob medida se adapta às suas necessidades
                    exclusivas. #PersonalizaçãoDeSoftware
                </p>
            </article>

            <article data-aos="fade-up" class="card">
                <img
                    width="50"
                    height="50"
                    class="icon"
                    alt="Icone de camadas"
                    src="{{ Vite::asset('resources/images/layers.svg') }}"
                />
                <span class="title">Escalável</span>
                <p class="description">
                    Escalabilidade garantida: nossos softwares sob medida se
                    expandem com o crescimento do seu negócio.
                    #EscalabilidadeDeSoftware
                </p>
            </article>

            <article data-aos="fade-up" class="card">
                <img
                    width="50"
                    height="50"
                    class="icon"
                    alt="Icone de performance"
                    src="{{ Vite::asset('resources/images/performance.svg') }}"
                />
                <span class="title">Performático</span>
                <p class="description">
                    Performance excepcional: nossos softwares sob medida
                    entregam alto desempenho para impulsionar seu
                    negócio. #PerformanceDeSoftware
                </p>
            </article>

            <article data-aos="fade-up" class="card">
                <img
                    width="50"
                    height="50"
                    class="icon"
                    alt="Icone de idiomas"
                    src="{{ Vite::asset('resources/images/languages.svg') }}"
                />
                <span class="title"> Multi Idiomas</span>
                <p class="description">
                    Múltiplos idiomas: nossos softwares sob medida podem
                    ser desenvolvidos para serem multilíngues,
                    alcançando uma audiência global. #SoftwareMultilíngue
                </p>
            </article>

            <article data-aos="fade-up" class="card">
                <img
                    width="50"
                    height="50"
                    class="icon"
                    alt="Icone de contato"
                    src="{{ Vite::asset('resources/images/contact.svg') }}"
                />
                <span class="title"> Contato Direto</span>
                <p class="description">
                    Comunicação direta: nossa equipe de especialistas garante
                    um contato próximo e sem ruídos na criação
                    do seu software sob medida. #ComunicaçãoEficiente
                </p>
            </article>

            <article data-aos="fade-up" class="card">
                <img
                    width="50"
                    height="50"
                    class="icon"
                    alt="Icone de Exclusividade"
                    src="{{ Vite::asset('resources/images/exclusive.svg') }}"
                />
                <span class="title"> Exclusividade</span>
                <p class="description">
                    Dedicação exclusiva: nossos desenvolvedores se dedicam
                    inteiramente ao seu projeto, sem trocas, para
                    um resultado personalizado. #ProjetoExclusivo
                </p>
            </article>
        </section>
    </section>

    <section id="technologies" class="technologies-section">
        <div class="wrapper">
            <img
                width="500"
                height="500"
                class="image"
                alt="Logotipo com tecnologias orbitando ao redor"
                src="{{ Vite::asset("resources/images/techs.svg") }}"
            />
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
            <img
                width="500"
                height="500"
                class="image"
                alt="Imagem do planeta terra feita com linhas"
                src="{{ Vite::asset("resources/images/world.svg") }}"
            />
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
                    <input
                        type="text"
                        name="email"
                        class="email"
                        placeholder="email ou whatsapp"
                    >

                    <button class="button" type="submit">
                        <img
                            width="50"
                            height="50"
                            class="icon"
                            alt="Enviar mensagem"
                            src="{{ Vite::asset('resources/images/plane.svg') }}"
                        />
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
