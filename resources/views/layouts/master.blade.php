<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Manajemen Sekolah</title>
    
    <!-- Link AdminLTE CSS dari CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2.0/dist/css/adminlte.min.css">
    
    <!-- Link FontAwesome untuk ikon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <style>
        /* Custom Style */
        body {
            font-family: 'Arial', sans-serif;
        }

        .login-container {
            display: flex;
            height: 100vh;
            overflow: hidden;
        }

        .login-left {
            flex: 1;
            background: linear-gradient(to right, #007bff, #00c6ff);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .login-left h1 {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .login-left p {
            font-size: 1.2rem;
            line-height: 1.5;
            margin-top: 10px;
        }

        .login-right {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f9f9f9;
        }

        .login-box {
            width: 100%;
            max-width: 420px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            background: white;
        }

        .login-box .form-group {
            margin-bottom: 20px;
        }

        .login-box .form-control {
            border-radius: 50px;
            padding: 15px;
            font-size: 1rem;
        }

        .login-box .btn-primary {
            background-color: #28a745;
            border-color: #28a745;
            border-radius: 50px;
            padding: 15px;
            font-size: 1.1rem;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .login-box .btn-primary:hover {
            background-color: #218838;
            border-color: #218838;
        }

        .login-box .login-box-msg {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }

        .login-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #777;
        }

        .login-footer a {
            color: #007bff;
            text-decoration: none;
        }

        .login-footer a:hover {
            text-decoration: underline;
        }

        /* Responsif */
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }

            .login-left, .login-right {
                flex: 0 0 100%;
                padding: 20px;
            }

            .login-box {
                width: 100%;
                max-width: 350px;
            }
        }
    </style>
</head>