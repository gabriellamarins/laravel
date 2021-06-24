@extends('layout')
@section('content')


    <h6 id="clochard" >BIENVENUE CHEZ SILENT BOUTIQUE</h6>
    <div class="capture">
        <img src="photo/Capture.PNG" class="img-fluid" alt="capture" />
    </div>

    <div class="container">
        <h1 id="piraterie" >Silent Boutique</h1>

        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <img
                    src="http://image.noelshack.com/fichiers/2021/15/1/1618220278-rpcspoof.png"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">STANDARD</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>- Payement automatique</li>
                            <li>- Résiliable à tout moment</li>
                            <li>- Dashboard access</li>
                            <li>10€</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-danger">
                            Je choisis cet abonnement
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-danger">
                    <img
                        src="http://image.noelshack.com/fichiers/2021/15/1/1618220278-rpcspoof.png"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-header py-3 text-ezs">
                        <h4 class="my-0 fw-normal">ANNUEL</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>- Payement automatique</li>
                            <li>- Résiliable à tout moment</li>
                            <li>- Paiement en 4x sans frais</li>
                            <li>100€</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-danger">
                            Je choisis cet abonnement
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <img
                    src="http://image.noelshack.com/fichiers/2021/15/1/1618220278-rpcspoof.png"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">LIFETIME</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>- Payement automatique</li>

                            <li>- Paiement en 4x sans frais</li>
                            <li>- Stickers Silent Offert</li>
                            <li>300€</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-danger">
                            Je choisis cet abonnement
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <table class="tableaux_forfait">
        <thead>
        <tr>
            <th scope="col"><u> FORFAIT </u></th>
            <th scope="col"><u> PAIEMENT 3-4 X </u></th>
            <th scope="col"><u> RESILIATION </u></th>
            <th scope="col"><u> STICKERS SILENT </u></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row"><u> STANDARD </u></th>
            <td>✅</td>
            <td>✅</td>
            <td>❌</td>
        </tr>
        <tr>
            <th scope="row"><u> ANNUEL </u></th>
            <td>✅</td>
            <td>✅</td>
            <td>❌</td>
        </tr>
        <tr>
            <th scope="row"><u> LIFETIME </u></th>
            <td>✅</td>
            <td>✅</td>
            <td>✅</td>
        </tr>
        </tbody>
    </table>

    <h6>Cop ta snkrs pour ton panard</h6>
    <div class="capture"></div>

    <div class="container">


        <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <img
                    src="http://image.noelshack.com/fichiers/2021/15/2/1618322785-268022.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Air Jordan 1 Low Green</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>120€ - 20% soit 96€</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-danger">
                            ACHETER
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm border-danger">
                    <img
                        src="http://image.noelshack.com/fichiers/2021/15/2/1618322910-255889.jpg"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-header py-3 text-ezs">
                        <h4 class="my-0 fw-normal">Air Jordan 1 Mocha</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>170€ - 30% soit 119€</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-danger">
                            ACHETER
                        </button>
                    </div>
                </div>
            </div>
            <div class="col">
                <img
                    src="http://image.noelshack.com/fichiers/2021/15/3/1618404804-235305.jpg"
                    class="card-img-top"
                    alt="..."
                />
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal">Air Jordan 1 Game Royal</h4>
                    </div>
                    <div class="card-body">
                        <h1 class="card-title pricing-card-title"></h1>
                        <ul class="list-unstyled mt-3 mb-4">
                            <li>170€ - 30% soit 119€</li>
                        </ul>
                        <button type="button" class="w-100 btn btn-lg btn-outline-danger">
                            ACHETER
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">

                <div class="row align-self-start">
                    <img
                        src="photo/logo_nike_1024x1024.jpg"
                        class="img-fluid" id="coucoubogosse"
                        alt="photo Chris">

                </div>


                <h2>NIKE</h2>
                <p>
                    Nike est une société américaine créée en 1971 par Philip Knight et
                    Bill Bowerman. Basée à Beaverton dans l'Oregon, elle est spécialisée
                    dans la fabrication d'articles de sport (chaussures, vêtements et
                    matériel de sport). <br />

                    Le nom Nike est inspiré de la déesse grecque de la victoire Niké
                    (Nικη), déesse ailée capable de se déplacer à grande vitesse, dont
                    la représentation la plus connue, une statue exposée au Louvre, est
                    la Victoire de Samothrace.
                </p>
            </div>

            <div class="col">

                <div class="row align-self-start">
                    <img
                        src="photo/adidas.jpg"
                        class="img-fluid" id="coucoubogosse1"
                        alt="photo Chris">

                </div>


                <h2>ADIDAS</h2>
                <p>
                    Adidas est une firme allemande fondée en 1949 par Adolf Dassler,
                    spécialisée dans la fabrication d'articles de sport, basée à
                    Herzogenaurach en Allemagne. Elle est mondialement connue sous
                    l'appellation « la marque aux trois bandes », des trois bandes
                    parallèles qui constituent son logo. Pionnier, leader pendant de
                    longues années dans les articles destinés aux sportifs et aussi
                    principal concurrent de Nike, <br />
                    le leader mondial actuel du secteur, Adidas est l'un des
                    équipementiers sportifs les plus connus au monde.
                </p>
            </div>
        </div>

        <div class="col">
            <div class="row align-self-start">
                <img
                    src="photo/off-white.png"
                    class="img-fluid" id="coucoubogosse2"
                    alt="photo Chris">

            </div>


            <h2>OFF WHITE</h2>
            <p>
                Off-White est une marque italienne de vêtements et d'accessoires de
                mode. Fondée par Virgil Abloh fin 2013 à Milan elle s'inscrit dans la
                vague streetwear4 haut de gamme à l'instar de Vetements ou Balenciaga.
                La marque est présente internationalement et dispose de 24 magasins à
                travers le monde.
            </p>
        </div>
    </div>

@endsection
