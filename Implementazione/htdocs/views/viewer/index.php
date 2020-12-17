  <div class="col-sm-12 nopadding">
    <table>
      <tr>
        <th>Posizione</th>
        <th>Modello</th>
        <th>Etichetta</th>
        <th>Numero porte</th>
        <th></th>
      </tr>
        <?php for($i = 0; $i < count($data); $i++) { ?>
          <tr>
            <td><?php echo $data[$i][1]; ?></td>
            <td><?php echo $data[$i][2]; ?></td>
            <td><?php echo $data[$i][3]; ?></td>
            <td><?php echo $data[$i][4]; ?></td>
            <td><a href=<?php echo URL . "viewer/showSwitchLinks/" . $data[$i][0]; ?>>Gestisci</a></td>
          </tr>     
        <?php } ?>
    </table>
  </div>