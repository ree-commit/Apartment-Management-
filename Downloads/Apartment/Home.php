<!DOCTYPE html>
<html>
<head>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
  background-color:black;
  background-image:url("wall.png");
}

* {
  box-sizing: border-box;
}

.bg-img {
  background-image: url("");
  
  min-height: 630px;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  top: 15%;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: black;
  opacity:0.6;
  color:white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

.button1 {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: rgb(0, 47, 188);
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
   position: absolute;
   left: 39%;
}

.button1:hover {background-color: #999;padding: 15px 35px;}

.button1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.button2 {
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
   position: absolute;
   left: 38%;
}

.button2:hover {background-color: #999;padding: 15px 35px;}

.button2:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
* {
  box-sizing: border-box;
}
header {
  padding: 15px;
  text-align: center;
  font-size: 30px;
  color: white;
}
.overwiew{
  align:center;
  text-align: left;
  width: 100%;
  height: 300px; 
  background: black;
  background-image:url("Regis.jpg");
  padding: 20px;
  border: 1px solid #555;
  color:white;
  font-size:20px;
}
.Amenities{
  align:center;
  text-align: left;
  width: 100%;
  height: 330px; 
  background: black;
  background-image:url("School.png");
  padding: 20px;
  border: 1px solid #555;
  color:white;
  font-size:20px;
}
.div1{
  align:center;
  text-align: left;
  width: 100%;
  height: 370px; 
  background: black;
  padding: 20px;
  border: 1px solid #555;
  overflow: auto;
  white-space: nowrap;
}
.image{width:300px;height:200px;}
.image:hover {
  -ms-transform: scale(1.5); 
  -webkit-transform: scale(1.5); 
  transform: scale(1.5); 
}
.column {
  float: left;
  width: 33.33%;
  padding: 10px;
  height: 510px; 
  text-align:center;
  border-style: solid;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
</head>
<body>
<header>
  <h3 style="text-align:center;font-size:35px;color:white;text-shadow: 5px 5px 10px black, 5px 5px 30px rgb(163, 53, 52), 5px 5px 10px rgb(163, 53, 52);">
  Apartment Management System</h3></header>
<br><br><form action='Regis.php'>
<button class="button1" style="background-image:url(school.png)">New User SIGN UP</button><br><br><br><br><br></form>
<form action='login.php'><button class="button2">Existing User SIGN IN</button></form>
<br><br><br><br><br>
<div class="overwiew">
<p style="color:white;font-size:30px;"><i class="material-icons">camera</i>&nbsp Overwiew</p>
 <p style="font-size=30px">The tower comprises of graceful and elegant apartments ,
 where you can lead a life of blissful comfort and ease, in the knowledge that your every need is looked after. 
 towers are housed across a sprawling 4.75 acre site, landscaped in Prestige’s wonderful signature style that 
 would appease to your senses. Located in the heart of city, close to major Schools, Shopping Centres &
 Healthcare Facilities and just a short drive from highway & the Bus Terminus, Row houses world-class 
 residences that offer you a quality of life that is a cut above, with a clubhouse that is fully equipped with a plethora of 
 leisure amenities including a Squash Court, Badminton Court, Party Hall, Indoor Games Area, Swimming Pool & Gymnasium. 
 Explore this micro-site and see how your new home enables a life of elegance and grace…</p>
</div>
<br><br>
<div class="div1">
<p style="color:white;font-size:30px;"><i class="material-icons">photo_camera</i>&nbsp Photos</p>
<img src="7.jpg" style="width:300px;height:200px;" class="image"> &nbsp
<img src="2.jpg" style="width:300px;height:200px;" class="image">&nbsp
<img src="9.jpg" style="width:300px;height:200px;" class="image">&nbsp
<img src="51.jpg" style="width:300px;height:200px;" class="image">&nbsp
<img src="64.jpg" style="width:300px;height:200px;" class="image">&nbsp
<img src="44.jpg" style="width:300px;height:200px;" class="image">&nbsp
</div>
<br><br>
<div class="Amenities">
<p style="color:black;font-size:30px;"><i class="material-icons">all_out</i>&nbsp Amenities</p>

<table style="width:95%;color:rgb(178, 75, 58);">
		  <tr>
			<td><i class="material-icons">bookmark</i>&nbsp Badminton Court</td>
			<td><i class="material-icons">bookmark</i>&nbsp Indoor Games</td>
			<td><i class="material-icons">bookmark</i>&nbsp Swimming pool</td>
		</tr>
		<tr>
			<td><i class="material-icons">bookmark</i>&nbsp Library Space</td>
			<td><i class="material-icons">bookmark</i>&nbsp Children's Play Area</td>
			<td><i class="material-icons">bookmark</i>&nbsp Mini Theatre</td>
		</tr>
		<tr>
			<td><i class="material-icons">bookmark</i>&nbsp Gymnasium</td>
			<td><i class="material-icons">bookmark</i>&nbsp Squash Court</td>
			<td><i class="material-icons">bookmark</i>&nbsp Table Tennis</td>
		</tr>
		<tr>
			<td><i class="material-icons">bookmark</i>&nbsp Multipurpose Hall</td>
			<td><i class="material-icons">bookmark</i>&nbsp Health Club</td>
			<td><i class="material-icons">bookmark</i>&nbsp 24hour water</td>
		</tr>
		<tr>
			<td><i class="material-icons">bookmark</i>&nbsp Fire Safety</td>
			<td><i class="material-icons">bookmark</i>&nbsp Parking Facility</td>
			<td><i class="material-icons">bookmark</i>&nbsp Lift Facility</td>
		</tr>
		</table>


</div>
<br><br>
<p style="font-size=40px;color:white"><b>Contact us:</b></p><br>
<div class="row">
  <div class="column" style="background-color:#aaa;">
		<p style="size:30px;color:white"><b>Present managing committee members</b></p>
		<p><b>President:</b><br>Mr. A K Gupta</p>
        <p><i class="material-icons">phone</i><br> +91-9472649253 </p>
		<p><b>Secretary:</b><br>Mrs. Sunidhi Singh</p>
        <p><i class="material-icons">phone</i><br> +91-8467257338 </p>
		<p><b>Treasurer:</b><br>Mr. karthik jha </p>
        <p><i class="material-icons">phone</i><br> +91-7757369234 </p>
		<p><b>Office Bearer:</b><br>Mr. Udya Sharma</p>
        <p><i class="material-icons">phone</i><br> +91-9686465828 </p>
  </div>
  <div class="column" style="background-color:#bbb;">
		<p style="size:30px;color:white"><b>For Enquiry</b></p>
		<p><b>Office Address</b></p>
			ABC,Srinivas Nagar,Surathkal,<br>
			Manglore , Karnataka<br>
			<br>
			<b>pincode:</b> 575025<br>
			<br>
			<b>Office open timing</b><br><br>
			Weekdays: 9:00 AM - 7:00 PM<br>
			Weekends: 10:00 AM - 5:30 PM<br>
			<br>
			<i class="material-icons">phone</i><br>0733 836 7680<br>
			<i class="material-icons">phone</i><br> 0733 834 4678<br><br>
			<i class="material-icons">mail_outline</i><br>apartment.management@gmail.com<br>
  </div>
  <div class="column" style="background-color:#ccc;">
  <i class="material-icons">location_on</i>
  <p>Locate us</p>
  <p>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.387254972316!2d74.79212801430471!3d13.010993517534223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba35211b768ac8f%3A0x6b1144ac2d5dadf3!2sNational%20Institute%20of%20Technology%20Karnataka!5e0!3m2!1sen!2sin!4v1570257936823!5m2!1sen!2sin"
 width="300" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</p>
  </div>
</div>

</body>
</html>
