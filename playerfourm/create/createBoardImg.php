<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE aBoardImg (";
    $sql .= "aBoardImgID tinyint(3) NOT NULL AUTO_INCREMENT,";
    $sql .= "aBoardID int(10) NOT NULL,";
    $sql .= "image_type varchar(25) NOT NULL,";
    $sql .= "image longblob NOT NULL,";
    $sql .= "image_size varchar(255) NOT NULL,";
    $sql .= "boardFile varchar(100) NOT NULL,";
    $sql .= "PRIMARY KEY (aBoardImgID) ) ENGINE=MyISAM DEFAULT CHARSET=utf8;";

    $result = $connect -> query($sql);

    if($result) {
        echo "Create Board table true";
    } else {
        echo "Create Board table false";
    }

?>