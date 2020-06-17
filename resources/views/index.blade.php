<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Route List - {{ config('app.name', 'Laravel') }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('vendor/route-list/css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    {{-- Left Side Of Navbar --}}
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    {{-- Right Side Of Navbar --}}
                    <ul class="navbar-nav ml-auto">
                        {{-- Authentication Links --}}
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container-fluid">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Routes</li>
                    </ol>
                </nav>

                <div class="row justify-content-center">

                    <div class="col">
                        <div class="card">

                            <div class="card-header">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h4 class="title">Routes</h4>
                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <table id="routes" class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>Method</th>
                                                    <th>URI</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                    <th>Middleware</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($routes as $route)
                                                    <tr>
                                                        <td class="d-i-f">
                                                            @foreach ($route['methods'] as $method)
                                                                @if($method == "GET" || $method == "HEAD")
                                                                    <label class="badge badge-success">{{ $method }}</label>
                                                                @elseif($method == "PUT" || $method == "PATCH")
                                                                    <label class="badge badge-info">{{ $method }}</label>
                                                                @elseif($method == "POST")
                                                                    <label class="badge badge-warning">{{ $method }}</label>
                                                                @elseif($method == "DELETE")
                                                                    <label class="badge badge-danger">{{ $method }}</label>
                                                                @endif
                                                            @endforeach
                                                        </td>
                                                        <td>
                                                            {{ $route['uri'] }}
                                                        </td>
                                                        <td>
                                                            {{ $route['name'] }}
                                                        </td>
                                                        <td>
                                                            {{ $route['action'] }}
                                                        </td>
                                                        <td>
                                                            {{ $route['middleware'] }}
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="{{ asset('vendor/route-list/js/app.js') }}"></script>
    <script src="{{ asset('vendor/route-list/js/dt_script.js') }}"></script>
</body>
</html>
