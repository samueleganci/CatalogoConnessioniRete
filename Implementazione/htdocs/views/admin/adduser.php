<form class="col-12" method="post" action="<?php echo URL . "admin/newUser"; ?>">
  <div class="row">
    <div class="form-group col-sm-4">
      <label>Nome utente</label>
      <input type="text" class="form-control" required name="utente"/>
    </div>
    <div class="form-group col-sm-4">
      <label>Password</label>
      <input type="password" class="form-control" required name="password"/>
    </div>
    <div class="form-group col-sm-3">
      <label for="sel">Ruolo</label>
      <select class="form-control" id="sel" name="ruolo">
        <option value="0">Amministratore</option>
        <option value="1">Operatore</option>
        <option value="2">Viewer</option>
      </select>
    </div>
    <input type="submit" class="btn btn-secondary col-sm-1" value="Aggiungi"/>
  </div>
</form>