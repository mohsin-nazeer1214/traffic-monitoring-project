<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       body {
    background-color: #f8f9fa;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: #343a40;
}

.container {
    margin-top: 50px;
}

.dashboard-header {
    margin-bottom: 40px;
    text-align: center;
}

.dashboard-header h1 {
    font-size: 2.5rem;
    font-weight: 700;
    color: #343a40;
}

.dashboard-header p {
    font-size: 1.2rem;
    color: #6c757d;
}

.card {
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: none;
}

.card-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: #495057;
}

.card-text {
    font-size: 2.5rem;
    font-weight: 700;
    color: #17a2b8;
}

.list-group-item {
    font-size: 1.1rem;
    color: #495057;
}

.list-group-item .badge {
    font-size: 1rem;
    background-color: #17a2b8;
    color: #fff;
}

.footer {
    margin-top: 50px;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    border-radius: 10px;
    color: #6c757d;
}

.footer p {
    margin: 0;
}

@media (max-width: 767.98px) {
    .card {
        margin-bottom: 20px;
    }

    .dashboard-header h1 {
        font-size: 2rem;
    }

    .dashboard-header p {
        font-size: 1rem;
    }
}

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
        }
        .card-text {
            font-size: 2rem;
            font-weight: 700;
            color: #17a2b8;
        }
        .list-group-item {
            font-size: 1.1rem;
        }
        .container {
            margin-top: 50px;
        }
        .dashboard-header {
            margin-bottom: 40px;
        }
        .dashboard-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
        }
        .badge-primary {
            background-color: #17a2b8;
        }
        .footer {
            margin-top: 50px;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="dashboard-header text-center">
            <h1 class="display-4">Dashboard</h1>
            <p class="lead">Summary of User Interactions</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total Visitors</h5>
                        <p class="card-text">{{ $totalVisitors }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Visitors by Stage</h5>
                        <ul class="list-group">
                            @foreach($stages as $stage)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ ucfirst($stage->stage) }}
                                    <span class="badge badge-primary badge-pill">{{ $stage->count }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
