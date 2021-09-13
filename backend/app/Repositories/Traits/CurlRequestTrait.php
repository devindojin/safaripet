<?php

namespace App\Repositories\Traits;

use DB;
use App\Models\Zoho;

trait CurlRequestTrait
{
    /**
     * cURL reuqest 
     *
     * @param $request
     * @param $header
     * 
     * @return json
     */
    public function __construct()
    {
      $this->refreshAccessToken();

    }
    public function request ($getUrl, $action, $headers = array(), $param = '', $file = '',$fileName='')
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $getUrl);

        if ( count($headers) > 0 ) {
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        }

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        switch($action){

        case "POST":
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        break;

        case "POSTPARAM":
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
          curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
        break;

        case "POSTARR":
          curl_setopt_array ( $ch, array (
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => array (
              'data' => $param
            )
          ) );
        break;

        case "GET":
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        break;

        case "PUT":
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
          curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
        break;

        case "PATCH":
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
          curl_setopt($ch, CURLOPT_POSTFIELDS, $param);
        break;

        case "PUTARR":
          curl_setopt_array ( $ch, array (
            CURLOPT_CUSTOMREQUEST => "PUT",
            CURLOPT_POSTFIELDS => array (
              'data' => $param
            )
          ) );
        break;

        case "DELETE":
          curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
        break;

        case "FILE":
          curl_setopt_array ( $ch, array (
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => array (
              'content' => new \CURLFile ( $file, "", $fileName ),
              'id' => $param
            )
          ) );
        break;

        default:
        break;
        }

        $result_fetch_pot = curl_exec($ch);

        curl_close($ch);

        return $result_fetch_pot;
    }

    public function generateAccessToken()
    {
      $url = "https://accounts.zoho.com/oauth/v2/token";
      
      $param = array(
        "refresh_token"  => env('ZOHO_REFRESH_TOKEN'),
        "client_id" => env('ZOHO_CLIENT_ID'),
        "client_secret" => env('ZOHO_CLIENT_SECRET'),
        "grant_type"  =>"refresh_token"
      );
      
      $headers[] = 'Content Type: text/xml';
      
      $result = $this->request($url,"POSTPARAM",$headers,$param);
      $result_arr = json_decode($result,true);
      
      $zoho = Zoho::find(1);
      $zoho->access_token = $result_arr['access_token'];
      $zoho->save();
    }

    public function refreshAccessToken()
    {
      $zoho = Zoho::find(1);
      $createdAt = date("Y-m-d H:i:s", strtotime('+1 hours', strtotime($zoho->updated_at)));

      if($createdAt<=date('Y-m-d H:i:s')) {
        $this->generateAccessToken();
      }
    }
}