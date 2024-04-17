document.getElementById('formContato').addEventListener('submit', function(e){
    var nome = document.getElementById('nome').value;
    var email = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;
    var mensagem = document.getElementById('mensagem').value;
    
    if(!nome || !email || !mensagem){
        alert('Todos os campos são obrigatorios!');
        return;
    }

    
    console.log('Formulario enviado:', {nome,email,senha,mensagem});
    alert('Mensagem enviada com sucesso!');
    

});