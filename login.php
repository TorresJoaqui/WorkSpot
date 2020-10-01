<?php 
    
    $legajo = $_POST["nroLegajo"];
    $password = $_POST["password"];

    $fila = 1;
    
    if(($fp = fopen("contactosaux.csv", "r")) !== FALSE){
        while (($datos = fgetcsv($fp)) !== FALSE) {
            $numero = count($datos);
            //echo "$fila:\n";
            for ($i = 0; $i < $numero; $i++){
                ///echo $datos[$i]." ";
            }
            
            if($datos[2] == $legajo)
            {
                if($datos[3] == $password)
                {
                    echo "USUARIO ENCONTRADO";
                    echo $datos[0]." ".$datos[1]." ".$datos[2]." ".$datos[3]." ".$datos[4]." ".$datos[5]." ".$datos[6]." ".$datos[7]." ";
                }
                else
                {
                    echo "PASSWORD INCORRECTA";
                }
            }
            else if(feof($fp))
                {
                    echo "USUARIO NO ENCONTRADO";
                }
            
            $fila++;
        
    }
    fclose($fp);
    
    }
    

    /*$file = fopen("contactosaux.csv", "w+");

        
        fwrite($file, "Hola");
        
        echo "<br/>"; 
    fclose($file);
    */

    


    ?>