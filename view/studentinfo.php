
    <?php
      include_once("header.php");
    ?>
<?php
    include_once('nav.php');
?>
    <?php
    include_once("../model/entity/student.php");
    $maSinhVien = $ho = $ten = $ngaySinh = $email = "" ;
     //var_dump($_SERVER);
     if($_SERVER["REQUEST_METHOD"] == "POST"){
         $maSinhVien = $_REQUEST["txtMaSinhVien"];
         $ho = $_REQUEST["txtHo"];
         $ten = $_REQUEST["txtTen"];
         $ngaySinh = $_REQUEST["tdateNgaySinh"];
         $email = $_REQUEST["txtEmail"];
         $student = new Student($ho, $ten, $ngaySinh, $email);
         $student->display();
         //var_dump($_FILES);
         if($_FILES["fileAnhDaiDien"]["name"] != "")
         {
             //đoạn code lưu ảnh vào ..
            move_uploaded_file($_FILES["fileAnhDaiDien"]["tmp_name"], "../upload/avarta.jpg");

           //echo " chuc mung ban da thanh cong";

         }else
         {
            echo " chuc mung ban da khong thanh cong";
         }
     
     //var_dump($ngaySinh);
     //$email = filter_var($email, FILTER_VALIDATE_EMAIL);
     //validate email
    //  if(filter_var($email, FILTER_VALIDATE_EMAIL)){
    //      echo "chuc mung email hop le";
    //  }
    //  else{
    //      echo " Xin loi email khong hop le";
    //  }
    }
    ?>

    <form method="POST" enctype="multipart/form-data"> 
        <div class="formEnterData">
            
            <div>
                <label for="">Anh dai dien: </label>
            </div>
            <div>
                <input required  type="file" name="fileAnhDaiDien" value="" >
            </div>
            <div>
                <label for="">Mã SInh Viên: </label>
            </div>
            <div>
                <input required  type="text" name="txtMaSInhVien" value="<?php echo $maSinhVien ;?>" >
            </div>
            <div>
                <label for="">Họ:</label>
            </div>
            <div>
                <input required type="text" name="txtHo" value="<?php echo $ho ; ?>">
            </div>
            <div>
                <label for="">Tên:</label>
            </div>
            <div>
                <input type="text" name="txtTen" value="<?php echo $ten ; ?>">
            </div>
            <div>
                <label for="">Ngày Sinh:</label>
            </div>
            <div>
                <input type="date" name="dateNgaySinh" value="<?php echo $ngaySinh ;?>">
            </div>
            <div>
                <label for="">Email:</label>
            </div>
            <div>
                <input type="text" name="txtEmail" value="<?php echo $email ; ?>">
            </div>
            <div>
                
            <input type="submit" name="submit" value="Lưu" >
            </div>

        </div>
    </form>
    <?php
    include_once("footer.php");
    ?>
<!-- </body>
</html> -->