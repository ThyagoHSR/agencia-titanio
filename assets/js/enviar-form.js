// Envio do Formulário para o banco de dados

$(document).ready(function () {
  $("#form-contact").on("submit", function (e) {
    e.preventDefault();

    if (!$(this).valid()) return; // Se inválido, não envia

    $.ajax({
      type: "POST",
      url: "backend/enviar-form.php",
      data: $(this).serialize(),
      dataType: "json",
      success: function (response) {
        if (response.status === "success") {
          $(".form-card").html(`
            <div class="text-center p-4">
              <h4>✅ Enviado com sucesso!</h4>
              <p>Obrigado pelo interesse. Entraremos em contato em breve.</p>
            </div>
          `);
        } else {
          alert("❌ Ocorreu um erro ao enviar. Tente novamente.");
        }
      },
      error: function () {
        alert("Erro de comunicação com o servidor.");
      },
    });
  });
});
