<?php
get_header();
?>

<main>
  <section class="container_contato">
    <h2>Esta é a página de contato</h2>
    <section class="form">
      <form id="contactForm" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        
        <label for="mensagem">Mensagem:</label>
        <textarea name="mensagem" id="mensagem"></textarea>
        
        <button type="submit" id="submitForm">Enviar</button>
      </form>
      <div id="errorMessages" class="error-messages"></div>
      <div id="successMessage" class="success-message"></div>
    </section>
  </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
  //DOMContentLoaded garante que o evento so seja disparado depois que o documento é carregado
  const form = document.getElementById('contactForm');
  const errorMessages = document.getElementById('errorMessages');
  const successMessage = document.getElementById('successMessage');
  
  form.addEventListener('submit', function(event) {
    event.preventDefault(); // Impede o envio padrão do formulário
    
    const nome = document.getElementById('nome').value;
    const email = document.getElementById('email').value;
    const mensagem = document.getElementById('mensagem').value;
    errorMessages.innerHTML = '';
    successMessage.innerHTML = '';

    let hasErrors = false;

    if (nome.length < 5) {
      hasErrors = true;
      errorMessages.innerHTML += '<p>O campo nome deve ter mais do que 5 caracteres.</p>';
    }

    if (!/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/.test(email)) {
      hasErrors = true;
      errorMessages.innerHTML += '<p>O campo email precisa ser válido.</p>';
    }

    if (mensagem.trim() === '') {
      hasErrors = true;
      errorMessages.innerHTML += '<p>O campo de mensagem precisa ser preenchido.</p>';
    }

    if (!hasErrors) {
      successMessage.innerHTML = '<p>Mensagem enviada com sucesso!</p>';
    }
  });
});
</script>

<?php
get_footer();
?>
