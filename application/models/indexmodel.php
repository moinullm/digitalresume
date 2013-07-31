<?php

class IndexModel extends CI_Model
{
    public function checkHttpGet()
    {
        $params = $this->setParams('/hello', null);
        $response = get($params);

        $responseBody = $response['body'];
        $responseCode = $response['code'];

        $http_response = json_decode($responseBody, true);

        return $http_response;
    }

    public function checkHttpPost()
    {
        $data = array('hello world', 'hello buddy');

        $params = $this->setParams('/hello', $data);
        $response = post($params);

        $responseBody = $response['body'];
        $responseCode = $response['code'];

        $http_response = json_decode($responseBody, true);

        return $http_response;
    }

    public function checkHttpPut()
    {
        $data = array('name' => 'hello guys');

        $params = $this->setParams('/hello', $data);
        $response = put($params);

        $responseBody = $response['body'];
        $responseCode = $response['code'];

        $http_response = json_decode($responseBody, true);

        return $http_response;
    }

    public function checkHttpDelete()
    {
        $id = '1234';

        $params = $this->setParams('/hello/' . $id, null);
        $response = delete($params);

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