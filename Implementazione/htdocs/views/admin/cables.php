  <div class="col-sm-2 nopadding" style="left: 0;">
    <div class="nav flex-column nav-pills bg-dark" role="tablist" aria-orientation="vertical" style="height: 100%;">
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo URL . 'admin/addCable'; ?>">Aggiungi cavo</a>
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo URL . 'admin/devices'; ?>">Dispositivi</a>
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo URL . 'admin/index'; ?>">Utenti</a>
    </div>
  </div>
  <div class="col-sm-10 nopadding">
    <table>
      <tr>
        <th>Cavo</th>
        <th></th>
        <th></th>
      </tr>
        <?php for($i = 0; $i < count($data); $i++) { ?>
          <tr>
            <td><?php echo $data[$i][1]; ?></td>
            <td><a href=<?php echo URL . "admin/modifyCable/" . $data[$i][0]; ?>>Modifica</a></td>
            <td><a href=<?php echo URL . "admin/deleteCable/" . $data[$i][0]; ?>>Elimina</a></td>
          </tr>     
        <?php } ?>
    </table>
  </div>