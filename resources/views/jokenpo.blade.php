<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- <link rel="stylesheet" href="{{ asset('style.css') }}"> -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
      <title>Jo Ken Po</title>
   </head>
   <body>
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
               <a class="navbar-brand" href="/"><img src="{{ asset('images/jokenpo.png') }}"  alt="Pedra" height="50"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/rounds">Listagem de Jogadas</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
      </div>

      <div class="text-center mt-4">
         <div class="container">
            <form action="{{ route('play') }}" method="POST">
               @csrf
               <div class="row">
                  <div class="col-sm-6">
                     <div class="card text-center">
                        <div class="card-body">
                           <div class="form-check">
                           <img src="{{ asset('images/pedra.png') }}"  alt="Pedra" width="90" height="80"><br>
                              <input class="form-check-input" type="checkbox" value="pedra" name="arma" id="arm">
                              <label class="form-check-label">
                              Pedra
                              </label>
                           </div>
                           <div class="form-check">
                           <img src="{{ asset('images/papel.jpeg') }}"  alt="Papel" width="80" height="80"><br>
                              <input class="form-check-input" type="checkbox" value="papel" name="arma" id="arm">
                              <label class="form-check-label">
                                 Papel
                              </label>
                           </div>
                           <div class="form-check">
                           <img src="{{ asset('images/tesoura.jpeg') }}"  alt="Tesoura" width="75" height="80"><br>
                              <input class="form-check-input" type="checkbox" value="tesoura" name="arma" id="arm">
                              <label class="form-check-label">
                                 Tesoura
                              </label>
                           </div>
                           <hr>
                           <h5 class="card-title mt-5">Escolha sua jogada!</h5>
                           <p class="card-text">Bora jogar Jo Ken Po</p>
                        </div>
                     </div>
                  </div>
                  
                  <div class="col-sm-6">
                     <div class="card text-center" >
                        <div class="card-body">
                           <img src="{{ asset('images/bot.jpg') }}"  alt="Bot" style="width:230px;height:310px;margin:auto">
                           <hr>
                           <h5 class="card-title mt-5">Olá eu sou o BOT, seu oponente HeHeh</h5>
                           <p class="card-text">Bora jogar Jo Ken Po</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="mt-3">
                  <button type="submit" class="btn btn-primary btn-block" >Jogar</a>
               </div>
            </form>
         </div>
         @if(!is_null($result))
            <div class="fw-bold">
               @switch($result)
                  @case(3)
                     <h1 style="font-size: 100px;color:black;"> EMPATOU </h1>
                     @break
                  @case(1)
                     <h1 style="font-size: 100px;color:green;"> VENCEDOR</h1>
                     @break
                  @case(2)
                     <h1 style="font-size: 100px;color:red;"> PERDEU </h1>
                     @break
               @endswitch
            </div>         
         @else
            <br>
            <h1 style="font-size: 80px;color:yellow;"> ESCOLHA UMA JOGADA </h1>

         @endif
      </div>
      <footer>
         <div class="fixed-bottom text-center">
            <p>Desenvolvido por <a href="https://unixlira.github.io" target="blank">José Roberto Lira</a></p>
         </div>
      </footer>

   </body>
</html>