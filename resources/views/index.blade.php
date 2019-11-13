@extends('layout')


@section('content')

<div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/2.jpg" class="d-none d-sm-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/4.jpg" class="d-none d-sm-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/3.jpg" class="d-none d-sm-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="container my-5">
    <div class="row align-items-center">
    <div class="col-lg-6 text-center">
      <h3 class="mb-5">Ko smo mi</h3>
      <p class="lead">Frizerski salon "Unisex" osnovan je 2001. godine i radi u službi Vaše lepote. Sa višegodišnjim iskustvom i na hiljade zadovoljnih mušterija, slobodno mozemo da se pohvalimo visokokvalitetnom uslugom.
        U prijatnom i moderno opremljenom prostoru, dočekace Vas naše stručno osoblje koje je uvek spremno da ispuni sve Vaše želje i zahteve, isto tako i da vam ponudi neke nove ideje.</p>
      <a class="text-warning" href="o-nama.html">Saznajte više <i class="fa fa-arrow-right"></i> </a>
    </div>
    <div class="col-lg-6">
      <img src="images/tunel1.jpg" class="img-fluid" alt="">
    </div>
  </div>
  </div>

  <div id="jumbo" class="jumbotron jumbotron-fluid bg-secondary mt-5 text-center ">
    <blockquote class="blockquote text-white px-2">
      <p class="mb-0 text">"Ljudi kod nas ne dolaze samo da bi izgledali lepo, već i da se osećaju lepo"</p>
      <footer class="blockquote-footer text-white"><cite title="Source Title">Unisex Tim</cite></footer>
    </blockquote>
  </div>

  <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6" id="oprema">
      <img src="images/oprema.png" class="img-fluid" alt="">
    </div>
    <div class="col-lg-6 text-center">
        <h3 class="mb-5">Naša oprema</h3>
        <p class="lead">Lepa frizura prvenstveno zavisi od zdrave kose i negovane kože glave. Uz korišćene profesionalne opreme i preparata, vraćamo Vašoj kosi sjaj, negovan izgled i činimo je bujnom i lepršavom. Koristimo izabrane preparate poznate po kvalitetu, kao što su Revlon, Swarzkopf, Farcom, Wella, Alfaparf u cilju vašeg zadovoljstva.</p>
    </div>
  </div>
  </div>


    
@endsection

