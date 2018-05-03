<?php

function getConnection(){
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=chu;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }

}

//LABO


function getLabo()
{
    $db = getConnection();

    $req = $db->query('SELECT id, nom FROM labo LIMIT 0, 999999');
    $labo = $req;

    return $labo;
}

function getLaboModif($id)
{
    $db = getConnection();
    $req = $db->query('SELECT id, nom FROM labo WHERE id='.$id);


    return $req;
}

function getLaboModifier($id)
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $nom=$_POST['nom'];
        $req = $db->prepare("UPDATE labo SET nom=:nom WHERE id=:id");
        $req->execute(array(
            "nom" => $nom,
            "id" => $id));
    }
}

function getLaboSupprimer($id)
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $req = $db->prepare("DELETE FROM labo WHERE id=:id");
        $req->execute(array(
            "id" => $id));
    } 

}

function addLabo()
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $nom=$_POST['nom'];
        $req = $db->prepare("INSERT INTO labo (nom) VALUES(:nom)");
        $req->execute(array(
            "nom" => $nom));
    }
}


//SERVICE


function getService()
{
    $db = getConnection();

    $req = $db->query('SELECT id, nom FROM service');
    $service = $req;

    return $service;
}

function getServiceModif($id)
{
    $db = getConnection();
    $req = $db->query('SELECT id, nom FROM service WHERE id='.$id);


    return $req;
}

function getServiceModifier($id)
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $nom=$_POST['nom'];
        $req = $db->prepare("UPDATE service SET nom=:nom WHERE id=:id");
        $req->execute(array(
            "nom" => $nom,
            "id" => $id));
    }
}

function addService()
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $nom=$_POST['nom'];
        $req = $db->prepare("INSERT INTO service (nom) VALUES(:nom)");
        $req->execute(array(
            "nom" => $nom));
    }
}

function getServiceSupprimer($id)
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $req = $db->prepare("DELETE FROM service WHERE id=:id");
        $req->execute(array(
            "id" => $id));
    } 

}


//PATIENT


function getPatient()
{
    $db = getConnection();

    $req = $db->query('SELECT pt.id, med.nom AS nom_med, med.prenom AS prenom_med, pt.nom FROM patient pt
                       LEFT JOIN medecin med ON (med.id=pt.id_medecin)');
    $patient = $req;

    return $patient;
}

function getPatientModif($id)
{
    $db = getConnection();
    $req = $db->query('SELECT id, id_medecin, nom FROM patient WHERE id='.$id);


    return $req;
}

function getPatientModifier($id)
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $nom=$_POST['nom'];
        $id_medecin=$_POST['id_medecin'];
        $req = $db->prepare("UPDATE patient SET nom=:nom, id_medecin=:id_medecin WHERE id=:id");
        $req->execute(array(
            "nom" => $nom,
            "id" => $id,
            "id_medecin" => $id_medecin));
    }
}

function addPatient()
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $nom=$_POST['nom'];
        $id_medecin=$_POST['id_medecin'];
        $req = $db->prepare("INSERT INTO patient (id_medecin, nom) VALUES(:id_medecin, :nom)");
        $req->execute(array(
            "nom" => $nom,
            "id_medecin" => $id_medecin));
    }
}

function getPatientSupprimer($id)
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $req = $db->prepare("DELETE FROM patient WHERE id=:id");
        $req->execute(array(
            "id" => $id));
    } 

}


//CHERCHEUR


function getChercheur()
{
    $db = getConnection();

    $req = $db->query('SELECT ch.id, ch.nom, lab.nom AS nom_labo FROM chercheur ch
                       LEFT JOIN labo lab ON (lab.id=ch.id_labo)');
    $chercheur = $req;

    return $chercheur;
}

function addChercheur()
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $nom=$_POST['nom'];
        $id=$_POST['id_labo'];
        $req = $db->prepare("INSERT INTO chercheur (nom,id_labo) VALUES(:nom,:id)");
        $req->execute(array(
            "nom" => $nom,
            "id" => $id));
    }
}

function getChercheurModif($id)
{
    $db = getConnection();
    $req = $db->query('SELECT id, nom FROM chercheur WHERE id='.$id);


    return $req;
}

function getChercheurModifier($id)
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $nom=$_POST['nom'];
        $id_labo=$_POST['id_labo'];
        $req = $db->prepare("UPDATE chercheur SET nom=:nom,id_labo=:id_labo WHERE id=:id");
        $req->execute(array(
            "nom" => $nom,
            "id_labo"=> $id_labo,
            "id" => $id));
    }

}

function getChercheurSupprimer($id)
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $req = $db->prepare("DELETE FROM chercheur WHERE id=:id");
        $req->execute(array(
            "id" => $id));
    } 

}


//MEDECIN


function getMedecin()
{
    $db = getConnection();

    $req = $db->query('SELECT med.*, ser.nom AS nom_service FROM medecin med
                       LEFT JOIN service ser ON (ser.id = med.id_service) ');
    $medecin = $req;

    return $medecin;
}

function addMedecin()
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $ident=$_POST['ident'];
        if ($_POST['id_service']=="con"){
            $id_service=NULL;
        } else {
        $id_service=$_POST['id_service'];
        }
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $hospitalier=$_POST['hospitalier'];
        $consultant=$_POST['consultant'];
        $req = $db->prepare("INSERT INTO medecin (ident, id_service, nom, prenom, hospitalier, consultant) VALUES(:ident, :id_service, :nom, :prenom, :hospitalier, :consultant)");
        $req->execute(array(
            "ident" => $ident,
            "id_service" => $id_service,
            "nom" => $nom,
            "prenom" => $prenom,
            "hospitalier" => $hospitalier,
            "consultant" => $consultant));
    }
}

function getMedecinModif($id)
{
    $db = getConnection();
    $req = $db->query('SELECT * FROM medecin WHERE id='.$id);


    return $req;
}

function getMedecinModifier($id)
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $ident=$_POST['ident'];
        $id_service=$_POST['id_service'];
        $req = $db->prepare("UPDATE medecin SET ident=:ident, id_service=:id_service, nom=:nom ,prenom=:prenom WHERE id=:id");
        $req->execute(array(
            "nom" => $nom,
            "prenom" => $prenom,
            "ident" => $ident,
            "id_service"=> $id_service,
            "id" => $id));
    }

}

function getMedecinSupprimer($id)
{
    $db = getConnection();

    if (isset ($_POST['valider'])){
        $req = $db->prepare("DELETE FROM medecin WHERE id=:id");
        $req->execute(array(
            "id" => $id));
    } 

}