const budgetButton = document.querySelector('[data-budget="button"]');


if(budgetButton){
    budgetButton.addEventListener('click', (e) => {

        const server = window.location;
        let BASE_URI;
    
        if(server.hostname == 'localhost'){
            BASE_URI = server.origin + '/' + server.pathname.split('/')[1] + '/';
        }else if(server.hostname == 'sitespublinet1.com.br'){
            BASE_URI = server.origin + '/projetos/' + server.pathname.split('/')[2] + '/';
        }else{
            BASE_URI = server.origin + '/';
        }
    
        const budgetQtyInputVal = document.querySelector('input[data-budget="input-qty"]').value;
        const productName = document.querySelector('h1.title').textContent.replace(/\//g, '');
        const BASE_URL_TO_ENCODE = BASE_URI + 'contato?subject=';
    
        /**
         * 
         * Monta o href do botão "Orçar" com uma mensagem contendo o número de unidades do produto desejado e o nome do produto.
         * 
        */
    
        e.target.href = encodeURI(`${BASE_URL_TO_ENCODE} ${budgetQtyInputVal} ${(parseInt(budgetQtyInputVal) > 1) ? 'unidades de' : 'unidade de'} ${productName}`);
    
    });
}