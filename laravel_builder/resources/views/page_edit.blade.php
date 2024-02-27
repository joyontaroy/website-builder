<!-- Page specific assets -->
<link rel="stylesheet" href="{{ asset('assets/home/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/owl.theme.default.min.css') }}">
<!-- Jquery Ui Css -->
<link rel="stylesheet" href="{{ asset('assets/home/css/jquery-ui.css') }}">
<!-------------- Nice Select  Css ----------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/nice-select.css') }}">
<!-------------- Fontawasome  Css ----------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/all.min.css') }}">
<!--------------- Custome Fronts  --------------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/custome-front/custom-fronts.css') }}">
<!-------------- Bootstrap  Css ----------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/bootstrap.min.css') }}">
<!-------------- Main Css ----------------------->
<link rel="stylesheet" href="{{ asset('assets/home/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/home/css/responsive.css') }}">
<!-------------------- Jquery Js --------------------->
<script src="{{ asset('assets/home/js/jquery-3.7.1.min.js') }}"></script>
<div id="main">
    {!! $page_data->html !!}
</body>
<script>
$(document).ready(function() {
    let random_id = Math.floor(Math.random()*1000)
    var divsWithAttribute = $("div.section");
console.log(divsWithAttribute.length)
    for (var i = 0;i<divsWithAttribute.length;i++){
        // var button = document.createElement('button');
        // button.textContent = 'Click Me 7'; // Set the button text content

        var parentDiv = document.createElement('div');
        $(parentDiv).addClass("options child");
        var customHTML = '<div><button class="btn btn-sm btn-secondary " onclick="edit_parent(this)" edit-id="' + random_id +'">Edit</button> <button class="btn btn-sm btn-danger" onclick="delete_parent(this)" delete-id="' + random_id +'">Delete</button></div>';
        parentDiv.innerHTML = customHTML;

        // Append the button to the current div element
        $(divsWithAttribute[i]).append(parentDiv);
        console.log(divsWithAttribute[i])
    }
});
</script>
<style>
.parent {
    position: relative;
    /* Add any other styles you want for the parent div */
}
.child{
    position:absolute;
    display:none;
    float: right;
    text-align:center;
    border: 2px dashed #000;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.parent:hover .child{display: block;}
</style>