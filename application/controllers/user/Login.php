<?php
require_once 'application/conexion.php';
session_start();
var_dump($_POST); exit;
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * ";
$sql .= "FROM users";
$sql .= "WHERE username = '". $username ."'";

$resultados = $db->query($sql);

$fila = mysqli_fetch_assoc($resultados);

$passwordEnc = $fila['password'];

if(password_verify($password, $passwordEnc)){
    $_SESSION['logueado'] = true;
    header("Location: cosas.php");
}else{
	$_SESSION['logueado'] = false;
    header("Location: login.php");
}

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("User_model");
	}
	public function index()	
	{
		$this->load->view("user/login");
	}	
	
}
