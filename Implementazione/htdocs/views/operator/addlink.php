<form class="col-12" method="post" action="<?php echo URL . "operator/newLink/" . $data; ?>">
  <div class="row">
    <input type="hidden" value="<?php echo $data; ?>" name="switch_id"/>
    <div class="form-group col-sm-3">
      <label>Numero di porta</label>
      <input type="text" class="form-control" required name="porta"/>
    </div>
    <div class="form-group col-sm-4">
      <label for="sel">Cavo utilizzato</label>
      <select class="form-control" id="sel" name="cavo">
      <?php for($i = 0; $i < count($data2[0]); $i++) {?>
        <option value="<?php echo $data2[0][$i][0]; ?>"><?php echo $data2[0][$i][1]; ?></option>
      <?php } ?>
      </select>
    </div>
    <div class="form-group col-sm-4">
      <label for="sel">Dispositivo</label>
      <select class="form-control" id="sel" name="dispositivo">
      <?php for($i = 0; $i < count($data2[1]); $i++) {?>
        <option value="<?php echo $data2[1][$i][0]; ?>"><?php echo $data2[1][$i][1]; ?></option>
      <?php } ?>
      </select>
    </div>
    <input type="submit" class="btn btn-secondary col-sm-1" value="Aggiungi"/>
  </div>
</form>