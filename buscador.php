  <?php
      $contenido = file_get_contents("data-1.json");
      $con = utf8_encode($contenido);
      $datos = json_decode($con, true);
      $cnat=count($datos);
      
      for ($x = 0; $x < $cnat; $x++) {
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
      ?>

      