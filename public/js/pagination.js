$(document).ready(function () {
      //Load search 
      load_search(1);
        function load_search(page) {
          $this = $('#load_search');
          $search = $this.data('search');
          $.ajax({
              type: "POST",
              url: 'modules/result.php',
              data: {
                  page: page,
                  search : $search
              },
              success: function(data) {
                  $this.html(data);
              }
          })
      }
      
      $(document).on('click', '.page-link', function(){
        var page = $(this).data('page_number');
        load_search(page);
      });
})