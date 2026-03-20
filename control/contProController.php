<?php
    require_once '../model/DTO/ProdutoDTO.php';
    require_once '../model/DAO/ProdutoDAO.php';
    
      $ProdutoDAO = new ProdutoDAO();
            
      $contPro= $ProdutoDAO->contarPro();
?>