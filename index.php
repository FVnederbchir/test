<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Accomplissement</title>
    <base href="/">
    <link href="./new_Design/normalize.css" rel="stylesheet">
    <link href="./new_Design/swiper-bundle.min.css" rel="stylesheet" />
    <link href="./new_Design/style.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <?php include './new_Design/header.php'; ?>
    <div class="cover">

        <div class="cover-profile"></div>

    </div>

    <div class="content">
        <div class="contentuser">
            <div class="text-profile">
            <div class="logo">
                <div class="circle-wrap"
                    style="--progress:140deg; --progress-circle-size:200px; --progress-circle-size-half:100px; --progress-circle-color:#455B87; --progress-circle-bg-color:#C9D2E4; ">
                    <div class="circle">
                    <div class="mask full">
                        <div class="fill"></div>
                    </div>
                    <div class="mask half">
                        <div class="fill"></div>
                    </div>
                    <div class="inside-circle">
                        <img src="/img/profile_picture.webp" alt="" class="profile-picture">
                        <label for="file-input" class="change-picture" alt="sdqfqsdqs">
                            <img src="/img/change-icon.png" alt="Changer vote photo de profile en cliquant ici">

                            <input type="file" id="file-input" accept="image/*" style="display: none;">
                        </label>
                    </div>
                    </div>
                </div>
                </div>

                <div class="info">
                    <div class="title_user">@Username01</div>
                    <div class="title_date">
                        <img src="/img/date.svg" alt="">Utilisateur depuis janvier 2023
                    </div>
                    <div class="user_desc">Description optionnelle de l’utilisateur : Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore sed.</div>
                </div>

                <div class="details">
                    <div class="distinction_img_txt">
                        <img src="/img/distinction.svg" alt=""> Distinctions

                        <div class="distinctions-swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide"><img src="/img/badge-avant-gardiste.webp" alt=""></div>
                                <div class="swiper-slide"><img src="/img/badge-parrain.webp" alt=""></div>
                                <div class="swiper-slide"><img src="/img/badge-ecolo.webp" alt=""></div>
                                <div class="swiper-slide"><img src="/img/badge-ecolo.webp" alt=""></div>

                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-next"><img src="/img/swiper-button-next.svg" alt=""></div>
                            <div class="swiper-button-prev"><img src="/img/swiper-button-prev.svg" alt=""></div>

                            <!-- If we need scrollbar -->

                        </div>

                    </div>
                    <div class="expertise_img_txt">
                        <img src="/img/etoile.svg" alt=""> Expertise
                        <div class="distinctions-swiper">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide"><img src="/img/badge-bien-etre.webp" alt=""></div>
                                <div class="swiper-slide"><img src="/img/badge-economie-energie.webp" alt=""></div>
                                <div class="swiper-slide"><img src="/img/badge-interface.webp" alt=""></div>
                                <div class="swiper-slide"><img src="/img/badge-interface.webp" alt=""></div>



                            </div>
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-next"><img src="/img/swiper-button-next.svg" alt=""></div>
                            <div class="swiper-button-prev"><img src="/img/swiper-button-prev.svg" alt=""></div>

                            <!-- If we need scrollbar -->

                        </div>

                    </div>

                </div>

                <div class="exp">
                    <div class="exp_info">1.758 XP<span> /2200 </span> </div>
                    <div class="user_level">
                        <img src="/img/crown-blue.svg" alt=""> Intermédiaire
                    </div>

                    <div class="exp_niveau"><strong>NIVEAU 2</strong></div>
                </div>

                <div class="cards">
                    <div class="card">
                        <div class="user_stats">
                            <div><span>#24</span>/384</div>

                            <div>
                                UTILISATEUR
                            </div>
                            <img src="/img/user_profile_arrow_white.svg" alt="">
                        </div>
                        <div class="info_stats">
                            +3 places cette semaine
                        </div>


                    </div>
                    <div class="card">
                        <div class="user_stats">
                            <div><span>856</span></div>

                            <div>
                                CONTRIBUTIONS
                            </div>
                            <img src="/img/user_profile_arrow_black.svg" alt="">
                        </div>
                        <div class="info_stats">
                            23% <span> de + que la moyenne </span>
                        </div>


                    </div>
                    <div class="card">
                        <div class="user_stats">
                            <div><span>24</span></div>

                            <div>
                                SONDAGES REMPLIS
                            </div>
                            <img src="/img/user_profile_arrow_black.svg" alt="">
                        </div>
                        <div class="info_stats">
                            18% <span> de + que la moyenne </span>
                        </div>

                    </div>

                </div>
            </div>

        </div>

        <div class="profilecontent">

            <div class="wrapper">



                <div class="aside">
                    <div class="profile-navigation ">
                        <div class="defis active" id="defis-btn">
                            <img src="/img/badgepage.svg" alt="">
                            <div class="title" id="page1">Défis en cours</div>

                        </div>

                        <div class="badge-page" id="badge-btn">
                            <img src="/img/defispage.svg" alt="">

                            <div class="title" id="">Mes badges</div>
                        </div>

                        <div class="historique-page " id="history-btn">
                            <img src="/img/historiquepage.svg" alt="">
                            <div class="title" id="page3">Historique de participation</div>
                        </div>

                    </div>


                    <div class="profile-complete">
                        <div class="title-profile-complete"><strong>Votre profil est presque complet</strong> </div>
                        <div class="subtitle-profile-complete">Complétez vite les informations ci dessous pour gagner
                            des points ! </div>
                    </div>


                    <div class="information-user">
                        <div class="information">
                            <div class="myinfo">Mes informations</div>
                        </div>
                        <div class="information-pseudo">
                            <div class="title-pseudo">Pseudo</div>
                            <div class="pseudo">Pseudo01 <img src="/img/gold-mark-non-renseigne.png" alt="aaaaaa" style="width: 21px;margin: 1px;"></div>
                        </div>
                        <div class="information-statut">
                            <div class="title-statut">Statut</div>
                            <div class="statut">Non renseigné <img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -5px;"></div>
                        </div>
                        <div class="information-firstname">
                            <div class="title-firstname">Prenom</div>
                            <div class="firstname">Prenom01 <img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -5px;"></div>
                        </div>


                        <div class="information-surname">
                            <div class="title-surname">Nom de Famille</div>
                            <div class="surname">Nom01 <img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -5px;"></div>
                        </div>

                        <div class="information-email">
                            <div class="title-email">Email</div>
                            <div class="email">test@fanvoice.com <img src="/img/gold-mark-non-renseigne.png" alt="aaaaa" style="width: 21px;margin: 1px;"></div>
                        </div>
                        <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;"></div>
                        <div class="information">
                            <div class="myinfo">Situation Personnelle</div>
                        </div>


                        <div class="information-age-range">
                            <div class="title-age-range">Tranche d'age</div>
                            <div class="age-range">26-34 ans<img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -5px;"></div>
                        </div>

                        <div class="information-civility">
                            <div class="title-civility">Civilité</div>
                            <div class="civility">Féminin <img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -5px;"></div>
                        </div>

                        <div class="information-profession">
                            <div class="title-profession">Profession</div>
                            <div class="profession">Etudiant<img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -5px;">
                            </div>
                        </div>

                        <div class="information-profstats">
                            <div class="title-profstats">Statut professionnel</div>
                            <div class="profstats">Etudiant <img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -5px;"></div>
                        </div>

                        <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;"></div>

                        <div class="information">
                            <div class="myinfo">Lieu de vie</div>
                        </div>
                        <div class="information-city">
                            <div class="title-city">Region</div>
                            <div class="city">Non renseigné <img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -5px;"></div>
                        </div>


                        <div class="information-house-area">
                            <div class="title-house-area">Zone résidentielle</div>
                            <div class="house-area">Urbaine <img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -5px;"></div>
                        </div>


                        <div class="information-house-type">
                            <div class="title-house-type">Type de résidence</div>
                            <div class="house-type">Non renseigné <img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -5px;">
                            </div>
                        </div>
                        <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;"></div>
                        <div class="information">
                            <div class="myinfo">Situation Familiale</div>
                        </div>
                        <div class="information-maritalstatus">
                            <div class="title-maritalstatus">Situation maritale </div>
                            <div class="maritalstatus">Marié <img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -5px;"></div>
                        </div>

                        <div class="information-familysituation">
                            <div class="title-familysituation">Situation familiale </div>
                            <div class="familysituation">Sans enfant <img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -5px;">
                            </div>
                        </div>

                        <div class="information-childlive">
                            <div class="title-childlive">Vos enfants habitent-ils avec vous ? </div>
                            <div class="childlive">Non <img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -2px;"></div>
                        </div>


                        <div class="information-childnumber">
                            <div class="title-childnumber">Nombre d'enfant </div>
                            <div class="childnumber">0 <img src="/img/editinformation.png" alt="" style="width: 26px;margin-top: -5px;"></div>
                        </div>


                        <div class="edit-information" id="edit-profile-btn">
                            <div class="title-edit">Editer les informations</div>
                        </div>

                        <div class="popup">
                            <h2>Modifier les informations</h2>
                            <form id="editForm">
                                <label for="email">Email:</label>
                                <input type="text" id="email" name="email" required>
                                <label for="surname">Nom de Famille:</label>
                                <input type="text" id="surname" name="surname" required>
                                <button type="submit">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                    <div class="radio-list">
                        <div class="user-mathematique">

                            <div class="item-all">
                                <input type="radio" name="r1" id="r0">
                                Toutes les thématiques

                            </div>
                            <div class="bar"></div>

                            <div class="item">
                                <input type="radio" name="r1" id="r1">
                                <img src="img/economie_energie.svg" alt="">
                                Économie d’énergie
                            </div>
                            <div class="bar"></div>
                            <div class="item">
                                <input type="radio" name="r1" id="r2">
                                <img src="img/Management_energie.svg" alt="">
                                Management d’énergie
                            </div>

                            <div class="bar"></div>
                            <div class="item">
                                <input type="radio" name="r1" id="r3">
                                <img src="img/Mobilite.svg" alt="">
                                Mobilité
                            </div>

                            <div class="bar"></div>
                            <div class="item">
                                <input type="radio" name="r1" id="">
                                <img src="img/Bien_etre.svg" alt="">
                                Bien-être
                            </div>
                            <div class="bar"></div>
                            <div class="item">
                                <input type="radio" name="r1" id="">
                                <img src="img/IOT.svg" alt="">
                                Objets connectés
                            </div>
                            <div class="bar"></div>

                            <div class="item">
                                <input type="radio" name="r1" id="">
                                <img src="img/Interfaces.svg" alt="">
                                Interfaces digitales
                            </div>
                            <div class="bar"></div>

                            <div class="item">
                                <input type="radio" name="r1" id="">
                                <img src="img/Contributions.svg" alt="">
                                Environnement
                            </div>
                            <div class="bar"></div>

                            <div class="item">
                                <input type="radio" name="r1" id="">
                                <img src="img/Travaux.svg" alt="">
                                Travaux
                            </div>
                            <div class="bar"></div>

                            <div class="item">
                                <input type="radio" name="r1" id="">
                                <img src="img/Autres.svg" alt="">
                                Autres
                            </div>
                            <div class="bar"></div>



                        </div>
                    </div>
                </div>
                <div class="profile-content">

                    <div class="page-defis" id="page-defis">
                        <div class="page-en-cours" id="defis-page">
                            <div class="title">Défis en Cours</div>
                            <div class="text-defi">Retrouvez ci-dessous les défis proposée par EDF Pulse & You pour vous
                                faire
                                gagner plus de points.
                                A chaque niveau franchi sur la plateforme, de nouveaux défis vous seront proposés </div>


                            <div class="select-menu" id="select-menu">
                                <div class="select-btn" id="select-btn">
                                    <div class="defi-levels">
                                        <img src="/img/white_tick.svg" alt="">
                                        <span class="sBtn-text">NIVEAU 1 :</span>
                                        <div class="img1">Débutant <img src="/img/hand-emoji.svg" alt=""></div>

                                    </div>

                                    <div class="defis-restant">
                                        <span class="sBtn-text-end">3 défis restants !</span>
                                        <i class="bx bx-chevron-down"></i>
                                    </div>

                                </div>

                                <ul class="options options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">

                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle">

                                                        </div>


                                                    </div>

                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Un chauffage innovant"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+20 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>
                                            </div>

                                        </span>

                                    </li>

                                </ul>
                                <ul class="options options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Et si les commerçants locaux"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+20 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </li>

                                </ul>
                                <ul class="options options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle">
                                                        </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Les projets en cours"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+30 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>

                                <ul class="options options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Impliquez vous sur les projets en cours d’EDF Pulse & You en
                                                        proposant 3
                                                        contributions sur le projet de votre choix !
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Les projets en cours"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+40 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>
                            </div>

                            <div class="select-menu active" id="select-menu">
                                <div class="select-btn" id="select-btn">
                                    <div class="defi-levels" id="">
                                        <img src="/img/loading-defis.svg" alt="">
                                        <span class="sBtn-text" id="">NIVEAU 2 :</span>
                                        <div class="img1">Top contributeur</div>

                                    </div>

                                    <div class="defis-restant">
                                        <span class="sBtn-text-end">4 défis restants !</span>
                                        <i class="bx bx-chevron-down"></i>
                                    </div>

                                </div>

                                <ul class="options options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Un chauffage innovant"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+20 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>
                                            </div>
                                        </span>
                                    </li>

                                </ul>
                                <ul class="options options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Et si les commerçants locaux"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+20 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>
                                <ul class="options options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle">
                                                        </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Les projets en cours"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+30 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>

                                <ul class="options options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Impliquez vous sur les projets en cours d’EDF Pulse & You en
                                                        proposant 3
                                                        contributions sur le projet de votre choix !
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Les projets en cours"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+40 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>

                            </div>
                            <div class="select-menu locked" id="select-menu">

                                <div class="select-btn" id="select-btn">
                                    <div class="defi-levels" id="">
                                        <img src="/img/locked-defis.svg" alt="">
                                        <span class="sBtn-text locked" id="">NIVEAU 3 :</span>
                                        <div class="img1 locked">Lorem ipsum</div>

                                    </div>

                                    <div class="defis-restant">
                                        <span class="sBtn-text-end">Verrouillé</span>
                                        <i class="bx bx-chevron-down locked"></i>
                                    </div>

                                </div>

                                <ul class="options options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Un chauffage innovant"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+20 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>
                                <ul class="options options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Et si les commerçants locaux"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+20 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>
                                <ul class="options  options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle">
                                                        </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Les projets en cours"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+30 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                    <div class="circle-value">
                                                        <span>3</span>
                                                        /4
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>

                                <ul class="options  options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Impliquez vous sur les projets en cours d’EDF Pulse & You en
                                                        proposant 3
                                                        contributions sur le projet de votre choix !
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Les projets en cours"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+40 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>
                            </div>

                            <div class="select-menu locked" id="select-menu">
                                <div class="select-btn" id="select-btn">
                                    <div class="defi-levels">
                                        <img src="/img/locked-defis.svg" alt="">
                                        <span class="sBtn-text locked">NIVEAU 4 :</span>
                                        <div class="img1 locked">Lorem ipsum</div>

                                    </div>

                                    <div class="defis-restant locked">
                                        <span class="sBtn-text-end">Verrouillé</span>
                                        <i class="bx bx-chevron-down"></i>
                                    </div>

                                </div>

                                <ul class="options  options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Un chauffage innovant"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+20 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>
                                <ul class="options  options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Et si les commerçants locaux"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+20 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>
                                <ul class="options  options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Les projets en cours"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+30 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>

                                <ul class="options  options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Impliquez vous sur les projets en cours d’EDF Pulse & You en
                                                        proposant 3
                                                        contributions sur le projet de votre choix !
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Les projets en cours"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+40 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>
                            </div>

                            <div class="select-menu locked" id="select-menu">
                                <div class="select-btn" id="select-btn">
                                    <div class="defi-levels">
                                        <img src="/img/locked-defis.svg" alt="">
                                        <span class="sBtn-text locked">NIVEAU 5 :</span>
                                        <div class="img1 locked">Lorem ipsum</div>

                                    </div>

                                    <div class="defis-restant">
                                        <span class="sBtn-text-end">Verrouillé</span>
                                        <i class="bx bx-chevron-down locked"></i>
                                    </div>

                                </div>

                                <ul class="options  options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Un chauffage innovant"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+20 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>
                                <ul class="options  options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Et si les commerçants locaux"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+20 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>
                                <ul class="options  options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle">
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                                        eiusmod
                                                        tempor incididunt ut labore et dolore
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Les projets en cours"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+30 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>

                                <ul class="options  options-menu">
                                    <li class="option">
                                        <i class="" style=";"></i>
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="description">
                                                        Impliquez vous sur les projets en cours d’EDF Pulse & You en
                                                        proposant 3
                                                        contributions sur le projet de votre choix !
                                                    </div>

                                                    <div class="campagne-name">
                                                        "Les projets en cours"
                                                    </div>

                                                    <div class="points-won">
                                                        <span>+40 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>

                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap"
                                                    style="--progress:140deg; --progress-circle-size:80px; --progress-circle-size-half:40px; --progress-circle-color:#E8BA00; --progress-circle-bg-color:#E7D9A1; ">
                                                    <div class="circle">
                                                        <div class="mask full">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="mask half">
                                                            <div class="fill"></div>
                                                        </div>
                                                        <div class="inside-circle"> </div>
                                                    </div>
                                                </div>
                                        </span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="page-badge" id="page-badge">
                        <div class="page-en-cours">
                            <div class="title">Mes badges</div>
                            <div class="text-defi">
                                Retrouvez dans cette section les badges que vous avez accumulé lors de vos
                                participations
                                aux projets & qui vous ont rapporté un jackpot de points, ainsi que ceux qui
                                vous
                                restent à gagner.
                            </div>

                            <div class="select-menu active" id="select-menu">
                                <div class="select-btn" id="select-btn">
                                    <div class="badge-levels">
                                        <img src="/img/white_tick.svg" alt="">
                                        <div class="badge-text">Engagez-vous !</div>

                                    </div>

                                    <div class="badge-restant">
                                        <span class="sBtn-text-end">Tous les badges décorochés</span>
                                        <i class="bx bx-chevron-down"></i>
                                    </div>

                                </div>

                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">
                                                        x<span>2</span>
                                                    </div>
                                                    <div class="title">
                                                        L'AVANT GARDISTE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque l’une de vous
                                                        contributions sort
                                                        du lot, de par son originalité & sa pertinence
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+300 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>



                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-ecolo.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LA VERTE PAROLE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque l’une de vous
                                                        contributions sort
                                                        du lot, de par son caractère écologique
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>


                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-elementaire.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        ÉLÉMENTAIRE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsqu’un de vos commentaires a
                                                        permis de
                                                        faire progresser le propos d’un autre contributeur !
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>




                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LE PARRAIN
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque vous parvenez à parrainer
                                                        un ami &
                                                        qu’il s’inscrit sur la plateforme
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>




                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LE PIONNIER
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque votre idée est tellement
                                                        avancée
                                                        qu’elle est mis à l’étude par EDF Pulse & You
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>
                            </div>


                            <div class="select-menu" id="select-menu">
                                <div class="select-btn" id="select-btn">
                                    <div class="badge-levels">
                                        <img src="/img/white_tick.svg" alt="">
                                        <div class="badge-text">Un coup de génie</div>

                                    </div>

                                    <div class="badge-restant">
                                        <span class="sBtn-text-end">Encore 3 badges à décrocher</span>
                                        <i class="bx bx-chevron-down"></i>
                                    </div>

                                </div>

                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">
                                                        x<span>2</span>
                                                    </div>
                                                    <div class="title">
                                                        L'AVANT GARDISTE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque l’une de vous
                                                        contributions sort
                                                        du lot, de par son originalité & sa pertinence
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+300 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>



                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-ecolo.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LA VERTE PAROLE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque l’une de vous
                                                        contributions sort
                                                        du lot, de par son caractère écologique
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>


                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-elementaire.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        ÉLÉMENTAIRE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsqu’un de vos commentaires a
                                                        permis de
                                                        faire progresser le propos d’un autre contributeur !
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>




                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LE PARRAIN
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque vous parvenez à parrainer
                                                        un ami &
                                                        qu’il s’inscrit sur la plateforme
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>




                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LE PIONNIER
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque votre idée est tellement
                                                        avancée
                                                        qu’elle est mis à l’étude par EDF Pulse & You
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>

                            </div>

                            <div class="select-menu" id="select-menu">
                                <div class="select-btn" id="select-btn">
                                    <div class="badge-levels">
                                        <img src="/img/white_tick.svg" alt="">
                                        <div class="badge-text">Collaborez !</div>

                                    </div>

                                    <div class="badge-restant">
                                        <span class="sBtn-text-end">Encore 5 badges à décrocher</span>
                                        <i class="bx bx-chevron-down"></i>
                                    </div>

                                </div>
                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">
                                                        x<span>2</span>
                                                    </div>
                                                    <div class="title">
                                                        L'AVANT GARDISTE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque l’une de vous
                                                        contributions sort
                                                        du lot, de par son originalité & sa pertinence
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+300 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>



                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-ecolo.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LA VERTE PAROLE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque l’une de vous
                                                        contributions sort
                                                        du lot, de par son caractère écologique
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>


                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-elementaire.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        ÉLÉMENTAIRE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsqu’un de vos commentaires a
                                                        permis de
                                                        faire progresser le propos d’un autre contributeur !
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>




                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LE PARRAIN
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque vous parvenez à parrainer
                                                        un ami &
                                                        qu’il s’inscrit sur la plateforme
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>




                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LE PIONNIER
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque votre idée est tellement
                                                        avancée
                                                        qu’elle est mis à l’étude par EDF Pulse & You
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>

                            </div>
                            <div class="select-menu" id="select-menu">
                                <div class="select-btn" id="select-btn">
                                    <div class="badge-levels">
                                        <img src="/img/white_tick.svg" alt="">
                                        <div class="badge-text">Lorem Ipsum</div>

                                    </div>

                                    <div class="badge-restant">
                                        <span class="sBtn-text-end">Encore 5 badges à décrocher</span>
                                        <i class="bx bx-chevron-down"></i>
                                    </div>

                                </div>
                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">
                                                        x<span>2</span>
                                                    </div>
                                                    <div class="title">
                                                        L'AVANT GARDISTE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque l’une de vous
                                                        contributions sort
                                                        du lot, de par son originalité & sa pertinence
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+300 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>



                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-ecolo.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LA VERTE PAROLE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque l’une de vous
                                                        contributions sort
                                                        du lot, de par son caractère écologique
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>


                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-elementaire.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        ÉLÉMENTAIRE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsqu’un de vos commentaires a
                                                        permis de
                                                        faire progresser le propos d’un autre contributeur !
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>




                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LE PARRAIN
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque vous parvenez à parrainer
                                                        un ami &
                                                        qu’il s’inscrit sur la plateforme
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>




                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LE PIONNIER
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque votre idée est tellement
                                                        avancée
                                                        qu’elle est mis à l’étude par EDF Pulse & You
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>

                            </div>

                            <div class="select-menu" id="select-menu">
                                <div class="select-btn" id="select-btn">
                                    <div class="badge-levels">
                                        <img src="/img/white_tick.svg" alt="">
                                        <div class="badge-text">Lorem Ipsum</div>

                                    </div>

                                    <div class="badge-restant">
                                        <span class="sBtn-text-end">Encore 5 badges à décrocher</span>
                                        <i class="bx bx-chevron-down"></i>
                                    </div>

                                </div>
                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">
                                                        x<span>2</span>
                                                    </div>
                                                    <div class="title">
                                                        L'AVANT GARDISTE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque l’une de vous
                                                        contributions sort
                                                        du lot, de par son originalité & sa pertinence
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+300 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>



                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-ecolo.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LA VERTE PAROLE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque l’une de vous
                                                        contributions sort
                                                        du lot, de par son caractère écologique
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>


                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-elementaire.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        ÉLÉMENTAIRE
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsqu’un de vos commentaires a
                                                        permis de
                                                        faire progresser le propos d’un autre contributeur !
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>




                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LE PARRAIN
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque vous parvenez à parrainer
                                                        un ami &
                                                        qu’il s’inscrit sur la plateforme
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>




                                <ul class="options  options-menu">
                                    <li class="option">
                                        <span class="option-text">
                                            <div class="profile-challenge" style="">
                                                <div class="circle-wrap">
                                                    <div class="badge-img">

                                                        <img src="/img/page-badge-avant-gardiste.webp" alt="">

                                                    </div>
                                                </div>


                                                <div class="info">
                                                    <div class="n-badge">

                                                    </div>
                                                    <div class="title">
                                                        LE PIONNIER
                                                    </div>

                                                    <div class="desc">
                                                        Vous recevez ce badge lorsque votre idée est tellement
                                                        avancée
                                                        qu’elle est mis à l’étude par EDF Pulse & You
                                                    </div>

                                                    <div class="point-won">
                                                        <span>+200 POINTS</span>
                                                    </div>


                                                </div>
                                            </div>



                                        </span>
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="page-historique" id="page-histo">
                        <div class="page-en-cours">
                            <div class="title">Historique de participation</div>
                            <div class="text-defi">
                                Retrouvez dans cette section l’historique de vos différentes actions sur les projets
                                & les récompenses qui leur ont été accordé.
                            </div>


                            <div class="user-historique">
                                <div class="pagination">
                                    <div class="btn highlighted" id="btn-all">
                                        TOUTES
                                    </div>

                                    <div class="btn" id="btn-contribution">
                                        CONTRIBUTIONS
                                    </div>

                                    <div class="btn" id="btn-reponse">
                                        REPONSE AU SONDAGE
                                    </div>

                                    <div class="btn" id="btn-reaction">
                                        REACTIONS
                                    </div>

                                    <div class="btn" id="btn-badge">
                                        BADGES GAGNES
                                    </div>
                                </div>

                                <div class="history-search df-aljb">
                                    <div class="nb-participant">215 participants</div>
                                    <div class="sort-search df-aljc">
                                        <span>Trier</span>
                                        <div class="select_wrap">
                                            <ul class="default_option">
                                                <li>
                                                    <div class="option">

                                                        <p>Du plus récent</p>
                                                    </div>
                                                </li>
                                            </ul>
                                            <ul class="select_ul">
                                                <li>
                                                    <div class="option">

                                                        <p>Date décroissante</p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="option">

                                                        <p>Date croissante</p>
                                                    </div>
                                                </li>


                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="history-content">
                                    <div class="user-participation">
                                        <div class="user-text">
                                            <div class="new-ideas">
                                                <span>NOUVELLE IDEE</span>
                                            </div>
                                            <span>La sobriété ça commence ...</span>
                                        </div>
                                        <div class="history-text">
                                            <div class="newideatitle">
                                                DES ROULEMENTS
                                                <span>11 janvier 2023 à 10h20</span>
                                            </div>
                                            <div class="text-desc">
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam”

                                            </div>
                                        </div>
                                        <div class="points">
                                            <div class="points-won">
                                                <span>+20 POINTS</span>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-participation">
                                        <div class="user-text">
                                            <div class="comment">
                                                <span>COMMENTAIRE</span>
                                            </div>
                                            <span>La sobriété ça commence ...</span>
                                        </div>
                                        <div class="history-text">
                                            <div class="newcommenttitle">
                                                En réponse à
                                                <img src="/img/reponse-commentaire.svg" alt="">
                                                <div class="user">@Username05</div>
                                                <span>11 janvier 2023 à 10h20</span>
                                            </div>
                                            <div class="text-desc">
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam”

                                            </div>
                                        </div>
                                        <div class="points">
                                            <div class="points-won">
                                                <span>+5 POINTS</span>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-participation">
                                        <div class="user-text">
                                            <div class="new-ideas">
                                                <span>NOUVELLE IDEE</span>
                                            </div>
                                            <span>Un chauffage vraiment in...</span>
                                        </div>
                                        <div class="history-text">
                                            <div class="newideatitle">
                                                LOREM IPSUM
                                                <span>9 janvier 2023 à 18h18</span>
                                            </div>
                                            <div class="text-desc">
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam”

                                            </div>
                                        </div>
                                        <div class="points">
                                            <div class="points-won">
                                                <span>+20 POINTS</span>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-participation">
                                        <div class="user-text">
                                            <div class="new-ideas">
                                                <span>NOUVELLE IDEE</span>
                                            </div>
                                            <span>Et si les commerçants loca...</span>
                                        </div>
                                        <div class="history-text">
                                            <div class="newideatitle">
                                                LOREM IPSUM
                                                <span>8 janvier 2023 à 17h48</span>
                                            </div>
                                            <div class="text-desc">
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam”
                                            </div>
                                        </div>
                                        <div class="points">
                                            <div class="points-won">
                                                <span>+20 POINTS</span>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-participation">
                                        <div class="user-text">
                                            <div class="new-ideas">
                                                <span>NOUVELLE IDEE</span>
                                            </div>
                                            <span>Et si les commerçants loca...</span>
                                        </div>
                                        <div class="history-text">
                                            <div class="newideatitle">
                                                LOREM IPSUM
                                                <span>8 janvier 2023 à 12h38</span>
                                            </div>
                                            <div class="text-desc">
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam”
                                            </div>
                                        </div>
                                        <div class="points">
                                            <div class="points-won">
                                                <span>+20 POINTS</span>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-participation">
                                        <div class="user-text">
                                            <div class="comment">
                                                <span>COMMENTAIRE</span>
                                            </div>
                                            <span>Un chauffage vraiment in...</span>
                                        </div>
                                        <div class="history-text">
                                            <div class="newcommenttitle">
                                                En réponse à
                                                <img src="/img/reponse-commentaire.svg" alt="">
                                                <div class="user">@Username19</div>
                                                <span>7 janvier 2023 à 8h20</span>
                                            </div>
                                            <div class="text-desc">
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam”

                                            </div>
                                        </div>
                                        <div class="points">
                                            <div class="points-won">
                                                <span>+5 POINTS</span>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-participation">
                                        <div class="user-text">
                                            <div class="comment">
                                                <span>COMMENTAIRE</span>
                                            </div>
                                            <span>Et si les commerçants loca...</span>
                                        </div>
                                        <div class="history-text">
                                            <div class="newcommenttitle">
                                                En réponse à
                                                <img src="/img/reponse-commentaire.svg" alt="">
                                                <div class="user">@Username105</div>
                                                <span>7 janvier 2023 à 7h40</span>
                                            </div>
                                            <div class="text-desc">
                                                “Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam”

                                            </div>
                                        </div>
                                        <div class="points">
                                            <div class="points-won">
                                                <span>+5 POINTS</span>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="user-participation">

                                        <div class="contri-text">
                                            <div class="contributionhistory">
                                                <div class="contributiontitle">

                                                    Et si les commerçants locaux, vous redonnaient du pouvoir d’achat ?

                                                </div>
                                                <div class="points-won">
                                                    <span>+20 POINTS</span>
                                                </div>
                                                <div class="rewardbadge">
                                                    <span>+1 </span>
                                                    <img src="/img/rewardbadge.svg" alt="">
                                                </div>
                                            </div>
                                            <div class="user-text-contri">
                                                <div class="contribution">
                                                    <span>CONTRIBUTIONS</span>
                                                </div>
                                                <span> “Et si nous décidions de faire des roulements dans notre
                                                    consommation; lorem ipsum dolor...”</span>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="pagination-section">
                                        <div class="display-mode">
                                            Afficher :
                                            <div class="select_wrap">
                                                <ul class="default_option">
                                                    <li>
                                                        <div class="option1">

                                                            <p>5</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <ul class="select_ul">
                                                    <li>
                                                        <div class="option2">

                                                            <p>1</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="option3">

                                                            <p>2</p>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <div class="option4">

                                                            <p>3</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="option5">

                                                            <p>4</p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="option6">

                                                            <p>5</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            contributions par page
                                        </div>
                                        <div class="pagination">
                                            <div class="double-arrow arrow">
                                                << </div>
                                                    <div class="arrow">
                                                        < </div>
                                                            <div class="numbers">
                                                                <div class="number numberactive">1</div>
                                                                <div class="number">2</div>
                                                                <div class="number">3</div>
                                                                <div class="number">4</div>
                                                                <div class="number">5</div>
                                                                <div class="number">6</div>
                                                            </div>

                                                            <div class="arrow">></div>
                                                            <div class="double-arrow arrow">>></div>
                                                    
                                            
                                        </div>

                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="page-editprofile" id="page-edit-profile" style="display: none;">
                        <div class="page-en-cours">
                            <div class="title">Modifier mes informations</div>
                            <div class="text-defi">
                                Retrouvez dans cette section la modification de votre information .
                            </div>
                            <div class="container_editprofile">
                                <div class="form-wrapper">
                                    <div class="form-column">

                                    <div class="form-group">
                                             <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;"></div>
                                            <h2>PHOTO DE PROFIL</h2>
                                            <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;"></div>
                                            <br>
                                            <div class="logo">
                                                <div class="circle-wrap"style="--progress:140deg; --progress-circle-size:200px; --progress-circle-size-half:100px; --progress-circle-color:#455B87; --progress-circle-bg-color:#C9D2E4; ">
                                                    <div class="circle">
                                                    <div class="mask full">
                                                        <div class="fill"></div>
                                                    </div>
                                                    <div class="mask half">
                                                        <div class="fill"></div>
                                                    </div>
                                                    <div class="inside-circle">
                                                        <img src="/img/profile_picture.webp" alt="" class="profile-picture">
                                                        <label for="file-input" class="change-picture" alt="sdqfqsdqs">
                                                            <img src="/img/change-icon.png" alt="Changer vote photo de profile en cliquant ici">
                                                            <div class="helping-text">Cliquer sur la caméra pour changer vote photo de profile.</div>
                                                            <input type="file" id="file-input" accept="image/*" style="display: none;">
                                                        </label>
                                                    </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="helpchangephoto">Cliquer sur la caméra pour changer vote photo de profile.</div>
                                                <br>
                                                </div>
                                            <label for="pseudo" >Pseudo:</label>
                                            <br>
                                            <input type="text" id="pseudo" name="pseudo" placeholder = "@Username01"  disabled>
                                        </div>

                                        <div class="form-group">
                                            <label for="statut">Statut:</label>
                                            <br>
                                            <input type="textarea" id="statut" name="statut" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <br>
                                            <input type="email" id="email" name="email" placeholder = "test@fanvoice.com" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="prenom">Prénom:</label>
                                            <br>
                                            <input type="text" id="prenom" name="prenom" placeholder="Entrer votre prénom " required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nom">Nom de famille:</label>
                                            <br>
                                            <input type="text" id="nom" name="nom" placeholder="Entrer votre nom " required>
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <br>
                                            <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;">
                                            </div>
                                            <h2>SITUATION PERSONNELLE</h2>
                                            <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;">
                                            </div>
                                            <br>
                                            <br>
                                            <label for="civilite">Civilité:</label>
                                            <br>
                                            <select id="civilite" name="civilite" required>
                                                <option value="">Sélectionnez votre civilité</option>
                                                <option value="M">Un homme</option>
                                                <option value="Mme">Une femme</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="tranche-age">Tranche d'âge:</label>
                                            <br>
                                            <div id="tranche-age-container">
                                                <select id="tranche-age" name="tranche-age" required>
                                                <option value="">Sélectionnez une tranche d'âge</option>
                                                <option value="moins de 18 ans">Moins de 25 ans</option>
                                                <option value="18-25 ans">26-34 ans</option>
                                                <option value="26-35 ans">35-44 ans</option>
                                                <option value="26-35 ans">45-54 ans</option>
                                                <option value="26-35 ans">55-64 ans</option>
                                                <option value="moins de 18 ans">65 ans ou plus</option>
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label for="profession">Profession:</label>
                                            <br>
                                            <input type="text" id="profession" name="profession" placeholder="Entrer votre profession "required>
                                        </div>
                                        <div class="form-group">
                                            <label for="statut-professionnel">Statut professionnel:</label>
                                            <br>
                                            <div id="statut-professionnel-container">
                                                <select id="statut-professionnel" name="statut-professionnel" required>
                                                <option value="">Sélectionnez votre statut professionnel</option>
                                                <option value="Etudiant">Etudiant</option>
                                                <option value="CDD">CDD</option>
                                                <option value="CDI privé">CDI privé</option>
                                                <option value="CDI fonctionnaire">CDI fonctionnaire</option>
                                                <option value="Sans emploi">Sans emploi</option>
                                                <option value="Retraité">Retraité</option>
                                                <option value="Chef d'entreprise">Chef d'entreprise</option>
                                                <option value="Artisan">Artisan</option>
                                                <option value="Profession libérale">Profession libérale</option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>


                                    </div>
                                    <div class="form-column">
                                        <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;">
                                        </div>
                                        <h2>LIEU DE VIE</h2>
                                        <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;">
                                        </div>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label for="region">Région:</label>
                                            <br>
                                            <div id="region-container">
                                                <select id="region" name="region" required>
                                                <option value="">Sélectionnez votre région</option>
                                                <option value="Auvergne-Rhône-Alpes">Auvergne-Rhône-Alpes</option>
                                                <option value="Bourgogne-Franche-Comté">Bourgogne-Franche-Comté</option>
                                                <option value="Bretagne">Bretagne</option>
                                                <option value="Centre-Val de Loire">Centre-Val de Loire</option>
                                                <option value="Corse">Corse</option>
                                                <option value="Grand Est">Grand Est</option>
                                                <option value="Guadeloupe">Guadeloupe</option>
                                                <option value="Guyane">Guyane</option>
                                                <option value="Hauts-de-France">Hauts-de-France</option>
                                                <option value="Ile-de-France">Ile-de-France</option>
                                                <option value="Martinique">Martinique</option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Normandie">Normandie</option>
                                                <option value="Nouvelle-Aquitaine">Nouvelle-Aquitaine</option>
                                                <option value="Occitanie">Occitanie</option>
                                                <option value="Pays de la Loire">Pays de la Loire</option>
                                                <option value="Provence-Alpes-Côte d'Azur">Provence-Alpes-Côte d'Azur</option>
                                                <option value="La réunion">La réunion</option>
                                                <option value="Andere">Andere</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="zone-residentielle">Zone résidentielle:</label>
                                            <br>
                                            <div id="zone-residentielle-container">
                                                <select id="zone-residentielle" name="zone-residentielle" required>
                                                <option value="">Sélectionnez votre zone residentielle</option>
                                                <option value="Urbaine">Urbaine</option>
                                                <option value="Non-Urbaine">Non-urbaine</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="type-residence">Type de résidence:</label>
                                            <br>                                             <div id="type-residence-container">
                                                <select id="type-residence" name="type-residence" required>
                                                <option value="">Sélectionnez votre type de résidence</option>
                                                <option value="Urbaine">Maison</option>
                                                <option value="Non-Urbaine">Appartement</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <br>
                                            <br>
                                            <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;">
                                            </div>
                                            <h2>SITUATION FAMILIALE</h2>
                                            <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;">
                                            </div>
                                            <br>
                                            <br>
                                            <label for="situation-maritale">Situation maritale:</label>
                                            <br>
                                            <div id="situation-maritale-container">
                                                <select id="situation-maritale" name="situation-maritale" required>
                                                <option value="">Sélectionnez votre situation maritale</option>
                                                <option value="Marié">Marié</option>
                                                <option value="Célibataire">Célibataire</option>
                                                <option value="En concubinage">En concubinage</option>
                                                <option value="Pacsé">Pacsé</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="situation-familiale">Situation familiale:</label>
                                            <br>
                                            <div id="situation-familiale">
                                                <select id="situation-familiale" name="situation-familiale" required>
                                                <option value="">Sélectionnez votre situation familiale</option>
                                                <option value="avec-enfant">Avec enfant(s)</option>
                                                <option value="sans-enfant">Sans enfant</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="enfants-avec-vous">Vos enfants habitent-ils avec vous?</label>
                                            <br>
                                            <div class="radio-group">
                                                <br>
                                                <br>
                                                <label for="enfants-oui">Oui</label>
                                                <input type="radio" id="enfants-oui" name="enfants-avec-vous"
                                                    value="oui" required>
                                                <label for="enfants-non">Non</label>
                                                <input type="radio" id="enfants-non" name="enfants-avec-vous"
                                                    value="non">
                                            </div>
                                            <div class="form-group">
                                                <br>
                                                <label for="nombre-enfant">Nombre d'enfants:</label>
                                                <br>
                                                <input type="number" id="nombre-enfant" name="nombre-enfant" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <br>

                                <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;"></div>
                                <h2>MES INFORMATIONS PERSONNELLES</h2>
                                <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;"></div>
                                <br>
                                <br>
                                <input type="checkbox" class="info-personnel" id="info-personnel" name="info-personnel" value="non">
                                <label for="info-personnel">Lors de l’inscription j’ai donné mon consentement au
                                    traitement de mes données à caractère personnel en acceptant la charte de données à
                                    caractère personnel du site dont le lien est ci-dessous. Je souhaite désormais
                                    retirer mon consentement au traitement de mes données à caractère personnel sur ce
                                    site : pour cela il me suffit de décocher cette case. De fait, je renonce à
                                    l’utilisation des services, et aux récompenses et autres avantages liés à ce site.
                                    Pour tout autre demande liée à mes données à caractère personnel, je peux écrire par
                                    courrier ou mail aux adresses ci-dessous.</label>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;"></div>
                                <h2>NOTIFICATIONS</h2>
                                <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;"></div>
                                <br>
                                <input type="checkbox" id="info-personnel" name="info-personnel" value="non">
                                <label for="info-personnel">Notifications en lien avec l'activité de la plateforme
                                    (invitation nouveaux projets, annonce des gagnants, réaction sur mes
                                    idées,…)</label>
                                <br>
                                <br>
                                <br>
                                <br>
                                <div class="form-group form-group-btns">
                                    <button class="button-box" id="submitbutton" type="submit">Enregistrer mes changements</button>
                                    <button class="button-box" id="backbutton" type="submit">Retour</button>
                                </div>
                                <br>
                                <br>

                                <br>
                                <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;"></div>
                                <h2>CHANGER LE MOT DE PASSE</h2>
                                <div class="bar" style="width: 100%;height: 0px;border: 1px solid #C9D2E4;"></div>
                                <br>
                                <div class="form-group">
                                    <label for="old-password">Mot de passe actuel:</label>
                                    <br>
                                    <div class="password-input">
                                        <input type="password" id="oldpassword" name="oldpassword" required>
                                        <span class="toggle-password" onclick="togglePasswordVisibility('oldpassword')"></span>
                                    </div>
                                    <br>

                                    <br>
                                    <label for="new-password">Nouveau mot de passe :</label>
                                    <br>
                                    <div class="password-input">
                                        <input type="password" id="newpassword" name="newpassword" required>
                                        <span class="toggle-password" onclick="togglePasswordVisibility('newpassword')"></span>
                                    </div>
                                    <br>

                                    <br>
                                    <label for="confirm-password">Confirmer le nouveau mot de passe:</label>
                                    <br>
                                    <div class="password-input">
                                        <input type="password" id="confirmnewpassword" name="confirmnewpassword" required>
                                        <span class="toggle-password" onclick="togglePasswordVisibility('confirmnewpassword')"></span>
                                    </div>
                                </div>
                                <div class="form-group form-group-btns">
                                    <button class="button-box" id="submitbutton" type="submit">Enregistrer mon mot de passe</button>
                                </div>
                                

                            </div>
                        </div>
                    </div>


                    <div class="table-user" id="tableuser">
                        <div class="title">Classement des Pulseurs</div>
                        <div class="table">
                            <div class="table-header df-aljb">
                                <div class="nb-user">384 Pulseurs</div>
                                <div class="search df-aljc">
                                    <span>Rechercher un pseudo </span>
                                    <div class="search-box df-aljc">
                                        <img src="/img/search.svg" alt="">
                                        <input type="text">
                                    </div>

                                </div>
                                <div class="sort-user df-aljc">
                                    <span>Trier</span>
                                    <div class="select_wrap">
                                        <ul class="default_option">
                                            <li>
                                                <div class="option pizza">

                                                    <p>Date décroissante</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="select_ul">
                                            <li>
                                                <div class="option pizza">

                                                    <p>Date décroissante</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="option burger">

                                                    <p>Date croissante</p>
                                                </div>
                                            </li>


                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="tablehead">
                                <table class="table-head">


                                    <tr>
                                        <th>Rang</th>
                                        <th>Informations</th>
                                        <th>Accomplissements</th>
                                        <th>Expertise</th>
                                        <th>Rangs gagnés </th>
                                    </tr>
                                </table>
                            </div>
                            <div class="content-table">
                                <table class="table">
                                    <tr>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="add-friend df-aljc ">
                                                    <img src="/img/add-friend.svg" alt="">
                                                </div>
                                                <div class="add-friendplus df-aljc ">
                                                    <img src="/img/addfriend+.svg" alt="">
                                                </div>
                                                <div class="rang">22</div>

                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="info-user df-alc">
                                                    <img src="/img/user-logo.webp" alt="">
                                                    <div class="info">
                                                        <div class="username">Username02</div>
                                                        <div class="xp">2.014 XP</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="item df-aljc">
                                                    <img src="/img/item-bulb.svg" alt="">
                                                    <div class="stats">947</div>
                                                </div>
                                                <div class="item df-aljc ">
                                                    <img src="/img/item-badge.svg" alt="">
                                                    <div class="stats">3</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            <div class="images df-aljc">
                                                <img src="/img/economie-energie-table.svg" alt="">
                                                <img src="/img/Travaux.svg" alt="">
                                                <img src="/img/Mobilite.svg" alt="">
                                                <div class="plus">+2</div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="stats-change-up">+8 cette semaine</div>
                                                <img src="/img/stats-up.svg" alt="">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="add-friend df-aljc ">
                                                    <img src="/img/add-friend.svg" alt="">
                                                </div>
                                                <div class="add-friendplus df-aljc ">
                                                    <img src="/img/addfriend+.svg" alt="">
                                                </div>
                                                <div class="rang">22</div>

                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="info-user df-alc">
                                                    <img src="/img/user-logo-1.webp" alt="">
                                                    <div class="info">
                                                        <div class="username">Username01</div>
                                                        <div class="xp">1.865 XP</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="item df-aljc">
                                                    <img src="/img/item-bulb.svg" alt="">
                                                    <div class="stats">864</div>
                                                </div>
                                                <div class="item df-aljc ">
                                                    <img src="/img/item-badge.svg" alt="">
                                                    <div class="stats">6</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            <div class="images df-aljc">
                                                <img src="/img/economie-energie-table.svg" alt="">
                                                <img src="/img/Travaux.svg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="stats-change-down">-2 cette semaine</div>
                                                <img src="/img/stats-down.svg" alt="">
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td class="me">
                                            <div class="df-aljc">
                                                <div class="add-friend df-aljc ">
                                                    <img src="/img/add-friend.svg hide" alt="">
                                                </div>
                                                <div class="rang">22</div>

                                            </div>

                                        </td>
                                        <td class="me">
                                            <div class="df-aljc">
                                                <div class="info-user df-alc">
                                                    <img src="/img/user-logo-1.webp" alt="">
                                                    <div class="info">
                                                        <div class="username">Username01</div>
                                                        <div class="xp">1.865 XP</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="item df-aljc">
                                                    <img src="/img/item-bulb.svg" alt="">
                                                    <div class="stats">864</div>
                                                </div>
                                                <div class="item df-aljc ">
                                                    <img src="/img/item-badge.svg" alt="">
                                                    <div class="stats">6</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            <div class="images df-aljc">
                                                <img src="/img/economie-energie-table.svg" alt="">
                                                <img src="/img/Travaux.svg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="stats-change-down">-2 cette semaine</div>
                                                <img src="/img/stats-down.svg" alt="">
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="add-friend df-aljc ">
                                                    <img src="/img/add-friend.svg" alt="">
                                                </div>
                                                <div class="add-friendplus df-aljc ">
                                                    <img src="/img/addfriend+.svg" alt="">
                                                </div>
                                                <div class="rang">22</div>

                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="info-user df-alc">
                                                    <img src="/img/user-logo-1.webp" alt="">
                                                    <div class="info">
                                                        <div class="username">Username01</div>
                                                        <div class="xp">1.865 XP</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="item df-aljc">
                                                    <img src="/img/item-bulb.svg" alt="">
                                                    <div class="stats">864</div>
                                                </div>
                                                <div class="item df-aljc ">
                                                    <img src="/img/item-badge.svg" alt="">
                                                    <div class="stats">6</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            <div class="images df-aljc">
                                                <img src="/img/economie-energie-table.svg" alt="">
                                                <img src="/img/Travaux.svg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="stats-change-down">-2 cette semaine</div>
                                                <img src="/img/stats-down.svg" alt="">
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="add-friend df-aljc ">
                                                    <img src="/img/add-friend.svg" alt="">
                                                </div>
                                                <div class="add-friendplus df-aljc ">
                                                    <img src="/img/addfriend+.svg" alt="">
                                                </div>
                                                <div class="rang">22</div>

                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="info-user df-alc">
                                                    <img src="/img/user-logo-1.webp" alt="">
                                                    <div class="info">
                                                        <div class="username">Username01</div>
                                                        <div class="xp">1.865 XP</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="item df-aljc">
                                                    <img src="/img/item-bulb.svg" alt="">
                                                    <div class="stats">864</div>
                                                </div>
                                                <div class="item df-aljc ">
                                                    <img src="/img/item-badge.svg" alt="">
                                                    <div class="stats">6</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            <div class="images df-aljc">
                                                <img src="/img/economie-energie-table.svg" alt="">
                                                <img src="/img/Travaux.svg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="stats-change-down">-2 cette semaine</div>
                                                <img src="/img/stats-down.svg" alt="">
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="add-friend df-aljc ">
                                                    <img src="/img/add-friend.svg" alt="">
                                                </div>
                                                <div class="add-friendplus df-aljc ">
                                                    <img src="/img/addfriend+.svg" alt="">
                                                </div>
                                                <div class="rang">22</div>

                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="info-user df-alc">
                                                    <img src="/img/user-logo-1.webp" alt="">
                                                    <div class="info">
                                                        <div class="username">Username01</div>
                                                        <div class="xp">1.865 XP</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="item df-aljc">
                                                    <img src="/img/item-bulb.svg" alt="">
                                                    <div class="stats">864</div>
                                                </div>
                                                <div class="item df-aljc ">
                                                    <img src="/img/item-badge.svg" alt="">
                                                    <div class="stats">6</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            <div class="images df-aljc">
                                                <img src="/img/economie-energie-table.svg" alt="">
                                                <img src="/img/Travaux.svg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="stats-change-down">-2 cette semaine</div>
                                                <img src="/img/stats-down.svg" alt="">
                                            </div>
                                        </td>

                                    </tr>

                                    <tr>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="add-friend df-aljc ">
                                                    <img src="/img/add-friend.svg" alt="">
                                                </div>
                                                <div class="add-friendplus df-aljc ">
                                                    <img src="/img/addfriend+.svg" alt="">
                                                </div>
                                                <div class="rang">22</div>

                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="info-user df-alc">
                                                    <img src="/img/user-logo-1.webp" alt="">
                                                    <div class="info">
                                                        <div class="username">Username01</div>
                                                        <div class="xp">1.865 XP</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="item df-aljc">
                                                    <img src="/img/item-bulb.svg" alt="">
                                                    <div class="stats">864</div>
                                                </div>
                                                <div class="item df-aljc ">
                                                    <img src="/img/item-badge.svg" alt="">
                                                    <div class="stats">6</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            <div class="images df-aljc">
                                                <img src="/img/economie-energie-table.svg" alt="">
                                                <img src="/img/Travaux.svg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="stats-change-down">-2 cette semaine</div>
                                                <img src="/img/stats-down.svg" alt="">
                                            </div>
                                        </td>

                                    </tr>


                                    <tr>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="add-friend df-aljc ">
                                                    <img src="/img/add-friend.svg" alt="">
                                                </div>
                                                <div class="add-friendplus df-aljc ">
                                                    <img src="/img/addfriend+.svg" alt="">
                                                </div>
                                                <div class="rang">22</div>

                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="info-user df-alc">
                                                    <img src="/img/user-logo-1.webp" alt="">
                                                    <div class="info">
                                                        <div class="username">Username01</div>
                                                        <div class="xp">1.865 XP</div>
                                                    </div>
                                                </div>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="item df-aljc">
                                                    <img src="/img/item-bulb.svg" alt="">
                                                    <div class="stats">864</div>
                                                </div>
                                                <div class="item df-aljc ">
                                                    <img src="/img/item-badge.svg" alt="">
                                                    <div class="stats">6</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>

                                            <div class="images df-aljc">
                                                <img src="/img/economie-energie-table.svg" alt="">
                                                <img src="/img/Travaux.svg" alt="">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="df-aljc">
                                                <div class="stats-change-down">-2 cette semaine</div>
                                                <img src="/img/stats-down.svg" alt="">
                                            </div>
                                        </td>

                                    </tr>


                                </table>
                            </div>

                            <div class="pagination-section">
                                <div class="display-mode">
                                    Afficher :
                                    <div class="select_wrap">
                                        <ul class="default_option">
                                            <li>
                                                <div class="option1">

                                                    <p>5</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <ul class="select_ul">
                                            <li>
                                                <div class="option2">

                                                    <p>1</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="option3">

                                                    <p>2</p>
                                                </div>
                                            </li>

                                            <li>
                                                <div class="option4">

                                                    <p>3</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="option5">

                                                    <p>4</p>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="option6">

                                                    <p>5</p>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    PULSEURS par page
                                </div>
                                <div class="pagination">
                                    <div class="double-arrow arrow">.</div>
                                    <div class="arrow">  </div>
                                    <div class="numbers">
                                                        <div class="number numberactive">1</div>
                                                        <div class="number">2</div>
                                                        <div class="number">3</div>
                                                        <div class="number">4</div>
                                                        <div class="number">5</div>
                                                        <div class="number">6</div>
                                     </div>

                                    <div class="arrow">></div>
                                    <div class="double-arrow arrow">>></div>


                                            

                                    

                                </div>



                            </div>



                        </div>

                    </div>
                </div>


                
            </div>   
        </div>       
                <?php include './new_Design/footer.php'; ?>
                <script src="./new_Design/jquery.min.js" type="text/javascript"></script>
                <script src="./new_Design/jquery.validate.min.js" type="text/javascript"></script>
                <script src="./new_Design/jquery-ui.js" type="text/javascript"></script>
                <script src="./new_Design/swiper-bundle.min.js"></script>
                <script src="./new_Design/script.js"></script>
                <script src="./new_Design/login_v2.0.6.js"></script>



</body>

</html>