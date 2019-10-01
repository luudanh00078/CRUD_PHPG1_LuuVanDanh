<?php
include_once("header.php");
include_once("nav.php");
include_once("../model/entity/learninghistory.php");

$id = isset($_GET['id']) ? (int)$_GET['id'] : '';
if($id){
        $rsFromFileId = LearningHistory::getListFromFileId($id);
       // var_dump($rsFromFileId);
        //hiển thị dữ liệu ra form 
        
        foreach($rsFromFileId as $key => $value){
        $id = $value->id;
        $yearFrom = $value->yearFrom;
        $yearTo = $value->yearTo;
        $schoolName = $value->schoolName;
        $schoolAddress = $value->schoolAddress;
        $idStudent = $value->idStudent;
    
        }
    }
    //var_dump($_REQUEST);
if(isset($_REQUEST['edit-submit'])){
        //$id = $_REQUEST["id"];
        $id = isset($_REQUEST['id']) ? $_REQUEST['id'] : '';
        $yearFrom = isset($_REQUEST['yearFrom']) ? $_REQUEST['yearFrom'] : '';
        $yearTo = isset($_REQUEST['yearTo']) ? $_REQUEST['yearTo'] : '';
        $schoolName = isset($_REQUEST['schoolName']) ? $_REQUEST['schoolName'] : '';
        $schoolAddress = isset($_REQUEST['schoolAddress']) ? $_REQUEST['schoolAddress'] : '';
        $idStudent = isset($_REQUEST['idStudent']) ? $_REQUEST['idStudent'] : '';

    

        $myFile = file("../resource/learninghistory.txt",FILE_IGNORE_NEW_LINES);
        $fo1 = fopen("../resource/filefake.txt","w");
        foreach($myFile as $key => $value){
            $arr2 = explode("#",$value);
            if($arr2[0]!=$id)
            fwrite($fo1,$arr2[0]."#".$arr2[1]."#".$arr2[2]."#".$arr2[3]."#".$arr2[4]."#".$arr2[5]."\n"); 
        }
        fwrite($fo1,$id."#".$yearFrom."#".$yearTo."#".$schoolName."#".$schoolAddress."#".$idStudent."\n");
        fclose($fo1);
        $myFile1 = file("../resource/filefake.txt",FILE_IGNORE_NEW_LINES);
        $fo = fopen("../resource/learninghistory.txt","w");
        foreach($myFile1 as $key => $value){
            $arr1 = explode("#",$value);
            fwrite($fo,$arr1[0]."#".$arr1[1]."#".$arr1[2]."#".$arr1[3]."#".$arr1[4]."#".$arr1[5]."\n");
        }
        fclose($fo);


        //$line = $id . "#" . $yearFrom . "#" . $yearTo . "#" . $schoolName . "#" . $schoolAddress . "#" . $idStudent ."\n";
        //var_dump($line);
        //fwrite($myFile, $line);
}

?>


<h1>Sửa đối tượng</h1>
<div class="container-fluid">
	<div class="table-responsive">

    <form method="POST" action="student-edit.php">
        <table >

            <tr>
                <td>ID :</td>
                <td><input type="text" name="id" value="<?php echo $id; ?>" ></td>
            </tr>
            <tr>
                <td>Từ năm :</td>
                <td><input type="text" name="yearFrom" value="<?php echo $yearFrom; ?>" ></td>
            </tr>
            <tr>
                <td>Đến năm :</td>
                <td><input type="text" name="yearTo" value="<?php echo $yearTo?>" ></td>
            </tr>
            <tr>
                <td>Lớp :</td>
                <td><input type="text" name="schoolName" value="<?php echo $schoolName?>" ></td>
            </tr>
            <tr>
                <td>Nơi học :</td>
                <td><input type="text" name="schoolAddress" value="<?php echo $schoolAddress?>" ></td>
            </tr>
            <tr>
                <td>idStudent :</td>
                <td><input type="text" name="idStudent" value="<?php echo $idStudent?>" ></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="edit-submit" value="Lưu" ></td>
            </tr>

        </table>

    </form>
    </div>
</div> 
<?php
include_once("footer.php");
?>