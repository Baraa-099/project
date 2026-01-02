<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add New Property</title>
    <link rel="stylesheet" href="{{ asset('css/styleadd.css') }}">
    {{-- bootstrap --}}
                <link href="https:

</head>
<body>
 @if (Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{session()->get('success'); }}
            </div>

            @endif
<div class="container">
    <h2 style="color:#2f6f64">🏠 <b>edit Property</b></h2>

    <form method="POST" action="{{ route('Property.update',$property->id) }} " enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Property Title</label>
            <input type="text" name="Property_Title" placeholder="Beautiful Family Home" value="{{ $property ->Property_Title  }}">
             @error('Property_Title')
    <small class="form-text text-danger">{{$message}} </small>
    @enderror
        </div>

        <div class="form-group">
            <label>Description</label>
                        <input type="text" name="Description" placeholder="Describe the property..." value="{{ $property ->Description  }}">
             @error('Description')
    <small class="form-text text-danger">{{$message}} </small>
    @enderror
        </div>

        <div class="grid-2">
            <div class="form-group">
                <label>Price</label>
                <input type="number" name="Price" placeholder="500000" value="{{ $property ->Price  }}">
                 @error('Price')
    <small class="form-text text-danger">{{$message}} </small>
    @enderror
            </div>

            <div class="form-group">
                <label>Property Type</label>
                <input type="text" name="Property_Type" placeholder="Home,Apartment,Villa,Floor,shop,......"value="{{ $property ->Property_Type  }}">
                 @error('Property_Type')
    <small class="form-text text-danger">{{$message}} </small>
    @enderror
            </div>

        </div>

        <div class="form-group">
            <label>Street Address</label>
            <input type="text" name="Street_Address" placeholder=" Main St" value="{{ $property ->Street_Address  }}">
              @error('Street_Address')
    <small class="form-text text-danger">{{$message}} </small>
    @enderror
        </div>

        <div class="grid-2">
            <div class="form-group">
                <label>phone_num</label>
                <input type="number" placeholder="09...." name="phone_num" value="{{ $property ->phone_num  }}">
                 @error('phone_num')
    <small class="form-text text-danger">{{$message}} </small>
    @enderror
            </div>

            <div class="form-group">
                <label>floor</label>
                <input type="number" placeholder="1.2.3.4.5......." name="floor"value="{{ $property ->floor  }}">
                  @error('floor')
    <small class="form-text text-danger">{{$message}} </small>
    @enderror
            </div>
        </div>

        <div class="grid-3">
            <div class="form-group">
                <label>Bedrooms</label>
                <input type="number" placeholder="3" name="Bedrooms" value="{{ $property ->Bedrooms  }}">
                  @error('Bedrooms')
    <small class="form-text text-danger">{{$message}} </small>
    @enderror
            </div>

            <div class="form-group">
                <label>Bathrooms</label>
                <input type="number" step="0.5" placeholder="2" name="Bathrooms" value="{{ $property ->Bathrooms  }}">
                    @error('Bathrooms')
    <small class="form-text text-danger">{{$message}} </small>
    @enderror
            </div>

            <div class="form-group">
                <label>Square Feet</label>
                <input type="number" placeholder="2000" name="Square_Feet" value="{{ $property ->Square_Feet  }}">
                     @error('Square_Feet')
    <small class="form-text text-danger">{{$message}} </small>
    @enderror
            </div>
        </div>

        <div class="grid-2">


            <div class="form-group">
                <label>Status</label>
                <input type="text" placeholder="Available,Sold,rented,..." name="Status" value="{{ $property ->Status  }}">
                    @error('Status')
    <small class="form-text text-danger">{{$message}} </small>
    @enderror
            </div>

           <div class="form-group">
    <label>add Property Image</label>
    <input type="file" name="Image" class="form-control" accept="image/*">
                @error('Image')
    <small class="form-text text-danger">{{$message}} </small>
    @enderror
    @error('Image')
        <small class="form-text text-danger">{{ $message }}</small>
    @enderror
</div>
        </div>

        <div class="buttons">
            <button type="submit" class="btn-primary">edit Property</button>
            <a href="{{ route('dashboard') }}"><button type="button" class="btn-secondary">Cancel</button></a>

        </div>
    </form>
</div>

</body>
</html>
