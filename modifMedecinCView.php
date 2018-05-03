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
    <h1>Modifier un medecin consultant</h1>
    <?php while ($this_medecin = $medecin->fetch()) {?>
    <form action="modifMedecinCValider.php?id=<?=$this_medecin['id']?>" method="post">
            <p>Nom du médecin : <input type="text" name="nom" value="<?= $this_medecin['nom'] ?>" /></p>
            <p>Prénom du médecin : <input type="text" name="prenom" value="<?= $this_medecin['prenom'] ?>" /></p>
            <p>N° Ident : <input type="text" name="ident" value="<?= $this_medecin['ident'] ?>" /></p>
        <?php }?>
                    <p>Nom du service :<select name="id_service">
                            <?php while ($this_service = $service->fetch())
                            { ?>
                                
                                <option value="<?= $this_service['id'] ?>">
                                    <?= $this_service['nom'] ?>
                                </option>
                               
                            <?php
                            }?>
                        </select> </p>
            <p><input class="btn btn-warning" type="submit"  name="valider" value="Valider"></p>
    </form>
</div>
</body>
<footer>
    <div class="footer">
        <p><a class="btn btn-default" href="medecin.php">Retour à la liste des medecins</a></p>
    </div>
</footer>
</html>