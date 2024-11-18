<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="/posts" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="details">Details</label>
            <textarea class="form-control" id="details" name="details" required></textarea>
        </div>
        <div class="form-group">
            <label for="duration">Duration (in hours/days)</label>
            <input type="number" class="form-control" id="duration" name="duration" required>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="images">Images</label>
            <input type="file" class="form-control" id="images" name="images[]" multiple>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</body>
</html>
