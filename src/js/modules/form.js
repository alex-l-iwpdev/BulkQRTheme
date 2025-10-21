jQuery(document).ready(function($) {
    let selectElement = $('select:not(.category)'),
        selectCategory = $('select.category');
    if(selectElement.length){
        selectElement.selectric();
    }
    if(selectCategory.length){
        selectCategory.selectric({
            optionsItemBuilder: function(itemData) {
                const iconClass = itemData.element.data('icon');
                return itemData.value.length ? '<i class="bi bi-' + iconClass + '"></i>' + itemData.text : itemData.text;
            }
        });
    }
});