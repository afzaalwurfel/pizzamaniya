<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testing extends CI_Controller
{
	function __Construct()
	{
		parent::__construct();
		$this->load->model('Lunch_model');
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
								// function  pri($n){
								// 					$isPrime = true;
								// 					//cout << "Enter a positive integer: ";
								// 					//cin >> n;
								// 					for($i = 2; $i <= $n / 2; ++$i)
								// 					{
								// 					if($n % $i == 0)
								// 					{
								// 					$isPrime = false;
								// 					break;
								// 					}
								// 					}
								// 					if ($isPrime)
								// 				     return $isPrime; 	//echo "This is a prime number";
								// 					 else
								// 				     return $isPrime;         //echo "This is not a prime number";
								// 					//return 0;
								// }
								// pri(3);
// function printprime(){
// 				function	isPrimeNumber($n) {
// 						$isPrime = true;

// 									for($i = 2; $i <= $n/2; $i++) {
// 									if ($n%$i == 0) {
// 									$isPrime = false;
// 									break;
// 									}
// 									}  
// 									return $isPrime;
// 							}
// 						for($n = 2; $n < 100; $n++) {
// 						// isPrime will be true for prime numbers
// 						$isPrime =  isPrimeNumber($n);

// 						if($isPrime == true)
// 							echo $n." ";
// 						//cout<<n<<" ";
// 						}
// 						return 0;
// 						// Function that checks whether n is prime or not
// 					}
// 					printprime();
								$d = array(
									'0'=>'20',
									'1'=>'-1',
									'2'=>'3',
									'3'=>'5',
									'4'=>'5',
									'5'=>'7',
									'6'=>'9',
									'7'=>'8'
									);

							// function sortTest($my_array) {
							// // var_dump($a);
							// // var_dump($b);
							// // return -1;
							// //$i, $j, 
							// 				do
							// 				{
							// 				$swapped = false;
							// 				for( $i = 0; $i < count( $my_array ) - 1;  $i++ )	
							// 				{
							// 				if( $my_array[$i] > $my_array[$i + 1] )
							// 				{
							// 				list( $my_array[$i + 1], $my_array[$i] ) =
							// 				array( $my_array[$i], $my_array[$i + 1] );
							// 				$swapped = true;
							// 				}
							// 				}

							// 				}
							// 				while( $swapped );
							// 				return $my_array;
							// }
							//print_r(sortTest($d));
									// $resut=array();
									// $output  = array_slice($a, 0, 4);
									// $output2= array_slice($b, 4, 9);
									//$result=array_merge($a, $b);
								//function checknum($d){
									$a = array(
										'0'=>'0',
										'1'=>'1',
										'2'=>'2',
										'3'=>'3',
										'4'=>'4'
										);
										$b = array(
											'0'=>'5',
											'1'=>'6',
											'2'=>'7',
											'3'=>'8',
											'4'=>'9'
											);
									// $result=array();
									// for( $i = 0; $i < count( $a );  $i++ )	
									// {    
									// 	array_push($result, $a[$i]);
									// }
									// for( $i = 0; $i < count( $a );  $i++ )	
									// {    
									// 	array_push($result, $b[$i]);
									// }
								// 			if (in_array($d, $a) || in_array($d,$b))
								// 			{
								// 			echo $d." numner is fund in array";
								// 			}
								// 			else
								// 			{
								// 			echo "sorry the given number is not found array";
								// 			}
								// }	checknum(50);	
								// function getCount($str) {
								// 	$vowelsCount =0;
								//    $a='a';$e='e'; $ii='i'; $o='o';$u='u';
								// 	  $giverstr = str_split($str);
								// 	 for( $i = 0; $i < count($giverstr);  $i++ )
								// 	 {
								// 		 if($giverstr[$i]==$a){
								// 		 $vowelsCount++;
								// 		 }
								// 		 if($giverstr[$i]==$e){
								// 		 $vowelsCount++;
								// 		 }
								// 		 if($giverstr[$i]==$ii){
								// 		 $vowelsCount++;
								// 		 }
								// 		 if($giverstr[$i]==$o){
								// 		 $vowelsCount++;
								// 		 }
								// 		 if($giverstr[$i]==$u){
								// 		 $vowelsCount++;
								// 		 } 
								// 	}
								// 	// enter your magic here
									
								// 	return $vowelsCount;
								//   } echo getcount('abracadabra');
								// function chechsque($d){
								// 	echo 'success '.$d;

									//var_dump(gmp_perfect_square($d));
								//}chechsque(4);
								function decode_morse_withArray($code){
								    $mularr=str_split($code);
									$morseCode=array(' '=>' ','A'=>'.− ','B'=>'-... ','C'=>'-.-. ','D'=>'-.. ','E'=>'. ','F'=>'..-. ','G'=>'--. ','H'=>'.... ','I'=>'.. ','J'=>'.--- ','K'=>'-.- ','L'=>'.-.. ','M'=>'-- ','N'=>'-. ','O'=>'--- ','P'=>'.--. ','Q'=>'--.- ','R'=>'.-. ','S'=>'... ','T'=>'- ','U'=>'..- ','V'=>'...- ','W'=>'.-- ','X'=>'-..- ','Y'=>'-.-- ','Z'=>'--.. ','0'=>'----- ','1'=>'.---- ','2'=>'..--- ','3'=>'...-- ','4'=>'....- ','5'=>'..... ','6'=>'-.... ','7'=>'--... ','8'=>'---.. ','9'=>'----. ');
												
									for( $i = 0; $i < count( $mularr );  $i++ )
									{
											$ele=$mularr[$i];
											$key1 = array_key_exists($ele, $morseCode);
											if($key1)
											{
											$mularr[$i]=$morseCode[$ele];
											}
									}
									  $lastR  = implode($mularr);
									  return $lastR;
								}//echo decode_morse_withArray('HEY JUDE');
								function checkINV_ord(){
											//$Inventary =Array ( [0] => stdClass Object ( [id] => 18 [qantity] => Hammad )); 
											$Order= array();
											$ci=get_instance();
													$aa=$ci->Lunch_model->selectorder();
													$aaa=$ci->Lunch_model->selectstock();
											  foreach ($aaa as $value) 
											    {		 
													foreach($aa as $key)
													if($value->stock >= $key->quantity)
													{
													 echo "log Id exeed limit".$value->stock;exit;	

													}
											    }

								} //echo checkINV_ord();
								//function comparevalu(){

								// 	        class Car extends CI_Controller
								// 				{
								// 				public $Inventery;
								// 				public $Orders;
								// 				}

								// 				$mystock = new Car();
								// 				$mystock->ID = '1';
								// 				$mystock->stock = '500';

								// 				$yourqantity = new Car();
								// 				$yourqantity->Id = '1';
								// 				$yourqantity->qantity = '50';

								// 				$inventory = array($mystock);
								// 				$Orders  = array($yourqantity);

								// 				foreach ($inventory as $inven) {
								// 				echo 'This car is a ' . $inven->ID . ' ' . $inven->Qantity . "\n";
								// 				}
								// } echo comparevalu();
								//function decode_morse($code){
									// Replace with your code
								// 	$arr  = str_split($code);
								//$key1 = array_search($ele, $morseCode);
								// 	for( $i = 0; $i < count( $arr );  $i++ )
								// 			{
								// 				if ($arr[$i]=="A") 
								// 				{
								// 				$arr[$i]='·− ';
								// 				}
								// 			elseif ($arr[$i]=="B") 
								// 				{
								// 					$arr[$i]="-··· ";
								// 				}
								// 			elseif ($arr[$i]==' ') 
								// 				{
								// 					$arr[$i]=" ";
								// 				}
								// 			elseif ($arr[$i]=="C") 
								// 				{
								// 					$arr[$i]="-.-. ";
								// 				}
								// 			elseif ($arr[$i]=="D") 
								// 				{
								// 					$arr[$i]="-.. ";
								// 				}
								// 			elseif ($arr[$i]=="E") 
								// 				{
								// 					$arr[$i]=". ";
								// 				}
								// 			elseif ($arr[$i]=="F") 
								// 				{
								// 					$arr[$i]="..-. ";
								// 				}
								// 			elseif ($arr[$i]=="G") 
								// 				{
								// 					$arr[$i]="--. ";
								// 				}
								// 			elseif ($arr[$i]=="H") 
								// 				{
								// 					$arr[$i]=".... ";
								// 				}
								// 			elseif ($arr[$i]=="I") 
								// 				{
								// 					$arr[$i]=".. ";
								// 				}
								// 			elseif ($arr[$i]=="J") 
								// 				{
								// 					$arr[$i]=".--- ";
								// 				}
								// 			elseif ($arr[$i]=="K") 
								// 				{
								// 					$arr[$i]="-.- ";
								// 				}
								// 			elseif ($arr[$i]=="L") 
								// 				{
								// 					$arr[$i]=".-.. ";
								// 				}
								// 			elseif ($arr[$i]=="M") 
								// 				{
								// 					$arr[$i]="-- ";
								// 				}
								// 			elseif ($arr[$i]=="N") 
								// 				{
								// 					$arr[$i]="-. ";
								// 				}
								// 			elseif ($arr[$i]=="O") 
								// 				{
								// 					$arr[$i]="--- ";
								// 				}
								// 			elseif ($arr[$i]=="P") 
								// 				{
								// 					$arr[$i]=".--. ";
								// 				}
								// 			elseif ($arr[$i]=="Q") 
								// 				{
								// 					$arr[$i]="--.- ";
								// 				}
								// 			elseif ($arr[$i]=="R") 
								// 				{
								// 					$arr[$i]=".-. ";
								// 				}	
								// 			elseif ($arr[$i]=="S") 
								// 				{
								// 					$arr[$i]="... ";
								// 				}	
								// 			elseif ($arr[$i]=="T") 
								// 				{
								// 					$arr[$i]="- ";
								// 				}	
								// 			elseif ($arr[$i]=="U") 
								// 				{
								// 					$arr[$i]="..- ";
								// 				}	
								// 			elseif ($arr[$i]=="V") 
								// 				{
								// 					$arr[$i]="...- ";
								// 				}	
								// 			elseif ($arr[$i]=="W") 
								// 				{
								// 					$arr[$i]=".-- ";
								// 				}	
								// 			elseif ($arr[$i]=="X") 
								// 				{
								// 					$arr[$i]="-..- ";
								// 				}	
								// 			elseif ($arr[$i]=="Y") 
								// 				{
								// 					$arr[$i]="-.-- ";
								// 				}	
								// 			elseif ($arr[$i]=="Z") 
								// 				{
								// 					$arr[$i]="--.. ";
								// 				}	
								// 			elseif ($arr[$i]=="0") 
								// 				{
								// 					$arr[$i]="----- ";
								// 				}	
								// 			elseif ($arr[$i]=="1") 
								// 				{
								// 					$arr[$i]=".---- ";
								// 				}	
								// 			elseif ($arr[$i]=="2") 
								// 				{
								// 					$arr[$i]="..--- ";
								// 				}	
								// 			elseif ($arr[$i]=="3") 
								// 				{
								// 					$arr[$i]="...-- ";
								// 				}	
								// 			elseif ($arr[$i]=="4") 
								// 				{
								// 					$arr[$i]="....- ";
								// 				}	
								// 			elseif ($arr[$i]=="5") 
								// 				{
								// 					$arr[$i]="..... ";
								// 				}	
								// 			elseif ($arr[$i]=="6") 
								// 				{
								// 					$arr[$i]="-.... ";
								// 				}	
								// 			elseif ($arr[$i]=="7") 
								// 				{
								// 					$arr[$i]="--... ";
								// 				}	
								// 			elseif ($arr[$i]=="8") 
								// 				{
								// 					$arr[$i]="---.. ";
								// 				}	
								// 			elseif ($arr[$i]=="9") 
								// 				{
								// 					$arr[$i]="----. ";
								// 				}	
								// 			}
								// 			$lastR  = implode( $arr);

								// 	 return $lastR;
								// }
								// echo decode_morse('HEY JUDE');
								function checkodd_even($n){
									echo "\nEnter a number: ";
									if($n>0)
									{
										//echo "\n you enter apositve number";
										if($n%2==0)
										{	echo "\n it is an even number.";}
										else 
									{	
										echo "\n You enter a odd number";
									}

									}
									else 
									{
										echo "\n you entered a negetive number or zero";
									}

								} 
								function spinWords($str){
									// TODO Have fun :)
									$arr2=array();
									 $arr=preg_split("/[\s,]+/", $str);
									 print_r(count($arr));exit;
									 for( $i = 0; $i < count( $arr );  $i++ )
									 {

										if(strlen($arr[$i])<5 && count($arr)==1)
												{
													array_push($arr2,$arr[$i]);
												    break;
												}
											 if( strlen($arr[$i])<5)
											 {
											 array_push($arr2,$arr[$i]);
											 array_push($arr2," ");
											 }
											 elseif(count($arr)==1)
											 {
												$revString=strrev($arr[$i]);
												array_push($arr2,$revString);
											 }
											 else
											 {
												$revString=strrev($arr[$i]);
												array_push($arr2,$revString);
												array_push($arr2," ");
											 }
									   }
									   if(count($arr)>1)
									   {
										array_pop($arr2);
									   }
									   $arr2=implode($arr2);
									    return $arr2;
									
								  }$valuesofarray=[20,1,1,2,2,3,3,5,5,4,20,4,5];

						function findIt( $seq) 
						{
						// Enter your code here
						    $counter=0;
							for ($i=0; $i < count($seq) ; $i++) 
							{ 
								for ($j=0; $j < count($seq); $j++) 
								{ 
									if($seq[$i]==$seq[$j])
									{
										$counter++;
									}
								}
								if(!($counter%2==0))
								{
									$value=$seq[$i];
								    break;
								}else
									{
									$counter=0;
									}
							} return $value;

						}//above funtion find a number how exists in array odd number of times 
						function solution ($roman) {
							$number = 0;
							
							// your code comes here
							
							return $number;
						  }			
						
	}
	//$roll_string = '';
// for($i=1; $i<=1000; $i++)
// {
//   $roll_number = $roll_number_format.$i;
//   $p_username = generatePassword();
//   $p_password = generatePassword();
//   $roll_string .= "('".$roll_number."',"."'".$student_class."',"."'".$class_section."',"."'".$batch_year."'),"
// }
// $roll_string = substr($roll_string, 0, -1);
// INSERT INTO `members`( `Name`, `Gender`, `Picture`, `Wallet`) VALUES ".$roll_string;

}