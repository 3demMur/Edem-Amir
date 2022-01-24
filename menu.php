<?php
/*
Potatoes - 400 g
Butter - 20 g
Ham - 100 g
Mayonnaise - 100 g
Crab sticks - 100 g
cheese - 30 g


*/
function cookKroshkaKartoshka
(int $potatoes,
 int $butter ,
 int $ham,
 int $mayonnaise,
 int $cheese,
 int $crab_sticks,
 string $wishes) 
 {
    echo 
         "<h1>Здесь способ приготовления:</h1>
          <h2>Step 1:</h2>
          <p>Подготовим все продукты по списку. Для начинок вы можете взять свои продукты. Картофель лучше брать одинакового размера, чтобы он приготовился одновременно, клубни картофеля должны быть крупными. Мы будем готовить Крошку-картошку из расчета один картофельный клубень на 1 порцию.</p>
          <h2>Step 2:</h2>
          <p>Картофель хорошо помоем, вытрем насухо и сделаем проколы вилкой по поверхности кожуры картофеля. Заворачиваем каждый клубень картофеля в фольгу и выкладываем на противень. Отправляем картофель в разогретую до 180 градусов С духовку на 60 минут.</p>
          <h2>Step 3:</h2>
          <p>Готовность картофеля проверяем, проколов клубень ножом или вилкой. Достаем картофель из духовки. Делаем крестообразные разрезы на поверхности картофеля и как бы раскрываем его. Немного разминаем вилкой мякоть картофеля.</p>
          <h2>Step 4:</h2>
          <p>ВАЖНО: можно подавать картофель на отдельном блюде, а начинки выставить рядом, чтобы гости сами выбирали начинки.
           Выкладываем начинку поверх картофеля, и наша Крошка-картошка готова!!</p>
           $wishes";
// Here we're calling the function to view the recipe 
}
cookKroshkaKartoshka(400, 20, 100, 100, 30, 100, "Bon appetite!");



/* Sushi Recipe
300g sushi rice
100ml rice wine vinegar
2 tbsp golden caster sugar
3 tbsp mayonnaise
1 tbsp rice wine vinegar
1 tsp soy sauce
25g bag nori (seaweed) sheets
50g wasabi 
pickled ginger
soy sauce
*/

function cookSushi
(int $rice,
 int $mayonnaise,
 int $vinegar_tbsp,
 int $soy_sauce,
 int $nori_sheet,
 int $wasabi,
 int $tuna
 string $wishes)

 {
     echo
     STEP 1
      TO MAKE SUSHI ROLLS: Pat out some $rice.
      Lay a $nori_sheet on the mat, shiny-side down. Dip your hands in the $vinegar_tbsp water, then pat handfuls of $rice
       on top in a 1cm thick layer, leaving the furthest edge from you clear. <br>
     
     STEP 2
     Spread over some Japanese $mayonnaise. Use a spoon to spread out a thin layer of $mayonnaise down the middle of the $rice. <br>
     
     STEP 3
     Add the filling. Get your child to top the $mayonnaise with a line of their favourite fillings – here we’ve
      used $tuna. <br>
     
     STEP 4
     Roll it up. Lift the edge of the mat over the $rice, applying a little pressure to keep everything in a tight roll. <br>
     
     STEP 5
     Stick down the sides like a stamp. When you get to the edge without any $rice, brush with a little water and continue
      to roll into a tight roll. <br>
     
     STEP 6
     Wrap in cling film. Remove the mat and roll tightly in cling film before a grown-up cuts the sushi into thick slices,
      then unravel the cling film. <br>
     
     STEP 7
     TO MAKE PRESSED SUSHI: Layer over some $smoked_salmon. Line a loaf tin with cling film, then place a thin layer of smoked 
     salmon inside on top of the cling film. <br>
     
     STEP 8
     Cover with $rice and press down. Press about 3cm of rice over the fish, fold the cling film over and press down as much as you can,
      using another tin if you have one. <br>
     
     STEP 9
     Tip it out like a sandcastle. Turn block of sushi onto a chopping board. Get a grown-up to cut into fingers, then remove the cling film. <br>
     
     STEP 10
     TO MAKE SUSHI BALLS: Choose your topping. Get a small square of cling film and place a topping, like half a prawn or a small piece of 
     $smoked_salmon, on it. Use damp hands to roll walnut-sized balls of rice and place on the topping. <br>
     
     STEP 11
     Make into tight balls. Bring the corners of the cling film together and tighten into balls by twisting it up, then unwrap and serve. <br>

    $wishes
    
    /*  Here are two key skills that will be useful for many other recipes. COOKING RICE: You can use this method of cooking rice for basmati rice
     (but don’t add the vinegar mixture). You’ll end up with perfect fluffy rice. ROLLING: The same technique is used for roulades and rolled sponges
      – a useful skill for a child to learn.*/

 }
 cookSushi(300, 3, 1, 1, 25, 50, 3, "BON GAMIN" )









?>