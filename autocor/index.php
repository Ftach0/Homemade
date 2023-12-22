<?php
if (!empty($_POST["inputText"])){
$words = ["дорога"=>"road","путь"=>"way","машина"=>"car","песок"=>"sand","камень"=>"stone"];
foreach ($words as $ru => $en){
    $inputText = str_replace($ru,$en,$inputText);
}
echo $inputText;
}
?>
<form action="" method="Post">
    <br>
    <textarea name="inputText"></textarea>
    <br>
    <input type="submit"> 
</form>

