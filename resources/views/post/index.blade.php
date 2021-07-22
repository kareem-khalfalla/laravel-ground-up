<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<style>
    svg{
        width: 1rem;
        height: 1rem;
    }
</style>
<body>
    <table>
        <thead>
            <tr>
                {{-- <th>#</th> --}}
                <th>title</th>
                <th>active</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)

                <tr>
                    {{-- <td>{{ $post->id }}</td> --}}
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->active }}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                {{-- this will erase all query filters we've done!!! --}}
                {{-- <td colspan="2">{{ $posts->links() }}</td> --}}
                {{-- insteadof we can use this: --}}
                {{-- <td colspan="2">{{ $posts->appends(request()->input())->links() }}</td> --}}
                {{-- or --}}
                <td colspan="2">{{ $posts->withQueryString()->links() }}</td>
            </tr>
        </tfoot>
    </table>
</body>

</html>
