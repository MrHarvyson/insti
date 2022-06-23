
        <?php

        include ("conexion.php");
        $consulta = "select * from contactos";
        $ejecutarconsulta = mysqli_query($conex,$consulta);
        $fila = mysqli_fetch_array($ejecutarconsulta);

        for ($i=0; $i<=$fila; $i++){
            echo'
                <tr>
                    <td>'.$fila[1].'</td>
                    <td>'.$fila[2].'</td>
                    <td>'.$fila[3].'</td>
                    <td>'.$fila[4].'</td>
                    <td>'.$fila[5].'</td>
                </tr>
            ';
            $fila = mysqli_fetch_array($ejecutarconsulta);
        }



