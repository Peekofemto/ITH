@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card formulario-generico">
                <div class="card-header" >{{ __('Buscar carpeta por RFC') }}</div>

                <div class="card-body" >
                    <form method="POST" action="{{ route('administrador') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="rfc" class="col-md-4 col-form-label text-md-right">{{ __('RFC') }}</label>
                            
                            <div class="col-md-6">
                                <div class="form-group">
                                    <rfcselect-component></rfcselect-component>
                                  </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Buscar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                
                <div class="card-body" >
                        
                        <carpetas-component></carpetas-component>
               </div>
            </div>
        </div>
    </div>
</div>
@endsection