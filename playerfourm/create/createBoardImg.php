<?php
    include "../connect/connect.php";

    $sql = "CREATE table ABoardImg(";
    $sql .= "ABoardImgID int(10) unsigned NOT NULL AUTO_INCREMENT,";
    $sql .= "ABoardID int(10) NOT NULL,";
    $sql .= "ImgTitle varchar(50) NOT NULL,";
    $sql .= "ImgWidth SMALLINT(6) NOT NULL,";
    $sql .= "ImgHeight SMALLINT(6)  NOT NULL,";
    $sql .= "ImgSize int(10)  NOT NULL,";
    $sql .= "regTime int(15) unsigned NOT NULL,";
    $sql .= "PRIMARY KEY (ABoardImgID)) CHARSET=utf8;";

    $result = $connect -> query($sql);

    if($result) {
        echo "Create Board table true";
    } else {
        echo "Create Board table false";
    }

?>