<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Page specific assets -->
<link rel="stylesheet" href="{{ asset('assets/home/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/owl.theme.default.min.css') }}">
<!-- Jquery Ui Css -->
<link rel="stylesheet" href="{{ asset('assets/home/css/jquery-ui.css') }}">
<!-------------- Nice Select  Css ----------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/nice-select.css') }}">
<!-------------- Fontawasome  Css ----------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/all.min.css') }}">
<!--------------- Custom Fronts  --------------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/custome-front/custom-fronts.css') }}">
<!-------------- Bootstrap   ----------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/bootstrap.min.css') }}">
<script src="{{ asset('assets/home/js/bootstrap.bundle.min.js') }}"></script>
<!-------------- Main Css ----------------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/responsive.css') }}">
<!-------------------- Jquery Js --------------------->
<script src="{{ asset('assets/home/js/jquery-3.7.1.min.js') }}"></script>


<!-- Builder assets -->
<!-- Sortable Ui -->
<link href="{{ asset('assets/sortable/jquery-ui.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/sortable/jquery-ui.js') }}"></script>
<!-- Toastr  -->
<link rel="stylesheet" href="{{ asset('assets/toastr/toastr.min.css') }}">
<script src="{{ asset('assets/toastr/toastr.min.js') }}"></script>
<body>
    <!-- Builder bar -->
    <div id="editor_top_bar" class="editor_top_bar">
        <div class="container">
            <div class="row">
                <div class="col-md-9 py-3">
                    <div class="editor_title">Page Builder</div>
                </div>
                <div class="col-md-3 py-2">
                    <a class="btn btn-light btn-lg float-end mx-1" href="{{ route('pages') }}">back</a>
                    <a class="btn btn-light btn-lg float-end mx-1" href="{{ route('page.view', $page_data->id) }}">preview</a>
                    <button class="btn btn-light btn-lg float-end mx-1" onclick="save_layout()">save</button>
                </div>
            </div>
        </div>
        
    </div>

    <div id="main">
        {!! $page_data->html !!}
    </div>
   

    @include ('page_offcanvas')
</body>
<script>

function edit_content(editbutton) {
    let block_id = editbutton.getAttribute('edit-id')
    let content_type = $("#"+block_id).attr('content_type')
    console.log(content_type)
    let url = '{{ route("edit.block") }}' + '/' + block_id + '/' + content_type
    show_offcanvas(url, block_id)
}

// Save the edited layout into database
function save_layout() {
    // removes the options elements: buttons & borders
    $(".options").remove();

    // now extract the plain html
    let output = $("#main").html();
    if ($("#main").html().trim() === '') {
        console.log("there is nothing to save")
        output = "&nbsp;"
    }
    // console.log(output);

    // Save the modified html codes to server
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    // Sending the ajax call
    let url = '{{ route("page.save") }}'
    $.ajax({
        type: "POST",
        data: {
            html : output,
            id : {{ $page_data->id }}
        },
        url: url,
        success: function(msg){
            // Showing the notification message
            toastr.success('layout updated');

        }
    });

    // Re-initiate the builder
    initiate_builder()
    // output = $("#main").html();
    // console.log(output);
}



// Loading the saved layout from db and show editor bordrs
$(document).ready(function() {
    initiate_builder()
});

function initiate_builder() {
    // Remove if there is any options class exists already
    $(".options").remove();

    
    var divsWithAttribute = $("div.section")

    // Show the placeholder block if no section found
    if(divsWithAttribute.length == 0) {
        remove_placeholder_block()  // If already exists, then remove it
        show_placeholder_block()
        return
    }
        // Bind sections with the builder guides

        for (var i = 0;i<divsWithAttribute.length;i++){
            // Get the section id
            section_id = divsWithAttribute[i].getAttribute('id')

            var parentDiv = document.createElement('div')
            $(parentDiv).addClass("options child")
            var customHTML = '<div><button class="btn btn-sm btn-secondary " onclick="edit_content(this)" edit-id="' + section_id +'">Edit</button> \
                                <button class="btn btn-sm btn-danger" onclick="delete_block(this)" delete-id="' + section_id +'">Delete</button>\
                                <button class="btn btn-sm btn-primary" onclick="add_block(this)" add-id="' + section_id +'">Add below</button>\
                                </div>';
            parentDiv.innerHTML = customHTML;

            // Append the button to the current div element
            $(divsWithAttribute[i]).append(parentDiv);
            // console.log(divsWithAttribute[i])
        }

    // Bind texts with the builder guides
        var divsWithAttribute = $(".builder_text")
        // console.log(divsWithAttribute.length)
        for (var i = 0;i<divsWithAttribute.length;i++){
            // Get the section id
            section_id = divsWithAttribute[i].getAttribute('id')

            var parentDiv = document.createElement('div')
            $(parentDiv).addClass("options child")
            var customHTML = '<div><button class="btn btn-sm btn-secondary " onclick="edit_content(this)" edit-id="' + section_id +'">Edit</button> \
                                <button class="btn btn-sm btn-danger" onclick="delete_block(this)" delete-id="' + section_id +'">Delete</button>\
                                <button class="btn btn-sm btn-primary" onclick="add_block(this)" add-id="' + section_id +'">Add below</button>\
                                </div>';
            parentDiv.innerHTML = customHTML;

            // Append the button to the current div element
            $(divsWithAttribute[i]).append(parentDiv);
            // console.log(divsWithAttribute[i])
        }

    // Bind images with the builder guides
        var divsWithAttribute = $(".builder_image")
        // console.log(divsWithAttribute.length)
        for (var i = 0;i<divsWithAttribute.length;i++){
            // Get the section id
            section_id = divsWithAttribute[i].getAttribute('id')

            var parentDiv = document.createElement('div')
            $(parentDiv).addClass("options child")
            var customHTML = '<div><button class="btn btn-sm btn-secondary " onclick="edit_content(this)" edit-id="' + section_id +'">Edit</button> \
                                <button class="btn btn-sm btn-danger" onclick="delete_block(this)" delete-id="' + section_id +'">Delete</button>\
                                <button class="btn btn-sm btn-primary" onclick="add_block(this)" add-id="' + section_id +'">Add below</button>\
                                </div>';
            parentDiv.innerHTML = customHTML;

            // Append the button to the current div element
            $(divsWithAttribute[i]).append(parentDiv);
            // console.log(divsWithAttribute[i])
        }

    // Initiate sortable
    $( "#main" ).sortable();
}

function add_block(addButton) {
    // var newDiv = $('<div class="section parent" style="height:100px;">New div</div>');
    // // Bring a new block from server
    // let url = '{{ route("get.new.block", 3) }}'
    // let new_block = ''
    // $.ajax({
    //     type: "GET",
    //     url: url,
    //     success: function(response_data){
    //         section_id = addButton.getAttribute('add-id')

    //         new_random_id = Math.floor(Math.random()*1000)
    //         block_pre_code = '<div class="section parent" id="'+new_random_id+'">'
    //         block_post_code = '</div>'
    //         new_block = block_pre_code + response_data + block_post_code
    //         $("#"+section_id).after(new_block)
    //         console.log(new_block)
    //         initiate_builder()
    //     }
    // });
    

    // initiate_builder()

    // let url = '{{ route("get.new.block", 3) }}'



    block_id = addButton.getAttribute('add-id')
    let url = '{{ route("create.new.block") }}' + '/' + block_id
    show_offcanvas(url, block_id)
}


function delete_block(deletebutton) {
    // Remove the block
    $(deletebutton).parent().parent().parent().remove()

    // If no block found, show a placeholder block to add new block
    var divsWithAttribute = $("div.section")
    var section_count = divsWithAttribute.length
    if (section_count == 0) {
        show_placeholder_block()
    }
}

function show_placeholder_block() {
    placeholder_block = '<div class="container placeholder_block_holder" id="placeholder_block">\
    <div class="row">\
        <div class="col-md-12">\
            <div class="placeholder_block">\
                <div>Get started by adding new blocks</div>\
                <button class="btn btn-primary btn-lg" onclick="add_block(this)" add-id="main">Add a new block</button>\
            </div>\
        </div>\
    </div>\
</div>'
    $("#main").after(placeholder_block)
}

function remove_placeholder_block() {
    $(".placeholder_block_holder").remove()
}

</script>



<style>
.parent {
    position: relative;
    /* Add any other styles you want for the parent div */
}
.parent:hover {
    outline: 2px dashed #999;
    display:block;
}
.child{
    position:absolute;
    display:none;
    float: right;
    text-align:center;
    /* border: 2px dashed #000; */
    top: 0;
    left: 0;
    width: 100%;
    cursor: move;
}
.parent:hover>.child{display: block;}
.editor_top_bar{
    background-color: #121729;
}
.editor_title{
    color: #faf4ff;
    font-size: 16px;
}

.builder_image img{
    display:block;
}

.placeholder_block{
    text-align: center;
    outline: 2px dashed #c1b4d8;
    padding: 50px;
    margin-top:50px;
}
.placeholder_block>div{
    font-size:20px;
    margin-bottom:20px;
}

</style>