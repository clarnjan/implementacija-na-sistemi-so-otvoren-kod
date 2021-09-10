<!--welcome-->
<?php
echo "Welcome";
?>

<?php
//tipovi
$i=69;
$s="Hello";
$a=array(1,2,3,4);
echo $i."<br>";
echo $s."<br>";
print_r($a);

//konkatenacija
$myname="Damjan";
$mysurname="Anakiev";
$fullname=$myname." ".$mysurname;
echo "<br>".$fullname."<br>";

//proba na funkcii
$ripka="Malata ripka plivashe brzo";
echo strtoupper($ripka)."<br>";
echo strtolower($ripka)."<br>";
echo ucfirst($ripka)."<br>";
echo ucwords($ripka)."<br>";

//operacii so nizi
$niza = array("programski", "praktikum", "laboratoriski", "vezbi");
$tekst = implode(" ", $niza);
echo $tekst."<br>";;

//nizi
$nizaBroevi=array(2, 5, 6, 10, 41, 24, 32, 9, 16, 19);
$nizaAsc=array("Damjan"=>"Damjan","Anakiev"=>"Anakiev","Blatec"=>"Blatec");
$matrica = array (
    array(4,8,15),
    array(16,23,42),
    array(4,8,15),
    array(16,23,42)
);

//izminuvanje na nizi
$arrlen=count($nizaBroevi);
for($i=0;$i<$arrlen;$i++){
    echo $nizaBroevi[$i].", ";
}

foreach ($nizaBroevi as $x){
    echo $x.", ";
}
foreach($nizaAsc as $x => $val) {
    echo "$x = $val, ";
}

//dodavanje vo nova niza
$novaNiza=array();
foreach ($nizaBroevi as $x){
    if($x>20){
        array_push($novaNiza,$x);
    }
}
echo print_r($novaNiza);

//naoganje na min i max
$maksimum=max($nizaBroevi);
$minimum=min($nizaBroevi);
echo "<br> Maks: ".$maksimum."<br> Min: ".$minimum."<br>";

//dolzina na daden string
$r="PHP is a widely-used general-purpose scripting language that is especially suited for Web development";
$arr=explode(" ",$r);
$posledna=[];
foreach ($arr as $x){
    $key=strlen($x);
    $posledna+=[$key=>$x];
}
foreach($posledna as $x => $val) {
    echo "$x = $val<br>";
}
?>


