$(document).on('click', '.excluirUsuario', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var token = $(this).data('token');
  
        swal({
            title: "Confirma a exclusão desse registro?",
            type: "error",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Sim!",
            cancelButtonText: "Não",
            showCancelButton: true,
        },
        function() {
          $.ajax({
            url: 'usuario/excluir',
            method: 'POST',
            data: {
              id: id,
              "_token": token
            },
          
          success: function() {   
            swal({title: "OK", text: "Registro removido!", type: "success"},
              function(){ 
                  location.reload();
              }
            );
          },
  
          error: function() {   
            swal({title: "OPS", text: "Erro ao remover registro!", type: "warning"},
              function(){ 
                  location.reload();
              }
            );
          }
  
          });
    });
  });

  
  $(document).on("click", "#alterar_senha", function () {

    if($("#alterar_senha").is(':checked')){
      $("#senha").removeAttr('disabled');
      $("#confirmar_senha").removeAttr('disabled');
    } else {
      $("#confirmar_senha").attr("disabled", "disabled");
      $("#senha").attr("disabled", "disabled");
    }

  });


  function EnviarFormUser() {

    var nome = FormUser.nome.value;
    var data_nascimento = FormUser.data_nascimento.value;
    var telefone = FormUser.telefone.value;
    var email = FormUser.email.value;
    var perfil_id = FormUser.perfil_id.value;
    var password = FormUser.password.value;
    var password2 = FormUser.password2.value; 

    if (nome == "") {

        swal({title: "Ops", text: "O campo nome deve ser preenchido!", type: "error"});
        FormUser.nome.focus();
        return false;
    }

    if (data_nascimento == "") {

        swal({title: "Ops", text: "A data de nascimento deve ser preenchido!", type: "error"});
        FormUser.data_nascimento.focus();
        return false;
    }

    if (telefone == "") {

        swal({title: "Ops", text: "O campo telefone não pode ser vazio!", type: "error"});
        FormUser.telefone.focus();
        return false;
    }

    if (email == "") {

        swal({title: "Ops", text: "O campo email do usuário deve ser preenchido!", type: "error"});
        FormUser.email.focus();
        return false;
    }

    if (perfil_id == "") {

      swal({title: "Ops", text: "O campo perfil do usuário deve ser selecionado!", type: "error"});
      FormUser.perfil_id.focus();
      return false;
  }

    if($('input[name="alterar_senha"]').is(':checked')){

        if (password != "") {
            if (password != password2) {
        
                swal({title: "Ops", text: "Os campos senha e confirmar senha devem ser idênticos e não podem ser vazios!", type: "error"});
                FormUser.password2.focus();
                return false;
            }
        }

    }
    
    document.getElementById('FormUser').submit();
}

$(document).on('click', '.excluirPessoa', function (e) {
  e.preventDefault();
  var id = $(this).data('id');
  var token = $(this).data('token');

      swal({
          title: "Confirma a exclusão desse registro?",
          type: "error",
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Sim!",
          cancelButtonText: "Não",
          showCancelButton: true,
      },
      function() {
        $.ajax({
          url: 'pessoa/excluir',
          method: 'POST',
          data: {
            id: id,
            "_token": token
          },
        
        success: function() {   
          swal({title: "OK", text: "Registro removido!", type: "success"},
            function(){ 
                location.reload();
            }
          );
        },

        error: function() {   
          swal({title: "OPS", text: "Erro ao remover registro!", type: "warning"},
            function(){ 
                location.reload();
            }
          );
        }

        });
  });
});

function EnviarFormAssistido() {

  var nome = FormAssistido.nome.value;
  var data_nascimento = FormAssistido.data_nascimento.value;
  var telefone = FormAssistido.telefone.value;
  var email = FormAssistido.email.value;
  var tipo_pessoa_id = FormAssistido.tipo_pessoa_id.value;

  if (nome == "") {

      swal({title: "Ops", text: "O campo nome deve ser preenchido!!!", type: "error"});
      FormAssistido.nome.focus();
      return false;
  }

  if (data_nascimento == "") {

      swal({title: "Ops", text: "A data de nascimento deve ser preenchida!", type: "error"});
      FormAssistido.data_nascimento.focus();
      return false;
  }

  if (telefone == "") {

      swal({title: "Ops", text: "O campo telefone não pode ser vazio!", type: "error"});
      FormAssistido.telefone.focus();
      return false;
  }

  if (email == "") {

      swal({title: "Ops", text: "O campo email do usuário deve ser preenchido!", type: "error"});
      FormAssistido.email.focus();
      return false;
  }

  if (tipo_pessoa_id == "") {

    swal({title: "Ops", text: "O campo perfil deve ser selecionado!", type: "error"});
    FormAssistido.tipo_pessoa_id.focus();
    return false;
  }
  
  document.getElementById('FormAssistido').submit();
}