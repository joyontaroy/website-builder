{{ $parent_block_id }}

@foreach ($block_list as $block)
<div>
    <img src="{{ asset('assets/builder_block_thumb/').'/'.$block->id.'.png' }}" style="max-width:100%; max-height:50px;" />
    <button class="btn btn-primary btn-lg my-2" onclick="insert_new_block( {{ $block->id }} )">Insert : {{ $block->title }}</button> 
    <div id="block_storage_{{ $block->id }}" style="display:none;">
        {!! $block->html !!}
    </div>
</div>
@endforeach

    

<script>



function insert_new_block(block_id) {

    // let url = "{{ route('get.block.html') }}" + '/' + block_id
    // $.get( url , function( new_block_html ) {
        
    //     parent_block_id = {{ $parent_block_id }}
    //     new_random_id = Math.floor(Math.random()*1000)
    //     block_pre_code = '<div class="section parent" id="'+new_random_id+'">'
    //     block_post_code = '</div>'
    //     new_block = block_pre_code + new_block_html + block_post_code

    //     $("#"+parent_block_id).after(new_block)
    //     window.parent.initiate_builder()
        
    // })



    // Find out the block to be inserted, which is already kept hidden in the offcanvas body
    new_block_html = $("#block_storage_"+block_id).html()
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