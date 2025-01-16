<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>

<body>

    <div>
        <h1>User {{ $user['name'] }} dashboard! </h1>
    </div>

    <!-- User name -->

    <div>
        <h2>
            User {{ $user['name'] }} recent activities :
        </h2>

        @foreach ($user['recent_activities'] as $activity)
            <ul>
                <li>
                    {{ $activity }}
                </li>
            </ul>
        @endforeach


    </div>

    <!-- Recent activities -->

    <div>
        <h2>
            User {{ $user['name'] }} has :
        </h2>

        @foreach ($user['notifications'] as $notification)
            <ul>
                <li>
                    {{ $notification }}
                </li>
            </ul>
        @endforeach
    </div>

    <!-- Notifications -->




</body>

</html>
