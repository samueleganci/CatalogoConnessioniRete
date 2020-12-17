<form class="col-12" method="post" action="<?php echo URL . "admin/changeUser"; ?>">
  <input type="hidden" value="<?php echo $data[0][0]; ?>" name="vecchioUtente">
  <input type="hidden" value="<?php echo $data[0][1]; ?>" name="vecchiaPassword">
  <div class="row">
    <div class="form-group col-sm-4">
      <label>Nome utente</label>
      <input type="text" class="form-control" value="<?php echo $data[0][0]; ?>" required name="utente"/>
    </div>
    <div class="form-group col-sm-4">
      <label>Password</label>
      <input type="password" class="form-control" value="<?php echo $data[0][1]; ?>" required name="password"/>
    </div>
    <div class="form-group col-sm-3">
      <label for="sel">Ruolo</label>
      <select class="form-control" id="sel" name="ruolo">
        <option value="0" <?php if($data[0][3] == 0) { echo "selected"; } ?>>Amministratore</option>
        <option value="1" <?php if($data[0][3] == 1) { echo "selected"; } ?>>Operatore</option>
        <option value="2" <?php if($data[0][3] == 2) { echo "selected"; } ?>>Viewer</option>
      </select>
    </div>
    <input type="submit" class="btn btn-secondary col-sm-1" value="Modifica"/>
  </div>
</form>
