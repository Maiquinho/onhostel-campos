// Só executa o código quando a DOM for completamente carregada

window.addEventListener('DOMContentLoaded', () => {


    // Máscara para emails

    const inputEmailFields = Array.from(document.querySelectorAll('input[type="email"]'));

    inputEmailFields.map((inputEmailField) => {

        const inputEmailFieldmaskOptions = {
            mask: /^\S*@?\S*$/,
        };
        IMask(inputEmailField, inputEmailFieldmaskOptions);

    });



    // Máscara para nomes

    const inputNameFields = Array.from(document.querySelectorAll('input[data-form-field="name"]'));

    inputNameFields.map((inputNameField) => {

        const inputNameFieldmaskOptions = {
            mask: /[a-zA-Z\u00C0-\u00FF ]+/,
        };
        IMask(inputNameField, inputNameFieldmaskOptions);

    });


    // Máscara para nomes

    const inputCpfOrCnpjFields = Array.from(document.querySelectorAll('input[data-form-field="cpf_cnpj"]'));

    inputCpfOrCnpjFields.map((inputCpfOrCnpjField) => {

        const inputCpfOrCnpjFieldmaskOptions = {
            mask: [
                {
                    mask: '000.000.000-00'
                },
                {
                    mask: '00.000.000/0000-00'
                }
            ]
        };
        IMask(inputCpfOrCnpjField, inputCpfOrCnpjFieldmaskOptions);

    });


    // Só executa quando todo HTML for carregado

    window.addEventListener('load', () => {

        // Máscara para números

        const inputNumberFields = Array.from(document.querySelectorAll('input[data-form-field="number"]'));

        inputNumberFields.map((inputNumberField) => {

            const inputNumberFieldmaskOptions = {
                mask: /^[0-9]+$/,
            };
            IMask(inputNumberField, inputNumberFieldmaskOptions);

        });

    });


    // Máscara para telefones celulares

    const inputMobileFields = Array.from(document.querySelectorAll('input[data-form-field="mobile"]'));

    inputMobileFields.map((inputMobileField) => {

        const inputMobileFieldmaskOptions = {
            mask: '(00) 90000-0000',
        };
        IMask(inputMobileField, inputMobileFieldmaskOptions);

    });



    // Máscara para telefones fixos

    const inputPhoneFields = Array.from(document.querySelectorAll('input[data-form-field="phone"]'));

    inputPhoneFields.map((inputPhoneField) => {

        const inputPhoneFieldmaskOptions = {
            mask: '(00) 0000-0000',
        };
        IMask(inputPhoneField, inputPhoneFieldmaskOptions);

    });

})