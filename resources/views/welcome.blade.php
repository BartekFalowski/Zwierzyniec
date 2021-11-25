<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Satino</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a href="/"><img href="/"src="assets/img/logo.png" width="200" height="50"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#about">Informacje</a></li>
                <li class="nav-item"><a class="nav-link" href="#projects">Nasze Usługi</a></li>
                <li class="nav-item"><a class="nav-link" href="#signup">Kontakt</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Logowanie</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead">
    <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <h1 class="mx-auto my-0 text-uppercase">Mobilna karta weterynaryjna</h1>
                <h2 class="text-white-50 mx-auto mt-2 mb-5">Nie jem = jestem chory! <p></p> Zabierz mnie do lekarza</h2>
                <a class="btn btn-primary" href="#about">dowiedz sie cos wiecej</a>
            </div>
        </div>
    </div>
</header>


<!-- O Nas-->
<section class="about-section text-center" id="about">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-lg-8">
                <h1 class="text-white mb-4">Informacje</h1>
                <p class="text-white-50">
                    NASZ ZESPÓŁ
                    ...to obecnie dziewięć osób, cztery osoby personelu pomocniczego oraz pięciu lekarzy weterynarii, w tym jeden z tytułem doktorskim i dwóch z tytułami specjalistów, to nasz obecny skład.
                </p>
                <p class="text-white-50">
                    Kładziemy ogromny nacisk na swoje umiejętności zawodowe i nieustanne pogłębianie wiedzy. Standardem w naszej pracy jest  ciągłe podnoszenie naszych umiejętności przez naszych lekarzy i personel pomocniczy poprzez  uczestnictwo w kursach specjalistcznych, sympozjach i kongresach naukowych.
                </p>
                <p class="text-white-50">
                    W razie potrzeby współpracujemy z wysokiej klasy specjalistycznymi ośrodkami, które konsultują kierowanych przez nas pacjentów. Chcemy mieć zawsze pewność, że dołożyliśmy wszelkich starań by pomóc naszym czworonożnym podopiecznym.
                </p>

            </div>
        </div>
    </div>
</section>



<!-- Projects-->
<section class="projects-section bg-light" id="projects">
    <div class="container px-4 px-lg-5">
        <!-- Featured Project Row-->
        <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
            <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="/assets/img/zdjecie1.jpg" alt="..." /></div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h2>Nasze Usługi</h2>
                    <p class="text-black-50 mb-0">W NASZEJ LECZNICY ŚWIADCZYMY USŁUGI W ZAKRESIE: </p>
                </div>
            </div>
        </div>
        <!-- Project One Row-->
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/zdjecie2.jpg" alt="..." /></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">PEŁNA PROFILAKTYKA</h4>
                            <p class="mb-0 text-white-50"> w tym szczepienia ochronne, odrobaczanie,zwalczanie pasożytów zewnętrznych</p>
                            <hr class="d-none d-lg-block mb-0 ms-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Two Row-->
        <div class="row gx-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/zdjecie3.jpg" alt="..." /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">LECZENIE CHORÓB</h4>
                            <p class="mb-0 text-white-50"> małych zwierząt w pełnym zakresie</p>
                            <hr class="d-none d-lg-block mb-0 me-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/Zdjecie6.jpg" alt="..." /></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">PROFILAKTYKA, DIAGNOSTYKA, LECZENIE GRYZONI I KRÓLIKÓW</h4>
                            <p class="mb-0 text-white-50">sterylizacja,kastracja,korekcja uzębienia,zabiegi chirurgiczne</p>
                            <hr class="d-none d-lg-block mb-0 ms-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project Two Row-->
        <div class="row gx-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/zdjecie5.jpg" alt="..." /></div>
            <div class="col-lg-6 order-lg-first">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-right">
                            <h4 class="text-white">OKULISTYKA WETERYNARYJNA</h4>
                            <p class="mb-0 text-white-50">badanie okulistyczne z tonometrią, oftalmoskopią bezpośrednią i pośrednią oraz biomikroskopią</p>
                            <hr class="d-none d-lg-block mb-0 me-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/zdjecie7.jpg" alt="..." /></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">STOMATOLOGIA</h4>
                            <p class="mb-0 text-white-50">cyfrowe RTG stomatologiczne, dla psów, kotów, gryzoni.</p>
                            <hr class="d-none d-lg-block mb-0 ms-0" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Signup-->
<section class="signup-section" id="signup">

</section>



<!-- Kontakt-->
<section class="contact-section bg-black">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5">
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Adres</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">Ul. Nawojowska 3 33-330 Nowy Sącz</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-envelope text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Email</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">zwierzyniec@gmail.pl</div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3 mb-md-0">
                <div class="card py-4 h-100">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt text-primary mb-2"></i>
                        <h4 class="text-uppercase m-0">Telefon kontaktowy</h4>
                        <hr class="my-4 mx-auto" />
                        <div class="small text-black-50">Infolinia</div>
                        <div class="small text-black-50">704-400-400</div>
                        <div class="small text-black-50">Infolinia dla abonentów sieci zagranicznych</div>
                        <div class="small text-black-50"> +48 22 393 62 62 </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="social d-flex justify-content-center">
            <a class="mx-2" href="https://twitter.com/PKP_SA?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
            <a class="mx-2" href="https://www.facebook.com/PKP.Intercity"><i class="fab fa-facebook-f"></i></a>
        </div>
    </div>
</section>
<!-- Footer-->
<footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; satino S.A 2021</div></footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>

