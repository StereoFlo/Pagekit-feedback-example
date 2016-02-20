<?php

namespace Pagekit\Contact\Controller;
use Pagekit\Application as App;
use Pagekit\Contact\Model\ContactModel;
/**
 * @Access(admin=true)
 */
class ContactController
{
	public function indexAction ()
	{
		$data = ContactModel::toArray();
		return [
			'$view' => [
				'title' => 'Contact form',
				'name' => 'contact:views/admin/index.php'
			],
			'$data' => [
				'emails' => $data
			]
		];
	}

	public function settingsAction ()
	{
			return [
				'$view' => [
					'title' => 'Settings of the contact form',
					'name' => 'contact:views/admin/settings.php'
				],
				'$data' => [
	                'config' => App::module('contact')->config()
	            ]
			];
	}
}
