<?php 
echo "<div style='background-color:f5f5f5;border:1px solid #ebebeb;text-align:center;font-family:tahoma;padding:10px;font-size:12px;'>";

for($x=1;$x<=100;$x++){
	
    if (($x%3) == 0 && ($x%5) == 0 ){
		
        echo "<div style='color:#942e30;padding:3px;'><strong>FizzBuzz</strong>"."</div>";
		
    } elseif (($x%5) == 0){
		
	    echo "<div style='color:#466399;padding:3px;'><strong>Buzz"."</strong></div>";   
		
    } elseif (($x%3) == 0){
		
        echo "<div style='color:#437f46;padding:3px;'><strong>Fizz"."</strong></div>";	
		
    } else{
		
	    echo "<div style='padding:3px;'>".$x."</div>";		
		
    }
}
echo "</div>";
 ?>