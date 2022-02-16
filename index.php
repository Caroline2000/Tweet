<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
    <title>home</title>
</head>
<body>
  <div class="row">
    <div class="col-6">
        <img src="images/logo.png" class="img-fluid" alt="...">
    </div>
    <div class="col-6 p-2">
      <img src="images/logomini.png" class="img-fluid" alt="...">
      <h1> Ça se passe<br> maintenant</h1>
      <h2>Rejoignez Twitter dès aujourd'hui.</h2>
      <form>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Nous ne partagerons jamais votre e-mail avec quelqu'un d'autre.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Se souvenir de moi</label>
        </div>
        <button type="submit" class="btn btn-primary">Se connecter</button>
    </form>
    <h3>Ou</h3>
    <button type="button" class="btn btn-primary-lg border border-danger rounded-pill">S'incrire</button>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>