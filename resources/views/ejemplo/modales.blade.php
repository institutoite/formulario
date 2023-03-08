{{-- %%%%%%%%%%%%%%%%%%%   CREAR  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="modal" tabindex="-1" id="modal-crear-ejemplo">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                MODAL CREAR EJEMPLO
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                {{ $formula->formula }}
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="card card-primary">
                            <div class="card-header bg-secondary">
                                <span class="card-title">Crear Ejemplo</span>
                            </div>
                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <form id="formulario-crear-ejemplo">
                                    @csrf
                                    
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                                            <span class="text-danger" id="error_ejemplo"></span>
                                        </div>
                                    </div> 
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" > 
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="numero" id="numero" value="">
                                            <label for="numero">Orden</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" > 
                                        <div class="form-floating mb-3">
                                            <input class="form-control" type="text" name="ejemplo" id="ejemplo" value="" oninput="actualizarContenido()">
                                            <label for="ejemplo">Ejemplo</label>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" > 
                                        <div class="form-floating mb-3 text-gray">
                                            <textarea class="form-control @error('detalle') is-invalid @enderror" rows="5" id="detalle" name="detalle"  placeholder="Ingrese el detalle del ejemplo">{{old('detalle',$ejemplo->detalle ?? '')}}</textarea>
                                            <label for="detalle">Detalle</label>
                                        </div>
                                    </div>
                                    
                                    <input class="form-control" hidden type="number" id="formula_id" value="{{ $formula->id }}">

                                    <div class="container-fluid h-100 mt-3"> 
                                        <div class="row w-100 align-items-center">
                                            <div class="col text-center">
                                                <button id="guardar-ejemplo" class="btn btn-primary text-white btn-lg">Guardar<i class="fas fa-sync"></i></button>        
                                            </div>	
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="ecuacion" class="col-xs-12 col-sm-12 col-md-6 col-lg-6 bg-secondary">
                        <div id="contenido">
                            
                        </div>
                    </div>
                </div>    
                
                <div id='message-error' class="alert alert-danger danger text-danger" role='alert' style="display: none">
                    <strong id="error"></strong>
                </div>
            </div>
        </div>
    </div>
</div>