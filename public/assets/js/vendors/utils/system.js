$(document).ready(function () {
    $('form').on('submit', function (e) {
        if ($(this).attr('show-loading') == 1) showLoading();
        $(this).off('submit').submit();
    });

    // upload image
    $(".input-image").change(function () {
        previewFile(this);
    });

    // clear preview file
    clearPreviewFile();
});
