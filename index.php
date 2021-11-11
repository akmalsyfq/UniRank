<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
  display: grid;
  height: 100%;
  font-family: 'Poppins', sans-serif;
  place-items: center;
  background: url('./Dance To Forget.png') no-repeat;
  background-position: center;
background-size: cover;

}
.card {
    position: relative;
    background-position: center;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 30%;
  display: inline-block;
  padding: 10px 10px;
  margin: 100px 30px;
}
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
.row{ 
    margin-left:-60%;
    display: flex;
    height: 70%;
    align-items: center;
}
.col{ 
    flex-basis: 50%;
    align-items: center;
}
.col2{ 
    flex-basis: 50%;
}
img{
      width: 80px;
      margin-top:2%;
   }
   .logo{
  width:60px;
  padding-right:100px;
  }
  h3 {

font-size: 20px;
color: #ffff;
text-transform: capitalize;
font-weight: 100;
position: relative;
text-align: center;
margin-top:10px;
}
h6 {

font-size: 15px;
color: #ffff;
text-transform: capitalize;
font-weight: 100;
position: center;
margin-top:10px;
margin-bottom:-10px;
}
</style>
</head>
<body>

<img src="logo.png">
<h3>E-RANKING MANAGEMENT SYSTEM</h3>
<h6>Log in as...</h6>
<div class="row" style="align-items:center">
        <div class="col">
        </div>
        <div class="col2">
<div class="card">
  <a href="login.php"><img src="admin.jpg"  style="width:100%"></a>
</div>

<div class="card">
  <a href="user_login.php"><img src="user.jpg"  style="width:100%"></a>
</div>

</body>
</html> 
