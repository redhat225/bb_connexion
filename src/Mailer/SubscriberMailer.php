<?php 
namespace App\Mailer;
use Cake\Mailer\Mailer;

class SubscriberMailer extends Mailer
{


	public function registrationSubscriber($subscriber)
	{
		$this
			->to($subscriber->subscriber_email)
			->bcc('contact.businessconnexion@gmail.com')
			->profile('bbProfile')
			->subject('💼 Félicitation pour votre participation! 🍷')
			->emailFormat('html')
			->set(['subscriber'=>$subscriber])
			->layout('blank');
	}



}