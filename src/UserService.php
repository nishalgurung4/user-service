<?php


namespace Services;

class UserService extends ApiService
{
	public function __construct()
	{
		// without network: 'http://host.docker.internal:8001/api'
		$this->endpoint = env('USER_MICROSERVICE') . 'api';
	}
}