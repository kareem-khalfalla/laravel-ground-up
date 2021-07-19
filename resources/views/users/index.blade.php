<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users</title>
</head>

<body>
    <h3>active users</h3>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>email</th>
                <th>active</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activeUsers as $activeUser)

                <tr>
                    <td>
                        {{ $activeUser->id }}
                    </td>
                    <td>
                        {{ $activeUser->name }}
                    </td>
                    <td>
                        {{ $activeUser->email }}
                    </td>
                    <td>
                        {{ $activeUser->active }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h3>inactive users</h3>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>email</th>
                <th>active</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($inactiveUsers as $inactiveUser)

                <tr>
                    <td>
                        {{ $inactiveUser->id }}
                    </td>
                    <td>
                        {{ $inactiveUser->name }}
                    </td>
                    <td>
                        {{ $inactiveUser->email }}
                    </td>
                    <td>
                        {{ $inactiveUser->active }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
