<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD LARAVEL 10</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>CRUD LARAVEL 10</h1>
    <a href="/ajouter" class="btn btn-primary">Ajouter</a>

    @if(session('status'))
        <div class="alert alert-success">
          {{session('status')}}
        </div>
    @endif

    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Classe</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach($etudiants as $etudiant)
          <tr>
            <th scope="row">{{ $etudiant->id}}</th>
            <td>{{ $etudiant->nom}}</td>
            <td>{{ $etudiant->prenom}}</td>
            <td>{{ $etudiant->classe}}</td>
            <td>
              <a href="/modifier-etudiant/{{ $etudiant->id}}" class="btn btn-info">Modifier</a>
              <a href="" class="btn btn-danger">Suprimer</a>
            </td>
          </tr>
     @endforeach   
    
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>