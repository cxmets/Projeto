function mostrarSenha() {
    const senhaInput = document.getElementById('senha');
    if (senhaInput.type === 'password') {
      senhaInput.type = 'text';
      document.querySelector('.show-password-btn').textContent = 'Ocultar';
    } else {
      senhaInput.type = 'password';
      document.querySelector('.show-password-btn').textContent = 'Mostrar';
    }
  }