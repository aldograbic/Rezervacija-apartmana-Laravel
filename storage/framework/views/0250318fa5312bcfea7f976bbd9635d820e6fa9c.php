<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rezervacija apartmana">
	<meta name="keywords" content="rezervacija, apartman">
	<meta name="author" content="Aldo Grabić">
    <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Apartmani AG | Rezervirajte sada!</title>
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
        <section class="container text-center" style="width: 20vw; margin-top: 20vh;">
        <?php if(session('error')): ?>
        <div class="alert alert-danger">
            <?php echo e(session('error')); ?>

        </div>
        <?php endif; ?>
            <h1>Prijava</h1>
            <form action="<?php echo e(route('login')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail adresa:</label>
                    <input type="email" class="form-control" name="email" id="email" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Lozinka:</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
            
                <button type="submit" class="btn btn-outline-primary">Prijavi se</button>
            </form>
            <div style="padding-top: 5vh;">
                <p>Nemate korisnički račun?</p>
                <p><a href="<?php echo e(route('registration')); ?>">Registrirajte se!</a></p>
            </div>
        </section>
        
    </main>

    <footer>
        <div class="fixed-bottom" style="margin-left: 0.5vw;"><p>Copyright &copy; 2022 Apartmani AG</p></div>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel-apartmani\resources\views/login-page.blade.php ENDPATH**/ ?>