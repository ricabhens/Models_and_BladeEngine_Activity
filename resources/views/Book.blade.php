@include('partials.header')
<h1>Book List</h1>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>ISBN</td>
        <td>TITLE</td>
        <td>AUTHOR</td>
        <td>DESCRIPTION</td>
        <td>DATE PUBLISHED</td>
    </tr>
    @foreach ($book as $bk)
    <tr>
        <td>{{$bk['id']}}</td>
        <td>{{$bk['isbn']}}</td>
        <td>{{$bk['title']}}</td>
        <td>{{$bk['author']}}</td>
        <td>{{$bk['description']}}</td>
        <td>{{$bk['date_published']}}</td>
    </tr>
    @endforeach
</table>

@include('partials.footer')
