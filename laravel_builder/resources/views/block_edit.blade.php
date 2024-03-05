{{ $parent_block_id }}
{{ $content_type }}

<!-- Editor for  text -->
@if($content_type == 'text')
<div class="">
    <textarea class="form " name="" id="text_editor" onkeyup="update_text_value()"
    cols="30" rows="10" style="width:100%;"></textarea>
</div>
<div id="temp" style="display:none;"></div>
@endif

<!-- Editor for  image -->
@if($content_type == 'image')
<div class="">
    <img src="" alt="" id="image_editor" style="max-width: 100%;border: 1px solid #ccc;">
    <input type="file" id="image_uploader">
</div>
<div id="temp" style="display:none;"></div>
@endif



    

<script>

// Editor for text
@if($content_type == 'text')
    $(document).ready(function() {
        // Get the values of the editing block and place in the editor
        $("#temp").html($("#" + {{ $parent_block_id }} ).html())
        $('#temp .options').remove();
        let initial_text = $("#temp").html()
        $("#text_editor").val(initial_text)
        $("#temp").html("")
        // let temp = 
        // console.log()
    });

    function update_text_value() {
        let new_text = $("#text_editor").val()
        if (new_text == "")new_text = " "
        $("#" + {{ $parent_block_id }}).contents().filter(function() {
            return this.nodeType === 3; // Filter only text nodes
        }).replaceWith(new_text);
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