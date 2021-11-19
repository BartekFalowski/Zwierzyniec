<a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
<table>
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Description</th>
    </tr>
    @foreach ($items as $key => $item)
        <tr>
            <td>{{ ++$key }}</td>
            <td>{{ $item->title }}</td>
            <td>{{ $item->description }}</td>
        </tr>
    @endforeach
</table>
