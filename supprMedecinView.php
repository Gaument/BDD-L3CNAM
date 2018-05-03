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
    <div style="width:100%;text-align:center;color:red;"><span>VOUS NE POUVEZ PAS SUPPRIMER UN MEDECIN SI DES PATIENTS LUI SONT AFFECTES</span></div>
<h3 style="text-align:center"> Voulez-vous supprimer ce medecin ?</h3>
<div style="widht:100%;text-align:center;">
    <?php while ($this_medecin = $medecin->fetch()) {?>
    <form action="supprMedecinValider.php?id=<?=$this_medecin['id']?>" method="post">

        <label for="nom_medecin"><?= $this_medecin['prenom'] ?> <?= $this_medecin['nom'] ?></label>
        <p> <input class="btn btn-danger" type="submit"  name="valider" value="Supprimer"></p>

        <?php }?>
    </form>
</div>
</body>
<footer>
    <div class="footer">
        <p><a class="btn btn-default" href="medecin.php">Retour à la liste des medecins</a></p>
    </div>
</footer>
</html>