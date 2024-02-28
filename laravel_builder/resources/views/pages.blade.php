<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-10">
            <h3>Builder pages</h3>
        </div>
        <div class="col-md-2">
            <button class="btn btn-sm btn-primary" onclick="showmodal('create_page')">Create page</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <tr>
                    <td style="width:70%;">Pages</td>
                    <td>Options</td>
                </tr>
                @foreach($pages as $page)
                    <tr>
                        <td>{{$page->title}}</td>
                        <td>
                            <a href="{{ route('page.view', $page->id) }}" class="btn btn-sm btn-secondary">View</a>
                            <a href="{{ route('page.edit', $page->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>


<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>