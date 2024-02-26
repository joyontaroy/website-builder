<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="assets/bootstrap.min.css">

<!-- jQuery library -->
<script src="assets/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="assets/bootstrap.min.js"></script>
<script src="assets/bootstrap.bundle.min.js"></script>
<div class="header" style="background-color: #f0f3ff;text-align: center;padding: 10px;border-bottom: 1px solid #d9ddf1;">
    <h5>Creative Builder <sup>beta</sup></h5>
    <!-- <button id="section_add" class="btn btn-primary">Add section</button> -->

    <!-- <button class="btn btn-primary" onclick="test_append_within_an_element()">Append inside div</button> -->
    <button class="btn btn-primary" onclick="test_append_within_a_variable()">Create from template</button>
    <button id="section_add" class="btn btn-primary" onclick="save()">Save</button>
</div>
<div id="main1" class="parent" style="margin: 100px 200px;"></div>
<div id="main">
    <!-- <div data-target="example5"> This is a text, where i am inserting a button</div> -->
</div>

<?php include 'layout1.php';?>

<script>

// run this function while a new element is created or previously created page is loaded for editing. 
// shows outside border & edit, delete options buttons
// assign a random id while 1st time creation, to make each and every elements unique

function test_append_within_a_variable() {
    let random_id = Math.floor(Math.random()*1000)
    console.log(random_id)
    let xmlString = '<div data-target="example7" style="height:100px; font-size:40px; font-weight:bold;" id="' + random_id +'" template="text"> This is a template text design</div>'
    $("#main1").append( xmlString );
    var divsWithAttribute = $("#main1").find('div[data-target="example7"]');

    for (var i = 0;i<divsWithAttribute.length;i++){
        // var button = document.createElement('button');
        // button.textContent = 'Click Me 7'; // Set the button text content

        var parentDiv = document.createElement('div');
        $(parentDiv).addClass("options child");
        var customHTML = '<div><button class="btn btn-sm btn-secondary " onclick="edit_parent(this)" edit-id="' + random_id +'">Edit</button> <button class="btn btn-sm btn-danger" onclick="delete_parent(this)" delete-id="' + random_id +'">Delete</button></div>';
        parentDiv.innerHTML = customHTML;

        // Append the button to the current div element
        $(divsWithAttribute[i]).parent().append(parentDiv);
        console.log(divsWithAttribute[i])
    }
}

function test_append_within_an_element() {
    // Select the div elements with a specific attribute using regular expressions
    // var divsWithAttribute = document.querySelectorAll('div[data-target="example5"]');
    var divsWithAttribute = $("#main").find('div[data-target="example5"]');

    for (var i = 0;i<divsWithAttribute.length;i++){
        var button = document.createElement('button');
        button.textContent = 'Click Me'; // Set the button text content

        // Append the button to the current div element
        divsWithAttribute[i].appendChild(button);
        console.log(divsWithAttribute[i])
    }

    // Loop through each div element with the specified attribute
    // divsWithAttribute.forEach(function(divElement) {
    //     console.log(divElement)
    //     // Create a new button element
    //     var button = document.createElement('button');
    //     button.textContent = 'Click Me'; // Set the button text content

    //     // Append the button to the current div element
    //     divElement.appendChild(button);
    // });

}

function edit_parent(editbutton) {
    let edit_id = editbutton.getAttribute('edit-id')
    console.log(edit_id)
    show_edit_options(edit_id)
}

function show_edit_options(edit_id) {
    // offcanvas.show()
    // let template_type = $("#"+edit_id).attr('template')
    // console.log(template_type)
    // $("#content_type_display").html(template_type)

    // For globall editing from other functions, this variable is getting exposed intentionally
    currently_editing_component_id = edit_id

    var targetPosition = $("#"+edit_id).offset();
    var targetHeight = $("#"+edit_id).outerHeight();
    console.log(targetPosition+targetHeight)
    
    $('#myModal').modal('show'); 
    // Set the position of the modal just below the target div
    $('#modal-dialog').css({'top': targetPosition.top + targetHeight,'left': targetPosition.left, 'float': 'left', 'width': '500px', 'box-shadow': '2px 2px 20px 1px #0000000f'});
    
    // Show the component's text inside the textarea
    let text_to_edit = $("#"+edit_id).html()
    $("#text_editor").val(text_to_edit)
    $("#text_editor").focus()

    // Show the component's text color inside the colorpicker input
    color_code = $("#"+edit_id).css('color')
    $("#text_color_editor").val(color_code)
    console.log(color_code)

}

function update_template_text() {
    
    // Updating the textarea's text to the editing component's text
    $("#"+ currently_editing_component_id).html($("#text_editor").val())
    console.log( $("#text_editor").val() )
}

function update_template_text_color(color_code) {
    $("#"+ currently_editing_component_id).css({ 'color': color_code })
    console.log(color_code)
}

function delete_parent(deletebutton) {
    let delete_id = deletebutton.getAttribute('delete-id')
    $("#"+delete_id).parent().html('')
    // $(deletebutton).parent().parent().parent().html('')
}

let container = '<div class="container hoverArea">\
<button class="btn btn-sm btn-secondary inner section_add options">+ 1/2 col</button>\
<button class="btn btn-sm btn-primary inner section_add options">+ 1/3 col</button>\
<button class="btn btn-sm btn-info inner section_add layout1_add options">+ content below </button>\
</div>'

$( "#section_add" ).on( "click", function() {
  $("#main").append( container );
    $( ".layout1_add" ).on( "click", function() {
    $(".container").append( layout1 );
    });
});


function save() {
    // removes the options elements: buttons & borders
    $(".options").remove();

    // now extract the plain html and save to server
    let output = $("#main1").html();
    console.log(output);
}

</script>

<style>
.container{
    min-height:200px;
    border: 2px solid rgba(0, 0, 0, 0);
}
.container:hover{
    border: 2px dashed #444;
}
.container-fluid:hover{
    border: 2px dashed #444;
}

.inner{display:none; float: right}
.hoverArea:hover > .inner{display: block;}
/* .inner2{display:none; float: right}
.hoverArea2:hover > .inner2{display: block;} */
.parent {
    position: relative;
    /* Add any other styles you want for the parent div */
}
.child{
    display:none;
    float: right;
    text-align:center;
    border: 1px dashed #000;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.parent:hover .child{display: block;}

</style>