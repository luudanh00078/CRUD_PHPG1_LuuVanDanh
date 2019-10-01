<?php
//header("quatrinhhoctap.php");
include_once("header.php");
include_once("nav.php");
include_once("../model/entity/learninghistory.php");
?>
<?php
 //var_dump($_POST);
if(isset($_REQUEST["add-student"])){
    $id = $_REQUEST["id"];
    $yearFrom = $_REQUEST["yearFrom"];
    $yearTo = $_REQUEST["yearTo"];
    $schoolName = $_REQUEST["schoolName"];
    $schoolAddress = $_REQUEST["schoolAddress"];
    $idStudent = $_REQUEST["idStudent"];
}
$myFile = fopen("../resource/learninghistory.txt", "a") or die ("cannot open file:" .$myFile);
$line = $id . "#" . $yearFrom . "#" . $yearTo . "#" . $schoolName . "#" . $schoolAddress . "#" . $idStudent ."\n";
//var_dump($line);
fwrite($myFile, $line);


//header("location: quatrinhhoctap.php");
?>
<h1>Thêm đối tượng</h1>
<div class="container-fluid">
	<div class="table-responsive">

    <form method="POST" action="student-add.php">
        <table >
            <tr>
                <td>ID :</td>
                <td><input type="text" name="id" value="" ></td>
            </tr>
            <tr>
                <td>Từ năm :</td>
                <td><input type="text" name="yearFrom" value="" ></td>
            </tr>
            <tr>
                <td>Đến năm :</td>
                <td><input type="text" name="yearTo" value="" ></td>
            </tr>
            <tr>
                <td>Lớp :</td>
                <td><input type="text" name="schoolName" value="" ></td>
            </tr>
            <tr>
                <td>Nơi học :</td>
                <td><input type="text" name="schoolAddress" value="" ></td>
            </tr>
            <tr>
                <td>idStudent :</td>
                <td><input type="text" name="idStudent" value="" ></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="add-student" value="Lưu" ></td>
            </tr>

        </table>

    </form>
    </div>
</div>    
<?php
include_once("footer.php");
?>