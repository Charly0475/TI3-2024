<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Insertion</title>
</head>
<body>
    <h1>Admin Insertion</h1>
    <nav>
        <ul>
            <li><a href="./">Accueil Admin</a></li>
            <li><a href="?insert">Ajouter une data</a></li>
            <li><a href="?disconnect">Déconnexion</a>       
        </ul>
    </nav>
    <div class="content">
        <h2>Insertion d'une data</h2>
        <?php if(isset($error)): ?>
                <h3 class="error"><?=$error?></h3>
        <?php endif ?>
       <form action="" name="ourdatas" method="POST">
       <input type="number"  name="id" placeholder="id" required><br>
        <input type="text" name="nom" placeholder="nom" required><br>
        <textarea name="adresse" placeholder="adressse" required><br>
        <input type="number"  name="codepostal" placeholder="codepostal" required><br>
        <input type="number" step="0.0000001" name="latitude" placeholder="latitude" required><br>
        <input type="number" step="0.0000001" name="longitude" placeholder="longitude" required><br>
        <input type="submit" value="Insérer" />
       </form>
    </div>
</body>
</html>