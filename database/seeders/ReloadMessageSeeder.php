<?php

namespace Database\Seeders;

use App\Models\ReloadMessage;
use Illuminate\Database\Seeder;

class ReloadMessageSeeder extends Seeder
{
    public function run(): void
    {
        ReloadMessage::query()->delete();
        
        $messages = [
            [
                'category' => '豆知識',
                'message' => 'ペンギンには膝があります。',
                'emoji' => '🐧',
            ],
            [
                'category' => '豆知識',
                'message' => 'バナナは植物学的にはベリーです。',
                'emoji' => '🍌',
            ],
            [
                'category' => '豆知識',
                'message' => '猫は甘さを感じることができません。',
                'emoji' => '🐱',
            ],
            [
                'category' => '豆知識',
                'message' => 'カラスは人間の顔を覚えることができます。',
                'emoji' => '🐦',
            ],
            [
                'category' => 'あるある',
                'message' => '「あと5分」は、だいたい5分ではありません。',
                'emoji' => '😂',
            ],
            [
                'category' => '宇宙',
                'message' => '宇宙では、涙は普通に流れ落ちません。',
                'emoji' => '🚀',
            ],
            [
                'category' => '豆知識',
                'message' => 'タコには心臓が3つあります。',
                'emoji' => '🐙',
            ],
            [
                'category' => '豆知識',
                'message' => 'ハチミツは適切に保存すれば非常に長期間保存できます。',
                'emoji' => '🍯',
            ],
            [
                'category' => '豆知識',
                'message' => 'キリンの首の骨の数は、人間と同じ7個です。',
                'emoji' => '🦒',
            ],
            [
                'category' => '豆知識',
                'message' => 'イルカは眠っている間も呼吸するため、脳の半分ずつを休ませます。',
                'emoji' => '🐬',
            ],
            [
                'category' => '動物',
                'message' => 'ナマケモノは泳ぐことができます。',
                'emoji' => '🦥',
            ],
            [
                'category' => '動物',
                'message' => 'カメレオンは周囲の環境だけでなく、感情や体調によっても体色が変化します。',
                'emoji' => '🦎',
            ],
            [
                'category' => '科学',
                'message' => '雷の温度は、太陽の表面温度より高くなることがあります。',
                'emoji' => '⚡',
            ],
            [
                'category' => '科学',
                'message' => '水は凍ると体積が増えます。',
                'emoji' => '🧊',
            ],
            [
                'category' => '宇宙',
                'message' => '金星では、1日の長さが1年より長いです。',
                'emoji' => '🪐',
            ],
            [
                'category' => '宇宙',
                'message' => '月には地球のような大気がほとんどありません。',
                'emoji' => '🌕',
            ],
            [
                'category' => '食べ物',
                'message' => 'ポップコーンはトウモロコシの一種から作られています。',
                'emoji' => '🍿',
            ],
            [
                'category' => '食べ物',
                'message' => 'イチゴの表面にある小さな粒は、植物学的には果実です。',
                'emoji' => '🍓',
            ],
            [
                'category' => 'あるある',
                'message' => 'スマホを探しているとき、スマホを手に持っていることがあります。',
                'emoji' => '📱',
            ],
            [
                'category' => 'あるある',
                'message' => '「ちょっとだけ休憩」のちょっとは、意外と長いです。',
                'emoji' => '😴',
            ],
        ];

        foreach ($messages as $message) {
            ReloadMessage::create($message);
        }
    }
}