<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class transfer extends Controller
{
    public function index(){
    	$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://sandbox.bca.co.id/banking/corporates/transfers",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\r\n    \"CorporateID\" : \"BCAAPI2016\",\r\n    \"SourceAccountNumber\" : \"0201245680\",\r\n    \"TransactionID\" : \"00000001\",\r\n    \"TransactionDate\" : \"2017-08-26\",\r\n    \"ReferenceID\" : \"12345/PO/2016\",\r\n    \"CurrencyCode\" : \"IDR\",\r\n    \"Amount\" : \"100000.00\",\r\n    \"BeneficiaryAccountNumber\" : \"0201245681\",\r\n    \"Remark1\" : \"Transfer Test\",\r\n    \"Remark2\" : \"Online Transfer\"\r\n}",
  CURLOPT_HTTPHEADER => array(
    "authorization: Bearer lRA0JTKPZE4kjE27F8ereAmyzL9H9fOLKDo8q44YT4y6BHnXzJH7Wj",
    "cache-control: no-cache",
    "content-type: application/json",
    "postman-token: 8edffece-228a-2e2a-63e1-1affeb21d47f",
    "x-bca-key: 5f4749f0-8b9f-4148-ad1d-a12b955e7dae",
    "x-bca-signature: 61ce2596ddd18aa1d473c63bbbee45745227a138eb45d68f67acf6d075a8da1e",
    "x-bca-timestamp: 2017-08-26T10:34:00.000+07:00"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
    }
}
