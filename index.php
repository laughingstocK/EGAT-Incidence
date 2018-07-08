<style type="text/css">@import "font-awesome.min.css";
@import "font-awesome-ie7.min.css";
/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
.well{
  font-family: 'Kanit', sans-serif;
}

.textsize{
  font-size: 150%;
}
.textsize1{
  font-size: 120%;
}
<style>
label{
  font-family: 'Kanit', sans-serif;
}
.form-control{
  font-family: 'Kanit', sans-serif;
}

input.currency {
  text-align: right;
  padding-right: 15px;
}
.head{
  text-align: center;
  font-family: 'Kanit', sans-serif;
/*  background-color: #3399ff;
*//*  margin-top: 5%;
  margin-bottom: 5%;*/
  padding: 0;
}

header.masthead .overlay {
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: #212529;
  opacity: 0.5;
}

header {
  /*background-color: #3399ff;*/
}
header h1 {
    margin: 0;
}
/*div {
    background-color: lightblue;
}*/

html, body {
    margin: 0;
    padding: 0;
}

header.masthead .site-heading {
  padding: 200px 0 150px;
  color: white;
}

header.masthead .site-heading {
  text-align: center;
}

header.masthead .post-heading h1 {
  font-size: 35px;
}


</style>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="js/jquery.form.min.js"></script>
  <title>แบบรายงานการเกิดอุบัติการณ์</title>
<div class="head">
  <h1>แบบรายงานการเกิดอุบัติการณ์</h1>
</div>


</head>
<body>
  <div class="container">
    <div class="col-lg-12 well">
      <div class="row">
        <form action="FR-HY-2001.php" method="post" enctype="multipart/form-data">
          <div class="col-sm-12">
          <div class="row">
              <div class="col-sm-6 form-group">
                <label class="textsize1">เลขประจำตัวพนักงาน</label>
                <input type="text" class="form-control" name="username" required>
              </div>
              <div class="col-sm-6 form-group">
                <label class="textsize1">รหัสผ่านเข้าใช้งานอีเมลล์</label>
                <input type="password" class="form-control" name="password" required>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <label class="textsize">เรียน</label>
                  <select  class="form-control" name="dest_email">
	                  <option value="waiwit.s@egat.co.th">ส่วนกลางเขื่อนวชิราลงกรณ</option>
	                  <option value="wichit.k@egat.co.th">แผนกรักษาความปลอดภัย (หรว-ฟ.)</option>
	                  <option value="som.k@egat.co.th">แผนกประชาสัมพันธ์และชุมชนสัมพันธ์ (หปว-ฟ.)</option>
                	  <option value="chaiya.s@egat.co.th">แผนกความปลอดภัย อาชีวอนามัย และสภาพแวดล้อมในการทำงาน (หปอว-ฟ.)</option>
	                  <option value="pongpan.p@egat.co.th">กองเดินเครื่อง (กดว-ฟ.)</option>
	                  <option value="wiphot.s@egat.co.th">แผนกเดินเครื่องกะ 1 (หดว1-ฟ.)</option>
	                  <option value="tawatchai.w@egat.co.th">แผนกเดินเครื่องกะ 2 (หดว2-ฟ.)</option>
	                  <option value="chatchawan.w@egat.co.th">แผนกเดินเครื่องกะ 3 (หดว3-ฟ.)</option>
	                  <option value="wirat.p@egat.co.th">แผนกเดินเครื่องกะ 4 (หดว4-ฟ.)</option>
	                  <option value="armud.p@egat.co.th">แผนกประสิทธิภาพ (หภว-ฟ.)</option>
	                  <option value="apirak.t@egat.co.th">กองบำรุงรักษาโรงไฟฟ้า (กบว-ฟ.)</option>
	                  <option value="thirapong.su@egat.co.th">แผนกวางแผนบำรุงรักษา (หวว-ฟ.)</option>
	                  <option value="sarun.ph@egat.co.th">แผนกบำรุงรักษาเครื่องกล (หบว-ฟ.)</option>
	                  <option value="veeraphon.s@egat.co.th">แผนกบำรุงรักษาไฟฟ้า (หฟว-ฟ.)</option>
	                  <option value="manop.ni@egat.co.th">แผนกโรงงาน (หงว-ฟ.)</option>
      	            <option value="chanchai.pa@egat.co.th">กองบำรุงรักษาโยธา (กยว-ฟ.)</option>
	                  <option value="payongsak.t@egat.co.th">แผนกบำรุงรักษาอาคาร (หอว-ฟ.)</option>
	                  <option value="amnuaiy.k@egat.co.th">แผนกบำรุงรักษาบริเวณ (หบบว-ฟ.)</option>
	                  <option value="piti.p@egat.co.th">แผนกบำรุงรักษาทั่วไป (หทว-ฟ.)</option>
                	  <option value="pattanapong.p@egat.co.th">แผนกบำรุงรักษาเขื่อนและอาคารโรงไฟฟ้า (หขว-ฟ.)</option>
	                  <option value="surapol.k@egat.co.th">กองบริหาร (กบหว-ฟ.)</option>
	                  <option value="somchai.kr@egat.co.th">แผนกธุรการและบริการ (หธบว-ฟ.)</option>
	                  <option value="chatchai.sh@egat.co.th">แผนกงานบุคคล (หงคว-ฟ.)</option>
	                  <option value="phiphop.s@egat.co.th">แผนกจัดหา (หจว-ฟ.)</option>
	                  <option value="khrongtham.sr@egat.co.th">แผนกพัสดุ (หพว-ฟ.)</option>
	                  <option value="patsaporn.lor@egat.co.th">แผนกสุขภาพอนามัย (หสอว-ฟ.)</option>
                	  <option value="lawan.a@egat.co.th">แผนกบัญชีและการเงินเขื่อนวชิราลงกรณ (หบขว-บ.)</option>
              	    <option value="sittisak.c@egat.co.th">แผนกบัญชีเจ้าหนี้เขื่อนวชิราลงกรณ (หจขว-บ.)</option>
                  </select>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 form-group">
                <label class="textsize">วันที่</label>
                <input type="date" class="form-control" name="report_date">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 form-group">
                <label class="textsize">ชื่อ</label>
                <input type="text" class="form-control" name="name">
              </div>
              <div class="col-sm-4 form-group">
                <label class="textsize">ตำแหน่ง</label>
                <input type="text" class="form-control" name="position">
              </div>
              <div class="col-sm-4 form-group">
                <label class="textsize">สังกัด</label>
                <input type="text" class="form-control" name="sangkat">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4 form-group">
                <label class="textsize">หมายเลขโทรศัพท์</label>
                <input type="text" class="form-control" name="call">
              </div>
            </div>
<!--             <div class="form-group">
              <label class="textsize">ขอรายงานการเกิด</label>
              <div class="form-group">
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" value="acedent"class="custom-control-input" checked="checked">
                <label class="custom-control-label" for="customRadioInline1">อุบัติเหตุ</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" value="incidence" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">อุบัติการณ์</label>
              </div>
            </div>
            </div> -->
            <div class="row">
              <div class="col-sm-4 form-group">
                <label class="textsize">วันที่เกิดเหตุ</label>
                <input type="date" class="form-control" name="event_date">
              </div>
              <div class="col-sm-4 form-group">
                <label class="textsize">เวลาเกิดเหตุ</label>
                <input type="time" class="form-control" name="event_time">
              </div>
              <div class="col-sm-4 form-group">
                <label class="textsize">สถานที่</label>
                <input type="text" class="form-control" name="place">
              </div>
            </div>
            <div class="form-group">
              <label class="textsize">อธิบายเหตุการณ์</label>
              <textarea   rows="3" class="form-control" name="description"></textarea>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <label class="textsize">บุคคลบาดเจ็บ (คน)</label>
                <input type="number" class="form-control" name="people">
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6 form-group">
                <label class="textsize1">ทรัพย์สินเสียหายมีมูลค่าประมาณ</label>
                <input class="form-control" type="text" id="number1" name="value">
              </div>
              <div class="col-sm-6 form-group">
                <label class="textsize1">กระบวนการผลิตสูญเสียมีมูลค่าประมาณ</label>
                <input class="form-control" type="text" id="number2" name="lost">
              </div>
                <script>
                  document.getElementById("number1").onblur =function (){    
                    this.value = parseFloat(this.value.replace(/,/g, ""))
                    .toFixed(2)
                    .toString()
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                  }
                  document.getElementById("number2").onblur =function (){    
                    this.value = parseFloat(this.value.replace(/,/g, ""))
                    .toFixed(2)
                    .toString()
                    .replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                  }
                </script>
            </div>

            <div class="row">
              <div class="col-sm-6 form-group">
                <label class="textsize1">เกิดสภาพแวดล้อมที่ไม่ต้องการ</label>
                <input type="text" class="form-control" name="unwanted">
              </div>
              <div class="col-sm-6 form-group">
                <label class="textsize1">อื่นๆ</label>
                <input type="text" class="form-control" name="other">
              </div>
            </div>
            <div class="form-group">
              <label class="textsize">สิ่งที่ได้ดําเนินการไปแล้วขณะเกิดเหตุ</label>
              <textarea   rows="3" class="form-control" name="after"></textarea>
            </div>
            <div class="form-group">
              <label class="textsize1">อัพโหลดภาพ</label>
              <input type="file" id="file" name="file" accept="image/*" value="Upload Image">
            </div>			

            <button type="submit" class="btn btn-primary" name="submit" value="click">Submit</button>
          </div>
        </div>
      </div>
    </div>
    </form>
</body>
</html>