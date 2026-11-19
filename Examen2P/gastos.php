<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen segundo parcial</title>
    <link rel="stylesheet" href="./css/estilos.css">
</head>
<body>
    <header> Control de Gastos Personales </header>


    <section>
        <h2> Registrar nuevo Gasto </h2>
            <form action="">
                <div class= "campo">
                    <label for="concepto"></label>
                    <input 
                    type="text"
                    name="concepto"
                    placeholder="Concepto">
                </div>
                
                <div class="campo">
                    <label for="monto"></label>
                    <input 
                    type="num"
                    name="monto"
                    placeholder="Monto:">
                </div> 
                
                <div class="campo">
                    <label for="categoria"></label>
                    <input 
                    type="text"
                    name="categoria"
                    placeholder="categoria">
                </div>    

                <button type="submit"> Registrar Gasto </button>

            </form>

    <section>
        <h2> Listado de Gastos </h2>
            <div class="tabla-contenedor">
                    <table class="tabla">
                        <thead>
                            <tr>
                                <th>Concepto</th>
                                <th>Categoria</th>
                                <th>Monto</th>
                                <th>Fecha</th>
                                <th>Estado</th>
                            </tr>
                        </thead>

                        <tbody>
                           <?php
                            require 'consulta.php';
                            $rsMensajes= consultar_gastos();
                            while($arrMensajes= mysqli_fetch_array($rsMensajes)){
                        echo'<tr>
                            <td>' . $arrMensajes['concepto'] . '</td>
                            <td>' . $arrMensajes['categoria'] . '</td>
                            <td>' . $arrMensajes['monto'] . '</td>
                            <td>' . $arrMensajes['timeStaps'] . '</td>
                            <td class="acciones">
                         </tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
</body>
</html>