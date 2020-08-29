<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
<div class="container">
<table class="table">
    <thead>
    <tr>
        <th>
            codigo
        </th>
        <th>
            nombre
        </th>
        <th>
            lugar
        </th>

    </tr>

    </thead>
    <tbody>
    @foreach($usuario as $us)
     <tr>
        <th>
            {{$us->cod_usuario}}
        </th>
        <th>
                {{$us->nom_usuario}}
        </th>
        <th>
               {{$us->edad_usario}}
        </th>
         <th>
             <form action="{{route('Usuario.destroy',$us->cod_usuario)}}" method="post">
                 @csrf
                 @method('delete')

               <button class="btn btn-danger" type="submit">eliminar</button>
             </form>

         </th>
     </tr>
    @endforeach

    </tbody>


</table>
    <a class="btn btn-primary" href="{{route("Usuario.create")}}">hola </a>
</div>
</body>
</html>
