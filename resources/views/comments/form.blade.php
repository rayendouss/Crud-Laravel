
<form action="/comments" method="post" role="form">
   {{csrf_field()}}
    <legend>Add Comment </legend>


    <div class="form-group">
        <label for=""></label>
        <textarea type="text" class="form-control" rows="4" name="comment" placeholder="add comment" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Add Comment</button>
</form>



    
