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
<div id="list_labo">
    <h2 style="text-align:center;">LISTE DES MEDECINS</h2>
    <table class="table" style="width:100%;">
        <tr>
            <th>N° Ident</th>
            <th>Service</th>
            <th>Prénom - Nom</th>
            <th>Hospitalier</th>
            <th>Consultant</th>
            <th>Options</th>
            <th></th>
        </tr>
        <?php while ($this_medecin = $medecin->fetch())
        { ?>

        <tr>
            <td>
                <?= $this_medecin['ident'] ?>
            </td>
            <?php if ($this_medecin['id_service'] == NULL){?>
            <td>
                Aucun service
            </td>
            <?php } else { ?>
            <td>
                <?= $this_medecin['nom_service'] ?>
            </td>
            <?php } ?> 
            <td>
                <?= $this_medecin['prenom'] ?> <?= $this_medecin['nom'] ?>
            </td>
            <?php if ($this_medecin['hospitalier'] == "1"){?>
            <td>
                <span class="glyphicon glyphicon-ok" style="color:green;"></span>
            </td>
            <td>
                <span class="glyphicon glyphicon-remove" style="color:red;">
            </td>
            <td>
                <a href="modifMedecinH.php?id=<?=$this_medecin['id']?>"><p><input type="submit" class="btn btn-warning" name="valider" value="Modifier"></p></a>
            </td>
            <td>
                <a href="supprMedecin.php?id=<?=$this_medecin['id']?>"><p><input type="submit" class="btn btn-danger" name="valider" value="Supprimer"></p></a>
            </td>
            <?php } else { ?>
            <td>
                <span class="glyphicon glyphicon-remove" style="color:red;">
            </td>
            <td>
                <span class="glyphicon glyphicon-ok" style="color:green;"></span>
            </td>
            <td>
                <a href="modifMedecinC.php?id=<?=$this_medecin['id']?>"><p><input type="submit" class="btn btn-warning" name="valider" value="Modifier"></p></a>
            </td>
            <td>
                <a href="supprMedecin.php?id=<?=$this_medecin['id']?>"><p><input type="submit" class="btn btn-danger" name="valider" value="Supprimer"></p></a>
            </td>
           <?php } ?>        
        <tr>
            <?php
            }?>
    </table>
    <div class="space">
    </div>
</div>
</body>
<footer class="footer">
    <div>
        <p><a class="btn btn-primary" href="addMedecinHospitalier.php">Ajouter un médecin Hospitalier</a></p>
    </div>
    <div>
        <p><a class="btn btn-info" href="addMedecinConsultant.php">Ajouter un médecin Consultant</a></p>
    </div>
    <div>
        <p><a class="btn btn-default" href="index.php">Retour à l'accueil</a></p>
    </div>
</footer>
</html>
