<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/adminlte/dist/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://kit.fontawesome.com/14273d579a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

</head>
</head>
<body class="bg-light">
    <header>
        <div class="container">
                <div class="navbar navbar-expand-md  fixed-top">
            <div class="container">
        <a href="{{ route('front.index') }}" class="navbar-brand"><span class=""><img style="width: 320px; height: 70px;" src="/img/logo.png" alt=""></span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class=" collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a style="color: #006828" class="nav-link text-uppercase fw-bold " href="">tourisme</a>
        </li>
        <li class="nav-item">
            <a style="color: #006828" class="nav-link text-uppercase fw-bold ms-3" href="">culture et art</a>
        </li>
        <li class="nav-item">
            <a style="color: #006828" class="nav-link text-uppercase fw-bold ms-3" href="">patrimoine culturel</a>
        </li>
        <li class="nav-item">
            <a style="color: #006828" class="nav-link text-uppercase fw-bold ms-3" href="">nos partenaires</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('actualites.search') }}"><span style="color: #006828" class="fa fa-search offset-1 fs-2"></span></a>
        </li>
    </ul>
</div>
    </div>
        </div>
        </div><br>

    <div  class="container-fluid navbar-brand position-fixed" style="background-color:#006828 ; position:fixed ; left:0 ; width: 100%; z-index:1000; margin-top: 60px;">
        <div class="container mt-2">
            <div class="row g-4 p-1">
            <div class="col gx-5  text-uppercase"><span><a class="text-decoration-none text-light" href=""><h5>le ministre</h5></a></span></div>
            <div class="col gx-5  text-uppercase"><span><a class="text-decoration-none text-light" href=""><h5>projets et reformes</h5></a></span></div>
            <div class="col gx-5  text-uppercase"><span><a class="text-decoration-none text-light" href=""><h5>reglementations</h5></a></span></div>
            <div class="col gx-5  text-uppercase"><span><a class="text-decoration-none text-light" href="{{ route('actualites.index') }}"><h5>actualites</h5></a></span></div>
            <div class="col gx-5  text-uppercase"><span><a class="text-decoration-none text-light" href=""><h5>publications et annonces</h5></a></span></div>
            <div class="col gx-5  text-uppercase"><span><a class="text-decoration-none text-light" href=""><h5>contacts</h5></a></span></div>
            </div>
        </div>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div class="container-fluid" id="fluid">
  <div class="container mt-5 " id="footer"><br>
  <div class="row">
    <div class="col-6 col-sm-4 col-md-4 col-lg-2 col-xl-2 col-xxl-2">
      <h5 class="mb-3" id="titre">Le Ministère</h5>
      <p class="cc" id="titres">le ministre <br><br> services et personnes <br> directement rattachés <br> au ministre <br><br> le cabinet du ministre <br><br> le secrétariat géneral <br> du ministre <br><br> les directions centrales <br><br> les directions techniques <br><br> les structures sous <br> tutelle</p>
    </div>

    <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-3 mx-5">
      <h5 class=" mb-3" id="titre">les projects et réformes</h5>
      <p class="cc" id="titres">focus sur les 7 projects <br> phares du pac 2016-2021 <br><br> autres projects <br><br> réformes</p>
    </div>


    <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-3 col-xxl-3 ms-5">
      <h5 class="mb-3" id="titre">publications</h5>
      <p class="cc" id="titres">politiques sectorielles <br> et documents de stratégie <br><br> annuaires statistiques <br><br> discours <br><br> communiqués et avis <br><br> marchés publics <br><br> galerie(photos/vidéos/audios) <br><br> espace presse</p>
    </div>


    <div class="col-6 col-sm-4 col-md-4 col-lg-1 col-xl-1 col-xxl-1">
      <h5 class="mb-3" id="titre">évènements</h5>
      <p class="cc" id="titres">évènements passes <br><br> évènements a venir</p>
    </div>
  </div>

  <div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 text-center">
      <i><img  class="text-light" style="width: 280px; height: 100px;" src="/img/logo.png" alt=""></i><br>
      <h5 class="text-light">© Tous droit réservés @ 2020</h5>
    </div>
  </div>

</div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4  bg-success p-2" ></div>
    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4  bg-warning p-2"></div>
    <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4  bg-danger p-2"></div>
  </div>
</div>
    </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</body>
</html>
