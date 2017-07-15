<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns:v="urn:schemas-microsoft-com:vml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset='utf-8'">
		<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0">
	</head>
	<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
		<!-- Header  -->

	<table bgcolor="#ffffff" width="100%" border="0" cellspacing="0" cellpadding="0">
		<tbody>
			<tr>
				<td>
					<div>
						<table align="center" width="590" cellspacing="0" cellpadding="0">
							<tbody>
								<tr>
									<td>
										<img src="http://accc.vne-ci.com/temp-images/business_connexion_logo.jpg" width="100%" border="0" alt="logo-dmp"/>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</td>
			</tr>
		</tbody>
	</table>	

		<table bgcolor="#1a70fe" width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tbody>
			<tr>
				<td>
					<!-- Content Here !!! -->


					<div>
						<table align="center" width="590" cellspacing="0" cellpadding="0">
						  <tbody>
						     <tr>
						     	 <td height="30" style="font-size:30px; line-height:30px;">&nbsp;</td>
						     </tr>
						  	 <tr>
								<td align="center" style="text-align:center;">
									<a href="http://loop.com">
										
									</a>
								</td>
							 </tr>
							 <tr>
						     	 <td height="30" style="font-size:30px; line-height:30px;">&nbsp;</td>
						     </tr>
						     <tr>
						     	<td align="center" style="font-family:sans-serif;text-align: center; font-size:26px; color:#FFF; font-weight:100;">
						     		Félicitation pour votre participation au meeting Business Connexion!
						     	</td>
						     </tr>
						 	 <tr>
						     	 <td height="30" style="font-size:30px; line-height:30px;">&nbsp;</td>
						     </tr>
						     <tr>
						     	 <td height="30" style="line-height:30px; font-size:17px; color:white; font-family:Helvetica;">
										<?= $subscriber->subscriber_prefix.' '.$subscriber->subscriber_name ?> 
										<?php $job = $subscriber->subscriber_job; 
											if(trim($subscriber->subscriber_kind)==="")
													$representation = '';
												else
													$representation = 'pour le compte de '.$subscriber->subscriber_kind;;
											$number = wordwrap($subscriber->subscriber_tel,2,' ',true);
										?>
										<?php echo 'Votre volonté de participation au meeting du 12 janvier en qualité de '.$job.' '.$representation.' au Palm Club Hotel de Cocody a bel et bien été prise en compte par notre équipe qui vous contactera au +225 <span style="color:white;">'.$number.'</span> très bientôt pour confirmer votre présence.'; ?>

								</td>
						     </tr>
						 	 <tr>
						     	 <td height="30" style="font-size:30px; line-height:30px;">&nbsp;</td>
						     </tr>
						     <tr>
						     	 <td height="30" style="line-height:30px; font-size:17px; color:#FFF;font-family:Helvetica;">
						     	    Pour plus d'information sur le meeting du 12 janvier, veuillez nous contacter au +225  <?php $support = ('07145229',2,' ',true); echo "<span style='color:white;'>".$support."</span>" ?>
						     	 </td>
						     </tr>
						     <tr>
						     	 <td align="right" height="30" style="line-height:30px; color:#FFF;font-family:sans-serif;">
						     	 L'équipe.
						     	 </td>
						     </tr>
						     <tr>
						     	 <td height="60" style="font-size:30px; line-height:60px;">&nbsp;</td>
						     </tr>
						  </tbody>
						</table>
					</div>
				</td>
			</tr>		 	
		  </tbody>
		</table>
		<!-- /Header -->

<!-- Footer Bloc -->
	<table bgcolor="#1c4384" width="100%" border="0" cellpadding="0" cellspacing="0">
		  <tbody>
			  <tr>
				    <td height="15" style="font-size:30px; line-height:15px;">&nbsp;</td>
			  </tr>
			  <tr>
			  	    <td>
			  	    	<table align="center" width="590" border="0" cellspacing="0" cellpadding="0">
			  	    		<tbody>
				  	    		<tr>
				  	    			<td align="left"  style="color:#FFF;font-family:Helvetica;font-size:17px;">
				  	    			  Copyright © 2017 Business Connexion 
				  	    			</td>
				  	    			<td align="right"  style="color:#FFF;font-family:Helvetica;font-size:17px;">
				  	    			   Tous droits réservés
				  	    			</td>
				  	    		</tr>			  	    			
			  	    		</tbody>
			  	    	</table>	
			  	    </td>
			  </tr>
			  <tr>
				    <td height="15" style="font-size:30px; line-height:15px;">&nbsp;</td>
			  </tr>
			  <tr>
				    <td align="center"  style="color:#FFF;font-family:Helvetica;font-size:10px;">
						Vous recevez cet email de la part de Business Connexion car vous êtes répertorié comme un participant / collaborateur en vue d'un evenement. 
				    </td> 
			  </tr>
			  <tr>
				    <td height="15" style="font-size:30px; line-height:15px;">&nbsp;</td>
			  </tr>

		  </tbody>
	</table>
<!-- /Footer Bloc -->
	</body>
</html>