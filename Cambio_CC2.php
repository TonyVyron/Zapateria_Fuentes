 <?php 
  include(".PHP/conexion.php");
  if (isset($_SESSION['carrito'])) {
    //SI existe se busca si ya estaba agregado
  }else{
      if(isset($_GET['CVE'])){
      $Clave=$_GET['CVE'];
    }
  }
     ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
<style type="text/css">
	

	.NoH11{
  text-transform: uppercase;
    position:relative;
    display: inline-block;
    font-size: 60px; 
    border-top: 5px solid red;
    border-bottom:5px solid red;
    font-family: Bahnschrift SemiBold,'Staatliches', cursive;
    padding-left: 5px;
    padding-right: 5px;
    float: center;
}
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
  height:550px;
  background:#15181f;
  color: #fff;
  top: 50%;
  left: 50%;
  position: absolute;
  transform: translate(-50%, -50%);
  box-sizing: border-box;
  padding: 70px 30px;
}

.login-box .avatar {
  width: 140px;
  height: 140px;
   border-top: 5px solid blue;
    border-bottom:5px solid blue;
    border-left: 5px solid blue;
     border-right: 5px solid blue;
  border-radius: 50%;
  position: absolute;
  top: -50px;
  left: calc(47% - 50px);
}

.login-box h1 {
	text-transform: uppercase;
  margin: 0;
  padding: 0 0 5px;
  text-align: center;
  font-size: 22px;
   border-top: 5px solid red;
    border-bottom:5px solid red;
}

.login-box label {
  margin: 0;
  padding: 0;
  font-weight: bold;
  display: block;
}

.login-box input {
  width: 90%;
  padding-left: 40px;
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
  background: #b80f22;
  color: #fff;
  border-radius: 20px;
}

.login-box button:hover {
   width: 100%;
  cursor: pointer;
  background: #ffc107;
  color: #000;
}

.login-box a {
   width: 100%;
  text-decoration: none;
  font-size: 20px;
  line-height: 20px;
  color: white;
}

.login-box a:hover {
   width: 100%;
  color: #fff;
}

</style>
 </head>

 </body>} <?php 

  $conn= new mysqli('localhost','root','12345678','zapateriafuentes');
  $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
  while ($fila = mysqli_fetch_array($resultado)) {
 ?>
    <div class="login-box">
     <img src="IMG/<?php echo $fila ['IMAGEN_USU'];?>" class="avatar" alt="Avatar Image">
      <br>
      <br>
      <h1 class="NoH1">Cambiar Contraseña</h1>
     <form action="Actu_Contra2.php" method="POST">
    <br><br>
   <label class="font-weight-bold">Clave de Administrador<span class="text-danger">*</span></label>
  <input  name="CVE_ADMINISTRADOR" type="text"  placeholder="Ingresa su Clave de Administrador">
  <br><br>
   <label class="font-weight-bold">Nueva Contraseña <span class="text-danger">*</span></label>
   <input name="CONTRASENA_ADM" type="password" placeholder="Ingresa una contraseña">
      <br>
   <br>
  <button type="submit" class="btn btn-primary">Cambiar</button>
  </form>
<?php } ?>
   <a  href="indexdashboard.php?CVE=<?php echo $Clave; ?>"><p>Ir a Administrador</p></a>
  <a href="USUARIO EJEMPLO2.php?CVE=<?php echo $Clave;?>"><p>Regresar a Perfil</p></a>
  
    </div>
 </html>

 