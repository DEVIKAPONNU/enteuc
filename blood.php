
<!DOCTYPE html>
<html>
<head>
<title>enteUC</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/reg.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body style="background-image: url('images/banner.jpg');">
  <div class="main-w3layouts wrapper">
    <h1>BLOOD DONORS</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
        <?php include('action.php'); ?>
        <form action="/action_page.php">
          <font size="6px">Blood Donor:</font>
          <select name="carlist" form="carform">
    <option value="O-">O-</option>
    <option value="O+">O+</option>
    <option value="A-">A-</option>
    <option value="A+">A-</option>
    <option value="AB-">AB-</option>
    <option value="AB+">AB+</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
  </select>
  <br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <input type="submit" style="width:20%"">
      </form>
      </div>
      </div>
        </div>
</body>
</html>
