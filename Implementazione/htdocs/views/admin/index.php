  <div class="col-sm-2 nopadding" style="left: 0;">
    <div class="nav flex-column nav-pills bg-dark" role="tablist" aria-orientation="vertical" style="height: 100%;">
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo URL . 'admin/addUser'; ?>">Aggiungi utente</a>
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo URL . 'admin/devices'; ?>">Dispositivi</a>
      <a class="nav-link text-center text-secondary" data-toggle="pill" role="tab" href="<?php echo URL . 'admin/cables'; ?>">Cavi</a>
    </div>
  </div>
  <div class="col-sm-10 nopadding">
    <table>
      <tr>
        <th>Nome Utente</th>
        <th>Password</th>
        <th>Ruolo</th>
        <th></th>
        <th></th>
      </tr>
        <?php for($i = 0; $i < count($data); $i++) { ?>
          <tr>
            <td><?php echo $data[$i][0]; ?></td>
            <td><?php echo $data[$i][1]; ?></td>
            <td><?php echo $data[$i][4]; ?></td>
            <td>
              <?php if(!(strcmp($data[$i][0], "Amministratore") == 0 || strcmp($data[$i][0], "Operatore") == 0 || strcmp($data[$i][0], "Viewer") == 0 || strcmp($data[$i][0], Session::get('user')) == 0)) { ?>
                <a href=<?php echo URL . "admin/modifyUser/" . $data[$i][0]; ?>>Modifica</a>
              <?php }else{ ?>
                <a href=<?php echo URL . "admin/modifyMainUser/" . $data[$i][0]; ?>>Modifica</a>
              <?php } ?>
            </td>
            <td>
              <?php if(!(strcmp($data[$i][0], "Amministratore") == 0 || strcmp($data[$i][0], "Operatore") == 0 || strcmp($data[$i][0], "Viewer") == 0 || strcmp($data[$i][0], Session::get('user')) == 0)) { ?>
                <a href=<?php echo URL . "admin/deleteuser/" . $data[$i][0]; ?>>Elimina</a>
              <?php } ?>
            </td>
          </tr>     
        <?php } ?>
    </table>
  </div>