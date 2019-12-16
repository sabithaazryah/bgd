$(document).ready(function () {

    $('#panoramavisualization-title').keyup(function () {
        var name = slug($(this).val());
        $('#panoramavisualization-canonical_name').val(name);
        $('#panoramavisualization-meta_title').val($(this).val());
        $('#panoramavisualization-meta_keyword').val($(this).val());
        $('#panoramavisualization-meta_description').val($(this).val());
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
                url: homeUrl + "cms/panorama-visualization/remove-gallery",
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


