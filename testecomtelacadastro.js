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

function mascaraTelefone(input) {
    // Remove caracteres que não são dígitos
    let valor = input.value.replace(/\D/g, '');
    // Aplica a máscara
    if (valor.length > 6) {
        valor = valor.replace(/(\d{2})(\d{5})(\d)/, '($1) $2-$3');
    } else if (valor.length > 2) {
        valor = valor.replace(/(\d{2})(\d)/, '($1) $2');
    }
    input.value = valor;
}
