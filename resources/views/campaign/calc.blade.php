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

                <div class="card-header"> SMS Campaign Calc
                </div>

                <div class="card-body">
                    <form method="post">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="company_id" id="" required
                                   placeholder="company ID">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="message_count" id="" required
                                   placeholder="message count">
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Crunch</button>
                    </form>
                    <hr>
                    <div class="p-2 rounded border border-primary"><p class="f">
                            <strong>Result:</strong> @if (!empty($res))
                            {{ $res }}
                        @endif</div>
                    </p>

                    <p class="mt-3">Companies</p>
                    <table class="table">
                        @forelse($companies as $company)
                            @if($loop->first)
                                <thead>
                                <tr>
                                    @foreach($companies[0] as $fieldKey => $companyField)
                                        <th> {{ $fieldKey }}</th>
                                    @endforeach
                                </tr>
                                </thead>
                            @endif
                            <tr>
                                @foreach($company as $companyField)
                                    <td>{{ $companyField }}</td>
                                @endforeach
                            </tr>
                        @empty
                            <p>No companies data in DB.</p>
                        @endforelse
                    </table>
                    <hr>
                    <p>SMS Locations</p>
                    <table class="table">
                        @forelse($smsLocations as $smsLocation)
                            @if($loop->first)
                                <thead>
                                <tr>
                                    @foreach($smsLocations[0] as $fieldKey => $smsLocationField)
                                        <th> {{ $fieldKey }}</th>
                                    @endforeach
                                </tr>
                                </thead>
                            @endif
                            <tr>
                                @foreach($smsLocation as $smsLocationField)
                                    <td>{{ $smsLocationField }}</td>
                                @endforeach
                            </tr>
                        @empty
                            <p>No companies data in DB.</p>
                        @endforelse
                    </table>
                </div>

            </div>

        </div>
    </div>
</div>
</body>
</html>
