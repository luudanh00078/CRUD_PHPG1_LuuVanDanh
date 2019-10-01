<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body> -->
    <?php
    include_once("header.php");
    ?>
    <?php include_once 'nav.php'; ?>
<form accept="index2.php" method="get">
        <input type="text" name="numb1" placeholder="số a" value="<?php echo $_REQUEST["numb1"]?>" id="">
        <input type="text" name="numb2" placeholder="số b" value="<?php echo $_REQUEST["numb2"]?>"id="">
        <select name="operator" id="">
            <option value="none"> Vui lòng chọn  </option>
            <option value="add">Cộng</option>
            <option value="sub">Trừ</option>
            <option value="mul">Nhân </option>
            <option value="dic">Chia</option>
        </select>
        <button name="submit">Tính</button>
    </form>
    <?php
        //include_once 'nav.php ';
        //var_dump($_GET);    
        if(isset($_GET["submit"])){
            $a = $_GET["numb1"];
            $b = $_GET["numb2"];
            $op = $_GET["operator"];
            $rs=0;
            switch ($op) {
                case 'add':
                    # code...
                    $rs = $a + $b;
                    break;
                case 'sub':
                    # code...
                    $rs = $a - $b;
                    break;
                case 'mul':
                    # code...
                    $rs = $a * $b;
                    break;
                case 'dic':
                    # code...
                    $rs = $a / $b;
                    break;
                default:
                    # code...
                    echo "Vui lòng chọn phép tính <br>";
                    break;
            }
            echo "Kết quả $rs";
        }
    ?>
<?php
include_once("footer.php");
?>
<!-- 
</body>
</html> -->