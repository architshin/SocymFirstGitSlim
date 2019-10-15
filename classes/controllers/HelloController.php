<?php
namespace SocymSlim\FirstGitSlim\controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Container\ContainerInterface;

class HelloController
{
	private $container;

	public function __construct(ContainerInterface $container)
	{
		$this->container = $container;
	}
	
	public function sayHello(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
	{
		$content = "GitHubを利用してのHelloWorld!";
		$responseBody = $response->getBody();
		$responseBody->write($content);
		return $response;
	}
}
