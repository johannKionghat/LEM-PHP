<?php
include __DIR__ ."/boostrap.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recettes de Chef</title>
</head>
<body>
    <h1>Recettes de Chef</h1>
    <ul>
        <?php 
        foreach($recipes as $recipe): 
            [
                'titre' => $recipeTitle,
                'auteur' => $recipeAutor,
                'ingredients' => $recipeIngredients,
                'etapes' => $recipeSteps,
                'note' => $recipeNote,
            ] = $recipe;
        ?>
            <li>
                <h2><?= $recipeTitle; ?></h2>
                <p><?= $recipeAutor; ?><br/>
                Note de la recette : <?= $recipeNote; ?>
                <details>
                    <summary>Ingrédients</summary>
                    <ul>
                        <?php foreach($recipeIngredients as $ingredients): ?>
                            <li><?= $ingredients ?></li>
                        <?php endforeach; ?>
                    </ul>
                </details>
                <details>
                    <summary>Préparation</summary>
                    <ul>
                        <?php foreach($recipeSteps as $step): ?>
                            <li><?= $step ?></li>
                        <?php endforeach; ?>
                    </ul>
                </details>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>