  <div class="col-sm-2 nopadding" style="left: 0;">
    <div class="nav flex-column nav-pills bg-dark" role="tablist" aria-orientation="vertical" style="height: 100%;">
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo URL . 'admin/addDevice'; ?>">Aggiungi dispositivo</a>
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo URL . 'admin/index'; ?>">Utenti</a>
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo URL . 'admin/cables'; ?>">Cavi</a>
    </div>
  </div>
  <div class="col-sm-10 nopadding">
    <table>
      <tr>
        <th>Dispositivo</th>
        <th></th>
        <th></th>
      </tr>
        <?php for($i = 0; $i < count($data); $i++) { ?>
          <tr>
            <td><?php echo $data[$i][1]; ?></td>
            <td><a href=<?php echo URL . "admin/modifyDevice/" . $data[$i][0]; ?>>Modifica</a></td>
            <td><a href=<?php echo URL . "admin/deleteDevice/" . $data[$i][0]; ?>>Elimina</a></td>
          </tr>     
        <?php } ?>
    </table>
  </div>