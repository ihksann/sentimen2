<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Analisis Sentimen</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- GOOGLE FONTS-->
    <link href='https://fonts.googleapis.com/css2?family=Quicksand&display=swap' rel='stylesheet' type='text/css' />
    <!-- Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <!-- JQUERY-->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</head>

<body class="sb-nav">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Analisis Sentimen</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    </nav>
    <!-- Navbar-->
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <li><br></li>
                        <li>
                            <a class="nav-link" href="index.php"><i class="bi bi-house-door fa-2x"></i> Beranda</a>
                        </li>
                        <li>
                            <a class="nav-link" href="index.php?halaman=scrapping">
                                <div class="sb-nav-link-icon"><i class="far fa-file-lines fa-2x"></i></div>
                                Data Scrapping
                            </a>
                        </li>
                        <li>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns fa-2x"></i></div>
                                Pre-processing
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?halaman=cleandata">Clean Data</a>
                                    <a class="nav-link" href="index.php?halaman=casefolding">Case Folding</a>
                                    <a class="nav-link" href="index.php?halaman=tokenize">Tokenizing</a>
                                    <a class="nav-link" href="index.php?halaman=stopword">Filtering(Stopword)</a>
                                    <a class="nav-link" href="index.php?halaman=normalize">Normalization</a>
                                    <a class="nav-link" href="index.php?halaman=stemming">Stemming</a>

                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth3" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Labeling
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="index.php?halaman=labelling">2 Sentimen</a>
                                            <a class="nav-link" href="index.php?halaman=labelling3">3 Sentimen</a>
                                        </nav>
                                    </div>

                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Pembagian Dataset
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthno1" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                                2 Sentimen
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="pagesCollapseAuthno1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <a class="nav-link" href="index.php?halaman=datalatih">Data latih</a>
                                                    <a class="nav-link" href="index.php?halaman=datauji">Data Uji</a>
                                                </nav>
                                            </div>

                                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuthno3" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                                3 Sentimen
                                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                            </a>
                                            <div class="collapse" id="pagesCollapseAuthno3" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                                <nav class="sb-sidenav-menu-nested nav">
                                                    <a class="nav-link" href="index.php?halaman=datalatih3">Data latih</a>
                                                    <a class="nav-link" href="index.php?halaman=datauji3">Data Uji</a>
                                                </nav>
                                            </div>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                        </li>

                        <li>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages2" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="far fa-file-lines fa-2x"></i></div>
                                Processing
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapsePages2" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?halaman=processing">2 Sentimen</a>
                                    <a class="nav-link" href="index.php?halaman=processing3">3 Sentimen</a>
                                </nav>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open fa-2x"></i></div>
                                Visualisasi
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="index.php?halaman=lexiconbased">Lexicon Based</a>
                                    <a class="nav-link" href="index.php?halaman=naivebayes">Naive Bayes</a>
                                    <a class="nav-link" href="index.php?halaman=supportvectormachine">Support Vector Machine</a>
                                    <a class="nav-link" href="index.php?halaman=longshorttermmemory">Long Short Term Memory</a>
                                    <a class="nav-link" href="index.php?halaman=perbandingan">Perbandingan Klasifikasi Algoritma</a>
                                </nav>
                            </div>
                        </li>
                    </div>
                </div>
                <div class="sb-sidenav-footer py-4">
                    <center>
                        <div class="medium">Masuk sebagai:</div><b>
                            Rohmat Ihksan Nudin</b><br>
                        15119742
                    </center>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <?php
                    if (isset($_GET['halaman'])) {
                        if ($_GET['halaman'] == "test") {
                            include 'test.php';
                        } elseif ($_GET['halaman'] == "cleandata") {
                            include 'cleandata.php';
                        } elseif ($_GET['halaman'] == "scrapping") {
                            include 'scrapping.php';
                        } elseif ($_GET['halaman'] == "casefolding") {
                            include 'casefolding.php';
                        } elseif ($_GET['halaman'] == "tokenize") {
                            include 'tokenize.php';
                        } elseif ($_GET['halaman'] == "stopword") {
                            include 'stopword.php';
                        } elseif ($_GET['halaman'] == "normalize") {
                            include 'normalize.php';
                        } elseif ($_GET['halaman'] == "stemming") {
                            include 'stemming.php';
                        } elseif ($_GET['halaman'] == "labelling") {
                            include 'labelling.php';
                        } elseif ($_GET['halaman'] == "labelling3") {
                            include 'labelling3.php';
                        } elseif ($_GET['halaman'] == "datalatih") {
                            include 'datalatih.php';
                        } elseif ($_GET['halaman'] == "datauji") {
                            include 'datauji.php';
                        } elseif ($_GET['halaman'] == "datalatih3") {
                            include 'datalatih3.php';
                        } elseif ($_GET['halaman'] == "datauji3") {
                            include 'datauji3.php';
                        } elseif ($_GET['halaman'] == "processing") {
                            include 'processing.php';
                        } elseif ($_GET['halaman'] == "processing3") {
                            include 'processing3.php';
                        } elseif ($_GET["halaman"] == "lexiconbased") {
                            include 'lexiconbased.php';
                        } elseif ($_GET["halaman"] == "naivebayes") {
                            include 'naivebayes.php';
                        } elseif ($_GET["halaman"] == "supportvectormachine") {
                            include 'supportvectormachine.php';
                        } elseif ($_GET["halaman"] == "longshorttermmemory") {
                            include 'longshorttermmemory.php';
                        } elseif ($_GET["halaman"] == "perbandingan") {
                            include 'perbandingan.php';
                        }
                    } else {
                        include 'home.php';
                    }
                    ?>
                </div>
        </div>
    </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>

</html>