<div class="col-sm-2 nopadding" style="left: 0;">
    <div class="nav flex-column nav-pills bg-dark" role="tablist" aria-orientation="vertical" style="height: 100%;">
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo URL . 'viewer' ?>">Switches</a>
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo "/output/" . $data2[0][0] . ".csv"; ?>" download>Scarica lista</a>
    </div>
  </div>
  <div class="col-sm-10 nopadding">
    <table>
      <tr>
        <th>Etichetta switch</th>
        <th>Numero di porta</th>
        <th>Cavo utilizzato</th>
        <th>Dispositivo</th>
      </tr>
        <?php for($i = 0; $i < count($data); $i++) { ?>
          <tr>
            <td><?php echo $data2[0][0];?></td>
            <td><?php echo $data[$i][1]; ?></td>
            <td><?php echo $data[$i][5]; ?></td>
            <td><?php echo $data[$i][7]; ?></td>
          </tr>     
        <?php } ?>
    </table>
  </div>