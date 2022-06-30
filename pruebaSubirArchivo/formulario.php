<HTML>
    <HEAD>
    <TITLE>Binario a BD</TITLE>
    </HEAD>
    <BODY>
        <?php
        if (isset($_GET['proceso'])){
        echo $_GET['proceso']."<br>";
        }
        ?>
        <FORM enctype="multipart/form-data" method="post" action="insertar.php">
            Archivo: <INPUT type="file" name="archivo" size="30">
            <INPUT type="submit" name="submit" value="Subir archivo">
        </FORM>

        <form class="formulario col-lg-4" action="ver.php" method="GET">
            <div class="row">
            <div class="col-lg-12">
            <h3><i class="fas fa-car"></i> VISUALIZAR IMAGEN</h3> <p><p>
            </div>
            
            <?php
            $mysqli = new mysqli('localhost', 'root', 'kerkly1234', 'kerklyapp');
            ?>
            
            <div class="col-sm-5 col-lg-6">
            <label><h5><i class="fas fa-image"></i> Imagenes : </h5></label> <br><br>
            </div>
            <div class="col-sm-5 col-lg-6">
            
            <select class="form-control" name="id" required>
            <option value="">Seleccione:</option>
            <?php
            $query = $mysqli -> query ("SELECT * FROM archivos");
            while ($valores = mysqli_fetch_array($query)) {
            
            echo '<option value="'.$valores[id].'">'.$valores[archivo_nombre].'</option>';
            }
            ?>
            </select>
            
            </div>
            
            
            </div>
            
            <div class="btn col-lg-12">
            
            <button class="btn btn-info" type="submit" value="Enviar formulario" target="_blank"><i class="fas fa-check-circle"></i> Ver</button><p>
            </div>
        </form>
    </BODY>
</HTML>