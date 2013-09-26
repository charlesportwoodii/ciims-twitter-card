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

	public function attributeLabels()
	{
		return array(
			'username' => 'Twitter Username'
		);
	}

	/**
     * getTweets callback method
     * @param  $_POST  $postData Data supplied over post
     */
    public function getTwitterDetails()
    {
     	header("Content-Type: application/json");

        Yii::import('ext.twitteroauth.*');

        try {
            $connection = new TwitterOAuth(
            	Cii::getConfig('ha_twitter_key', NULL, NULL),
				Cii::getConfig('ha_twitter_secret', NULL, NULL),
				Cii::getConfig('ha_twitter_accessToken', NULL, NULL),
				Cii::getConfig('ha_twitter_accessTokenSecret', NULL, NULL)
		);

		$user = Yii::app()->cache->get($this->scriptName . $this->id . $this->username . '_user_info');

		if ($user == false)
		{
			$user = $connection->get("https://api.twitter.com/1.1/users/show.json?screen_name={$this->username}");
		
			// Cache the result for 15 minutes
			if (!isset($tweets->errors))
				Yii::app()->cache->set($this->scriptName . $this->id . $this->username . '_user_info', $user, 900);
		}

		echo CJSON::encode($user);

		} catch (Exception $e) {
			echo CJSON::encode(array('errors' => array(array('message' => $e->getMessage()))));
		}
	}

}
