<?php

use App\Models\ReloadMessage;
use App\Models\DailyUsage;
use Livewire\Component;
use Carbon\Carbon;

new class extends Component
{
    public $message = 'ペンギンには膝があります。';
    public $emoji = '🐧';
    public $count = 0;
    public $limit = 10;
    public $finished = false;
    public $limitEnabled = true;
    public $password = '';
    public $passwordError = false;
    public $unlocked = false;

    public function mount()
    {
        $today = Carbon::today();

        $usage = DailyUsage::firstOrCreate(
            ['used_date' => $today],
            [
                'count' => 0,
                'limit' => rand(5, 15),
            ]
        );

        $this->count = $usage->count;
        $this->limit = $usage->limit;

        if ($this->count >= $this->limit) {
            $this->finished = true;
        }
    }

    public function reload()
    {
        if ($this->finished) {
            return;
        }

        $usage = DailyUsage::where(
            'used_date',
            Carbon::today()
        )->first();

        if ($this->limitEnabled && (!$usage || $usage->count >= $usage->limit)) {
            $this->finished = true;
            return;
        }

        $usedMessageIds = \App\Models\DailyMessageUsage::where(
            'used_date',
            Carbon::today()
        )->pluck('reload_message_id');

        $random = ReloadMessage::whereNotIn('id', $usedMessageIds)
            ->inRandomOrder()
            ->first();

        if (!$random) {
            \App\Models\DailyMessageUsage::where(
                'used_date',
                Carbon::today()
            )->delete();

            $random = ReloadMessage::inRandomOrder()->first();
        }

        if ($random) {
            $this->message = $random->message;
            $this->emoji = $random->emoji;

            \App\Models\DailyMessageUsage::create([
                'used_date' => Carbon::today(),
                'reload_message_id' => $random->id,
            ]);
        }

        $usage->increment('count');
        $this->count++;

        if ($this->limitEnabled && $this->count >= $this->limit) {
            $this->finished = true;
        }
        }

        public function unlock()
        {
        if ($this->password === '1234') {
            $this->limitEnabled = false;
            $this->unlocked = true;
            $this->finished = false;
            $this->passwordError = false;
        } else {
            $this->passwordError = true;
        }
    }
};
?>
<div>
    @if (!$unlocked && $count >= $limit)
        <div class="unlock-area">
            <input
                type="password"
                wire:model="password"
                placeholder="制限解除パスワード"
            >

            <button wire:click="unlock">
                🔓 制限を解除
            </button>

            @if ($passwordError)
                <div class="password-error">
                    パスワードが違います。黙って帰宅してください。
                </div>
            @endif
        </div>
    @endif

    @if ($finished && !$unlocked)

        <div class="emoji">
            🌙
        </div>

        <div class="message">
            今日はここまで。
        </div>

        <div class="finished-message">
            今日の好奇心は十分チャージされました。<br>
            また明日、CtrlF5してください。またのご来店楽しみにしております♡
        </div>

        <div class="count">
            今日のリロード回数 {{ $count }} / {{ $limit }}回
        </div>
        <div class="count">
            @if ($unlocked)
                リロード回数 {{ $count }}回
            @else
                リロード回数 {{ $count }} / {{ $limit }}回
            @endif
        </div>
    @else

        <div class="emoji">
            {{ $emoji }}
        </div>

        <div class="message">
            {{ $message }}
        </div>

        <button class="reload-button" wire:click="reload">
            ↻ もう一回
        </button>

        <div class="count">
            リロード回数 {{ $count }} / {{ $limit }}回
        </div>

    @endif
</div>