import { getServer } from './get-server.js';


// Só executa o código quando a DOM for completamente carregada

window.addEventListener('DOMContentLoaded', () => {

    // Define as base urls

    const { BASE_URI } = getServer();


    // Define a chave cart do localStorage caso não exista, com uma matriz vazia

    if (!window.localStorage.getItem('@jagb:cart-1.0.0')) {
        window.localStorage.setItem('@jagb:cart-1.0.0', JSON.stringify([]));
    }



    // Criar função parecida com o dispatch do useReducer (React)

    function setCartData({ amount = null, code = null, name = null, image = null, url = null }, destroy = false, resetAmount = false, resetFromCheckout = false) {

        const cartData = {
            amount,
            code,
            name,
            image,
            url
        };


        // Converte os dados já existentes na chave cart do localstorage para um valor javascript válido

        const prevCartData = JSON.parse(window.localStorage.getItem('@jagb:cart-1.0.0'));

        // Verifica se o code do produto passado por argumento já existe, se sim ele apenas incrementa o amount do carrinho

        const checkDuplicatedProduct = prevCartData.find(prevCartItem => prevCartItem.code == code);



        if (checkDuplicatedProduct && destroy === false) {

            let prevCartModified = [...prevCartData];

            prevCartModified.map((prevCartItem) => {
                if (prevCartItem.code == code) {

                    if (resetAmount !== true) {

                        checkDuplicatedProduct['amount'] += amount;

                        setTimeout(() => {
                            alert(`${checkDuplicatedProduct['amount']}x ${checkDuplicatedProduct['amount'] > 1 ? 'unidades' : 'unidade'} do produto ${prevCartItem.code} ${checkDuplicatedProduct['amount'] > 1 ? 'adicionadas' : 'adicionada'} ao carrinho.`)
                        }, 200);

                    } else {

                        checkDuplicatedProduct['amount'] = amount;

                    }

                }
            })

            window.localStorage.setItem('@jagb:cart-1.0.0', JSON.stringify(prevCartModified));

        } else if (!checkDuplicatedProduct && destroy === false && resetFromCheckout === false) {

            window.localStorage.setItem('@jagb:cart-1.0.0', JSON.stringify([...prevCartData, cartData]));

            setTimeout(() => {
                alert(`Produto ${code} adicionado do carrinho.`)
            }, 200);

        } else {

            window.localStorage.setItem('@jagb:cart-1.0.0', JSON.stringify([...prevCartData, cartData]));

        }


        if (destroy === true) {


            let prevCartWithoutRemovedOne = [...prevCartData].filter((prevCartItem) => prevCartItem.code !== code);


            window.localStorage.setItem('@jagb:cart-1.0.0', JSON.stringify(prevCartWithoutRemovedOne));

            setTimeout(() => {
                alert(`Produto ${code} removido do carrinho.`)
            }, 300);

        }

        if (resetFromCheckout === true) {

            window.localStorage.setItem('@jagb:cart-1.0.0', JSON.stringify([]));

        }


        setCartHTML();

    }

    function setCartHTML() {

        // Define conteúdo do modal do carrinho

        const cartModalItemsContainer = document.querySelector('#cart-content ul');

        const cartCheckoutButtons = Array.from(document.querySelectorAll('[data-cart="checkout-btn"]'));

        // Matriz global de cart storage

        const cartStorage = window.localStorage.getItem('@jagb:cart-1.0.0');

        const cartStorageParsed = JSON.parse(cartStorage);

        const cartCount = cartStorageParsed.length;

        // Define os elementos que receberão o valor da contagem de itens do carrinho

        const cartElementCount = Array.from(document.querySelectorAll('[data-cart="count-products"]'));

        cartElementCount.map((cartElementCount) => cartElementCount.innerHTML = cartCount);


        // Elementos da página de checkout 

        const cartCheckoutItemsContainer = document.querySelector('[data-cart="product-checkout-table-list"]');

        const cartCheckoutFormContainer = document.querySelector('[data-cart="product-checkout-form"]');

        const alertProductsNotFoundCheckoutPage = document.querySelector('[data-cart="product-checkout-empty-alert"]');

        const checkoutProductsField = document.querySelector('[data-cart="checkout-product-data"]');


        let cartModalHTML;
        let cartCheckoutHTML;



        // Seta a contagem do carrinho

        if (cartCount > 0) {

            // Limpa o conteúdo HTML do modal

            cartModalHTML = '';

            // Limpa o conteúdo HTML da lista de checkout
            cartCheckoutHTML = '';

            // Limpa o value do input com os produtos de checkout
            if (checkoutProductsField) {
                checkoutProductsField.value = '';
            }

            cartStorageParsed.map((cartStorageItems, index) => {
                const { amount, code, image, name, url } = cartStorageItems;

                cartModalHTML +=
                    `<li>
            <!-- Single Cart Item Start -->
            <div class="single-cart-item">
                <div class="cart-thumb">
                    <img src="${image}" width="70" height="70" alt="image prévia do produto ${name}" data-cart="product-item-image" />
                    <span class="product-quantity" data-cart="product-item-amount"
                    >${amount}x</span>
                </div>
                <div class="cart-item-content">
                    <h6 class="product-name">
                        <a href="${url}" data-cart="product-item-name">${name}</a>
                    </h6>
                    <small data-cart="product-item-code">${code}</small>
                </div>
            </div>
            <!-- Single Cart Item End -->
                </li>`;

                cartCheckoutHTML +=
                    `<tr>
                    <td>
                        <img src="${image}" width="120" height="120" alt="image prévia do produto ${name}" />
                    </td>
                    <td class="Product-name">
                        <p><a href="${url}">${name} (${code})</a></p>
                    </td>
                    <td>
                        <div class="product-details-description m-0">
                            <div class="product-meta p-0">
                                <div class="product-quantity d-inline-flex">
                                    <button type="button" class="sub" data-cart="product-decrease-amount-button">
                                        -
                                    </button>
                                    <input type="text" value="${amount}" data-form-field="number" data-cart="product-update-amount" data-ref="${code}" />
                                    <button type="button" class="add" data-cart="product-increase-amount-button">
                                        +
                                    </button>
                                </div>
                            </div>
                        </div>
                    </td>
                    <td class="Product-price">
                        <button type="button" title="Deletar produto ${code} do carrinho" data-cart="product-delete-button">
                            <span>${code}</span>
                        </button>
                    </td>
                    </tr>`;


                // Adiciona ao value do input hidden do checkout os dados dos produtos do carrinho

                if (checkoutProductsField) {
                    checkoutProductsField.value += `${name}|(${code})|${amount}x`;
                    if (index + 1 < cartStorageParsed.length) {
                        checkoutProductsField.value += ', ';
                    }
                }
            });

            if (cartModalItemsContainer) {
                cartModalItemsContainer.innerHTML = cartModalHTML;
            }

            if (cartCheckoutItemsContainer) {
                cartCheckoutItemsContainer.innerHTML = cartCheckoutHTML;
            }


            // Define o texto dos links de checkout de acordo com a contagem do carrinho

            cartCheckoutButtons.map((cartCheckoutButton) => {
                cartCheckoutButton.innerText = 'Finalizar orçamento';
                cartCheckoutButton.href = BASE_URI + 'carrinho';
            });


            // remove o banner de carrinho vazio caso esteja visível

            // if(!alertProductsNotFoundCheckoutPage.classList.contains('d-none')){
            if (alertProductsNotFoundCheckoutPage && !alertProductsNotFoundCheckoutPage.classList.contains('d-none')) {
                alertProductsNotFoundCheckoutPage.classList.add('d-none');
            }


            // }

            // mostra o formulário caso não esteja visível

            // if (cartCheckoutFormContainer.classList.contains('d-none')) {
            // cartCheckoutFormContainer.classList.remove('d-none')
            // }


        } else {

            cartModalHTML =
                `<li>
            <!-- Single Cart Item Start -->
            <div class="single-cart-item">
                <div class="cart-item-content text-center">
                    <h3 class="product-name empty">Seu carrinho está vazio</h3>
                </div>
            </div>
            <!-- Single Cart Item End -->
            </li>`

            cartModalItemsContainer.innerHTML = cartModalHTML;


            // Define o texto dos links de checkout de acordo com a contagem do carrinho

            cartCheckoutButtons.map((cartCheckoutButton) => {
                cartCheckoutButton.innerText = 'Ver Produtos';
                cartCheckoutButton.href = BASE_URI + 'produtos';
            });


            // o usuário não terá aceso direto à página de checkout se o carrinho estiver vazio, mas caso consiga acessar essa rota será printado o seguinte conteúdo

            if (alertProductsNotFoundCheckoutPage.classList.contains('d-none')) {
                alertProductsNotFoundCheckoutPage.classList.remove('d-none')
            }

            // esconde o formulário de checkout

            if (!cartCheckoutFormContainer.classList.contains('d-none') && !cartCheckoutFormContainer.classList.contains('cart-element-hidden')) {
                cartCheckoutFormContainer.classList.add('cart-element-hidden');
                setTimeout(() => {
                    cartCheckoutFormContainer.classList.add('d-none');
                }, 200)
            }

        }
    }



    // Define o botão de dispatch dos dados do produto para o array do carrinho

    const cartDispatchButton = document.querySelector('[data-cart="product-dispatch"]');

    if (cartDispatchButton) {
        cartDispatchButton.addEventListener('click', async () => {

            const productAmount = document.querySelector('[data-cart="product-qnt"]').value;
            const productCode = document.querySelector('[data-cart="product-code"]').textContent;
            const productName = document.querySelector('[data-cart="product-name"]').textContent;
            const productImage = document.querySelector('[data-cart="product-image"]').getAttribute('src');
            const productUrl = window.location.href;


            const productData = {
                amount: parseInt(productAmount),
                code: productCode,
                name: productName,
                image: productImage,
                url: productUrl
            };

            setCartData(productData);

        });
    };


    // Define os botões de checkout

    const cartCheckoutButtons = Array.from(document.querySelectorAll('[data-cart="product-checkout-button"]'));

    console.log(cartCheckoutButtons)

    if (cartCheckoutButtons.length > 0) {
        cartCheckoutButtons.map((cartCheckoutButton) => {
            cartCheckoutButton.addEventListener('click', (e) => {
                if (e.target.nodeName == 'A') {
                    setTimeout(() => {
                        if (e.target.href == 'javascript:void(0)') {
                            e.preventDefault();
                        } else {
                            resetCartData();
                            window.scrollTo(0, 0);
                            window.location.href = BASE_URI + 'produtos';
                        }
                    }, 100);
                } else {
                    window.scrollTo(0, 0);
                    setTimeout(() => {
                        resetCartData();
                    }, 200);
                }
            });
        });
    }

    function resetCartData() {
        setCartData({}, false, false, true);
    }


    // Só executa quando todo HTML é montado pela primeira vez

    window.addEventListener('load', () => {

        // Define o elemento a ser observado dentro do escopo

        const cartCheckoutItemsContainer = document.querySelector('[data-cart="product-checkout-table-list"]');


        // Mutation observer para verificar quando o HTML é re-montado

        const cartHTMLObserver = new MutationObserver(mutations => {
            mutations.map((mutation) => {
                if (mutation.type == 'childList') {
                    removeItemsFromCart();
                }
            });
        });

        // Instância do observer

        if (cartCheckoutItemsContainer) {
            cartHTMLObserver.observe(cartCheckoutItemsContainer, { childList: true });
        }


        function removeItemsFromCart() {
            const cartDeleteProductButtons = Array.from(document.querySelectorAll('[data-cart="product-delete-button"]'));

            if (cartDeleteProductButtons) {
                cartDeleteProductButtons.map((cartDeleteProductButton) => {
                    cartDeleteProductButton.addEventListener('click', async (e) => {

                        const productCode = Array.from(e.target.children).find(child => child.nodeName == 'SPAN').textContent.trim();

                        if (confirm(`Deseja continuar com a exclusão do produto ${productCode} do carrinho?`) == true) {
                            const cartDataWithoutDeletedPayload = { amount: null, code: productCode, name: null, image: null, url: null };

                            setCartData(cartDataWithoutDeletedPayload, true);

                            // Define os dados de cart do localStorage para acessarmos o tamanho da lista

                            const cartCount = JSON.parse(window.localStorage.getItem('@jagb:cart-1.0.0')).length;
                            if (!cartCount > 0) {
                                cartHTMLObserver.disconnect();
                            }
                        }

                    })
                })
            }
        }


        // Mutation observer para verificar quando o HTML é re-montado

        const cartUpdatedAmountHTMLObserver = new MutationObserver(mutations => {
            mutations.map((mutation) => {
                if (mutation.type == 'childList') {
                    updatedItemsAmountFromCart();
                }
            });
        });

        // Instância do observer

        if (cartCheckoutItemsContainer) {
            cartUpdatedAmountHTMLObserver.observe(cartCheckoutItemsContainer, { childList: true });
        }



        // Atualiza a quantidade de cada produto no carrinho

        function updatedItemsAmountFromCart() {

            const cartIncreaseAmountInputFields = Array.from(document.querySelectorAll('[data-cart="product-update-amount"]'));

            if (cartIncreaseAmountInputFields) {
                cartIncreaseAmountInputFields.map((cartIncreaseAmountInputField) => {
                    cartIncreaseAmountInputField.addEventListener('input', async (e) => {

                        const productCode = e.target.dataset.ref;
                        const productAmount = parseInt(e.target.value);


                        const updatedProductData = { amount: productAmount, code: productCode, name: null, image: null, url: null };
                        setCartData(updatedProductData, false, true);


                        // Define os dados de cart do localStorage para acessarmos o tamanho da lista

                        const cartCount = JSON.parse(window.localStorage.getItem('@jagb:cart-1.0.0')).length;
                        if (!cartCount > 0) {
                            cartUpdatedAmountHTMLObserver.disconnect();
                        }
                    })
                })
            }
        }



        // Mutation observer para verificar quando o HTML é re-montado

        const cartIncrementedAmountHTMLObserver = new MutationObserver(mutations => {
            mutations.map((mutation) => {
                if (mutation.type == 'childList') {
                    increaseItemsAmountFromCart();
                }
            });
        });

        // Instância do observer

        if (cartCheckoutItemsContainer) {
            cartIncrementedAmountHTMLObserver.observe(cartCheckoutItemsContainer, { childList: true });
        }

        // Aumenta a quantidade de cada produto no carrinho

        function increaseItemsAmountFromCart() {

            const cartIncreaseAmountInputFields = Array.from(document.querySelectorAll('[data-cart="product-increase-amount-button"]'));

            if (cartIncreaseAmountInputFields) {
                cartIncreaseAmountInputFields.map((cartIncreaseAmountInputField) => {
                    cartIncreaseAmountInputField.addEventListener('click', async (e) => {

                        const productCode = e.target.previousElementSibling.dataset.ref;
                        const productAmount = parseInt(e.target.previousElementSibling.value);


                        const increasedProductData = { amount: productAmount, code: productCode, name: null, image: null, url: null };
                        setCartData(increasedProductData, false, true);


                        // Define os dados de cart do localStorage para acessarmos o tamanho da lista

                        const cartCount = JSON.parse(window.localStorage.getItem('@jagb:cart-1.0.0')).length;
                        if (!cartCount > 0) {
                            cartIncrementedAmountHTMLObserver.disconnect();
                        }
                    })
                })
            }
        }



        // Mutation observer para verificar quando o HTML é re-montado

        const cartDecrementedAmountHTMLObserver = new MutationObserver(mutations => {
            mutations.map((mutation) => {
                if (mutation.type == 'childList') {
                    decreaseItemsAmountFromCart();
                }
            });
        });

        // Instância do observer

        if (cartCheckoutItemsContainer) {
            cartDecrementedAmountHTMLObserver.observe(cartCheckoutItemsContainer, { childList: true });
        }


        // Diminui a quantidade de cada produto no carrinho

        function decreaseItemsAmountFromCart() {
            const cartDecreaseAmountInputFields = Array.from(document.querySelectorAll('[data-cart="product-decrease-amount-button"]'));

            if (cartDecreaseAmountInputFields) {
                cartDecreaseAmountInputFields.map((cartDecreaseAmountInputField) => {
                    cartDecreaseAmountInputField.addEventListener('click', async (e) => {

                        const productCode = e.target.nextElementSibling.dataset.ref;
                        const productAmount = parseInt(e.target.nextElementSibling.value);


                        const decreasedProductData = { amount: productAmount, code: productCode, name: null, image: null, url: null };
                        setCartData(decreasedProductData, false, true);


                        // Define os dados de cart do localStorage para acessarmos o tamanho da lista

                        const cartCount = JSON.parse(window.localStorage.getItem('@jagb:cart-1.0.0')).length;
                        if (!cartCount > 0) {
                            cartDecrementedAmountHTMLObserver.disconnect();
                        }
                    })
                })
            }
        }



        // Executa para o primeiro item atualizado antes de iniciar do observer, também será o gatilho do observer mutation

        updatedItemsAmountFromCart();


        // Executa para o primeiro item com a quantidade incrementada antes de iniciar do observer, também será o gatilho do observer mutation

        increaseItemsAmountFromCart();


        // Executa para o primeiro item com a quantidade diminuída antes de iniciar do observer, também será o gatilho do observer mutation

        decreaseItemsAmountFromCart();


        // Executa o primeiro item deletado antes de iniciar do observer, também será o gatilho do observer mutation

        removeItemsFromCart();

    })



    // Executa a montagem do HTML ao carregar o código

    setCartHTML();


});