@extends ('layouts.master')

@section ('content')

<div class="col-md-8 blog-main">
    <h1>Create a page</h1>


    <hr>


    <form method="post" action="/posts">

        {{ csrf_field() }}

        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Body</label>
            <textarea class="form-control" id="body" name="body"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>

        @include ('layouts.errors')

    </form>
</div>
@endsection
