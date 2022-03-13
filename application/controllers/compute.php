<?php
	
	/***
		Author		: Dauda Mueez Ayinde
		Start date	: 7th september, 2017
		last update	: 7th september, 2017
		Description	: Implementation of durstenfeld's modern version of fisheryates algorithm in PHP
	***/
	
	//verify button is clicked
	if(isset($_POST['submit']))
	{
		//get entered integer value
		$integer_value = $_POST['integer_value'];
		
		//cast to integer if decimal value
		$integer_value = (int)$integer_value ;
		
		//verify number is greate than 1
		if($integer_value > 1)
		{
			echo "user input value : ".$integer_value."<br>" ;
			echo "Factorials in reverse : ";
			//get the factorial of integer_value(in reverse) and store in an input[] array ;
			for($i=1; $i<=$integer_value; $i++)
			{
				$input[] = $i ;
				echo " ".$i ;
			}
			echo "<br><br><br>";
			
			
			//continuously execute the below while input[] size is greater than 1
			$x=1;
			while($x < $integer_value)
			{
				//generate a random number
				$random_number = rand(0,(count($input)-1)); 
				echo "random number : ".$random_number."<br>";
				
				//get the corresponding value of index $random_number i.e input[$random_number]
				$corresponding_value = $input[$random_number];
				echo "corresponding value : ".$corresponding_value."<br>";
				
				//get the last value in input[] array
				$last_value = $input[(count($input)-1)];
				echo "last value : ".$last_value."<br>";
				
				//get last value index, array_search(value,array) returns index of the value from the array
				$last_value_index = array_search($last_value,$input);
				
				
				
				//store corresponding value in result[] array
				$result[] = $corresponding_value;
			
			
				//swap the corresponding value with the last value
				$input[$random_number] = $last_value ;
				
				
				//remove the last value from the array
				unset($input[$last_value_index]);
				
				//display current data set
				echo "current data set :";
				for($j=0; $j<count($input); $j++)
				{
					echo " ".$input[$j] ;
				}
				echo "<br>";
				
				//display current result
				echo "current result set :";
				
				for($k=(count($result)-1); $k>=0; $k--)
				{
					echo " ".$result[$k] ;
				}
				echo "<br><br>" ;
				
				
				
				
				
				
				$x=$x+1;
				
			}//end while
			
			echo $j."final result permutation : ";
			echo " ".$input[$j-1];
			for($k=(count($result)-1); $k>=0; $k--)
			{
				echo " ".$result[$k] ;
			}
			
			echo '    <a href="http://localhost/fisheryates">home</a>';
			
			
			
		}
		else
		{
			echo '<center><span style="color:red">Integer must be greater than 1</span></center>';
			include("index.php");
		}
		
		
	
	}
	else
	{
		echo '<center><span style="color:red">Button is not clicked</span></center>';
		include("index.php");
	
	
	}



?>