<?php
include_once('C:\xampp\htdocs\ConexaoAutista\ConexaoAutista\app\HomeController.php');
$loginController = new LoginController();
$loginController->login();
?>

<!DOCTYPE html>
<html lang="Pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="../../public/css/landing.css">
    <script defer src="app.js"></script>
    <link rel="shortcut icon" href="../../public/IMG/Logo Conexão Autista 2.png" type="image/x-icon">
    <title>Conexão Autista</title>
</head>

<body>
    <header>
        <nav class="navegacao">

            <div class="ftLogo">
                <img src="../../public/IMG/Logo Conexão Autista 2.png" alt="">
                <a href="#" class="logo">CONEXÃO AUTISTA</a>
            </div>

            <ul class="menu">
                <li class="navItem"><a class="linkMap" href="#">Introdução</a></li>
                <li class="navItem"><a class="linkMap" href="#features">Serviços</a></li>
                <li class="navItem"><a class="linkMap" href="#nosso-time">Nosso Time</a></li>
                <li class="navItem"><a class="linkMap" href="#comece-usar">Comece a Usar</a></li>
                <li class="navItem"><a class="linkMap" href="#contato">Contato</a></li>
            </ul>

            <ul class="perfil">
                <li class="entre"><a href="../../views/login.php">Entre</a></li>
                <li class="registre"><a href="../../views/registro.php">Registre-se</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="home">
            <div class="hometext">
                <h1>O aplicativo e site que<br>torna a rotina do autista<br>mais prática.</h1>
                <div class="apps">
                    <img src="../../public/IMG/googlePlay.png" alt="">
                    <img src="../../public/IMG/appStore.png" alt="">
                </div>
                <div class="entrar">
                    <button class="btn-entrar">Entrar</button>
                </div>
            </div>
            <div class="homeImg">
                <img src="../../public/IMG/Group 18.png" alt="">
            </div>
        </section>

        <br>
        <br>
        <br>
        <br>
        <br>

        <section class="features" id="features">
            <div class="feature-container">
                <div class="feature-item">
                    <div class="circle">
                        <img src="../../public/IMG/notebook 1.png" alt="Icone 1">
                    </div>
                    <p>Agenda com seus compromissos e históricos médicos organizados.</p>
                </div>

                <div class="feature-item">
                    <div class="circle">
                        <img src="../../public/IMG/medicine 1.png" alt="Icone 2">
                    </div>
                    <p> Horários, reações
                        adversas e bulas dos
                        seus remédios</p>
                </div>

                <div class="feature-item">
                    <div class="circle">
                        <img src="../../public/IMG/medical-team 1.png" alt="Icone 3">
                    </div>
                    <p>Encontre atendimento
                        para a especialidade que
                        você precisa, na sua
                        região</p>
                </div>

                <div class="feature-item feature-item-light">
                    <div class="circle">
                        <img src="../../public/IMG/compliant 1.png" alt="Icone 4">
                    </div>
                    <p> Orientações, leis e
                        direitos em um só lugar</p>
                </div>
            </div>


            <div class="description">
                <p>Toda a sua rotina, medicações, compromissos e
                    históricos em um só lugar. Diga adeus a sobrecarga
                    mental e olá a praticidade e organização</p>
            </div>
            <div class="apps">
                <img src="../../public/IMG/googlePlay.png" alt="">
                <img src="../../public/IMG/appStore.png" alt="">
            </div>
            <div class="entrar">
                <button class="btn-entrar">Entrar</button>
            </div>
        </section>
        <section class="team" id="nosso-time">
            <h2>Conheça Nosso Time</h2>

            <div class="team-member">
                <div class="member-info left">
                    <img src="../../public/IMG/davi 1.png" alt="Integrante 1" class="member-photo">
                    <div class="description1">
                        <h3>Davi Barbosa Nunes</h3>
                        <p>
                            Somos um grupo de estudantes de programação movidos pelo desejo de fazer a diferença na vida
                            das famílias de crianças autistas.
                            Inspirados por nossas próprias experiências e por histórias que ouvimos,
                            desenvolvemos um aplicativo que torna a rotina dessas famílias mais prática e organizada.
                            Nosso objetivo é aliviar a sobrecarga dos cuidadores, oferecendo ferramentas que facilitam o
                            dia a dia e garantem mais tempo de qualidade com seus filhos</p>
                    </div>
                </div>
            </div>

            <div class="team-member">
                <div class="member-info right">
                    <img src="../../public/IMG/Higor.png" alt="Integrante 2" class="member-photo">
                    <div class="description1">
                        <h3>Higor Carlos</h3>
                        <p>Como estudantes de desenvolvimento de software, sempre acreditamos que a tecnologia pode
                            transformar vidas.
                            Com isso em mente, criamos este aplicativo para apoiar as famílias de crianças autistas.
                            Queremos proporcionar mais organização,
                            menos estresse e maior controle sobre a rotina, dando aos cuidadores a oportunidade de se
                            concentrarem no que realmente importa: o bem-estar e desenvolvimento de seus filhos.</p>
                    </div>
                </div>
            </div>

            <div class="team-member">
                <div class="member-info left">
                    <img src="../../public/IMG/Pricisila.png" alt="Integrante 3" class="member-photo">
                    <div class="description2">
                        <h3>Priscila Romano</h3>
                        <p>Apaixonados pela programação e pela causa autista, somos um grupo de estudantes que decidiu
                            usar suas habilidades para criar um impacto positivo.
                            Nosso aplicativo foi projetado para simplificar o dia a dia das famílias de crianças
                            autistas, fornecendo recursos que ajudam a organizar compromissos, tarefas e tratamentos.
                            Com ele, esperamos reduzir a carga mental dos cuidadores, permitindo que se concentrem mais
                            em momentos especiais e menos no estresse da rotina.</p>
                    </div>
                </div>
            </div>

            <div class="team-member">
                <div class="member-info right">
                    <img src="../../public/IMG/Renata.png" alt="Integrante 4" class="member-photo">
                    <div class="description2">
                        <h3>Renata Andrade</h3>
                        <p>Somos um time de jovens programadores dedicados a criar soluções que realmente façam a
                            diferença. Inspirados pela causa autista,
                            desenvolvemos este aplicativo com o propósito de oferecer às famílias uma ferramenta que
                            organize, simplifique e alivie a sobrecarga diária.
                            Nossa missão é contribuir para um cotidiano mais leve e eficiente, ajudando os cuidadores a
                            gerenciar melhor a rotina de seus filhos com autismo.</p>
                    </div>
                </div>
            </div>

            <div class="team-member">
                <div class="member-info left">
                    <img src="../../public/IMG/Vitor.png" alt="Integrante 5" class="member-photo">
                    <div class="description1">
                        <h3>Vitor Rezende Honorio</h3>
                        <p>Como estudantes de programação com um forte interesse em causas sociais, sentimos que
                            podíamos fazer mais pelas famílias de crianças autistas.
                            Nosso aplicativo foi criado para isso: oferecer uma ferramenta que facilite a organização do
                            dia a dia, reduzindo a sobrecarga de quem cuida.
                            Sabemos que a jornada do autismo pode ser desafiadora, e nossa proposta é trazer mais
                            praticidade, organização e, acima de tudo, tranquilidade para os cuidadores.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <section class="appsSection" id="comece-usar">
        <div class="fundo"></div>
        <div class="UseApp">
            <div class="elemento">
                <div class="useText">
                    <h2>Use Nosso Aplicativo<br>completamente de graça!</h2>
                    <p>Nada é melhor do que uma rotina organizada. </p>
                </div>
                <div class="apps">
                    <img src="../../public/IMG/googlePlay.png" alt="">
                    <img src="../../public/IMG/appStore.png" alt="">
                </div>
                <div class="entrarApp">
                    <button class="btn-entrar">Entrar</button>
                </div>
            </div>
            <img src="../../public/IMG/App Conexão Autista 1.png" alt="" class="fotoApp">
        </div>
    </section>

    <br>
    <br>

    <div class="formularios" id="contato">

        <div class="form01">
            <h4>Deixe sua pergunta ou sugestão!</h4>
            <form action="https://formsubmit.co/suporteConexaoAutista@hotmail.com" method="POST" data-form>
                <div class="infoCliente">
                    <input type="text" name="name" id="name" placeholder=" Nome" required>
                    <input type="email" name="email" id="email" placeholder=" E-mail" required>
                </div>

                <textarea name="mensagem" id="mensagem" placeholder=" Deixe-nos uma mensagem." required></textarea>

                <div class="btnForm01">
                    <button type="submit" id="btn" data-button>Enviar</button>
                </div>
            </form>
        </div>

        <div class="form02">
            <h4>Deixe seu e-mail e receba noticias do universo autista<br> toda semana!</h4>
            <form action="" method="POST">
                <input type="email" name="email" id="email" placeholder=" E-mail" required>
                <div class="btnForm02">
                    <button type="submit" id="btn2">Quero receber as notícias</button>
                </div>
            </form>
        </div>

    </div>
    <br>
    <br>
</body>
</html>