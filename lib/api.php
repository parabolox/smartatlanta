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

    static function categories()
    {
        self::connect();
        self::$sag->setDatabase("dpw");
        $response = self::$sag->get('a2ff54d75a9c45bec6119fe38e7ee0ad');
        $response = json_decode($response->body,$assoc=true);
        $categories = $response["requestCategory"];
        $result = array();

        foreach ($categories as $k=>$subs)
        {
            foreach ($subs as $catname)
            {
                $result[] = $k.': '.$catname;
            }
        }

        return $result;
    }

    static function get($id=false)
    {
        self::connect();
        self::$sag->setDatabase("servicerequests");
        if ($id) {
            $response = self::$sag->get($id);
            $response = json_decode($response->body,$assoc=true);
            return $response;
        } else {
            $response = self::$sag->get('_all_docs?include_docs=true');
            $response = json_decode($response->body,$assoc=true);
            return $response["rows"];
        }
    }

    static function add($data)
    {
        self::connect();
        self::$sag->setDatabase("servicerequests");
        if (isset($data['id']))
        {
            $id = $data['id'];
        }
        else
        {
            $id = time().'-'.uniqid();
        }

        $response = self::$sag->put($id,$data);
        $response = json_decode($response->body,$assoc=true);
        xo($response);
        die('2@@@');
        return isset($response['ok'])&&($response['ok']==true);
    }

}
