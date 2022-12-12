@extends('layouts.app')

@section('template_title')
    {{ $producto->name ?? 'Mostrar Producto' }}
@endsection

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTl4dyaqXtty4mqUDwDE_jSd8yWSyQ5eqGPobHV4P7G&s" alt="logo" width="100" height="70">
    <br>
    <br>
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">mostrar Producto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('productos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $producto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $producto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $producto->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Unidades:</strong>
                            {{ $producto->unidades }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
