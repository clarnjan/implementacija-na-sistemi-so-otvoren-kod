<?php
    $numericko=[2, 5, 6, 10, 41, 24, 32, 9, 16, 19];
    $asociativno=["Damjan"=>"Damjan","Anakiev"=>"Anakiev","Blatec"=>"Blatec"];
    $povekedimenzionalno=[[1,2,3],[1,2,3]];
    foreach ($numericko as $key=>$value)
    {
        echo $value." ";
    }
    echo "<br>";
    $pogolemiOd20=[];
    foreach ($numericko as $key=>$value)
    {
        if ($value>20){
            array_push($pogolemiOd20,$value);
        }
    }
    $str="PHP is a widely-used general-purpose scripting language that is especially suited for Web development";
    $eks=explode(" ",$str);
    $krajna=[];
    foreach ($eks as $key=>$value){
        $krajna[$value]=strlen($value);
    }
?>