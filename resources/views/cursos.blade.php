<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Cursos</title>
    <style>
        .navbar {
            background-color: rgba(255, 7, 7, 0.63);
        }

        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .navbar-brand img {
            width: 70px;
            height: 70px;
        }

        .nav-link {
            display: flex;
            align-items: center;
            margin-left: 10px;
        }

        body {
            background-color: rgb(255, 255, 255);
        }

        .container-DS {
            background-color: #1e1e1e;
            color: #00ff00;
            font-family: "Courier New", Courier, monospace;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
            overflow: auto;
        }

        .container-logistica {
            background-color: #f5f5f5;
            border: 2px solid #007bff;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-family: "Arial", sans-serif;
            position: relative;
        }

        .container-logistica::before {
            content: 'Transporte e Planejamento';
            position: absolute;
            top: -20px;
            left: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
            background-color: #f5f5f5;
            padding: 0 10px;
        }

        .container-ADM {
            background-color: #f5f5f5;
            border: 2px solid #000000;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-family: "Arial", sans-serif;
            position: relative;
        }

        .container-ADM::before {
            content: 'Empresas e negócios';
            position: absolute;
            top: -20px;
            left: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #000000;
            background-color: #f5f5f5;
            padding: 0 10px;
        }

        .container-RH {
            background-color: #f0f8ff;
            border: 2px solid #ff6b6b;
            padding: 20px;
            font-family: "Verdana", sans-serif;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .container-SJ {
            background-image: url('/storage/background.jpg');
            background-size: cover;
            background-position: center;
            border: 2px solid #2c3e50;
            border-radius: 10px;
            color: #fff;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
            font-family: "Georgia", serif;
            text-align: justify;
        }

        .footer-container {
            background-color: #333;
            padding: 20px;
            text-align: center;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid d-flex flex-column justify-content-center align-items-center">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="navbar-brand">
                        <img src="{{ asset('storage/logoetec.png') }}" alt="Logo" class="d-inline-block align-text-bottom">
                    </a>
                    <a class="nav-link active" href="{{ route('index') }}">Home</a>
                    <a class="nav-link active" href="{{ route('cursos') }}">Cursos</a>
                    <a class="nav-link active" href="{{ route('departamentos') }}">Departamentos</a>
                    <a class="nav-link active" href="{{ route('contato') }}">Contato</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container-DS content">
        <div class="row">
            <div class="col-md-5">
                <h1 class="text-center">Desenvolvimento de Sistemas</h1>
                <p class="text-center">
                    No curso de Desenvolvimento de Sistemas, os alunos mergulham em um universo fascinante de tecnologia e inovação. Eles aprendem não apenas sobre linguagens de programação como HTML, CSS, JavaScript, Python e muitas outras, mas também exploram profundamente a teoria e prática necessárias para criar sites interativos, aplicações web e sistemas completos. Além disso, são introduzidos ao mundo dos sistemas embarcados, entendendo como programar dispositivos inteligentes e integrar soluções tecnológicas.

                    O curso também proporciona uma base sólida sobre o funcionamento interno de computadores, microcontroladores e outros dispositivos eletrônicos, permitindo que os estudantes compreendam desde os conceitos básicos de hardware até a implementação de sistemas complexos. É uma jornada abrangente que combina criatividade, lógica e habilidades práticas para formar profissionais prontos para os desafios do mercado de tecnologia.
                </p>
            </div>
            <div class="col-md-7 d-flex align-items-top justify-content-center">
                <img src="{{ asset('storage/DS.jpg') }}" alt="imagem 1" class="img-fluid" style="max-width: 100%; height: 100%;">
            </div>
        </div>
    </div>
    &nbsp;
    <div class="container-logistica content">
        <div class="row">
            <div class="col-md-5">
                <h1 class="text-center">Logística</h1>
                <p class="text-center">
                    No curso de Logística, os alunos mergulham em um universo dinâmico e essencial para o funcionamento das cadeias de suprimentos globais. Eles aprendem não apenas sobre conceitos fundamentais de transporte, armazenagem e distribuição, mas também desenvolvem habilidades práticas para integrar processos e otimizar o fluxo de produtos e serviços. Além disso, são introduzidos a ferramentas tecnológicas de gestão e estratégias que garantem eficiência e sustentabilidade nas operações logísticas.

                    O curso também proporciona uma base sólida sobre a organização de estoques, controle de inventários, legislação aplicada à área e técnicas avançadas de análise de dados, permitindo que os estudantes compreendam desde os fundamentos logísticos até a implementação de soluções complexas. É uma jornada enriquecedora que combina planejamento estratégico, inovação e habilidades práticas para formar profissionais prontos para os desafios do mercado de logística.
                </p>
            </div>
            <div class="col-md-7 d-flex align-items-top justify-content-center">
                <img src="{{ asset('storage/LOG.png') }}" alt="imagem 1" class="img-fluid" style="max-width: 100%; height: 100%;">
            </div>
        </div>
    </div>
    &nbsp;
    <div class="container-ADM content">
        <div class="row">
            <div class="col-md-5">
                <h1 class="text-center">Adiministração</h1>
                <p class="text-center">
                    No curso de Administração, os alunos mergulham em um universo repleto de oportunidades para desenvolver habilidades essenciais na gestão organizacional. Eles aprendem não apenas sobre conceitos fundamentais de planejamento estratégico, gestão de pessoas, finanças e marketing, mas também adquirem conhecimento prático para liderar equipes, analisar mercados e promover a eficiência nos processos empresariais. Além disso, são introduzidos a ferramentas tecnológicas de gestão e técnicas inovadoras que garantem tomadas de decisão informadas e sustentáveis.

                    O curso também proporciona uma base sólida sobre liderança, empreendedorismo, análise de indicadores de desempenho e compliance empresarial, permitindo que os estudantes compreendam desde as operações internas de uma organização até a implementação de estratégias em cenários complexos. É uma jornada rica em aprendizado, que combina estratégia, inovação e prática para formar profissionais preparados para os desafios do mundo dos negócios e prontos para liderar o futuro.
                </p>
            </div>
            <div class="col-md-7 d-flex align-items-top justify-content-center">
                <img src="{{ asset('storage/ADM.jpg') }}" alt="imagem 1" class="img-fluid" style="max-width: 100%; height: 100%;">
            </div>
        </div>
    </div>
    &nbsp;
    <div class="container-RH content">
        <div class="row">
            <div class="col-md-5">
                <h1 class="text-center">Recursos Humanos</h1>
                <p class="text-center">
                    No curso de Recursos Humanos, os alunos mergulham em um universo voltado para o desenvolvimento de pessoas e a gestão organizacional. Eles aprendem não apenas sobre conceitos fundamentais de recrutamento, seleção e treinamento, mas também desenvolvem habilidades práticas para promover o bem-estar dos colaboradores e alinhar as estratégias empresariais às necessidades humanas. Além disso, são introduzidos a técnicas de análise comportamental, gestão de talentos e ferramentas tecnológicas que garantem eficiência na administração do capital humano.

                    O curso também proporciona uma base sólida sobre legislação trabalhista, políticas de diversidade e inclusão, e planejamento estratégico de carreiras, permitindo que os estudantes compreendam desde os fundamentos da gestão de pessoas até a implementação de soluções complexas em ambientes corporativos. É uma jornada transformadora que combina liderança, inovação e habilidades práticas para formar profissionais prontos para os desafios da área de Recursos Humanos.
                </p>
            </div>
            <div class="col-md-7 d-flex align-items-top justify-content-center">
                <img src="{{ asset('storage/RH.jpg') }}" alt="imagem 1" class="img-fluid" style="max-width: 100%; height: 100%;">
            </div>
        </div>
    </div>

    &nbsp;

    <footer class="footer-container">
        <div class="footer-content">
            <img src="{{ asset('storage/Footer.png') }}" alt="Logo ou Imagem" class="footer-image">
        </div>
    </footer>
</body>

</html>