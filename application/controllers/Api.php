<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public function __construct(){
		parent::__construct();
	
		$this->load->model('Main_model');
		$this->load->helper('url');
        $this->load->library('session');

	}

	public function index()
	{
		if ($this->session->userdata('user_id')) {
			if (file_exists ('public/note/note.txt')) {
				$data['content'] = file_get_contents('public/note/note.txt');
			}
			if (file_exists ('public/note/note1.txt'))
				$data['content1'] = file_get_contents('public/note/note1.txt');
			if (file_exists ('public/note/note2.txt'))
				$data['content2'] = file_get_contents('public/note/note2.txt');
			$orders = $this->Main_model->get();
			$only = array();
			$days = array();
			$none = array();
			if (isset($orders)) {
				foreach ($orders as $order) {
					$order_string = strtolower($order['shipping_method']);
					if( strpos( $order_string, 'only' ) !== false) {
						array_push($only , $order);
					} elseif( strpos( $order_string, '10-14 days' ) !== false) {
						array_push($days , $order);
					} else {
						array_push($none , $order);
					}
				}
			}
			$data['only'] = $only;
			$data['days'] = $days;
			$data['none'] = $none;
			$data['address'] = file_get_contents("public/note/address.txt");
			$this->load->view('dashboard', $data);
		} else {
			redirect('/login', 'refresh');
		}
	}
	public function insert()
	{
		$postData = $this->input->post();
		$result = $this->Main_model->insertOrder($postData);
		echo json_encode($result);
	}
	public function delete() {
		$id = $this->input->post('id');
		$order = $this->Main_model->get_by_id($id);

		if (empty($order)) die;
		$order_string = strtolower($order->shipping_method);
		if( strpos( $order_string, 'only' ) !== false) {
			$fp = fopen('public/note/note1.txt', 'a+');
		} else if( strpos( $order_string, '10-14 days' ) !== false) {
			$fp = fopen('public/note/note2.txt', 'a+');
		} else {
			$fp = fopen('public/note/note.txt', 'a+');
		}
        $items = unserialize($order->items);
        foreach( $items as $item ){
			if ($item['qty'] != 1) {
				$line_string = sprintf( '%d * %s' . "\n", $item['qty'], $item['name'] );
				fwrite($fp, $line_string);
			} else {
				$line_string = sprintf( '%s' . "\n", $item['name'] );
				fwrite($fp, $line_string);
			}
		}
		if( strpos( $order_string, 'only' ) !== false) {
			fwrite($fp, 'Only' . "\n");
		} else if ( strpos( $order_string, '10-14 days' ) !== false) {
			fwrite($fp, 'Express' . "\n");
		}
		$shipping_address = unserialize($order->customer_address);
		$line_string = sprintf( '%s %s' . "\n", $shipping_address['first_name'], $shipping_address['last_name'] );
		fwrite($fp, $line_string);
		fwrite($fp, $shipping_address['address_1'] . "\n");
		if( ! empty($shipping_address['address_2'] ) ){
			fwrite($fp, $shipping_address['address_2'] . "\n" );
		}
		$line_string = sprintf( '%s %s, %d' . "\n", $shipping_address['city'], $shipping_address['state'], $shipping_address['postcode'] );
		fwrite($fp, $line_string);
        fwrite($fp, '-----------------------------------' . "\n");
        fclose($fp);

		$result = $this->Main_model->deleteOrder($id);
		//$result = true;
		$order_string = strtolower($order->shipping_method);
		if( strpos( $order_string, 'only' ) === false && strpos( $order_string, '10-14 days' ) === false) {
			$w_url = file_get_contents("public/note/address.txt");
			$postRequest = array(
				'order_id' => $id,
				'woit_remote_complete' => 1
			);
			$cURLConnection = curl_init($w_url);
			curl_setopt($cURLConnection, CURLOPT_POSTFIELDS, $postRequest);
			curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);
	
			$apiResponse = curl_exec($cURLConnection);
			curl_close($cURLConnection);
		}
		
		echo json_decode($result);
		die;
	}
	public function clear() {
		$id = $this->input->post("id");
		if($id == 0)
		$file = fopen("public/note/note.txt", "w") or die("Unable to open file!");
		else if($id == 1)
		$file = fopen("public/note/note1.txt", "w") or die("Unable to open file!");
		else if($id == 2)
		$file = fopen("public/note/note2.txt", "w") or die("Unable to open file!");
		fclose($file);
		echo json_encode(true);
	}

	public function update() {
		$order_id = $this->input->post('order_id');
		if (isset($order_id)){
			$result = $this->Main_model->update($order_id);
		} else {
			$result = false;
		}
		echo json_encode($result);
	}

	public function setting() {
		$w_url = $this->input->post('address');
		file_put_contents("public/note/address.txt", $w_url);
		echo json_encode(true);
	}
}
