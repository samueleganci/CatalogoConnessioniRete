<form class="col-12" method="post" action="<?php echo URL . "operator/changeSwitch"; ?>">
  <input type="hidden" value="<?php echo $data[0][0]; ?>" name="id">
  <div class="row">
    <div class="form-group col-sm-3">
        <label>Posizione</label>
        <input type="text" class="form-control" required name="posizione" value="<?php echo $data[0][1]; ?>"/>
      </div>
      <div class="form-group col-sm-3">
        <label>Modello</label>
        <input type="text" class="form-control" required name="modello" value="<?php echo $data[0][2]; ?>"/>
      </div>
      <div class="form-group col-sm-3">
        <label>Etichetta</label>
        <input type="text" class="form-control" required name="etichetta" value="<?php echo $data[0][3]; ?>"/>
      </div>
      <div class="form-group col-sm-2">
        <label>Numero di porte</label>
        <input type="text" class="form-control" required name="porte" value="<?php echo $data[0][4]; ?>"/>
      </div>
      <input type="submit" class="btn btn-secondary col-sm-1" value="Modifica"/>
    </div>
  </div>
</form>
