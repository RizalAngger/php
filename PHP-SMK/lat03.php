<?php 

    

    function belajar(){
        echo "Saya Belajar PHP";
    }
    belajar();
    echo '<br>';

    function luaspersegi($p =5,$l = 3){
        $luas = $p * $l;

        echo $luas;
    }
    luaspersegi();
    echo '<br>';


    function luas($p =5, $l = 3){
        $luas = $p * $l;

        echo $luas;
    }
    luas();

    function output(){
        return " belajar function";
    }

    echo '<br>';
    echo luas(100,3) * 5;
?>