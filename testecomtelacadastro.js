function confirmacaosenha() {
    var senha = document.getElementById('senha').value;
    var senha1 = document.getElementById('confirmandoSenha').value;

    if (senha === senha1) {
        return true;
    } else {
        alert('Senhas não iguais. Por favor, tente novamente.')
        return false;
    }
}
