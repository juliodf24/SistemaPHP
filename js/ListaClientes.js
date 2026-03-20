
var deleteLinks = document.querySelectorAll('.delete');
deleteLinks.forEach(function(link) {
  link.addEventListener('click', function(event) {
    event.preventDefault(); // Para evitar que o link seja seguido
    var idUsuario = link.getAttribute('value');
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
          text: "O Usuário foi excluído.",
          icon: "success"
        });
        window.location.href = "../control/excluirUsuarioController.php?idUsu="+ idUsuario;
      }
    });
  });
});

