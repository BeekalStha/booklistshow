<link rel="stylesheet" href="{{ asset('css/list.css') }}">

<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Book List</th>
            <th>Email</th>
            <th>Address</th>
            <th>Password</th>
            <th>Phone Number</th>
            <th>Gender</th>
            <th>Button</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($bookshops as $value )
        <tr>
            <td>{{ $value['name'] }}</td>
           <td>
                @forelse ($value['books'] as $book)
                    {{ $book['name'] ?? 'No book available' }}
                @empty
                    No books availabe 
                @endforelse
           </td>
            <td>{{ $value['email'] }}</td>
            <td>{{ $value['address'] }}</td>
            <td>{{ $value['password'] }}</td>
            <td>{{ $value['phone'] }}</td>
            <td>{{ $value['gender'] }}</td>
            <td>
                <button>   <a href="{{ route('bookshop.edit', $value->id) }}">Edit</a></button>
                <button>   <a href="{{ route('bookshop.show', $value->id) }}">show</a></button>
                <form action="{{ route('bookshop.destroy', $value->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>