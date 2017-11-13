<table class="table table-striped table-hover">

  <thead>
    <tr>
      <th>#</th>
      <th>Empresa</th>
      <th>Ruc</th>
      <th>Direccion</th>
      <th>Telefono</th>
      <th>Correo</th>
      <th>Fecha Ingreso</th>
      <th>Estado</th>
      <th>Descripcion</th>
      <th>Acción</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($proveedor as $proveedores)
      <tr>
        <th scope="row">{{$proveedores->id}}</th>
        <td>{{$proveedores->empresa}}</td>
        <td>{{$proveedores->ruc}}</td>
        <td>{{$proveedores->direccion}}</td>
        <td>{{$proveedores->telefono}}</td>
        <td>{{$proveedores->correo}}</td>
        <td>{{$proveedores->fecha_ingreso}}</td>
        <td>{{$proveedores->estado}}</td>
        <td>{{$proveedores->descripcion}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
<!--<div class="text-center">
  { !!$proveedor->links()!!}
</div>-->
