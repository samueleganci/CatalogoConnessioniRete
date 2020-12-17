<div class="col-sm-2 nopadding" style="left: 0;">
    <div class="nav flex-column nav-pills bg-dark" role="tablist" aria-orientation="vertical" style="height: 100%;">
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo URL . 'operator/addSwitch'; ?>">Aggiungi switch</a>
    </div>
  </div>
  <div class="col-sm-10 nopadding">
    <table>
      <tr>
        <th>Posizione</th>
        <th>Modello</th>
        <th>Etichetta</th>
        <th>Numero porte</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
        <?php for($i = 0; $i < count($data); $i++) { ?>
          <tr>
            <td><?php echo $data[$i][1]; ?></td>
            <td><?php echo $data[$i][2]; ?></td>
            <td><?php echo $data[$i][3]; ?></td>
            <td><?php echo $data[$i][4]; ?></td>
            <td><a href=<?php echo URL . "operator/showSwitchLinks/" . $data[$i][0]; ?>>Gestisci</a></td>
            <td><a href=<?php echo URL . "operator/modifySwitch/" . $data[$i][0]; ?>>Modifica</a></td>
            <td><a href=<?php echo URL . "operator/deleteSwitch/" . $data[$i][0]; ?>>Elimina</a></td>
          </tr>     
        <?php } ?>
    </table>
  </div>