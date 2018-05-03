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
    <h1>Modifier un chercheur</h1>
    <?php while ($this_chercheur = $chercheur->fetch()) {?>
    <form action="modifchercheurValider.php?id=<?=$this_chercheur['id']?>" method="post">
            <p>Nom du chercheur : <input type="text" name="nom" value="<?= $this_chercheur['nom'] ?>" /></p>
        <?php }?>
                    <p>Service :<select name="id_labo">
                            <?php while ($this_labo = $labo->fetch())
                            { ?>
                                
                                <option value="<?= $this_labo['id'] ?>">
                                    <?= $this_labo['nom'] ?>
                                </option>
                               
                            <?php
                            }?>
                        </select> </p>
            <p><input class="btn btn-warning"  type="submit"  name="valider" value="Valider"></p>
    </form>
</div>
</body>
<footer>
    <div class="footer">
        <p><a class="btn btn-default" href="chercheur.php">Retour à la liste des chercheurs</a></p>
    </div>
</footer>
</html>