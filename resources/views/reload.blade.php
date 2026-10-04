<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CtrlF5</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f7f7f5;
            font-family: Arial, "Hiragino Kaku Gothic ProN", sans-serif;
            color: #222;
        }

        .container {
            width: 90%;
            max-width: 650px;
            text-align: center;
        }

        .logo {
            font-size: 42px;
            font-weight: 700;
            letter-spacing: -2px;
            margin-bottom: 45px;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 55px 40px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.06);
        }

        .emoji {
            font-size: 50px;
            margin-bottom: 25px;
        }

        .message {
            font-size: 22px;
            line-height: 1.8;
            font-weight: 600;
        }

        .reload-button {
            margin-top: 35px;
            padding: 13px 28px;
            border: none;
            border-radius: 999px;
            background: #222;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        .reload-button:hover {
            opacity: 0.8;
        }

        .count {
            margin-top: 20px;
            font-size: 12px;
            color: #999;
        }
        .finished-message {
            margin-top: 20px;
            color: #555;
            font-size: 15px;
            line-height: 1.8;
        }

        .back {
            display: inline-block;
            margin-top: 25px;
            color: #999;
            text-decoration: none;
            font-size: 13px;
        }

        .back:hover {
            color: #222;
        }
        .unlock-area {
            margin-top: 15px;
        }

        .unlock-area input {
            padding: 10px 14px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
        }

        .unlock-area button {
            margin-left: 6px;
            padding: 10px 16px;
            border: none;
            border-radius: 8px;
            background: #eee;
            color: #333;
            cursor: pointer;
        }

        .unlock-area button:hover {
            background: #ddd;
        }

        .password-error {
            margin-top: 10px;
            color: #d66;
            font-size: 13px;
        }
    </style>
</head>

<body>

<div class="container">

    <div class="logo">CtrlF5</div>

    <div class="card">
        <livewire:reload-page />
    </div>

    <a href="/" class="back">← ホームに戻る</a>

</div>

</body>
</html>