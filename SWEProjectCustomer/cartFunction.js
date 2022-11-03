if ( document.readyState == 'loading' ){
	document.addEventListener( 'DOMContentLoaded', ready )
	
} else {
	ready();
}

function ready()


{ 
   document.getElementById('myBtn-checkout').addEventListener('click',checkOutFunction);
   document.getElementById('myBtn-clear').addEventListener('click',clearFunction);
   
   const  retrievedData = JSON.parse(localStorage.getItem('products_list'));

   var n = 0;
   console.log(localStorage.length)
   if (localStorage.length == 1)
    n = 0;
   else
   n = retrievedData.length;
   
   
   
   for ( var i = 0 ; i < n ; i++)
   {
	let obj = retrievedData[i];
    let name= retrievedData[i].name;
	let price = retrievedData[i].price;
	let photo = retrievedData[i].photo_url ;
	//let qty = retrievedData[i].qty ;
	let qty = 1 ;

	 if ( name != null )
	 addItemToCart(name , price , photo, qty);
 
   }
	 
   
    var totalPrice = document.getElementById('totalPrice').innerHTML;
    
	if ( totalPrice == 0 )
	{
       
	    document.getElementById("myBtn-clear").disabled = true;
	    document.getElementById("myBtn-checkout").disabled = true;
	}
	
	
   /*var quantityInputs = document.getElementsByClassName('cartQuantityInput');

		 for ( var i =0 ; i < quantityInputs.length ; i++)
		 {
			var input = quantityInputs[i]; 
			input.addEventListener('change' , quantityChanged );
		 }*/

    var removeItemButtons = document.getElementsByClassName('buttons')

         for (var i = 0 ; i < removeItemButtons.length ; i++){
	        var btn = removeItemButtons[i]
	        btn.addEventListener('click', delateItem)
         }

	
}//End ready


	
	function delateItem(event) {
		
	var btnClicked = event.target

	var pname = btnClicked.parentElement.parentElement.parentElement.parentElement.getElementsByClassName("name")[0].innerHTML;

	var products_list = JSON.parse(localStorage.getItem('products_list'));
	var number =  products_list.length ;
	var cartItems = document.getElementsByClassName('cart-items')[0];
	var Rows = cartItems.getElementsByClassName('cartRow');
	
	for ( var i = 0 ; i < Rows.length ; i++)
	{	
        let name= products_list[i].name;
	    let price = products_list[i].price;
	    let photo = products_list[i].photo_url ;
	   // let county = products_list[i].county;
	   // let height = products_list[i].height ;

	
		var cartRow = Rows[i];
		var quantityElement = cartRow.getElementsByClassName('cartQuantityInput')[0];
	    var quantityValue = quantityElement.value;
	    //let item = {name: name, price: price, county: county, height: height, photo_url: photo, qty: quantityValue};
        let item = {name: name, price: price, photo_url: photo, qty: quantityValue};
        pname = pname.trim()
		name = name.trim()
		if ( name.valueOf() !== pname.valueOf())
	    products_list.push(item);
	updateTotalPrice()
	}
		btnClicked.parentElement.parentElement.parentElement.parentElement.remove()
		updateTotalPrice()
	for ( i= 0 ; i < number ; i++)
		products_list.shift();
	updateTotalPrice();
	localStorage.setItem("products_list", JSON.stringify(products_list)); 
	
}
	

function checkOutFunction()
{  
	var totalPrice = document.getElementById('totalPrice').innerHTML;
	if ( totalPrice == 0 )
	{
        alert( "The cart is empty" );
	    document.getElementById("myBtn-clear").disabled = true;
	    document.getElementById("myBtn-checkout").disabled = true;
	}
    else
	{
		 var quantityInput = document.getElementsByClassName('cartQuantityInput');
		 var text = "";
		 for ( var i =0 ; i < quantityInput.length ; i++)
		 {
            var input = quantityInput[i].value;
			if (input > 12)
			{text += "The quantity should be less than 13" + "\n";
		     alert(text);
			return;}
				
			if ( isNaN( input))
			{text += "The quantity should be a number" + "\n";
		     alert(text);
		     return;}
		 } 
		 // 1 printInvoce
		 window.print();
		 
		 //2 clear local storage
		 var mode = localStorage.getItem('darkmode');
		 localStorage.clear();
		 localStorage.setItem( 'darkmode' , mode);
		 
		 //3 clearCart();
		 var cartItems = document.getElementsByClassName('cart-items')[0]
         while (cartItems.hasChildNodes()){
			 cartItems.removeChild(cartItems.firstChild)
		 }
		updateTotalPrice()
		 
		 //4 disabled button
		 document.getElementById("myBtn-clear").disabled = true;
	     document.getElementById("myBtn-checkout").disabled = true
	
	 }

}


function clearFunction(){
	    
		var totalPrice = document.getElementById('totalPrice').innerHTML;
	
	if ( totalPrice == 0 )
	{
        alert( "The cart is empty" );
	    document.getElementById("myBtn-clear").disabled = true;
	    document.getElementById("myBtn-checkout").disabled = true;
	}
    else
	{
		
	    //clear local storage 
		 var mode = localStorage.getItem('darkmode');
		 localStorage.clear();
		 localStorage.setItem( 'darkmode' , mode);
		 
		 //3 clearCart();
		 var cartItems = document.getElementsByClassName('cart-items')[0]
         while (cartItems.hasChildNodes()){
			 cartItems.removeChild(cartItems.firstChild)
		 }
		 updateTotalPrice()
		 
		 // disabled buttons
		 document.getElementById("myBtn-clear").disabled = true;
	     document.getElementById("myBtn-checkout").disabled = true
	}
}


function updateTotalPrice(){
	var cartItems = document.getElementsByClassName('cart-items')[0];
	var Rows = cartItems.getElementsByClassName('cartRow');
	
	var total =0 ;
	
	for ( var i = 0 ; i < Rows.length ; i++)
		 {
			 var cartRow = Rows[i];
			 
			 var priceElement = cartRow.getElementsByClassName('itemPrice')[0];
			 var quantityElement = cartRow.getElementsByClassName('cartQuantityInput')[0];
			 
			 var priceValue = parseFloat(priceElement.innerHTML.replace( 'SR' , '' ));
			 var quantityValue = quantityElement.value;
             var itemTotal = quantityValue*priceValue;
			 document.getElementsByClassName('total-price')[i].innerHTML = itemTotal + " SR";
			 total = total + ( priceValue*quantityValue);
		 }
		 document.getElementById('totalPrice').innerHTML = total;	
}
		
/*function quantityChanged(event) {
	
	updateTotalPrice();
	 
	var products_list = JSON.parse(localStorage.getItem('products_list'));
	var cartItems = document.getElementsByClassName('cart-items')[0];
	var Rows = cartItems.getElementsByClassName('cartRow');
	for ( var i = 0 ; i < Rows.length ; i++)
	{	
        let obj = products_list[i];
        let name= products_list[i].name;
	    let price = products_list[i].price;
	    let photo = products_list[i].photo_url ;
	    let county = products_list[i].county;
	    let height = products_list[i].height ;

	
		var cartRow = Rows[i];
		var quantityElement = cartRow.getElementsByClassName('cartQuantityInput')[0];
	    var quantityValue = quantityElement.value;
	    let item = {name: name, price: price, county: county, height: height, photo_url: photo, qty: quantityValue};
	    products_list.push(item);
	}
	for ( i= 0 ; i < products_list.length ; i++)
		products_list.shift();
	localStorage.setItem("products_list", JSON.stringify(products_list));  
}*/

	 
function addItemToCart(name , price , photo , qty)
{
	

var cartRow = document.createElement('div');
var cartItems = document.getElementsByClassName('cart-items')[0];
var ItemRow = `<div class = "cartRow" >
	  <div class="item">
    
         <div class="image">
             <img src="${photo}" alt="plant" />
         </div>
         <div class="description">
             <span class= "name">${name} </span>
        
	         <span class = "itemPrice">${price} </span>
          </div>
		  </div>
		
	
     <div class="quantity">
	 
	     <form>
             <input class="cartQuantityInput"  type="number"  name="quantity" min="1" value=1 readonly style='border:0';>
         </form>
	 
     </div>
	
   
        <div class="total-price">${price} </div>
	
	   <div class="buttons">
	     <form> 
             <button class="delete" type="button"><img src="image/delete1.jpg" alt="" /></button>
	     </form>
       </div>
    


</div>`

    cartRow.innerHTML = ItemRow;
	cartItems.append(cartRow);
	updateTotalPrice();	 
}