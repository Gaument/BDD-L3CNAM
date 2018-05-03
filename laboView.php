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
                    <h2 style="text-align:center;">LISTE DES LABORATOIRES</h2>
                    <table class="table" style="width:100%;">
                        <tr>
                            <th>Nom laboratoire</th>
                            <th>Options</th>
                            <th></th>
                        </tr>
                            <?php while ($this_labo = $labo->fetch())
                            { ?>
                            <tr>  
                                <td>
                                    <?= $this_labo['nom'] ?>
                                </td>
                                <td>
                                    <a href="modiflabo.php?id=<?=$this_labo['id']?>"><p><input class="btn btn-warning" type="submit"  name="valider" value="Modifier"></p></a>
                                </td>
                                <td>
                                    <a href="supprLabo.php?id=<?=$this_labo['id']?>"><p><input class="btn btn-danger" type="submit"  name="valider" value="Supprimer"></p></a>
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
            <p><a class="btn btn-primary" href="addLabo.php">Ajouter un laboratoire</a></p>
        </div>
        <div>
            <p><a class="btn btn-default" href="index.php">Retour à l'accueil</a></p>
        </div>
    </footer>
</html>