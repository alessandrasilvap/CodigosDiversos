//função que valida todos os campos de cadastro.
function validarFormulario(event) {
    event.preventDefault()

    var nome = document.getElementById('nome').value
    var idade = document.getElementById('idade').value
    var endereco = document.getElementById('endereco').value
    var login = document.getElementById('login').value
    var senha = document.getElementById('senha').value
    var confirmasenha = document.getElementById('confirmasenha').value
    

    //Se o usuário esquecer um campo OU outro, aparecerá mensagem de erro
    if (nome === '' || idade === '' || endereco ==='' || login === '' || senha === '' || confirmasenha ===''){
        window.alert('[ERRO] Algum campo não preenchido!')       
        return false;
    }

    //Se o campo Senha e o Confirme Senha não forem iguais aparecerá mensagem de erro
    if (senha !== confirmasenha){
        alert('[ERRO] Senhas não coincidem')     
        return false;
    } else { //Se não será cadastrado com sucesso
        alert('Dados cadastrados!')
        window.location.href="https://www.unisuam.edu.br/"

    }
}

function validarNome() {
    var nome1 = document.getElementById('nome').value

    if (nome1.length >= 10) {
        return true;
    } else {
        alert('Campo Nome deve conter mais que 10 letras.')
        return false;
    }
}

function validarLogin() {
    var login1 = document.getElementById('login').value

    if (login1.length <= 5) {
        return true;
    } else {
        alert('Login deve conter 5 caracteres.')
        return false;
    }
}
