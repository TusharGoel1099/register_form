<html>
<head>
<title>My Form</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
$font-family:   "Roboto";
$font-size:     14px;

$color-primary: #ABA194;

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: $font-family;
    font-size: $font-size;
    background-size: 200% 100% !important;
    animation: move 10s ease infinite;
    transform: translate3d(0, 0, 0);
    background: linear-gradient(45deg, #49D49D 10%, #A2C7E5 90%);
    height: 100vh
}

.user {
    width: 90%;
    max-width: 340px;
    margin: 10vh auto;
}

.user__header {
    text-align: center;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.7s forwards;
}

.user__title {
    font-size: $font-size;
    margin-bottom: -10px;
    font-weight: 500;
    color: white;
}

.form {
    margin-top: 40px;
    border-radius: 6px;
    overflow: hidden;
    opacity: 0;
    transform: translate3d(0, 500px, 0);
    animation: arrive 500ms ease-in-out 0.9s forwards;
}

.form--no {
    animation: NO 1s ease-in-out;
    opacity: 1;
    transform: translate3d(0, 0, 0);
}

.btn {
    display: block;
    width: 100%;
    padding: 20px;
    font-family: $font-family;
    -webkit-appearance: none;
    outline: 0;
    border: 0;
    color: white;
    background: $color-primary;
    transition: 0.3s;
    
    &:hover {
        background: darken($color-primary, 5%);
    }
}

@keyframes NO {
  from, to {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }

  10%, 30%, 50%, 70%, 90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0);
  }

  20%, 40%, 60%, 80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0);
  }
}

@keyframes arrive {
    0% {
        opacity: 0;
        transform: translate3d(0, 50px, 0);
    }
    
    100% {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }
}

@keyframes move {
    0% {
        background-position: 0 0
    }

    50% {
        background-position: 100% 0
    }

    100% {
        background-position: 0 0
    }
}
</style>
</head>
<body>

<div class="user">
<header class="user__header">
<h1 class="user__title">Registration Form</h1>
</header>
<div class="form">
<form method="post" class="form">
<div class="form-group">
<input type="text" name="email" class="form-control"  placeholder="Email" value="<?= set_value("email")?>"  />
<?php echo form_error("email","<div class='alert alert-danger'>","</div>"); ?>
</div>
<br><br>
<div class="form-group">
<input type="text" name="name" class="form-control"  placeholder="Name"  value="<?= set_value("name")?>"  />
<?php echo form_error("name","<div class='alert alert-danger'>","</div>"); ?>
</div>
<br><br>
<div class="form-group">
<input type="number" name="mobile" class="form-control"  placeholder="Mobile Number" value="<?= set_value("mobile")?>"  />
<?php echo form_error("mobile","<div class='alert alert-danger'>","</div>"); ?>
</div>
<br><br>
<div class="form-group">
<input type="date" name="dob" class="form-control"  placeholder="Date of Birth" value="<?= set_value("dob")?>" max="2017-04-01" min="1949-04-30"   />
<?php echo form_error("dob","<div class='alert alert-danger'>","</div>"); ?>
</div>
<br><br>
<div class="form-group">
<input type="number" name="pin" class="form-control"  placeholder="Pincode" value="<?= set_value("pin")?>" />
<?php echo form_error("pin","<div class='alert alert-danger'>","</div>"); ?>
</div>
<div><input type="submit"  class= "btn" value="Submit" /></div>

</form>
</div>
</body>
</html>