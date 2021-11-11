<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>University Comparison</title>  
  <link rel="stylesheet" href="style3.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-typeahead.css" />
  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.min.js" crossorigin="anonymous"></script>
  
  <style>

  .dropbtn {
    margin-left: 50px;
    background-color: #fca400;
    color: white;
    padding: 6px;
    border: none;
  }
  h5{ 
    color:#fff;
    text-shadow: 0 0 5px #999;
    font-size: 10px;
}
  .bootstrap-tagsinput {
   width: 100%;
  }
  h2
{
  color:#ffff;
  font-size:110%;
}
 
    	h1 
	{text-align: auto;
	 color: white;
	 font-size: 20px;
	 font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', 'sans-serif';
 }
 .container2 {
width: 100%;
height: 300vh;
background: url('./orange.png');
background-position: center;
background-size: flex;
padding-left: 8%;
padding-right: 8%;
box-sizing: border-box;


}
.navbar { 
    height: 7%;
    display: flex;
    align-items: center;
}
.logo
{
  width:60px;
  padding-right:20px;
}
 .bootstrap-tagsinput {
   width: 100%;
  }
  .form-group{
      margin-top:-10%;
  }
  .col-md-10
{
    margin-top:0%;
}
.table-responsive{ 
    margin-left:10%;
}
table {
    margin-left:-540%;
    padding-top:20%;
	 font-size: small;
	 width: 600%;
     height: 10px;
	}
     th 
	{font-weight: bold;
	 color: white;
	 border: 0px solid black;
	 padding: 10px;
	 text-align: left;
	 background:#d96459;
	}
  
        td 
	{background-color:#fbefcc;
	 border: 0px solid black;
	 font-weight: lighter;
	 padding:10px;
     width: 50px;
     font-size: 12px;
	 text-align: left;
    
	}

        tr
	{background-color: #d9b3ff;
	 border: 1px solid black;
	 font-weight: lighter;
	 height: 20px;
     width: 10px;
	 padding:0 20px;
	 text-align: left;

	}
  </style>
 </head>
 <body>
 <div class="container2">
<div class="navbar">
<img src="logo.png" class="logo"></p>
<h2><b>E-UNIVERSITY RANKING SYSTEM</b></h2>
<nav>
    <ul>
    <li><a href="user_dashboard.php">DASHBOARD</a></li>
        <li><a href="index2.php">HOME</a></li>
        <li><a href="index2.php#about">ABOUT</a></li>
        <li><a href="user_team.php">CONTACT US</a></li> 
      
</ul>
</nav>
<div class="dropdown">
    <button class="dropbtn" style="width: 50%; height: 30%; margin-top:20%">
        <img src="menu.png" style="width: 20px; height: 20px;" ></button>
      

    <div class="dropdown-content">
      <h5><a href="user_profile.php">ADMIN PROFILE</a>
      <a href="user_profile.php">CHANGE PASSWORD</a>
      <a href="user_logout.php">LOG OUT</a></h5>
    </div>
  </div>
  </div> 
  <h1>UNIVERSITY COMPARISON</h1>
     <div class="col-md-10">
      <input type="text" id="tags" class="form-control" data-role="tagsinput" />
     </div>
     <div class="col-md-2">
      <button type="button" name="search" class="btn btn-primary" id="search">Search</button>
  
  
   <div class="table-responsive">

     <p><b>Total Records - <span id="total_records"></span></b></p>
    </div>
    <table cellpadding="30" cellspacing="1" style="margin-top:-5%;padding-top:20px">
     <thead>
   
       <th>Year</th>
       <th>University Name</th>
       <th>University Location</th>
       <th>University Score</th>
       <th>University Rank</th>
       <th>Student Ratio</th>
       <th>International Students</th>
       <th>Academic Reputation</th>
      </tr>
     </thead>
     <tbody>
     </tbody>
    </table>
   </div>
  </div>
  <div style="clear:both"></div>
 
  
 </body>
</html>


<script>
$(document).ready(function(){
 
 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query},
   dataType:"json",
   success:function(data)
   {
    $('#total_records').text(data.length);
    var html = '';
    if(data.length > 0)
    {
     for(var count = 0; count < data.length; count++)
     {
      html += '<tr>';
      html += '<td>'+data[count].year+'</td>';
      html += '<td>'+data[count].name+'</td>';
      html += '<td>'+data[count].address+'</td>';
      html += '<td>'+data[count].score+'</td>';
      html += '<td>'+data[count].rank+'</td>';
      html += '<td>'+data[count].ratio+'</td>';
      html += '<td>'+data[count].interstu+'</td>';
      html += '<td>'+data[count].acadrep+'</td></tr>';
     }
    }
    else
    {
     html = '<tr><td colspan="5">No Data Found</td></tr>';
    }
    $('tbody').html(html);
   }
  })
 }

 $('#search').click(function(){
  var query = $('#tags').val();
  load_data(query);
 });

});
</script>

    