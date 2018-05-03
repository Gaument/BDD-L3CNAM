<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css">
        <div class="container" style="padding-top:5em;">
        <?php include 'content/head.php';?> 
        </div>    
    </head>
        
    <body class="body">
        <div style="widht:100%;text-align:center;">
                <form action="labo.php" method="post">
                        <p>Nom du labo : <input type="text" name="nom" /></p>
                        <p><input class="btn btn-primary"  type="submit"  name="valider" value="OK"></p>
                </form>
        </div>
    </body>
    <footer>
        <div class="footer">
            <p><a class="btn btn-default" href="labo.php">Retour à la liste des labos</a></p>
        </div>
    </footer>
</html>