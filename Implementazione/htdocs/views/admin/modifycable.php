<form class="col-12" method="post" action="<?php echo URL . "admin/changeCable"; ?>">
  <input type="hidden" value="<?php echo $data[0][0]; ?>" name="idCavo">
  <div class="row">
    <div class="form-group col-sm-10">
      <label>Cavo</label>
      <input type="text" class="form-control" value="<?php echo $data[0][1]; ?>" required name="cavo"/>
    </div>
    <input type="submit" class="btn btn-secondary col-sm-2" value="Modifica"/>
  </div>
</form>
