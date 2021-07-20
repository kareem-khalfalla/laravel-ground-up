<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
</head>

<body>
    <h3>users</h3>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>user name</th>
                <th>company name</th>
                <th>email</th>
                <th>active</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)

                <tr>
                    <td>
                        {{ $user->id }}
                    </td>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>
                        {{ $user->company->name }}
                    </td>
                    <td>
                        {{ $user->email }}
                    </td>
                    <td>
                        {{ $user->active }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
