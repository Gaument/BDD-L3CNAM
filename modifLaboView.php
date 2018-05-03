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
        <h1 style="text-align:center"> Modifier un laboratoire</h1>
        <div style="widht:100%;text-align:center;">
            <?php while ($this_labo = $labo->fetch()) {?>
                <form action="modifLaboValider.php?id=<?=$this_labo['id']?>" method="post">
                        <p>Nom du labo : <input type="text" id="<?=$this_labo['id'] ?>" name="nom" value="<?= $this_labo['nom'] ?>" /></p>
                        <p><input class="btn btn-warning" type="submit"  name="valider" value="Valider"></p>
                        <?php }?>
                </form>
        </div>
    </body>
    <footer>
        <div class="footer">
            <p><a class="btn btn-default" href="labo.php">Retour à la liste des labos</a></p>
        </div>
    </footer>
</html>