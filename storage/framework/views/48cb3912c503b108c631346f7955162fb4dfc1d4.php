<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Rezervacija apartmana">
	<meta name="keywords" content="rezervacija, apartman">
	<meta name="author" content="Aldo Grabić">
    <link rel="shortcut icon" type="/image/x-icon" href="img/icon.png">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Apartmani AG | Apartmani</title>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Apartmani AG</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" style="margin-left: 80vw;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Korisnički račun</a>
                            <ul class="dropdown-menu" style="margin-left: 80vw;">
                                <?php if(Auth::check()): ?>
                                <li><span class="dropdown-item-text"><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></span></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('logout')); ?>">Odjava</a></li>
                                <?php else: ?>
                                <li><a class="dropdown-item" href="<?php echo e(route('registration')); ?>">Registracija</a></li>
                                <li><a class="dropdown-item" href="<?php echo e(route('login')); ?>">Prijava</a></li>
                                <?php endif; ?>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <form action="<?php echo e(route('apartments-page')); ?>" method="get">
                <h1 class="container text-center">Traži!</h1>
                <div class="input-group mb-3 container text-center" style="width: 50vw;">
                    <div>
                        <label for="from_date">Datum prijave</label>
                        <input type="text" class="form-control" style="width: 200px" name="from_date" placeholder="Datum prijave" onfocus="(this.type='date')" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" min="<?php echo date("Y-m-d"); ?>">
                    </div>
                    <div>
                        <label for="to_date">Datum odjave</label>
                        <input type="text" class="form-control" style="width: 200px" name="to_date" placeholder="Datum odjave" onfocus="(this.type='date')" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" min="<?php echo date("Y-m-d"); ?>">
                    </div>
                    <div>
                        <label for="number_of_adults">Broj odraslih</label>
                        <input type="number" class="form-control" name="number_of_adults" min="1" placeholder="Broj odraslih" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div>
                        <label for="number_of_kids">Broj djece</label>
                        <input type="number" class="form-control" name="number_of_kids" min="0" placeholder="Broj djece" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div>
                        <button type="submit" style="transform: translateY(2.6vh);" class="btn btn-outline-primary">Traži</button>
                    </div>
                </div>
            </form>
        </section>
        <?php $__currentLoopData = $apartments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $apartment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <section>
            <h1 class="text-center"><?php echo e($apartment->name); ?></h1>
            <img class="img-thumbnail rounded mx-auto d-block" width="500" src="img/img-apartman1.jpg">
            <section class="text-center" id="info_rec_cij_gumb">
                <p>Veličina: <?php echo e($apartment->apartment_size); ?> m&sup2;, Broj soba: <?php echo e($apartment->number_of_rooms); ?>, Balkon: <?php if($apartment->balcony == 1): ?> ima <?php else: ?> nema <?php endif; ?></p>
                <p><?php echo e($apartment->price); ?> &euro; / noć</p>
                <a class="btn btn-outline-primary" style="margin-bottom: 5vh;" href="<?php echo e(route('apartment-show', ['id' => $apartment->id])); ?>">Prikaži</a>
            </section>
        </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </main>

    <footer>
        <div class="fixed-bottom" style="margin-left: 0.5vw;"><p>Copyright &copy; 2022 Apartmani AG</p></div>  
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\laravel-apartmani\resources\views/apartments-page.blade.php ENDPATH**/ ?>