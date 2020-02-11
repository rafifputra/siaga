   <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{asset('assets3/js/jquery-1.10.2.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{asset('assets3/js/bootstrap.js')}}"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="{{asset('assets3/js/custom.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="{{asset('assets3/js/jquery.maskMoney.js')}}"></script>
    
  
    <!-- Include JS file. -->
   
   <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@2.9.3/js/froala_editor.min.js'></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    
    

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    

    <script>

        $('#edit').on('show.bs.modal', function (event) {
          
          var button       = $(event.relatedTarget) 
          var date         = button.data('date') 
          var activity     = button.data('activity') 
          var method       = button.data('method') 
          var participants = button.data('participants') 
          var mom          = button.data('mom') 
          var id           = button.data('id') 
          var modal        = $(this)

          console.log(date+activity+method+participants+mom+id);

          modal.find('.modal-body #date').val(date);
          modal.find('.modal-body #activity').val(activity);
          modal.find('.modal-body #method').val(method);
          modal.find('.modal-body #participants').html(participants);
          modal.find('.modal-body #mom').html(mom);
          modal.find('.modal-body #froala-editor').val(mom);
          modal.find('.modal-body #fr-element fr-view').html(mom);
          modal.find('.modal-body #id').val(id);

        })

    </script>
