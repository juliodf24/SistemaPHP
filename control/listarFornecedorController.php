<?php

require_once('../model/DTO/FornecedorDTO.php');
require_once '../model/DAO/FornecedorDAO.php';

$FornecedorDAO = new FornecedorDAO();

$todos = $FornecedorDAO->listarFornecedores();

    // echo '<pre>';
    // var_dump($todos);