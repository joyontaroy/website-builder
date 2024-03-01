{{ $parent_block_id }}

@foreach ($block_list as $block)
<div>
    <button class="btn btn-primary btn-lg my-2" onclick="insert_new_block( {{ $block->id }} )">Insert : {{ $block->title }}</button> 
    <div id="block_storage_{{ $block->id }}" style="display:none;">
        {!! $block->html !!}
    </div>
</div>
@endforeach

<div id="stored_blocks">

</div>
    

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

    new_block_html = $("#block_storage_"+block_id).html()

    parent_block_id = {{ $parent_block_id }}
    new_random_id = Math.floor(Math.random()*1000)
    block_pre_code = '<div class="section parent" id="'+new_random_id+'">'
    block_post_code = '</div>'
    new_block = block_pre_code + new_block_html + block_post_code

    $("#"+parent_block_id).after(new_block)
    window.parent.initiate_builder()
    
}



</script>