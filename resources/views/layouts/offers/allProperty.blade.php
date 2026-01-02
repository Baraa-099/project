<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>

    <!-- Bootstrap CSS -->
    <link href="https:

    <!-- Font Awesome -->
    <link href="https:

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('contact') }}">
                <i class="fas fa-home me-2"></i>Properties
            </a>
            <div class="ms-auto">
                <span class="badge bg-light text-dark fs-6">
                    <i class="fas fa-building me-1"></i> {{ $add->count() }} Properties
                </span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="hero-title">Discover Your Dream Property</h1>
            <p class="hero-subtitle">
                Browse our exclusive collection of premium properties. Find the perfect home that matches your lifestyle and budget.
            </p>
        </div>
    </section>



    <!-- Main Content -->
    <main class="container">
{{-- ........................................................ --}}
<!-- Search Box -->
<div class="container mb-4">
    <form method="GET" action="{{ route('Property.all') }}">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="input-group input-group-lg shadow-sm">
                    <input type="text"
                           name="search"
                           class="form-control"
                           placeholder="Search by title, address or type..."
                           value="{{ request('search') }}">

                    <button class="btn btn-dark" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </div>

            </div>
        </div>
    </form>
</div>


        <!-- Properties Section -->
        <h2 class="section-title">All Properties</h2>

        <!-- Properties Grid -->
        <div class="cards">
            @foreach($add as $property)
            <div class="property-card">
                <!-- Property Image -->
                <div class="card-image">
                  <img src="{{ asset('uploads/properties/' . $property->Image) }}"
     alt="{{ $property->Property_Title }}">
                    <div class="property-badge">{{ $property->Property_Type }}</div>
                    <div class="status-badge status-{{ strtolower($property->Status) }}">
                        {{ $property->Status }}
                    </div>
                </div>

                <!-- Property Details -->
                <div class="card-content">
                    <!-- Title and Location -->
                    <h3 class="property-title">{{ $property->Property_Title }}</h3>
                    <div class="property-location">
                        <i class="fas fa-map-marker-alt"></i> {{ $property->Street_Address }}
                    </div>

                    <!-- Description -->
                    <p class="property-description">
                        @php
                            $description = $property->Description;
                            $shortDescription = strlen($description) > 120 ? substr($description, 0, 117) . '...' : $description;
                        @endphp
                        {{ $shortDescription }}
                    </p>

                    <!-- Features -->
                    <div class="property-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-bed"></i>
                            </div>
                            <div class="feature-label">Bedrooms</div>
                            <div class="feature-value">{{ $property->Bedrooms }}</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-bath"></i>
                            </div>
                            <div class="feature-label">Bathrooms</div>
                            <div class="feature-value">{{ $property->Bathrooms }}</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-ruler-combined"></i>
                            </div>
                            <div class="feature-label">Square Feet</div>
                            <div class="feature-value">{{ $property->Square_Feet }}</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-layer-group"></i>
                            </div>
                            <div class="feature-label">Floor</div>
                            <div class="feature-value">{{ $property->floor }}</div>
                        </div>
                    </div>

                    <!-- Price -->
                    <div class="price-tag">
                        ${{ number_format($property->Price, 2) }}

                    </div>

                    <!-- Additional Info -->
                    <div class="property-meta">
                            <p class="meta-value">Contact Number:{{ $property->phone_num }}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </main>
<!-- Add Special Property Section -->
<div class="container mt-5 mb-5">

    <!-- Section Title -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">
            <i class="fas fa-star text-warning me-2"></i>
           Request Special Property
        </h2>
        <p class="text-muted">
            Add a special property with details below
        </p>
    </div>

    <!-- Form Card -->
    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card shadow-lg border-0">
                <div class="card-body p-4">



                    <form action="{{ route('result.store') }}" method="POST">
                        @csrf

                        <!-- Number -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                <i class="fas fa-align-left me-1"></i> Number Phone
                            </label>
                            <input type="number" name="number"
                                   class="form-control form-control-lg"
                                   placeholder="Enter your number phone " required>
                        </div>

                        <!-- Description -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold">
                                <i class="fas fa-align-left me-1"></i> Description
                            </label>
                            <textarea name="description"
                                      class="form-control"
                                      rows="4"
                                      placeholder="Enter spicial description" required></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="d-grid" >
                            <button type="submit" class="navbar navbar-expand-lg" style="justify-content: center;">

                                <div > Add Property</div>

                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</div>


</body>
</html>
