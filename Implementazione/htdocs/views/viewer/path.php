<form class="col-12" method="post" action="<?php echo URL . "viewer/saveFile/" . $data; ?>">
  <div class="row">
    <div class="form-group col-sm-11">
      <label>Percorso dove salvare il file csv</label>
      <input type="text" class="form-control" name="path"/>
        <?php if($data2 == 404) { echo "Il percorso non esiste."; } ?>
    </div>
    <input type="submit" class="btn btn-secondary col-sm-1" value="Salva"/>
  </div>
</form>