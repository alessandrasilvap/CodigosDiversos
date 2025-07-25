<?php
 public function salvar() {
        //Verifica se o método de requisição é POST
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            //Obtém os dados do formulário
            $dados = [
                'nome' => strip_tags($_POST['nome']),
                'email' => strip_tags($_POST['email'])
            };
            //Validações:
            //Nome (apenas letras e espaços)
            $nome = $dados['nome'];

            if (!preg_match("/^[\p{L}\s]+$/u", $nome)) {
                echo "<script>alert('Nome inválido. Use apenas letras e espaços.'); window.history.back();</script>";
                exit;
            }
            //Email (validação com filter_var)
            $email = $dados['email'];
            if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
                echo "<script>alert('E-mail inválido.'); window.history.back();</script>";
                exit;
            }
            //Tenta salvar o novo usuário
            if ($usuarioDAO->inserir($usuario)) {
                echo "<script>alert('Cadastro finalizado!');</script>";
                exit;
            } else {
                echo "Erro ao cadastrar o usuário. Tente novamente!";
            }
            private function validarDados($dados) {
                foreach ($dados as $campo => $valor) {
                    if (empty($valor)) {
                        return "Campo {$campo} não pode ser vazio!";
                    }  
                }

                foreach ($_POST as $campos => $valor) {
                    $campo = strip_tags($valor);
                }
                return true;
            }
?>
