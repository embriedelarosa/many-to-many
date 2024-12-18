<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progresses and Chapters</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            vertical-align: top;
        }
        th {
            background-color: #f4f4f4;
            text-align: left;
        }
        ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <h2>Progresses and Chapters</h2>
    <table>
        <thead>
            <tr>
                <th>Progresses</th>
                <th>Chapters</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($progresses as $progress)
                <tr>
                    <td><strong>{{ $progress->completion_percentage }}%</strong></td>
                    <td>
                        <ul>
                            @foreach ($progress->chapters as $chapter)
                                <li><strong>{{ $chapter->title }}:</strong> {{ $chapter->content }}</li>
                            @endforeach
                        </ul>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $progresses->links() }}
    </div>
</body>
</html>


