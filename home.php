<!DOCTYPE html>
<html>
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style> 
* {box-sizing: border-box;}

.img-zoom-container {
  position: relative;
}

img{
    
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
  image-rendering: pixelated;
  /*set the size of the lens:*/
  width: 50px;
  height: 50px;
}

.img-zoom-result {
  border: 1px solid #d4d4d4;
  /*set the size of the result div:*/
  width: 300px;
  height: 300px;
  image-rendering: pixelated;
} 
body { 
    margin: 4%; 

}  

.buttons {
    margin-top: 20px;
    text-align: center;
}

.btn {
    -moz-box-shadow:inset 0px 1px 0px 0px #ffffff;
    -webkit-box-shadow:inset 0px 1px 0px 0px #ffffff;
    box-shadow:inset 0px 1px 0px 0px #ffffff;
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffffff), color-stop(1, #f6f6f6));
    background:-moz-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
    background:-webkit-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
    background:-o-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
    background:-ms-linear-gradient(top, #ffffff 5%, #f6f6f6 100%);
    background:linear-gradient(to bottom, #ffffff 5%, #f6f6f6 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#f6f6f6',GradientType=0);
    background-color:#ffffff;
    -moz-border-radius:6px;
    -webkit-border-radius:6px;
    border-radius:6px;
    border:1px solid #dcdcdc;
    display:inline-block;
    cursor:pointer;
    color:#666666;
    font-family:Arial;
    font-size:18px;
    font-weight:bold;
    padding:10px 34px;
    text-decoration:none;
    text-shadow:0px 1px 0px #ffffff;
}
.btn:hover {
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #f6f6f6), color-stop(1, #ffffff));
    background:-moz-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
    background:-webkit-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
    background:-o-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
    background:-ms-linear-gradient(top, #f6f6f6 5%, #ffffff 100%);
    background:linear-gradient(to bottom, #f6f6f6 5%, #ffffff 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#f6f6f6', endColorstr='#ffffff',GradientType=0);
    background-color:#f6f6f6;
}
.btn:active {
    position:relative;
    top:1px;
}
.end {
    display :none;
} 
 
</style>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>  

<script type="text/javascript" src='script.js' >
 
</script>
</head> 
<body id="image" onload='get_the_next_image()'>
        
        <div id='content'>
        <p align='center'>Which image provides a better reconstuction?</p>
        <table align='center'  >
           <tr align='center'>
            <td><b>Original</b></td>
            <td><b>Left</b></td>
            <td><b>Right</b></td>
           </tr>
          <tr>
            <td >
             <div class="img-zoom-container"  >
                <img id="original" width="400px" height="400px">
                
             </div>
            </td>
            <td>
            <div class="img-zoom-container">
                <img id="left" width="400px" height="400px" >
                
            </div>
            </td> 
            <td>    
            <div class="img-zoom-container">
                <img id="right" width="400px" height="400px">
                
             </div>
            </td>
          </tr>
      <tr align='center'>
        <td><div id="original_zoom" class="img-zoom-result" width="225px" height="225px"></div></td>
        <td><div id="left_zoom" class="img-zoom-result" ></div></td> 
        <td><div id="right_zoom" class="img-zoom-result" ></div></td>
      </tr>
    </table>
       
    <div class="buttons">
        <button type="button" class="btn" id='left_btn'>Left</button>
        <button type="button" class="btn" id='right_btn'>Right</button><br> 
    </div>
    <p id="counter" align='center'></p>    
</div> 
<p class="end" align='center'>You have reached the end! Thank you for helping us! </p>
    

 
  
</body>
</html>