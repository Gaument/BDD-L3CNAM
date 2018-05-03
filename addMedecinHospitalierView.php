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
    <h1>Ajout d'un médecin hospitalier</h1>
    <form action="medecin.php" method="post">
        <p>Nom: <input type="text" name="nom" /></p>
        <p>Prénom: <input type="text" name="prenom" /></p>
        <p>N° Ident: <input type="text" name="ident" /></p>
        <input type="hidden" name="consultant" value="0">
        <input type="hidden" name="hospitalier" value="1">
        <p>Service affecté : <select name="id_service">
                            <?php while ($this_service = $service->fetch())
                            { ?>
                                
                                <option value="<?= $this_service['id'] ?>">
                                    <?= $this_service['nom'] ?>
                                </option>
                               
                            <?php
                            }?>
                        </select> </p>

        <p><input class="btn btn-primary" type="submit"  name="valider" value="OK"></p>
    </form>
</div>
</body>
<footer>
    <div class="footer">
        <p><a class="btn btn-default" href="medecin.php">Retour à la liste des médecins</a></p>
    </div>
</footer>
</html>