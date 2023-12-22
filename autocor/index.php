<?php
if (!empty($_POST["inputText"])){
    $inputText = $_POST["inputText"];
$words = ["дорога"=>"road","путь"=>"way","машина"=>"car","песок"=>"sand","камень"=>"stone"];
foreach ($words as $ru => $en){
    $inputText = str_replace($ru,$en,$inputText);
}
}
?>
<html>
    <head></head>
    <body>
      <form action="" method="Post">
    <br>
    <textarea name="inputText"></textarea>
    <br>
    <input type="submit"> 
</form>  
</body>
</html>
<?php
    echo  "<b>".$inputText."</b>";
?>
