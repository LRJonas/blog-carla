<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Advogada Carla Horst</title>
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
</head>
<body>
    <!-- Cabeçalho -->
    <header class="header">
        <nav class="nav">
            <ul class="nav__list">
                <li class="nav__item"><a class="nav__link" href="#home">Início</a></li>
                <li class="nav__item"><a class="nav__link" href="#about">Sobre Mim</a></li>
                <li class="nav__item"><a class="nav__link" href="#services">Serviços</a></li>
                <li class="nav__item"><a class="nav__link" href="#contact">Contactos</a></li>
                <li class="nav__item"><a class="nav__link" href="{{ route('login') }}">Login</a></li>
                <li class="nav__item"><a class="nav__link" href="{{ route('posts.index') }}">Blog</a></li>
            </ul>
        </nav>
    </header>

    <!-- Seção Início -->
    <section id="home" class="section hero">

        <div class="hero__content">
            <h1 class="header__title"></h1>
            <h2 class="hero__title">Advogada Carla Horst. Bem-vindo ao meu escritório!</h2>
            <p class="hero__subtitle">Proteção legal confiável e dedicada.</p>
        </div>
    </section>

    <!-- Seção Sobre Mim -->
    <section id="about" class="section about">
        <h2 class="section__title">Sobre Mim</h2>
        <img src="img/file.jpg" alt="Advogada Carla Horst" class="about__img">
        <p class="about__text">Sou a Carla Horst, uma advogada especializada em direito civil e familiar com mais de 10 anos de experiência. Trabalho com ética, compromisso e foco na resolução eficaz dos problemas dos meus clientes.</p>
    </section>

    <!-- Seção Serviços -->
    <section id="services" class="section services">
        <h2 class="section__title">Serviços</h2>
        <ul class="services__list">
            <li class="services__item">Consultoria Jurídica</li>
            <li class="services__item">Direito Civil</li>
            <li class="services__item">Direito Familiar</li>
            <li class="services__item">Direito Trabalhista</li>
        </ul>
    </section>

    <!-- Seção Contactos -->
    <section id="contact" class="section contact">
        <h2 class="section__title">Contatos</h2>
        <p class="contact__info"><strong>Endereço:</strong> Avenida Brasil, 1234, Centro, Foz do Iguaçu - PR</p>
        <p class="contact__info"><strong>Telefone:</strong> 45 99970 - 3282</p>
        <p class="contact__info"><strong>Email:</strong> carlahorst@hotmail.com</p>
    </section>

    <a href="https://wa.me/5545999703282" target="_blank" class="whatsapp-button">
        <button class="whatsapp-button__btn">
            <img src="img/pngwing.com.png" alt="WhatsApp" class="whatsapp-button__logo">
        </button>
    </a>

    <!-- Rodapé -->
    <footer class="footer">
        <p class="footer__text">&copy; 2024 Advogada Carla Horst. Todos os direitos reservados.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
