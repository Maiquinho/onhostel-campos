/**
 * 
 * Aguarda todo conteúdo da DOM ser carregado para executar o código dentro do listener
 * 
*/

document.addEventListener('DOMContentLoaded', () => {


    /**
     * 
     * Envia as informações preenchidas no formulário para o whatsapp
     * 
    */

    function whatsappSendForm() {

        /**
         * 
         * Pega o conteúdo do input name
         * retorno: @string
         * 
        */
        let inputName = document.querySelector('#whatsapp-form-name');

        /**
         * 
         * Pega o conteúdo do input company
         * retorno: @string
         * 
        */
        let inputCompany = document.querySelector('#whatsapp-form-company');

        /**
         * 
         * Pega o conteúdo do input tel
         * retorno: @string
         * 
        */
        let inputPhone = document.querySelector('#whatsapp-form-tel');

        /**
         * 
         * Pega o conteúdo do input mobile
         * retorno: @string
         * 
        */
        let inputMobile = document.querySelector('#whatsapp-form-mobile');

        /**
         * 
         * Pega o conteúdo do select de onde quer ser chamado
         * retorno: @string
         * 
        */
        let selectWhereWannaCall = document.querySelector('#whatsapp-form-where-wanna-call');

        /**
         * 
         * Pega o conteúdo do select de onde quer ser chamado
         * retorno: @string
         * 
        */
        let inputCpfCnpj = document.querySelector('#whatsapp-form-cpf-cnpj');

        /**
         * 
         * Pega o conteúdo do input mobile
         * retorno: @string
         * 
        */
        let selectWhereWeMet = document.querySelector('#whatsapp-form-where-did-you-find-us');

        /**
         * 
         * Pega o conteúdo do input email
         * retorno: @string
         * 
        */
        let inputEmail = document.querySelector('#whatsapp-form-email');

        /**
         * 
         * Pega o conteúdo do input assunto
         * retorno: @string
         * 
        */
        let inputSubject = document.querySelector('#whatsapp-form-subject');

        /**
         * 
         * Pega o conteúdo do input hidden cart products
         * retorno: @string
         * 
        */
        let inputCartProducts = document.querySelector('#whatsapp-form-products');

        let cartProductsArray = (inputCartProducts && inputCartProducts.value != '') ?
            inputCartProducts.value.split(', ') : null;

        let cartProductsHTML;

        if (cartProductsArray != null) {
            cartProductsHTML = `\n`; 
            cartProductsHTML +=
                `| Nome do produto | Código do produto | Quantidade de produtos |\n`;

            // Cria um tamanho de preenchimento da linha de acordo com as colunas de título acima (reajustado pois quebrava no whatsapp)
            const productNameMarkPad = '---------------------';
            const productCodeMarkPad = '-----------------------';
            const productAmountMarkPad = '-----------------------------';

            cartProductsHTML +=
                `|${productNameMarkPad}|${productCodeMarkPad}|${productAmountMarkPad}|\n`;

            cartProductsArray.map(cartProductItem => {
                const productItemDataArray = cartProductItem.split('|');

                const productName = (productItemDataArray[0].length >= 14) ? productItemDataArray[0].substring(0, 13).trim() + '.' : productItemDataArray[0];
                const productCode = productItemDataArray[1];
                const productAmount = productItemDataArray[2];


                cartProductsHTML += `|${productName.padEnd(productNameMarkPad.length - 2, '-')}|${productCode.padEnd(productCodeMarkPad.length - 2, '-')}|${productAmount.padStart(productAmountMarkPad.length, '-')}|\n`;
            });

            cartProductsHTML +=
                `|${productNameMarkPad}|${productCodeMarkPad}|${productAmountMarkPad}|\n`;

        } else {
            cartProductsHTML = null;
        }

        /**
         * 
         * Pega o conteúdo do textarea
         * retorno: @string
         * 
        */
        let textarea = document.querySelector('#whatsapp-form-message');




        /**
         * 
         * Verifica com um operador ternário se o value do input correspondente é diferente de vazio, 
         * se sim declara a variável com uma mensagem + o value do input
         * 
        */
        let name = (inputName && inputName.value != '') ? `*Nome:* ${inputName.value}\n` : '';

        let company = (inputCompany && inputCompany.value != '') ? `*Empresa:* ${inputCompany.value}\n` : '';

        let phone = (inputPhone && inputPhone.value != '') ? `*Telefone:* ${inputPhone.value}\n` : '';

        let mobile = (inputMobile && inputMobile.value != '') ? `*Celular:* ${inputMobile.value}\n` : '';

        let email = (inputEmail && inputEmail.value != '') ? `*E-mail:* ${inputEmail.value}\n` : '';

        let cpfCnpj = (inputCpfCnpj && inputCpfCnpj.value != '') ? `*CPF/CNPJ:* ${inputCpfCnpj.value}\n` : '';

        let whereWannaCall = (selectWhereWannaCall && selectWhereWannaCall.value != '' && selectWhereWannaCall.value != 'Por onde gostaria de ser contatado?*') ? `*Por onde gostaria de ser contactado:* ${selectWhereWannaCall.value}\n` : '';

        let whereWeMet = (selectWhereWeMet && selectWhereWeMet.value != '' && selectWhereWeMet.value != 'Selecione uma opção') ? `*Onde nos conheceu:* ${selectWhereWeMet.value}\n` : '';

        let subject = (inputSubject && inputSubject.value != '') ? `${inputSubject.value}` : 'os produtos';

        let cartProducts = (cartProductsHTML) ? `*Produtos:*${cartProductsHTML}\n` : '';

        let message = (textarea && textarea.value != '') ? `*Mensagem:* ${textarea.value}` : '';






        const whatsappToolNumber = document.querySelector('.wc--float-ballon--user--content---phone').innerText;

        const whatsappToolCompany = document.querySelector('.wc--float-ballon--user--content---name').innerText;

        const whatsappCompany = (whatsappToolCompany) ? `da ${whatsappToolCompany}` : ' da [Nome da Empresa]';

        const whatsappNumber = (whatsappToolNumber) ? whatsappToolNumber.replace('+55 11', '5511').replace('-', '').replace(' ', '') : '';

        /**
         * 
         * Monta a Url com a mensagem para o whatsapp e decodifica a mesma para o navegador interpretar os espaços em branco.
         * 
        */

        const whatsappMensageLink = `https://api.whatsapp.com/send?phone=${whatsappNumber}&text=Olá, vi seu site e gostaria de saber mais sobre ${subject} ${whatsappCompany}!\n\n${name}${company}${phone}${mobile}${email}${cpfCnpj}${whereWannaCall}${whereWeMet}${cartProducts}${message}`;

        const whatsappMensageLinkEncoded = encodeURI(whatsappMensageLink);




        if(name == '' || name == '' || company == '' || mobile == '' || email == ''){
            
            document.querySelector('#whatsapp-form-submit').href = 'javascript:void(0)';
            alert('Preencha todos os campos obrigatórios!');
            
        }else{
            /**
             * 
             * Insere dentro do atributo href do elemento botão de envio do formulário whatsapp a url decodificada com a mensagem acima
             * 
            */
            document.querySelector('#whatsapp-form-submit').setAttribute('target', '_blank');
            document.querySelector('#whatsapp-form-submit').href = whatsappMensageLinkEncoded;
        }

    }



    if (document.querySelector('#whatsapp-form-submit')) {

        /**
        * 
        ** Executa a função whatsappSendForm() através do click no elemento com id: whatsapp-form-submit
        * A função é executada com um addEventListener
        * 
        */
        const whatsappSendButton = document.querySelector('#whatsapp-form-submit');
        whatsappSendButton.addEventListener('click', whatsappSendForm);

    }

    return false;

});