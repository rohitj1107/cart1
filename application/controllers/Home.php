<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Home
 */
class Home extends CI_Controller{
    public $json;
    public $arr;

    function __construct(){
        parent::__construct();
        $this->load->model('Home_model');
        $id = $this->Home_model->check();
        if ($id[0]->id == 0) {
            $json = file_get_contents("https://fakestoreapi.com/products");
            $arr = json_decode($json,true);
            foreach ($arr as  $value) {
                $data = [
                      'title' => $value['title'],
                      'price' => $value['price'],
                      'category' => $value['category'],
                      'description' => $value['description'],
                      'image' => $value['image'],
                  ];
                  $result = $this->Home_model->insert($data);
            }
        }
    }

    function index(){
      // echo session_id();
        $data = $this->Home_model->selectlist();
        $item_count = $this->Home_model->cart_item_count();
        return $this->load->view('home_view',compact('data','item_count'));
    }

    function select_product($value){
        $item_count = $this->Home_model->cart_item_count();
        $result = $this->Home_model->select_product_single($value);
        if ($result) {
            return $this->load->view('select_product_view',compact('result','item_count'));
        } else {
            return redirect('Home');
        }
    }

    function add_to_cart(){
        $data = [
            'title' => $this->input->post('title'),
            'image' => $this->input->post('image'),
            'price' => $this->input->post('price'),
            'session_id' => session_id(),
        ];
        $result = $this->Home_model->add_to_cart_model($data);
        if ($result) {
            $this->session->set_flashdata('success','success fully Insert Product in cart !');
            return redirect(base_url('/'));
        } else {
            $this->session->set_flashdata('faild','Product not insert in cart !');
            return redirect('/');
        }
    }

    function cart(){
        $cart = $this->Home_model->select_cart_item();
        $item_count = $this->Home_model->cart_item_count();
        if ($cart) {
            return $this->load->view('cart_view',compact('cart','item_count'));
        } else {
            return redirect('/');
        }
    }

    function login($type){
        $cart = $this->Home_model->select_cart_item();
        $item_count = $this->Home_model->cart_item_count();
        $this->load->view('user_form',compact('cart','item_count','type'));
    }

    function login_check(){
        $cart = $this->Home_model->select_cart_item();
        $data = [
          'email' => $this->input->post('email'),
          'password' => $this->input->post('password'),
        ];

        if($this->Home_model->login_check_model($data)){

            for ($i=0; $i < sizeof($cart); $i++) {
                $data_insert = array_merge($cart[$i],array('email' => $this->input->post('email')));
                $result = $this->Home_model->order_isert($data_insert);
            }
            if($result){
                $this->session->set_userdata('email',$this->input->post('email'));
                return redirect(base_url('index.php/success'));
            } else {
              $this->session->set_flashdata('faild_order','Order Not Inserted !');
              return redirect(base_url('index.php/login/2'));
            }
        } else {
            $this->session->set_flashdata('faild','User Id and password not match !');
            return redirect(base_url('index.php/login/2'));
        }
    }

    function guest_order(){
        $cart = $this->Home_model->select_cart_item();
        for ($i=0; $i < sizeof($cart); $i++) {
            $data_insert = array_merge($cart[$i],array('email' => $this->input->post('email')));
            $result = $this->Home_model->order_isert($data_insert);
        }
        if($result){
            $this->session->set_userdata('email',$this->input->post('email'));
            return redirect(base_url('index.php/success'));
        } else {
          $this->session->set_flashdata('faild_order','Order Not Inserted !');
          return redirect(base_url('index.php/login/2'));
        }
    }

    function all(){
        $cart = $this->Home_model->select_cart_item();

        for ($i=0; $i < sizeof($cart); $i++) {
            $data_insert = array_merge($cart[$i],array('email' => $this->input->post('email')));
            $result = $this->Home_model->order_isert($data_insert);
        }
        if($result){
            $this->session->set_userdata('email',$this->input->post('email'));
            return redirect(base_url('index.php/success'));
        } else {
          $this->session->set_flashdata('faild_order','Order Not Inserted !');
          return redirect(base_url('index.php/login/2'));
        }
    }

    function success(){
        $cart = $this->Home_model->select_cart_item();
        $item_count = $this->Home_model->cart_item_count();
        $this->load->view('success',compact('cart','item_count'));
    }

    function logout(){
        $this->session->sess_destroy();
        $this->session->unset_userdata('email');
        return redirect('/');
    }
}


?>
