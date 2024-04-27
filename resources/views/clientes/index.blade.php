<x-app-layout>
  <x-slot name="header">
  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
  {{ __('clientes') }}
  </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900">
    <h1>Listado de clientes </h1>
    <a href="{{route ('clientes.create')}}" class="bg-green-700 hover:bg-green-900 text-white
    font-bold py-2 px-4 rounded ml-2">Add</a>
    <table class="table">
    <thead>
        <tr>
          <th scope="col">id cliente</th>
          <th scope="col">nombre</th>  
          <th scope="col">apellido</th>
          <th scope="col">telefono</th>
          <th scope="col">email</th>  
          <th scope="col">direccion</th>
          <th scope="col">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($clientes as $cliente)
            
        <tr>
          <th scope="row">{{$cliente ->id_cliente}}</th>
          <td>{{$cliente ->nombre}}</td>
          <td>{{$cliente->apellido}}</td>
          <td>{{$cliente ->telefono}}</td>
          <td>{{$cliente->email}}</td>
          <td>{{$cliente ->direccion}}</td>
          <td>  
            <a href="{{route('clientes.edit',['cliente'=>$cliente->id_cliente])}}"
              class="bg-blue-500
              hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
              <form action="{{ route('clientes.destroy',['cliente'=>$cliente->id_cliente]) }}"
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