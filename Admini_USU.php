<?php 
  include(".PHP/conexion.php");
    if(isset($_GET['CVE'])){
      $Clave=$_GET['CVE'];
    }
     ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="estilodashboard.css">
    <link rel="stylesheet" href="css/all.min.css">
     <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="styles5.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
     <script src="scripts5.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="datatables-simple-demo.js"></script>
    <title>Admin</title>
</head>

<body background="IMG/fondo2.jpg">

    <input type="checkbox" id="nav-toggle">
    
    <!--BARRA LATERAL-->
    <div class="sidebar">

        <!--IMG Y TEXTO-->
        <div class="sidebar-brand">
            <h2><img src="IMG/Logo2.png" width="280px" height="60px" alt=""></h2>
        </div>
        <!--IMG Y TEXTO-->

        <!--OPCIONES BARRA LATERAL-->
        <div class="sidebar-menu">

                <li>
                    <a href="indexdashboard.php?CVE=<?php echo $Clave ?>"><span class="las la-home"></span>
                    <span>Index</span></a>
                </li>
                <li>
                    <a href="Admin_AD.php?CVE=<?php echo $Clave ?>"><span><i class="fas fa-tools"></i> </span>
                    <span>Trabajadores</span></a>
                </li>
                <li>
                    <a href="Admini_USU.php?CVE=<?php echo $Clave ?>" class="active"><span><i class="fas fa-users"></i></span>
                    <span>Clientes</span></a>
                </li>
                <li>
                    <a  href="Admin_Agregar.php?CVE=<?php echo $Clave ?>" ><span><i class="fas fa-history"></i></span>
                    <span>Agregar</span></a>
                </li>
                <li>
                    <a href="Actualizar_ZA.php?CVE=<?php echo $Clave ?>"><span><i class="fas fa-id-card-alt"></i></span>
                    <span>Actualizaciones</span></a>
                </li>
                <li>
                    <a href="Admin_Ped.php?CVE=<?php echo $Clave ?>"><span><i class="fas fa-history"></i></span>
                    <span>Pedidos</span></a>
                </li>
                 <li>
                    <a  href="Historial_Ped.php?CVE=<?php echo $Clave ?>" ><span><i class="fas fa-history"></i></span>
                    <span>Historial De Ventas</span></a>
                </li>
                <li>
                    <a href="PARTE INDEX.php"><span><i class="fas fa-search"></i></span>
                     <span>Cerrar Sesión</span></a>
                </li>
        </div>
        <!--OPCIONES BARRA LATERAL-->
    </div>
    <!--BARRA LATERAL-->
    

    <div class="main-content">
        <!--NAV-->
        <header>
           <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label> <b>Tablero</b>
            </h2>

             <?php 
                      include("PHP/conexion.php");
                      $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
                      while ($fila = mysqli_fetch_array($resultado)) {
                     ?>
            <div class="user-wrapper">
               <a href="USUARIO EJEMPLO2.php?CVE=<?php echo $Clave; ?>"><img src="IMG/<?php echo $fila ['IMAGEN_USU'];?>" width="40px" height="40px"></a>
                <div>
                   
                  <b><a href="USUARIO EJEMPLO2.php?CVE=<?php echo $Clave; ?>"><?php echo $fila ['NOMBRE']; ?><?php echo ' ', $fila ['APELLIDO_PATERNO']; ?><?php echo ' ', $fila ['APELLIDO_MATERNO']; ?></a></b> <br>
                    <small>Administrador</small>
                <?php } ?>
                </div>
            </div>
        </header>
        <!--NAV-->

        <main background="IMG/fondo2.jpg">
<style type="text/css">
  h2{
  font-size: 23px;
}
b a{
  font-size: 16px;
  color: #551A8B;
  padding-bottom: 0px;
}
a{
  text-decoration: none;
}
small{
  font-size: 14px;
  padding-top: 0px;
}

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
td{
    text-align: center;
    font-size: 16px;
}
#linea{
  background-color: #fdfaf4;
  border-top: 5px solid grey;
  border-bottom:5px solid grey;
  text-align: center;
  padding-right: 30px;
  padding-left: 30px;
  padding-bottom: 15px;
  padding-top: 15px;
}
.btn-warning2{
  text-align: center;
  padding: 24px;
  padding-top: 5px;
  padding-bottom: 5px;
  background: #8A0829;
  position: relative;
  color: white;
  font-size: 22px;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
} 
.btn-warning3{
  text-align: center;
  padding: 24px;
  padding-top: 5px;
  padding-bottom: 5px;
  background: green;
  position: relative;
  color: white;
  font-size: 22px;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
} 
.btn-warning4{
  text-align: center;
  padding: 24px;
  padding-top: 5px;
  padding-bottom: 5px;
  background: blue;
  position: relative;
  color: white;
  font-size: 22px;
  font-family: Bahnschrift SemiBold,'Staatliches', cursive;
} 
    </style>
    <br>
          <div id="linea">
  <h1 class="NoH11">Administración de Clientes</h1>
  <br>
</div>
<br>
          
            <!--TABLA CLIENTES RECIENTES-->
              <div class="projects">
                    <br>
                    <div class="card mb-4">
                               <div class="card-header">
                            <h3>Clientes</h3>
                        </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                       <tr>
                                            <th>Clave</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Teléfono</th>
                                            <th>Correo</th>
                                            <th>Contraseña</th>
                                            <th>Historial</th>
                                            <th>Remover</th>
                                        </tr>
                                    </thead>
                                     <?php 
                                     include("PHP/conexion.php");
                                      $resultado = $conn ->query("select * from usuarios where CVE_USUARIOS='$Clave'") or die($conn -> error);
                                      while ($fila = mysqli_fetch_array($resultado)) {
                                      $DOM=$fila ['CVE_DOMICILIO'];
                                      }
                                     ?>
                                    <tbody>
                                      
                                        <?php 
                                          include("PHP/conexion.php");
                                          $resultado = $conn ->query("
                                            Select U.NOMBRE,APELLIDO_PATERNO,APELLIDO_MATERNO,CORREO_ELECT,CVE_MEMBRESIA,   NUM_TELEFONO
                                            from USUARIOS as U,CLIENTE as C
                                            where C.CVE_MEMBRESIA=U.CVE_USUARIOS") or die($conn -> error);
                                          while ($fila = mysqli_fetch_array($resultado)) {
                                         ?>
                                      <center>
                                        <tr>
                                           <td><?php echo $fila ['CVE_MEMBRESIA']; ?></td>
                                            <td><?php echo $fila ['NOMBRE']; ?></td>
                                            <td><?php echo $fila ['APELLIDO_PATERNO'];?><?php echo " ";  ?><?php echo $fila ['APELLIDO_MATERNO'];?></td>
                                            <td><?php echo $fila ['NUM_TELEFONO']; ?></td>
                                                <td><?php echo $fila ['CORREO_ELECT']; ?></td>
                                                <td>
                                                <center>  
                                                <a href="Cambio_CC3.php?CVE=<?php echo $fila ['CVE_MEMBRESIA']; ?><?php echo "&" ?>CVE2=<?php echo $Clave ?>"><button type="submit" class="btn btn-warning4">C</button></a>
                                               </center>
                                            </td>
                                                <td>
                                                <center>  
                                                <a href="Admin_USU_ver.php?CVE=<?php echo $fila ['CVE_MEMBRESIA']; ?><?php echo "&" ?>CVE2=<?php echo $Clave ?>"><button type="submit" class="btn btn-warning3">H</button></a>
                                               </center>
                                            </td>
                                            <td>
                                                <center>  
                                                 <a href="Eliminar_Cliente.php?CVE=<?php echo $fila ['CVE_MEMBRESIA']; ?><?php echo "&" ?>CVE2=<?php echo $Clave ?>"><button type="submit" class="btn btn-warning2">X</button></a>
                                               </center>
                                            </td>
                                        </tr>
                                        </center>
                                    <?php } ?>      
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
    </div>
            <br>
              
 
        </main>

    </div>

</body>

</html>