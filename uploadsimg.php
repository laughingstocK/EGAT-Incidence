<?php
function upimg($img,$imglocate){
            if($img['name']!=''){
            $fileupload1=$img['tmp_name'];
            $g_img=explode(".",$img['name']);
            $file_up=time().".".$g_img[1]; 
                if($fileupload1){
                    $array_last=explode(".",$file_up);
                    $c=count($array_last)-1;
                    $lastname=strtolower($array_last[$c]);
                        @copy($fileupload1,$imglocate.$file_up);            
                         
                }               
            }
            return $file_up;
}
?>



<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <input type="file" name="file" />
  <input type="submit" name="Submit" value="Submit" />
</form>
<?php
    if($_POST['Submit']){
        if($_FILES['file']['name']!=""){
            $my_filename=upimg($_FILES['file'],"images/");
            echo $my_filename; // แสดงชื่อไฟล์ที่อัพโหลด
        }
    }
?>

                        <form action="welcome.php" method="post" name="form1">
			<input type="hidden" name="personal_id" value="<? echo $my_filename; ?>" />
			<input id="btn_add" name="btnSubmit" type="submit" class="btn btn-primary" value="ตกลง" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<!-- ปุ่ม Back-->    
                        <a class="btn btn-danger" href="index.php" role="button">ย้อนกลับ</a>
			</form>