<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Contato</title>
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

    <div class="row text-center">
        <div class="col">
            <h3>Contato</h3>
            <div class="line"></div>
            <br>
            <img src="{{ asset('storage/contato.jpg') }}" alt="contato" >
        </div>
    </div>
    &nbsp;
    <div class="d-flex justify-content-center align-items-center">
        <form class="w-50">
            <div class="mb-3">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Seu nome aqui">
            </div>
            <div class="input-group flex-nowrap mb-3">
                <span class="input-group-text" id="addon-wrapping">@</span>
                <input type="email" class="form-control" placeholder="Seu email aqui" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="O assunto aqui">
            </div>
            <div class="mb-3">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="O desenvolvimento aqui"></textarea>
            </div>
        </form>
    </div>

    &nbsp;

    <footer class="footer-container">
        <div class="footer-content">
            <img src="{{ asset('storage/Footer.png') }}" alt="Logo ou Imagem" class="footer-image">
        </div>
    </footer>
</body>

</html>