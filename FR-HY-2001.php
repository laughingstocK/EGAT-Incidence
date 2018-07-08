<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FR-HY-2001</title>
</head>
<body>
<?php
require_once __DIR__ . '/vendor/autoload.php';


$mpdf = new \Mpdf\Mpdf([
    'default_font_size' => 14.5,
    'default_font' => 'saraban'
]);
ob_start();
$mpdf->SetImportUse();
$mpdf->SetDocTemplate('report.pdf',true);





$switch_case = $_POST['dest_email'];
switch ($switch_case) {
  case 'waiwit.s@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>ส่วนกลางเขื่อนวชิราลงกรณ</p></div>';
    break;
  case 'kerkieat@gmail.com':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกรักษาความปลอดภัย (หรว-ฟ.)</p></div>';
    break;
  case 'som.k@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกประชาสัมพันธ์และชุมชนสัมพันธ์ (หปว-ฟ.)</p></div>';
    break;
  case 'chaiya.s@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงาน (หปอว-ฟ.)</p></div>';
    break;
  case 'pongpan.p@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>กองเดินเครื่อง (กดว-ฟ.)</p></div>';
    break;
  case 'wiphot.s@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกเดินเครื่องกะ 1 (หดว1-ฟ.)</p></div>';
    break;
  case 'tawatchai.w@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกเดินเครื่องกะ 2 (หดว2-ฟ.)</p></div>';
    break;
  case 'chatchawan.w@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกเดินเครื่องกะ 3 (หดว3-ฟ.)</p></div>';
    break;
  case 'wirat.p@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกเดินเครื่องกะ 4 (หดว4-ฟ.)</p></div>';
    break;
  case 'armud.p@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกประสิทธิภาพ (หภว-ฟ.)</p></div>';
    break;
  case 'apirak.t@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>กองบำรุงรักษาโรงไฟฟ้า (กบว-ฟ.)</p></div>';
    break;
  case 'thirapong.su@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกวางแผนบำรุงรักษา (หวว-ฟ.)</p></div>';
    break;
  case 'sarun.ph@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกบำรุงรักษาเครื่องกล (หบว-ฟ.)</p></div>';
    break;
  case 'veeraphon.s@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกบำรุงรักษาไฟฟ้า (หฟว-ฟ.)</p></div>';
    break;
  case 'manop.ni@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกโรงงาน (หงว-ฟ.)</p></div>';
    break;
  case 'chanchai.pa@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>กองบำรุงรักษาโยธา (กยว-ฟ.)</p></div>';
    break;
  case 'payongsak.t@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกบำรุงรักษาอาคาร (หอว-ฟ.)</p></div>';
    break;
  case 'amnuaiy.k@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกบำรุงรักษาบริเวณ (หบบว-ฟ.)</p></div>';
    break;
  case 'piti.p@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกบำรุงรักษาทั่วไป (หทว-ฟ.)</p></div>';
    break;
  case 'pattanapong.p@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกบำรุงรักษาเขื่อนและอาคารโรงไฟฟ้า (หขว-ฟ.)</p></div>';
    break;
  case 'surapol.k@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>กองบริหาร (กบหว-ฟ.)</p></div>';
    break;
  case 'somchai.kr@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกธุรการและบริการ (หธบว-ฟ.)</p></div>';
    break;
  case 'chatchai.sh@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกงานบุคคล (หงคว-ฟ.)</p></div>';
    break;
  case 'phiphop.s@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกจัดหา (หจว-ฟ.)</p></div>';
    break;
  case 'khrongtham.sr@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกพัสดุ (หพว-ฟ.)</p></div>';
    break;
  case 'patsaporn.lor@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกสุขภาพอนามัย (หสอว-ฟ.)</p></div>';
    break;
  case 'lawan.a@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกบัญชีและการเงินเขื่อนวชิราลงกรณ (หบขว-บ.)</p></div>';
    break;
  case 'sittisak.c@egat.co.th':
    $to = '<div style="position:absolute;top:172px;left:125px"><p>แผนกบัญชีเจ้าหนี้เขื่อนวชิราลงกรณ (หจขว-บ.)</p></div>';
    break;
}

$report_date = '<div style="position:absolute;top:195px;left:140px"><p>'.$_POST['report_date'].'</p></div>';
$name = '<div style="position:absolute;top:219px;left:130px"><p>'.$_POST['name'].'</p></div>';
$acedent = '<div style="position:absolute;top:205px;left:204px;font-size:40px"><p>•</p></div>';
$incidence = '<div style="position:absolute;top:205px;left:378px;font-size:40px"><p>•</p></div>';
$position = '<div style="position:absolute;top:219px;left:350px"><p>&nbsp;&nbsp;'.$_POST['position'].'</p></div>';
$sangkat = '<div style="position:absolute;top:219px;left:460px"><p>'.$_POST['sangkat'].'</p></div>';
$call = '<div style="position:absolute;top:219px;left:580px"><p>'.$_POST['call'].'</p></div>';
$event_date = '<div style="position:absolute;top:265px;left:190px"><p>'.$_POST['event_date'].'</p></div>';
$event_time = '<div style="position:absolute;top:265px;left:350px"><p>'.$_POST['event_time'].'</p></div>';
$place = '<div style="position:absolute;top:265px;left:490px"><p>&nbsp;&nbsp;'.$_POST['place'].'</p></div>';
$description = '<div style="line-height:1.2;height:900px;width:645px;position:absolute;top:311px;left:90px"><p>'.$_POST['description'].'</p></div>';
$people = '<div style="position:absolute;top:426px;left:220px"><p>&nbsp;&nbsp;&nbsp;&nbsp;'.$_POST['people'].'</p></div>';
$value = '<div style="position:absolute;top:426px;left:540px"><p>'.$_POST['value'].'</p></div>';
$lost = '<div style="position:absolute;top:448px;left:350px"><p>'.$_POST['lost'].'</p></div>';
$unwanted = '<div style="position:absolute;top:471px;left:330px"><p>'.$_POST['unwanted'].'</p></div>';
$other = '<div style="position:absolute;top:494px;left:220px"><p>'.$_POST['other'].'</p></div>';  
$after = '<div style="line-height:1.2;height:900px;width:645px;position:absolute;top:540px;left:90px"><p>'.$_POST['after'].'</p></div>';
$signature = '<div style="position:absolute;top:838px;left:560px"><p>'.$_POST['name'].'</p></div>';
$copyright = '<div style="position:absolute; font-size:15px;top:1070px;left:497px"><p>Copyright:กลุ่มงานดิจิทัลเขื่อนวชิราลงกรณ โทร 2040-44</p></div>';

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

if($_POST['submit']){ // submit form
if($_FILES['file']['name']!=""){ //upload name
  $my_filename=upimg($_FILES['file'],"images/");
  $image = '<div style="position:absolute;left:90px;top:675px;height:900px;width:645px;"><img src="images/'.$my_filename.'" style="width:220px;"/></div>';
  $mpdf->WriteHTML($image);
    }
}




$mpdf->WriteHTML($to);
$mpdf->WriteHTML($report_date);
$mpdf->WriteHTML($name);
$mpdf->WriteHTML($position);
$mpdf->WriteHTML($sangkat);
$mpdf->WriteHTML($call);
// if($_POST['customRadioInline1'] == "acedent")
	// $mpdf->WriteHTML($acedent);
// else if($_POST['customRadioInline1'] == "incidence")
	$mpdf->WriteHTML($incidence);
$mpdf->WriteHTML($event_date);
$mpdf->WriteHTML($event_time);
$mpdf->WriteHTML($place);
$mpdf->WriteHTML($description);
$mpdf->WriteHTML($people);
$mpdf->WriteHTML($value);
$mpdf->WriteHTML($lost);
$mpdf->WriteHTML($unwanted);
$mpdf->WriteHTML($other);
$mpdf->WriteHTML($after);
$mpdf->WriteHTML($signature);
$mpdf->WriteHTML($copyright);


$html = ob_get_contents();
ob_end_clean();
$send_name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$dest_email = $_POST['dest_email'];
$egat = $username.''."@egat.co.th";

$mpdf->WriteHTML(utf8_encode($html));
$content = $mpdf->Output('', 'S');

$attachment = new Swift_Attachment($content, 'report.pdf', 'application/pdf');


try {
        $transport = (new Swift_SmtpTransport('mail.egat.co.th'))
  ->setUsername($username)
  ->setPassword($password)
  ;

    $mailer = new Swift_Mailer($transport);

$message = (new Swift_Message('รายงานการเกิดอุบัติเหตุ/อุบัติการณ์'))
  ->setFrom([$egat => $send_name])
  ->setTo($dest_email)
  ->attach($attachment)
  ;

$result = $mailer->send($message);


}catch (Swift_TransportException $e){


echo '<script language="javascript">alert("เลขประจำตัวพนักงาน หรือ รหัสผ่านเข้าใช้งานอีเมลล์ ไม่ถูกต้อง");history.back();</script>';
  die();
}

$mpdf->Output('report.pdf','I');


?>
</body>
</html>