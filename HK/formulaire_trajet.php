
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link type="text/css" rel="stylesheet" href="css/main.css"/>


</head>


<div class="container">
  <div class="row">
    <div class="col-md-6">
      <form method="POST" action="recep.php">
        <div class="up">

          <h3>Je n'aime pas faire les voyages à vide donc...</h3>
          <a href="#demo" class="btn btn-primary" data-toggle="collapse">Je propose un trajet...</a>
        </div>
        <div id="demo" class="collapse">
          <div class="trajet">
            <input type="radio" name="regulier_ponctuel" value="0" id="regulier_ponctuel" checked="checked" />
            <label for="ponctuel">ponctuel</label>
            <input type="radio" name="regulier_ponctuel" value="1" id="regulier_ponctuel" />
            <label for="regulier">régulier</label>
          </div>
          <br>
          <label for="depart">qui part de :</label>
          <input type="lieux" class="form-control" name="adresse_depart" id="adresse_depart" placeholder="Départ">
          <div class="form-group">
            <label for="arrivée">pour arriver à :</label>
            <input type="lieux" class="form-control" name="adresse_arrivee" id="adresse_arrivee" placeholder="Arrivée">
          </div>
          <div class="inl">
            <label for="date">Ce trajet aura lieu le :</label>
            <input type="date" class="form-control" name="date" id="date" placeholder="entrer la date">
            <label for="heure">à :</label>
            <input type="time" class="form-control" name="heure" id="heure" placeholder="entrer l'heure">
          </div>
          <div class="description">
            <h3>Comment ça va se passer :</h3>


            <textarea name="description" rows="8" cols="45" id="description" placeholder="Mes besoins (conducteur secondaire, manutentionnaire, autres...) et détours possibles (en km ou en temps)"></textarea>

          </div>
          <div class="description">
            <h3>Mon véhicule est :</h3>

            <p></p>
            <textarea name="vehicule" rows="8" cols="45" id="vehicule" placeholder="Espace de stockage libre, type (VL, PL, SPL), autres spécifications techniques"></textarea>

          </div>
          <div class="val">
            <input type="submit" value="Valider" id="Envoyer">
          </div>
        </div>
      </form>
    </div>
    <div class="col-md-6">
      <form method="POST" action="recep.php">
        <div class="up">
          <h3>Je n'ai pas de véhicule disponible donc...</h3>
          <a href="#dema" class="btn btn-primary" data-toggle="collapse">J'ai besoin d'un trajet...</a>
        </div>
        <div id="dema" class="collapse">
          <div class="trajet">
            <input type="radio" name="regulier_ponctuel" value="0" id="regulier_ponctuel" checked="checked" />
            <label for="ponctuel">ponctuel</label>
            <input type="radio" name="regulier_ponctuel" value="1" id="regulier_ponctuel" />
            <label for="regulier">régulier</label>
          </div>
          <br>
          <label for="depart">qui part de :</label>
          <input type="lieux" class="form-control" name="adresse_depart" id="adresse_depart" placeholder="Départ">
          <div class="form-group">
            <label for="arrivée">pour arriver à :</label>
            <input type="lieux" class="form-control" name="adresse_arrivee" id="adresse_arrivee" placeholder="Arrivée">
          </div>
          <div class="inl">
            <label for="date">Ce trajet aurait lieu le :</label>
            <input type="date" class="form-control" name="date" id="date" placeholder="entrer la date">
            <label for="heure">à :</label>
            <input type="time" class="form-control" id="heure" placeholder="entrer l'heure">
          </div>

          <div class="description">
            <h3>Comment j'aimerais que ça se passe :</h3>

            <p></p>
            <textarea name="description" rows="8" cols="45" placeholder="Description général : Qui je suis, mes besoins, mes motivations"></textarea>

          </div>

          <div class="description">
            <h3>J'ai besoin d'un vehicule :</h3>

            <p></p>
            <textarea name="vehicule" rows="8" cols="45" id="vehicule" placeholder="Type (VL, PL, SPL), espace de stockage libre, autres spécifications techniques"></textarea>

          </div>
          <div class="val">
            <input type="submit" value="Valider" id="Envoyer">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
