@extends('layouts.layout')

@section('contenido')
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Clientes</h1>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>

    <div class="container" id="Contenido">
        <div class="row" id="tabla">
            <div class="col-12">
                <div class="row">
                    <h4>Datos de clientes</h4>
                </div>

                <form action="{{ route('clientes.store') }}" method="POST" enctype="multipart/form-data">
                    <!--Método que permite ingresar datos-->
                    @csrf

                    <div class="row">
                        <div class="form-group col-md-3">
                            <label>C.I.</label>
                            <input type="number" name="ci" class="form-control @error('ci') is-invalid @enderror" value="{{old('ci')}}">
                            @error('ci')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label>Nombre</label>
                            <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{old('nombre')}}">
                            @error('nombre')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label>Apellido Paterno</label>
                            <input type="text" name="apellido_pat" class="form-control @error('apellido_pat') is-invalid @enderror" value="{{old('apellido_pat')}}">
                            @error('apellido_pat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-3">
                            <label>Apellido Materno</label>
                            <input type="text" name="apellido_mat" class="form-control @error('apellido_mat') is-invalid @enderror" value="{{old('apellido_mat')}}">
                            @error('apellido_mat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Fecha de Nacimiento</label>
                            <input type="date"name="fecha_nac" class="form-control @error('fecha_nac') is-invalid @enderror" value="{{old('fecha_nac')}}">
                            @error('fecha_nac')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror                            
                        </div>
                        <div class="form-group col-md-4">
                            <label>Celular</label>
                            <input type="number" name="telefono" class="form-control @error('telefono') is-invalid @enderror" value="{{old('telefono')}}">
                            @error('telefono')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror                            
                        </div>
                        <div class="form-group col-md-4">
                            <label>Direccion</label>
                            <input type="text" name="direccion" class="form-control @error('direccion') is-invalid @enderror" value="{{old('direccion')}}">
                            @error('direccion')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Email</label>
                            <input type="text" id="direccion" name="email" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Genero</label>
                            <select class="form-control" name="genero">
                                <option>Seleccionar Genero</option>
                                <option>Masculino</option>
                                <option>Femenino</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Nacionalidad</label>
                            <input type="text" id="direccion" name="nacionalidad" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Estado Civil</label>
                            <input type="text" name="estado_civ" class="form-control">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Ocupacion</label>
                            <input type="text" name="ocupacion" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Imagen</label>
                            <input type="file" name="imagen" class="form-control">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 mt-4">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                            <button type="reset" class="btn btn-danger">Cancelar</button>
                            <a href="{{ route('clientes.index') }}" type="button" class="btn btn-secondary">Atrás</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection

