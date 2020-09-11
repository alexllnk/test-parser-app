<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Parse Thread Comments</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="antialiased m-5 bg-gray">
<div class="container">
    <h3>Dashboard</h3>
    <div class="row">
        <div class="col-sm">
            <div class="card">
                <div class="position-absolute">
                    <img src="https://robohash.org/{{ random_int(9,999999) }}.png?size=60x60">
                </div>
                <div class="card-body bg-success justify-content-center rounded text-white p-3">
                    <div class="ml-5">
                        <p class="font-weight-bold mb-0">1403</p>
                        <p class="text-sm">block1</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <div class="position-absolute">
                    <img src="https://robohash.org/{{ random_int(9,999999) }}.png?size=60x60">
                </div>
                <div class="card-body bg-danger justify-content-center rounded text-white p-3">
                    <div class="ml-5">
                        <p class="font-weight-bold mb-0">22405</p>
                        <p class="text-sm">block2</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <div class="position-absolute">
                    <img src="https://robohash.org/{{ random_int(9,999999) }}.png?size=60x60">
                </div>
                <div class="card-body bg-primary justify-content-center rounded text-white p-3">
                    <div class="ml-5">
                        <p class="font-weight-bold mb-0">87123</p>
                        <p class="text-sm">block3</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">
                <div class="position-absolute">
                    <img src="https://robohash.org/{{ random_int(9,999999) }}.png?size=60x60">
                </div>
                <div class="card-body bg-warning justify-content-center rounded text-white p-3">
                    <div class="ml-5">
                        <p class="font-weight-bold mb-0">72197</p>
                        <p class="text-sm">block4</p>
                    </div>
                </div>
            </div>
        </div>


    </div>


    <h3 class="my-3">Search</h3>
    <div class="p-2 rounded border border-secondary">
        <form>
            <div class="custom-control custom-switch custom-control-inline p-1 pl-5 bg-white rounded">

                <input type="checkbox" class="custom-control-input" checked id="customSwitch1">
                <label class="custom-control-label" for="customSwitch1">switch1</label>
            </div>
            <div class="custom-control custom-switch custom-control-inline p-1 pl-5 bg-white rounded">
                <input type="checkbox" class="custom-control-input" checked id="customSwitch2">
                <label class="custom-control-label" for="customSwitch2">switch2</label>

            </div>
            <div class="custom-control custom-switch custom-control-inline p-1 pl-5 bg-white rounded">
                <input type="checkbox" class="custom-control-input" checked id="customSwitch3">
                <label class="custom-control-label" for="customSwitch3">switch3</label>

            </div>
            <div class="custom-control custom-switch custom-control-inline p-1 pl-5 bg-white rounded">
                <input type="checkbox" class="custom-control-input" id="customSwitch4">
                <label class="custom-control-label" for="customSwitch4">switch4</label>

            </div>
            <div class="custom-control custom-switch custom-control-inline p-1 pl-5 bg-white rounded">
                <input type="checkbox" class="custom-control-input" checked id="customSwitch5">
                <label class="custom-control-label" for="customSwitch5">switch5</label>

            </div>

            <div class="input-group mt-3">
                <div class="input-group-prepend">
                    <span class="input-group-text"><img width="20px" src="/open-iconic/svg/magnifying-glass.svg"></span>
                </div>
                <input type="text" class="form-control rounded-right" required>
                <div class="invalid-feedback">
                    {{----}}
                </div>
            </div>

        </form>
        <p class="text-center p-2">Input a word for search (minimum 3 characters)</p>
    </div>
    <hr>
    <h3>Ratings</h3>
    <div class="row">
        <div class="col-sm">
            <div class="card">

                <div class="card-body bg-white rounded">
                    <div class="">
                        <p class="">TOP20</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm">
            <div class="card">

                <div class="card-body bg-white rounded">
                    <div class="">
                        <p class="">TOP21_40</p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
