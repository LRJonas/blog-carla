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
    <header>
        <h1>Advogada Carla Horst</h1>
        <nav>
            <ul>
                <li><a href="#home">Início</a></li>
                <li><a href="#about">Sobre Mim</a></li>
                <li><a href="#services">Serviços</a></li>
                <li><a href="#contact">Contactos</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
            </ul>
        </nav>
    </header>

    <!-- Seção Início -->
    <section id="home">
        <div class="hero">
            <h2>Bem-vindo ao meu escritório!</h2>
            <p>Proteção legal confiável e dedicada.</p>
        </div>
    </section>

    <!-- Seção Sobre Mim -->
    <section id="about">
        <h2>Sobre Mim</h2>
        <img src="img/file.jpg" alt="Advogada Carla Horst" class="profile-img">
        <p>Sou a Carla Horst, uma advogada especializada em direito civil e familiar com mais de 10 anos de experiência. Trabalho com ética, compromisso e foco na resolução eficaz dos problemas dos meus clientes.</p>
    </section>

    <!-- Seção Serviços -->
    <section id="services">
        <h2>Serviços</h2>
        <ul>
            <li>Consultoria Jurídica</li>
            <li>Direito Civil</li>
            <li>Direito Familiar</li>
            <li>Direito Trabalhista</li>
        </ul>
    </section>

    <!-- Seção Contactos -->
    <section id="contact">
        <h2>Contatos</h2>
        <p><strong>Endereço:</strong> Avenida Brasil, 1234, Centro, Foz do Iguaçu - PR</p>
        <p><strong>Telefone:</strong> 45 99970 - 3282</p>
        <p><strong>Email:</strong> carlahorst@hotmail.com</p>

    </section>

    <a href="https://wa.me/5545999703282" target="_blank" class="whatsapp-button">
        <button>
            <img src="img/Whatsapp-Logo.png" alt="WhatsApp" class="whatsapp-logo">

        </button>
    </a>
    <!-- Rodapé -->
    <footer>

        <p>&copy; 2024 Advogada Carla Horst. Todos os direitos reservados.</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>
