$(document).ready(function () {
  //ẨN HIỆN MENU

  $(".btn-open").click(function () {
    $(".list-mobile-menu").toggle().toggleClass('open');
    $(".modal-background").toggle().toggleClass('open');
    $("body").addClass("overflow");
  });
  $(".click-close").click(function () {
    $(".list-mobile-menu").toggle().toggleClass('open');
    $(".modal-background").toggle().toggleClass('open');
    $("body").removeClass("overflow");
  });
  $(".modal-background").click(function () {
    $(".list-mobile-menu").toggle().toggleClass('open');
    $(".modal-background").toggle().toggleClass('open');
    $("body").removeClass("overflow");
  });

  //ẨN HIỆN FORM
  $(document).on("click", ".btn-show-form", function (e) {
    if ($(".modal-form").css("display") == "none") {
      $("#modal-form").addClass("active");
      $("body").addClass("overflow");
    }
    if (
      $(".modal-bg-form").click(function () {
        $("#modal-form").removeClass("active");
        $("body").removeClass("overflow");
      })
    );
    if (
      $("button.txt-right").click(function () {
        $("#modal-form").removeClass("active");
        $("body").removeClass("overflow");
      })
    );
  });

  //ĐÓNG PHẦN HIỂN THỊ THÔNG BÁO

  $(document).on("click", ".btn-close-notify", function (e) {
        $("#modal-form").removeClass("active");
        $("body").removeClass("overflow");
        $('#success').hide();
        $('#error').hide();
        $('#box-main-form').show();
        window.location.reload();
  });

})

$(document).ready(function(){
  //Phần search thường
$('#search-text').keypress(function(event){
  var keycode = (event.keyCode ? event.keyCode : event.which);
  if (keycode == '13') {
    $text = $('#search-text').val();
    if($text.replace(/\s/g, "").length <= 0){

    }else{
      $text = $text.replace(/\s/g,'+');
      window.location.href = 'search.php?search_query=' + $text;
    }
  }
  });

  $(document).on("click", "#btn-search", function () {
    $text = $('#search-text').val();
    
    if($text.replace(/\s/g, "").length <= 0){

    }else{
      $text = $text.replace(/\s/g,'+');
      window.location.href = 'search.php?search_query=' + $text;
    }
  });

  //Kết thúc search thường

  $("#search-text").keyup(function () {
    $text = $(this).val();
    $result = $("#result-search");

    if ($text != "") {
      $.ajax({
        type: "POST",
        url: "modules/result.php",
        data: {
          text: $text,
        },
        success: function (data) {
          $result.html(data);
          $result.css("display", "block");
        },
      });
    } else {
      $result.css("display", "none");
    }
  });

//Search trên điện thoại

$('#search-txt').keypress(function(event){
  var keycode = (event.keyCode ? event.keyCode : event.which);
  if (keycode == '13') {
    $text_mb = $('#search-tet').val();
    if($text_mb.replace(/\s/g, "").length <= 0){

    }else{
      $text_mb = $text_mb.replace(/\s/g,'+');
      window.location.href = 'search.php?search_query=' + $text_mb;
    }
  }
  });

  $(document).on("click", "#btn-search-mb", function () {
    $text_mb = $('#search-txt').val();
    
    if($text_mb.replace(/\s/g, "").length <= 0){

    }else{
      $text_mb =$text_mb.replace(/\s/g,'+');
      window.location.href = 'search.php?search_query=' + $text_mb;
    }
  });

  //Kết thúc search thường

  $("#search-txt").keyup(function () {
    $text_mb = $(this).val();
    $result = $("#result-search-mb");
    if ($text_mb != "") {
      $.ajax({
        type: "POST",
        url: "modules/result.php",
        data: {
          text_mb:  $text_mb,
        },
        success: function (data) {
          $result.html(data);
          $result.css("display", "block");
        },
      });
    } else {
      $result.css("display", "none");
    }
  });

})