<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Parse Thread Comments</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="antialiased m-5">
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">

                <div class="card-header"> Parse Thread Comments
                </div>

                <div class="card-body">
                    <form method="post">
                        @csrf

                        <button type="submit" class="btn btn-outline-primary">Parse</button>
                    </form>
                    <hr>
                    <p class="mb-3">Parse Results:</p>

                    @if (!empty($mailerFailuresRes))
                        <p class="text-danger">Failures on mail send: </p>
                        <ul>
                            @foreach($mailerFailuresRes as $failure)
                                <li>{{ $failure }}</li>
                            @endforeach
                        </ul>
                    @elseif (isset($mailerFailuresRes) && !is_null($mailerFailuresRes))
                        <p class="text-success">There were no failures on mail send. </p>
                    @endif

                    @if (isset($comments))
                        <p>Number of new comments: {{ count($comments) }}</p>
                    @endif

                    @if (!empty($comments))
                        <p>New comments: </p>
                        <ul>
                            @foreach($comments as $id => $comment)
                                <li class="text-sm"> [ID {{ $id }}] {{ $comment }}</li>
                            @endforeach
                        </ul>
                    @endif


                </div>
            </div>

        </div>
    </div>
</div>
</body>
</html>
