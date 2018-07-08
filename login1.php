<meta http-equiv="content-type" content="text/html; charset=utf-8">

<?php
session_start();
error_reporting(0);
$login_pass=0;

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

	include('config.php');
	conndb();
// --- รับข้อมูลจากหน้า WEB ----//
	$vote_user=trim($_POST['vote_u']);
	$vote_password=$_POST['vote_p'];

	$vote_user=str_replace(array('<', '>', '\\', '/', '=','"','$','%','!','\"','\'','&','*','+','|','(',')'), "", $vote_user); 


//------------------------------------------------
	$sql = "SELECT * FROM person WHERE id = '$vote_user'";
	mysql_query("set NAMES utf8");

    /////////
	//$sql_2 = "SELECT * FROM person  WHERE ID = '$vote_user' ";
    //$result_2 = mysql_query($sql_2);
    //$row_2 = mysql_fetch_array($result_2);
	//$selectvote_id = $row_2['SELECTVOTE'];

	////////
//echo $sql;
//echo "PASSWORD ไม่ถูกต้อง ให้ท่านใช้ PASSWORD ตาม EMAIL";
	$vote_err="PASSWORD ไม่ถูกต้อง ให้ใช้ PASSWORD ตาม EMAIL";
	$dbquery=mysql_db_query($dbname,$sql);
	$numrows=mysql_numrows($dbquery);
//echo $numrows;
	if ($numrows>0 )
	{
		
		$result=mysql_fetch_array($dbquery);
		$vote_prefix=$result['PREFIX'];
		$vote_name=$result['NAME'];
		$vote_surname=$result['SURNAME'];
		$selectvote_id=$result['SELECTVOTE'];
		//ini_set('display_errors','Off'); 
		include_once("./lib/nusoap.php");
		$client=new soap_client('http://webservices.egat.co.th/authentication/au_provi.php','wsdl');
		$a= $vote_user ;
		$b= $vote_password;
		//$c= $selectvote_id;
		//$para=array("a"=>$a, "b"=>$b "c"=>$c);
		$para=array("a"=>$a, "b"=>$b );
		//$result=$client->call("search_info",$para); // หาชื่อ นาม สกุล
		$result=$client->call("validate_user",$para);



		if($result)

		{

			$login_pass=0;
			$_SESSION['vote_prefix'] = $vote_prefix;
			$_SESSION['vote_name'] = $vote_name;
			$_SESSION['vote_surname'] = $vote_surname;
			$_SESSION['vote_user'] = $vote_user;
			$_SESSION['selectvote_id'] = $selectvote_id;

			if ($selectvote_id == "0")
			{

				$location_url="/votevrk/accept_form.php";
				header ("Location: http://".$_SERVER['HTTP_HOST'].$location_url);	
			}
			else
			{
				
				$vote_err="ท่านได้เลือกบุคลากรต้นแบบแล้ว";

			}

		}
			//----------------ปิดการติดต่อฐานข้อมูล------------------------
		mysql_close();

	}
	else
	{
		$vote_err="USER ไม่ถูกต้องหรือท่านไม่สิทธิ์ให้คะแนน เนื่องจากท่านต้องอายุงานเกิน 3 ปี ขึ้นไป";

	}
}


if ($login_pass==0)
{
	// mode get

	?>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">

	<html>
	<link href="https://fonts.googleapis.com/css?family=Merriweather|Kanit" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<head>
		<title>User Login</title>

		<style type="text/css">
		@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
		@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

		#apDiv1 {
			text-align: center;
			background-color: #536DFE;
			background-position: 50% 50%;
			border-radius:10px;
			margin-left: 25%;
			margin-right: 25%;
			padding: 1%
		}

		.style3{
			text-align: center;
			color: #F5F5F5;
			font-size: 15px;
			font-weight: 200;
			font-family: 'Kanit', sans-serif;
		}
		.style4 {
			text-align: center;
			color: #F5F5F5;
			font-size: 25px;
			font-weight: 200;
			font-family: 'Kanit', sans-serif;
		}

		body{
			margin: 0;
			padding: 0;
			color: #fff;
			font-family: 'Kanit', sans-serif;
			font-size: 12px;
			background-color: #FFECB3;
		}

		h1{
			text-align: center;
			font-family: 'Kanit', sans-serif;

		}
		h3{
			text-align: center;
			font-family: 'Kanit', sans-serif;

		}

		.h0{
			color: #283593;
			text-align: center;
			font-family: 'Merriweather', sans-serif;
			font-size: 35px;
			font-weight: 1000;
		}

		.h1{
			color: blue;
			text-align: center;
			font-family: 'Kanit', sans-serif;
			font-size: 25px;
			font-weight: 200;5
			padding-bottom: 2%
		}

		.h5{
			position: absolute;
			margin-left: -100px;
			margin-top: 10px;
			top: calc(3% - 35px);
			left: calc(105% - 255px);
			z-index: 1;
		}

		.h5 div{
			float: left;
			color: gold;
			text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
			font-family: 'Exo', sans-serif;
			font-size: 30px;
			font-weight: 200;
		}


		input[type=text],select{
			display: inline-block;
			width: 25%;
			padding: 8px 20px;
			margin: 8px 0;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			color: black;
			font-size: 20px;
		}

		input[type=password],select{
			display: inline-block;
			width: 25%;
			padding: 8px 20px;
			margin: 8px 0;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			color: black;
			font-size: 20px;
		}

		.button{
			background-color: #4caf50;
			border: none;
			color: black;
			padding: 5px 20px;
			text-align: center;
			font-size: 16px;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 5px;
			font-family: 'Kanit', sans-serif;
		}

		.label{
			font-size: 20px;
			font-weight: 200;
			font-family: 'Kanit', sans-serif;
			color: white;

		}

		.modal-content {
			right: 150px;
			width: 150%;
		}

		div.iBannerFix{
			height:70px;
			position:fixed;
			left:0px;
			bottom:0px;
			background-color:#FFDE03;
			width:100%;
			z-index: 99;
			color: blue;
			font-family: 'Kanit', sans-serif;
			text-align: center;
			padding-top: 10px; 
		}

		.blink{	
			text-align: center;
			font-family: cursive;
			color: red;
			animation: blink 1s linear infinite;
			font-family: 'Kanit', sans-serif;
			cursor: pointer;
		}
		@keyframes blink{
			0%{opacity: 0;}
			50%{opacity: .5;}
			100%{opacity: 1;}
		}

	</style>
	<script src="js/prefixfree.min.js"></script>
	<br/><br/>
	<div class="h0">
		<div>Login VOTE VRK</div>
	</div>
	<div class="h1">
		<div>บุคลากรต้นแบบที่มีการปฏิบัติสอดคล้องกับหลักธรรมาภิบาล ประจำปี 2562</div>
		<div>เขื่อนวชิราลงกรณ</div>
	</div> 
</div>
</head>


<body>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<form id="form1" name="form1" method="post" action="">
		<div id="apDiv1">
			<p class="style4">LOGIN เข้าระบบ</p>
			<p class="style3">(ระบุเลขประจำตัวพนักงานและใช้รหัสผ่านเดียวกับระบบ EGAT MAIL)</p>
			<h1 align="center" class="style4"><font color="#ff0000"><b><?=$vote_err?></b></h1>
				<label class="label">Username : </label>
				<input type="text" placeholder="username" name="vote_u" id="txtusername" autofocus></input><br>
				<label class="label">Password &nbsp;: </label>
				<input type="password" placeholder="password" name="vote_p" id="txtpassword"><br>
				<button class="button" name="button" id="button" value="LOGIN" >Login</button>
				<p>&nbsp;</p>
			</div>    
		</form>     

		<div>
			<h2 class="blink" data-toggle="modal" data-target="#myModal">คลิกดู </h2><h3>หลักเกณฑ์การคัดเลือกบุคลากรต้นแบบ ปี 2562</h3>


			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">

					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">

							<iframe src="pdf/Guidelines62.pdf#view=fitH" width=100% height=100% >
								<p>Your browser does not support iframes.</p>
							</iframe>

						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="h5">  
			<div>
				<a href="adminlogin.php"><img src="img/Adminlogoicon2.png"></img></a>
			</div>
		</div>
		<div class="iBannerFix">
			<p>กรณีมีข้อสงสัย และต้องการทราบรายละเอียดเพิ่มเติม โปรดติดต่อ กลุ่มงานวิชาการและวางแผน เขื่อนวชิราลงกรณ โทร. 2051</p>
			<p>พัฒนาโดย : กลุ่มงานดิจิทัล เขื่อนวชิราลงกรณ โทร. 2044</p>
		</div>
	</body>

	</html>

	<?php
}
?>