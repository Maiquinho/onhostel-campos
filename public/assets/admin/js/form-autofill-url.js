window.addEventListener('DOMContentLoaded', () => {

    // Elemento de entrada (input onde o nome do item é digitado)
    const inputItemName = document.querySelector('[data-autofill-url="input"]');
    // Elemento de saída (input onde a url é prenchida de acordo com o nome original tratado)
    const outputItemName = document.querySelector('[data-autofill-url="output"]');


    // Monitora a digitação no inputItemName
    inputItemName.addEventListener('keyup', (e) => {
        
        const inputItemNameValue = e.target.value;
        const { formattedUrl } = formatUrl(inputItemNameValue);

        function formatUrl(textToConvert){
            
            let formattedUrl = textToConvert
                .normalize("NFD").replace(/[\u0300-\u036f]/g, "") // substitui todas letras com caracteres especiais por letras
                .replace(/[^a-zA-Z0-9\s\-]+/g, '') // substitui todos caracteres especiais por letras, espaços em branco por hífen
                .toLowerCase();

            formattedUrl = formattedUrl
                .replace(/ /g, '-') // substitui todos espaços em branco por hífen

            formattedUrl = formattedUrl.toLowerCase();


            return {formattedUrl};
        }

        outputItemName.value = formattedUrl;
        
    })
});