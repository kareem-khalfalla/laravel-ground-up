<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contact</title>
</head>

<body>
    <h3>keep in touch</h3>
    <form action="{{ route('contact.store') }}" method="POST">
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
            <textarea name="message" cols="15" rows="5" placeholder="Type your message...">{{ old('message') }}</textarea>
            @error('email')
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
