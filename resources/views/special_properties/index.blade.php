{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Properties</title>
    <link href="https:
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            max-width: 1200px;
        }

        .form-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            margin-bottom: 30px;
            overflow: hidden;
        }

        .form-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
        }

        .form-body {
            padding: 30px;
        }

        .properties-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
            overflow: hidden;
        }

        .properties-header {
            background: #2c3e50;
            color: white;
            padding: 20px;
        }

        .properties-body {
            padding: 20px;
        }

        .property-item {
            border-bottom: 1px solid #eee;
            padding: 15px 0;
            transition: background 0.3s;
        }

        .property-item:hover {
            background: #f8f9fa;
        }

        .property-item:last-child {
            border-bottom: none;
        }

        .property-number {
            font-weight: 700;
            color: #667eea;
            font-size: 1.1rem;
        }

        .property-description {
            color: #555;
            line-height: 1.6;
            margin: 5px 0;
        }

        .property-date {
            color: #888;
            font-size: 0.9rem;
        }

        .empty-state {
            text-align: center;
            padding: 40px 20px;
            color: #666;
        }

        .empty-state i {
            font-size: 50px;
            color: #ddd;
            margin-bottom: 15px;
        }
    </style>
    <link rel="stylesheet" href="https:
</head>
<body>
    <div class="container py-5">
        <!-- الرسائل -->
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check-circle me-2"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-circle me-2"></i>
                <ul class="mb-0 ps-3">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <!-- عنوان الصفحة -->
        <div class="text-center mb-5">
            <h1 class="display-5 fw-bold" style="color: #2c3e50;">
                <i class="fas fa-star text-warning me-2"></i>
                Special Properties
            </h1>
            <p class="text-muted">Add and manage special properties</p>
        </div>

        <!-- قسم الإضافة -->
        <div class="form-card">
            <div class="form-header">
                <h4 class="mb-0">
                    <i class="fas fa-plus-circle me-2"></i>
                    Add New Property
                </h4>
            </div>

            <div class="form-body">
                <form action="{{ route('special-properties.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="number" class="form-label fw-semibold">Property Number</label>
                            <input type="text"
                                   class="form-control form-control-lg"
                                   id="number"
                                   name="number"
                                   required
                                   placeholder="Enter property number"
                                   value="{{ old('number') }}">
                            <div class="form-text">Must be unique</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="description" class="form-label fw-semibold">Description</label>
                            <textarea class="form-control"
                                      id="description"
                                      name="description"
                                      rows="1"
                                      required
                                      placeholder="Enter description">{{ old('description') }}</textarea>
                        </div>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-primary btn-lg px-4">
                            <i class="fas fa-save me-2"></i>
                            Add Property
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- قسم العرض -->
        <div class="properties-card">
            <div class="properties-header d-flex justify-content-between align-items-center">
                <h4 class="mb-0">
                    <i class="fas fa-list me-2"></i>
                    Properties List
                </h4>
                <span class="badge bg-light text-dark fs-6">
                    {{ $properties->count() }} Properties
                </span>
            </div>

            <div class="properties-body">
                @if($properties->count() > 0)
                    <div class="row">
                        @foreach($properties as $property)
                        <div class="col-lg-6 mb-3">
                            <div class="property-item">
                                <div class="d-flex justify-content-between align-items-start mb-2">
                                    <div class="property-number">
                                        <i class="fas fa-hashtag me-1"></i>
                                        {{ $property->number }}
                                    </div>
                                    <div class="property-date">
                                        <i class="far fa-clock me-1"></i>
                                        {{ $property->created_at->format('M d, Y') }}
                                    </div>
                                </div>

                                <div class="property-description">
                                    {{ $property->description }}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <div class="empty-state">
                        <i class="fas fa-inbox"></i>
                        <h5 class="mt-3 mb-2">No Properties Yet</h5>
                        <p class="text-muted">Start by adding your first special property using the form above.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https:

    <!-- Auto-hide alerts -->
    <script>
        setTimeout(() => {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(alert => {
                const bsAlert = new bootstrap.Alert(alert);
                bsAlert.close();
            });
        }, 5000);
    </script>
</body>
</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Results</title>
    <link href="https:
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4" style="text-align: center;color: #2f6f64"><b>Spicial_Order</b></h2>

    <table class="table table-bordered" >
        <thead class="table-dark" >
            <tr >
                <th style="background-color:#2f6f64">#</th>
                <th style="background-color:#2f6f64">NumberPhone</th>
                <th style="background-color:#2f6f64">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
            <tr>
                <td>{{ $result->id }}</td>
                <td>{{ $result->number }}</td>
                <td>{{ $result->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('dashboard') }}" class="btn btn-secondary" style="background-color:#2f6f64">Back</a>
</div>

</body>
</html>
