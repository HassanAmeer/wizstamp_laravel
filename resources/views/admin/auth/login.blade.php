<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* CSS Libraries Used 

*Animate.css by Daniel Eden.
*FontAwesome 4.7.0
*Typicons

*/

@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400');

body, html {
  font-family: 'Source Sans Pro', sans-serif;
  background-color: #46080A;
  padding: 0;
  margin: 0;
}

#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
}

.container{
  margin: 0;
  top: 50px;
  left: 50%;
  position: absolute;
  text-align: center;
  transform: translateX(-50%);
  background-color: #470406;
  border-radius: 9px;
  border-top: 10px solid #D35256;
  border-bottom: 10px solid #8BD17C;
  width: 400px;
  height: 500px;
  box-shadow: 1px 1px 108.8px 19.2px #55171993;
}

.box h4 {
  font-family: 'Source Sans Pro', sans-serif;
  color: #E07A7D; 
  font-size: 18px;
  margin-top:40px;;
}

.box h4 span {
  padding-left:1rem;
  color: #dfdeee;
  font-weight: lighter;
}

.box h5 {
  font-family: 'Source Sans Pro', sans-serif;
  font-size: 13px;
  color: #a1a4ad;
  letter-spacing: 1.5px;
  margin-top: -15px;
  margin-bottom: 70px;
}

.box input[type = "email"],.box input[type = "password"] {
  display: block;
  margin: 20px auto;
  background: #493031;
  border: 0;
  border-radius: 5px;
  padding: 14px 10px;
  width: 320px;
  outline: none;
  color: #d6d6d6;
      -webkit-transition: all .2s ease-out;
    -moz-transition: all .2s ease-out;
    -ms-transition: all .2s ease-out;
    -o-transition: all .2s ease-out;
    transition: all .2s ease-out;
  
}
::-webkit-input-placeholder {
  color: #939DB9;
}

.box input[type = "text"]:focus,.box input[type = "password"]:focus {
  border: 1px solid#B83135;
  
}

a{
  color: #DB6064;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

 label input[type = "checkbox"] {
  display: none; /* hide the default checkbox */
}

/* style the artificial checkbox */
label span {
  height: 13px;
  width: 13px;
  border: 2px solid #6D4547;
  border-radius: 2px;
  display: inline-block;
  position: relative;
  cursor: pointer;
  float: left;
  left: 7.5%;
}

.btn1 {
  border:0;
  background: #9B3A3D;
  color: #dfdeee;
  border-radius: 100px;
  width: 340px;
  height: 49px;
  font-size: 16px;
  position: absolute;
  top: 79%;
  left: 8%;
  transition: 0.3s;
  cursor: pointer;
}

.btn1:hover {
  background: #3A0B0C;
}

.rmb {
  position: absolute;
  margin-left: -24%;
  margin-top: 0px;
  color: #dfdeee;
  font-size: 13px;
}

.forgetpass {
  position: relative;
  float: right;
  right: 28px;
}

.dnthave{
    position: absolute;
    top: 92%;
    left: 24%;
}

[type=checkbox]:checked + span:before {/* <-- style its checked state */
    font-family: FontAwesome;
    font-size: 16px;
    content: "\f00c";
    position: absolute;
    top: -4px;
    color: #AC282C;
    left: -1px;
    width: 13px;
}

.typcn {
  position: absolute;
  left: 339px;
  top: 282px;
  color: #583435;
  font-size: 22px;
  cursor: pointer;
}      

.typcn.active {
  color: #EE454B;
}

.errortoast {
  background: #FFD153;
  text-align: center;
  width: 20rem;
  height: 1.5rem;
  padding: 10px;
  border: 0;
  border-radius: 5px;
  margin-top: 1.5rem !important;
  /* margin: 10px auto 10px; */
  /* position: absolute; */
  /* top: 31%; */
  /* left: 7.2%; */
  color: black;
  text-shadow: 1px 0.5px 0.5px #583435CB;
  /* display: none; */
}

.footer {
    position: relative;
    left: 0;
    bottom: 0;
    top: 605px;
    width: 100%;
    color: #78797d;
    font-size: 14px;
    text-align: center;
}

.footer .fa {
  color: #A73236;
}
    </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.4.0/css/all.min.css" integrity="sha512-eBNnVs5xPOVglLWDGXyZnZZ2K2ixXhR/3aECgCpFnW2dGCd/yiqXZ6fcB3BubeA91kM6NX234b6Wrah8RiYAPA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</head>
<body id="particles-js"></body>

<div class="animated bounceInDown">
  <div class="container">
    <!-- <form name="form1" onsubmit="return checkStuff()" -->
    <form class="box" action="{{ route('loginpost') }}" method="POST"> 
  @csrf
  @if(session('redtoast'))
      <center> <div class="errortoast"> {{session('redtoast')}} </span> </center>
  @endif
      <h4 style="font-size:1.5rem;">Admin <span><a href="#">Login </a></span></h4>
      <h5>Sign in to wizo_Stamp.</h5>
        <input type="email" name="loginemail" placeholder="Email" autocomplete="off" required>
        <i class="typcn typcn-eye" id="eye"></i>
        <input type="password" name="loginpassword" placeholder="Passsword" id="pwd" autocomplete="off" required>
        <!-- <label>
          <input type="checkbox">
          <span></span>
          <small class="rmb">Remember me</small>
        </label>
        <a href="#" class="forgetpass">Forget Password?</a> -->
        <input type="submit" value="Sign in" class="btn1">
      </form>
        <!-- <a href="#" class="dnthave">Don’t have an account? Sign up</a> -->
  </div> 
       <div class="footer">
      <span> Got To __ <i class="fas fa-tag pulse"> </i> <a href="#"><a href="#"> Website </a></span>
    </div>
</div>

</html>