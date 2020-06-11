<!-- MODAL CREATE -->
<div class="modal fade" id="myModal"  tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
  <form class="formsiswa" action="/datasiswa" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">facebook</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">

      </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
 $.ajaxSetup({
  headers: {
   'X-CSRF-TOKEN': $('input[name="_token"]').val()
  }
 });

$(document).ready(function(){
 $('.formsiswa').submit(function(event){
      event.preventDefault();
      var data = $('.formsiswa').serializeArray();
        $.ajax({
        url : "{{url('/do_create')}}",
        method : 'POST',
        data : data,
        success : function(response) {
              if (response.status == 'error') {
              var html_error = '';
              html_error += '<ul>';
              $.each(response.message, function (error_key, error_message){
                html_error += error_key;
                $.each(error_message, function (message){
                  html_error += '<li>'+ this +'</li>';
                });
              });
              html_error += '</ul>';
              $('.alert-danger').html(html_error);
              $('.alert-danger').show();
              } else {
                  window.location.replace('/datasiswa/public/');
              }

        }
      });
  });
});
</script>
