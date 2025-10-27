// Validação do formulário com jquery validate

$(document).ready(function () {
  // Máscara no telefone
  $('input[name="telefone"]').mask('(00) 00000-0000');

  // Validar nome sem números
  $.validator.addMethod("onlyLetters", function(value, element) {
    return this.optional(element) || /^[A-Za-zÀ-ÖØ-öø-ÿ\s]+$/.test(value);
  }, "Use apenas letras.");

  //  Inicializa a validação
  $("#form-contact").validate({
    rules: {
      nome: { required: true, minlength: 3, onlyLetters: true },
      email: { required: true, email: true },
      telefone: { required: true, minlength: 14 }, // (99) 99999-9999 - 14 caracteres
      empresa: { required: true, url: true }
    },
    messages: {
      nome: {
        required: "Por favor, informe seu nome",
        minlength: "Digite pelo menos 3 caracteres"
      },
      email: {
        required: "Informe seu e-mail",
        email: "Digite um e-mail válido"
      },
      telefone: {
        required: "Informe seu telefone",
        minlength: "Digite um telefone válido"
      },
      empresa: {
        required: "Informe o site da empresa",
        url: "Digite uma URL válida (ex: https://agenciatitanio.com.br/)"
      }
    },
    errorClass: "is-invalid",
    validClass: "is-valid",
    errorElement: "div",
    errorPlacement: function (error, element) {
      error.addClass("invalid-feedback");
      element.closest(".mb-3, .mb-4").append(error);
    }
  });
});