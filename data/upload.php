<?php
  header('Access-Control-Allow-Origin: *');
  require_once('./conn.php');
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if( (($_FILES["file"]["type"] == "image/gif")
    || ($_FILES["file"]["type"] == "image/jpeg")
    || ($_FILES["file"]["type"] == "image/png")
    || ($_FILES["file"]["type"] == "image/pjpeg"))
    && $_FILES["file"]["size"] < 500000) {
      if($_FILE["file"]["error"] > 0) {
        echo "Error: ".$_FILE["file"]["error"];
      } else {
        $stat = $pdo->query("SELECT MAX(id) as mid FROM biaoqings");
        $row = $stat->fetch(PDO::FETCH_ASSOC);
        $maxid = $row['mid'];
        if (file_exists("../upload/". $maxid . "." . $_FILES["file"]["type"])) {

        } else {
          $stat = $pdo->prepare("INSERT INTO biaoqings(subfix) VALUES(:subfix)");
          $newid = $maxid + 1;
          $uptype = explode(".", $_FILES["file"]["name"]);
          $stat->bindParam(":subfix", $uptype[1]);
          $stat->execute();
          $newName = $newid.".".$uptype[1];
          move_uploaded_file($_FILES["file"]["tmp_name"], "../upload/".$newName);
          echo $newName;
        }
        // echo $_FILES["file"]["name"];
      }
    }
  } else {
    echo $_SERVER['REQUEST_METHOD'];
  }
