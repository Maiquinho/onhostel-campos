/**
 * 
 * Função responável por reajustar as dimensões das imagens de thumb da galeria do produto final
 * 
*/

function resizeThumbs(){

    /**
     * 
     * Monta um array contendo todas as imagens de thumb galeria
     * 
    */

    const swiperThumbs = Array.from(document.querySelectorAll('.details-gallery-thumbs .swiper-wrapper .swiper-slide'));

    /**
     * 
     * Seta o atributo style dos elementos swiperThumb como vazio 
     * 
    */
   
    swiperThumbs.map(swiperThumb => swiperThumb.setAttribute('style', ''))
}


/**
 * 
 * Executa a função resizeThumbs assim que o DOM é carregado
 * 
*/

window.addEventListener('DOMContentLoaded', () => {
    resizeThumbs();
})