<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <a class="nav-link active" aria-current="page" href="/jokenpo">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/rounds">Listagem de Jogadas</a>
                     </li>
                  </ul>
               </div>
            </div>
         </nav>
         @if(!empty($message))
            <div class="alert alert-danger" role="alert">
               This is a danger alert—check it out!
            </div>
         @endif
         <form action="{{ route('update') }}" method="POST">
            @csrf
            <input type="hidden"  name="id" value="{{ $round->id }}">
            <div class="col-6 offset-3 mt-5">
               <div class="form-group">
                  <label>Usuario</label>
                  <input type="text"  name="user" class="form-control" value="{{ strtoupper($round->user) }}">
               </div>
               <div class="form-group">
                  <label>Jogada Player</label>
                  <input type="text" class="form-control" name="weaponPlayer" value="{{ strtoupper($round->weaponPlayer) }}">
               </div>
               <div class="form-group">
                  <label>Resultado</label>
                  <select class="form-control" name="result">
                     <option value="1" @if ($round->result == "1") {{ 'selected' }} @endif>GANHOU</option>
                     <option value="2" @if ($round->result == "2") {{ 'selected' }} @endif>PERDEU</option>
                     <option value="3" @if ($round->result == "3") {{ 'selected' }} @endif>EMPATOU</option>
                  </select>
               </div>
               <div class="form-group">
                  <label>Jogada Bot</label>
                  <input type="text" class="form-control" name="weaponBot" value="{{ strtoupper($round->weaponBot) }}">
               </div>
               @if( Request::path() == 'round/'.$round->id )
                  <a  href="/edit/{{ $round->id }}" class="btn btn-block btn-dark">Editar</a>
               @else
                  <button class="btn btn-block btn-primary">Atualizar</button>
               @endif
            </div>
         </form>
      </div>
   </body>
</html>