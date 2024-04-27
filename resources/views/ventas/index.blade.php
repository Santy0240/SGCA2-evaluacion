<x-app-layout>
  <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
  {{ __('ventas') }}
  </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
    <h1>Venta </h1>
    <a href="{{route ('vehiculos.create')}}" class="bg-green-700 hover:bg-green-900 text-white
    font-bold py-2 px-4 rounded ml-2">Add</a>
    <table class="table">
    <thead>
    <h1>Ventas </h1>
    <a href="{{route ('ventas.create')}}" class="btn btn-success">Add</a>
    <table class="table">
    <thead>
        <tr>
          <th scope="col">id venta</th>
          <th scope="col">id vehiculo</th>  
          <th scope="col">id cliente</th>
          <th scope="col">fecha de venta </th>
          <th scope="col">precio final</th>  
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($ventas as $venta)
            
        <tr>
          <th scope="row">{{$venta ->id_venta}}</th>
          <td>{{$venta ->id_vehiculo}}</td>
          <td>{{$venta->id_cliente}}</td>
          <td>{{$venta ->fecha_venta}}</td>
          <td>{{$venta->precio_final}}</td>
          <td>  
            <a href="{{route('ventas.edit',['venta'=>$venta->id_venta])}}"
                class="bg-blue-500
                hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
              <form action="{{ route('ventas.destroy',['venta'=>$venta->id_venta])}}"
                   method ='POST' style='display: inline-block'>
                   @method('delete')
                   @csrf
                   <input class= <input class="bg-red-500
                   hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2" type ="submit" value ="delete">
              </form>
            </td>
          </tr>
          
           @endforeach
            
            </form>
          </td>
        </tr>
        
        </tbody>
       </table>
    </div>      

  
  </body>
</html>