<?php
    ob_start();
    session_start();
    require_once('./modules/permision.php');
    require_once('../config/config.php');
    require_once('../config/dbhelper.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đại lý</title>
    <link rel="icon" sizes="32x32" href="../shared/img/icon.png">
    <!-- fontawesome -->
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.1/css/pro.min.css" rel="stylesheet" />
    <!-- fontawesome -->
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.css"/>

    <link rel="stylesheet" href="./css/style.css">
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
            if($permission != 2){
              require_once('./pages/main_premision.php');
            }else{
              require_once('./pages/main_agency.php');
            }
           ?>
        </div>
    </div>

   <!-- Script -->
    <script src="./js/main.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.6.0/jq-3.6.0/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/datatables.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>


    <script type="text/javascript">
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
            agency : true
          },
            
          'type': 'post',
        },
        "aoColumnDefs": [{
            "bSortable": false,
            "aTargets": [6]
          },

        ]
      });

      //Thêm đại lý
      $("#fAddAgency").on('submit', function(e){
          e.preventDefault();
              $.ajax({
              type: 'POST',
              url: '<?php print $DOMAIN.'modules/add_data.php'?>',
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

      // Xóa mẫu tin đại lý
      $(document).on('click', '.deleteBtn', function(event) {
      var table = $('#example').DataTable();
      event.preventDefault();
      var id_agency = $(this).data('id');
        if (confirm("Bạn chắc chắc có muốn xóa mẫu tin này")) {
          $.ajax({
            url: '<?php echo ''.$DOMAIN.'modules/delete_data.php'?>',
            data: {
              delete_agency : true,
              id_agency: id_agency
            },
            type: "post",
            success: function(data) {
              var json = JSON.parse(data);
              status = json.status;
              if (status == 'success') {
                $("#" + id_agency).closest('tr').remove();
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
        var id_agency = $(this).data('id');
            $.ajax({
                url: '<?php echo ''.$DOMAIN.'modules/view_data.php'?>',
                data: {
                view_agency : true,
                id_agency: id_agency
                },
                type: "post",
                success: function(data) {
                    var json = JSON.parse(data);
                    $("#id-agency").val(json.id);
                    $("#img-old").val(json.img);
                    $("#card-img-top").attr('src','..'+json.img);
                    $("#edit-name").val(json.name);
                    $("#edit-address").val(json.address);
                    $("#edit-phone").val(json.phone);
                }
            });
        })

        //Chỉnh sửa đại lý
        $("#fEditAgency").on('submit', function(e){
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
    

  </script>
 
</body>

</html>