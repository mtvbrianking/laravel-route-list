<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="{{ $id }}" class="table table-sm table-striped table-hover text-nowrap">
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
                                    <td>
                                        @foreach ($route['methods'] as $method)
                                            @if($method == "GET" || $method == "HEAD")
                                                <label class="badge badge-success">{{ $method }}</label>
                                            @elseif($method == "PUT" || $method == "PATCH")
                                                <label class="badge badge-info">{{ $method }}</label>
                                            @elseif($method == "POST")
                                                <label class="badge badge-warning">{{ $method }}</label>
                                            @elseif($method == "DELETE")
                                                <label class="badge badge-danger">{{ $method }}</label>
                                            @else
                                                <label class="badge badge-secondary">{{ $method }}</label>
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
