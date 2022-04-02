<?php

function obtenerServicios(): array
{

    try {
        require 'includes/database.php';

        $consulta = "SELECT * FROM servicios";
        $consulta = mysqli_query($db, $consulta);


        $i = 0;
        $servicios = [];
        while ($row = mysqli_fetch_assoc($consulta)) {
            $servicios[$i]['id'] = $row['id'];
            $servicios[$i]['nombre'] = $row['nombre'];
            $servicios[$i]['precio'] = $row['precio'];
            $i++;
        }

        return $servicios;
    } catch (\Throwable $th) {

        var_dump($th);
    }
}
