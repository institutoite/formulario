{{-- %%%%%%%%%%%%%%%%%%%   E D I T A R  %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% --}}
<div class="modal" tabindex="-1" id="modal-editar">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                MODAL EDITAR VARIABLE
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                    <div id='message-error' class="alert alert-danger danger text-danger" role='alert' style="display: none">
                        <strong id="error"></strong>
                    </div>

                <div class="card card-primary">
                    <div class="card-header bg-secondary">
                        <span class="card-title">Editar Variable</span>
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

                        <form id="formulario-editar-variable">
                            @csrf
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                                    <span class="text-danger" id="error_variable"></span>
                                </div>
                            </div> 
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" > 
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="variable" id="variable" value="">
                                    <label for="variable">Variable</label>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" > 
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="detalle" id="detalle" value="">
                                    <label for="detalle">Detalle</label>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                                    <div class="form-floating mb-3 text-gray">
                                        <select class="form-control @error('dimension_id') is-invalid @enderror" data-old="{{ old('dimension_id') }}" name="dimension_id" id="dimension_id">
                                        
                                        </select>
                                        <label for="pais">Elija dimensión*</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                                        <div class="form-floating mb-3 text-gray">
                                            @error('dimension_id') <span class="text-danger">{{$message}}</span> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input class="form-control" type="number" id="variable_id" value="">
                            <div class="container-fluid h-100 mt-3"> 
                                <div class="row w-100 align-items-center">
                                    <div class="col text-center">
                                        <button id="actualizar-variable" class="btn btn-primary text-white btn-lg">Actualizar <i class="fas fa-sync"></i></button>        
                                    </div>	
                                </div>
                            </div>
                        </form>
                    </div>
                </div> 
            </div>
           
        </div>
    </div>
</div>