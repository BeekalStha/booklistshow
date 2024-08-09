<form action="{{ route('book.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="Bookshop">Book Shop</label>
        <select class="form-select" name="bookshop_id">
            @foreach ($bookShop as $value)
                <option value="{{ $value->id }}">{{ $value->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="bookname">Name</label>
        <input type="text" class="form-control" name="bookname" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" name="price" placeholder="Price">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
