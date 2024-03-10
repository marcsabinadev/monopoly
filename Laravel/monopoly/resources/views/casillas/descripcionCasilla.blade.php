<!-- @author: Alejandra Paz, Angel Rivera, Marc Sabina, Julia Prieto
3. Tabla => Listamos casilla: información completa casilla (nombre, tipo casilla y precio) -->

<x-layouts.app>
    <x-slot name="title">
        Descripcion casilla
    </x-slot>

    <div class="container mt-5">
       <table class="table">
           <thead>
               <tr>
                   <th>Nombre</th>
                   <th>Tipo de casilla</th>
                   <th>Precio</th>
               </tr>
           </thead>
           <tbody>
               <tr>
                   <td>{{ $casilla->nombre }}</td>
                   <td>{{ $casilla->tipoCasilla }}</td>
                   <td>{{ $casilla->precio }}</td>
               </tr>

           </tbody>
       </table>
   </div>

</x-layouts.app>
