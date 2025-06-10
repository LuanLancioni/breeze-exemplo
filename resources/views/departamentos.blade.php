<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <title>Departamentos</title>
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

    <div class="container text-center">

        <!-- Secretaria -->
        <div class="section">
            <h3>Secretaria</h3>
            <div class="line"></div>

            <div class="horarios">
                <h5>Horários</h5>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Segunda</th>
                            <th>Quarta</th>
                            <th>Sexta</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>08h00 - 09h30</td>
                            <td>08h00 - 09h30</td>
                            <td>08h00 - 09h30</td>
                        </tr>
                        <tr>
                            <td>14h30 - 15h30</td>
                            <td>14h30 - 15h30</td>
                            <td>14h30 - 15h30</td>
                        </tr>
                        <tr>
                            <td>19h30 - 20h30</td>
                            <td>19h30 - 20h30</td>
                            <td>19h30 - 20h30</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="contato">
                <h3>Contato</h3>
                <h5>E-mail: e211acad@cps.sp.gov.br</h5>
                <h5>Telefones: (11) 2045-4025 | (11) 2045-4026 | (11) 2045-4009</h5>
            </div>
        </div>

        <!-- Coordenadoria -->
        <div class="section">
            <div class="line"></div>

            <div class="coordenadores">
                <h3>Coordenadores</h3>
                <h5>Giovanna Littiere (Administração)</h5>
                <h5>Leandro (Logística)</h5>
                <h5>Marcelo Collado (Desenvolvimento de Sistemas)</h5>
                <h5>Cibelle Francoso (Recursos Humanos)</h5>
                <h5>Jeferson Lima (Desenvolvimento de Sistemas AMS)</h5>
            </div>

            <div class="contato">
                <h3>Contato</h3>
                <h5>Telefones: (11) 2045-4018</h5>
            </div>
        </div>

        &nbsp;

        <!-- Diretoria -->
        <div class="section">
            <div class="line"></div>

            <div class="diretora">
                <h3>Diretora</h3>
                <h5>Amanda Bueno</h5>
            </div>

            <div class="contato">
                <h3>Contato</h3>
                <h5>E-mail: e211dir@cps.sp.gov.br</h5>
                <h5>Telefones: (11) 2045-4016 | (11) 2045-4011</h5>
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