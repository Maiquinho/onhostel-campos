const server = window.location;
let BASE_URI;

if(server.hostname == 'localhost'){
    BASE_URI = server.origin + '/' + server.pathname.split('/')[1] + '/';
}else if(server.hostname == 'sitespublinet1.com.br'){
    BASE_URI = server.origin + '/projetos/' + server.pathname.split('/')[2] + '/';
}else{
    BASE_URI = server.origin + '/';
}


const searchFormInputs = Array.from(document.querySelectorAll('input[data-search-type="input"]'));
const searchFormSubmits = Array.from(document.querySelectorAll('button[data-search-type="submit"]'));


async function getProductsData(data, baseURI) {

    /**
     * 
     * Requisição GET dos dados
     * 
    */

    const response = await fetch(baseURI + 'api/products', {
        method: 'GET',
        headers: {
            "Content-Type": "application/json"
        }
    });
    const json = await response.json();

    /**
     * 
     * Filtro dos dados com regEx
     * 
    */
    const expression = `.*${data}.*`;
    const regEx = new RegExp(expression, 'i');
    const filteredProductData = await json.filter(product => product.name.match(regEx));

    return filteredProductData;

}

searchFormInputs.map((searchFormInput) => {
    searchFormInput.addEventListener('keyup', async (e) => {

        const inputSearchOrigin = e.target;
        const inputSearchValue = inputSearchOrigin.value;
        const productsResult = await getProductsData(inputSearchValue, BASE_URI);

        const searchFormDestiny = inputSearchOrigin.dataset.searchFormResultTarget;
        const searchFormResult = Array.from(document.querySelectorAll('.search-form-result')).find(item => item.dataset.searchFormResult == searchFormDestiny);


        if (inputSearchValue.length > 0) {

            if (!searchFormResult.classList.contains('active')) {
                searchFormResult.classList.add('active');
            }

            if (productsResult.length > 0) {

                searchFormResult.innerHTML = productsResult.map((productResult) => {
                    const productThumb = JSON.parse(productResult.images).images;
                    // let productName;

                    // console.log(productResult.name.toLowerCase().includes(inputSearchValue.toLowerCase()))

                    // if(productResult.name.toLowerCase().includes(inputSearchValue.toLowerCase())){
                    //     productName = `${productResult.name.replace(inputSearchValue.toLowerCase(), '<span>' + inputSearchValue.toLowerCase() + '</span>')}`;
                    //     console.log('fazd o L')
                    // }else if(productResult.name.includes(inputSearchValue)){
                    //     productName = `${productResult.name.replace(inputSearchValue, '<span>' + inputSearchValue + '</span>')}`;
                    //     console.log('fazd o F')
                    // }else{
                    //     productName = productResult.name;
                    // }


                    const productItemHTML = `
                <div class="search-form-result__item">
                <a href="${BASE_URI + 'produtos/' + productResult.fullUrl}">
                    <img src="${BASE_URI + productThumb[0]}" class="search-form-result__item-img" />
                </a>
                    <div class="search-form-result__item-content">
                        <a href="${BASE_URI + 'produtos/' + productResult.fullUrl}">
                            <h3>${productResult.name}</h3>
                        </a>
                        <a href="${BASE_URI + 'produtos/' + productResult.fullUrl}">
                            <p>${productResult.description.substring(0, 55).replace(/(<([^>]+)>)/gi, "")}</p>
                        </a>
                    </div>
                </div>`;


                    return productItemHTML;

                }).join('');

            } else {

                searchFormResult.innerHTML = `
            <div class="search-form-result__item">
                <div class="search-form-result__item-content text-center p-4">
                    <h3>Nenhum produto encontrado</h3>
                    <a href="produtos">
                        <p>Veja nossos produtos</p>
                    </a>
                </div>
            </div>`;

            }


        } else {

            if (searchFormResult.classList.contains('active')) {
                searchFormResult.classList.remove('active');
            }

        }

    });
})


searchFormSubmits.map((searchFormSubmit) => {
    searchFormSubmit.addEventListener('click', (e) => {
        e.preventDefault();
    });
})

