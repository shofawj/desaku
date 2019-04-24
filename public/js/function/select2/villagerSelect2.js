let productSelect2 = {
    init: function () {
        $('#id_villager, #villager_validate').select2({
            placeholder: 'Select a villager'
        });
    }
  };
  
  jQuery(document).ready(function () {
    productSelect2.init();
  });
  