<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<title>pizza</title>
<link href="main.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function redraw()
{
//alert ("hello from redraw");
var pizzaPrice = 0;


// default to large
	pizzaImageSize = 250;
	pizzaBasePrice = 12;
	pricePerTopping = 1;
	
	

if (document.getElementById('small').checked==true)
	{

	pizzaImageSize = 100;
	pizzaBasePrice = 6;
	pricePerTopping = .5;
	}

if (document.getElementById('medium').checked==true)
	{
	
	pizzaImageSize = 180;
	pizzaBasePrice = 10;
	pricePerTopping = 1;
	}
	
if (document.getElementById('thin').checked==true)
	{
	pizzaCrustPrice = 100;
	}

if (document.getElementById('handtossed').checked==true)
	{
	pizzaCrustPrice = 150;
	document.getElementById('HandTossed').style.visibility = "visible";
	howManyToppings = howManyToppings + 1;
	}
else
	{
	document.getElementById('HandTossed').style.visibility = "hidden";
	}

		
	
	
document.getElementById('thincrust').height=pizzaImageSize;
document.getElementById('thincrust').width=pizzaImageSize;
document.getElementById('HandTossed').height=pizzaImageSize;
document.getElementById('HandTossed').width=pizzaImageSize;
document.getElementById('ancho').height=pizzaImageSize;
document.getElementById('ancho').width=pizzaImageSize;
document.getElementById('PA').height=pizzaImageSize;
document.getElementById('PA').width=pizzaImageSize;
document.getElementById('pepperonies').height=pizzaImageSize;
document.getElementById('pepperonies').width=pizzaImageSize;
document.getElementById('oliv').height=pizzaImageSize;
document.getElementById('oliv').width=pizzaImageSize;
document.getElementById('onions').height=pizzaImageSize;
document.getElementById('onions').width=pizzaImageSize;
document.getElementById('pepp').height=pizzaImageSize;
document.getElementById('pepp').width=pizzaImageSize;


// do the toppings
howManyToppings = 0;

if (document.getElementById('anchovies').checked==true)
	{
	document.getElementById('ancho').style.visibility = "visible";
	howManyToppings = howManyToppings + 1;
	}
else
	{
	document.getElementById('ancho').style.visibility = "hidden";
	}
	
	
	
	
if (document.getElementById('pineapple').checked==true)
	{
	document.getElementById('PA').style.visibility = "visible";
	howManyToppings = howManyToppings + 1;
	}
else
	{
	document.getElementById('PA').style.visibility = "hidden";
	}
	
	
	
	
	
if (document.getElementById('pepperoni').checked==true)
	{
	document.getElementById('pepperonies').style.visibility = "visible";
	howManyToppings = howManyToppings + 1;
	}
else
	{
	document.getElementById('pepperonies').style.visibility = "hidden";
	}
	
	

	
	
	
if (document.getElementById('olives').checked==true)
	{
	document.getElementById('oliv').style.visibility = "visible";
	howManyToppings = howManyToppings + 1;
	}
else
	{
	document.getElementById('oliv').style.visibility = "hidden";
	}
	
	

	
	
	
if (document.getElementById('onion').checked==true)
	{
	document.getElementById('onions').style.visibility = "visible";
	howManyToppings = howManyToppings + 1;
	}
else
	{
	document.getElementById('onions').style.visibility = "hidden";
	}
	


	
	
	
if (document.getElementById('peppers').checked==true)
	{
	document.getElementById('pepp').style.visibility = "visible";
	howManyToppings = howManyToppings + 1;
	}
else
	{
	document.getElementById('pepp').style.visibility = "hidden";
	}
			

	
// calculate price
price = pizzaBasePrice + pizzaPrice + pizzaCrustPrice + pricePerTopping * howManyToppings;
document.getElementById('price').innerHTML = price;

}

function validateInput ()
{
var valid  = new Boolean(true);

if (document.getElementById("customerFName").value == "")
	{
	valid = false;
	document.getElementById("customerFName").style.backgroundColor = "#ff0000";
	}
	else
	{
	document.getElementById("customerFName").style.backgroundColor = "#99ff99";
	}

if (document.getElementById("customerLName").value == "")
	{
	valid = false;
	document.getElementById("customerLName").style.backgroundColor = "#ff0000";
	}
	else
	{
	document.getElementById("customerLName").style.backgroundColor = "#99ff99";
	}
	
if (document.getElementById("caddress").value == "")
	{
	valid = false;
	document.getElementById("address").style.backgroundColor = "#ff0000";
	}
	else
	{
	document.getElementById("address").style.backgroundColor = "#99ff99";
	}


return valid;
}


</script>

<script><!--dialog box-->   

function myFunction(){
	var txt;
	var r = confirm("Are you sure with your order?");
	if (r == true){
		validateInput();
		
		}else {
	}
	/*document.getElementById("frame3").innerHTML = txt;*/
}
</script>




</head>
<body><font size = "5">

    <h1 id="heading" align = "center">PIZZA ORDER FORM</h1>
    <form  id="pizza-form" onSubmit="myFunction();" name="theform" method="POST" action="EnterPizzaOrder.php" target = "frame3"
	$price = $POST['price']; $size = $POST['size']; $crust = $POST['crust']; $toppings=$POST['toppings'];>
  <!--Choices for crust-->   
	<h2><i>Choose Your Pizza Crust</i> </h2>
     
        Thin 
        <input id="thin" type="radio" name= "crust" value="Thin" onChange="redraw()"/>
        Hand Tossed
        <input id="handtossed" type="radio" name= "crust" value="Hand Tossed" onChange="redraw()" />
	
	<h2><i>Choose Your Pizza Size </i></h2>
   
        Small
        <input id="small" type="radio" name="size" value="Small" onChange="redraw()"/>
        Medium
        <input id="medium" type="radio" name="size" value="Medium" onChange="redraw()" />
        Large
        <input id="large" type="radio" name="size" value="Large" onChange="redraw()" />

   <!--images-->   

      <div id="pizzaImages" target = "frame2">
		<img id="thincrust" src="images/thincrust.png" width="250" height="250" />
		<img id="HandTossed" src="images/HandTossed.png" width="250" height="250" />
		<img id="ancho" src="images/ancho.png" width="250" height="250" />
		<img id="PA" src="images/PA.png" width="250" height="250" />
		<img id="pepperonies" src="images/pepperonies.png" width="250" height="250" "/>
		<img id="oliv" src="images/oliv.png" width="250" height="250" />
		<img id="onions" src="images/onions.png" width="250" height="250" />
		<img id="pepp" src="images/pepp.png" width="250" height="250" />
	  </div>
      <br>
      <h3><i>Add Your Toppings</i></h3>
    
        Anchovies
       <input id="anchovies" type="checkbox" name="toppings[]" value="anchovies" onChange="redraw()" />
       
        Pineapples
      <input id="pineapple" type="checkbox" name="toppings[]" value="pineapples" onChange="redraw()" />
      
        Pepperonies
       <input id="pepperoni" type="checkbox" name="toppings[]" value="pepperonies" onChange="redraw()" />
       
        Olives
        <input id="olives" type="checkbox" name="toppings[]" value="olives" onChange="redraw()" />
        
        Onions
        <input id="onion" type="checkbox" name="toppings[]" value="onions" onChange="redraw()" />
        
        Peppers
        <input id="peppers" type="checkbox" name="toppings[]" value="peppers" onChange="redraw()" />
  
  <?php
  
  ?>
  <h3>Total Price is: €<span id="price" name= "pizzaprice">0</span> </h3>

		
        <h2><i>Enter your details:</i></h2>
        First Name:
        <input name="customerFName" id="Fname" type="text" required />
        <br/>
        <br/>
        Last Name:
        <input name= "customerLName" id="Lname" type="text" required />
        <br/>
        <br/>
		Address:                                                                      
        <input name="address" id = "address" type="text" required>
        <br/>
        <br/>
        Email Address:
        <input name="email" type="email" required />
        <br/>
        <br/>
       
        <br/>
        Phone Number:
        <input name="phone" id="phoneNumber" type="text" required/>
		 <br/>
         <br/>

      <br/>
      <button type="submit" name='submit' value="Place Order" onclick="return validateInput()" >Submit order</button>
    </form>
</body>
</html>