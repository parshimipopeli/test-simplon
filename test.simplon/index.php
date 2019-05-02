<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<form method="post" action="/action_page.php" class="was-validated">
        <div class="form-group">
            <label for="nom">Nom:</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez Votre Nom" required>
        </div>
        <label for="nom">Prénom:</label>
            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrez Votre prenom" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Entrez Votre mail" required>
        </div>
        <div class="form-group">
            <label for="text">telephone:</label>
            <input type="text" class="form-control" id="tel" name="telephone" placeholder="Entrez Votre telephone" required>
        </div>
        <div class="form-group form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="checkbox"> Remember me
            </label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>