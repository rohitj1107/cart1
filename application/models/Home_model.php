<?php

/**
 * Home Model
 */
class Home_model extends CI_Model{

  function __construct(){
      parent::__construct();
  }

  function insert($data){
      $sql = $this->db->insert('product',$data);
      if ($sql) {
          return true;
      } else {
          return false;
      }
  }

  function check(){
      $sql = $this->db->select_max('id')->get('product');
      if ($sql->num_rows() > 0) {
          return $sql->result();
      } else {
          return false;
      }
  }

  function selectlist(){
      $sql = $this->db->get('product');
      if ($sql->num_rows() > 0) {
          return $sql->result_array();
      } else {
          return false;
      }
  }

  function select_product_single($id){
      $sql = $this->db->where('id',$id)->get('product');
      if ($sql->num_rows() > 0) {
          return $sql->row_object();
      } else {
          return false;
      }
  }

  function add_to_cart_model($data){
      $sql = $this->db->insert('cart',$data);
      if ($sql) {
          return true;
      } else {
          return false;
      }
  }

  function cart_item_count(){
      $sql = $this->db->select('count("id") as number')->where('session_id',session_id())->get('cart');
      if ($sql->num_rows() > 0) {
          return $sql->row();
      } else {
          return false;
      }
  }

  function select_cart_item(){
      $sql = $this->db->where('session_id',session_id())->get('cart');
      if ($sql->num_rows() > 0) {
          return $sql->result_array();
      } else {
          return false;
      }
  }

  function login_check_model($data){
    $sql = $this->db->where($data)->get('user');
    if ($sql->num_rows() > 0) {
        return $sql->row_object();
    } else {
        return false;
    }
  }

  function order_isert($data){
    $product = [
      'title' => $data['title'],
      'price' => $data['price'],
      'email' => $data['email'],
      'session_id' => $data['session_id']
    ];
    $sql = $this->db->insert('u_order',$product);
    if ($sql) {
      $del = $this->db->where('session_id',session_id())->delete('cart');
      return true;
    } else {
      return false;
    }
  }
}



?>
