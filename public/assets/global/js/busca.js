$(function () {
    $(document).on("change", "#estado_endereco", function () {
        var id = $(this).val();
        $.ajax({
            method: 'get',
            url: "/sistema/endereco/get-cidades/" + id,
            success: function (response) {
                $("#cidade_endereco").html(response);
            }
        });
    });
});

$("#cnpj").focusout(function(){

    //Início do Comando AJAX
    cnpj = $(this).val().replace(/[^\d]+/g,'');

    //Início do Comando AJAX
    $.ajax({
        //O campo URL diz o caminho de onde virá os dados
        //É importante concatenar o valor digitado no CNPJ
        url: '/sistema/empresa/consulta-cnpj/'+cnpj,
        //Atualização: caso use java, use cnpj.jsp, usando o outro exemplo.
        //Aqui você deve preencher o tipo de dados que será lido,
        //no caso, estamos lendo JSON.
        dataType: 'json',
        //SUCESS é referente a função que será executada caso
        //ele consiga ler a fonte de dados com sucesso.
        //O parâmetro dentro da função se refere ao nome da variável
        //que você vai dar para ler esse objeto.
        success: function(resposta){

            //Confere se houve erro e o imprime
            if(resposta.status == "ERROR"){
                alert(resposta.message + "\nPor favor, digite os dados manualmente.");
                $("#nome").focus().select();
                return false;
            }

            //Agora basta definir os valores que você deseja preencher
            //automaticamente nos campos acima.
            $("#razao_social").val(resposta.nome);
            $("#nome_fantasia").val(resposta.fantasia);
            $("#atividade_principal").val(resposta.atividade_principal[0]['code']+' - '+resposta.atividade_principal[0]['text']);
            $("#telefone").val(resposta.telefone);
            $("#email").val(resposta.email);
            $("#logradouro_endereco").val(resposta.logradouro);
            $("#complemento_endereco").val(resposta.complemento);
            $("#bairro_endereco").val(resposta.bairro);
            $("#cidade").val(resposta.municipio);
            $("#uf").val(resposta.uf);
            $("#cep_endereco").val(resposta.cep);
            $("#numero_endereco").val(resposta.numero);
        }
    });

});

$("#cnpjBusca").focusout(function(){

    // isset helper function
    var isset = function(variable){
        return typeof(variable) !== "undefined" && variable !== null && variable !== '';
    }

    //Início do Comando AJAX
    cnpj = $(this).val().replace(/[^\d]+/g,'');

    //Início do Comando AJAX
    $.ajax({
        //O campo URL diz o caminho de onde virá os dados
        //É importante concatenar o valor digitado no CNPJ
        url: '/sistema/empresa/consulta-empresa/'+cnpj,
        //Atualização: caso use java, use cnpj.jsp, usando o outro exemplo.
        //Aqui você deve preencher o tipo de dados que será lido,
        //no caso, estamos lendo JSON.
        dataType: 'json',
        //SUCESS é referente a função que será executada caso
        //ele consiga ler a fonte de dados com sucesso.
        //O parâmetro dentro da função se refere ao nome da variável
        //que você vai dar para ler esse objeto.
        success: function(resposta){

                if(resposta){
                    //Agora basta definir os valores que você deseja preencher
                    //automaticamente nos campos acima.
                    $("#razao_social").val(resposta.razao_social);
                    $("#empresa_id").val(resposta.id);
                    $("#convenio_id").val(resposta.convenio_id);
                    $("#numero_convenio").val(resposta.numero_convenio);

                    $.ajax({
                        method: 'get',
                        url: "/sistema/empresa/get-responsaveis/" + resposta.id,
                        success: function (response) {
                            $("#responsaveis_jovem").html(response);
                        }
                    });

                }else{
                    swal("Ops!", "Não encontramos nenhuma empresa cadastrada com esse CNPJ!", "error");
                }
        }
    });

});


$("#cpfBusca").focusout(function(){

    // isset helper function
    var isset = function(variable){
        return typeof(variable) !== "undefined" && variable !== null && variable !== '';
    }

    //Início do Comando AJAX
    cpf = $(this).val().replace(/[^\d]+/g,'');

    //Início do Comando AJAX
    $.ajax({
        //O campo URL diz o caminho de onde virá os dados
        //É importante concatenar o valor digitado no CNPJ
        url: '/sistema/aluno/consulta-cpf/'+cpf,
        //Atualização: caso use java, use cnpj.jsp, usando o outro exemplo.
        //Aqui você deve preencher o tipo de dados que será lido,
        //no caso, estamos lendo JSON.
        dataType: 'json',
        //SUCESS é referente a função que será executada caso
        //ele consiga ler a fonte de dados com sucesso.
        //O parâmetro dentro da função se refere ao nome da variável
        //que você vai dar para ler esse objeto.
        success: function(resposta){

                if(resposta[0]){
                    //Agora basta definir os valores que você deseja preencher
                    //automaticamente nos campos acima.
                    $("#nome_aluno").val(resposta[0].nome);
                    $("#aluno_id").val(resposta[0].id);
                }else{
                    swal("Ops!", "Não encontramos nenhuma aluno cadastrado com esse CPF!", "error");
                }
        }
    });

});

$(function () {
    $(document).on("change", "#estado_escola", function () {
        var id = $(this).val();
        $.ajax({
            method: 'get',
            url: "/sistema/endereco/get-cidades/" + id,
            success: function (response) {
                $("#cidade_escola").html(response);
            }
        });
    });
});

$("#cnpj").focusout(function(){

    //Início do Comando AJAX
    cnpj = $(this).val().replace(/[^\d]+/g,'');

    //Início do Comando AJAX
    $.ajax({
        //O campo URL diz o caminho de onde virá os dados
        //É importante concatenar o valor digitado no CNPJ
        url: '/sistema/empresa/consulta-cnpj/'+cnpj,
        //Atualização: caso use java, use cnpj.jsp, usando o outro exemplo.
        //Aqui você deve preencher o tipo de dados que será lido,
        //no caso, estamos lendo JSON.
        dataType: 'json',
        //SUCESS é referente a função que será executada caso
        //ele consiga ler a fonte de dados com sucesso.
        //O parâmetro dentro da função se refere ao nome da variável
        //que você vai dar para ler esse objeto.
        success: function(resposta){

            //Confere se houve erro e o imprime
            if(resposta.status == "ERROR"){
                alert(resposta.message + "\nPor favor, digite os dados manualmente.");
                $("#nome").focus().select();
                return false;
            }

            //Agora basta definir os valores que você deseja preencher
            //automaticamente nos campos acima.
            $("#razao_social").val(resposta.nome);
            $("#nome_fantasia").val(resposta.fantasia);
            $("#atividade_principal").val(resposta.atividade_principal[0]['code']+' - '+resposta.atividade_principal[0]['text']);
            $("#telefone").val(resposta.telefone);
            $("#email").val(resposta.email);
            $("#logradouro_endereco").val(resposta.logradouro);
            $("#complemento_endereco").val(resposta.complemento);
            $("#bairro_endereco").val(resposta.bairro);
            $("#cidade").val(resposta.municipio);
            $("#uf").val(resposta.uf);
            $("#cep_endereco").val(resposta.cep);
            $("#numero_endereco").val(resposta.numero);
        }
    });

});

$("#cpfReposicao").focusout(function(){

    // isset helper function
    var isset = function(variable){
        return typeof(variable) !== "undefined" && variable !== null && variable !== '';
    }

    //Início do Comando AJAX
    cpf = $(this).val().replace(/[^\d]+/g,'');

    //Início do Comando AJAX
    $.ajax({
        //O campo URL diz o caminho de onde virá os dados
        //É importante concatenar o valor digitado no CNPJ
        url: '/sistema/aluno/consulta-cpf/'+cpf,
        //Atualização: caso use java, use cnpj.jsp, usando o outro exemplo.
        //Aqui você deve preencher o tipo de dados que será lido,
        //no caso, estamos lendo JSON.
        dataType: 'json',
        //SUCESS é referente a função que será executada caso
        //ele consiga ler a fonte de dados com sucesso.
        //O parâmetro dentro da função se refere ao nome da variável
        //que você vai dar para ler esse objeto.
        success: function(resposta){

                if(resposta[0]){
                    //Agora basta definir os valores que você deseja preencher
                    //automaticamente nos campos acima.
                    $("#alunoReposicao").val(resposta[0].nome);
                    $("#alunoReposicao_id").val(resposta[0].id);
                }else{
                    swal("Ops!", "Não encontramos nenhuma aluno cadastrado com esse CPF!", "error");
                }
        }
    });

});
