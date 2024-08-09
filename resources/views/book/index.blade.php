<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Book Shop Name</th>
        <th scope="col">Book Name</th>
        <th scope="col">Price</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
        <tr>
            <th scope="row">{{ $book['id'] }}</th>
            <td>{{ $book->bookShop->name ?? ''}}</td>
            <td>{{ $book['name'] }}</td>
            <td>{{ $book['price'] }}</td>
          </tr>
        @endforeach
    
      
    </tbody>
  </table>