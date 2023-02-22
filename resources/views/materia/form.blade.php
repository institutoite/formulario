
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
      @if($errors->has('materia'))
          <span class="text-danger"> {{ $errors->first('materia')}}</span>
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
      <input type="text" class="form-control @error('materia') is-invalid @enderror" id="materia" name="materia" value="{{old('materia',$materia->materia ?? '')}}" placeholder="Ingrese el nombre de la materia">
      <label for="pagocon">Materia</label>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
      <div class="form-floating mb-3 text-gray">
        <input type="text" class="form-control @error('slogan') is-invalid @enderror" id="slogan" name="slogan" value="{{old('slogan',$materia->slogan ?? '')}}" placeholder="Ingrese el slogan de la materia">
        <label for="pagocon">slogan</label>
      </div>
  </div>
</div>



<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
    <div class="form-floating mb-3 text-gray">
      <textarea class="form-control @error('detalle') is-invalid @enderror" rows="5" id="detalle" name="detalle"  placeholder="Ingrese el detalle de la materia">{{old('detalle',$materia->detalle ?? '')}}</textarea>
      <label for="detalle">Detalla</label>
    </div>
  </div>
  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
      <div class="form-floating mb-3 text-gray">
        <input type="file" name="url" id="url" class="file-input">
        <label for="url">Imagen</label>
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
