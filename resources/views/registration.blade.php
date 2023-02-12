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
    <title>Apartmani AG | Registracija</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <header>
        <nav class="navbar bg-body-tertiary" >
            <div class="container-fluid">
              <a class="navbar-brand" href="{{ url('/') }}">Apartmani AG</a>
            </div>
        </nav>
    </header>

    <main>
    @if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @elseif(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif
        <section class="container text-center" style="width: 20vw;">
            <h1>Registracija</h1>
            <form action="{{ route('register') }}" method="post">
            @csrf
                <div class="mb-3">
                    <label for="first_name" class="form-label">Ime: *</label>
                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Vaše ime.." required>
                </div>

                <div class="mb-3">
                    <label for="last_name" class="form-label">Prezime: *</label>
                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Vaše prezime.." required>
                </div>
    
                <div class="mb-3">
                    <label for="birth_date" class="form-label">Datum rođenja:</label>
                    <input type="date" class="form-control" name="birth_date" id="birth_date" placeholder="Vaš datum rođenja..">
                </div>

                <div class="mb-3">
                    <label for="vat_number" class="form-label">OIB:</label>
                    <input type="number" class="form-control" name="vat_number" id="vat_number" placeholder="Vaš OIB..">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail: *</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Vaš e-mail.." required>
                </div>
                
                <div class="mb-3">
                    <label for="password" class="form-label">Lozinka: *</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Vaša lozinka.." required>
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Potvrdite lozinku: *</label>
                    <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Potvrdite lozinku.." required>
                </div>

                <button type="submit" class="btn btn-outline-primary">Izradi korisnički račun</button>
            </form>
        </section>
        
    </main>

    <footer>
        <div class="fixed-bottom" style="margin-left: 0.5vw;"><p>Copyright &copy; 2022 Apartmani AG</p></div>
    </footer>
</body>
</html>