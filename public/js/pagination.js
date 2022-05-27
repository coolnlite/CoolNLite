$(document).ready(function () {
    //Tìm theo từ khóa
    load_data(1);
    function load_data(page) {
        $this = $('#load_news_tag');
        $id_keyword = $this.data('id-keyword');
        $keyword = $this.data('keyword');
        $.ajax({
            type: "POST",
            url: 'modules/result.php',
            data: {
                page: page,
                id_keyword: $id_keyword,
                keyword: $keyword
            },
            success: function (data) {
                $('#load_news_tag').html(data);
            }
        })
    }

    $(document).on('click', '.page-link', function () {
        var page = $(this).data('page_number');
        load_data(page);
    });
})