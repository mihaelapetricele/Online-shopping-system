<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
    
    font-family: Arial, Helvetica, sans-serif;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
}
#log{
    background-color: wheat;
    height: 30px;
    width: 150px;
    padding-top: 15px;
    color:black;
    border-radius: 10px;
}
/* Set a style for all buttons */
button {
  background-color: white;
  color: black;
  padding: 7px 20px;
  border: 2px solid black;
  border-radius: 10px;
  cursor: pointer;
  width: 50px;
  height:30px;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  height: 50px;
  padding: 7px 18px;
  background-color: tan;
  border: none;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 40px 0 30px 0;
  position: relative;
}
.container {
  padding: 10px;
}

span.psw {
  float: right;
  padding-top: 20px;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  box-shadow: 5px 10px 8px 8px #888888;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0,0.4);
  padding-top: 60px;
    
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  padding-top: 30px;
  margin: 5% auto 15% auto;
  border:1px solid #888;
  width: 60%;
  height: 60%;
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: salmon;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" action="login.php">
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
    <center>
    <div id="log"> 
          <input type="image" src="imagini/login.png" height="30" width="150" name="submit" value="Login">
        </div>
        </center>
    </div>
    <div align="left">
        <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
