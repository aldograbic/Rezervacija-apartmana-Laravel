<h2>Uspješna rezervacija</h2>

<p>
  Poštovani/a,<br>
  <br>
  Vaša rezervacija je uspješno izvršena. &#128513;<br>
  Detalji rezervacije:
</p>

<ul>
  <li>Od: <?php echo e($reservation['from_date']); ?></li>
  <li>Do: <?php echo e($reservation['to_date']); ?></li>
  <li>Broj odraslih: <?php echo e($reservation['number_of_adults']); ?></li>
  <li>Broj djece: <?php echo e($reservation['number_of_kids']); ?></li>
  <li>Cijena: <?php echo e($reservation['full_price']); ?>&euro;</li>
</ul>

<p>
  Hvala na rezervaciji.<br>
  <br>
  S poštovanjem,<br>
  <br>
  Apartmani AG
</p>
<?php /**PATH C:\xampp\htdocs\laravel-apartmani\resources\views/emails/reservation.blade.php ENDPATH**/ ?>