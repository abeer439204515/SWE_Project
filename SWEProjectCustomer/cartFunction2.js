let products_list;

function init()
{
    products_list = JSON.parse(RetriveData("products_list"));
    if(!products_list)
    {
        products_list = new Array();
    }

    console.log(products_list);
}

///let product = {name: null, price: 0, photo_url: null, qty: 1};

function StoreData(key, value) 
{
    localStorage.setItem(key, value);
}

// Retrieve
function RetriveData(key) 
{
    return localStorage.getItem(key);
}


function AddToCart(name, price,  photo_url)
{
    let item = {name: name, price: price, photo_url: photo_url, qty: 1};
    let itemFlage = false;
    products_list.forEach(product => {
        if(product.name == name)
        {
           // product.qty++;
          
            itemFlage = true;
        }
    });

    if(!itemFlage)
    {
        products_list.push(item);
       
    }

     alert("Product has been add to shoping cart");
    console.log(products_list);
    StoreData("products_list", JSON.stringify(products_list)); 
}

init();


/* Sorting  */

var content = document.querySelector('#contentX');
var els = Array.prototype.slice.call(document.querySelectorAll('#contentX > div > div > div'));
var pro = Array.prototype.slice.call(document.querySelectorAll('#contentX > div > div'));

function sort(selectObject) 
{
    var desc = selectObject.value;  
    console.log(desc);
    sortByPrice(desc);
}

function sortByPrice(desc)
{
    els.sort(function(a, b) {
        na = parseInt(a.querySelector('.price').innerHTML);
        nb = parseInt(b.querySelector('.price').innerHTML);

        if(desc === "top")
        {
            return (nb - na);
        }
        else if(desc === "low")
        {
            return  (na - nb);
        }
        else
        {
            location.reload();
        }
        
    });

    var list = document.getElementById('contentX');
    while(list.firstChild){
        list.removeChild(list.firstChild);
    }

    var row = document.createElement("div");
    els.forEach(function(el, index) {
        row.className = "row";
        var column = document.createElement("div");
        column.className = "column";
        column.appendChild(el);
        row.appendChild(column);  
    });
    content.appendChild(row);
    console.log(content);
    
}