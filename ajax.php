<?php

  header('Content-type: text/html; charset=utf-8');
  require_once('inc.php');

  if(isset($_REQUEST['block'])){$block = $_REQUEST['block'];}else{$block = 'none';}

  /////////////////////////////////////////////////
  //  TS3
  /////////////////////////////////////////////////

  if($block == 'ts3'){
    echo ts3();
  }

  /////////////////////////////////////////////////
  //  METEO
  /////////////////////////////////////////////////

  if($block == 'meteo'){
    echo meteo();
  }

  /////////////////////////////////////////////////
  //  PING
  /////////////////////////////////////////////////

  if($block == 'ping'){
    echo shell_exec('php5 fork.php');
  }

  /////////////////////////////////////////////////
  //  VPN PPTPD
  /////////////////////////////////////////////////

  if($block == 'vpn'){
    echo vpn();
  }

  /////////////////////////////////////////////////
  //  IFSTAT
  /////////////////////////////////////////////////

  if($block == 'ifstat'){
    imagickHisto ($_REQUEST['max'], $_REQUEST['eth'], $_REQUEST['up_down']);
  }



?>
