<?php
header("quatrinhhoctap.php");
include_once("../model/entity/learninghistory.php");
$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
//var_dump($id);
if($id){
    
    $lines = file("../resource/learninghistory.txt",FILE_IGNORE_NEW_LINES);
    $fo = fopen("../resource/filefake.txt","w");    
    foreach ($lines as $key => $value) {
        $arr = explode("#",$value);
        if($arr[0]!=$id)
            fwrite($fo,$arr[0]."#".$arr[1]."#".$arr[2]."#".$arr[3]."#".$arr[4]."#".$arr[5]."\n");  
    }
    fclose($fo); 
    $lines1 = file("../resource/filefake.txt",FILE_IGNORE_NEW_LINES);
    $fo2 = fopen("../resource/learninghistory.txt","w"); 
    foreach ($lines1 as $key => $value) {
        $arr1 = explode("#",$value);
            fwrite($fo2,$arr1[0]."#".$arr1[1]."#".$arr1[2]."#".$arr1[3]."#".$arr1[4]."#".$arr[5]."\n");  
    }
    fclose($fo2);  
}

header("location: quatrinhhoctap.php");
?>
