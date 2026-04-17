<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Netzme {

        protected $_partner_id = "homedepo";
        protected $_random_number_string = "";
        protected $_signature_value = "";
        protected $_access_token = "";
        protected $_tester_name = "";
        // protected $_partner_id = "";
        protected $_auth_signature = "";

        // function __construct ($options) {
        function __construct () {
            $this->server_domain = 'https://tokoapisnap-stg.netzme.com/api/';

            // api live
            // $this->secret_api_key = '';
            
            // api test
            $this->client_secret = 'fc03d7ff06864c81880201ff67721b8d';
            $this->private_key = 'MIIBOQIBAAJBANc7z1t1ANC4KPdi1NzJyyfPTtzDlr0S4rb4C01l0k3Iq7sf2iTZ0UCxFd/xBjYWV68VOfoyguN90h0Nwok0+xsCAwEAAQI/XinMjjaiJK5tPc3/Upj2SHRqDCuFxzJ7/ZCHYVUqrNxQfYXkaKEUR3kHpCaUyQa9L/URpx9OzA04ISzLVuQBAiEA+aSTzWN3QzRr13xhvw4dNhrAm3anoJkSCIH+LTxC9WECIQDctuss6VYC1CbSsyWgcgNchQZRsNHUwr4JMQRUH/OF+wIhAJUcWXAfjjflEtkGIThGDOqpNgxl5iAF7gCI7LJGQVRhAiAl3gxDTFVBbvyqMapG+Miy2u/WnCukATVxhkNj24eAeQIgHB50dFzubjWmqQSQcFNDDDjTSzMs/c02wFx1gIPENdg=';
        }

        /*
            * Set the data
        */
        public function set_random_number_string($_random_number_string) {
            $this->_random_number_string = $_random_number_string;
        }
        public function set_signature_value($_signature_value) {
            $this->_signature_value = $_signature_value;
        }
        public function set_access_token($_access_token) {
            $this->_access_token = $_access_token;
        }
        public function set_tester_name($_tester_name) {
            $this->_tester_name = $_tester_name;
        }
        public function set_partner_id($_partner_id) {
            $this->_partner_id = $_partner_id;
        }
        public function set_auth_signature($_auth_signature) {
            $this->_auth_signature = $_auth_signature;
        }

        /*
            * Get the data
        */
        public function get_partner_id() {
            return $this->_partner_id;
        }
        public function get_random_number_string() {
            return $this->_random_number_string;
        }
        public function get_signature_value() {
            return $this->_signature_value;
        }
        public function get_access_token() {
            return $this->_access_token;
        }
        public function get_tester_name() {
            return $this->_tester_name;
        }
        public function get_auth_signature() {
            return $this->_auth_signature;
        }



        function testnetzme(){
        //   echo "ini adalah test netzme <br>";
        //   echo $this->secret_api_key;

            // echo "sorry server maintenance , <a href='".base_url()."'>back</a>";

            // echo $this->_partner_id;

            $this->set_random_number_string('wxyzwxyzwxyz');
            echo $this->_random_number_string;
            
            // var_dump($auth_signature); die();
        }

        function generate_auth_signature() {

            

            $curl = curl_init();

            $headers = array();
            // $headers[] = 'Content-Type : application/json';
            $headers['Content-Type'] = 'application/json';
            $headers['X-TIMESTAMP'] = '2024-06-15T00:00:00+12:39';
            $headers['X-CLIENT-KEY'] = $this->_partner_id;
            $headers['Private_Key'] = $this->private_key;
            // $headers['Private_Key'] = <<<EOD-----BEGIN RSA PRIVATE KEY-----{$this->private_key}-----END RSA PRIVATE KEY-----EOD;

            $end_point = $this->server_domain.'v1/utilities/signature-auth';

            // $data['X-TIMESTAMP'] = '2024-06-16T00:00:00+12:39';
            // $data['X-CLIENT-KEY'] = $this->_partner_id;
            // $data['Private_Key'] = $this->private_key;
            // $data['Private_Key'] = $this->private_key;

            $payload = json_encode($data);

            // curl_setopt($curl, CURLOPT_HTTPSHEADER, $headers);
            // curl_setopt($curl, X-TIMESTAMP, '2024-06-15T00:00:00+12:39');
            // curl_setopt($curl, X-CLIENT-KEY, $this->_partner_id);
            // curl_setopt($curl, Private_Key, $this->private_key);
            // curl_setopt($curl, CURLOPT_URL, $end_point);
            // curl_setopt($curl, CURLOPT_POST, true);
            // curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
            // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->private_key);
            curl_setopt($curl, CURLOPT_URL, $end_point);
            curl_setopt($curl, CURLOPT_POST, true);
            // curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
            // curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            curl_close($curl);

            $responseObject = json_decode($response, true);
            return $responseObject;

        }





        function payment_channels () {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/payment_channels';

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            curl_close($curl);

            $responseObject = json_decode($response, true);
            return $responseObject;
        }

        function getBalance () {
            $curl = curl_init();

            $headers = array();
            $headers[] = 'Content-Type: application/json';

            $end_point = $this->server_domain.'/balance';

            curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($curl, CURLOPT_USERPWD, $this->secret_api_key.":");
            curl_setopt($curl, CURLOPT_URL, $end_point);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

            $response = curl_exec($curl);
            curl_close($curl);

            $responseObject = json_decode($response, true);
            return $responseObject;
        }

    }
?>
