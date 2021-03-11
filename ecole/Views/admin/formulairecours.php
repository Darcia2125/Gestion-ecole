<!DOCTYPE html>
<meta charset="UTF-8">
<title>ajout d'un nouveau cours </title>
<html>
<body>
<p> l'ajout d'un nouveau cours </p>

<form action="../../cours.php?action=ajouter" method="post">


<div>
    <p> catégorie du cours : 
        <select name="categorie">
            <option name= "categorie" value="informqtiaue"> informatique </option>
            <option name= "categorie" value="gestion"> gestion </option>
            <option name= "categorie" value="communicqtion"> communication </option>
        </select> 
    </p>
</div>
<div>
<p> nom du cours: <input type="text" name="nom"> </p>
</div>
<div>
    <button type="submit" name="ajouter" value="ajouter">enregistrer</button>
</div>
</form>
</body>
</html>

