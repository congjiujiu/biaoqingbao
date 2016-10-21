<?php
  header("Access-Control-Allow-Origin: *");
  require_once('./conn.php');
  $stat = $pdo->query("SELECT id,subfix FROM biaoqings");
  $res = array();
  while($row = $stat->fetch(PDO::FETCH_ASSOC)) {
    $item = array(
      "id" => $row['id'],
      "subfix" => $row['subfix']
    );
    array_push($res, $item);
  }
  echo json_encode($res);
