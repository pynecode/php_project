
<html>
	<head>
		<title> PHP Week 2 - Lesson 2</title>
		<style>
			#test-area{
				margin: 10px auto;
				background-color:#d9d9d9;
				border: 2px solid maroon;
				width:70%;
				padding:100px;
				text-align:center;
			}
			 .section{
				 width:80%;
				 background-color: #85adad;
				 border:2px solid maroon;
				 padding:50px;
				 margin: 10px auto;
				 text-align:left;
				 
			 }
			</style>
	</head>

<div id="test-area">
<h1>PHP Week 1 - Lesson 2</h1>




<?php
	

	// ---------------------Section-1----------------------------//
		$color = substr(md5(rand()), 0, 6);
		
		

echo "<div class='section'><h3>Section-1</h3>";

	heading("For Loops");
	
	$webclass = array("carl", "wendy", "lisa", "emma");
	
	for ($i = 0; $i < count($webclass) ; $i++ ){
	
		echo "Student ".($i+1)." is ".$webclass[$i]."<br>";
	
	}

echo "</div>";

// ---------------------Section-2----------------------------//

echo "<div class='section'><h3>Section-2</h3>";

	heading("While Loops");
	
	$count = 1; 
	
	while ( $count <= 10 ){
		echo $count."<br>";
		$count++;
	}
	
echo "</div>";

// ---------------------Section-3----------------------------//

echo "<div class='section'><h3>Section-3</h3>";

	heading("Foreach Loops");
	
	echo "<pre>";
	print_r($webclass);
	echo "</pre>";
	
	foreach($webclass as $student){
	
		echo $student."<br>";		

	}
	
	
	echo "<br><br>";
	
	$user = array("First Name" => "Andy", "Surname" => "Smith", "Age" => 32, "Gender" => "Male");
	
	foreach($user as $detail => $result){
		
		echo "<b>User's $detail:</b> $result<br>";
	
	}
	
	function heading($title){
		echo "<p><b>".$title."</b></p>";
	}

	function statement($title){
		echo "<p>".$title."</p>";
	}

?>

<h3>federico had a good idea -> let's do a real life example</h3>

<table>
	<tr>
    	<th>Detail</th>
        <th>Value</th>
    </tr>
	
    <?php  foreach($user as $detail => $value) { ?>

		<tr>	
			<td><?php echo $detail; ?></td>
			<td><?php echo $value; ?></td>
		</tr>
        
	<?php } ?>

</table>

<style>
	table {
		border:1px solid black;
	}
	td,th{
		border:1px solid black;
		padding:10px;
		text-align:center;
		width:100px;
	}
	
</style>

<?php
	echo "</div>";
	
// ---------------------Section-4----------------------------//

echo "<div class='section'><h3>Section-4</h3>";
	heading("Alternative Syntax");

	$number = 5;
	
	if ( $number < 7 ):
		
		echo "Your number is ok";
	
	endif;
	
	echo "<br><br>";
	
	if ( $number > 10 ): 
		echo "Your number is too big!";
	elseif ( $number < 3):
		echo "Your number is too small";
	else:
		echo "Your number is juuuust right!";
	endif;
	
	statement("<b>this works the same with:</b>");
	statement("for -> endfor");
	statement("foreach -> endforeach");
	statement("while -> endwhile");
	
	$colours = array("red", "yellow", "blue", "green");

	foreach( $colours as $colour ):
		echo "My colour is $colour<br>";
	endforeach;
	
	echo "</div>";
	
	
	// ---------------------Section-5----------------------------//
	
	echo "<div class='section'><h3>Section-5</h3>";
	
?>


<h1>Expressions</h1>
<?php 





	heading("Ternary If statements");

	$number = 1;
	
	// ternary method
	$test = ($number > 2) ? "Ok!" : "Big Trouble!";
	
	echo $test;


	// normal method
	if ( $number > 2) {
		$test = "Ok!"; 
	} else {
		$test = "Big Trouble!";
	}
echo "</div>";

// ---------------------Section-6----------------------------//
	
	echo "<div class='section' style='background-color:".$color."'><h3>Section-6</h3>";
?>
	
<h1>Functions</h1>

<?php

	heading("PHP Functions");

	$string = "What a lovely day we have here at SAE!";

	statement( "The length of the string is " . strlen( $string ) );

	statement( "Upper case: " . strtoupper( $string ) );

	statement("Lower case: ". strtolower( $string ) ); 
	
	statement("the minimum number is ". min(11,2,55,3) );

	statement("the maxmum number is ". max(11,2,55,3) );

	$nums = array(2,45,64,1,34);
	
	statement("the minimum number is ". min( $nums ) );
	
	statement( "3.8 rounded to the nearest whole number is " . round( 3.8 ) );

	statement( "3.8 rounded up to the nearest whole number is " . ceil( 3.8 ) );

	statement( "3.8 rounded down to the nearest whole number is " . floor( 3.8 ) );

	
	heading( "Declaring Functions" );
	
	function helloClass(){
		
		echo "<p>Good Afternoon, class</p>";
	}
	
	helloClass();
	
	statement("Functions can be used many times!");

	helloClass();
	helloClass();
	
	
	heading("Global and Local Variables");
	
	statement("Global variables function differently to JavaScript");
	
	statement("As a rule, variables are local to where they are declared, unless they are specifically made global");
	
	function changeNumber(){
		
		$var = "eight";
	}
	
	function changeNumber2(){
	
		global $var;
		$var = "nine";	
	}
	
	$var = "seven";
	changeNumber();
	echo $var."<br>";
	
	changeNumber2();
	echo $var."<br>";
	
	
	// method 2 for global variables
	
	$price = 349.99;
	

	echo $price."<br>";
	
	addPoundSign($price);
	
	echo $price."<br>";
	
	
	function addPoundSign(&$value){
		
		$value = "&pound;".$value;
	
	}
	
	
	heading("Passing Arguments/Parameters to a Function");
	
	statement("You can pass arguments (which become local variables) to the function ");
	
	function newFriend($name, $age){
		echo "<p>My new friend is $name and they are $age years old!</p>";
	}
	
	newFriend("Mike", 22);
	newFriend("Jerry", 38);
	
	$myName = "Dave";
	$myAge = 77;
	
	newFriend($myName, $myAge);
	
	heading("Return Values");
	
	function myNameIs( $name ){
		
		$string = "My name is ".$name; 
		return $string;
	
	}
	
	echo myNameIs("Wendy");
	
	$test = myNameIs("Adam");
	
	echo "<br>Hello, ".$test." i am 23 years old<br>";
	
	var_dump($test);
	
	function multiply($x, $y){
		
		$product = $x * $y;
		
		return $product;
		
	}
	
	echo "<br>".multiply(7,8);
	
	$new = multiply(2,3) + 1;
	
	echo "<br>".$new;
	
	
	
	function test($name, $age, $x, $y){
		
		$a = $x + $age;
		
		$b = $x - $y;
		
		$c = $a * $b;
		
		$d = $name." has $c friends";
	
		return $d; 
			
	}
	
	echo "<br>".test("Fred", 34, 14, 7);
	
	echo "</div>";
	
	
	

		
	$color = "#".$color;
	
		echo "<div class='section' style='background-color:".$color."'><h3>Section-7</h3>";
		
		
		echo $color;
		
		
		
		echo "</div>";
?>
	

</div>
</body>
</html>