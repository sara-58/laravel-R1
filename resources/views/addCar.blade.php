<!DOCTYPE html>
<html lang="en">

<head>
    <title>{{ __('messages.pageTitle') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <div>
            <a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a>
            <a href="{{ LaravelLocalization::getLocalizedURL('ar') }}">العربية</a>
        </div>
        <h2>{{ __('messages.pageTitle') }} 🚘</h2>
        <form action="{{route('storeCar')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <h2 class="text-center">🚗 {{ __('messages.Title') }} 🚗</h2>
                <label for="title">{{ __('messages.Title') }} : </label>
                <input type="text" class="form-control" id="title" placeholder="Enter title" name="carTitle" value="{{old('carTitle')}}">
                @error('carTitle')
                <div class="alert alert-info">
                    {{ __('messages.msgTitle') }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <h2 class="text-center"> 💵 {{ __('messages.Price') }} 💵</h2>
                <label for="price">{{ __('messages.Price') }} : </label>
                <input type="number" class="form-control" id="price" placeholder="Enter Price" name="carPrice" value="{{old('carPrice')}}">
                @error('carPrice')
                <div class="alert alert-danger">
                    {{ __('messages.msgPrice') }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <h2 class="text-center">{{ __('messages.Description') }} 📝 </h2>
                <label for="description">{{ __('messages.Description') }} : </label>
                <textarea class="form-control" rows="5" id="description" placeholder="Enter description" name="description" value="{{old('description')}}"></textarea>
                @error('description')
                <div class="alert alert-success">
                    {{ __('messages.msgDescription') }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <h2 class="text-center">{{ __('messages.Image') }} 🖼 </h2>
                <label for="image">{{ __('messages.Image') }} : </label>
                <input type="file" class="form-control" id="image" name="carImage" value="{{old('carImage')}}">
                @error('carImage')
                <div class="alert alert-danger">
                    {{ __('messages.msgImage') }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <br><h2 class="text-center">{{ __('messages.Category') }} 🚙🚌🚓</h2>
                <label for="category">{{ __('messages.Category') }} : </label>
                <select name="category_id" id="">
                    <option value="">Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{ $category->id}}">{{$category->categoryName}}</option>
                    @endforeach
                </select>
                @error('category_id')
                <div class="alert alert-danger">
                    {{ __('messages.msgCategory') }}
                </div>
                @enderror
            </div>
            <h2 class="text-center">{{ __('messages.Published') }} 📢</h2>
            <div class="checkbox">
                <label><input type="checkbox" name="published">{{ __('messages.Published') }}:</label>
            </div>
            <button type="submit" class="btn btn-default">{{ __('messages.addButton') }}</button>
        </form>
    </div>

</body>

</html>