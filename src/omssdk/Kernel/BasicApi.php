<?php
namespace OmsSdk\Kernel;

use GuzzleHttp\Client;
use OmsSdk\Api\Token;

class BasicApi
{
    private $clientGuid;
    private $clientName;
    private $host;
    private $username;
    private $password;

    public function __construct($config)
    {
        $this->clientGuid = $config['clientGuid'];
        $this->clientName = $config['clientName'];
        $this->host       = $config['host'];
        $this->username   = $config['username'];
        $this->password   = $config['password'];
    }

    protected function request($uri, $params = [])
    {
        $token = new Token($this->host, $this->username, $this->password);
        $bearer = $token->getToken();

        $client = new \GuzzleHttp\Client([
            'base_uri' => $this->host . '/'
        ]);

        $json = [
            'ClientGuid' => $this->clientGuid,
            'ClientName' => $this->clientName
        ];
        $json = array_merge($json, $params);
        $options = [
            'headers' => [
                'caceh-control'   => 'no-cache',
                'Accept-Encoding' => 'gzip, deflate',
                'Accept'          => '*/*',
                'Authorization'   => 'Bearer ' . $bearer->access_token,
                'Content-Type'    => 'application/json',
            ],
            'json' => $json,
            'http_errors' => false
        ];
        $response = $client->post($uri, $options);
        return json_decode($response->getBody());
    }
}