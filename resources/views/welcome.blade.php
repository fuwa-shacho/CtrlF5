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
            font-family:
                Arial,
                "Hiragino Kaku Gothic ProN",
                "Yu Gothic",
                sans-serif;
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
            margin-bottom: 10px;
        }

        .subtitle {
            color: #888;
            font-size: 14px;
            margin-bottom: 45px;
        }

        .card {
            background: white;
            border-radius: 20px;
            padding: 55px 40px;
            box-shadow: 0 10px 35px rgba(0, 0, 0, 0.06);
        }

        .emoji {
            font-size: 52px;
            margin-bottom: 25px;
        }

        .message {
            font-size: 22px;
            line-height: 1.8;
            font-weight: 600;
        }

        .reload-button {
            margin-top: 35px;
            padding: 13px 30px;
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
    </style>
</head>

<body>

<div class="container">

    <div class="logo">
        CtrlF5
    </div>

    <div class="subtitle">
        "あなたの好奇心をリロードします"
    </div>

    <div class="card">
        <livewire:reload-page />
    </div>

</div>

</body>
</html>