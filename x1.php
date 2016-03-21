										
<!DOCTYPE html>
<html>
<head>
<style>
form.han {
    border: 5px groove #98bf21;padding:3px;
}


</style>
<link rel="shortcut icon" href="./favicon.ico">
<title>Numberry</title>

</head>
<body>

<form  class="han" action="x1.php" method="get"><pre align="center"><BR><BR><BR>
<h2>
Math Expression :<input type="txt" name="pat" min="1" max="60"  ><br><BR><BR>
 Write a math expression with subtraction operators, like " 8-5-6-4-1- " or " 7-4-1-2-5-8-9-6-3-"<BR><BR><p> 
</h2>

<input type="submit"></pre>
</form>
</body><BR><BR><BR><BR>
</html>
		
													<?PHP 
											
												//error_reporting(0);
												
											$lrt=360;  $xin=1;
											
										  $ramn=1; 
										  $czr=30 ;
										  $mathe1=$_GET['pat'];
										  $mathex=preg_replace("/[^0-9\/\*\-\+]/", "", $mathe1) ;
										  
					
				$vx=$mathex.'-';
		
			$qq2=$vx; 
		
		$myfile = fopen("newfile.txt", "w");
					
				  $txt =$vx;
					fwrite($myfile, $txt);
					   fclose($myfile);
					   
					   $vx=array();
					   $vx2=array();
					   
										  $qx=str_repeat($qq2,$xin); 
											
										  $qq3=$qx."\n"; 
											
											       $er[]=$qq3; 
											
											  function haha () { 
											
											      global $er ; 
											
											    $tx=end($er); 
											
							$num = preg_split( '/(\-|\*|\/|\+)/', $tx );
											
							  $mopr = preg_split( '/([0-9])/', $tx ); 
											
									  $mx=array_filter($mopr ); 
											
										foreach ($mx as $ybx) { 
											
											    $ty[]=$ybx; 
											
														} 
											
											$cty=count($ty); 
								  for($x=0;$x<=$cty-2;$x++) { 
											
						   $mxp[]=$num[$x].$ty[$x].$num[$x+1];
											
														}
											
									$qqq=array("-","+","*","/"); 
										  
											if(isset($mxp)) { 
											
									foreach ($mxp as $mxb ) {
										
			 $emx[]=eval("return abs(round($mxb));").$qqq[0]; 
											
													  }
													  
										
									 $tot=implode("",$emx)."\n" ;
											
												$er[]=$tot; 
											
													 } 
													 
							 $mxp=array();  $emx=array() ;

											 $ty =array(); 
											
												     }
													 
										  $flxn=$lrt*$xin; 
											
								for ($x=1;$x<=$flxn;$x++) {
											
											    haha() ; 
											
												     } 
											
											 $fc=$ramn; 
											
											    $fx=1; 
											
								  for($c=1;$c<=$fc;$c++) { 
											
							  for  (  $x=1;$x<=$fx;$x++	) { 
											
									  $xc=array("0-","1-");
											
								   $all[]=$xc[mt_rand(0,1)]; 
											
												  } } 
											
								   $alx=implode("",$all); 
											
										  $fcx=$fc*$fx; 
											
							 for ($x=1;$x<=$fcx-1;$x++) { 
											
							     $bn[]=str_split("$alx",$x); 
											
											       }
											
							    	
												  ?>
											
								    <html>      <head>
											
		<link rel="stylesheet" type="text/css" href="./c.css"> 
						
											<script>
													
							  function whichElement(e) { 
											
					   var targ; if (e.target) { targ=e.target;
					      				
					      	     } else if (e.srcElement) { 
					      				
					      		      targ=e.srcElement;
											
												  } 
											
										   var tname; 
											
					tname = targ.tagName; location.reload();
											
												 } 
											
							   </script>        </head> 
											
								 <pre align="center">
							
							<?php 
														
									
								  $str=implode("",$er); 
								
								
$str3=str_replace('0-','<mark id="key">0-</mark>', $str); 
		
echo '<p id="rcorners1"><font color="white">'.$str3.'</font></p>';
											 
						$str=array();
						$xx2=array();
												?> 