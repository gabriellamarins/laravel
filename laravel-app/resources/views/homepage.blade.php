<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
        name="viewport"
        content="width=
    , initial-scale=1.0"
    />
    <title>index</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
        crossorigin="anonymous"
    />

    <link href="{{asset('style.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
<!--DEBUT DE MON CONTAINER-->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a
            class="navbar-brand"
            href="https://www.youtube.com/watch?v=ZyhrYis509A"
        >
            <img src="{{asset('photo/logo_silent.jpg')}}" alt="Logo silent"
            /></a>

        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.html"
                    >Home</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://discord.gg/DK4GGbfV"
                    >Dashboard</a
                    >
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="navbarDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                    >
                        Menu
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li>
                            <a class="dropdown-item" href="index.html#features"
                            >FEATURES</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="index.html#partenaires"
                            >PARTENAIRES</a
                            >
                        </li>
                        <li>
                            <a class="dropdown-item" href="index.html#succes">SUCCES</a>
                        </li>
                        <li><a class="dropdown-item" href="Team-BS.html">TEAM</a></li>
                        <li>
                            <a class="dropdown-item" href="catalogue.html">CATALOGUE</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="Formulaire_2.html">NOUS CONTACTER</a>
                        </li>
                        <li><hr class="dropdown-divider" /></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link disabled"
                        href="#"
                        tabindex="-1"
                        aria-disabled="true"
                    >Disabled</a
                    >
                </li>
            </ul>
            <form class="d-flex">
                <input
                    class="form-control me-2"
                    type="search"
                    placeholder="Search"
                    aria-label="Search"
                />
                <button class="btn btn-outline-success" type="submit">
                    Search
                </button>
            </form>
        </div>
    </div>
</nav>

<!--FIN DE MON CONTAINER-->
<div class="container" id="global">
    <div class="w1-container">
        <h1 id="silentpro" >SILENT</h1>
        <p>Prémium Resseling Group. 10€ monthly</p>
    </div>

    <div class="x1-container">
        <div class="forfait6">
            <p>SOLD OUT</p>
        </div>
    </div>

    <h2 id="features">FEATURES</h2>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6  p-3 border">
                <div class="forfait6">
                    <p>
                        Fast Monitors : Nous disposition de Monitors pour etre tenu au
                        courant des prochains restocks.
                    </p>

                    <p class="align_right">
                        <img src="photo/030_sandglass_1.png" class="coucou" alt="" />
                    </p>
                </div>
            </div>
            <div class="col-12 col-lg-6  p-3 border">
                <div class="forfait7">
                    <p>
                        Equipe de support : Une équipe de support sera disponible pour
                        vous si vous rencontrez des problèmes ou meme des suggestions
                        innovantes.
                    </p>
                    <p class="align_right">
                        <img src="photo/054_light_bulb_1.png" class="coucou" alt="" />
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6  p-3 border">
                    <div class="forfait8">
                        <p>
                            Pre Commande : Commander vos sneakers en Early Access pour flex
                            avant tous le monde.
                        </p>
                        <p class="align_right">
                            <img src="photo/065_world_1.png" class="coucou" alt="" />
                        </p>
                    </div>
                </div>
                <div class="col-12 col-lg-6  p-3 border">
                    <div class="forfait9">
                        <p>
                            Custom Software : Nous disposons d'un raffle bot ainsi que d'un
                            Spoof Browerr, gratuit pour tous nos membres.
                        </p>
                        <p class="align_right">
                            <img src="photo/076_laptop_1.png" class="coucou" alt="" />
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6  p-3 border">
                <div class="forfait10">
                    <p>
                        Partenaires : Profitez de nos différents partenariats pour pouvoir
                        avoir access à des tools ou des proxies.
                    </p>
                    <p class="align_right">
                        <img src="photo/025_telephone_1.png" class="coucou" alt="" />
                    </p>
                </div>
            </div>
        </div>
    </div>



    <h3 id="partenaires">PARTENAIRES</h3>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 justify-content-center">
                <img src="photo/rectangle_21.png" height="80%" width="80%" />
            </div>
            <div class="col-3 justify-content-center">
                <img src="photo/rectangle_22.png" height="80%" width="80%" />
            </div>
        </div>

        <div class="row">
            <div class="col-3 justify-content-center">
                <img src="photo/rectangle_23.png" height="80%" width="80%" />
            </div>
            <div class="col-3 justify-content-center">
                <img src="photo/rectangle_25.png" height="80%" width="80%" />
            </div>
        </div>
    </div>

    <h4 id="succes">SUCCES</h4>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 justify-content-center">
                <img src="photo/rectangle_28.png" height="80%" width="80%" />
            </div>
            <div class="col-3 justify-content-center">
                <img src="photo/rectangle_29.png" height="80%" width="80%" />
            </div>
        </div>

        <div class="row">
            <div class="col-3 justify-content-center">
                <img src="photo/rectangle_30.png" height="80%" width="80%" />
            </div>
            <div class="col-3 justify-content-center">
                <img src="photo/rectangle_31.png" height="80%" width="80%" />
            </div>
        </div>
    </div>
</div>


<!--DEBUT DE MON FOOTER-->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center" ><a href="#" id="footerfaq">FAQ</a> </div>

            <div class="row">
                <div class="col-12 text-center" ><a href="Formulaire_2.html" id="footercontact">CONTACT</a> </div>
            </div>
        </div>

        <!-- Ligne de 12 colonnes -->
        <div class="row row-cols-sm-1 row-cols-md-2 row-cols-lg-3" id="reseaux">
            <!-- 1/3 de la largeur (largeur de 4 colonnes)-->
            <div class="silent col">
                <a href="index.html">
                    <img src="{{asset('')}}" alt="Logo silent"
                    /></a>
                SILENT
            </div>

            <!-- 1/3 de la largeur (largeur de 4 colonnes)-->
            <div class="col">
                <div class="reseau">
                    <a href="https://www.facebook.com/RickAstley">
                        <img src="photo/facebook_1.png" alt="Logo facebook"
                        /></a>

                    <a href="https://www.instagram.com/silent_fnf/">
                        <img src="photo/insta_1.png" alt="Logo instagram"
                        /></a>

                    <a href="https://twitter.com/Silent_Fnf"
                    ><img src="photo/twitter_1.png" alt="Logo twitter"
                        /></a>
                </div>
            </div>

            <!-- 1/3 de la largeur (largeur de 4 colonnes)-->
            <div class="col">
                <div class="campus">
                    <a href="https://le-campus-numerique.fr/">
                        <img
                            src="photo/logo_campus_header_1.png"
                            alt="Logo campus numerique"
                            class="logo-campus"
                        /></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="texte">
                <div class="col-12 text-center text-muted">
                    Site by Silent Corps <br />
                    Copyright © 2020, Silent<br />
                    Terms & Conditions - Privacy - Legal Notice
                </div>
            </div>
        </div>
    </div>
</footer>
<!--FIN DE MON FOOTER-->

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"
></script>
</body>








</html>
