  <?php
  	  $precio = $_POST['precio'];
      $ciudad = $_POST['ciudad'];
      $tipo = $_POST['tipo'];

      $contenido = file_get_contents("data-1.json");
      $con = utf8_encode($contenido);
      $datos = json_decode($con, true);
      $cnat=count($datos);
      
      $i=strpos($precio, ";");
      $min=number_format(substr($precio, 0, $i));
      $max=number_format(substr($precio, $i+1));

      for ($x = 0; $x < $cnat; $x++) {
        
        $pre=number_format(str_replace(',','',substr($datos[$x]["Precio"],1,strlen($datos[$x]["Precio"])-1)));
        $ciu=$datos[$x]["Ciudad"];
        $tip=$datos[$x]["Tipo"];

        if($ciudad=='')
        { $ciu=$ciudad; }

        if($tipo=='')
        { $tip=$tipo; }

        if($pre>=$min and $pre<=$max and $ciu==$ciudad and $tip==$tipo)
        {

        echo "<table><tr>".
		      		"<td rowspan='7'>"."<img src='img/home.jpg' width='200' height='150'></td>".
		      		"<td>Dirección: ".$datos[$x]["Direccion"]."</td></tr>".
		      		"<tr><td>Ciudad: ".$datos[$x]["Ciudad"]."</td></tr>".
		            "<tr><td>Teléfono: ".$datos[$x]["Telefono"]."</td></tr>".
		            "<tr><td>Código Postal: ".$datos[$x]["Codigo_Postal"]."</td></tr>".
		            "<tr><td>Tipo: ".$datos[$x]["Tipo"]."</td></tr>".
		            "<tr><td>Precio: ".$datos[$x]["Precio"]."</td></tr>".
		            "</table>";
        }
	    }
      ?>

      