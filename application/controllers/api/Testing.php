<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testing extends CI_Controller
{
	function __Construct()
	{
		parent::__construct();
	}
			function  index(){
				// $binery='2';
	// 			$binery=decbin(25);
	// 			$binery= json_encode($binery);
	// 			echo $binery;
				///////////////
				// function decToBinary($n) 
				// 		{ 
				// 		// array to store binary number 
				// 		//$binaryNum[32];
				// 			if ($n<10) {
				// 				$o=10;
				// 			}
				// 			else
				// 			$o=$n;
				// 			$binaryNum= array();
				// 		// counter for binary array 
				// 		$i = 0; 
				// 		while ($n > 0) { 
				// 		$binaryNum[$i] =$n % 2;
				// 		$n = $n / 2; 
				// 		$i++; 
				// 		} 
				// 		for ($j = $o-7; $j >= 0; $j--) 
				// 			echo  $binaryNum[$j]; 
				// 		}
						


						// function decToBinary($n) 
						// { 
						// // array to store binary number 
						// //$binaryNum[32];
						// 	//$binaryNum= array();
						// 	$binaryNum =$n % 2;
						// 	if ($n<1) {
						// 		return;
						// 	}
						// 	decToBinary($n/2);
						// 	echo  $binaryNum; 
						// }

						// decToBinary(15);
								function  pri($n){
													$isPrime = true;
													//cout << "Enter a positive integer: ";
													//cin >> n;
													for($i = 2; $i <= $n / 2; ++$i)
													{
													if($n % $i == 0)
													{
													$isPrime = false;
													break;
													}
													}
													if ($isPrime)
												     return $isPrime; 	//echo "This is a prime number";
													 else
												     return $isPrime;         //echo "This is not a prime number";
													//return 0;
								}
								pri(3);
function printprime(){
				function	isPrimeNumber($n) {
						$isPrime = true;

									for($i = 2; $i <= $n/2; $i++) {
									if ($n%$i == 0) {
									$isPrime = false;
									break;
									}
									}  
									return $isPrime;
							}
						for($n = 2; $n < 100; $n++) {
						// isPrime will be true for prime numbers
						$isPrime =  isPrimeNumber($n);

						if($isPrime == true)
							echo $n." ";
						//cout<<n<<" ";
						}
						return 0;
						// Function that checks whether n is prime or not
					}
					printprime();		

	}

}