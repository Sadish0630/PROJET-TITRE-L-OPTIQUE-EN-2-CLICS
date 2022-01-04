<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'optique en 2 clics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="projetitre.css">

</head>

<body>

    <header>

        <!--Menu burger mobile-->

        <div class="col dropdown d-block d-md-block d-lg-block d-xl-none d-xxl-none">
            <i class="fas fa-bars iBars" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"></i>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">La paire de lunettes</a></li>
                <li><a class="dropdown-item" href="#">Les produits</a></li>
                <li><a class="dropdown-item" href="#">Défauts visuels et Pathologies</a></li>
                <li><a class="dropdown-item" href="#">Conseils & Astuces</a></li>
                <li><a class="dropdown-item" href="#">Infos & Actus</a></li>
                <li><a class="dropdown-item" href="#">Chat</a></li>
                <li><a class="dropdown-item" href="#">FAQ</a></li>
                <li><a class="dropdown-item" href="#">CONTACT</a></li>
                <li><a class="dropdown-item" href="#">QUI-SUIS-JE ?</a></li>
            </ul>
        </div>
        <!--icon search mobile-->
        <div class="col dropdown d-block d-md-block d-lg-block d-xl-none d-xxl-none">
            <i class="fas fa-search iSearch" type="button" id="searchButton" data-bs-toggle="dropdown" aria-expanded="false"></i>
            <input class="dropdown-menu find" aria-labelledby="dropdownSearchButton" placeholder="Exemple: Myopie" type="search"></input>
        </div>
        <!--logo mobile-->
        <div class="row">
            <div class="col text-center d-block d-lg-block d-xl-none d-xxl-none">
                <img class="logoMobile" src="assets/img/logo.jpg" alt="Logo Cat'Shop" height="130px">
            </div>
        </div>

        <!--Menu format WEB-->
        <div class="row">
            <div class="col-2">
                <img src="assets/img/logo.jpg" alt="Logo L'optique en 2 clics" height="70px" class="m-3 d-none d-md-none d-lg-none d-xl-block d-xxl-block">
            </div>
            <div class="col slogan d-none d-md-none d-lg-none d-xl-block d-xxl-block">
                <p>Le site pour comprendre l'univers de la lunette</p>
            </div>
        </div>
        <nav class="myNav d-none d-md-none d-lg-none d-xl-block d-xxl-block">
            <div class="container-fluid">
                <div class="row mt-2">
                    <div class="col-2 text-center d-none d-md-none d-lg-none d-xl-block d-xxl-block">
                        <button id="glassesBtn" class="navButton">La paire de lunettes</button>
                    </div>
                    <div class=" col-2 text-center d-none d-md-none d-lg-none d-xl-block d-xxl-block">
                        <button id="detailsBtn" class="navButton">Les produits</button>
                    </div>
                    <div class="col-2 text-center d-none d-md-none d-lg-none d-xl-block d-xxl-block">
                        <button id="eyesBtn" class="navButton">Défauts visuels et Pathologies</button>
                    </div>
                    <div class="col-2 text-center d-none d-md-none d-lg-none d-xl-block d-xxl-block">
                        <button id="advicesBtn" class="navButton">Conseils & Astuces</button>
                    </div>
                    <div class="col-2 text-center d-none d-md-none d-lg-none d-xl-block d-xxl-block">
                        <button id="infoBtn" class="navButton">Infos & Actus</button>
                    </div>
                    <div class="col-2 text-center d-none d-md-none d-lg-none d-xl-block d-xxl-block">
                        <button id="chatBtn" class="navButton">Chat</button>
                    </div>
                </div>
            </div>
        </nav>
        <!--Intro version mobile-->

        <div class="content-justify text-center d-block d-md-block d-lg-block d-xl-none d-xxl-none">
            <div class="col">
                <p class="intromobile"> Quelle invention les lunettes! Vous êtes-vous déjà demandé à quoi ressemblerait
                    votre quotidien si vous n'aviez pas de lunettes?
                    Cela aurait tellement compliqué l'évolution de l'espèce humaine à travers le
                    21ème siècle.
                    Cette prothèse qui a évolué au fil du temps pour nous aider à conserver notre vue
                    et voir clair en toutes circonstances continue a bien jouer son rôle de conservation
                    de ceux que nous avons de plus précieux, "NOS YEUX!"
                    Dans ce site créé uniquement pour vous Mesdames et Messieurs, vous pourrez
                    trouvez des réponses simples à vos questions simples.
                </p>
            </div>
        </div>
        <!--Intro version desktop-->
        <div class="col d-none d-md-none d-lg-none d-xl-block d-xxl-block">
            <p class="introdesktop text-center">
                Quelle invention les lunettes! Vous êtes-vous déjà demandé à quoi<br />
                ressembleraitvotre quotidien si vous n'aviez pas de lunettes?<br />
                Cela aurait tellement compliqué l'évolution de l'espèce humaine<br />
                à travers le 21ème siècle.<br />
                Cette prothèse qui a évolué au fil du temps pour nous aider à conserver<br />
                notre vue et voir clair en toutes circonstances continue a bien jouer<br />
                son rôle de conservation de ceux que nous avons de plus précieux,<br />
                "NOS YEUX!"<br />
                Dans ce site créé uniquement pour vous Mesdames et Messieurs, vous pourrez<br />
                trouvez des réponses simples à vos questions simples.<br />
            </p>
        </div>
        <!--zone search desktop-->
        <form class="col d-none d-md-none d-lg-none d-xl-block d-xxl-block">
            <input type="search" placeholder="Que recherchez-vous?" name="desktopSearch" id="desktopSearch">
        </form>
        <!--Ligne de séparation desktop-->
        <div class="stick col d-none d-md-none d-lg-none d-xl-block d-xxl-block"></div>
        <!--Ligne de séparation mobile-->
        <div class="stickMobile d-block d-md-block d-lg-block d-xl-none d-xxl-none"></div>
    </header>
    <!--Section images d'illusion optique-->
    <section>
        <div class="col text-center">
            <p class="illusion">Trompez votre cerveau et amusez-vous<br />
                avec les images suivantes!</p>
        </div>
        <div class="row mt-4 justify-content-center text-center">
            <div class="col-10 col-md-5 col-lg-5 col-xl-5 col-xxl-5 p-2 mt-3">

                <!--Caroussel-->

                <div id="slide" class="carousel slide" data-ride="carousel">
                    <!--Indicateurs-->
                    <ul class="carousel-indicators">
                        <li data-target="#slide" data-slide-to="0" class="active"></li>
                        <li data-target="#slide" data-slide-to="1"></li>
                        <li data-target="#slide" data-slide-to="2"></li>
                    </ul>
                    <!--Carrousel-->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/mandala.png" alt="Carrousel slide 1" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/cube.png" alt="Carrousel slide 2" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/opticalillusion.png" alt="Carrousel slide 3" class="d-block w-100">
                        </div>
                    </div>
                    <!--Contrôles-->
                    <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Précédent</span>
                    </a>
                    <a class="carousel-control-next" href="#slidegit" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Suivant</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Section infos et actus-->
    <section>
        <div class="col text-center">
            <h1 class="info">Infos &amp; Actus</h1>
        </div>
        <!--Ligne de séparation desktop-->
        <div class="stick col d-none d-md-none d-lg-none d-xl-block d-xxl-block"></div>
        <!--Ligne de séparation mobile-->
        <div class="stickMobile d-block d-md-block d-lg-block d-xl-none d-xxl-none"></div>

        <div class="row mt-4 justify-content-center text-center">
            <div class="col-10 col-md-5 col-lg-5 col-xl-5 col-xxl-5 p-2 mt-3">

                <!--Caroussel-->

                <div id="slide" class="carousel slide" data-ride="carousel">
                    <!--Indicateurs-->
                    <ul class="carousel-indicators">
                        <li data-target="#slide" data-slide-to="0" class="active"></li>
                        <li data-target="#slide" data-slide-to="1"></li>
                        <li data-target="#slide" data-slide-to="2"></li>
                    </ul>
                    <!--Carrousel-->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/infositepro.jpg" alt="Carrousel slide 1" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/infositepro2.jpg" alt="Carrousel slide 2" class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/infositepro2.jpg" alt="Carrousel slide 3" class="d-block w-100">
                        </div>
                    </div>
                    <!--Contrôles-->
                    <a class="carousel-control-prev" href="#slide" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Précédent</span>
                    </a>
                    <a class="carousel-control-next" href="#slidegit" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Suivant</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--La paire de lunettes-->
    <div id="case">La paire de lunettes</div><br />
    <p>De nos jours, les lunettes sont un accessoires indispensable et compte tenu de notre évolution les besoins ont également évolués et aujourd'hui nos yeux sont par conséquent exposés à des altérations.

        Les différents écrans que nous avons adopté comme outils du quotidien sont en partie les raisons pour lesquelles les lunettes sont devenus nécessaires mais pas seulement, les lunettes ont toujours séduit l'univers de la mode et sont pleinement utilisées comme un accessoire apportant un style, un caractère et déterminant la personnalité d'une personne, que ce soit des optiques ou des solaires.

        Il faut bien comprendre qu'une paire de lunettes sera utilisée comme prothèse pour certain, accessoire de mode pour d'autre et la combinaison de ces deux aspects pour le tiers restant.
        Mais il n'est pas évident pour chacun de s'y retrouver, du besoin réel de porter des lunettes en port prolongé ou uniquement pour des moments bien précis surtout quand il s'agit de la première fois, mais aussi à la complexité de trouver la paire qui vous correspondra.

        Il est donc très important de réussir à bien communiquer avec son ophtalmologiste et/ou son opticien, car ce que vous allez
        leur expliquer aura une grande influence sur l'interprétation et retranscription de la correction qui vous seront rédigées.
        Alors ne négliger pas de communiquer avec vos interlocuteurs en détaillant bien vos besoins et vos gênes afin que ces derniers vous équipe avec de la personnalisation.</p>
    <!--Les produits-->
    <div id="case">Les produits</div><br />
    <h2>La monture</h2>

    <h2>Les verres</h2>

    <h2>Les traitements</h2>

    <h2>Les lentilles de contact</h2>

    <h2>Les produits d'entretien</h2>

    <h2>Les accessoires</h2>

    <!--Les défaults visuels et pathologies-->
    <div id="case">Les défaults visuels et pathologies</div><br />

    <!--Conseils &amp; Astuces-->
    <div id="case">Conseils &amp; Astuces</div><br />

    <footer>
        <!--FOOTER MOBILE-->
        <div class="d-block d-md-block d-lg-block d-xl-none d-xxl-none footer1">
            <i class="far fa-comments fa-2x"></i>
            <p class="link1">Venez partager vos connaissances pour que<br />
                tout le monde puisse y voir plus clair!</p>
            <i class="fab fa-facebook-square fa-2x"></i>
            <i class="fab fa-instagram fa-2x"></i>
            <i class="fab fa-twitter-square fa-2x"></i>
            <i class="fab fa-linkedin fa-2x"></i>
            <i class="fab fa-youtube fa-2x"></i>
        </div>
        <!--FOOTER WEB-->
        <div class="d-none d-md-none d-lg-none d-xl-block d-xxl-block footer3">
            <p class="link2">Suivez-moi sur les réseaux et<br />
                partagez ce que vous apprenez avec les autres:</p>
                <i class="far fa-comments fa-4x bulle"></i>
            <p class="chat">Venez échanger et partager avec de nombreuse personnes,<br />
                qui comme vous sont curieux d'y voir plus clair!</p>
                <i class="fab fa-facebook-square fa-4x"></i>
                <i class="fab fa-instagram fa-4x"></i>
                <i class="fab fa-twitter-square fa-4x"></i>
                <i class="fab fa-linkedin fa-4x"></i>
                <i class="fab fa-youtube fa-4x"></i>
        </div>
        <!--SECOND FOOTER NOIR MOBILE&WEB-->
        <div class="footer2">
        <button id="contact" class="">Contact</button>
        <button id="contact" class="">Contact</button>
        <button id="contact" class="">Contact</button>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="projetitre.js"></script>
</body>

</html>