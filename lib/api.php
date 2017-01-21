<?php

Class Api
{
    static $endpoint = 'https://f95d8f45-eadd-4891-b19f-b59c0dc78225-bluemix.cloudant.com/servicerequests/_all_docs';
    static $sag;

    static function connect()
    {
        if (self::$sag) return true;
        self::$sag = new Sag(BLUEMIX_CLOUDAND_KEY.".cloudant.com");
    }

    static function dictionaries()
    {
        self::connect();
        self::$sag->setDatabase("dpw");
        $response = self::$sag->get('a2ff54d75a9c45bec6119fe38e7ee0ad');
        $response = json_decode($response->body,$assoc=true);
        return $response["requestCategory"];
    }

    static function get($filter=false)
    {
        self::connect();
        self::$sag->setDatabase("servicerequests");
        $response = self::$sag->get('_all_docs?include_docs=true');
        $response = json_decode($response->body,$assoc=true);
        foreach ($response as &$row)
        {
            unset($row['_rev']);
        }
        return $response["rows"];
    }

    static function add($data)
    {
        self::connect();
        self::$sag->setDatabase("servicerequests");
        $id = time().'-'.uniqid();
        $response = self::$sag->put($id,$data);
        $response = json_decode($response->body,$assoc=true);
        return isset($response['ok'])&&($response['ok']==true);
    }

}
