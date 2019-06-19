<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <title>Formulaire de candidature</title>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="author" lang="fr" content="Solange Harmonie PICARD">
    <meta name="description" content="Un formulaire de dépôt de candidature">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
      <img src="img/maker-ferme.png" class="img-fluid" alt="Responsive image">

      <form style="margin-top: 16px">
      <div class="row">
        <div class="col-sm-4">
          <div class="form-group">
            <label for="Lastname">Nom :</label>
            <input type="text" class="form-control" id="Lastname" placeholder="Renseignez votre nom">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="Name">Prénom :</label>
            <input type="text" class="form-control" id="Name" placeholder="Renseignez votre prénom">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="Phone">Téléphone :</label>
            <input type="tel" class="form-control" id="Phone" placeholder="Renseignez votre n° de téléphone">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-8">
          <div class="form-group">
            <label for="Adresse">Adresse :</label>
            <input type="text" class="form-control" id="Adresse" placeholder="Renseignez votre adresse">
          </div>
        </div>
        <div class="col-sm-4">
          <div class="form-group">
            <label for="PostalCode">Code postal :</label>
            <input type="text" class="form-control" id="PostalCode" placeholder="Renseignez votre code postal">
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <label for="InputEmail1">Email :</label>
            <input type="email" class="form-control" id="InputEmail1" placeholder="Renseignez votre email">
            <small id="emailHelp" class="form-text text-muted">Nous ne communiquerons jamais votre email à un tiers.</small>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <label for="Motivations">Motivations :</label>
            <textarea type="textarea" class="form-control" id="Motivations" rows="8">Exprimez vos motivations</textarea>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">
          <div class="form-group">
            <label for="CV">Soumettre votre CV <small>(Formats autorisés : pdf, png, jpeg)</small> :</label>
            <input type="file" id="CV" name="CV" accept="image/png, image/jpeg, application/pdf">
           </div>
         </div>
       </div>
      <button type="submit" class="btn btn-primary">Candidater</button>
    </form>
    </div>

  </body>
</html>
