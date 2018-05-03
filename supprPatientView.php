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
<h3 style="text-align:center"> Voulez-vous supprimer ce patient ?</h3>
<div style="widht:100%;text-align:center;">
    <?php while ($this_patient = $patient->fetch()) {?>
    <form action="supprPatientValider.php?id=<?=$this_patient['id']?>" method="post">

        <label for="patient"><?= $this_patient['nom'] ?></label>
        <p> <input class="btn btn-danger" type="submit"  name="valider" value="Supprimer"></p>

        <?php }?>
    </form>
</div>
</body>
<footer>
    <div class="footer">
        <p><a class="btn btn-default" href="patient.php">Retour à la liste des patients</a></p>
    </div>
</footer>
</html>