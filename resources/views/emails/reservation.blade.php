<h2>Uspješna rezervacija</h2>

<p>
  Poštovani/a,<br>
  <br>
  Vaša rezervacija je uspješno izvršena. &#128513;<br>
  Detalji rezervacije:
</p>

<ul>
  <li>Od: {{ $reservation['from_date'] }}</li>
  <li>Do: {{ $reservation['to_date'] }}</li>
  <li>Broj odraslih: {{ $reservation['number_of_adults'] }}</li>
  <li>Broj djece: {{ $reservation['number_of_kids'] }}</li>
  <li>Cijena: {{ $reservation['full_price'] }}&euro;</li>
</ul>

<p>
  Hvala na rezervaciji.<br>
  <br>
  S poštovanjem,<br>
  <br>
  Apartmani AG
</p>
