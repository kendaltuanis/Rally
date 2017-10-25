<?php
($argc>1) ? null: die("No contiene los parametros suficientes");

$conexion = mysqli_connect("localhost", "root", "", "rally") or die("Error al conectar a la base de datos");

$query = "SELECT cedula,estudiante.nombre as nombre_estu,apellidos,carreras.nombre,fecha FROM estudiante,carreras,estudiantesmatricula WHERE estudiante.cedula=estudiantesmatricula.codigo_estudiante and carreras.codigo=estudiantesmatricula.codigo_carrera";
$resultado = $conexion->query($query);

$fp = fopen($argv[1].'.csv', 'w');

  fputcsv($fp, ["Cedula","Nombre","Apellidos","Carrera","Fecha"]); // headers
while($row = $resultado-> fetch_assoc())
  {
      fputcsv($fp, $row);
  }

fclose($fp);
