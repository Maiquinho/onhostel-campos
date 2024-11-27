const data = {
    phone: null,
    companyName: null
}

function whatsappForm({ phone, companyName } = data){
    const whatsappForms = Array.from(document.querySelectorAll('[data-whatsapp-form]'))

    if(whatsappForms){
        whatsappForms.map((whatsappForm) => {
            const whatsappFormFields = Array.from(whatsappForm).filter((item) => item.dataset.whatsappFormField)
            const whatsappFormTriggers = Array.from(whatsappForm).filter((item) => item.dataset.whatsappFormTrigger)
            const whatsappFormSubmitButton = whatsappFormTriggers.find((item) => item.dataset.whatsappFormTrigger === 'submit')


            function handleResetFormError(event){
                const currentElement = event.target
                // const errorLabel = event.target.nextSibling

                // errorLabel.remove()
                currentElement.style.border = ''
            }

            function handleErrorOnSentMessage(fields){
                fields.map((field) => {
                    const nextSiblingField = field.nextSibling

                    if(nextSiblingField && nextSiblingField.nodeName !== 'SMALL'){
                        const errorLabel = document.createElement('small')
                        errorLabel.innerText = `Preencha o campo corretamente!`;

                        field.parentNode.insertBefore(errorLabel, field.nextSibling)
                        field.style.border = '1px solid #E25858';
                    }
                })
            }

            function handleSendMessage(){
                const whatsappFormSubject = 
                    (whatsappFormFields.find((item) => item.dataset.whatsappFormField === 'subject')) ? 
                    whatsappFormFields.find((item) => item.dataset.whatsappFormField === 'subject').value : 'os serviços'
                const whatsappFormFieldsWithoutSubject = whatsappFormFields.filter((item) => item.dataset.whatsappFormField !== 'subject')
                const whatsappFormFieldsFormatted = whatsappFormFieldsWithoutSubject.map((item) => {

                    if (item.type === 'date') {

                        const originaDate = new Date(item.value)
                        const formattedDate = new Intl.DateTimeFormat('pt-BR').format(originaDate)

                        return `${item.dataset.whatsappFormFieldTitle}: ${formattedDate}`
                    }

                    return `${item.dataset.whatsappFormFieldTitle}: ${item.value}`

                }).join("\n")
                const whatsappFormdInvalidRequiredFields = Array.from(whatsappForm).filter((item) => item.value === '' && item.required)
                const whatsappFormBookingField = Array.from(whatsappForm).find((item) => item.checked === true)

                
                const whatsappToolNumber = (document.querySelector('.wc--float-ballon--user--content---phone')) ? document.querySelector('.wc--float-ballon--user--content---phone').innerText : null
                const whatsappToolCompany = (document.querySelector('.wc--float-ballon--user--content---name')) ? document.querySelector('.wc--float-ballon--user--content---name').innerText : null
                const whatsappCompanyName = (companyName) ? 
                ` da ${companyName}` : 
                ` da ${whatsappToolCompany}`
                
                const whatsappCompanyNumber = (phone) ? 
                phone.replace('+55 11', '5511').replace('-', '').replace(' ', '') : 
                whatsappToolNumber.replace('+55 11', '5511').replace('-', '').replace(' ', '')

                const defaultOpeningMessage = (whatsappFormBookingField) ? 
                `Olá, vi seu site e gostaria de fazer uma reserva no ${companyName}!` : 
                `Olá, cheguei aqui pelo site, na página: ${whatsappFormSubject}.`
                

                const whatsappMensageLink = `https://api.whatsapp.com/send?phone=${whatsappCompanyNumber}&text=${defaultOpeningMessage}\n\n${whatsappFormFieldsFormatted}`;
                const whatsappMensageLinkEncoded = encodeURI(whatsappMensageLink);

                if(whatsappFormdInvalidRequiredFields.length < 1){
                    window.open(whatsappMensageLinkEncoded, '_blank');
                }else{
                    handleErrorOnSentMessage(whatsappFormdInvalidRequiredFields)
                }
            }


            whatsappFormFields.map((whatsappFormField) => {
                whatsappFormField.addEventListener('focus', handleResetFormError)
            })

            whatsappFormSubmitButton.addEventListener('click', handleSendMessage)
        })
    }
}


/**
 * 
 * Aguarda todo conteúdo da DOM ser carregado para executar o código dentro do listener
 * 
*/

window.addEventListener('DOMContentLoaded', () => {
    const whatsappFormConfig = {
        // phone: '+55 11 00000-0000',
        companyName: 'ON Hostel'
    }

    whatsappForm(whatsappFormConfig);
    // whatsappForm();
})