<?php
    if(isset($_POST)){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $hobbie = $_POST['hobbie'];
    
        if(!empty($nome) && !empty($email) && !empty($idade) && !empty($hobbie)){
            if($idade >= 18){
                if(strlen($nome) > 6 ){
                    print_r("Cadastrado com sucesso!");
                }else{
                    print_r($nome . " É Muito pequeno, tente uma maior!");
                }
                
            }else{
                print_r("Precisa ser maior de idade para se cadastrar!");
            }

        }
    }