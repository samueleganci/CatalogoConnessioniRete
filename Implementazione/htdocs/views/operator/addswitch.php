<form class="col-12" method="post" action="<?php echo URL . "operator/newSwitch"; ?>">
  <div class="row">
    <div class="form-group col-sm-3">
      <label>Posizione</label>
      <input type="text" class="form-control" required name="posizione"/>
    </div>
    <div class="form-group col-sm-3">
      <label>Modello</label>
      <input type="text" class="form-control" required name="modello"/>
    </div>
    <div class="form-group col-sm-3">
      <label>Etichetta</label>
      <input type="text" class="form-control" required name="etichetta"/>
    </div>
    <div class="form-group col-sm-2">
      <label>Numero di porte</label>
      <input type="text" class="form-control" required name="porte"/>
    </div>
    <input type="submit" class="btn btn-secondary col-sm-1" value="Aggiungi"/>
  </div>
</form>