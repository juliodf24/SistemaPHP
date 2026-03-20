<?php

    require_once '../model/DTO/UsuarioDTO.php';
    require_once '../model/DAO/UsuarioDAO.php';
    
      $usuarioDAO = new UsuarioDAO();
            
      $contUsu= $usuarioDAO->contabilizarUsu();



?>