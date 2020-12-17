<!doctype html>
<html>

<head>
  <title>Gestionale</title>
  <link href="<?php echo URL; ?>/views/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script href="<?php echo URL; ?>/views/bootstrap/js/bootstrap.min.js"></script>
  <script href="<?php echo URL; ?>/views/bootstrap/popper.min.js"></script>
  <script href="<?php echo URL; ?>/views/bootstrap/jquery.min.js"></script>
  <style>
  footer {
    width: 100%;
    text-align: center;
  }
  table {
    border-collapse: collapse;
    width: 100%;
  }
  th, td {
    text-align: left;
    padding: 8px;
  }
  tr {
    border: 1px solid black;
  }
  tr:nth-child(even) {background-color: #e6e6e6;}
  .nopadding {
    padding: 0 !important;
    margin: 0 !important;
  }
  </style>
</head>

<body>
  <?php Session::init(); ?>
  <nav class="navbar navbar-inverse bg-dark navbar-dark">
    <div class="container-fluid">
      <div class="navbar-brand"><?php echo Session::get('user'); ?></div>
      <ul class="nav navbar-nav navbar-right">
        <?php if(Session::get('role') == 0) {?>
        <li><a class="nav-link" href="<?php echo URL; ?>admin/logout">Logout</a></li>
        <?php }else if(Session::get('role') == 1) {?>
        <li><a class="nav-link" href="<?php echo URL; ?>operator/logout">Logout</a></li>
        <?php }else{?>
        <li><a class="nav-link" href="<?php echo URL; ?>viewer/logout">Logout</a></li>
        <?php } ?>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row" style="height: 100vh">