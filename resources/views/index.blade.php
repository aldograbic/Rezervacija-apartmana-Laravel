<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rezervacija apartmana">
	  <meta name="keywords" content="rezervacija, apartman">
	  <meta name="author" content="Aldo Grabić">
    <link rel="shortcut icon" type="image/x-icon" href="/img/icon.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Apartmani AG | Rezervirajte sada!</title>
</head>
<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">Apartmani AG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" style="margin-left: 80vw;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Korisnički račun</a>
              <ul class="dropdown-menu" style="margin-left: 80vw;">
                @if (Auth::check())
                <li><span class="dropdown-item-text">{{ Auth::user()->first_name }} {{ Auth::user()->last_name }}</span></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}">Odjava</a></li>
                @else
                <li><a class="dropdown-item" href="{{ route('registration') }}">Registracija</a></li>
                <li><a class="dropdown-item" href="{{ route('login') }}">Prijava</a></li>
                @endif
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <main>
    @if (session()->has('message'))
    <div class="alert alert-success">
      {{ session()->get('message') }}
    </div>
    @endif
    <form action="{{ route('apartments-page') }}" method="get">
      <section class="position-absolute top-50 start-50 translate-middle bg-body-tertiary rounded-pill shadow-lg" style="width: 65vw; height: 15vh">
        <div class="input-group mb-3 position-absolute top-50 start-50 translate-middle" style="width: 60vw;">
          <input type="text" class="form-control" name="from_date" placeholder="Datum prijave" onfocus="(this.type='date')" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" min="<?php echo date("Y-m-d"); ?>" required>
          <input type="text" class="form-control" name="to_date" placeholder="Datum odjave" onfocus="(this.type='date')" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" min="<?php echo date("Y-m-d"); ?>" required>
          <input type="number" class="form-control" name="number_of_adults" min="1" placeholder="Broj odraslih" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
          <input type="number" class="form-control" name="number_of_kids" min="0" placeholder="Broj djece" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
          <button type="submit" class="btn btn-outline-primary">Traži</button>
        </div>
      </section>
    </form>    
  </main>

  <footer>
    <div class="fixed-bottom" style="margin-left: 0.5vw;"><p>Copyright &copy; 2022 Apartmani AG</p></div>  
  </footer>

</body>
</html>