<?php
define('client_id',"857533827039-cdm67hrc9rqmqcvv5kaq84o25vuhlelc.apps.googleusercontent.com");
define('client_secret','6bDMK7AJ8I-szv1PaiaGZnhZ');
define('redirect_uri','http://wpexia.com/laravel/public/auth2');


class GoogleController extends BaseController {

	/**
	 * @var Google_Client
	 */
	private $client = null;

	private function init(){
		$client_id = client_id;
		$client_secret = client_secret;
		$redirect_uri = redirect_uri;
		$this->client = new Google_Client();

		$this->client->setClientId($client_id);
		$this->client->setClientSecret($client_secret);
		$this->client->setRedirectUri($redirect_uri);
		$this->client->setScopes('email');
	}

	public function index(){
		self::init();

		$authUrl = $this->client->createAuthUrl();

		return Redirect::to($authUrl);
	}

	public function get(){
		self::init();

		$this->client->authenticate(Input::get('code'));
		$_SESSION['access_token'] = $this->client->getAccessToken();
		$token_data = $this->client->verifyIdToken()->getAttributes();
		Session::put('userEmail',$token_data['payload']['email']);
		$redirect = Session::get('redirect');
		Session::forget('redirect');
		return Redirect::to($redirect);
	}
}