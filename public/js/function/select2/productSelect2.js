let productSelect2 = {
  init: function () {
      $('#product, #product_validate').select2({
          placeholder: 'Select a product'
      });
  }
};

jQuery(document).ready(function () {
  productSelect2.init();
});
