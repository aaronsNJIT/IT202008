<html>
	<head>
		<title>Home</title>
	</head>
	<script>
	function myAjax() {
      $.ajax({
           type: "POST",
           url: 'your_url/ajax.php',
           data:{action:'call_this'},
           success:function(html) {
             alert(html);
           }

      });
 	}
	</script>
  <style>
      body{
           background-color: black;
           background-image: url('https://static.dezeen.com/uploads/2012/02/dezeen_Baker-D-Chirico-by-March-Studio-1a.jpg');
           height: 100%;
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
           color: white;
           }
           .spacer {
             margin: 3rem 0 0 -3rem;
           }
           .button {
              background-color: gray; /* Green */
              border: none;
              color: white;
              padding: 15px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
            }
 </style>
 <header>
   <button type="button" onclick="location.href = 'https://web.njit.edu/~as3655/IT202008/SamsBakery/Login.php';"
           class = "button" name="Login"> Login & Logout
   </button>
   <button class = "button" type="button" onclick="location.href = 'https://web.njit.edu/~as3655/IT202008/SamsBakery/Cart.php';"
		  name="button"> Cart</button>
		</button>
		<button class = "button" type="button" onclick="location.href = 'https://web.njit.edu/~as3655/IT202008/SamsBakery/custom_order.php';"
			name="button"> Cart</button>
 </header>
  <body>
		<!-- This is how you comment -->
    <div>
        <font size="20">
        <center> Sam's Bakery </center>
        <font size="4">
        <center> Located at: Livingston, New Jersey </center>
    </div>
    <div class= "spacer">
      <br>
    </div>
    <div>
      <font size= "15">
        <center> Menu </center>
    </div>
		<div>
			<button type="submit" name="Bread">Bread</button>
		</div>
	</body>
</html>

<?php

if(isset($_POST["submit"])) {
		$_SESSION['Items'] = "Bread";
		alert("Hello! I am an alert box!!");
 }

 ?>
