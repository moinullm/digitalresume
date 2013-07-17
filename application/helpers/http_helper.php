<?php

class HttpHelper
{
    public static function getRequest($uri, $method = 'GET', $headers = array(), $data = array(), $query = array())
    {
        $ci = & get_instance();
        $uri = $ci->config->item('service_endpoint') . $uri;
        $headers['Content-Type'] = 'application/json';

        $request = new HttpRequest($uri, $method, $headers);
        $request->addPostFields($data);

        return $request;
    }

    public static function get($data = null)
    {
        $headers = array();

        if (isset($data['auth_token'])) {
            $headers['Auth-Token'] = $data['auth_token'];
        }

        $request = self::getRequest($data['route'], HttpRequest::METH_GET, $headers);
        return self::send($request);
    }

    public static function post($data)
    {
        $headers = array();

        if (isset($data['auth_token'])) {
            $headers['Auth-Token'] = $data['auth_token'];
        }

        $request = self::getRequest($data['route'], HttpRequest::METH_POST, $headers, $data['vars']);
        return self::send($request);
    }

    public static function put($data)
    {
        $headers = array();

        if (isset($data['auth_token'])) {
            $headers['Auth-Token'] = $data['auth_token'];
        }

        $request = self::getRequest($data['route'], HttpRequest::METH_PUT, $headers, $data['vars']);
        return self::send($request);
    }

    public static function delete($data = null)
    {
        $headers = array();

        if (isset($data['auth_token'])) {
            $headers['Auth-Token'] = $data['auth_token'];
        }

        $request = self::getRequest($data['route'], HttpRequest::METH_DELETE, $headers);
        return self::send($request);
    }

    public static function send($request)
    {
        $response = $request->send();

        $result['code'] = $response->getResponseCode();
        $result['body'] = $response->getBody();

        return $result;
    }
}

function get($data = null)
{
    return HttpHelper::get($data);
}

function post($data)
{
    return HttpHelper::post($data);
}

function put($data)
{
    return HttpHelper::put($data);
}

function delete($data)
{
    return HttpHelper::delete($data);
}