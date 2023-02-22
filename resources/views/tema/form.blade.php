
<input class="form-control" type="text" name="materia_id" hidden value="{{ $materia->id }}">
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
     @if($errors->has('tema'))
          <span class="text-danger"> {{ $errors->first('tema')}}</span>
      @endif
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
      @if($errors->has('slogan'))
          <span class="text-danger"> {{ $errors->first('slogan')}}</span>
      @endif
  </div>
</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
    <div class="form-floating mb-3 text-gray">
      <input type="text" class="form-control @error('tema') is-invalid @enderror" id="tema" name="tema" value="{{old('tema',$tema->tema ?? '')}}" placeholder="Ingrese el nombre del tema">
      <label for="tena">Tema</label>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
      <div class="form-floating mb-3 text-gray">
        <input type="text" class="form-control @error('slogan') is-invalid @enderror" id="slogan" name="slogan" value="{{old('slogan',$tema->slogan ?? '')}}" placeholder="Ingrese el slogan del tema">
        <label for="slogan">slogan</label>
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
      <textarea class="form-control @error('detalle') is-invalid @enderror" rows="5" id="detalle" name="detalle"  placeholder="Ingrese el detalle de la materia">{{old('detalle',$tema->detalle ?? '')}}</textarea>
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
