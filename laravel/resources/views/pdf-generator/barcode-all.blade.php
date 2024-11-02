<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Barcode Book</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        img {
            max-width: 250;
            height: auto;
        }

        p {
            font-size: 8px;
            margin: 0;
            width: 100px;
        }
    </style>
</head>

<body>

    <table>
        @foreach ($data as $index => $item)
            @if ($index % 3 == 0)
                <tr>
            @endif
            <td>
                <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($item->book_code, 'CODABAR') }}" alt="image">
                <p>{{ $item->title }} {{$item->book_code}}</p>
            </td>
            @if ($index % 3 == 2)
                </tr>
            @endif
        @endforeach
        @if (count($data) % 3 != 0)
            </tr>
        @endif
    </table>

</body>

</html>