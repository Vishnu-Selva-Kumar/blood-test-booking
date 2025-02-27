<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Map</title>
</head>

<body>
    <h1>Site Map</h1>
    <table style="width: 100%">
        <thead>
            <tr>
                <th>Route Name</th>
                <th>URL</th>
            </tr>
        </thead>
        <tbody>
            @foreach (Route::getRoutes() as $route)
                @if ($route->getName() && Str::contains($route->getName(), 'web.'))
                    <tr>
                        <td>{{ $route->getName() }}</td>


                        <td>
                            @if ($route->parameterNames())
                                @foreach ($route->parameterNames() as $param)
                                    @php
                                        $parameterNames = '<strong><i>' . $param . '</strong></i>';
                                    @endphp
                                    {!! str_replace( '-'.$param.'-', $parameterNames, route($route->getName(), [$param => '-'.$param.'-'])) !!}

                                @endforeach
                            @else
                            <a target="_blank" href="{{ route($route->getName()) }}">{{ route($route->getName()) }}</a>
                            @endif
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</body>

</html>
