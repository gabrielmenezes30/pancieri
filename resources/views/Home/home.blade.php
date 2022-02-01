<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS Bootratrap -->
            <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Estilização de componentes do Header e Navbar */

        .header{
            background-image: url(/images/background-home.jpg);
            background-size: cover;
            width: 100%;
            height: 600px;
            top: 0;
        }
        /* .header::before{
            content: "";
            width: 100%;
            height: 120px;
            background: rgb(0,138,139);
            background: linear-gradient(180deg, rgba(0,138,139,0.5) 0%, rgba(255,255,255,1) 100%);
            position: absolute;
        } */

        .adress{
            border-bottom:rgb(0,138,139, .5) 3px solid;
            padding: 5px;
        }
        #navbar{
            position: relative;
            margin-top: 30px;
        }
        #navbar ul li a{
           transition: .5s
        }
        #navbar ul li a:hover{
            color: rgb(0,138,139) !important;
            transition: .5s;
        }
        .button-proposal{
            color: rgb(0,138,139);
            transition: .3s
        }
        .button-proposal{
            color: rgb(79, 25, 25)
        }



        /* Estilização do Container dos Card e Cards */

        .card-container{
            z-index: 10;
            margin-top: -100px;
        }
        .card{
            border: rgb(0,138,139, .4) 3px solid !important;
            border-radius: 30px;
            margin-left: 10px;

        }
        .card-title{
            padding: 4px;
            text-align: center;
            font-weight: 700;
            font-size: 21px;
            color: rgb(0,138,139);
        }
        .card-text{
            text-align: justify;
            margin-top: 10px;
            padding: 4px;
            font-size: 15px;
        }

        /* Estilização Slides*/

        .text-slide h5{
            color: #3E7D8F
        }
        .text-slide p{
            color: #3E7D8F;
            font-size: 40px;
            font-weight: bold
        }

        .decription-slide{
            text-align: justify;
        }
        
        /* Estilização do Footer */

        #footer{
            background-color: #3E7D8F;
        }
        .number-footer{
            color: #8EB6C2;
        }
    </style>

    <title>Home</title>
</head>
<body>
    <header class="header">
        <div class="adress d-flex flex-row justify-content-between">
            <div>
                <span class="text-white fw-bold ms-2">Rua Estados Unidos, 242, Jardim Paulista, São Paulo-SP</span>
            </div>
            <div>
                <img src="{{ asset('/images/instagram.png') }}" alt="" width="20">
                <img src="{{ asset('/images/linkedin.png') }}" alt="" width="20">
            </div>
        </div>
        <nav id="navbar">
            <ul class="nav justify-content-center">
                <li class="nav-item">
                  <a class="nav-link active me-3 fw-bold text-white fs-5" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-3 fw-bold text-white fs-5" href="#">Institucional</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-3 fw-bold text-white fs-5" href="#">Serviços</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-3 fw-bold text-white fs-5" href="#">Contato</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link bg-white me-3 rounded fw-bolder fs-5 button-proposal" href="#">Solicitar proposta</a>
                </li>
              </ul>
        </nav>
    </header>

    <main>
        <section class="cards d-flex flex-row">
            <div class="container card-container d-flex flex-row justify-content-evenly">
                <div class="card" style="width: 15em; height: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Treinamento para Liderança</h5>
                      <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                    </div>
                </div>
                <div class="card" style="width: 15em; height: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Estudos compotamentais</h5>
                      <p class="card-text">S"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                    </div>
                </div>
                <div class="card" style="width: 15em; height: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Coaching Life e Executive</h5>
                      <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                    </div>
                </div>
                <div class="card" style="width: 15em; height: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Simulação <br> Realistica</h5>
                      <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                    </div>
                </div>
                <div class="card" style="width: 15em; height: 18rem;">
                    <div class="card-body">
                      <h5 class="card-title">Gestão <br> de pessoas</h5>
                      <p class="card-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                    </div>
                </div>
            </div>
        </section>


        <section id="container-slide" class="container p-5">
            <div class="d-flex flex-row justify-content-around">
                <div>
                    <img src="{{ asset('/images/profile_slide.jpg') }}" alt="" width="500">
                </div>
                <div class="text-slide d-flex flex-column ps-5">
                    <p>Inteligência Emocional na Liderança</p>
                    <span class="decription-slide">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                        veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                        commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
                        velit esse
                        cillum dolore eu fugiat nulla pariatur Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</span>
                        <div class="pt-4">
                            <h5 class="fw-bold">Ana Paula Pancieri</h5>
                            <span>Fundadora do Instituto Pancieri</span>
                        </div>
                </div>
            </div>
        </section>


        <footer id="footer">
            <div class="d-flex flex-row justify-content-around align-items-center" >
                <div class="pt-3">
                    <img src="{{ asset('/images/logo.png') }}" alt="" width="400">
                </div>
                <div class="d-flex flex-column ">
                    <span class="text-center fs-3 fw-bold number-footer">(11)98040-3393</span>
                    <span class="text-center fs-3 text-white fw-light">Tire suas pelo Whatsapp</span>
                    <span class="mt-5 fs-3 text-center text-white fw-light">contato@institutopancieri.com.br</span>
                </div>
                <div class=" pt-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.828709384093!2d-46.66184078483942!3d-23.574594667966643!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c2ea7bd60f%3A0x45cd5724cf7555f!2sInstituto%20Pancieri%20-%20Estudo%20do%20comportamento%20e%20lideran%C3%A7a!5e0!3m2!1spt-BR!2sbr!4v1643680936683!5m2!1spt-BR!2sbr" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </footer>
    </main>




</body>

<!-- Link Javascript Bootstrap -->
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</html>