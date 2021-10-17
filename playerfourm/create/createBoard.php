<?php
    include "../connect/connect.php";

    $sql = "CREATE table aBoard(";
    $sql .= "aBoardID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "aMemberID int(10) NOT NULL,";
    $sql .= "boardTitle varchar(50) NOT NULL,";
    $sql .= "boardContent longtext NOT NULL,";
    $sql .= "boardView int(10) unsigned NOT NULL,";
    $sql .= "boardFile varchar(100),";
    $sql .= "regTime int(15) unsigned NOT NULL,";
    $sql .= "PRIMARY KEY (aBoardID)) CHARSET=utf8;";

    $result = $connect -> query($sql);

    if($result) {
        echo "Create Board table true";
    } else {
        echo "Create Board table false";
    }

?>