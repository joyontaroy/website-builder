{{ $parent_block_id }}
{{ $content_type }}

<!-- Editor for  text -->
@if($content_type == 'text')
<div class="">
    <h4>Text editor</h4>
    <textarea class="form" name="" id="text_editor" rows="5" style="width:100%;"></textarea>

    <h4>Color</h4>
    <input type="color" id="color_editor"/>
</div>

@endif

<!-- Editor for  image -->
@if($content_type == 'image')
<div class="">
    <img src="" alt="" id="image_editor" style="max-width: 100%;border: 1px solid #ccc;">
    <input type="file" id="image_uploader">
</div>
@endif
<hr>
<!-- Commong styles -->
<div class="">
    <h4>Padding</h4>
    <input type="number" id="content_padding_top" style="width:50px;">
    <input type="number" id="content_padding_right" style="width:50px;">
    <input type="number" id="content_padding_bottom" style="width:50px;">
    <input type="number" id="content_padding_left" style="width:50px;">
</div>
<div class="">
    <h4>Margin</h4>
    <input type="number" id="content_margin_top" style="width:50px;">
    <input type="number" id="content_margin_right" style="width:50px;">
    <input type="number" id="content_margin_bottom" style="width:50px;">
    <input type="number" id="content_margin_left" style="width:50px;">
</div>
<div class="">
    <h4>Border</h4>
    <input type="number" id="content_border_top" style="width:50px;">
    <input type="number" id="content_border_right" style="width:50px;">
    <input type="number" id="content_border_bottom" style="width:50px;">
    <input type="number" id="content_border_left" style="width:50px;">
    <select name="" id="content_border_style">
        <option value="">none</option>
        <option value="solid">solid</option>
        <option value="dashed">dashed</option>
        <option value="dotted">dotted</option>
    </select>
    <input type="color" id="border_color_editor"/>
</div>

<div class="">
    <h4>Background color</h4>
    <input type="color" id="background_color_editor"/>
</div>

<script>
// Editor for all content
function update_content() {
    // Change content padding
    $("#" + {{ $parent_block_id }}).css( 'padding-top', $('#content_padding_top').val() );
    $("#" + {{ $parent_block_id }}).css( 'padding-right', $('#content_padding_right').val() );
    $("#" + {{ $parent_block_id }}).css( 'padding-bottom', $('#content_padding_bottom').val() );
    $("#" + {{ $parent_block_id }}).css( 'padding-left', $('#content_padding_left').val() );

    // Change content margin
    $("#" + {{ $parent_block_id }}).css( 'margin-top', $('#content_margin_top').val() );
    $("#" + {{ $parent_block_id }}).css( 'margin-right', $('#content_margin_right').val() );
    $("#" + {{ $parent_block_id }}).css( 'margin-bottom', $('#content_margin_bottom').val() );
    $("#" + {{ $parent_block_id }}).css( 'margin-left', $('#content_margin_left').val() );

    // Change content border
    $("#" + {{ $parent_block_id }}).css( 'border-top-width', $('#content_border_top').val() );
    $("#" + {{ $parent_block_id }}).css( 'border-right-width', $('#content_border_right').val() );
    $("#" + {{ $parent_block_id }}).css( 'border-bottom-width', $('#content_border_bottom').val() );
    $("#" + {{ $parent_block_id }}).css( 'border-left-width', $('#content_border_left').val() );

    // Change content border style
    $("#" + {{ $parent_block_id }}).css( 'border-style', $('#content_border_style').val() );

    // Change content border color
    $("#" + {{ $parent_block_id }}).css( 'border-color', rgbToHex( $('#border_color_editor').val() ) );

    // Change content background color
    $("#" + {{ $parent_block_id }}).css( 'background-color', rgbToHex( $('#background_color_editor').val() ) );
    
}

$(document).ready(function() {
    
    // Get the padding value
    $("#content_padding_top").val( $("#" + {{ $parent_block_id }}).css('padding-top').match(/\d+/g)[0] ) // remove 'px' by regular expression
    $("#content_padding_right").val( $("#" + {{ $parent_block_id }}).css('padding-right').match(/\d+/g)[0] ) // remove 'px' by regular expression
    $("#content_padding_bottom").val( $("#" + {{ $parent_block_id }}).css('padding-bottom').match(/\d+/g)[0] ) // remove 'px' by regular expression
    $("#content_padding_left").val( $("#" + {{ $parent_block_id }}).css('padding-left').match(/\d+/g)[0] ) // remove 'px' by regular expression

    // Bind the padding editor, number typed|mouse clicked|arrow up/down
    $('#content_padding_top').on('keyup change', function() {update_content()})
    $('#content_padding_right').on('keyup change', function() {update_content()})
    $('#content_padding_bottom').on('keyup change', function() {update_content()})
    $('#content_padding_left').on('keyup change', function() {update_content()})
    
    // Get the margin value
    $("#content_margin_top").val( $("#" + {{ $parent_block_id }}).css('margin-top').match(/\d+/g)[0] ) // remove 'px' by regular expression
    $("#content_margin_right").val( $("#" + {{ $parent_block_id }}).css('margin-right').match(/\d+/g)[0] ) // remove 'px' by regular expression
    $("#content_margin_bottom").val( $("#" + {{ $parent_block_id }}).css('margin-bottom').match(/\d+/g)[0] ) // remove 'px' by regular expression
    $("#content_margin_left").val( $("#" + {{ $parent_block_id }}).css('margin-left').match(/\d+/g)[0] ) // remove 'px' by regular expression

    // Bind the margin editor, number typed|mouse clicked|arrow up/down
    $('#content_margin_top').on('keyup change', function() {update_content()})
    $('#content_margin_right').on('keyup change', function() {update_content()})
    $('#content_margin_bottom').on('keyup change', function() {update_content()})
    $('#content_margin_left').on('keyup change', function() {update_content()})
    
    // Get the border value
    $("#content_border_top").val( $("#" + {{ $parent_block_id }}).css('border-top-width').match(/\d+/g)[0] ) // remove 'px' by regular expression
    $("#content_border_right").val( $("#" + {{ $parent_block_id }}).css('border-right-width').match(/\d+/g)[0] ) // remove 'px' by regular expression
    $("#content_border_bottom").val( $("#" + {{ $parent_block_id }}).css('border-bottom-width').match(/\d+/g)[0] ) // remove 'px' by regular expression
    $("#content_border_left").val( $("#" + {{ $parent_block_id }}).css('border-left-width').match(/\d+/g)[0] ) // remove 'px' by regular expression

    // Bind the margin editor, number typed|mouse clicked|arrow up/down
    $('#content_border_top').on('keyup change', function() {update_content()})
    $('#content_border_right').on('keyup change', function() {update_content()})
    $('#content_border_bottom').on('keyup change', function() {update_content()})
    $('#content_border_left').on('keyup change', function() {update_content()})

    // Get the border style
    $("#content_border_style").val( $("#" + {{ $parent_block_id }}).css('border-style') )
    // Bind the border style editor
    $('#content_border_style').on('change', function() {update_content()})

    // Get the border color
    $('#border_color_editor').val( rgbToHex( $("#" + {{ $parent_block_id }}).css('border-color')) )    
    // Bind the border color
    $('#border_color_editor').change( function(){update_content()} )
    
    // Get the background color
    $('#background_color_editor').val( rgbToHex( $("#" + {{ $parent_block_id }}).css('background-color')) ) 
    // Bind the background color
    $('#background_color_editor').change( function(){update_content()} )
});

// Editor for text
@if($content_type == 'text')

    
    $(document).ready(function() {
        // get the text value by advacned dom query
        let editing_text = $("#" + {{ $parent_block_id }}).contents().filter(function() {
            return this.nodeType === 3; // Filter only text nodes
        })
        $("#text_editor").val(editing_text[0]['data'])

        // Get the color value
        let text_color = $("#" + {{ $parent_block_id }}).css('color')
        text_color = rgbToHex(text_color)
        $('#color_editor').val(text_color)

        // Bind the editors on change event
        $('#text_editor').on('keyup', function() {update_text()})
        $('#color_editor').change( function(){update_text()} )
    });

    function update_text() {
        // Change text value
        let new_text = $("#text_editor").val()
        if (new_text == "")new_text = " "
        $("#" + {{ $parent_block_id }}).contents().filter(function() {
            return this.nodeType === 3; // Filter only text nodes
        }).replaceWith(new_text);

        // Change text color
        $("#" + {{ $parent_block_id }}).css( 'color', rgbToHex( $("#color_editor").val() ) );

        
    }

    
@endif

// Editor for image
@if($content_type == 'image')
    $(document).ready(function() {
        // Find the editing image source first
        var imgSrc = $("#" + {{ $parent_block_id }}).find('img').attr('src');
        console.log( imgSrc )
        $("#image_editor").attr('src', imgSrc)

        
    });

    // Bind the uploader to upload new image and update the source
    $(document).ready(function() {
        $('#image_uploader').change(function() {
            var file = this.files[0]; // Get the selected file

            // Check if a file is selected
            if (file) {
                var formData = new FormData(); // Create a FormData object

                formData.append('file', file); // Append the file to the FormData object with 'file' as the key

                // Perform AJAX request to upload the file
                $.ajax({
                    url: "{{ route('upload.block.image') }}", // Replace 'upload.php' with your server-side script URL
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    data: formData,
                    processData: false, // Prevent jQuery from automatically processing the data
                    contentType: false, // Prevent jQuery from automatically setting the Content-Type header
                    success: function(response) {
                        // Handle the success response
                        console.log( response);
                        // Now change the source
                        $("#" + {{ $parent_block_id }}).find('img').attr('src', response);
                    },
                    error: function(xhr, status, error) {
                        // Handle the error
                        console.error('Error uploading file:', error);
                    }
                });
            }
        });
    });

@endif

// Required for color code conversion | it's a common function
function rgbToHex(rgb) {
        // Parse the RGB components using regex
        var match = rgb.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);

        // Convert the parsed RGB components to hexadecimal
        if (match) {
            return '#' + 
                ('0' + parseInt(match[1], 10).toString(16)).slice(-2) +
                ('0' + parseInt(match[2], 10).toString(16)).slice(-2) +
                ('0' + parseInt(match[3], 10).toString(16)).slice(-2);
        }
        // If RGB format is incorrect, return original value
        else {
            return rgb;
        }
    }

function update_block(block_id) {

    
}



</script>