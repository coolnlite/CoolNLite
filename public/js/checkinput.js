$(document).ready(function () {
  //Check contact
  $.validator.addMethod("phoneVN", function (value, element) {
    return this.optional(element) || /((09|03|07|08|05)+([0-9]{8})\b)/g.test(value);
  }, "Vui lòng nhập đúng định dạng số điện thoại");

  $("#form-contact").validate({
    rules: {
      fullname: {
        required: true,
        maxlength: 30
      },
      tel: {
        required: true,
        number: true,
        nowhitespace: true,
        maxlength: 10,
        phoneVN: true,
      },
      messenger: {
        maxlength: 300
      },
    },
    messages: {
      fullname: {
        required: "Vui lòng nhập họ và tên",
        maxlength: "Vui lòng không nhập tối đa 30 ký tự"
      },
      tel: {
        required: "Vui lòng nhập số điện thoại",
        maxlength: "Vui lòng không nhập tối đa 10 ký tự",
        nowhitespace: "Vui lòng không nhập khoảng trắng",
        number: "Vui lòng nhập vào là số"
      },
      messenger: {
        maxlength: "Vui lòng không nhập quá 300 ký tự",
      },
    }
  });

  //Send data contact

  $(document).on("click", ".btn-contact", function (event) {

    var fullname = $('#fullname').val();
    var tel = $('#tel').val();
    var messenger = $('#messenger').val();
    var models = $('.models .select-btn span').text();
    var area = $('.area .select-btn span').text();
    models == "Vui lòng chọn dữ liệu" ? models = "" : models;
    area == "Vui lòng chọn dữ liệu" ? area = "" : area;

    if (fullname.length !== 0 && (tel.length === 10 && tel.length !== 0) && messenger.length <= 300) {
      event.preventDefault();
      $.ajax({
        method: "POST",
        url: "modules/contact.php",
        data: {
          btn_contact: true,
          fullname: fullname,
          tel: tel,
          messenger: messenger,
          models: models,
          area: area
        }
      }).done(function (msg) {
        msg = JSON.parse(msg);

        if (msg.status == 1) {
          $('#box-main-form').hide();
          $('#success').show();
        } else {
          $('#box-main-form').hide();
          $('#error').show();
        }

      });
    }

  })
  //Tìm theo từ khóa
  load_data(1);
  function load_data(page) {
    $this = $('#users-posts');
    $id_users = $this.data('users');
    $fullname = $this.data('name');
    $img = $this.data('img');
    $.ajax({
        type: "POST",
        url: 'modules/result.php',
        data: {
            page: page,
            id_keyword : $id_keyword,
            keyword : $keyword
        },
        success: function(data) {
            $('#load_news_tag').html(data);
        }
    })
}

$(document).on('click', '.page-link', function(){
  var page = $(this).data('page_number');
  load_data(page);
});

})