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
    <title>Apartmani AG | Rezervacija</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <header>
        <nav class="navbar bg-body-tertiary" >
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Apartmani AG</a>
            </div>
        </nav>
    </header>

    <main>
        <section class="container text-center" style="width: 20vw; margin-top: 5vh;">
            <h1 style="padding-bottom: 2vh;">Rezervirajte sada!</h1>
            <form action="<?php echo e(route('reservation-store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
                <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                <input type="hidden" name="apartment_id" value="<?php echo e($apartment->id); ?>">
                <div class="mb-3">
                    <label for="from_date" class="form-label">Datum od:</label>
                    <input type="date" class="form-control" name="from_date" id="from_date" min="<?php echo date("Y-m-d"); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="to_date" class="form-label">Datum do:</label>
                    <input type="date" class="form-control" name="to_date" id="to_date" min="<?php echo date("Y-m-d"); ?>" required>
                </div>

                <div class="mb-3">
                    <label for="number_of_adults" class="form-label">Broj odraslih:</label>
                    <input type="number" class="form-control" name="number_of_adults" min=1 id="number_of_adults" required>
                </div>

                <div class="mb-3">
                    <label for="number_of_kids" class="form-label">Broj djece:</label>
                    <input type="number" class="form-control" name="number_of_kids" min=0 id="number_of_kids" required>
                </div>

                <div class="mb-3">
                    <label for="full_price" class="form-label">Puna cijena:</label>
                    <input type="number" class="form-control" name="full_price" id="full_price" value="<?php echo e($apartment->price); ?>" readonly required>
                </div>

                <div style="padding-top: 5vh;">
                    <h2 style="padding-bottom: 2vh;">Način plaćanja</h2>
                    <div class="form-check">
                        <label class="form-check-label" for="payment">Pri dolasku</label>
                        <input class="form-check-input" type="radio" name="payment" id="payment_on_spot" style="transform: translateX(5vw);">
                    </div>
    
                    <div class="form-check" style="padding-bottom: 2vh">
                        <label class="form-check-label" for="payment">Karticom</label>
                        <input class="form-check-input" type="radio" name="payment" id="payment_card" style="transform: translateX(5vw);">
                    </div>
                    <button type="submit" style="margin-bottom: 3vh;" class="btn btn-outline-primary">Rezerviraj</button>
                </div>
            </form>
        </section>
    </main>

    <footer>
        <div class="fixed-bottom" style="margin-left: 0.5vw;"><p>Copyright &copy; 2022 Apartmani AG</p></div>
    </footer>

</body>
</html><?php /**PATH C:\xampp\htdocs\laravel-apartmani\resources\views/reservation.blade.php ENDPATH**/ ?>