<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

  <table>
      <td > <input type="text" id="nu" value="100" style="border:none;background:none !important;"  disabled/> </td>
   </table>

 <div class="counter" style="position:absolute; top:45%;left:45%;">
 
   <button onclick="decrement()"> - </button>
   <span id="quantity"></span>
   <button onclick="increment()"> + </button>

   <p>Price <span id="price"></span> </p>

 

   <button onclick="alerty()">Alert</button>
 
 </div>
    

<script>

var num = 1;
var price = 45000;

document.getElementById('quantity').innerHTML = num;

document.getElementById('price').innerHTML = price;


function alerty()
{
   var num = document.getElementById('nu').value;
   alert(num);
}

function increment()
{
     num = num + 1;
     document.getElementById('quantity').innerHTML = num;
     document.getElementById('price').innerHTML = num * price;
     
}

function decrement()
{
    if(num > 0)
    {
     num = num - 1;
     document.getElementById('quantity').innerHTML = num;
     document.getElementById('price').innerHTML = num * price;
    }

}




</script>
</body>
</html>