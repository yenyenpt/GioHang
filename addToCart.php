<?php
    session_start();
    $sanPham = [
        [
            "id"=>1,
            "tenSP" => "cay",
            "giaTien" => "12000"
        ],
        [
            "id"=>2,
            "tenSP" => "banh",
            "giaTien" => "14000"
        ],
        [
            "id"=>3,
            "tenSP" => "ban",
            "giaTien" => "120"
        ],
        [
            "id"=>1,
            "tenSP" => "sua",
            "giaTien" => "1900"
        ],
    ];
    if(isset($_GET["id"])){
        $id = $_GET["id"];
    }
    if(empty($_SESSION["cart"][$id])){
        foreach($sanPham as $value){
            if($value["id"]==$id){
                $SP = $value;
                break;
            }
        }
        $_SESSION["cart"][$id]["tenSP"] = $SP["tenSP"];
        $_SESSION["cart"][$id]["giaTien"] = $SP["giaTien"];
        $_SESSION["cart"][$id]["id"] = $SP["id"];
        header("location: ./index.php");
    }else{
        header("location: ./index.php");

    }

?>