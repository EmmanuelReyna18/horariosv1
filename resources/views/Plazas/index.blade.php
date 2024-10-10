<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/sass/app.scss','resources/js/app.js'])
    < <style>
        th {
            background-color: #111d5e !important; 
            color: white !important; 
           
        }
        tr{
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            font-weight: bold
        }
    </style>
</head>
<body>

<h1>PLAZAS</h1>

<a href="{{route('Plazas.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;">Insertar</a>

 <div
    class="table-md"
 >
    <table
        class="table table-primary"
    >
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre Plaza</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            {{-- FOREACH TR --}}
            @foreach ( $plazas as $plaza )
            <tr class="">
                <td scope="row">{{ $plaza->id }}</td>
                <td>{{ $plaza->nombrePlaza }}</td>
   
                <td><a href="{{route('Plazas.edit')}}" class="btn button btn-success ">Editar</a></td>
                <td><a href="{{route('Plazas.delete')}}" class="btn button btn-danger ">Eliminar</a></td>
                <td><a href="{{route('Plazas.show')}}" class="btn button btn-primary ">Ver</a></td>
            </tr>
            @endforeach 
            {{-- se termina el for each --}}
        </tbody>
    </table>
 </div>
 
    

</body>
</html>
    {{-- <ul>
        @foreach ( $plazas as $plaza )
        <li>{{ $plaza->nombrePlaza }}</li>
        @endforeach        
    </ul> --}}

</body>
</html>