$(document).ready(function () {
    $('form').on('submit', function (e) {
        if ($(this).attr('show-loading') == 1) {
            showLoading();
        }

        $(this).off('submit').submit();
    });
});

// $('body').click(function (event) {
//     if ($(event.target).hasClass('formModal') && !$(event.target).hasClass('optionButton') && $(".formModal").css('display') === 'block') {
//         $(".formModal").hide();
//     }
// });
//
// let BackendController = {
//     deleteConfirm: function (url) {
//         $('#delModal form#formDelete').attr('action', url);
//     }
// }
