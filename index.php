<!DOCTYPE html>
<?php
  session_start();
?>
<html>
<head>
	<meta charset="utf-8">
	<title>แลกเปลี่ยนเงิน THAI BATH</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
      body{
        background-color: rgba(193, 155, 145, 0.53);
      }
      .vertical-center{
        min-height: 100%;
        min-height: 100vh;
        display: flex;
        align-items:center;
      }
      .container{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        padding-bottom: 50px;
        background-color: #fff;
      }
    </style>
</head>
<body>
  <div class="vertical-center">
		<div class="container">
      <form action="data.php" method="post">
        <div class="row text-center">
        <div class="col-md-12"><br/><h1>แปลงค่าเงิน</h1><br/></div>
   </div>
   
   <div class="row">
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-6">
      <div class="form-group col-md-6">
            <input type="number" class="form-control" name="change" placeholder="ราคาที่ต้องการแลกเปลี่ยน">
      </div>
      <div class="form-group col-md-5">
          <select class="form-control" name="type">
            <option value="USD" selected>US Dollar ($)</option>
            <option value="JPY">Japanese Yen (¥)</option>
            <option value="KRW">South Korean Won (₩)</option>
          </select>
      </div>
      <div class="form-group col-md-12 text-center">
    แลกเปลี่ยนเป็น Thai Baht (THB)
      </div>
      <div class="form-group col-md-12">
  	   <div class="form-group col-md-5"></div>
        <button type="submit" class="btn btn-success">แลกเปลี่ยน</button>
      </div>
              <input type="text" class="form-control text-center" value='<?php 
              echo $_SESSION["result"]; 
              ?>' disabled>
        </div>
      </div>
        </form>
    </div>
  </div>
</body>
</html>