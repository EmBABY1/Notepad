<form action="store" method="post">
    @csrf
    <table>
        @foreach ($result as $item)
            <tr>
                <th>Title</th>
                <th>Note</th>
            </tr>
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->text }}</td>
            </tr>
        @endforeach
    </table>
    <button><a href="/notepad">Add Note</a></button>
</form>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
    }

    th,
    td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
</style>
