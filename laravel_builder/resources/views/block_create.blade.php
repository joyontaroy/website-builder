<!-- Pre-designed blocks -->
@foreach ($block_list as $block)
<div>
    <img src="{{ asset('assets/builder_block_thumb/').'/'.$block->id.'.png' }}" style="max-width:100%; max-height:50px;" />
    <button class="btn btn-primary btn-lg my-2" onclick="insert_new_block( {{ $block->id }} )">Insert : {{ $block->title }}</button> 
    <div id="block_storage_{{ $block->id }}" style="display:none;">
        {!! $block->html !!}
    </div>
</div>
@endforeach

<!-- Basic web elements -->
<div id="basic_content" style="display:none;">
    <button class="btn btn-primary my-2" onclick="insert_new_block( '6_6' )">Insert : 6_6 </button> 
    <button class="btn btn-primary my-2" onclick="insert_new_block( 'youtube' )">Insert : youtube </button> 

    <div id="block_storage_6_6">
        <div class="container" style="padding:20px; border:1px dotted #ccc;">
            <div class="row">
                <div class="col-md-6">
                    <div class="section parent" content_type="section" id="placeholder_id">
                        Block 1
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section parent" content_type="section" id="placeholder_id">
                        Block 2
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="block_storage_youtube">
        <p id="placeholder_id">youtube_embed_code_here</p>
    </div>
</div>

<script>



function insert_new_block(block_id) {

    // Find out the block to be inserted, which is already kept hidden in the offcanvas body
    new_block_html = $("#block_storage_"+block_id).html()

    // Replace any placeholder id inside the new block, which will be editable further
    var substringToReplace = 'placeholder_id'
    var regex = new RegExp(substringToReplace, 'g')
    new_block_html = new_block_html.replace(regex, function() {
        return Math.floor(Math.random() * 1000); // Generate a random number (adjust range as needed)
    });

    // The parent block, inside which, the new block will be inserted
    parent_block_id = "{{ $parent_block_id }}"

    // Prepare the new block which will be inserted
    new_random_id = Math.floor(Math.random()*1000)
    block_pre_code = '<div class="section parent" id="'+new_random_id+'">'
    block_post_code = '</div>'
    new_block = block_pre_code + new_block_html + block_post_code

    // Remove the placeholder block if exists
    window.parent.remove_placeholder_block()

    // Append the new block.
    // If there is no block in the body, insert inside the #main block
    // Else append the new block after the currently targetted block
    if ( parent_block_id == "main") {
        $( "#main" ).html( new_block )
    }
    else {
        $( "#"+parent_block_id ).after( new_block )
    }

    // Initiate the builder engine
    window.parent.initiate_builder()

    // Close the offcanvas
    offcanvas.hide()

    
}



</script>