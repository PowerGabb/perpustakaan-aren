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
        <tr>
            <td>
                <img src="data:image/png;base64,{{ DNS1D::getBarcodePNG($data->book_code, 'CODABAR') }}" alt="image">
                <p>{{ $data->title }} {{$data->book_code}}</p>
            </td>
        </tr>
    </table>

</body>

</html>