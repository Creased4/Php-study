<form method="post"> 
    <input type="submit" name="test" value="버튼" /><br/> 
</form> 

<?php 

function testfun() 
{ 
    echo "1"; 
} 

if(array_key_exists('test',$_POST)){ 
    testfun(); 
} 

?>
