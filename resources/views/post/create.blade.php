<form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
TITLE<input type="text" name="title">
CONTENT<textarea name="content" id="" cols="30" rows="10"></textarea>
<input type="file" name="image">
<button type="submit">Save</button>
</form>
