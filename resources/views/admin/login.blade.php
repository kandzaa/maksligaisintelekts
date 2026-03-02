<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - MZ Admin</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: #0a0a0a;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }
        
        .login-container {
            background: #1a1a1a;
            padding: 3rem;
            border-radius: 0;
            width: 100%;
            max-width: 400px;
            border: 1px solid #333;
        }
        
        .login-header {
            text-align: center;
            margin-bottom: 2.5rem;
        }
        
        .login-header h2 {
            color: #fff;
            font-weight: 300;
            font-size: 1.5rem;
            letter-spacing: 0.5px;
        }
        
        .login-header p {
            color: #666;
            font-size: 0.875rem;
            margin-top: 0.5rem;
        }
        
        .form-label {
            color: #999;
            font-size: 0.875rem;
            margin-bottom: 0.5rem;
            display: block;
        }
        
        .form-control {
            background: #2a2a2a;
            border: 1px solid #444;
            border-radius: 0;
            padding: 1rem;
            color: #fff;
            font-size: 0.875rem;
            width: 100%;
            transition: border-color 0.2s;
        }
        
        .form-control:focus {
            outline: none;
            border-color: #666;
            background: #2a2a2a;
        }
        
        .btn-login {
            background: #fff;
            color: #000;
            border: none;
            border-radius: 0;
            padding: 1rem;
            font-weight: 500;
            font-size: 0.875rem;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.2s;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        .btn-login:hover {
            background: #f0f0f0;
        }
        
        .alert {
            background: #2a1a1a;
            border: 1px solid #444;
            color: #ff6b6b;
            padding: 1rem;
            margin-bottom: 1.5rem;
            font-size: 0.875rem;
        }
        
        .alert-danger {
            background: #2a1a1a;
            border-color: #ff6b6b;
        }
        
        .text-muted {
            color: #666 !important;
        }
        
        .mb-3 {
            margin-bottom: 1.5rem;
        }
        
        .mt-3 {
            margin-top: 1.5rem;
        }
        
        .text-center {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-header">
            <h2>MZ ADMIN</h2>
            <p>Enter your credentials</p>
        </div>
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.login.post') }}">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">EMAIL</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">PASSWORD</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            
            <button type="submit" class="btn-login">LOGIN</button>
        </form>
        
    </div>
</body>
</html>
