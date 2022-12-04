<?php include_once 'includes/templates/header.php'; ?>

<!--<body>-->
    <section class="seccion contenedor">
        <h2>"Enterate de Nuevas Campañas Y Contactanos"</h2>
        <p>Antes de continuar recuerda que esta seccion es simplemente para mantenerte al tanto de que se presente en PSIVAPP 2019</p>
        <form action="noticias.php" method="POST">
            <label>Ingresar Nombre:</label>
            <input name="name" type="text" required="" placeholder="Nombre"/>
            <label>Ingresar Contraseña:</label>
            <input name="pass" type="password" required="" placeholder="Contraseña"/>
            <label>Ingresar Telefono:</label>
            <input name="tel" type="tel" required="" placeholder="ej. 3335889419"/>
            <input type="submit" name="enviar" value="REGISTRARSE"/>
        </form>
        <?php
        if (isset($_POST['enviar'])) {
            $nombre = $_POST['name'];
            $pass = $_POST['pass'];
            $tel = $_POST['tel'];

            $doc = new DomDocument('1.0', 'utf-8');
            $doc->formatOutput = true;
            $doc->load("noticias.xml");
            $raiz = $doc->getElementsByTagName("Usuarios")->item(0);
            $rama = $doc->createElement('Usuario');

            $hoja = $doc->createElement('nombre');
            $hoja->appendChild($doc->createTextNode($nombre));
            $rama->appendChild($hoja);

            $hoja = $doc->createElement('contrasenia');
            $hoja->appendChild($doc->createTextNode($pass));
            $rama->appendChild($hoja);

            $hoja = $doc->createElement('telefono');
            $hoja->appendChild($doc->createTextNode($tel));
            $rama->appendChild($hoja);

            $raiz->appendChild($rama);
            $doc->appendChild($raiz);
            $doc->save("noticias.xml");
        }
        ?>
    </section>
<!--</body>-->
<?php include_once 'includes/templates/footer.php'; ?>
