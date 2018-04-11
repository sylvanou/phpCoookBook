<?php
include "classes/recipes.php";
include "classes/render.php";
include "classes/recipeCollection.php";
include "./inc/recipes.php";

$cookbook = new RecipeCollection("Treehouse Recipes");
$cookbook->addRecipe($lemon_chicken);
$cookbook->addRecipe($granola_muffins);
$cookbook->addRecipe($belgian_waffles);
$cookbook->addRecipe($pepper_casserole);
$cookbook->addRecipe($lasagna);
$cookbook->addRecipe($dried_mushroom_ragout);
$cookbook->addRecipe($rabbit_catalan);
$cookbook->addRecipe($grilled_salmon_with_fennel);
$cookbook->addRecipe($pistachio_duck);
$cookbook->addRecipe($chili_pork);
$cookbook->addRecipe($crab_cakes);
$cookbook->addRecipe($beef_medallions);
$cookbook->addRecipe($silver_dollar_cakes);
$cookbook->addRecipe($french_toast);
$cookbook->addRecipe($corn_beef_hash);
$cookbook->addRecipe($granola);
$cookbook->addRecipe($spicy_omelette);
$cookbook->addRecipe($scones);

$breakfast = new RecipeCollection("Favorite Breakfasts");
foreach( $cookbook->filterByTag("breakfast") as $recipe) {
    $breakfast->addRecipe($recipe);
}


$week1 = new RecipeCollection("Meal Plan: Week 1");
$week1->addRecipe($cookbook->filterById(2));
$week1->addRecipe($cookbook->filterById(3));
$week1->addRecipe($cookbook->filterById(6));
$week1->addRecipe($cookbook->filterById(16));


echo Render::listRecipes($week1->getRecipeTitles());
// echo "\n\nSHOPPING LIST\n\n";
echo Render::listShopping($week1->getCombinedIngredients());
// echo Render::displayRecipe($cookbook->filterById(2));



// $recipe1 = new Recipe("my first recipe");
// $recipe1->setSource = 'Cool Guy';
// $recipe1->addIngredient("egg", 1);
// $recipe1->addIngredient("flour", 2, "cup");

// $recipe2 = new Recipe("My Second Recipe");
// $recipe2->setSource = "Betty Crocker";

// echo $recipe1->addInstructions("This is my first instruction");
// echo $recipe1->addInstructions("This is my second instruction");

// $recipe1->addTag("Breakfast");
// $recipe1->addTag("Main Course");

// // echo implode(", " , $recipe1->getTags());

// $recipe1->setYield("6 servings");
// // echo $recipe1->getYield();
// // echo $recipe1->getSource();

// echo $recipe1;
// echo new Render();
