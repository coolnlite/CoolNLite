$(document).ready(function () {
    var load =
        '<div class="loader loader--style3">\
                      <svg  version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\
                      width="40px" height="40px" viewBox="0 0 50 50" style="enable-background:new 0 0 50 50;" xml:space="preserve">\
                          <path fill="#437CBF" d="M43.935,25.145c0-10.318-8.364-18.683-18.683-18.683c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615c8.072,0,14.615,6.543,14.615,14.615H43.935z">\
                              <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25" to="360 25 25" dur="0.6s" repeatCount="indefinite"/>\
                          </path>\
                      </svg>\
                  </div>';

    $(document).on("click", ".btn-news", function () {
        var row = Number($("#load_news .row").data("row"));
        var allcount = Number($("#load_news .allcount").data("allcount"));
        row = row + 5;
        if (row <= allcount) {
            $("#load_news .row").data("row", row);
            $.ajax({
                type: "POST",
                url: "./modules/load_more.php",
                data: {
                    row: row,
                    news: true,
                },
                beforeSend: function () {
                    $(".btn-news").remove();
                    $("#load_news").append(load);
                    setTimeout(function () {
                        $("#load_news .loader").remove();
                    }, 1000);
                },
                success: function (response) {
                    setTimeout(function () {
                        $("#load_news .news:last")
                            .after(response)
                            .show()
                            .fadeIn("slow");
                        var rowno = row + 5;
                        if (rowno > allcount) {
                            $(".btn-news").text('Ẩn Đi');
                        } else {
                            $(".btn-news").text('Xem Thêm');
                        }
                    }, 1000);
                },
            });
        } else {
            $(".btn-news").hide();
            $("#load_news").append(load);
            setTimeout(function () {
                $("#load_news .loader").remove();
            }, 500);
            setTimeout(function () {
                $("#load_news .news:nth-child(5)")
                    .nextAll("#load_news .news")
                    .remove()
                    .fadeIn("slow");
                $("#load_news .row").data("row", "0");
                $(".btn-news").show().text('Xem Thêm');
                $scrollTo = $("#load_news .news:last-of-type");
                if ($scrollTo.length) {
                    $("html, body").animate({
                        scrollTop: $scrollTo.offset().top,
                    });
                }
            }, 500);
        }
    });
})