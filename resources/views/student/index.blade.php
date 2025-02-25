<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    Hello World!

    <?php
    // dd($data);
    ?>

    @php
        // dd($data);
    @endphp

    <div class="container mt-3">
        <h2>Basic Table</h2>
        <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>
        <table class="table">
            <thead>
                <tr>
                    <th width="10%">ID</th>
                    <th>NAME</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $value)    
                <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['name']}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
