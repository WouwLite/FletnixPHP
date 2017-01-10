<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Fletnix</title>
    <meta name="description" content="Fletnix Video-on-Demand">
    <meta name="author" content="Jordy & Joel BV">

    <link type="text/css" rel="stylesheet" href="../../../OLD-css/main.css">
    <link type="text/css" rel="stylesheet" href="../../../OLD-css/nav.css">
    <link type="text/css" rel="stylesheet" href="../../../OLD-css/footer.css">
</head>

<body>
<nav>
    <!-- Change the deep-links for each nested page-block -->
    <ul>
        <li class="logo"><h1>Fletnix</h1></li>
        <li><a href="../../../OLDdashboard/index.html"><strong>Dashboard</strong></a></li>
        <li><a href="paywall.html">Abonnementen</a></li>
        <li><a href="../../../OLDdashboard/films.html">Films</a></li>
        <li><a href="../../../OLDdashboard/series.html">Series</a></li>
    </ul>
</nav>

<!-- The vertical nav contains search bar, populair films, latest releases, etc.  -->
<div class="container">
    <div class="nav vertnav">
        <div class="search">
            <form>
                <input type="text" id="search" name="Search" placeholder="Zoeken naar..."/>
                <input type="submit" value="Gaan"/>
            </form>
        </div>
        <ul>
            <li><a href="just-released.php">Net uitgebracht</a></li>
            <li><a href="../../../OLDindex.html">Populair</a></li>
            <li><a href="expected.php">Verwacht</a></li>
            <li class="active"><a href="favorites.php">Favorieten</a></li>
            <li><a href="staff-picks.php">Staff Picks</a></li>
        </ul>
    </div>
    <div class="main margin15">
        <!-- Specific HTML pages -->
        <!-- Insert data below this line -->
        <h1>Favoriten</h1><br>
        <ul class="media">
            <li><a href="../media/movies/ted.php"><img src="../../../storage/media/movies/fullhd/ted/Ted.jpg" alt="Ted" class="overlay placeholder"></a></li>
            <li><a href="../media/movies/ted.php"><img src="../../../storage/media/movies/fullhd/hobbit/Hobbit3.jpg" alt="Hobbit 3"
                                                       class="overlay placeholder"></a></li>
            <li><a href="../media/movies/ted.php"><img src="../../../storage/media/movies/fullhd/thematrix/TheMatrix.jpg" alt="The Matrix"
                                                       class="overlay placeholder"></a></li>
            <li><a href="../media/movies/ted.php"><img src="../../../storage/media/movies/fullhd/thelordoftherings/TheLordoftheRingsTheTwoTowers.jpg"
                                                       alt="The Lord of The Rings - The Two Towers" class="overlay placeholder"></a></li>
            <li><a href="../media/movies/ted.php"><img src="../../../storage/media/movies/fullhd/independanceday/IndependenceDay.jpg" alt="Independance Day"
                                                       class="overlay placeholder"></a></li>
            <li><a href="../media/movies/ted.php"><img src="../../../storage/media/movies/fullhd/thelordoftherings/TheLordoftheRingsTheFellowshipoftheRing.jpg"
                                                       alt="The Lord of The Rings - The Fellowship of The Ring" class="overlay placeholder"></a></li>
        </ul>
        <ul class="media">
            <li><a href="../media/movies/ted.php"><img src="../../../storage/media/movies/fullhd/hobbit/Hobbit2.jpg" alt="Hobbit 2"
                                                       class="overlay placeholder"></a></li>
            <li><a href="../media/movies/ted.php"><img src="../../../storage/media/movies/fullhd/ted/Ted2.jpg" alt="Ted 2" class="overlay placeholder"></a></li>
            <li><a href="../media/movies/ted.php"><img src="../../../storage/media/movies/fullhd/thelordoftherings/TheLordoftheRingsTheReturnoftheKing.jpg"
                                                       alt="The Lord of The Rings - The Return of The King" class="overlay placeholder"></a></li>
            <li><a href="../media/movies/nichtrijder.html"><img src="../../../storage/media/movies/sd/nichtrijder/Nicht_Rijder.jpg" alt="Nicht Rijder"
                                                                class="overlay placeholder"></a></li>
            <li><a href="../media/movies/ted.php"><img src="../../../storage/media/movies/fullhd/thematrix/TheMatrixReloaded.jpg" alt="The Matrix Reloaded"
                                                       class="overlay placeholder"></a></li>
            <li><a href="../media/movies/ted.php"><img src="../../../storage/media/movies/fullhd/hobbit/Hobbit.jpg" alt="Hobbit" class="overlay placeholder"></a>
            </li>
        </ul>
        <!-- Insert data above this line  images/movies/ted/Ted.jpg -->
    </div>
</div>
<footer>
    <div class="container">
        <div class="footer">
            <!-- Items that are commented are a feature when the Fletnix webapp is about to be released. Certain legal items are required before official release. -->
            <div class="footer-service margin15">
                <ul>
                    <li><h2>Klantenservice</h2></li>
                    <li><a href="../../../OLDdashboard/service/faq.html">Veelgestelde vragen</a></li>
                    <!--<li><a href="../service/payments.html">Betaling</a></li>-->
                    <!--<li><a href="../company/legal/privacy.html">Privacy</a></li>-->
                    <!--<li><a href="../service/speedtest.html">Speedtest</a></li>-->
                    <!--<li><a href="../company/legal/terms.html">Algemene Voorwaarden</a></li>-->
                </ul>
            </div>
            <div class="footer-account margin15">
                <ul>
                    <li><h2>Account</h2></li>
                    <li><a href="../../../OLDdashboard/index.html">Dashboard</a></li>
                    <li><a href="../../../OLDdashboard/create-account.html">Account aanmaken</a></li>
                    <!--<li><a href="financial.html">Financieel Dashboard</a></li>-->
                    <!--<li><a href="remove-account.html">Account verwijderen</a></li>-->
                </ul>
            </div>
            <div class="footer-business margin15">
                <ul>
                    <li><h2>Bedrijf</h2></li>
                    <li><a href="../company/about.html">Over ons</a></li>
                    <!--<li><a href="../company/blog.html">Blog</a></li>-->
                    <li><a href="../company/contact.html">Contact</a></li>
                    <!--<li><a href="../company/jobs.html">Werken bij Fletnix</a></li>-->
                </ul>
            </div>
        </div>
    </div>
    <div class="container copyright">
        <p>© 2016 Fletnix | Alle rechten voorbehouden</p>
    </div>
</footer>
</body>
</html>