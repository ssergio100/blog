<html>
<head>
    <title>@yield('title')</title>
    @stack('bootstrap-css')
    @stack('datatable-css')
</head>
<body>
<div class="container">


    <table id="myTable">
        <thead>
        <tr>
            <th>#id</th>
            <th>Nome</th>
            <th>Número</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->number or ''}}</td>
            </tr>

        @endforeach
        </tbody>
    </table>

    @yield('content')
    @stack('jquery')
    @stack('bootstrap-js')
    @stack('datatable-js')
</div>

</body>
</html>