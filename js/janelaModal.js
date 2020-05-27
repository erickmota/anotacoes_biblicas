$(document).ready(function(){
    
    $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var nome = button.data('nome')
  var email = button.data("email")// Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('Enviar e-mail para ' + nome)
  modal.find('.modal-body .email').val(email)
})
    
});

