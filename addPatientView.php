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
    <form action="patient.php" method="post">
        <p>Nom du Patient : <input type="text" name="nom" /></p>

                            <p>Nom du médecin : <select name="id_medecin">
                            <?php while ($this_medecin = $medecin->fetch())
                            { ?>
                                
                                <option value="<?= $this_medecin['id'] ?>">
                                    <?= $this_medecin['prenom'] ?> <?= $this_medecin['nom'] ?>
                                </option>
                               
                            <?php
                            }?>
                        </select></p> 

        <p><input class="btn btn-primary" type="submit"  name="valider" value="OK"></p>
    </form>
</div>
</body>
<footer>
    <div class="footer">
        <p><a class="btn btn-default" href="patient.php">Retour à la liste des patients</a></p>
    </div>
</footer>
</html>