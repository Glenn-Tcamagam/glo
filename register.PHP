<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTE GLO</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
</head>
<body>
  <div class="titre">
LISTE DEFINITIVE <span>GIT(GLO )</span> NIVEAU 3
</div>
<style>
  .titre{
  text-align: center;
  font-weight: bolder;
  font-size: 25px;
  }
  span{
   color:green;
   font-weight: bolder;
  }
</style>
<br>
<div class="soustitre">
  veillez remplir vos informations si et seulement si vous etez étudiant en <span>GIT(GLO)</span>  niveau 3 a l'Ecole Nationale Superieure de Douala, ensuite clicquez sur le bouton <span>"envoyez"</span>  et vous serrez enrégistré automatiquement.
</div>
<style >
.soustitre{
  text-align:center;
}
</style>
<div class="row">
    <form class="col s12" method="POST"  action="bd.php" >
      <div class="row">
        <div class="input-field col s6">
        <label for="nom">Nom complet</label> <br>
          <input placeholder="Entrez votre nom complet" id="nom" name="nom" type="text" class="validate"> 
          
        </div></div>
        
        <div class="row">
        <div class="input-field col s6">
        <label  for="matricule">Matricule</label> <br>
          <input placeholder="Entrez votre matricule" id="matricule" type="text" name="matricule" class="validate">
          
        </div></div>
      <input class="btn btn-success" type="submit"  id="boutton" value="Envoyer" name="send">
      
      <style>
        .row{
            text-align:center;
        }
      </style>
      
     
   

</form>
</div>