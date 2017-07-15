$(document).ready(function(){
	$('#sign-in-bb-connexion-modal').on('submit',function(e){
		e.preventDefault();
	});

	$('#sign-in-bb-connexion-modal-alternative').on('submit',function(e){
		e.preventDefault();
	});

	$('#trigger-cancel-subscriber').on('click',function(){
		 $('#sign-in-bb-connexion-modal')[0].reset();
		 $('#sign-in-bb-connexion-modal').slideDown();
		 $('#issue-subscribing').addClass('hidden');
		 $('#issue-subscribing p').text('');
		 $(this).removeClass('none-float');
		 $('#trigger-submit-subscriber').removeClass('hidden');
	});

	$('#trigger-submit-subscriber').on('click',function(e){
		e.preventDefault();

		var $modal_container = $('#modal1');
		var $form = $('#sign-in-bb-connexion-modal');
		var $isErrorFree = true;
		$('input.required',$form).each(function(){
			if(validateElement.isValid(this)==false)
				$isErrorFree = false;
		});

		$('select.required',$form).each(function(){
			if($('option:checked',this).val()==="")
				$isErrorFree = false;
		});

		//custom rules for Palm Club Event
		var $selector = $('#civility-wrapper');
		if($('input:radio:checked',$selector).length!==1)
			$isErrorFree = false;

		if($isErrorFree)
		{
			$.ajax({
				type: 'POST',
				dataType:'Text',
				data : $form.serialize(),
				url:'/home/event-subscribe',
				beforeSend: function(){
					$('#sign-in-bb-connexion-modal',$modal_container).slideUp();
					$('.modal-footer',$modal_container).slideUp();
					$('.ajax_preloader',$modal_container).removeClass('hidden');
				},
				success : function(data){
					if(data==="ok")
					{
						$('#issue-subscribing p').text('Félicitation, votre inscription a bel et bien été prise en compte');
						$('#trigger-submit-subscriber').addClass('hidden');
						$('#trigger-cancel-subscriber').addClass('none-float');
					}
					else
					{
						if(data==="ko")
						{
						  $('#issue-subscribing p').text('Une érreur est survenue lors de l\'opération, veuillez réessayer/contacter le support.');
						}


						if(data==="already")
						{
							$('#issue-subscribing p').text("Vous êtes déja enregistré pour cet evenement");
							$('#trigger-submit-subscriber').addClass('hidden');
						    $('#trigger-cancel-subscriber').addClass('none-float');

						}


					}
					$('#issue-subscribing').removeClass('hidden');
				},
				complete: function(){
					$('.ajax_preloader',$modal_container).addClass('hidden');
					$('.modal-footer',$modal_container).slideDown();
				},
				error: function(){alert('Une Erreur est survenue, veuillez réessayer/contacter le support');
					$('#sign-in-bb-connexion-modal',$modal_container).slideUp();
			   }
			});
		}
		else
		{
			Materialize.toast('Veuillez remplir correctement les champs et réessayer',1000);
		}

	});

		$('#trigger-cancel-subscriber-alternative').on('click',function(){
		 $('#sign-in-bb-connexion-modal-alternative')[0].reset();
		 $('#sign-in-bb-connexion-modal-alternative').slideDown();
		 $('#issue-subscribing-alternative').addClass('hidden');
		 $('#issue-subscribing-alternative p').text('');
		 $(this).removeClass('none-float');
		 $('#trigger-submit-subscriber-alternative').removeClass('hidden');
	});

	$('#trigger-submit-subscriber-alternative').on('click',function(e){
		e.preventDefault();

		var $modal_container = $('#modal-custom-crea');
		var $form = $('#sign-in-bb-connexion-modal-alternative');
		var $isErrorFree = true;
		$('input.required',$form).each(function(){
			if(validateElement.isValid(this)==false)
				$isErrorFree = false;
		});

		$('select.required',$form).each(function(){
			if($('option:checked',this).val()==="")
				$isErrorFree = false;
		});

		//custom rules for Palm Club Event
		var $selector = $('#civility-wrapper-alternative');
		if($('input:radio:checked',$selector).length!==1)
			$isErrorFree = false;

		if($isErrorFree)
		{
			$.ajax({
				type: 'POST',
				dataType:'Text',
				data : $form.serialize(),
				url:'/home/event-subscribe',
				beforeSend: function(){
					$('#sign-in-bb-connexion-modal-alternative',$modal_container).slideUp();
					$('.modal-footer',$modal_container).slideUp();
					$('.ajax_preloader',$modal_container).removeClass('hidden');
				},
				success : function(data){
					if(data==="ok")
					{
						$('#issue-subscribing-alternative p').text('Félicitation, votre inscription a bel et bien été prise en compte');
						$('#trigger-submit-subscriber-alternative').addClass('hidden');
						$('#trigger-cancel-subscriber-alternative').addClass('none-float');
					}
					else
					{
						if(data==="ko")
						{
						  $('#issue-subscribing-alternative p').text('Une érreur est survenue lors de l\'opération, veuillez réessayer/contacter le support.');
						}


						if(data==="already")
						{
							$('#issue-subscribing-alternative p').text("Vous êtes déja enregistré pour cet evenement");
							$('#trigger-submit-subscriber-alternative').addClass('hidden');
						    $('#trigger-cancel-subscriber-alternative').addClass('none-float');

						}


					}
					$('#issue-subscribing-alternative').removeClass('hidden');
				},
				complete: function(){
					$('.ajax_preloader',$modal_container).addClass('hidden');
					$('.modal-footer',$modal_container).slideDown();
				},
				error: function(){alert('Une Erreur est survenue, veuillez réessayer/contacter le support');
					$('#sign-in-bb-connexion-modal-alternative',$modal_container).slideUp();
			   }
			});
		}
		else
		{
			Materialize.toast('Veuillez remplir correctement les champs et réessayer',1000);
		}

	});

});


	//client Side Validator
	validateElement = {
		
		isValid:function(element){
				var isValid= true;
				var $element=$(element);	
				var id=$element.attr('id');
				var name=$element.attr('name');
				var value= $element.val();

				var type=$element[0].type.toLowerCase();

				switch(type){
					case 'text':
							if(!/^[a-z0-9\s-!?()éè&+-à,ùêô'ï./]{2,1500}$/i.test(value)){
						 	isValid = false;
						 }
					break;

					case 'file':
							if(value=="")
							 isValid = false;
					break;						
					case 'password':
							if(!/^[a-z0-9_-]{8,25}$/i.test(value)){
								isValid = false;
							}
					break;
					case 'number':
							if(!/^\w{1,9}\.?\w{0,4}$/.test(value) || value<0 || value==="" || value==0){
								isValid = false;
							}
					break;
					case 'textarea' :
						if(value.length == 0 || value.replace(/\s/g,'').length == 0 )
						{
							isValid = false;
						}else
						{
							if(!/^[a-z0-9\s-!?()éè&àùêï+-,ô'./]{10,5000}$/i.test(value)){
						 	isValid = false;
						 }
						}
					break;

					case 'email' : 
						 if(!/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/i.test(value)){
						 	isValid = false;
						 }
						    break;

					case 'tel' : 
					     if(!/^([0-9]{2}){4}$/.test(value)){
					     	isValid = false;
						}
					break;

				}//end switch
			
			var method=isValid? 'valid' : 'invalid' ;
			
			 if(isValid)
			 	$element.removeClass('invalid').addClass(method);
			 else
			 	$element.removeClass('valid').addClass(method);

			 $element.unbind('change.isValid')
			 	.bind('change.isValid', function(){validateElement.isValid(this);});
				
			return isValid;

		}

	};