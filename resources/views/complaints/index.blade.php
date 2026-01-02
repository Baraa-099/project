<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض الشكاوي</title>
    <link href="https:
    <link rel="stylesheet" href="https:

</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4" style="color:#2f6f64">📋 Complaints list</h1>

        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark" >
                    <tr>
                        <th style="background-color:#2f6f64">#</th>
                        <th style="background-color:#2f6f64">coplaint</th>
                        <th style="background-color:#2f6f64">User</th>
                        <th style="background-color:#2f6f64">Email</th>
                        <th style="background-color:#2f6f64">date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($complaints as $complaint)
                    <tr>
                        <td>{{ $complaint->id }}</td>
                        <td>{{ $complaint->description }}</td>
                        <td>{{ $complaint->user_name }}</td>
                        <td>{{ $complaint->user_email }}</td>



                        <td>{{ $complaint->created_at->format('Y-m-d') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

<div style="text-align: left"><a href="{{ route('dashboard') }}" class="btn btn-secondary" style="background-color:#2f6f64">Back</a>
</div>


    </div>
</body>
</html>
