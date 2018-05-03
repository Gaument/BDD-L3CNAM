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
    <h2 style="text-align:center;">LISTE DES SERVICES</h2>
    <table class="table" style="width:100%;">
        <tr>
            <th>Liste des services</th>
            <th>Options</th>
            <th></th>
        </tr>
        <?php while ($this_service = $service->fetch())
        { ?>
        <tr>
            <td>
                <?= $this_service['nom'] ?>
            </td>
            <td>
                <a href="modifservice.php?id=<?=$this_service['id']?>"><p><input type="submit" class="btn btn-warning" name="valider" value="Modifier"></p></a>
            </td>
            <td>
                <a href="supprService.php?id=<?=$this_service['id']?>"><p><input type="submit" class="btn btn-danger" name="valider" value="Supprimer"></p></a>
            </td>
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
        <p><a class="btn btn-primary" href="addService.php">Ajouter un Service</a></p>
    </div>
    <div>
        <p><a class="btn btn-default" href="index.php">Retour à l'accueil</a></p>
    </div>
</footer>
</html>