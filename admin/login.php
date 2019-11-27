<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">

    body{
      margin: 0;
      padding: 0;
      background: url(../img/bganom.jpg) ;
      background-size: cover;
      background-position: center;;
    }

    /*.formContainer{*/
      /*display: flex;
      justify-content: center;*/

    /*}*/

    .login-box{
      width:320px;
      height:420px;
      top: 50%;
      left: 50%;
      position: absolute;
      transform:translate(-50%,-50%);
      /*transform:translateX(-50%);*/

      background:rgba(0,0,0,0.5);
      color: #fff;
      box-sizing: border-box; 
      padding: 70px 30px;
    }

    .avatar{
      width: 100%;
      max-width: 100px;
      height: auto;
      border-radius: 50%;
      position: absolute;
      top: -50px;
      left: calc(50% - 50px);
      /*The + and - operators must always be surrounded by whitespace*/
      /*calc does not work if you dont use space in between expressions as above*/
      /*left: calc(50%-50px);*/  
    }

    .login-box input{
      width: 100%;
      margin-bottom: 20px;
    }

    .login-box input[type="checkbox"]{
      width: initial;
    }

    .login-box input[type="text"], input[type="password"]{
      border:none;
      border-bottom: 1px solid #fff;
      outline: none;
      background:transparent;
      height: 40px;
      color: #fff;
      font-size: 16px;
    }

    .login-box h1{
      padding: 0 0 20px;
      margin:0px;
      text-align: center;
      font-size: 22px;
    }

    .login-box input[type="submit"]{
      height: 40px;
      background-color: #065FD4;
      outline: none;
      border:none;
      font-size: 18px;
      color: #fff;
      border-radius: 20px;
    }

    .login-box input[type="submit"]:hover{
      background-color: #1c8adb;
      font-weight: bolder;
      cursor: pointer;
    }

    .login-box a{
      color: #fff;
      text-decoration:none; 
      font-size: 14px;
    }

    .login-box a:hover{
      color: #39dc79;
    }


/*    @media (min-width: 1000px){
      form{
        width: 30%;
      }
    }


    @media (min-width: 800px) and (max-width: 1000px){
      form{
        width: 50%;
      }
    }


    @media (min-width: 600px) and (max-width: 800px){
      form{
        width: 70%;
      }
    }*/

  

  </style>
</head>
<body>
<!-- <div class="formContainer"> -->
    <div class="login-box"> 
      <img src="../img/login/login2.png" alt="Avatar" class="avatar">
      <h1>Login Here</h1>
      <form action="adminCheck.php" method="POST">
        <label for="username">
          Username
          <br>
          <input type="text" name="username" id="username">
          <br>
        </label>
        <label>
          Password
          <br>
          <input type="text" name="password" id="passord">
          <br>
        </label>
        <label>
          <input type="checkbox">See Password
        </label>
        <input type="submit" name="" value="Login">
        <a href="#">Forgot Password?</a> 
      </form>
    </div>
<!-- </div> -->

</body>
</html>