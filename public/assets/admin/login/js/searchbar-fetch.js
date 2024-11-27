const server = window.location;
let BASE_URI;

if (server.hostname == 'localhost') {
    BASE_URI = server.origin + '/' + server.pathname.split('/')[1] + '/';
} else if (server.hostname == 'sitespublinet1.com.br') {
    BASE_URI = server.origin + '/projetos/' + server.pathname.split('/')[2] + '/';
} else {
    BASE_URI = server.origin + '/';
}


const searchFormInputs =
    Array.from(document.querySelectorAll('input[data-search-type="input"]'));
const searchFormSubmits =
    Array.from(document.querySelectorAll('button[data-search-type="submit"]'));


async function getSearchBarData(data, baseURI) {

    /**
     * 
     * Requisição GET dos dados
     * 
    */

    const response = await fetch(baseURI + 'api/searchbar', {
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


    /**
     * 
     * Filtro dos produtos
     * 
    */
    const productsData = await json.data.products;

    const filteredProductByName =
        await productsData.filter(product => product.name.match(regEx));

    const filteredProductByDescription =
        await productsData.filter(product => product.description.match(regEx));

    const filteredProductByCode =
        await productsData.filter(product => product.ref.match(regEx));


    /**
     * 
     * Filtro dos artigos
     * 
    */
    const articlesData =
        await json.data.articles;

    const filteredArticleByName =
        await articlesData.filter(article => article.title.match(regEx));

    const filteredArticleByDescription =
        await articlesData.filter(article => article.description.match(regEx));

    const filteredArticleByContent =
        await articlesData.filter(article => article.content.match(regEx));


    // Retorno de todos os dados
    return [
        filteredProductByName,
        filteredProductByDescription,
        filteredProductByCode,
        filteredArticleByName,
        filteredArticleByDescription,
        filteredArticleByContent
    ];

}

searchFormInputs.map((searchFormInput) => {
    searchFormInput.addEventListener('keyup', async (e) => {

        // Desabilita o refresh da página ao submeter ou dar enter
        e.preventDefault();

        const inputSearchOrigin = e.target;
        const inputSearchValue = inputSearchOrigin.value;
        // Desestruturação para pegar apenas o item desejado
        const [
            filteredProductByName,
            filteredProductByDescription,
            filteredProductByCode,
            filteredArticleByName,
            filteredArticleByDescription,
            filteredArticleByContent
        ] = await getSearchBarData(inputSearchValue, BASE_URI);

        const searchFormDestiny = inputSearchOrigin.dataset.searchFormResultTarget;
        const searchFormResult = Array.from(document.querySelectorAll('.search-form-result'))
            .find(item => item.dataset.searchFormResult == searchFormDestiny);


        if (inputSearchValue.length > 0) {

            if (!searchFormResult.classList.contains('active')) {
                searchFormResult.classList.add('active');
            }

            if (filteredProductByName.length > 0) {

                searchFormResult.innerHTML = filteredProductByName.map((productResult) => {
                    const productThumb = JSON.parse(productResult.images).images;

                    const productItemHTML = 
                    `<div class="search-form-result__item">
                        <a href="${BASE_URI + 'produtos/' + productResult.fullUrl}">
                            <img src="${BASE_URI + productThumb[0]}" class="search-form-result__item-img" />
                        </a>
                        <div class="search-form-result__item-content">
                            <a href="${BASE_URI + 'produtos/' + productResult.fullUrl}">
                                <h3>${productResult.name}</h3>
                                <small>(REF: ${productResult.ref})</small>
                            </a>
                            <a href="${BASE_URI + 'produtos/' + productResult.fullUrl}">
                                <p>${productResult.description.substring(0, 147).replace(/(<([^>]+)>)/gi, "")}...</p>
                            </a>
                        </div>
                    </div>`;


                    return productItemHTML;

                }).join('');

            } else if (filteredProductByDescription.length > 0) {

                searchFormResult.innerHTML = filteredProductByDescription.map((productResult) => {
                    const productThumb = JSON.parse(productResult.images).images;

                    const productItemHTML = 
                    `<div class="search-form-result__item">
                        <a href="${BASE_URI + 'produtos/' + productResult.fullUrl}">
                            <img src="${BASE_URI + productThumb[0]}" class="search-form-result__item-img" />
                        </a>
                        <div class="search-form-result__item-content">
                            <a href="${BASE_URI + 'produtos/' + productResult.fullUrl}">
                                <h3>${productResult.name}</h3>
                                <small>(REF: ${productResult.ref})</small>
                            </a>
                            <a href="${BASE_URI + 'produtos/' + productResult.fullUrl}">
                                <p>${productResult.description.substring(0, 147).replace(/(<([^>]+)>)/gi, "")}...</p>
                            </a>
                        </div>
                    </div>`;


                    return productItemHTML;

                }).join('');

            } else if (filteredProductByCode.length > 0) {

                searchFormResult.innerHTML = filteredProductByCode.map((productResult) => {
                    const productThumb = JSON.parse(productResult.images).images;

                    const productItemHTML = 
                    `<div class="search-form-result__item">
                        <a href="${BASE_URI + 'produtos/' + productResult.fullUrl}">
                            <img src="${BASE_URI + productThumb[0]}" class="search-form-result__item-img" />
                        </a>
                        <div class="search-form-result__item-content">
                            <a href="${BASE_URI + 'produtos/' + productResult.fullUrl}">
                                <h3>${productResult.name}</h3>
                                <small>(REF: ${productResult.ref})</small>
                            </a>
                            <a href="${BASE_URI + 'produtos/' + productResult.fullUrl}">
                                <p>${productResult.description.substring(0, 147).replace(/(<([^>]+)>)/gi, "")}...</p>
                            </a>
                        </div>
                    </div>`;


                    return productItemHTML;

                }).join('');

            } else if (filteredArticleByName.length > 0) {

                searchFormResult.innerHTML = filteredArticleByName.map((articleResult) => {
                    const productThumb = (articleResult.image != '') ? articleResult.image : 'assets/site/images/articles/sem-imagem.jpg';

                    const productItemHTML = 
                    `<div class="search-form-result__item">
                        <a href="${BASE_URI + articleResult.fullUrl}">
                            <img src="${BASE_URI + productThumb}" class="search-form-result__item-img" />
                        </a>
                        <div class="search-form-result__item-content">
                            <a href="${BASE_URI + articleResult.fullUrl}">
                                <h3>${articleResult.title}</h3>
                            </a>
                            <a href="${BASE_URI + articleResult.fullUrl}">
                                <p>${articleResult.description.substring(0, 147).replace(/(<([^>]+)>)/gi, "")}</p>
                            </a>
                        </div>
                    </div>`;


                    return productItemHTML;

                }).join('');

            } else if (filteredArticleByDescription.length > 0) {

                searchFormResult.innerHTML = filteredArticleByDescription.map((articleResult) => {
                    const productThumb = (articleResult.image != '') ? articleResult.image : 'assets/site/images/articles/sem-imagem.jpg';

                    const productItemHTML = 
                    `<div class="search-form-result__item">
                        <a href="${BASE_URI + articleResult.fullUrl}">
                            <img src="${BASE_URI + productThumb}" class="search-form-result__item-img" />
                        </a>
                        <div class="search-form-result__item-content">
                            <a href="${BASE_URI + articleResult.fullUrl}">
                                <h3>${articleResult.title}</h3>
                            </a>
                            <a href="${BASE_URI + articleResult.fullUrl}">
                                <p>${articleResult.description.substring(0, 147).replace(/(<([^>]+)>)/gi, "")}</p>
                            </a>
                        </div>
                    </div>`;


                    return productItemHTML;

                }).join('');

            } else if (filteredArticleByContent.length > 0) {

                searchFormResult.innerHTML = filteredArticleByContent.map((articleResult) => {
                    const productThumb = (articleResult.image != '') ? articleResult.image : 'assets/site/images/articles/sem-imagem.jpg';

                    const productItemHTML = 
                    `<div class="search-form-result__item">
                        <a href="${BASE_URI + articleResult.fullUrl}">
                            <img src="${BASE_URI + productThumb}" class="search-form-result__item-img" />
                        </a>
                        <div class="search-form-result__item-content">
                            <a href="${BASE_URI + articleResult.fullUrl}">
                                <h3>${articleResult.title}</h3>
                            </a>
                            <a href="${BASE_URI + articleResult.fullUrl}">
                                <p>${articleResult.description.substring(0, 147).replace(/(<([^>]+)>)/gi, "")}</p>
                            </a>
                        </div>
                    </div>`;


                    return productItemHTML;

                }).join('');

            } else {

                searchFormResult.innerHTML = 
                `<div class="search-form-result__item">
                    <div class="search-form-result__item-content text-center p-4">
                        <h3 class="mb-2">Nenhum dado encontrado</h3>
                        <a href="produtos" class="text-decoration-underline d-block mb-1">Ver nossos produtos</a>
                        <a href="artigos" class="text-decoration-underline d-block">Ver informações</a>
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

