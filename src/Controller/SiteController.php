<?php
namespace Pagekit\Contact\Controller;
use Pagekit\Application as App;
use Pagekit\Contact\Model\ContactModel;

class SiteController {

	/**
	* @Route ("/")
	*/
	public function indexAction ()
	{
		return [
			'$view' => [
				'title' => __('Send a feedback'),
				'name' => 'contact:views/site/index.php'
			],
		];
	}

	/**
	* @Request({"data"})
	*/
	public function sendAction ($data)
	{
		$config = App::module('contact')->config();
		$mail = App::mailer()->create();
		$mail->setTo($config->email)
			 ->setSubject($data['name'] . ' have a question')
			 ->setBody($data['message'])
			 ->send();
		$data['date'] = time();
		$db = new ContactModel;
		$db->create()->save($data);
		return [
			'message' => __('You message has been sent')
		];
	}

}
