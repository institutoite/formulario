<form action="#" method="POST">
  @csrf
  <div class="form-group">
    <label for="materia">Materia:</label>
    <input type="text" class="form-control" id="materia" name="materia" placeholder="Ingrese el nombre de la materia" required>
  </div>
  <div class="form-group">
    <label for="slogan">Slogan:</label>
    <input type="text" class="form-control" id="slogan" name="slogan" placeholder="Ingrese el slogan de la materia" required>
  </div>
  <div class="form-group">
    <label for="detalle">Detalle:</label>
    <textarea class="form-control" id="detalle" name="detalle" placeholder="Ingrese el detalle de la materia" required></textarea>
  </div>
  
</form>