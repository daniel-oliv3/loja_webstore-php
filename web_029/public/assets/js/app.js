/* ======= App JS ======= */


/*==============================================================*/
/* Função para adicionar um produto ao carrinho */
function adicionar_carrinho(id_produto){

    axios.defaults.withCredentials = true;
    axios.get('?a=adicionar_carrinho&id_produto=' + id_produto)
        .then(function(response){
            //console.log(response.data);
            var total_produtos = response.data;
            document.getElementById('carrinho').innerText = total_produtos;
        });
}

/*==============================================================*/
/* Função para remover todos os produto do carrinho */
function limpar_carrinho(){

    axios.defaults.withCredentials = true;
    axios.get('?a=limpar_carrinho')
        .then(function(response){
            document.getElementById('carrinho').innerText = 0;
        });
}


/*==============================================================*/










