$(document).ready(function () {

    /*
     * Generate canonical name for work title
     */
    $('#brands-brand_name').keyup(function () {
        var name = slug($(this).val());
        $('#brands-canonical_name').val(name);
    });
    $('#products-product_name').keyup(function () {
        var name = slug($(this).val());
        $('#products-canonical_name').val(name);
        $('#products-meta_title').val($(this).val());
        $('#products-meta_keyword').val($(this).val());
        $('#products-meta_description').val($(this).val());
    });
    $('#productcategory-category').keyup(function () {
        var name = slug($(this).val());
        $('#productcategory-canonical_name').val(name);
    });
    $('#blogs-title').keyup(function () {
        var name = slug($(this).val());
        $('#blogs-canonical_name').val(name);
        $('#blogs-meta_description').val($(this).val());
        $('#blogs-meta_keyword').val($(this).val());
        $('#blogs-meta_title').val($(this).val());
    });
    $('.gal-img-remove').click(function (e) {
        e.preventDefault();
        var div_id = $(this).attr('data-id');
        var id = $(this).attr('id');
        var file = $(this).attr('data-val');
        if (id != '' && file != '') {
            $.ajax({
                type: 'POST',
                cache: false,
                data: {id: id, file: file},
                url: homeUrl + "cms/products/remove-gallery",
                success: function (data) {
                    $("#gallerybox-" + div_id).remove();
                }
            });
        }
    });

});
var slug = function (str) {
    var $slug = '';
    var trimmed = $.trim(str);
    $slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
            replace(/-+/g, '-').
            replace(/^-|-$/g, '');
    return $slug.toLowerCase();
}


