<?php

    require_once '../model/DTO/ProdutoDTO.php';
    require_once '../model/DAO/ProdutoDAO.php';
    
      $ProdutoDAO = new ProdutoDAO();
            
      $todos = $ProdutoDAO->listarUsuarios();

    // echo '<pre>';
    // var_dump($todos);
?>