let productSelect2 = {
    init: function () {
        $('#id_category, #category_validate').select2({
            placeholder: 'Select a category'
        });
    }
  };
  
  jQuery(document).ready(function () {
    productSelect2.init();
  });
  