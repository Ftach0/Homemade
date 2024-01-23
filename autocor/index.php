
<html>
    <body>
      <form action="" method="Post">
    <br>
    <textarea name="inputText"></textarea>
    <br><br>
    <input type="submit"> 
</form>  
</body>
</html>
<?php
if (!empty($_POST["inputText"])){
    $inputText = $_POST["inputText"];
$words = ["дорога"=>"road","путь"=>"way","машина"=>"car","песок"=>"sand","камень"=>"stone"];
foreach ($words as $ru => $en){
    $inputText = str_replace($ru,$en,$inputText);
}
echo  "<b>".$inputText."</b>";
}

?>