<!DOCTYPE html>
<html>
<head>
    <title>Studio Ghibli Movies</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #ddd;
        }
        .title {
            font-weight: bold;
            color: #2c3e50;
        }
        .year, .director {
            color: #16a085;
        }
    </style>
</head>
<body>
    <h1>Studio Ghibli Movies</h1>
    <table>
        <tr>
            <th>Title</th>
            <th>Year</th>
            <th>Director</th>
        </tr>
        @foreach ($movies as $movie)
            <tr>
                <td class="title">{{ $movie['title'] }}</td>
                <td class="year">{{ $movie['year'] }}</td>
                <td class="director">{{ $movie['director'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
