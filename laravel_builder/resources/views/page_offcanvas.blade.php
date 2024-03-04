<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" aria-controls="offcanvasScrolling">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Manage content</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div id="offcanvas_content" class="offcanvas-body">

    </div>
</div>

<script type="text/javascript">

$(document).ready(function() {

  // Declare the offcanvas
  offcanvas = new bootstrap.Offcanvas(document.getElementById('offcanvasRight'), {backdrop:false})

});

function show_offcanvas(url , param=''){
    // console.log(param)
    // Reset the offcanvas
    $("#offcanvas_content").html( "" );

    // Show offcanvas
    offcanvas.show()

    // Get the page from server
    $.get( url , function( data ) {

        // Show served page inside offcanvas
        $( "#offcanvas_content" ).html( data );
        // alert( "Load was performed." );
    })
    .fail(function() {
        alert( "Please login again" );
    });
}
</script>