<?php
session_start(); 
include '../../Modelo/Conexion/configServer.php';
	include '../../Modelo/Conexion/consulSQL.php';
$NumDepo=consultasSQL::clean_string($_POST['NumDepo']);
$tipoenvio=consultasSQL::clean_string($_POST['tipo-envio']);
$Cedclien=consultasSQL::clean_string($_POST['Cedclien']);

$comprobanteMaxSize=5120;


$verdata=  ejecutarSQL::consultar("SELECT * FROM cliente WHERE NIT='".$Cedclien."'");
if(mysqli_num_rows($verdata)>=1){

  if(!empty($_SESSION['carro'])){
    $StatusV="Pendiente";
    $suma = 0;
    foreach($_SESSION['carro'] as $codess){
        $consulta=ejecutarSQL::consultar("SELECT * FROM producto WHERE CodigoProd='".$codess['producto']."'");
        while($prod = mysqli_fetch_array($consulta, MYSQLI_ASSOC)) {
          $tp=number_format($fila['Precio']-($prod['Precio']*($prod['Descuento']/100)), 2, '.', '');
          $suma += $tp*$codess['cantidad'];
        }
        mysqli_free_result($consulta);
    }
    if(consultasSQL::InsertSQL("venta", "Fecha, NIT, TotalPagar, Estado, NumeroDeposito, TipoEnvio, Adjunto", "'".date('d-m-Y')."','$Cedclien','$suma','$StatusV','$NumDepo','$tipoenvio','$comprobanteF'")){

      /*recuperando el número del pedido actual*/
      $verId=ejecutarSQL::consultar("SELECT * FROM venta WHERE NIT='$Cedclien' ORDER BY NumPedido desc limit 1");
      $fila=mysqli_fetch_array($verId, MYSQLI_ASSOC);
      $Numpedido=$fila['NumPedido'];

      /*Insertando datos en detalle de la venta*/
      foreach($_SESSION['carro'] as $carro){
      		$preP=ejecutarSQL::consultar("SELECT * FROM producto WHERE CodigoProd='".$carro['producto']."'");
      		$filaP=mysqli_fetch_array($preP, MYSQLI_ASSOC);
          $pref=number_format($filaP['Precio']-($filaP['Precio']*($filaP['Descuento']/100)), 2, '.', '');
          	consultasSQL::InsertSQL("detalle", "NumPedido, CodigoProd, CantidadProductos, PrecioProd", "'$Numpedido', '".$carro['producto']."', '".$carro['cantidad']."', '$pref'");
          	mysqli_free_result($preP);

        /*Restando stock a cada producto seleccionado en el carrito*/
        $prodStock=ejecutarSQL::consultar("SELECT * FROM producto WHERE CodigoProd='".$carro['producto']."'");
        while($fila = mysqli_fetch_array($prodStock, MYSQLI_ASSOC)) {
            $existencias = $fila['Stock'];
            $existenciasRest=$carro['cantidad'];
            consultasSQL::UpdateSQL("producto", "Stock=('$existencias'-'$existenciasRest')", "CodigoProd='".$carro['producto']."'");
        }
      }
      
      /*Vaciando el carrito*/
      unset($_SESSION['carro']);
      echo '<script> location.href="../../Vista/Paginas/Pedidos.php"; </script>';

    }else{
      echo '<script>swal("ERROR", "Ha ocurrido un error inesperado", "error");</script>';
    }
  }else{
    echo '<script>swal("ERROR", "No has seleccionado ningún producto, revisa el carrito de compras", "error");</script>';
  }
}else{
    echo '<script>swal("ERROR", "El DNI es incorrecto, no esta registrado con ningun cliente", "error");</script>';
}
mysqli_free_result($verdata);