<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

$message = '';  
 $error = '';  
 if(isset($_POST["submit"]))  
 {  
	 if(file_exists('data.json'))  
           {  
                $current_data = file_get_contents('data.json');  
                $array_data = json_decode($current_data, true);  
                $title = array(  
                     array(
					 'title'=>$_POST['expertise'],  
                     'expYear'=>$_POST["year"],  
                     'expMonth'=>$_POST["month"],
					 'trainingRates' => array(
										array(   'mode'=> 'Remote',  
												 'charge'=>$_POST["remote"],  
												 'unit'=>$_POST["remote1"] ),
						 				array(   'mode'=>'Centre',  
												 'charge'=>$_POST["centre"],  
												 'unit'=>$_POST["centre1"]),
						 				array(   'mode'=> 'Learners Place',
												 'charge'=>$_POST["lerner"],  
												 'unit'=>$_POST["lerner1"]),
						 				array(   'mode'=> 'My Place',
												 'charge'=>$_POST["my"],  
												 'unit'=>$_POST["my1"])
					 						)
					 
					 
					 
					 )
                ); 
		 
		 
//                $array_data[] = $extra;  
                $final[] = json_encode(array_merge($array_data,$title));
				
                if(file_put_contents('data.json', $final))  
                {  
                     header('location:Display.php');  
                }  
           }  
           else  
           {  
                $error = 'JSON File not exits';  
           }    
 }  
?>