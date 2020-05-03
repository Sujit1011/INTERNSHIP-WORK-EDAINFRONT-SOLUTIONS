<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);


$file = file_get_contents('data.json');
$data = json_decode($file,true);

echo "<pre>";
print_r ($data);
echo "</pre>";


?>


<!DOCTYPE html>
<html>
	<head>
		<title>Home | Internship</title>
		<style type="text/css">
			body
				{
					margin: 0px;
					padding: 0px;
					font-family: sans-serif;
				}	
			.bo
				{
					background-color: black;
					height: 40px;
				}
			.main
				{
					margin: 0 50px 0 50px;
					padding: 30px;
				}
		</style>
	</head>
	<body>
		<div class="bo"></div>
		<h1 style="margin-left:30px;">EXPERTISE</h1>	
		<?php
		$j=0;
		while($j < count($data))
		{?>
		
		
		<div class="main">
			<div style="float:right;color:grey;">
			<?php
		 	$i=0;
		 	while($i < count($data[$j]['trainingRates']))
			{?>			
				<h3><?php echo $data[$j]['trainingRates'][$i]['charge'];?><span> <?php echo $data[$j]['trainingRates'][$i]['unit'];?></span> (<span><?php echo $data[$j]['trainingRates'][$i]['mode'];?></span>)</h3>
				
			<?php	
			 $i++;
			}
			?>
			</div>		
			<h2><?php echo $data[$j]['title'];?></h2>
		<p style="color:green;"><span><?php echo $data[$j]['expYear'];?></span> years of experience</p>
		</div><br>
		<?php $j++;
		}?>
		
	</body>
</html>