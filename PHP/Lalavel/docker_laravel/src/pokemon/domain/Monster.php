<?php
namespace Domain;

require_once __DIR__ . '/IMonster.php';

use Exception;
use InvalidArgumentException;
use LengthException;


class Monster implements IMonster {
    private string $s_name;
    private int $i_hp;
    private array $r_status;
    private bool $is_ally;

    const I_DEFAULT_HP = 100;

    public function __construct(string $s_name = 'あああ', bool $is_ally)
    {
        if(empty($s_name)){
            throw new InvalidArgumentException("名前が不正です。");
        }

        if(mb_strlen($s_name) >= 7){
            throw new LengthException("名前が長すぎます");
        }

        $i_hp = self::I_DEFAULT_HP;

        if($i_hp <= 0){
            throw new Exception("hpが不正な値です");
        }

        $this->s_name = $s_name;
        $this->i_hp = mt_rand(100, 150);
        $this->is_ally = $is_ally;

        $this->r_status = [
            'power' => mt_rand(1, 100),
            'i_speed' => mt_rand(1, 100)
        ];
    }

    public function skill(Monster $monster)
    {
        echo $this->s_name . 'の攻撃！！</br>';
        echo $monster->get_name() . 'に、' . $monster->get_power() . 'のダメージ</br>';
        $monster->damage($monster->r_status['power']);
    }

    public function damage(int $i_damage): void
    {
        $this->i_hp -= $i_damage;
    }

    public function is_arrive(): bool
    {
        return $this->i_hp >= 0;
    }

    public function get_name()
    {
        return $this->s_name;
    }

    public function get_hp()
    {
        return $this->i_hp;
    }

    public function get_power()
    {
        return $this->r_status['power'];
    }

    public function get_speed(): int
    {
        return $this->r_status['i_speed'];
    }

    public function judge_ally(): bool
    {
        return $this->is_ally;
    }


}