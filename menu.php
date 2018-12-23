<?php 
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,'burgers');
   $sql = "SELECT * FROM burgers";
   $result = mysqli_query($conn, $sql);
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="menu.css">
	
	<title></title>
</head>
<body>

<div class="navbar">
  <img src="yy.jpg" class="badge">
  <div style="color: white;margin-left: 20px">«YUFRAME BURGER»<br>PLACE THE RIGHT BURGERS</div>
  <div class="all">
    <a href="#NEWS" style="font-size: 17px;color: white; text-align: center;padding: 12px;text-decoration: none;">NEWS</a>

    <div class="menu">
        <button class="menubtn" onclick="f()">MENU
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="menu-content" id="menu">
          <a href="burgers.html">BURGERS</a>
          <a href="#">HOT-DOGS</a>
      </div>
    </div>

    <a href="about.html" style="font-size: 17px;color: white; text-align: center;padding: 12px;text-decoration: none;">ABOUT US</a>
  </div>
</div>

<div class="burgers">
	<?php  while($row = mysqli_fetch_assoc($result)) {
		echo "<div class='burger'><img src='".$row['Src']."'><div class='description'><div class='name'>".$row['Name']."</div><div class='price'>".$row['Price']." TG</div><a href='burgers.php?id=".$row['id']."'>More</a></div></div>";
	}
	?>
</div>

<footer>
  <section>
    <div>
      <i class="fa fa-instagram" aria-hidden="true"></i>
      <a href="https://www.instagram.com/yuframe_burger/" style="color: white; text-decoration: none;">  @INSTAGRAM</a>
    </div>
    <div>
      <i class="fa fa-facebook" aria-hidden="true"></i>
      <a href="https://www.facebook.com/pg/yuframeburger/reviews/?referrer=page_recommendations_see_all" style="color: white;text-decoration: none;">  /FACEBOOK</a>
    </div>
  </section>
</footer>

</body>
</html>