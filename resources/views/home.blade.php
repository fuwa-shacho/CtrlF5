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
            background: #f7f7f5;
            font-family: Arial, "Hiragino Kaku Gothic ProN", sans-serif;
            color: #222;
        }

        .home {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px;
        }

        .logo {
            font-size: 48px;
            font-weight: 700;
            letter-spacing: -2px;
            margin-bottom: 50px;
        }

        h1 {
            font-size: 52px;
            line-height: 1.4;
            margin: 0;
            font-weight: 700;
        }

        p {
            margin-top: 30px;
            color: #888;
            font-size: 15px;
        }

        .start-button {
            display: inline-block;
            margin-top: 35px;
            padding: 15px 32px;
            border-radius: 999px;
            background: #222;
            color: white;
            text-decoration: none;
            font-size: 15px;
        }

        .start-button:hover {
            opacity: 0.8;
        }
    </style>
</head>

<body>

    <livewire:home-page />

</body>
</html>