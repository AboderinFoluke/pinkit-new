<!DOCTYPE html>
<html>
<body>
<form action="<?php $_PHP_SELF;?>" method="POST">
First name<input type="text" name="first_name" /><br><br>

Last name<input type="text" name="last_name" /><br><br>

Age: <input type="text" name="age" /><br><br>

City: <input type="text" name="city" /><br><br>
<button type="submit" class="btn btn-default">Submit</button><br>
</form>

<?php 
if( isset ($_POST['Submit']) )
{ echo "Your firstname is " . $_POST['first_name'] . "<br>";

    echo "You email is " . $_POST['last_name'] ;

    echo "You email is " . $_POST['age'] ;

    echo "You email is " . $_POST['last_name'] ;

   }  else {

    echo "Your form is not submitted yet please fill the form and visit again";
}

?>





<?php
function binaryconv ($a)
{
echo decbin($a);
}

binaryconv(5);


function getGrade ($n)
{if ($n <= 39 && $n > 0){
		echo "F";

	}elseif ($n <=49 && $n > 39 ) {
	echo "E";

	}elseif ($n <= 59 && $n > 49){
		echo "D";
	
	}elseif ($n <= 69 && $n > 59){
		echo "C";
		
	}elseif ($n <= 79 && $n > 69){
		echo "B";

	}elseif ($n <= 100){
		echo "A";

	}else{
	echo "Invalid age";
	}

}

getGrade(90);

$c = array ( $x = 1, $y = 2, $z = 4);
function sumArray ($b)
{echo "sum(b) = " .array_sum($b); 
}

sumArray($c);
?>

</body>
</html>