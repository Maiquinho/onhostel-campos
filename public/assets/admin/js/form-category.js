window.addEventListener('DOMContentLoaded', () => {
    const productCategorySelect = document.querySelector('#product-category');
    const productSubcategorySelect = document.querySelector('#product-subcategory');

    productCategorySelect.addEventListener('change', (e) => {
        const productCategoryOption = Array.from(e.target).find(item => item.selected == true);
        const productSubcategoryOptions = Array.from(productSubcategorySelect.children).filter(item => item.disabled != true);
        const productSubcategoriesList = Array.from(productSubcategoryOptions).filter(item => item.dataset.categoryUrl == productCategoryOption.dataset.categoryUrl);

        productSubcategorySelect.removeAttribute('disabled');


        productSubcategoryOptions.map((productSubcategoryOption) => {
            productSubcategoryOption.style.display = 'inherit';

            if(productSubcategoryOption.dataset.categoryUrl != productCategoryOption.dataset.categoryUrl){
                productSubcategoryOption.style.display = 'none';
            }
            if(productSubcategoriesList.length == 0){
                productSubcategorySelect.setAttribute('disabled', '');
            }
        });
    });
});