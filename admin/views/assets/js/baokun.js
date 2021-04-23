$(".img-phone-hover").hover(
    function () {
        $(this).find(".img-phone").removeClass('d-none');
    }, function () {
        $(this).find(".img-phone").addClass('d-none');

    }
);
$('.dropify').dropify({
    messages: {
        'default': 'Kéo và thả tệp vào đây hoặc nhấp vào',
        'replace': 'Kéo và thả hoặc nhấp để thay thế',
        'remove': 'Remove',
        'error': 'Rất tiếc, đã thêm lỗi.'
    },
    error: {
        'fileSize': 'Kích thước tệp quá lớn (Tối đa 1M).'
    }
});
