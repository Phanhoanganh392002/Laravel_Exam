<h1>All Books</h1>
<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Author</th>
        <th>Year</th>
    </tr>
    </thead>
    <tbody>
    @foreach($books as $book)
        <tr>
            <td>{{ $book->name }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->year }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<h1>All Books</h1>
<form action="{{ route('search') }}" method="GET">
    <input type="text" name="keyword" placeholder="Search by name">
    <button type="submit">Search</button>
</form>
<table>
    <!-- Table header and body contents -->
</table>
