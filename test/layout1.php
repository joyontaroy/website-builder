    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="content_type_display"></h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            
        </div>
    </div>
    <!-- Modal -->

<!-- Modal -->
<div class="modal" id="myModal"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" id="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Text editor</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <textarea class="form-control" onkeyup="update_template_text()" id="text_editor"></textarea>
        <br>
        <input type="color" id="text_color_editor" name="favcolor" value="#ff0000" oninput="update_template_text_color(this.value)">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
let layout1 = 
    '<div class="p-5 mb-4 bg-body-tertiary rounded-3"  onclick="show_options()">\
      <div class="container-fluid py-5 hoverArea">\
        <h1 class="display-5 fw-bold">Custom jumbotron</h1>\
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>\
        <button class="btn btn-primary btn-lg" type="button">Example button</button>\
        <button class="btn btn-info btn-sm inner" type="button">+ content below</button>\
      </div>\
    </div>'
    
$(document).ready(function() {

// Declare the offcanvas
offcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'))

});

function show_options() {
    offcanvas.show()
    console.log('offcanvas')
}


</script>

<style>
/* Custom CSS to clear Bootstrap modal background */
.modal-backdrop {
    background-color: transparent !important;
}
</style>