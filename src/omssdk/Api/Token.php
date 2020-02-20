<?php
namespace OmsSdk\Api;

use GuzzleHttp\Client;

class Token
{
    private $host;
    private $username;
    private $password;

    public function __construct($host, $username, $password)
    {
        $this->host     = $host;
        $this->username = $username;
        $this->password = $password;
    }

    public function getToken()
    {
        $client = new \GuzzleHttp\Client([
            'base_uri' => $this->host . '/'
        ]);
        $options = [
            'headers' => [
                'caceh-control'   => 'no-cache',
                'Connection'      => 'keep-alive',
                'Accept-Encoding' => 'gzip, deflate',
            ],
            'form_params' => [
                'grant_type' => 'password',
                'username'   => $this->username,
                'password'   => $this->password
            ],
            'http_errors' => false
        ];
        $response = $client->post('token', $options);
        $contents = $response->getBody()->getContents();

        return \json_decode($contents);
    }
}