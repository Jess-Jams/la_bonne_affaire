<!DOCTYPE html>
<html lang="en,fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>La Bonne Affaire</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/index.css" />
  <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon" />
</head>

<body>
  <div class="container-fluid">
    <!-- title -->
    <div class="row containerAnimation">
      <h1>
        la <span>b</span>onne
        <br />
        <span>a</span>ffaire
      </h1>
    </div>

    <!-- formLogin -->
    <div class="row">
      <div class="d-flex flex-row-reverse align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

        <form action="RegistrationLog.php" method="post" style="width: 38rem"
          class="needs-check d-flex flex-column shadow p-3 border-secondary rounded-4 m-3 pt-5 pb-5">
          
          <h2 class="fw-normal mb-3 pb-3 d-flex justify-content-center" style="letter-spacing: 1px">
            Connexion
          </h2>

          <div class="form-outline mb-4">
            <label class="form-label" for="logEmail">Identifiant</label>
            <input type="email" name="email" id="logEmail" class="form-control form-control-lg" required />
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="logPassword">Mot de passe</label>
            <input type="password" name="password" id="logPassword" class="form-control form-control-lg" required />
          </div>

          <div class="pt-1 mb-4">
            <input class="btn btn-warning btn-lg btn-block w-100 shadow" type="submit" value="Se connecter">
          </div>

          <p class="small mb-5 pb-lg-2">
            <a class="text-muted" href="#!">Mot de passe oublié?</a>
          </p>
          <p>
            Vous n'avez pas de compte ?
            <a href="./pages/RegistrationForm.php" class="link-info">Inscrivez-vous ici</a>
          </p>
        </form>
      </div>
    </div>
  </div>
  <div class="mousemove"></div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
  <script src="./js/index.js"></script>
</body>

</html>