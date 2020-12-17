<div class="col-sm-2 nopadding" style="left: 0;">
    <div class="nav flex-column nav-pills bg-dark" role="tablist" aria-orientation="vertical" style="height: 100%;">
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo URL . 'operator' ?>">Switches</a>
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo URL . 'operator/addLink/' . $data2; ?>">Aggiungi Collegamento</a>
    </div>
  </div>
  <div class="col-sm-10 nopadding">
    <table>
      <tr>
        <th>Numero di porta</th>
        <th>Cavo utilizzato</th>
        <th>Dispositivo</th>
        <th></th>
        <th></th>
      </tr>
        <?php for($i = 0; $i < count($data); $i++) { ?>
          <tr>
            <td><?php echo $data[$i][1]; ?></td>
            <td><?php echo $data[$i][5]; ?></td>
            <td><?php echo $data[$i][7]; ?></td>
            <td><a href=<?php echo URL . "operator/modifyLink/" . $data2 . "/" . $data[$i][1]; ?>>Modifica</a></td>
            <td><a href=<?php echo URL . "operator/deleteLink/" . $data2 . "/" . $data[$i][1]; ?>>Elimina</a></td>
          </tr>     
        <?php } ?>
    </table>
  </div>