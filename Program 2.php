<html>  
<head>  
<title>Off And On</title>  
</head>  
<body> <script>  
function light(sw){ var  
pic; if(sw==0)  
{  
 pic="https://cdn3.vectorstock.com/i/1000x1000/89/72/object-bulb-off vector1858972.jpg";  
}  
else  
{  
 pic="https://cdn4.vectorstock.com/i/1000x1000/26/28/light-bulb-on whitebackground-vector-3872628.jpg";  

}  
document.getElementById("img1").src=pic;  
}  
  
</script>  
<img id="img1" src="https://cdn3.vectorstock.com/i/1000x1000/89/72/object bulboffvector-1858972.jpg" width="100" height="180">  
<p> 
<button type="button" onclick="light(1)">lighton</button>  
<button type="button" onclick="light(0)">lightofff</button>  
</p>  
</body>  
</html>  













