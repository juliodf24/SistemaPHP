window.onload = function () {
  const form = document.querySelector("#form");
  const numeroInput = document.getElementById("numero");
  const enderecoInput = document.getElementById("endereco");
  const complementoInput = document.getElementById("complemento");
  const bairroInput = document.getElementById("bairro");
  const cidadeInput = document.getElementById("cidade");
  const ufInput = document.getElementById("estado");
  const cepInput = document.getElementById("cep");
  const editarEnderecoBtn = document.getElementById("editarEnderecoBtn");

  //  identifica o valor de cada INPUT
  document.getElementById("cep").value = "72233-003";
  document.getElementById("endereco").value = "qnp 20 conjunto c";
  document.getElementById("numero").value = "10";
  document.getElementById("complemento").value = "dois andares";
  document.getElementById("bairro").value = "Psul";
  document.getElementById("cidade").value = "Ceilândia";
  document.getElementById("estado").value = "DF";

  // Variáveis para controle de validação
  let cepCorreto = false;
  let enderecoCorreto = false;
  let bairroCorreto = false;
  let cidadeCorreto = false;
  let numeroCorreto = false;
  let complementoCorreto = true; // Como é opcional, começa como verdadeiro

  numeroInput.addEventListener("input", function () {
    this.value = this.value.replace(/\D/g, "");
  });

  // Função genérica para validar campo
  function validarCampo(input, mensagem, variavelCorrespondente) {
    if (input.value.trim() !== "") {
      input.style.border = "1px solid green";
      variavelCorrespondente = true;
      return true;
    } else {
      input.style.border = "1px solid red";
      variavelCorrespondente = false;
      setErrorFor(input, mensagem);
      return false;
    }
  }

  // Event listener para o clique no botão de alterar
  editarEnderecoBtn.addEventListener("click", function (event) {
    event.preventDefault(); // Evita que o formulário seja enviado antes da validação

    // Validar todos os campos
    cepCorreto = validarCampo(cepInput, "CEP é obrigatório.", cepCorreto);
    enderecoCorreto = validarCampo(
      enderecoInput,
      "Endereço é obrigatório.",
      enderecoCorreto
    );
    bairroCorreto = validarCampo(
      bairroInput,
      "Bairro é obrigatório.",
      bairroCorreto
    );
    cidadeCorreto = validarCampo(
      cidadeInput,
      "Cidade é obrigatória.",
      cidadeCorreto
    );
    numeroCorreto = validarCampo(
      numeroInput,
      "Número é obrigatório.",
      numeroCorreto
    );
    validarCampo(complementoInput, "", complementoCorreto); // Complemento é opcional

    // Verifica se todos os campos estão preenchidos
    if (
      cepCorreto &&
      enderecoCorreto &&
      bairroCorreto &&
      cidadeCorreto &&
      numeroCorreto &&
      complementoCorreto
    ) {
      // Exibir alerta de sucesso
      swal("Sucesso!", "Endereço atualizado com sucesso.", "success").then(
        () => {
          // Limpar os campos do formulário após o envio bem-sucedido
          form.reset();
          // Direcionar para perfil.php
          window.location.href = "perfil.php";
        }
      );
    } else {
      // Se pelo menos um campo estiver incorreto ou vazio, exibe o alerta de erro
      swal(
        "Erro!",
        "Por favor, preencha todos os campos corretamente.",
        "error"
      );
    }
  });

  // Função de erro
  function setErrorFor(input, message) {
    //Obtem o formControl
    const formControl = input.parentElement;
    //Obtem o small
    let small = formControl.querySelector("small");
    // Se o small não existir, cria um
    if (!small) {
      small = document.createElement("small");
      formControl.appendChild(small);
    }
    //Adicionar a mensagem de erro
    small.innerText = message;
    //Adicionar classe de erro
    formControl.className = "form-control error";
  }

  // Função de sucesso
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

  // Aplica a máscara ao valor do CEP
  cepInput.addEventListener("blur", function () {
    var cepValue = cepInput.value.replace(/\D/g, "");
    cepInput.value = cepMask(cepValue);

    if (cepValue.length !== 8) {
      cepInput.style.border = "1px solid red";
      cepCorreto = false;
      setErrorFor(cepInput, "CEP inválido.");
      return;
    }

    fetch(`https://viacep.com.br/ws/${cepValue}/json/`)
      .then((response) => response.json())
      .then((data) => {
        if (!data.erro) {
          enderecoInput.value = data.logradouro;
          bairroInput.value = data.bairro;
          cidadeInput.value = data.localidade;
          ufInput.value = data.uf;
          complementoInput.focus();
          cepInput.style.border = "1px solid green";
          cepCorreto = true;
          enderecoCorreto = true;
          bairroCorreto = true;
          cidadeCorreto = true;
          ufInput.style.border = "1px solid green";
          enderecoInput.style.border = "1px solid green";
          bairroInput.style.border = "1px solid green";
          cidadeInput.style.border = "1px solid green";
          ufInput.style.border = "1px solid green";
        } else {
          cepInput.style.border = "1px solid red";
          cepCorreto = false;
          setErrorFor(cepInput, "CEP não encontrado.");
        }
      })
      .catch((error) => {
        console.error("Erro ao buscar CEP:", error);
      });
  });

  const cepMask = (value) => {
    if (!value) return "";
    value = value.replace(/\D/g, "");
    value = value.replace(/^(\d{5})(\d)/, "$1-$2");
    return value;
  };
};
