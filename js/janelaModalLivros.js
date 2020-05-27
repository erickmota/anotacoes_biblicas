$(document).ready(function(){
    
    $('#modalLivro').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var livro = button.data("livro")
  var capitulo = button.data("capitulo")
  var verso = button.data("verso")
  var versao = button.data("versao")
  var id = button.data("id")
  var texto = button.data("texto")// Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-body .texto').val(texto)
  modal.find('.modal-body .livro').val(livro)
  modal.find('.modal-body .capitulo').val(capitulo)
  modal.find('.modal-body .verso').val(verso)
  modal.find('.modal-body .versao').val(versao)
  modal.find('.modal-body .idPassagens').val(id)
  modal.find('.modal-title').text('Editar ' + livro + ' ' + capitulo + ':' + verso + ' ' + versao)
})
    
});

