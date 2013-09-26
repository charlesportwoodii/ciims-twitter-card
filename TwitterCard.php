<?php

class TwitterCard extends CiiCard
{
	public $scriptName = 'n0PT08x5ZkZ7Eb9';

	public $footerText = 'Twitter Card';

	// The username that we want to connect to
	protected $username;

	public function rules()
	{
		return array(
			array('username', 'required')
		);
	}

	public functon attributeLabels()
	{
		return array(
			'username' => 'Twitter Username'
		);
	}
}
