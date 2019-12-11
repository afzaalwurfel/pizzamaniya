<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codeware extends CI_Controller
{
	function __Construct()
	{
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('xmlrpc');
        $this->load->library('xmlrpcs');
        $this->load->library('Curl');
	}
            function  index()
            {
                $d = array(
                    '0'=>'3',
                    '1'=>'5',
                    '2'=>'4',
                    '3'=>'7',
                    '4'=>'7',
                    '5'=>'13',
                    '6'=>'19',
                    '7'=>'5'
                    );
                function findint($integers) 
                {   
                    $tem=array();$checodd=array();$checeven=array();$temeven=array();
                   for($i = 0; $i < count($integers); $i++) 
                       {      
                              if ($integers[$i]%2 == 0) 
                               {
                                   array_push($tem,$integers[$i]);
                                                        
                                }
                                else
                                {
                                    array_push($checodd,$integers[$i]);
                                }
                        }
                        for($i = 0; $i < count($integers); $i++) 
                       {      
                              if (!($integers[$i]%2 == 0)) 
                               {
                                   array_push($checeven,$integers[$i]);
                                                        
                                }
                                else
                                {
                                    array_push($temeven,$integers[$i]);
                                }
                        }
                        if(count($checodd)==1)
                        {
                            echo 'The only odd nuber is '.$checodd[0];
                        } 
                        if(count($temeven)==1) 
                        {
                            echo 'The only even nuber is '.$temeven[0];
                        }
                        //print_r($tem);exit;
                }

                function testing_url() {
                    // your code
                    //$srr=str_split($s);

                                // $curl = curl_init();
                                // curl_setopt_array($curl, array(
                                // CURLOPT_URL => "https://services.mobile.de/refdata/classes/Car/makes",
                                // CURLOPT_RETURNTRANSFER => true,
                                // CURLOPT_ENCODING => "",
                                // CURLOPT_MAXREDIRS => 10,
                                // CURLOPT_TIMEOUT => 0,
                                // CURLOPT_FOLLOWLOCATION => true,
                                // CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                                // CURLOPT_CUSTOMREQUEST => "GET",
                                // CURLOPT_HTTPHEADER => array(
                                // "Accept: application/json",
                                // "Accept-Encoding: application/gzip",
                                // "Accept-Language: en"
                                // ),
                                // ));
                                //echo $curl;exit;
                               // $response = curl_exec($curl);
                                //curl_close($curl);
                                $print =file_get_contents("https://services.mobile.de/refdata/classes/Car/makes");
                                header('Content-type: application/json');
                                $print=array($print);
                                $print=json_encode($print);
                                echo $print;

                }
                function accum($s) {
                    // your code
                    $sub_string=array();
                    $arr=str_split($s);
                    for($i = 0; $i < count($arr); $i++)
                    {
                        $fir_el=$arr[$i];
                       if($i===0)
                       {
                        $cap=ucfirst($fir_el);
                        $str_result=$cap.'-';
                        array_push($sub_string,$str_result);
                        }
                        if($i!==0)
                        {
                            for($f = 0; $f <=$i ; $f++)
                            {   
                                $fir_el=$arr[$i];
                                if($f===0){
                                    $str_result=ucfirst($fir_el);
                                    array_push($sub_string,$str_result);
                                }else{
                                    $str_result=strtolower($fir_el);
                                    array_push($sub_string,$str_result);
                                }
                                if($f==$i)
                                    {
                                        $str_result='-';
                                        array_push($sub_string,$str_result);

                                    }                                
                            }
                        }
                    }
                    $removed = array_pop($sub_string);
                    $aaa=implode($sub_string);return $aaa;
                    
                }//echo accum('ZpglnRxqenU');

                function uniqueInOrder($iterable)
                {
                    if($iterable=='' || $iterable==' '){
                        return ;
                    } $che=is_array($iterable) ? 'Array' : 'not an Array';
                    if($che=='not an Array')
                    {
                        $arr=str_split($iterable);
                    }
                    else{
                        $arr=$iterable;
                    }
                    $sub_string=array();
                    for($i = 0; $i < count($arr); $i++)
                    {
                        $str_result=$arr[$i];
                        if($i===0)
                            {
                            array_push($sub_string,$str_result);
                            }
                           elseif(!($arr[$i-1]==$arr[$i]))
                            {
                                array_push($sub_string,$str_result);
                            }

                    }
                    $newarr=array();
                    for($u=0;$u<count($sub_string);$u++)
                    {   
                        if($u==0)
                        {
                        $str_new="{'".$sub_string[$u]."'";
                        array_push($newarr,$str_new);
                        array_push($newarr,", ");
                        }else{
                            $str_new="'".$sub_string[$u]."'";
                            array_push($newarr,$str_new);
                            array_push($newarr,", ");
                        }
                        if($u==count($sub_string)-1){
                            $str_new="}";
                            array_push($newarr,$str_new);
                        }
                    }unset($newarr[count($newarr)-2]);
                    $sub_string = implode($newarr);
                    return print_r($sub_string);
                  }//echo uniqueInOrder('AAAABBBCCDAABBB');
                                function is_prime($n) {
                                // TODO
                                if($n>0){
                                $isPrime = true;								
                                for($i = 2; $i <= $n / 2; ++$i)
                                {
                                if($n % $i == 0)
                                {
                                $isPrime = false;
                                break;
                                }
                                }
                                if ($isPrime)
                                {
                                return $isPrime; 
                                }
                                else
                                {
                                return $isPrime;  
                                }
                                }else
                                return false;
                                } //print_r(is_prime(3));exit;     
                                        function highAndLow($numbers)
                                        { 
                                            $arr2=array();
                                            $arr=preg_replace("/[^a-zA-Z0-9\*]/", "", $numbers);
                                            $arr=preg_split("/[\s,]+/", $numbers);
                                        for($i = 0; $i < count($arr); $i++)
                                        {   
                                            $fir_el=$arr[$i];
                                            if($arr[$i]=="-")
                                            {
                                            $fir_el=$arr[$i].$arr[$i+1];
                                               array_push($arr2,$fir_el);
                                               $i++;
                                            }else{
                                            array_push($arr2,$fir_el);}
                                        }
                                        $max_nuber=max($arr2);
                                        $min_number=min($arr2);
                                        $result=$max_nuber." ".$min_number;
                                        return "$result";
                                        } echo highAndLow('1 1 0');exit;

            }
}
                    // unset($newarr[count($newarr)-1]);
                    // $sub_string = join(', ',$newarr );