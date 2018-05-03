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
    <h1 style="text-align:center;">Modifier un service</h1>
<div style="widht:100%;text-align:center;">
            <?php while ($this_service = $service->fetch()) {?>
    <form action="modifServiceValider.php?id=<?=$this_service['id']?>" method="post">
            <p>Nom du Service : <input type="text" name="nom" value="<?= $this_service['nom'] ?>" /></p>
            <p><input class="btn btn-warning" type="submit"  name="valider" value="Valider"></p>
        <?php }?>
    </form>
</div>
</body>
<footer>
    <div class="footer">
        <p><a class="btn btn-default" href="service.php">Retour à la liste des services</a></p>
    </div>
</footer>
</html>