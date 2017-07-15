<?php 
namespace App\Controller;

use Cake\Event\Event;
 
/*
	Home Page of B->B Connect Website
*/

class HomeController extends AppController
{

	public function index()
	{
		$cookie_pub = $this->Cookie->read('pub');
		$this->set(compact('cookie_pub'));
	}

	public function beforeFilter(Event $event)
	{
		parent::beforeFilter($event);
		if(!$this->Cookie->read('pub'))
		{
			$this->Cookie->configKey('pub',['expires'=>'+1 day']);
			$this->Cookie->write('pub','undone');
		}
		else
		{
			$this->Cookie->write('pub','done');
		}
	}

	public function eventSubscribe()
	{
		if($this->request->is('ajax'))
		{
			if($this->request->is('post'))
				{
					$data = $this->request->data;
					$data['subscriber_event_id'] = 2;
					$this->loadModel('Subscribers');
					$data['state'] = 'web_save';
					//initialization model
					$subscriber = $this->Subscribers->newEntity($data,['associated'=>'SubscriberEvents']);
					

					if($subscriber->errors())
					{
						if(($subscriber->errors('subscriber_email')['unique']) || ($subscriber->errors('subscriber_tel')['unique']))
							$error = 'registered';
					}
					else
						$error = 'unique';

					switch($error)
					{
						case 'unique':
								if($this->Subscribers->save($subscriber))
								{
									echo 'ok';
								}
								else
								{
									echo 'ko';
								}
						break;

						case 'registered':
								echo 'already';
						break;
					}

					exit();

				}
		}
	}

	public function tests()
	{

		$a = function(){
			yield 'chat';
			yield 'chien';
		};

		foreach($a() as $animal)
		{
			var_dump($animal);
		}


		die();
	}


}