@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="/adminlte/select2/select2.min.css">
@endsection

@section('contenido')
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Cuentas</h1>
            </div>
            <div class="col-sm-6">
            </div>
        </div>
    </div>

    <div class="container" id="Contenido">
        <div class="row" id="tabla">
            <div class="col-12">
                <div class="row">
                    <h4>Datos de cuenta</h4>
                </div>

                <form action="{{ route('transacciones.store') }}" method="POST" enctype="multipart/form-data">
                    <!--Método que permite ingresar datos-->
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Monto</label>
                            <input type="number" name="monto" class="form-control @error('monto') is-invalid @enderror" value="{{old('monto')}}">
                            @error('monto')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Tipo de Transaccion</label>
                            <select name="tipo" class="form-control">
                                <option>Deposito</option>
                                <option>Retiro</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Cuenta Origen</label>
                            <input type="number" name="cuenta_origen" class="form-control @error('cuenta_origen') is-invalid @enderror" value="{{old('cuenta_origen')}}">
                            @error('cuenta_origen')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-6 mt-4">
                            <button type="submit" class="btn btn-primary">Registrar</button>
                            <button type="reset" class="btn btn-danger">Cancelar</button>
                            <a href="{{ route('transacciones.index') }}" type="button" class="btn btn-secondary">Atrás</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection

@section('js')
<script src="/adminlte/select2/select2.full.min.js"></script>
<script>
  $(document).ready(function() {
    console.log('o')
      $('#clientes').select2();
  });
  
  </script>
@endsection
