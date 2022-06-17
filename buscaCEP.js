


function buscaCep(){
    var cepi = document.getElementById("cepis").value;
    var url = "http://viacep.com.br/ws/"+ cepi + "/json/"
    alert(url)
    $.ajax({
        url: url,
        type: "GET",
        success: function(response){
            
            $("#cepi").val(response.cep)
            $("#logradouro").val(response.logradouro)
            $("#complemento").val(response.complemento)
            $("#bairro").val(response.bairro)
            $("#localidade").val(response.localidade)
            $("#uf").val(response.uf)
            $("#ibge").val(response.ibge)
            $("#gia").val(response.gia)
            $("#ddd").val(response.ddd)
            $("#siafi").val(response.siafi)
            
        }
    })
}