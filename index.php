<!DOCTYPE html>
<html>
<head>
	<title>php riddles part 1</title>
	<style type="text/css">
	body{
		width:100%;
		height:100%;
		background: lightseagreen;
	}	
	.container{
		margin:0px;
		height:100%;
	}
	.leftWrapper{
		width: 50%;
		float:left;
		background: lavenderblush;
		padding : 0px;
	}
	.rightWrapper{
		width: 50%;
		float: right;
		background: seagreen;
		padding : 0px;
	}
	.content{
		padding:15px;
		margin : 5px;
		margin-right: 10px;
	}

	</style>


</head>
<body>
	<div class = "container">
		<div class='leftWrapper'>
			<div class = 'content'>
				<?php
					$dbArray = array
								(
									array
									(
										array(
											'a' => "What is your language?",
											'b'	=> 'English',				
										),
										array(
											'a' => "What is your height?",
											'b'	=> 'color',				
										),
										array(
											'a' => "What is your height?",
											'b'	=> 'peace',				
										),
										array(
											'a' => "Do you have any lungs disorder?",
											'b'	=> 'No',				
										),

										array(
											'a' => "Did you had mammogram test before? Please tell date and location",
											'b'	=> 'Date : 21/10/2017',				
										),
										array(
											'a' => "Did you had mammogram test before? Please tell date and location",
											'b'	=> 'New Jersey',				
										),

										array(
											'a' => "Your Address",
											'b'	=> 'Street 1',				
										),
										array(
											'a' => "Your Address",
											'b'	=> 'Boulevard',				
										),
										array(
											'a' => "Your Address",
											'b'	=> 'Denmark',				
										),
									)
								);

					echo "<pre>";
					print_r($dbArray);

					$targetArray = array
								(
									array
									(
										array(
											'a' => "Iron",
											'b'	=> 'metal',				
										),
										array(
											'a' => "What is your height?",
											'b'	=> 'peace, color',				
										),
										array(
											'a' => "urea",
											'b'	=> 'chemical',				
										)
									)
								);

					print_r($targetArray);
				?>
			</div>
		</div>
		<div class='rightWrapper'>
			<div class = 'content'>
				<?php 
					$dupitem = '';
					$dupArray = '';
					$count = 0;
					$qcount = 0;
					echo "<pre>";
					
					foreach ($dbArray as $key => $value) {

						foreach ($value as $k => $items) {
							$flag = false;
							$qcount++;
							$oldQ 			=	$items['b'];
							if($dupitem == $items['a']){
								$flag 		= true; 
								$ques  		= $items['a'];
								//$oldQ 		.= ','.$items['b'];
								$qcount 	-=1;

							}else{
								$dupitem 		= 	$items['a'];
								//$oldQ 			=	$items['b'];
							}
							if($flag){
								//$ques = '';
								echo ", ".$oldQ."";	

							}else{
								echo "<br>".$qcount.". ".$dupitem."<br>";
								
								echo "   Answer : ". $oldQ;	
							}
							
						}	
					}
				?>
			</div>
		</div>
	</div>
</body>
</html>


