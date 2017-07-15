<!-- Assign the title of the document -->
<?php $this->assign('title','Accueil'); ?>
<!-- Main Slider -->
<div class="row zero-margin zero-padding slider-multiple" id="main-slider-home">
    	<div class="col s12 zero-margin zero-padding">
			<?= $this->Html->image('assets_bb_connexion/last_slide.png',['style'=>'width:100%;']) ?>
    	</div>
</div>

<!-- MainPane 2 -->
<div class="row center" style="padding:30px;">
  <div class="container">
  		<p class="futura-text bb-main-color center" style="font-size:30px;">
		 <?= h('Une Expertise Au service du Relationnel d\'Affaires') ?>  <br>
	</p>  
  </div>
	
	<div class="container">
	        <span style="font-size:18px;">
			<?= h("Business Connexion est un événement d'affaires et de Networking qui se déroule en mode matinale et after-work et qui réuni uniquement les entreprises et leurs dirigeants pour leur permettre d'accéder à des opportunités et d'émettre des propositions d'affaires. C'est un cadre de rencontres avec tous les acteurs qui sont présent dans le monde des affaires (investisseurs, financiers, institutions internationales etc.).") ?>
		</span>
	</div>
	<div class="container" style="margin-top:50px;">
		<a href="#!" class="btn futura-text bb-orange-background ">En Savoir Plus</a>
	</div>
		
</div>


<!-- Main Pane 3 (Features of BB Connexion) -->
<div class="row bb-main-background center zero-margin">
	<div class="container" style="padding:50px;">
		<div class="col s12 l4 m4 wow bounceInUp">
			<?= $this->Html->image('assets_bb_connexion/bb_feature_1.png',['style'=>'width:110px;']) ?>
			<h6 class="futura-text white-text" style="font-size:20px;">
				<?= h('Faites décoller votre businnes') ?>
			</h6>
			<div class="container" style="margin-top:30px; color:#dddbdb; margin-bottom:30px;">
				<?= h('Au travers de nos rencontres d\'affaires et nos mises en relations poussees, trouver des partenaires fiables pour faire décoller votre business rapidement.') ?>
			</div>
		</div>
		<div class="col s12 l4 m4 wow bounceInUp">
			<?= $this->Html->image('assets_bb_connexion/bb_feature_2.png',['style'=>'width:110px;']) ?>
			<h6 class="futura-text white-text" style="font-size:20px;">
				<?= h('Speed Business Show') ?>
			</h6>
			<div class="container" style="margin-top:53px; color:#dddbdb; margin-bottom:30px;">
				<?= h('Notre') ?>  <span class="futura-text"><?= h('S.B.S Time') ?></span> <?=h("est le moment unique pour vous permettre de présenter votre business devant un parterre de chefs d'entreprises et décideurs et lui donner une visibilité concrète. ") ?> 
			</div>
		</div>
		<div class="col s12 l4 m4 wow bounceInUp">
			<?= $this->Html->image('assets_bb_connexion/bb_feature_3.png',['style'=>'width:110px;']) ?>
			<h6 class="futura-text white-text" style="font-size:20px;">
				<?= h('Réseautage') ?>
			</h6>
			<div class="container" style="margin-top:53px; color:#dddbdb; margin-bottom:30px;">
				<?= h("Véritable carrefour et plateforme d'affaires, Business Connexion vous donne la possibilité sans pareil de reseauter de manière professionnelle et bénéficier ainsi de son expertise en matière de mise en relation.") ?>
				
			</div>
		</div>
	</div>

</div>

<!-- Main Pane 4 (Features -Video) -->

<div class="row center zero-margin">
	<div class="col l7 m12 s12" style="margin-top:50px; height:267px;" >
			<h6 class="futura-text bb-main-color" style="font-size:20px;">
				<?= h('Prenez note des plus grands!') ?>
			</h6>
			<div class="container bb-main-color" style="margin-top:30px; margin-bottom:30px;">
				<?= h("Accédez dès à présent à un ensemble de contenu multimédia en rapport avec l'univers Business Connexion.") ?>
			</div>
			<p>
				<a href="#!" class="btn futura-text white-text bb-main-background  bb-blue-button"><?= h("Accédez à la Gallerie") ?></a>
			</p>

	</div>
	<div class="col l5 m12 s12 zero-padding zero-margin">
	  <div class="video-container">
           <iframe width="853" height="480" src="//www.youtube.com/embed/ex0nJBUp27g" frameborder="0" allowfullscreen></iframe>
      </div>
	</div>
</div>

	 <div class="row zero-margin multiple-items">
	    <div class="col s2 zero-padding "><?= $this->Html->image('gallery/meeting-2.jpg',['style'=>'width:100%;']) ?>
	    	
	    </div>
	    	    <div class="col s2 zero-padding "><?= $this->Html->image('gallery/meeting-2.jpg',['style'=>'width:100%;']) ?>
	    	
	    </div>
	    	    <div class="col s2 zero-padding "><?= $this->Html->image('gallery/meeting-4.jpg',['style'=>'width:100%;']) ?>
	    	
	    </div>	    <div class="col s2 zero-padding "><?= $this->Html->image('gallery/meeting-2.jpg',['style'=>'width:100%;']) ?>
	    	
	    </div>	    <div class="col s2 zero-padding "><?= $this->Html->image('gallery/meeting-4.jpg',['style'=>'width:100%;']) ?>
	    	
	    </div>	  

	    <div class="col s2 zero-padding "><?= $this->Html->image('gallery/meeting-4.jpg',['style'=>'width:100%;']) ?>	
	    </div>  

	 </div>

<!-- Main Pane Sponsors -->
	 <div class="row" id="sponsors-wrapper">
	 	<div class="col s12 center" style="margin-top:30px;">
	 	   <div class="container">

	 	   				<div class="col l3 m3 s12" style="margin-top:35px;">
					              <a href="http://www.cfao-technologies.com/" target="_blank" alt='CFAO Technologies'>
					                 <?= $this->Html->image('assets_bb_connexion/event2_sponsors/sponsor_4.jpg',['style'=>'max-width:100%;width:150px;','class'=>'grey-image'])?>   
					              </a> 
					       </div>


			       <div class="col l3 m3 s12" style="margin-top:40px;">
			              <a href="http://tomorrowmag.net/" target="_blank" alt='tomorrow magazine'>
			                 <?= $this->Html->image('assets_bb_connexion/sponsors/sponsor-3.png',['style'=>'max-width:100%;width:130px;','class'=>'grey-image'])?>   
			              </a> 
			       </div>

			       <div class="col l3 m3 s12" style="margin-top:30px;">
			              <a href="https://www.facebook.com/EicCorporation/" target="_blank">
			                 <?= $this->Html->image('assets_bb_connexion/sponsors/sponsor-4.png',['style'=>'max-width:100%;width:140px;','class'=>'grey-image'])?>   
			              </a> 
			       </div>

			       <div class="col l3 m3 s12" style="margin-top:30px;">
			              <a href="http://abidjan.net/" target="_blank" alt="abidjan.net">
			                 <?= $this->Html->image('assets_bb_connexion/sponsors/sponsor-5.jpg',['style'=>'max-width:100%;width:130px;','class'=>'grey-image'])?>   
			              </a> 
			       </div>
	 	   </div>
	 	</div>

	 	<div class="col s12 center" style="margin-top:45px; margin-bottom:40px;">
	 	   <div class="container">
					       <div class="col l3 m3 s12" style="margin-top:20px;">
					              <a href="#!">
					                 <?= $this->Html->image('assets_bb_connexion/event2_sponsors/sponsor_3.jpg',['style'=>'max-width:100%;width:130px;','class'=>'grey-image'])?>   
					              </a> 
					       </div>

			       <div class="col l3 m3 s12" style="margin-top:40px;">
			              <a href="https://www.facebook.com/pages/Compagnie-Africaine-de-Cr%C3%A9dit/1432972126989778">
			                 <?= $this->Html->image('assets_bb_connexion/sponsors/sponsor-7.png',['style'=>'max-width:100%;width:145px;','class'=>'grey-image'])?>   
			              </a> 
			       </div>

			       <div class="col l3 m3 s12" style="margin-top:30px;">
			              <a href="http://infinixmobility.com/fr/" target="_blank" alt='infinix mobility'>
			                 <?= $this->Html->image('assets_bb_connexion/sponsors/sponsor-8.jpg',['style'=>'max-width:100%;width:160px;','class'=>'grey-image'])?>   
			              </a> 
			       </div>

			       <div class="col l3 m3 s12" style="margin-top:22px;">
			              <a  href="http://www.taxijetci.com" target="_blank" alt="TaxiJet!">
			                 <?= $this->Html->image('assets_bb_connexion/event2_sponsors/sponsor_1.png',['style'=>'max-width:100%;width:95px;','class'=>'grey-image'])?>   
			              </a> 
			       </div>
	 	   </div>
	 	</div>

	 		 	<div class="col s12 center" style="margin-top:45px; margin-bottom:40px;">
			 	   <div class="container">
					       <div class="col l3 m3 s12">
					              <a href="#!" alt='PMG'>
					                 <?= $this->Html->image('assets_bb_connexion/event2_sponsors/sponsor_2.png',['style'=>'max-width:100%;width:100px;','class'=>'grey-image'])?>   
					              </a> 
					       </div>


				   <div class="col l3 m3 s12" style="margin-top:20px;">
			              <a href="#!" alt='GIG'>
			                 <?= $this->Html->image('assets_bb_connexion/event2_sponsors/sponsor_5.jpg',['style'=>'max-width:100%;width:190px;','class'=>'grey-image'])?>   
			              </a> 
			       </div>


			       <div class="col l3 m3 s12" style="margin-top:10px;">
			              <a href=" http://www.nexpages.com/ci/mcf-pme-mutuelle-de-credit-et-de-financement-des-pme-abidjan-cote-d-ivoire-2549" target="_blank" alt='Mutuelle de Crédit et de financement des PME'>
			                 <?= $this->Html->image('assets_bb_connexion/sponsors/sponsor-2.jpg',['style'=>'max-width:100%;width:120px;','class'=>'grey-image'])?>   
			              </a> 
			       </div>


			       <div class="col l3 m3 s12" style="margin-top:25px;">
			              <a href="http://www.bloomfield-investment.com/" target="_blank" alt="BloomField Investment">
			                 <?= $this->Html->image('assets_bb_connexion/sponsors/sponsor-1.jpg',['style'=>'max-width:100%;width:160px;','class'=>'grey-image'])?>   
			              </a> 
			       </div>


			 	   </div>
	 	</div>


	 </div>


  <!--Custom Modal Crea Box Registering-->
  <div id="modal-custom-crea" class="modal modal-fixed-footer bb-main-background" style="width:500px;">
    <div class="modal-content zero-padding">
 			<div class="row l12 s12 m12">
				<?= $this->Html->image('assets_bb_connexion/slide_sbs_recaded.jpg',['style'=>'width:100%;']) ?>
 			</div>
 			
			<div class="row center l12 s12 m12 zero-margin" style="padding:0px 10%;">
      			          <span class="white-text futura-text" style="font-size:16px;"><?= h('Participez au meeting du Vendredi 03 Février au Restaurant La Petite Cour - Rue des Jardins ') ?></span>
			</div>

	        <form action="/home" id="sign-in-bb-connexion-modal-alternative">
	                    <div class="row center" style="margin-top:18px;" id="civility-wrapper-alternative">
		                        <span style="padding-right:15px;">
							      <input name="subscriber_prefix" type="radio" id="civility-1-alternative" class="civility-selector" value="Mr"/>
							      <label for="civility-1-alternative" class="futura-text white-text"><?= h('Mr') ?></label>
							    </span>
							    <span style="padding-right:15px;">
							      <input name="subscriber_prefix" type="radio" id="civility-2-alternative" class="civility-selector" value="Mme"/>
							      <label for="civility-2-alternative" class="futura-text white-text"><?= h('Mme') ?></label>
							   </span>
							   <span style="padding-right:15px;">
							      <input name="subscriber_prefix" type="radio" id="civility-3-alternative" class="civility-selector" value="Mlle"/>
							      <label for="civility-3-alternative" class="futura-text white-text"><?= h('Mlle') ?></label>
							   </span>
	                    </div>
						<div class="row zero-margin">
			                    <div class="col l6 m12 s12 input-field" style="margin-top:10px;">
			                        <input type="text" name="subscriber_name" id='lastname-subscriber-alternative' style="background:white !important; padding:2px; height:28px; color:grey;text-transform:uppercase;" placeholder="Nom" class="required">
			                    </div>
			                    <div class="col l6 m12 s12 input-field" style="margin-top:10px;">
										<select name="subscriber_job" class="browser-default required" id="subscriber-job-alternative" style="height:2.2rem;">
											<option value="manager" checked>Manager</option>
											<option value="dg">DG</option>
											<option value="pdg">PDG</option>
										</select>
			                    </div>
						</div>

				<div class="row zero-margin">
	                    <div class="col l6 m12 s12 input-field" style="margin-top:10px;">
	                        <input type="email" name="subscriber_email" id='mail-subscriber-alternative' style="background:white !important; padding:2px; height:28px; color:grey;" placeholder="e-mail" class="required">
	                    </div>

	                    <div class="col l6 m12 s12 input-field" style="margin-top:10px;">
	                        <input type="tel" name="subscriber_tel" id='number-subscriber-alternative' style="background:white !important; padding:2px; height:28px; color:grey;" placeholder="+225" class="required">
	                    </div>
				</div>
				  <input type="hidden" name="subscriber_kind" value="">
	        </form>

	        <div class="row hidden center" id='issue-subscribing-alternative'>
	        		<p class="futura-text white-text">
	        			 
	        		</p>
	        </div>

		    <div class="row zero-margin zero-padding ajax_preloader hidden center">
		  		<?= $this->Html->image('assets_bb_connexion/preloader/ring.gif') ?>
		    </div>
    </div>
    <div class="modal-footer bb-main-background center">
      		<a href="#!" class="waves-effect waves-green btn-flat white bb-orange-color futura-text right" id="trigger-submit-subscriber-alternative">S'inscrire</a>
      		<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat white bb-orange-color futura-text left" id="trigger-cancel-subscriber-alternative">Fermer</a>
    </div>
  </div>

  <!-- Custom Stand Modal Box -->
    <div id="modal-custom-stand" class="modal" style="width:33%;">
	    <div class="modal-content zero-padding" style="background: rgb(24, 142, 223);">
					<?= $this->Html->image('assets_bb_connexion/event2/booking_stand_cfao_event.png',['style'=>'width:100%;']) ?>
	    </div>
  </div>


<div class="col s12 zero-padding bottom-stand-content hidden bb-main-background" style="bottom: 0px;position: fixed;">
  <div class="col s8">
	<p style="padding:15px;font-size:1.1rem;" class="futura-text white-text zero-margin"><?= h('Participez gratuitement au meeting Business Connexion du Ven 24 Février à l\'Hotel Radison Blu - 19h') ?>

	</p>
  </div>


  <div class="col s4 right-align">		
  	<button class="btn trigger-subscriber-modal bb-white-button white" style="margin-right:20px;color:#e85d2c;" >Je Participe</button>
	<i class="ion-close-circled white-text small pointer-opaq trigger-close-bottom-modal" style="margin-right:10px;"></i>
  </div>

</div>


  <!-- Modal Sign In Structure -->
  <div id="modal1" class="modal modal-fixed-footer bb-main-background" style="width:300px;">
    <div class="modal-content">
        <p class="welcome-bb-connexion-paragraph center zero-margin futura-text white-text " style="">
            <?= $this->Html->image('assets_bb_connexion/bb_connexion_plateform_logo.png',['style'=>'width:100px;']) ?>
           <br>
          <span class="white-text futura-text" style="font-size:16px;"><?= h('Participez gratuitement au meeting Business Connexion du Ven 24 Février à l\'Hotel Radison Blu - 19h') ?></span>
        </p>
      
        <form action="/home" id="sign-in-bb-connexion-modal">

                    <div class="row center" style="margin-top:18px;" id="civility-wrapper">
                        <span style="padding-right:15px;">
					      <input name="subscriber_prefix" type="radio" id="civility-1" class="civility-selector" value="Mr"/>
					      <label for="civility-1" class="futura-text white-text"><?= h('Mr') ?></label>
					    </span>
					    <span style="padding-right:15px;">
					      <input name="subscriber_prefix" type="radio" id="civility-2" class="civility-selector" value="Mme"/>
					      <label for="civility-2" class="futura-text white-text"><?= h('Mme') ?></label>
					   </span>
					   <span style="padding-right:15px;">
					      <input name="subscriber_prefix" type="radio" id="civility-3" class="civility-selector" value="Mlle"/>
					      <label for="civility-3" class="futura-text white-text"><?= h('Mlle') ?></label>
					   </span>
                    </div>

                    <div class="col s12 input-field" style="margin-top:15px;">
                        <input type="text" name="subscriber_name" id='lastname-subscriber' style="background:white !important; padding:2px; height:33px; color:grey;text-transform:uppercase;" placeholder="Nom" class="required">
                    </div>

                    <div class="col s12 input-field" style="margin-top:2px;">
							<select name="subscriber_job" class="browser-default required" id="subscriber-job">
								<option value="manager" checked>Manager</option>
								<option value="dg">DG</option>
								<option value="pdg">PDG</option>
							</select>
                    </div>
 
                    <div class="col s12 input-field" style="margin-top:25px;">
                        <input type="email" name="subscriber_email" id='mail-subscriber' style="background:white !important; padding:2px; height:33px; color:grey;" placeholder="e-mail" class="required">
                    </div>

                    <div class="col s12 input-field" style="margin-top:5px;">
                        <input type="tel" name="subscriber_tel" id='number-subscriber' style="background:white !important; padding:2px; height:33px; color:grey;" placeholder="+225" class="required">
                    </div>

                    <div class="col s12 input-field" style="margin-top:5px;">
                        <input type="text" name="subscriber_kind" id='bb-guest' style="background:white !important; padding:2px; height:33px; color:grey;" placeholder="Entreprise(optionnel)" class="">
                    </div>
        </form>

        <div class="row hidden center" id='issue-subscribing'>
        		<p class="futura-text white-text">
        			 
        		</p>
        </div>

	  <div class="row zero-margin zero-padding ajax_preloader hidden center">
	  		<?= $this->Html->image('assets_bb_connexion/preloader/ring.gif') ?>
	  </div>

    </div>
    <div class="modal-footer bb-main-background center">
      		<a href="#!" class="waves-effect waves-green btn-flat white bb-orange-color futura-text right" id="trigger-submit-subscriber">S'inscrire</a>
      		<a href="#!" class=" modal-action modal-close waves-effect waves-red btn-flat white bb-orange-color futura-text left" id="trigger-cancel-subscriber">Fermer</a>
    </div>
  </div>

  <!-- Closed Subscription Structure-->
  <div id="modal-closed-subscription" class="modal modal-fixed-footer" style="width:300px;">
    <div class="modal-content bb-main-background">
        <p class="welcome-bb-connexion-paragraph center zero-margin futura-text white-text " style="">
            <?= $this->Html->image('assets_bb_connexion/bb_connexion_plateform_logo.png',['style'=>'width:100px;']) ?>
           <br>
          <span class="white-text futura-text" style="font-size:16px;"><?= h('Désolé, les inscriptions pour cet évennement sont fermés.') ?></span>
        </p>
    </div>
    <div class="modal-footer center bb-orange-background">
      <a href="#!" class="modal-action white-text modal-close waves-effect waves-green btn-flat" style="float:none;">Fermer</a>
    </div>
  </div>
          



    <!-- Redirection Element -->
  <p class="redirect-top pointer hidden tooltipped bb-orange-background" data-tooltip="remonter" data-position="left" data-delay="3s">
    <a href="#main-wrapper-navbar" id="redirect-top-page-trigger"><i class="ion-android-navigate white-text small" style="position:relative; left:30%;"></i></a>
  </p>




<?= $this->Html->script('red/website/Home/home',['block'=>true]) ?>
<?= $this->Html->script('red/website/Home/event-subscriber',['block'=>true]) ?>
<?php if($cookie_pub==='undone') :?>
<script>
	$('#modal-custom-stand').openModal();
</script>
<?php endif; ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89951932-1', 'auto');
  ga('send', 'pageview');

</script>	

