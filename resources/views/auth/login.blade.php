<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <div class="flex flex-col items-center justify-center py-28 gap-5">
        <h1 class="text-slate-900 font-bold">XYShop-Signin</h1>
        <form action="{{route('loginUser')}}" method="post" class="flex flex-col items-center border border-slate-900 shadow-md rounded-md p-10 w-1/3 gap-4">
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif
            @if (session('fail'))
            <div class="alert alert-success">
                {{ session('fail') }}
            </div>
            @endif
            
            @csrf
            <div class="self-start flex gap-2 w-full">
                <label for="">UserName:</label>
                <input type="text" name="UserName" value="{{old('UserName')}}" class="outline-none border border-slate-500 rounded-md w-full" required>
            </div>
            <div class="self-start flex gap-2 w-full">
                <label for="">Password:</label>
                <input type="password" name="Password" value="{{old('Password')}}" class="outline-none border border-slate-500 rounded-md w-full" required>
            </div>
            <input type="submit" value="Login" class="p-2 w-full bg-blue-400 text-white rounded-md cursor-pointer hover:bg-blue-500">
        </form>
    </div>
</body>

</html>