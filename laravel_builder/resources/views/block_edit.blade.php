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

<script>

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

    // Required for color code conversion
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



function update_block(block_id) {

    
}



</script>