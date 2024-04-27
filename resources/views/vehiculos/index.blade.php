<x-app-layout>
  <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
  {{ __('vehiculos') }}
  </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
    <h1>Catalogo de vehiculos </h1>
    <a href="{{route ('vehiculos.create')}}" class="bg-green-700 hover:bg-green-900 text-white
    font-bold py-2 px-4 rounded ml-2">Add</a>
    <table class="table">
    <thead>
        <tr>
          <th scope="col">id vehiculo</th>
          <th scope="col">marca</th>  
          <th scope="col">modelo</th>
          <th scope="col">año</th>
          <th scope="col">precio</th>  
          <th scope="col">kilometraje</th>
          <th scope="col">tipo</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($vehiculos as $vehiculo)
            
        <tr>
          <th scope="row">{{$vehiculo ->id_vehiculo}}</th>
          <td>{{$vehiculo ->marca}}</td>
          <td>{{$vehiculo->modelo}}</td>
          <td>{{$vehiculo ->año}}</td>
          <td>{{$vehiculo->precio}}</td>
          <td>{{$vehiculo ->kilometraje}}</td>
          <td>{{$vehiculo->tipo}}</td>
          <td>  
            <a href="{{route('vehiculos.edit',['vehiculo'=>$vehiculo->id_vehiculo])}}"
              class="bg-blue-500
              hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
              <form action="{{ route('vehiculos.destroy',['vehiculo'=>$vehiculo->id_vehiculo]) }}"
                   method ='POST' style='display: inline-block'>
                   @method('delete')
                   @csrf
                   <input class="bg-red-500
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
  </div>  
</div> 
</div>     
</x-app-layout>