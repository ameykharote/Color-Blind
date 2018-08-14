<style>
*{  
  margin:0;
  padding:0;
}

body{
  
  background-color:#f0f0f0;
  font-family:helvetica;
}

a{
  display:block;
  color:#ad5482;  
  text-decoration:none;
  font-weight:bold;
  margin-top:40px;
  text-align:center;
}

#bg{
  position:relative;
  top:20px;
  height:600px;
  width:800px;
  background:url('http://i.imgur.com/3eP9Z4O.png') center no-repeat;
  background-size:cover;
  margin-left:auto;
  margin-right:auto; 
  border:#fff 15px solid;
}

.module{
  position:relative;
  top:15%;    
  height:70%;
  width:450px;
  margin-left:auto;
  margin-right:auto;
  border-radius:5px;
  background:RGBA(255,255,255,1);
    
  -webkit-box-shadow:  0px 0px 15px 0px rgba(0, 0, 0, .45);        
  box-shadow:  0px 0px 15px 0px rgba(0, 0, 0, .45);
  
}

.module ul{
  list-style-type:none;
  margin:0;
}

.tab{
  float:left;
  height:60px;
  width:25%;
  padding-top:20px;
  box-sizing:border-box;
  background:#eeeeee;  
  text-align:center;
  cursor:pointer;
  transition:background .4s;
}

.tab:first-child{  
  -webkit-border-radius: 5px 0px 0px 0px;
  border-radius: 5px 0px 0px 0px;
}

.tab:last-child{  
  -webkit-border-radius: 0px 5px 0px 0px;
  border-radius: 0px 5px 0px 0px;
}

.tab:hover{  
  background-color:rgba(0,0,0,.1);
}

.activeTab{
  background:#fff;
}

.activeTab .icon{
  opacity:1;
}

.icon{
  height:24px;
  width:24px;
  opacity:.2;
}

.form{
  float:left;
  height:86%;
  width:100%;
  box-sizing:border-box;
  padding:40px;
}
.number{
  height:50px;
  width:100%;
  border-radius:3px;
  border:rgba(0,0,0,.3) 2px solid;
  box-sizing:border-box;
  padding:10px;
  margin-bottom:30px;
}

.number:focus{
  outline:none;
   border:rgba(24,149,215,1) 2px solid;
   color:rgba(24,149,215,1);
}

.textbox{
  height:50px;
  width:100%;
  border-radius:3px;
  border:rgba(0,0,0,.3) 2px solid;
  box-sizing:border-box;
  padding:10px;
  margin-bottom:30px;
}

.textbox:focus{
  outline:none;
   border:rgba(24,149,215,1) 2px solid;
   color:rgba(24,149,215,1);
}

.button{
  height:50px;
  width:100%;
  border-radius:3px;
  border:rgba(0,0,0,.3) 0px solid;
  box-sizing:border-box;
  padding:10px;
  margin-bottom:30px;
  background:#90c843;
  color:#FFF;
  font-weight:bold;
  font-size: 12pt;
  transition:background .4s;
  cursor:pointer;
}

.button:hover{
  background:#80b438;
  
}



</style>

<?php
 session_start();
 $_SESSION["result"];
 
?>

<?php
 
 if (isset($_POST)&& !empty($_POST))	{

	if ($_POST["number"] === '5' )
	{
		$_SESSION['result'] = $_SESSION['result']+1; 
		echo("<script>window.alert('Correct')</script>");
	}
	else 
	{
		echo("<script>window.alert('InCorrect')</script>");
	}
	
	echo("<script>window.location='test4.php'</script>");
 }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Oxygen</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/animate.min.css" rel="stylesheet"> 
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <link href="css/lightbox.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet">
  <link id="css-preset" href="css/presets/preset1.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="images/favicon.ico">
</head><!--/head-->
  




  <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="index.html">Home</a></li>
               
          </ul>
        </div>
		
      </div>
    </div>
	<div>
   <body>
   
   <div>
   
   <html>
<img src="Ishihara\6.jpg" alt="plate3">
</html>
    
</div>
<form action="test3.php" method="POST">
  What number can you see?:<br>
  <input type="text" name="number" value="">
  <br>
  <br>
  <input type="submit" value="Submit">
</form> 


<p>Click on submit to move to next test</p>

</body>
                                             
</div>
</div>
</html>