<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Pagination</title>
</head>

<body>
    <div class="container">
        <h1>Customer</h1>
        <div class="card">
            <div class="card_header">

            </div>
            <div class="card_body">
                <table class='table table-bordered table-striped table-hover'>
                    <thead>
                        <tr>
                            <th>Costumer name</th>
                            <th>Contact name</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Post code</th>
                            <th>Country</th>
                        </tr>
                    </thead>

                    <?php
                    $i = 1;
                    ?>
                    @foreach ($customers as $customer)
                        <tr>
                            <td>{{ $customer->id }}</td>
                            <td>{{ $customer->customer_name }}</td>
                            <td>{{ $customer->contact_name }}</td>
                            <td>{{ $customer->address }}</td>
                            <td>{{ $customer->city }}</td>
                            <td>{{ $customer->postal_code }}</td>
                            <td>{{ $customer->country }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>

            <div class="card_footer">
                <div class="container">{{ $customers->links() }}</div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>
