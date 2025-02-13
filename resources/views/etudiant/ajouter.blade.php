<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>AJOUTER ETUDIANT</h1>
    <a href="/ajouter" class="btn btn-primary">Ajouter</a>

    <hr>
    @if(session('status'))
        <div class="alert alert-success">
          {{session('status')}}
        </div>
    @endif

    <ul>
        @foreach($errors->all() as $error)
          <i class="alert alert-danger">{{ $error }}</i>
        @endforeach
    </ul>
    <form action="/ajouter/traitement" method="POST">
        @csrf

        <div class="mb-3">
          <label for="nom" class="form-label">NOM</label>
          <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nom" >
          
        </div>
        <div class="mb-3">
          <label for="prenom" class="form-label">PRENOM</label>
          <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="prenom">
          
        </div>
        <div class="mb-3">
          <label for="classe" class="form-label">CLASSE</label>
          <input type="text" class="form-control" id="classe" name="classe" aria-describedby="classe">
          
        </div>
        
        <button type="submit" class="btn btn-primary">ajouter</button>
        <a href="/etudiant" class="btn btn-danger">Accueil</a>
</form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>