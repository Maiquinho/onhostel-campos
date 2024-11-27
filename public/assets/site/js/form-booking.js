// const data = {
//     phone: null,
//     companyName: null
// }

function bookingForm() {
    const browser = navigator.userAgent
    const bookingForms = Array.from(document.querySelectorAll('[data-booking-form]'))

    // if (browser.includes('iPhone')){
    //     const bookingFormContainer = document.querySelector('[data-booking-form-container="contact-form"]')

    //     // bookingForms.map((bookingForm) => {
    //         bookingFormContainer.style.display = 'none'
    //     // })
    // }

    if (bookingForms) {
        bookingForms.map((bookingForm) => {
           
            const bookingFormTriggers = Array.from(bookingForm).filter((item) => item.dataset.bookingFormTrigger)
            const bookingFormSubmitButton = bookingFormTriggers.find((item) => item.dataset.bookingFormTrigger === 'submit')

            // function handleResetFormError(event) {
            //     const currentElement = event.target
            //     // const errorLabel = event.target.nextSibling

            //     // errorLabel.remove()
            //     currentElement.style.border = ''
            // }

            // function handleErrorOnSentMessage(fields) {
            //     fields.map((field) => {
            //         const nextSiblingField = field.nextSibling

            //         if (nextSiblingField && nextSiblingField.nodeName !== 'SMALL') {
            //             const errorLabel = document.createElement('small')
            //             errorLabel.innerText = `Preencha o campo corretamente!`;

            //             field.parentNode.insertBefore(errorLabel, field.nextSibling)
            //             field.style.border = '1px solid #E25858';
            //         }
            //     })
            // }

            function FormatDateString(date) {
                var day = date.split("/")[0];
                var month = date.split("/")[1];
                var year = date.split("/")[2];

                return year + '-' + ("0" + month).slice(-2) + '-' + ("0" + day).slice(-2);
                // Utilizo o .slice(-2) para garantir o formato com 2 digitos.s
            }

            async function handleSendMessage() {
                const bookingFormFields = Array.from(bookingForm).filter((item) => item.dataset.bookingFormField)
                

                // const bookingFormSubject =
                //     (bookingFormFields.find((item) => item.dataset.bookingFormField === 'subject')) ?
                //         bookingFormFields.find((item) => item.dataset.bookingFormField === 'subject').value : 'os serviços'
                const bookingFormAdultsField = bookingFormFields.find((item) => item.dataset.bookingFormField === 'adults').value
                const bookingFormChildsField = bookingFormFields.find((item) => item.dataset.bookingFormField === 'childs').value
                const bookingFormFieldsWithoutSubject = bookingFormFields.filter((item) => item.dataset.bookingFormField !== 'subject')
                const bookingFormFieldsFormatted = bookingFormFieldsWithoutSubject.filter(item => item.type === 'date').map((item) => {

                    // if (item.type === 'date') {

                        const originaDate = new Date(item.value + ' EDT')
                        const formattedDateFormat = new Intl.DateTimeFormat('pt-BR', { timeZone: 'America/Sao_Paulo', }).format(originaDate)

                        return FormatDateString(formattedDateFormat)
                    // }

                    // console.log(formattedDateFormat)

                }) 


                // alert('testeeeee')

                // const bookingFormdInvalidRequiredFields = Array.from(bookingForm).filter((item) => item.value === '' && item.required)
                // const bookingFormBookingField = Array.from(bookingForm).find((item) => item.value === 'booking' && item.checked === true)

               

                // const whatsappToolNumber = (document.querySelector('.wc--float-ballon--user--content---phone')) ? document.querySelector('.wc--float-ballon--user--content---phone').innerText : null
                // const whatsappToolCompany = (document.querySelector('.wc--float-ballon--user--content---name')) ? document.querySelector('.wc--float-ballon--user--content---name').innerText : null
                // const whatsappCompanyName = (companyName) ? 
                // ` da ${companyName}` : 
                // ` da ${whatsappToolCompany}`

                // const whatsappCompanyNumber = (phone) ? 
                // phone.replace('+55 11', '5511').replace('-', '').replace(' ', '') : 
                // whatsappToolNumber.replace('+55 11', '5511').replace('-', '').replace(' ', '')

                // const defaultOpeningMessage = (bookingFormBookingField) ? 
                // `Olá, vi seu site e gostaria de fazer uma reserva no ${companyName}!` : 
                // `Olá, cheguei aqui pelo site, na página: ${bookingFormSubject}.`


                const whatsappMensageLink = `https://frame.minihotelpms.com/reservas/getAvailability?from_to=${bookingFormFieldsFormatted[0]}+-+${bookingFormFieldsFormatted[1]}&from=&to=&nAdults=${bookingFormAdultsField}&nChilds=${bookingFormChildsField}&nBabies=0&rateCode=STD&language=PT&roomId=&bloggerId=&hotelToken=c980db6a08146dcd15f313231d00935f`;
                // console.log(whatsappMensageLink)
                const whatsappMensageLinkEncoded = encodeURI(whatsappMensageLink);

                // if(bookingFormdInvalidRequiredFields.length < 1){

                    // if(browser.includes('iPhone')){
                        // window.location.replace(whatsappMensageLinkEncoded);

                        // console.log(browser)
                    // } else {
                        window.open(whatsappMensageLinkEncoded, '_blank');
                    // }
                    

                    

                    
                // }else{
                //     handleErrorOnSentMessage(bookingFormdInvalidRequiredFields)
                // }
            }


            // bookingFormFields.map((bookingFormField) => {
            //     bookingFormField.addEventListener('focus', handleResetFormError)
            // })

            bookingFormSubmitButton.addEventListener('click', handleSendMessage)
            // handleSendMessage()
        })
    }
}


/**
 * 
 * Aguarda todo conteúdo da DOM ser carregado para executar o código dentro do listener
 * 
*/

window.addEventListener('DOMContentLoaded', () => {
    const bookingFormConfig = {
        // phone: '+55 11 00000-0000',
        companyName: 'ON Hostel'
    }

    // bookingForm(bookingFormConfig);
    bookingForm();
})