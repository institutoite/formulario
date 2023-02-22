
<input class="form-control" type="text" name="tema_id" hidden value="{{ $tema->id }}">
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
     @if($errors->has('nombre'))
          <span class="text-danger"> {{ $errors->first('nombre')}}</span>
      @endif
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
      @if($errors->has('formula'))
          <span class="text-danger"> {{ $errors->first('formula')}}</span>
      @endif
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    <div class="form-floating mb-3 text-gray">
      <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{old('nombre',$nombre->nombre ?? '')}}" placeholder="Ingrese el nombre del nombre">
      <label for="tena">nombre</label>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
      <div class="form-floating mb-3 text-gray">
        <input type="text" class="form-control @error('formula') is-invalid @enderror" id="formula" name="formula" value="{{old('formula',$formula->formula ?? '')}}" placeholder="Ingrese el formula del tema">
        <label for="formula">formula</label>
      </div>
  </div>
</div>
<div class="row">
  <div class="col-12">
    
      <i id="addvariable" class="fas fa-plus-circle"></i> <span>Agregar variable</span>
      <div id="divvariables">

      </div>
  </div>
</div>

<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
      @if($errors->has('detalle'))
          <span class="text-danger"> {{ $errors->first('detalle')}}</span>
      @endif
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
      @if($errors->has('url'))
          <span class="text-danger"> {{ $errors->first('url')}}</span>
      @endif
  </div>
</div>



<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="form-floating mb-3 text-gray">
      <textarea class="form-control @error('detalle') is-invalid @enderror" rows="5" id="detalle" name="detalle"  placeholder="Ingrese el detalle de la materia">{{old('detalle',$formula->detalle ?? '')}}</textarea>
      <label for="detalle">Detalle</label>
    </div>
   

  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
      <div class="form-floating mb-3 text-gray">
        <input type="file" name="url" id="url" class="file-input">
        <label for="url">Imagen</label>
      </div>
  </div>
</div>
