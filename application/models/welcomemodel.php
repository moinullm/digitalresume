<?php

class WelcomeModel extends CI_Model
{
    public function checkHttpRequest()
    {
        $params = $this->setParams('/hello', null);
        $response = get($params);

        $responseBody = $response['body'];
        $responseCode = $response['code'];

        $http_response = json_decode($responseBody, true);

        return $http_response;
    }

    public function setParams($uri = '/', $vars = null)
    {
        $params = array();

        $params['vars'] = $vars;
        $params['route'] = $uri;

        return $params;
    }
}