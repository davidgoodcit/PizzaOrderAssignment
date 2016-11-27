<!--]log in-->
<html>
    <head>
        <title>Login page</title>
    </head>
    <body>
	<body color="yellow" align = "center">
     </br></br></br>
        <form name="login" align = "center">
		<div>
		<div id="welcome">
		<img id="wimage" src="images/thincrust.png" width="250" height="250" />
		<div>
		<h2> Welcome Pizza Lover! Please sign in </h2><br>
            Username : <input type="text" name="userid"  /></br></br>
            Password : <input type="password" name="pswrd"/></br></br>
            <input type="button" name = "LogIn" onclick="check(this.form)" value="LogIn"/>
            <input type=button name = "Guest" onClick="parent.location='MainWeb1.php'" value="Guest"></br></br>
			
        </form>
        <script language="javascript">
            function check(form) { /*function to check userid & password*/
                /*the following code checks whether the entered userid and password is match*/
                if(form.userid.value == "Admin" && form.pswrd.value == "123") {
                    window.open('MainWeb.php')/*opens the target page while Id & password matches*/
					form.userid.value="";
					form.pswrd.value="";}
                else {
                    alert("Error Password or Username")/*displays error message*/
                }
            }
        </script>
    </body>
</html>