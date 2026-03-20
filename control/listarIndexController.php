<?php

    require_once 'IndexDTO.php';
    require_once 'IndexDAO.php';
    
      $IndexDAO = new IndexDAO();
            
      $todos = $IndexDAO->listarProdutos();

    // echo '<pre>';
    // var_dump($todos);
?>