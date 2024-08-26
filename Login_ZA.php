  
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresar</title>

    <style type="text/css">
      *{
   font-family: Bahnschrift SemiBold,'Staatliches', cursive;
   font-size: 20px;
}
body {
  margin: 0;
  padding: 0;
  background: url(IMG/FONDOLO.jpg) no-repeat center top;
  background-size: cover;
  font-family: sans-serif;
  height: 100vh;
}

.login-box {
  width: 40%;
  height: 440px;
   background:  #800000;
  color: #fff;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
}

.login-box .avatar {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(50% - 50px);
}

.login-box h1 {
  text-transform: uppercase;
  margin: 0;
  padding: 0 0 5px;
  text-align: center;
  font-size: 22px;
   border-top: 5px solid#15181f;
    border-bottom:5px solid#15181f;
}

.login-box label {
  margin: 0;
  padding: 0;
  font-weight: bold;
  display: block;
}

.login-box input {
  width: 100%;
  margin-bottom: 20px;
}

.login-box input[type="text"], .login-box input[type="password"] {
  border: none;
  border-bottom: 1px solid #fff;
  background: transparent;
  outline: none;
  height: 40px;
  color: #fff;
  font-size: 16px;
}

.login-box button {
  width: 100%;
  border: none;
  height: 40px;
  background: #15181f;
  color: #fff;
  border-radius: 20px;
}

.login-box button:hover {
   width: 100%;
  cursor: pointer;
  background: #ffc107;
  color: white;
}


.login-box a {
  text-decoration: none;
  font-size: 20px;
  line-height: 20px;
  color: darkgrey;
}

.login-box a:hover {
  color: #fff;
}

      #let{
        font-size: 20px;
         color: #fff;
      }
      #let2{
        background: black;
        color: #15181f;
        font-size: 20px;
      }
      #let{
        font-size: 20px;
      }
    </style>
  </head>
  <body>
    <div class="login-box">
      <img src="IMG/AVATARLO.png" class="avatar" alt="Avatar Image">
      <h1 class="NoH1">Ingresa Aqui</h1>

      <form action="ValidarLO.php" method="POST">
        <br>
        <label for="username">Numero de Membresía</label>
        <input type="text" placeholder="Ingresa Membresía" name="CVE_MEMBRESIA" required>
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Contraseña" name="CONTRASENA_CLI" s>

       <button type="submit" class="btn btn-outline-danger">Ingresar</button>
      </form>
             <br>
        <a id="let" href="PARTE INDEX.php">Ir a Inicio</a>
    </div>
  </body>
</html>