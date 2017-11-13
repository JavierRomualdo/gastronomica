@extends('layouts.master')
@section('title','Proveedores')
@section('content')
  <div class="breadcrumb-holder">
    <div class="container-fluid">
      <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('home')}}">Home</a></li>
        <li class="breadcrumb-item active">Proveedor</li>
      </ul>
    </div>
  </div>
  <section class="forms">
    <div class="container-fluid">
      <header>
        <h1 class="h3">Lista de Proveedores:</h1>
      </header>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header d-flex align-items-center">
              <!--<h2 class="h5 display">Striped table with hover effect</h2>-->
              <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Nuevo</button>
              <!--<a href="#" data-target="#myModal" class="btn btn-primary" role="button">Nuevo</a>-->

              <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                <div role="document" class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 id="exampleModalLabel" class="modal-title">Nuevo Proveedor</h5>
                      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                    </div>
                    <form class="form-horizontal" action="#" method="POST">

                    <div class="modal-body">
                      <p>Ingrese los datos del proveedor.</p>

                        <div class="form-group row">
                          <label class="col-sm-2" for="empresa">Empresa:</label>
                          <div class="col-sm-10">
                            <input id="empresa" type="text" placeholder="Ingrese Empresa" class="form-control form-control-success" required autofocus><!--<small class="form-text">Example help text that remains unchanged.</small>-->
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2" for="ruc">Ruc:</label>
                          <div class="col-sm-10">
                            <input id="ruc" type="text" placeholder="Ingrese Ruc" class="form-control form-control-success"><!--<small class="form-text">Example help text that remains unchanged.</small>-->
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2" for="direccion">Direccion:</label>
                          <div class="col-sm-10">
                            <input id="direccion" type="text" placeholder="Ingrese Direccion" class="form-control form-control-success"><!--<small class="form-text">Example help text that remains unchanged.</small>-->
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2" for="telefono">Telefono:</label>
                          <div class="col-sm-10">
                            <input id="telefono" type="tel" placeholder="Ingrese Telefono" class="form-control form-control-success"><!--<small class="form-text">Example help text that remains unchanged.</small>-->
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2" for="correo">Correo:</label>
                          <div class="col-sm-10">
                            <input id="correo" type="email" placeholder="Ingrese Correo" class="form-control form-control-success"><!--<small class="form-text">Example help text that remains unchanged.</small>-->
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2" for="fecha_ingreso">Fecha Ingreso:</label>
                          <div class="col-sm-10">
                            <input id="fecha_ingreso" type="date" placeholder="Ingrese Fecha" class="form-control form-control-success"><!--<small class="form-text">Example help text that remains unchanged.</small>-->
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2" for="estado">Estado:</label>
                          <div class="col-sm-10">
                            <input id="estado" type="email" placeholder="Ingrese Estado" class="form-control form-control-success"><!--<small class="form-text">Example help text that remains unchanged.</small>-->
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2" for="descripcion">Descripción:</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="descripcion"></textarea>
                            <!--<input id="inputHorizontalSuccess" type="text" placeholder="Ingrese descripcion" class="form-control form-control-success">--> <!--<small class="form-text">Example help text that remains unchanged.</small>-->
                          </div>
                        </div>
                        <!--<div class="form-group row">
                          <div class="col-sm-10 offset-sm-2">
                            <input type="submit" value="Signin" class="btn btn-primary">
                          </div>
                        </div>-->

                    </div>
                    <div class="modal-footer">
                      <button type="button" data-dismiss="modal" class="btn btn-secondary">Cancelar</button>
                      <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                      <input type="submit" value="Guardar" id="grabar" class="btn btn-primary">
                    </div>
                    </form>
                  </div>
                </div>
              </div>

            </div>
            <div class="card-block">
              <div id="list-proveedores">
              </div>
              <!--<ul id="pagination" class="pagination-sm"></ul>-->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="{{asset('bootstrap4/js/jquery.min.js')}}"></script>
  <script type="text/javascript">

    $(document).ready(function($){
      listProveedores();
    });

    $(document).on("click", ".pagination li a", function(e) {
      e.preventDefault();
      var url = $(this).attr("href");
      $.ajax({
        type: 'get',
        url: url,
        success: function(data){
          $('#list-proveedores').empty().html(data);
        }
      });
    });
    var listProveedores = function(){
      $.ajax({
        type:'get',
        url: '{{url('listall')}}',
        success: function(data){
          $('#list-proveedores').empty().html(data);
        }
      });
    };



  </script>
  <script type="text/javascript">
  $("#grabar").click(function(event){
    var empresa = $(#recipient-empresa).val();

    alert(empresa);
  });
  </script>
@endsection
