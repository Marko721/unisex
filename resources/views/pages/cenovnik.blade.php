@extends('layout')

@section('content')

<div class="container">
    <hr>
</div>

<div class="container">
    <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-secondary btn-lg btn-block text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Muškarci
              </button>
            </h2>
          </div>
      
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Cena</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Muško šišanje</td>
                    <td>650.00</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Muško šišanje sa pranjem</td>
                    <td>800.00</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Pranje kose</td>
                    <td>400.00</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td>Muško feniranje</td>
                    <td>400.00</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td>Sređivanje brade</td>
                    <td>300.00</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td>Skidanje brade i šišanje</td>
                    <td>800.00</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td>Skidanje brade i pranje</td>
                    <td>500.00</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td>Štucovanje brade</td>
                    <td>450.00</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td>Štucovanje brade, šišanje i pranje</td>
                    <td>1000.00</td>
                    </tr>
                </tbody>
                </table>
        </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header" id="headingTwo">
        <h2 class="mb-0">
            <button class="btn btn-link collapsed btn-secondary btn-lg btn-block text-white" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Žene
            </button>
        </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Opis</th>
                    <th scope="col">Cena</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td>Žensko šišanje</td>
                    <td>800.00</td>
                    </tr>
                    <tr>
                    <th scope="row">2</th>
                    <td>Žensko feniranje kratke kose</td>
                    <td>500.00</td>
                    </tr>
                    <tr>
                    <th scope="row">3</th>
                    <td>Žensko feniranje srednje kose</td>
                    <td>600.00</td>
                    </tr>
                    <tr>
                    <th scope="row">4</th>
                    <td>Žensko feniranje duge kose</td>
                    <td>700.00</td>
                    </tr>
                    <tr>
                    <th scope="row">5</th>
                    <td>Žensko feniranje e.d.k.</td>
                    <td>800.00</td>
                    </tr>
                    <tr>
                    <th scope="row">6</th>
                    <td>Uslužno farbanje korena</td>
                    <td>600.00</td>
                    </tr>
                    <tr>
                    <th scope="row">7</th>
                    <td>Uslužno farbanje duge kose</td>
                    <td>800.00</td>
                    </tr>
                    <tr>
                    <th scope="row">8</th>
                    <td>Farbanje farbom korena</td>
                    <td>1200.00</td>
                    </tr>
                    <tr>
                    <th scope="row">9</th>
                    <td>Farbanje farbom kratke kose</td>
                    <td>1500.00</td>
                    </tr>
                    <tr>
                    <th scope="row">10</th>
                    <td>Farbanje farbom srednje kose</td>
                    <td>2000.00</td>
                    </tr>
                    <tr>
                    <th scope="row">11</th>
                    <td>Farbanje farbom duge kose</td>
                    <td>2500.00</td>
                    </tr>
                    <tr>
                    <th scope="row">12</th>
                    <td>Farbanje farbom e.d.k.</td>
                    <td>3500.00</td>
                    </tr>
                    <tr>
                    <th scope="row">13</th>
                    <td>Pramenovi površinski blanš</td>
                    <td>2000.00</td>
                    </tr>
                    <tr>
                    <th scope="row">14</th>
                    <td>Pramenovi srednje kose blanš</td>
                    <td>2500.00</td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td>Pramenovi duge kose blanš</td>
                    <td>3500.00</td>
                    </tr>
                    <tr>
                    <th scope="row">16</th>
                    <td>Pramenovi e.d.k. blanš</td>
                    <td>4000.00</td>
                    </tr>
                    <tr>
                    <th scope="row">17</th>
                    <td>Pramenovi više boja srednje kose</td>
                    <td>3000.00</td>
                    </tr>
                    <tr>
                    <th scope="row">18</th>
                    <td>Pramenovi više boja e.d.k.</td>
                    <td>4000.00</td>
                    </tr>
                    <tr>
                    <th scope="row">19</th>
                    <td>Blajhanje kratke kose</td>
                    <td>1500.00</td>
                    </tr>
                    <tr>
                    <th scope="row">20</th>
                    <td>Blajhanje srednje kose</td>
                    <td>2000.00</td>
                    </tr>
                    <tr>
                    <th scope="row">21</th>
                    <td>Blajhanje duge kose</td>
                    <td>3000.00</td>
                    </tr>
                    <tr>
                    <th scope="row">22</th>
                    <td>Ombre, Balejaž srednje kose</td>
                    <td>3500.00</td>
                    </tr>
                    <tr>
                    <th scope="row">23</th>
                    <td>Ombre, Balejaž duge kose</td>
                    <td>4000.00</td>
                    </tr>
                    <tr>
                    <th scope="row">24</th>
                    <td>Ombre, Balejaž e.d.k.</td>
                    <td>5000.00</td>
                    </tr>
                    <tr>
                    <th scope="row">25</th>
                    <td>Preliv</td>
                    <td>2000.00</td>
                    </tr>
                    <tr>
                    <th scope="row">26</th>
                    <td>Svečane frizure bez pranja, Punđe</td>
                    <td>1500.00</td>
                    </tr>
                    <tr>
                    <th scope="row">27</th>
                    <td>Svečane frizure sa pranjem, Punđe</td>
                    <td>1500.00</td>
                    </tr>
                    <tr>
                    <th scope="row">28</th>
                    <td>Stilizovanje frizure srednje kose</td>
                    <td>800.00</td>
                    </tr>
                    <tr>
                    <th scope="row">29</th>
                    <td>Stilizovanje frizure e.d.k.</td>
                    <td>1200.00</td>
                    </tr>

                </tbody>
                </table>
        </div>
        </div>
    </div>
</div>
</div>

    
@endsection