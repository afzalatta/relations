<html>
    <head>
        <style>
            .bordered-table {
                border-collapse: collapse;
                width: 30%;
            }

            .bordered-table th,
            .bordered-table td {
                border: 1px solid black;
                padding: 2px;
                text-align: center;
            }
        </style>

    </head>
      <body>



    <table class=" bordered-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Details</th>
            <th>User Id</th>
            <th>Category Id</th>
            <th>Product Id</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>
                    <ul>
                        @foreach ($user->order as $order)
                           {{ $order->details }}

                        @endforeach


                    </ul>
                </td>

                <td>

                    <ul>
                        @foreach ($user->order as $order)
                            {{ $order->user_id}}

                        @endforeach
                    </ul>
                </td>

                <td>

                    <ul>
                        @foreach ($user->order as $order)
                            {{ $order->category->name}}

                        @endforeach
                    </ul>
                </td>

                <td>

                    <ul>
                        @foreach ($user->order as $order)
                            {{ $order->product->name}}

                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
      </body>







</html>
