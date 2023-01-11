/* ======= App JS ======= */


/*==============================================================*/
/* Função para adicionar um produto ao carrinho */
function adicionar_carrinho(id_produto){
    axios.defaults.withCredentials = true;
    axios.get('?a=adicionar_carrinho&id_produto=' + id_produto)
        .then(function(response){
            var total_produtos = response.data;
            document.getElementById('carrinho').innerText = total_produtos;
        });
}

/*==============================================================*/










