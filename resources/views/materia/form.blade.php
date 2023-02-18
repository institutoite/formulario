
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      @if($errors->has('materia'))
          <span class="text-danger"> {{ $errors->first('materia')}}</span>
      @endif
  </div>
</div>
<div class="form-group">
  <label for="materia">Materia:</label>
  <input type="text" class="form-control @error('materia') is-invalid @enderror" id="materia" name="materia" placeholder="Ingrese el nombre de la materia">
</div>


<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      @if($errors->has('slogan'))
          <span class="text-danger"> {{ $errors->first('slogan')}}</span>
      @endif
  </div>
</div>
<div class="form-group">
  <label for="slogan">Slogan:</label>
  <input type="text" class="form-control @error('slogan') is-invalid @enderror" id="slogan" name="slogan" placeholder="Ingrese el slogan de la materia">
</div>
  


  <div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      @if($errors->has('detalle'))
          <span class="text-danger"> {{ $errors->first('detalle')}}</span>
      @endif
  </div>
</div>
<div class="form-group">
  <label for="detalle">Detalle:</label>
  <textarea class="form-control @error('detalle') is-invalid @enderror" rows="5" id="detalle" name="detalle" placeholder="Ingrese el detalle de la materia"></textarea>
</div>

<input type="file" name="url" id="url" class="file-input">
