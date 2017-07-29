<?php

define("_IEXEC", 1);

chdir('../../');
define("_ROOT", getcwd() . "/");

include "includes/config.php";

$data=$_POST["data"];
$tip=$_POST["tip"];

$stamp=strtotime($data);
if($stamp==false){
    echo "incorect";
} else {
    global $db;
    if($tip == 0){
        $result=  get_evenimente();
    } elseif ($tip == 1) {
        $result=get_evenimente_before($stamp);
    } elseif ($tip == 2) {
        $result=get_evenimente_after($stamp);
    }
    for($i=0;$i<count($result);$i++){
        if(strpos($result[$i]["id_organizatori"],",")){
            $organizatori=  explode(",", $result[$i]["id_oganizatori"]);
            for($j=0;$j<count($organizator);$j++){
                $result[$i]["organizator"][$j]= get_nume_voluntar($organizator[$j]);
            }
        } else {
            $result[$i]["organizatori"][0]=get_nume_voluntar($result[$i]["id_organizatori"]);
        }
        if(strpos($result[$i]["id_voluntari"],",")){
            $voluntari= explode(",",$result[$i]["id_voluntari"]);
            for($j=0;$j<count($voluntari);$j++){
                $result[$i]["voluntari"][$j]=get_nume_voluntar($voluntari[$j]);
            }
        } else {
            $result[$i]["voluntari"][0]=  get_nume_voluntar($voluntari[$i]["id_voluntari"]);
        }        
    }
    echo json_encode($result);
}
