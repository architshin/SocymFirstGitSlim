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

	public function helloWithTemplate(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
	{
		$assign["name"] = "GitHub";
		$twig = $this->container->get("view");
		$response = $twig->render($response, "helloWithVals.html", $assign);
		return $response;
	}
}
