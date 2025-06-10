<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Home</title>
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

        .carousel-item img {
            width: 1000px;
            height: 500px;
            margin: 0 auto;
        }

        .carousel-control-prev-icon {
            background-color: rgba(255, 7, 7, 0.63);
            border-radius: 30%;

        }

        .carousel-control-next-icon {
            background-color: rgba(255, 7, 7, 0.63);
            border-radius: 30%;
        }

        .line {
            width: 100%;
            height: 2px;
            background-color: rgb(255, 7, 7);
            position: relative;
        }

        .line::before {
            content: '';
            position: absolute;
            width: 50%;
            height: 10px;
            background-color: rgb(255, 7, 7);
            border-radius: 5px;
            left: 0;
            top: -4px;
        }

        .card {
            position: relative;
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
            cursor: pointer;
        }

        .card:hover {
            background-color: #e9ecef;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            border-radius: 5px;
            height: 3px;
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        .card:hover::before {
            background-color: rgb(255, 7, 7);
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

    <div class="container text-center mt-5 pt-5">
        <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('storage/BLOCO-A.jpg') }}" class="d-block" alt="First Image">
                    <div class="carousel-caption d-flex justify-content-center align-items-center">
                        <div class="col">
                            <div class="row">
                                <h1 class="text-white">Conheça nossa infraestrutura</h1>
                            </div>
                            <div class="row">
                                <h3 class="text-white">Contamos com laborátorios de química, computadores, sala maker, auditório e mais</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('storage/CURSOS.jpg') }}" class="d-block" alt="Second Image">
                    <div class="carousel-caption d-flex justify-content-center align-items-center">
                        <div class="col">
                            <div class="row">
                                <h1 class="text-white">Conheça nossos cursos</h1>
                            </div>
                            <div class="row">
                                <h3 class="text-white">Logistica, Desenvolvimento de sistemas, Recursos Humanos e Adiministração</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">próximo</span>
            </button>
        </div>

    </div>

    &nbsp;

    <div class="container text-center">
        <div class="row">
            <div class="col">
                <h3>Eventos</h3>
                <div class="line"></div>
                &nbsp;
                <h5>Não há eventos no momento, volte mais tarde</h5>
            </div>
            <div class="col">
                <h3>Links úteis</h3>
                <div class="line"></div>
                &nbsp;
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            Regimento
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            Manual do aluno
                        </div>
                    </div>
                </div>
                &nbsp;
                <div class="row">
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            NSA
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card" style="width: 18rem;">
                            Vestibulinho
                        </div>
                    </div>
                </div>
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