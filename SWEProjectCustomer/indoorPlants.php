<!DOCTYPE html>
<?php 
ini_set('display_errors',1);

require './connect.php'; 
$qurey2="SELECT * FROM plant WHERE category = 'indoor' "; //offer id
$result2 = mysqli_query($connect, $qurey2) ;

if (mysqli_num_rows($result2)> 0 ){
    while ($row2= mysqli_fetch_assoc($result2)){
                   $id[]= $row2['id'];
            $plant_name[] = $row2['plant_name'];//array for seeker ids
            $photo[] = $row2['photo'];
            $price[] = $row2['price'];
            $description[] = $row2['description'];
    }   
}
?>
<html>

<head>
    <meta charset="utf-8">
    <title>indoor Plants</title>
    <link rel="stylesheet" href="pots.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="footer.css">
    
	  <script src="cartFunction2.js"  defer></script>

    <style>
 


 body{
  margin: 0;
  width:100%;
  padding:0;
  height:100%;
}


.header {
  overflow: hidden;
  background-color: #A98467;
  padding: 0px;
  top:0;
  position:absolute;
  left:0;
  right:0;
  width:100%;
  clear: both;
}


.header h1 {
    position: absolute;
    margin-top: 0;
    padding-top: 2%;
    margin-left: 13%;
    letter-spacing: 3px;
    transform: translate(-30%, -30%);
    font-family: Courier, monospace;
    text-align: left;
    text-transform: uppercase;
    text-shadow: 1px 1px 2px white, 0 0 25px #F0EAD2, 0 0 5px #F0EAD2;


}


.header img {
  float: left;
}

.header-right {
  float: right;
}

.back{
  font-family: Arial, Helvetica, sans-serif;
  float: left;
  color: #1D3557;
  text-align: center;
  padding: 25px;
  text-decoration: none;
  font-size: 25px; 
  line-height: 25px;
  border-radius: 4px;
}

nav {

    background-color: #DDE5B6;
    display: flex;
    justify-content: space-between;
    height: 70px;
    width: 100%;
    align-items: center;
    padding: 0px 0px;
    z-index: 10;
    margin-top:60px;
}


nav ul {
    float: right;
    height: 70px;
    justify-content: center;
    display: inline-block;
    margin: auto;
}

nav ul li {
    display: inline-block;
    line-height: 40px;

}

nav ul li a {
    font-weight: bold;
    float: left;
    font-size: 35px;
    font-family: Courier, monospace;
    text-decoration: none;
    color: #A98467;
    padding: 1.5rem;
    align-items: center;
    justify-content: center;

}


a:hover {
    background-color: #A98467;
    color: rgba(240, 234, 210);
    transform: scale(90%, 100%);
    transition: transform 1.5s;

}



.logo {
    position: absolute;
    top: -1.5em;
    left: 1em;
    shadow: 0 4px 8px 0 #A98467, 0 6px 20px 0 #A98467;
}

.cart {
    position: absolute;
    top: 1em;
    right: 5em;
    z-index: 5;
}

.breadcrumb a {
    margin: 1%;
    font-size: 22px;
    color: #FFFFFF;
    font-family: Courier, monospace;
}

.breadcrumb {
    background-color: #A98467;
    
    line-height: 1em;
    padding: 1% 3%;
}

.breadcrumb img {
    width: 20px;
    height: 20px;
}
 


footer{
  margin-bottom:0;
}

.footer{

  overflow: hidden;
    background-color: #ADC178;
  text-align: center;
  padding:0px;
  margin-bottom:0;
  position:absolute;
  left:0;
  right:0;
  width:100%;
  clear: both;
}

.fa-twitter {
  background: #55ACEE;
}

.fa-facebook {
  background: #3B5998;
}

.fa-instagram {
  background: #E1306C;
}

.SocialMedia{
  width: 50px;
  display:inline;
}

.footer .SocialMedia > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin:15px 10px;
  color:inherit;
  opacity:0.75;
}

.copyright{
  color:#F1FAEE;
  opacity:0.75;
  font-size: 15px;
}

</style>

</head>
<body onload="onloadDark()">

    <div class="header">
        <header>
          
          <img src="logo.png" alt="logo" class="logo" width="100" height="100">
          <h1>Green World</h1>
          <div class="header-right">
            <a class="back" alt="cart page" href="cart.html"><img src="image/cart.png" alt="cart" width="30" height="30"> </a>
          </div>
          
        </div>	   
		   
      </div>
	  
		<nav class="navbar-list"> 
 
    <ul> 
     <li> <a href="index.html" id="n1">HomePage </a> </li> 
     <li> <a href="Shoping.html" id="n2">Shopping</a> </li> 
    </ul> 
 
   </nav>
		
	
	  <div class="breadcrumb">
	     <a href="index.html">HomePage </a>
		 <img src="image/arrow.png" alt="/" width="50" height= "50">
<a href="Shoping.html">Shopping</a>
<img src="image/arrow.png" alt="/" width="50" height= "50">
<a href="indoorPlants.html">Indoor Plants</a>
	  </div>  
   </div>   
  </header>


    <main >
        <div class="description">
            <h1> Indoor Plants </h1>
            <p class="sort">ordered by
                <select onchange="sort(this)">
                    <option value="rest"> default</option>
                    <option value="low">price ascending</option>
                    <option value="top">price descending</option>                    
                </select>
            </p>

            <p>Plants are a great way to brighten up any space and they're a gift they can enjoy for a long time to
                come.
                Surprise someone with a truly show-stopping plant gift, or maybe even treat yourself!</p>
        </div>
        <br>
        <div id="contentX">
          <?php
          $len = count($id);
          $j = 0;
for ($i=0;$i<$len/2;$i++){
 // $id[]= $row2['id'];
            //$plant_name[] = $row2['plant_name'];//array for seeker ids
            //$photo[] = $row2['photo'];
            //$idS = $row2['category'];
           // $price[] = $row2['price'];
           // $description[]
            ?>
        <div class="row">
            
             <?php
            for ($r=0;$r<2;$r++){
               ?>
            <div class="column">

                <div class="card">
                    <a href="productDetails.html" style="text-decoration: none"><img src="image/<?php echo $photo[$j] ?>" style="width:100%" class="cardimg"></a>
                    <h1> <?php echo $plant_name[$j]?></h1>
                    <p class="price"><?php echo $price[$j] ?> SR</p>
                   
                    <p><button onclick="AddToCart('<?php echo $plant_name[$j]?>', '<?php echo $price[$j] ?>', 'image/<?php echo $photo[$j] ?>')">Add To Cart</button></p>
                </div>

            </div>
         <?php
         $j++;
         if ( $j == $len  )
         {
             
             break;
         }
            }
               ?>
        
        </div>
            <?php
   }      
   ?>
        
        </div>
    </main>

 <div class="footer">
        <footer>
        
        <div class="SocialMedia">
           <a href="#" class="fa fa-twitter"></a>
           <a href="#" class="fa fa-facebook"></a>
           <a href="#" class="fa fa-instagram"></a>
        </div>  
        
            <div class="copyright"> 
            <p> © 2020 Copyright: JOB.com </p>
            </div>
        
        </footer>
        </div>


</body>

</html>