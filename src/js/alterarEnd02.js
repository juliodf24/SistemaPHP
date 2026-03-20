//Obtem o formulário
const form = document.querySelector("#form");
//Obtem os inputs do formulário
const cep = document.querySelector("#cep");
const endereco = document.querySelector("#endereco");
const numero = document.querySelector("#numero");
const complemento = document.querySelector("#complemento");
const bairro = document.querySelector("#bairro");
const cidade = document.querySelector("#cidade");
const estado = document.querySelector("#estado");

//Adiciona um evento quando o submit do formulário for clicado e passa uma função
form.addEventListener("submit", (e) => {
  // Não deixa a página ser recarregada quando o evento for acionado
  e.preventDefault();
  //Chama a função que verifica se os campos digitados são válidos
  checkInputs();
});

//Função que verifica se os campos são válidos
function checkInputs() {
  //Obtem os valores dos nos inputs
  const cepValue = cep.value;
  const enderecoValue = endereco.value;
  const numeroValue = numero.value;
  const complementoValue = complemento.value;
  const bairroValue = bairro.value;
  const cidadeValue = cidade.value;
  const estadoValue = estado.value;

  //Verifica se usuário está válido
  if (cepValue.trim() === "") {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(cep, "O cep é obrigatório.");
  } else {
    //Chama a função setSuccessFor passando o input
    setSuccessFor(cep);
  }

  //Verifica se o telefone está válido
  if (enderecoValue.trim() === "") {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(endereco, "O endereço é obrigatório.");
  } else {
    //Chama a função setSuccessFor passando o input
    setSuccessFor(endereco);
  }

  //Verifica se email está válido
  if (numeroValue.trim() === "") {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(numero, "O numero é obrigatório.");
  } else if (!checknumero(numeroValue)) {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(numero, "Insira um numero válido.");
  } else {
    //Chama a função setSuccessFor passando o input
    setSuccessFor(numero);
  }

  //Verifica se a senha está válida
  if (complementoValue.trim() === "") {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(complemento, "o complemento é obrigatória.");
  } else if (complementoValue.length < 7) {
    //Chama a função setErrorFor passando o input e a mensagem
    setErrorFor(
      complemento,
      "o complemento precisa ter no mínimo 7 caracteres."
    );
  } else {
    //Chama a função setSuccessFor passando o input
    setSuccessFor(complemento);
  }

  //Verifica se a confirmação da senha é igual a senha
  //   if (passwordConfirmationValue.trim() === "") {
  //     //Chama a função setErrorFor passando o input e a mensagem
  //     setErrorFor(passwordConfirmation, "A confirmação de senha é obrigatória.");
  //   } else if (passwordConfirmationValue !== passwordValue) {
  //     //Chama a função setErrorFor passando o input e a mensagem
  //     setErrorFor(passwordConfirmation, "As senhas não conferem.");
  //   } else {
  //     //Chama a função setSuccessFor passando o input
  //     setSuccessFor(passwordConfirmation);
  //   }

  //Obtem todos os elementos que tem a class .form-control
  const formControls = form.querySelectorAll(".form-control");
  //Coloca o formControls em uma lista, executa o método every para verificar se todos os elementos que tem a class .form-control também tem a class success
  const formIsValid = [...formControls].every((formControl) => {
    return formControl.className === "form-control success";
  });
  //Se o formulário for válido acione o modal
  if (formIsValid) {
    swal({
      icon: "success",
      title: "Cadastro realizado!",
      text: "Parabéns, o seu cadastro foi realizado com sucesso!",
    }).then((value) => {
      if (value) {
        // Limpar os campos do formulário após o envio bem-sucedido
        form.reset();
        // direcionar para index.php
        window.location.href = "index.php";
      }
    });
  }
}

// Função de erro
function setErrorFor(input, message) {
  //Obtem o formControl
  const formControl = input.parentElement;
  //Obtem o small
  const small = formControl.querySelector("small");
  //Adicionar a mensagem de erro
  small.innerText = message;
  //Adicionar classe de erro
  formControl.className = "form-control error";
}

function setSuccessFor(input, message) {
  //Obtem o formControl
  const formControl = input.parentElement;
  //Obtem o small
  const small = formControl.querySelector("small");
  //Caso o small tenha algum conteúdo
  if (small !== null) {
    //Retire o conteúdo do small
    small.innerText = "";
  }
  //Adicionar a classe de sucesso
  formControl.className = "form-control success";
}


const telefoneUsuInput = document.querySelector('input[name="telefoneUsu"]');

telefoneUsuInput.addEventListener("keypress", function (e) {
  if (!checkCharTelefone(e)) {
    // Alteração aqui
    e.preventDefault();
  }
});

function checkCharTelefone(e) {
  // Alteração aqui
  const char = String.fromCharCode(e.keyCode);
  const pattern = /[0-9]/;

  if (char.match(pattern)) {
    console.log(char);
    return true;
  }
}

// MASCARA DO TELEFONE
const handlePhone = (event) => {
  let input = event.target;
  input.value = phoneMask(input.value);
};

const phoneMask = (value) => {
  if (!value) return "";
  value = value.replace(/\D/g, "");
  value = value.replace(/(\d{2})(\d)/, "($1) $2");
  value = value.replace(/(\d)(\d{4})$/, "$1-$2");
  return value;
};
