<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create</title>
</head>

<body>
    <h3>create new user</h3>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <input type="text" name="name" placeholder="Full name" value="{{ old('name') }}">
            @error('name')
                <p>
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}">
            @error('email')
                <p>
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <select name="active" value="{{ old('active') }}">
                <option value="1">active</option>`
                <option value="0">inactive</option>
            </select>
            @error('active')
                <p>
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <select name="company_id" value="{{ old('company') }}">
                <option value="">choose a company</option>
                @foreach ($companies as $company)
                    <option value="{{ $company->id }}">
                        {{ $company->name }}
                    </option>
                @endforeach
            </select>
            @error('company')
                <p>
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" name="password" placeholder="Password" value="{{ old('password') }}">
            @error('password')
                <p>
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Confirm Password"
                value="{{ old('password_confirmation') }}">
            @error('password_confirmation')
                <p>
                    {{ $message }}
                </p>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit">Save</button>
        </div>
    </form>
</body>

</html>
