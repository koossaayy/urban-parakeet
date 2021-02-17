<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h2>Afficher tous les hotels</h2>
    {{-- Afficher tous les hotels dans un tableau --}}
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Etoile</th>
            <th scope="col">Local</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($hotels as $hotel)
          <tr>
            <th scope="row">{{ $hotel->id }}</th>
            <td>{{ $hotel->nom }}</td>
            <td>{{ $hotel->etoile }}</td>
            <td>{{ $hotel->localisation }}</td>
            <td>
                {{-- <a href="{{ route('hotels.supprimer', $hotel->id) }}">Supprimer</a> --}}
                <form action="{{ route('hotels.supprimer', $hotel->id) }}" method="POST">
                    @csrf
                    <button type="submit">Supprimer</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      </body>
</html>