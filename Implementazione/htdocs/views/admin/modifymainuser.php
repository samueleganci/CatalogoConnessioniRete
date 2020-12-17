<form class="col-12" method="post" action="<?php echo URL . "admin/changeMainUser"; ?>">
  <input type="hidden" value="<?php echo $data[0][1]; ?>" name="vecchiaPassword">
  <div class="row">
    <div class="form-group col-sm-4">
      <label>Nome utente</label>
      <input type="text" class="form-control" value="<?php echo $data[0][0]; ?>" readonly name="utente"/>
    </div>
    <div class="form-group col-sm-4">
      <label>Password</label>
      <input type="password" class="form-control" value="<?php echo $data[0][1]; ?>" required name="password"/>
    </div>
    <div class="form-group col-sm-3">
      <label>Ruolo</label>
      <?php if($data[0][3] == 0) { ?> 
        <input type="text" class="form-control" value="Amministratore" readonly name="ruolo"/>
      <?php }else if($data[0][3] == 1) { ?>
        <input type="text" class="form-control" value="Operatore" readonly name="ruolo"/>
      <?php }else{ ?>
        <input type="text" class="form-control" value="Viewer" readonly name="ruolo"/>
      <?php } ?>
    </div>
    <input type="submit" class="btn btn-secondary col-sm-1" value="Modifica"/>
  </div>
</form>