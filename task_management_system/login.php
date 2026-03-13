<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login | Task Management System</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
height:100vh;
margin:0;
display:flex;
font-family:Arial;
background: linear-gradient(135deg,#667eea,#764ba2);
overflow:hidden;
}

/* LEFT PANEL */

.left-side{
width:50%;
display:flex;
flex-direction:column;
justify-content:center;
align-items:center;
color:white;
text-align:center;
}

.left-side h1{
font-size:48px;
font-weight:bold;
}

.left-side p{
font-size:20px;
margin-top:10px;
}

/* FLOATING ICONS */

.icon{
position:absolute;
font-size:30px;
opacity:0.6;
animation:float 6s infinite ease-in-out;
}

.icon1{top:10%; left:10%;}
.icon2{top:20%; left:20%;}
.icon3{top:30%; left:35%;}

.icon5{top:50%; left:35%;}
.icon6{top:60%; left:20%;}
.icon7{top:70%; left:10%;}

@keyframes float{
0%{transform:translateY(0);}
50%{transform:translateY(-20px);}
100%{transform:translateY(0);}
}

/* RIGHT PANEL */

.right-side{
width:50%;
display:flex;
justify-content:center;
align-items:center;
}

/* GLASS LOGIN CARD */

.login-box{

width:360px;
padding:35px;

background:rgba(255,255,255,0.15);
border-radius:15px;

backdrop-filter: blur(10px);

box-shadow:0 10px 25px rgba(0,0,0,0.3);

color:white;

animation:slideUp 1s ease;
}

/* ANIMATION */

@keyframes slideUp{
0%{
opacity:0;
transform:translateY(50px);
}
100%{
opacity:1;
transform:translateY(0);
}
}

/* INPUT */

.form-control{
background:rgba(255,255,255,0.2);
border:none;
color:white;
}

.form-control::placeholder{
color:#eee;
}

.form-control:focus{
box-shadow:none;
background:rgba(255,255,255,0.3);
}

/* BUTTON */

.btn-primary{
background:#00c6ff;
border:none;
transition:0.3s;
}

.btn-primary:hover{
background:#0072ff;
transform:scale(1.05);
}

</style>
</head>

<body>

<!-- FLOATING ICONS -->

<div class="icon icon1">📋</div>
<div class="icon icon2">📊</div>

<div class="icon icon3">✅</div>
<div class="icon icon5">📅</div>
<div class="icon icon6">📌</div>
<div class="icon icon7">📝</div>

<!-- LEFT SIDE -->

<div class="left-side">

<h1>Task Management System</h1>

<p>Organize Tasks<br>Track Progress<br>Boost Productivity</p>

</div>

<!-- RIGHT SIDE -->

<div class="right-side">

<form method="POST" action="app/login.php" class="login-box">

<h3 class="text-center mb-4">Login</h3>

<?php if (isset($_GET['error'])) {?>
<div class="alert alert-danger">
<?php echo stripcslashes($_GET['error']); ?>
</div>
<?php } ?>

<?php if (isset($_GET['success'])) {?>
<div class="alert alert-success">
<?php echo stripcslashes($_GET['success']); ?>
</div>
<?php } ?>

<div class="mb-3">
<label>User Name</label>
<input type="text" class="form-control" name="user_name" placeholder="Enter username">
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" class="form-control" name="password" placeholder="Enter password">
</div>

<button type="submit" class="btn btn-primary w-100">Login</button>

</form>

</div>

</body>
</html>