let customerSelect2 = {
  init: function () {
      $('#customer, #customer_validate').select2({
          placeholder: 'Select a customer'
      });
  }
};

jQuery(document).ready(function () {
  customerSelect2.init();
});
