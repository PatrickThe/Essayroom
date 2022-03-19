<?php
/**
 * Created by PhpStorm.
 * User: Kibet
 * Date: 3/07/18
 * Time: 1:52 PM
 */
class PaypalRepository
{
    protected $client_id = 'AVWod-jE7pimT7CIR3d3556mQyjc_qA8ai7Y9UUt0Ok_nf1Ljjy5XTjExdHirOiEeBtTZFvW5S_U5b8r';
    protected $secret = 'EPIkN6W4_vROxBNMT1K9eZN4HX_5loG9UiTwm8Hz5w7ijeYJ3uibV6SRAM2KqtrgrVT-4qkllYrrSmdL';
    protected $return_url;
    protected $cancel_url;
    protected $url_head = "https://api.sandbox.paypal.com/v1/payments/payment";
    protected $endpoint;
    protected $user_id;
    protected $password;
    protected $signature;
    protected $app_id;

    public function __construct($cancel_url,$return_url)
    {
        $this->cancel_url = $cancel_url;
        $this->return_url = $return_url;

    }

    protected function execCurl($url,$data,$header)
    {

        $method = 'POST';
//        if($u)
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl,CURLOPT_HTTPHEADER, $header);
        $content = curl_exec($curl);
//        dd(json_decode($content));
        $status = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $json_response = null;
        if($status==200 || $status==201){
            $json_response = json_decode($content);

        }
        else{
            echo 'Curl error: ' . curl_error($curl);
//            $content = json_decode($content);
//            return redirect()->back()->with('notice',['class'=>'warning','message'=>$content->message]);
            var_dump($content,$status,"curl fetch empty");
            echo '<pre/>';
            var_dump($data,$header,$url);
            echo '<pre/>';

            exit;
        }

        return $json_response;

    }

    public function getAccessToken()
    {

        $url = "https://$this->client_id:$this->secret@api.sandbox.paypal.com/v1/oauth2/token?grant_type=client_credentials";

        $header = [
            'Accept: application/json',
            'Accept-Language: en_US'
        ];
        $data = [
            'grant_type'=>'client_credentials'
        ];
        $data = json_encode($data);
        $content = $this->execCurl($url,$data,$header);
        $access_token = $content->access_token;
        return $access_token;
    }

    public function checkout($order_id,$amount)
    {
        $url = $this->url_head;
        $header = [
            "Content-Type: application/json",
            "Authorization: Bearer ".$this->getAccessToken()
        ];
        $data =[
            'intent'=>'sale',
            'payer'=>['payment_method'=>'paypal'],
            'transactions'=>[
                ["amount"=>["total"=>$amount,'currency'=>'USD','details'=>['subtotal'=>$amount,'tax'=>0,'shipping'=>0]],
            'description'=>'Shopping transaction',
            'item_list'=>['items'=>[['quantity'=>1,'name'=>'ORDER Payment','sku'=>$order_id,'currency'=>'USD','price'=>$amount]]]]],
            'note_to_payer'=>'contact ',
            
            'redirect_urls'=>[
                'return_url'=>$this->return_url,
                'cancel_url'=>$this->cancel_url
            ]
        ];

        $data = json_encode($data);

        $content = $this->execCurl($url,$data,$header);
        $payerID = $content->id; //submit to database on
        $state = $content->state;

        $approval_url = "";
        if($state == "created"){
            $approval_url = $content->links[1]->href;
            $execute_url = $content->links[2]->href;
        
require 'invoice.php';
            $red = '<meta http-equiv="refresh" content="2;url='.$approval_url.'" />';
            echo $red;
        }
    }

    /**
     * Paypal checkout final request.
     *Execute payment after the payer has approved
     */
    public function execute($payer_id,$payment_id)
    {
        $url = $this->url_head."/$payment_id/execute";
        $header = [
            "Content-Type:application/json",

            "Authorization: Bearer ".$this->getAccessToken().""
        ];

        $data = '{
  "payer_id": "'.$payer_id.'"
}';
        return $this->execCurl($url,$data,$header);

    }

}
