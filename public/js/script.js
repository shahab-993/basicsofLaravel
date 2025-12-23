
function toggleAll() {

    $('div[id*="UserDetails-"]').toggle();

    if ($("#lblShowHide").text() == "Hide Address Details") {
        $("#lblShowHide").text("Show Address Details")
    } else {
        $("#lblShowHide").text("Hide Address Details")
    }
}

$(document).ready(function () {

    $('#category-dropdown').on('change', changeCategory);
});

function changeCategory(category) {
     var categoryName = $(category).val();

      $.ajax({
         url: '/workwithcomponents/product_list',
          method: 'get',
            data: {
                category: categoryName
            },
             success: function(response) {
                $('.product-list').html(response.productsHtml);
            }

});

} 
