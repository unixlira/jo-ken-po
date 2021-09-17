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
                  </ul>
               </div>
            </div>
         </nav>
         <table class="table mt-5">
         <thead>
            <tr>
               <th scope="col">#</th>
               <th scope="col">Usuário</th>
               <th scope="col">Jogada Player</th>
               <th scope="col">Resultado</th>
               <th scope="col">Jogada Bot</th>
               <th scope="col">Dia</th>
               <th scope="col">Hora</th>
               <th scope="col">Ações</th>
            </tr>
         </thead>
         <tbody>
             @foreach($rounds as $round)
            <tr>
               <th scope="row">{{ $round->id }}</th>
               <td>{{ strtoupper($round->user) }}</td>
               <td>{{ strtoupper($round->weaponPlayer) }}</td>
               <td>
                    @switch($round->result )
                        @case(3)
                            <span style="color:black;"> EMPATOU </span>
                            @break
                        @case(1)
                            <span style="color:green;"> VENCEDOR</span>
                            @break
                        @case(2)
                            <span style="color:red;"> PERDEU </span>
                            @break
                    @endswitch
                </td>
               <td>{{ strtoupper($round->weaponBot) }}</td>
               <td>{{ $round->created_at->format('d/m/Y') }}</td>
               <td>{{ $round->created_at->format('H:m') }}</td>
               <td>
                    <a class="btn btn-primary btn-xs" href="/round/{{$round->id}}"><i class="fa fa-eye"></i></a>
                    <a class="btn btn-warning btn-xs" href="/edit/{{$round->id}}"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-danger btn-xs"  href="/delete/{{$round->id}}"><i class="fa fa-trash"></i></a>
               </td>
            </tr>
            @endforeach
         </tbody>
      </table>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
            ...
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
            </div>
         </div>
      </div>
      </div>
      </div>
   </body>
</html>