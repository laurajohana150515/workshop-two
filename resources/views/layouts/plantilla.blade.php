<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Taller2</title>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-primary" style="background: linear-gradient(to right, rgba(255,255,255,0), rgba(255,255,255,1))">
            <div class="image">
            <img src="https://media.giphy.com/media/RkF9mqVzgvbnGTCHee/giphy.gif" width="100" height="100">
            </div>
        <div class="container-fluid">
            <div class="title">
                <h1>Conociendo</h1>
            </div>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="universo">Universo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="sistema-solar">Sistema solar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="planetas">Planetas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="galaxia">Galaxias y Constelaciones</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar-->

        <div class="container">
            <div class="row">
                <!-- sidebar -->
                <div class="col-md-3" style="background-color:#2A9CFF">
                    <br><br>
                    <ul class="list-group">
                        <li class="list-group-item" aria-current="true">Los planetas del sistemas:</li>
                        <li class="list-group-item">Mercurio</li>
                        <li class="list-group-item">Venus</li>
                        <li class="list-group-item">La Tierra</li>
                        <li class="list-group-item">Marte</li>
                        <li class="list-group-item">Júpiter</li>
                        <li class="list-group-item">Saturno</li>
                        <li class="list-group-item">Urano</li>
                        <li class="list-group-item">Neptuno</li>
                        <li class="list-group-item">Plutón</li>

                    </ul>
                    <br>
                    <br>
                </div>
                <!--End Sidebar -->
                <!-- Content--->
                <div class="col-md-9" style="">
                    @yield('contenido')
                </div>
                <!-- end Content-->
            </div>
        </div>
        <footer style="background-color:#2A9CFF">
        <center>
            "El universo no fue hecho a medida del hombre; tampoco le es hostil: es indiferente."
            <br>
            Carl Sagan 
        </center>
        </footer>
    </body>
</html>
