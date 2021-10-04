<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="font_awesome/css/all.css">
</head>

<body>
    <div class="container">
        <div class="left">
            <header class="header_menu">
                <div class="header_brand">
                    <div class="bg_icon">
                        <i class="fas fa-euro-sign fa-1x"></i>
                    </div>
                    <h1>H Conception</h1>
                </div>
                <div class="header_button">
                    <a href="">
                        <i class="fas fa-align-left fa-1x"></i>
                    </a>
                </div>
            </header>
            <nav class="left_menu">
                <ul>
                    <li>
                        <a href="index.php">
                            <span class="icon">
                                <i class="fas fa-home fa-1x"></i>
                            </span>
                            <span class="li_menu">Tableau de bord</span>
                        </a>
                    </li>
                    <li>
                        <a href="discussion.php">
                            <span class="icon">
                                <i class="far fa-comments fa-1x"></i>
                            </span>
                            <span class="li_menu">Discussion</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon">
                                <i class="far fa-calendar fa-1x"></i>
                            </span>
                            <span class="li_menu">Planification</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon">
                                <i class="fas fa-user-friends fa-1x"></i>
                            </span>
                            <span class="li_menu">Employés</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon">
                                <i class="fas fa-donate fa-1x"></i>
                            </span>
                            <span class="li_menu">Dépenses</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="icon">
                                <i class="fas fa-file-invoice-dollar fa-1x"></i>
                            </span>
                            <span class="li_menu">Comptabilité</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="right">
            <div class="nav">
                <div class="left_nav">
                    <input type="search" placeholder="  recherche..." id="site-search" name="q"
                        aria-label="Search through site content">
                    <!-- <i class="fas fa-search fa-1x"></i> -->
                </div>

                <div class="right_nav">
                    <div class="notification_nav">
                        <ul>
                            <li><a href="">
                                    <i class="far fa-comment fa-1x"></i>
                                </a>
                            </li>
                            <li><a href="">
                                    <i class="far fa-clock fa-1x"></i>
                                </a>
                            </li>
                        </ul>


                    </div>
                    <div class="user_nav">
                        <ul>
                            <li>
                                <img src="img/profil_pic.jpg" alt="">Aurélien Heude
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <?php include "page.php"; ?>
        </div>
    </div>
</body>

</html>