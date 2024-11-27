function handleDisabledFields(){
    const disableTriggers = Array.from(document.querySelectorAll('input[data-target-element-disabled]'));
    const ableTriggers = Array.from(document.querySelectorAll('input[data-target-element-abled]'));
    const toggleTargets = Array.from(document.querySelectorAll('[data-element-disabled]'));

    disableTriggers.map((disableTrigger, i) => {
        const disableTriggerContent = disableTrigger.dataset.targetElementDisabled;
        const disableTargetCurrent = toggleTargets[i];
        const disableTargetCurrentContent = toggleTargets[i].dataset.elementDisabled;
        const disabledField = disableTargetCurrent.children[1].children[0];
        const ableTrigger = ableTriggers[i];

    
        disableTrigger.addEventListener('change', () => {
            if(disableTriggerContent == disableTargetCurrentContent){
                disableTargetCurrent.style.cssText = `
                    opacity: 0;
                    visibility: hidden;
                    height: 0;
                    margin-bottom: 0!important;
                    transition: all .2s ease;
                `;
                disabledField.setAttribute('disabled', '');
            };
        });
        ableTrigger.addEventListener('change', () => {
            if(disableTriggerContent == disableTargetCurrentContent){
                disableTargetCurrent.style.cssText = `
                    opacity: 1;
                    visibility: visible;
                    height: auto;
                    margin-bottom: inherit;
                    transition: all .2s ease;
                `;
                disabledField.removeAttribute('disabled');
            }
        });
    });
};

window.addEventListener('DOMContentLoaded', () => {
    handleDisabledFields();
});