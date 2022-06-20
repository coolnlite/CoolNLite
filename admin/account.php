<?php
    ob_start();
    session_start();
    require_once('./modules/permision.php');
    require_once('../config/config.php');
    require_once('../config/dbhelper.php'); 

    if(isset($_GET['u']) && isset($_GET['token']) 
    && !empty($_GET['u']) && !empty($_GET['token'])){
        $id = $_GET['u'] = !"" ? mysqli_real_escape_string($conn, $_GET['u']) : '';
        $tk = $_GET['token'] = !"" ? mysqli_real_escape_string($conn, $_GET['token']) : '';
      }else{
        require_once('./error_404.php');
        exit();
      }

      $sql = "SELECT `id`,`token` FROM `users` WHERE `id` = '$id' AND `token` = '$tk'";
      $result = mysqli_query($conn, $sql);
      $rowcount = mysqli_num_rows($result);

      if ($rowcount == 0) { // Nếu không có mẫu tin nào thì chuyển trang không tìm thấy
        require_once('./error_404.php');
        exit();
      }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TÀI KHOẢN</title>
    <link rel="icon" sizes="32x32" href="../shared/img/icon.png">
    <!-- fontawesome -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet" />
    <!-- fontawesome -->
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.css"/>

    <link rel="stylesheet" href="./css/style.css">
    <style>
        input.error,select.error {
            border: 1px solid red;
        }
        label.error{
            color: red;
            font-size: 15px;
            display: block;
        }
    </style>
</head>

<body>
    <div class="container-admin">
    <!-- Sidebar -->
    <?php
        require_once('./pages/sidebar.php');
    ?>

       <!-- Main -->
        <div class="main">
           <?php
            require_once('./pages/topbar.php');
            require_once('./pages/main_account.php');
           ?>
        </div>
    </div>

   <!-- Script -->
    <script src="./js/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <!-- jquery validation -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/additional-methods.min.js"></script>
    <!-- jquery validation -->
    <script>
        $(document).ready(function() {

            $('#example').DataTable({
            "fnCreatedRow": function(nRow, aData, iDataIndex) {
                $(nRow).attr('id', aData[0]);
            },
            language: {
                lengthMenu: 'Hiện _MENU_ mẫu tin trên trang',
                zeroRecords: 'Không tìm thấy mẫu tin nào',
                info: 'Hiện trang _PAGE_ trên _PAGES_ trang',
                infoEmpty: 'Không có mẫu tin nào',
                infoFiltered:'',
                search : "Tìm kiếm:",
                paginate: {
                    next:       ">>",
                    previous:   "<<"
                    },
            },
            'serverSide': 'true',
            'processing': 'true',
            'paging': 'true',
            'order': [],
            'ajax': {
                'url': '<?php echo ''.$DOMAIN.'modules/fetch_data.php'?>',
                'data': {
                account : true,
                user_id : <?php print $user_id?>,
                permission : <?php print $permission?>
                },
                
                'type': 'post',
            },
            "aoColumnDefs": [{
                "bSortable": false,
                "aTargets": [7]
                },

            ]
            });

            //Thay đổi ảnh đại diện
        $("#fchangeImg").on('submit', function(e){
                e.preventDefault();
                    $.ajax({
                    type: 'POST',
                    url: '<?php print $DOMAIN.'modules/edit_data.php'?>',
                    data: new FormData(this),
                    dataType : 'json',
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function(response){ 
                        if(response.status == 1){
                            alert(response.message);
                            window.location.reload();
                        }else{
                            alert(response.message);
                        }
                    }
                })
            });  

            // cập nhật thông tin
            $("#feditUsers").validate({
                rules: {
                user_name: {
                    required: true,
                    maxlength : 30,
                    nowhitespace : true,
                    remote: "<?php print $DOMAIN.'modules/check_input.php'?>",
                },
                email: {
                    required: true,
                    email: true,
                    maxlength : 50,
                    remote: "<?php print $DOMAIN.'modules/check_input.php'?>",
                },
                full_name: {
                    required: true,
                    maxlength : 30
                },
                },
                messages: {

                user_name: {
                    required: "Vui lòng nhập tên tài khoản",
                    maxlength : "Vui lòng nhập không quá 30 ký tự",
                    nowhitespace : "Vui lòng không nhập khoảng trắng",
                    remote: $.validator.format("{0} đã tồn tại"),
                },
                email: {
                    required: "Vui lòng nhập email",
                    email: "Vui lòng nhập đúng định dạnh email",
                    maxlength : "Vui lòng nhập không quá 50 ký tự",
                    remote: $.validator.format("{0} đã được đăng ký"),
                },
                
                full_name: {
                    required: "Vui lòng nhập tên người dùng",
                    maxlength : "Vui lòng nhập không quá 30 ký tự"
                },

                },
                submitHandler: function (form) {
                $.ajax({
                    type: "POST",
                    url: "<?php print $DOMAIN.'modules/edit_data.php'?>",
                    data: new FormData(form),
                    dataType : 'json',
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function (response) {
                        if(response.status == 1){
                            alert(response.message);
                            window.location.reload();
                        }else{
                            alert(response.message);
                        }
                    },
                });
                },
            });

            $.validator.addMethod("pwcheck", function(value) {
                return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // consists of only these
                    && /[a-z]/.test(value) // has a lowercase letter
                    && /\d/.test(value) // has a digit
            });

            // kiểm tra form tạo tài khoản
            $("#fAddUsers").validate({
                rules: {
                user_name: {
                    required: true,
                    maxlength : 30,
                    nowhitespace : true,
                    remote: "<?php print $DOMAIN.'modules/check_input.php'?>",
                },
                email: {
                    required: true,
                    email: true,
                    maxlength : 50,
                    nowhitespace : true,
                    remote: "<?php print $DOMAIN.'modules/check_input.php'?>",
                },
                pass_word: {
                    required: true,
                    minlength: 8,
                    pwcheck : true,
                },
                pass_word_confirm: {
                    required: true,
                    equalTo: "#pass_word",
                },
                position: {
                    required: true,
                },
                full_name: {
                    required: true,
                    maxlength : 30
                },
                image: {
                    required: true,
                },
                status : {
                    required: true,
                }
                },
                messages: {

                user_name: {
                    required: "Vui lòng nhập tên tài khoản",
                    maxlength : "Vui lòng nhập không quá 30 ký tự",
                    nowhitespace : "Vui lòng không nhập khoảng trắng",
                    remote: $.validator.format("{0} đã tồn tại"),
                },
                email: {
                    required: "Vui lòng nhập email",
                    email: "Vui lòng nhập đúng định dạnh email",
                    maxlength : "Vui lòng nhập không quá 50 ký tự",
                    nowhitespace : "Vui lòng không nhập khoảng trắng",
                    remote: $.validator.format("{0} đã được đăng ký"),
                },
                pass_word: {
                    required: "Vui lòng nhập mật khẩu",
                    minlength: "Vui lòng nhập ít nhất 8 ký tự",
                    pwcheck : "Mật khẩu phải có ít nhất một thường, ít nhất 1 chữ hoa",
                },
                pass_word_confirm: {
                    required: "Vui lòng nhập lại mật khẩu",
                    equalTo: "Mật khẩu không đúng",
                },
                position: {
                    required: "Vui lòng nhập chọn quyền người dùng",
                },
                full_name: {
                    required: "Vui lòng nhập tên người dùng",
                    maxlength : "Vui lòng nhập không quá 30 ký tự"
                },
                image: {
                    required: "Vui lòng nhập ảnh đại diện",
                },
                status : {
                    required: "Vui lòng chọn trạng trái",
                }

                },
                submitHandler: function (form) {
                $.ajax({
                    type: "POST",
                    url: "<?php print $DOMAIN.'modules/add_data.php'?>",
                    data: new FormData(form),
                    dataType : 'json',
                    contentType: false,
                    cache: false,
                    processData:false,
                    success: function (response) {
                        if(response.status == 1){
                            alert(response.message);
                            window.location.reload();
                        }else{
                            alert(response.message);
                        }
                    },
                });
                },
            });

            // Xóa mẫu tin khách hàng
            $(document).on('click', '.deleteBtn', function(event) {
            var table = $('#example').DataTable();
            event.preventDefault();
            var id_users = $(this).data('id');
                if (confirm("Bạn chắc chắc có muốn xóa tài khoản này")) {
                $.ajax({
                    url: '<?php echo ''.$DOMAIN.'modules/delete_data.php'?>',
                    data: {
                    delete_users : true,
                    id_users: id_users
                    },
                    type: "post",
                    success: function(data) {
                    var json = JSON.parse(data);
                    status = json.status;
                    if (status == 'success') {
                        $("#" + id_users).closest('tr').remove();
                    } else {
                        alert('Có lỗi gì đó');
                        return;
                    }
                    }
                });
                } else {
                return null;
                }
            })

            // Xem đại lý
            $(document).on('click', '.editBtn', function(event) {
                var id_users = $(this).data('id');
                    $.ajax({
                        url: '<?php echo ''.$DOMAIN.'modules/view_data.php'?>',
                        data: {
                        view_users : true,
                        id_users : id_users
                        },
                        type: "post",
                        success: function(data) {
                            $('#fchangeUsers').html(data);
                        }
                    });
                })

                //Chỉnh sửa đại lý
                $("#fchangeUsers").on('submit', function(e){
                        e.preventDefault();
                            $.ajax({
                            type: 'POST',
                            url: '<?php print $DOMAIN.'modules/edit_data.php'?>',
                            data: new FormData(this),
                            dataType : 'json',
                            contentType: false,
                            cache: false,
                            processData:false,
                            success: function(response){ 
                                if(response.status == 1){
                                    alert(response.message);
                                    window.location.reload();
                                }else{
                                    alert(response.message);
                                }
                                
                            }
                        })
                });

        });

    // Đổi mật khẩu
    $("#fchangePass").validate({
                    rules: {
                        pass_old: {
                            required: true,
                            maxlength : 20,
                            nowhitespace : true,
                        },
                        pass_news: {
                            required: true,
                            maxlength : 20,
                            nowhitespace : true,
                            pwcheck : true,
                        },
                        confirm_pass_news: {
                            required: true,
                            maxlength : 20,
                            equalTo: "#pass_news",
                        },
                    },
                    messages: {

                        pass_old: {
                            required: "Vui lòng nhập mật khẩu cũ",
                            maxlength : "Vui lòng nhập không quá 20 ký tự",
                            nowhitespace : "Vui lòng không nhập khoảng trắng",
                        },
                        pass_news: {
                            required: "Vui lòng nhập mật khẩu mới",
                            maxlength : "Vui lòng nhập không quá 20 ký tự",
                            nowhitespace : "Vui lòng không nhập khoảng trắng",
                            pwcheck : "Mật khẩu phải có ít nhất một thường, ít nhất 1 chữ hoa"
                        },
                        
                        confirm_pass_news: {
                            required: "Vui lòng nhập lại mật khẩu mới",
                            maxlength : "Vui lòng nhập không quá 20 ký tự",
                            equalTo : "Mật khẩu không khớp"
                        },

                    },
                    submitHandler: function (form) {
                    $.ajax({
                        type: "POST",
                        url: "<?php print $DOMAIN.'modules/password_reset_code.php'?>",
                        data: $(form).serializeArray(),
                        dataType : 'json',
                        success: function (response) {
                            if(response.status == 0){
                                alert(response.message);
                                window.location.reload();
                            }else{
                                alert(response.message);
                            }
                        },
                    });
                    },
                });

    </script>

</body>

</html>