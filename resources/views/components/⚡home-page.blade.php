<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="home">
    <div class="logo">CtrlF5</div>

    <h1>
        あなたのCtrlF5は<br>
        世界に利益をもたらします
    </h1>

    <p>
        何が出てくるかは、あなた次第。
    </p>

    <a href="/reload" class="start-button">
        ポチる
    </a>
</div>

<style>
    * {
        box-sizing: border-box;
    }

    .home {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: #f7f7f5;
        font-family: Arial, "Hiragino Kaku Gothic ProN", sans-serif;
        color: #222;
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