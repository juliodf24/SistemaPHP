
var deleteLinks = document.querySelectorAll('.delete');
deleteLinks.forEach(function(link) {
  link.addEventListener('click', function(event) {
    event.preventDefault(); // Para evitar que o link seja seguido
    var idFor = link.getAttribute('value');
    Swal.fire({
      title: "Tem certeza?",
      text: "Você não poderá desfazer esta ação!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Sim, excluir!"
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire({
          title: "Excluído!",
          text: "O Fornecedor foi excluído.",
          icon: "success"
        });
        window.location.href = "../control/excluirFornecedorController.php?idFor="+ idFor;
      }
    });
  });
});




// var urlAtual = window.location.href;
// var urlClass = new URL(urlAtual);
// var situacao = urlClass.searchParams.get("situacao");
// console.log(situacao);
// if (situacao == "cadastrado") {
//   Swal({
//     icon: "success",
//     title: "Cadastro realizado!",
//     text: "Parabéns, o seu cadastro foi realizado com sucesso!",
//   }).then((value) => {
//     if (value) {
//       // direcionar para index.php
//       window.location.href = "login.php";
//       // Limpar os campos do formulário após o envio bem-sucedido
//       form.reset();
//     }
//   });
// }
// if (situacao == "erro") {
//   Swal({
//     icon: "error",
//     title: "Erro ao efetuar cadastro!",
//     text: "Por favor, tente novamente mais tarde.",
//   }).then((value) => {
//     if (value) {
//       // Limpar os campos do formulário após o envio bem-sucedido
//     }
//   });
// }
