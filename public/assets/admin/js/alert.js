/**
 * Remove os banners de alerta do admin
 * 
*/

function removeAlert() {

    const alertBanners = Array.from(document.querySelectorAll('.alert-banner'));

    alertBanners.forEach((alertBanner) => {

        if (alertBanner) {

            const hiddenAlertBtn = Array.from(alertBanner.children)[1];

            hiddenAlertBtn.addEventListener('click', function () {
                this.parentElement.remove();
            })

        }

    });

}


/**
 * Aguarda o carregamento da DOM para executar as funções
 * 
*/

window.addEventListener('DOMContentLoaded', () => {
    removeAlert();
});