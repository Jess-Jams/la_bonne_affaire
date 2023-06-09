<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/registration.css">
</head>

<body>
  <?php include "../components/navbarre.php"; ?>
  <div class="container">
    <div class="row">
      <div class="col pb-xxl-5 d-flex justify-content-center">
        <h1>Hello, world!</h1>
      </div>
    </div>
    <div class="row">
      <form class="registerCard row g-3 needs-validation d-flex flex-wrap shadow p-3 border-secondary rounded-4 m-3 pt-5 pb-5" novalidate>
        <div class="col-md-6">
          <label for="validationCustom01" class="form-label">Prénom</label>
          <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>
        <div class="col-md-6">
          <label for="validationCustom02" class="form-label">Nom</label>
          <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
          <div class="valid-feedback">
            Looks good!
          </div>
        </div>

        <div class="col-md-7">
          <label for="validationCustomUsername" class="form-label">Email</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">&#64</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-5">
          <label for="validationCustomUsername" class="form-label">Nom d'utilisateur</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">&#64</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Mot de passe</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">&#128274</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Confirmation du mot de passe</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">&#128274</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <label for="validationCustomUsername" class="form-label">Téléphone</label>
          <div class="input-group has-validation">
            <span class="input-group-text" id="inputGroupPrepend">&#9990</span>
            <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
            <div class="invalid-feedback">
              Please choose a username.
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <label for="validationCustom03" class="form-label">Adresse</label>
          <input type="text" class="form-control" id="validationCustom03" required>
          <div class="invalid-feedback">
            Please provide a valid city.
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom04" class="form-label">Ville</label>
          <select class="form-select" id="validationCustom04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
          </select>
          <div class="invalid-feedback">
            Please select a valid state.
          </div>
        </div>
        <div class="col-md-3">
          <label for="validationCustom05" class="form-label">Code postale</label>
          <input type="text" class="form-control" id="validationCustom05" required>
          <div class="invalid-feedback">
            Please provide a valid zip.
          </div>
        </div>
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label" for="invalidCheck">
              Accepter les termes et conditions d'utilisation.
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <div class="col-12">
          <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
      </form>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="../js/RegistrationForm.js"></script>
</body>

</html>