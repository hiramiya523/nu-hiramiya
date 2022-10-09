<?php
namespace Domain\Service;
require_once __DIR__ . '/../Monster.php';
use Domain\Monster;

class Battle {
    private static Battle $o_instance;
    private Monster $o_player;
    private Monster $o_enemy;
    private $b_is_player_win;

    private function __construct(Monster $player, Monster $enemy)
    {
        $this->o_player = $player;
        $this->o_enemy = $enemy;
    }

    public static function get_singleton(Monster $player, Monster $enemy)
    {
        if(!isset(self::$o_instance)){
            self::$o_instance = new Battle($player, $enemy);
        }

        return self::$o_instance;
    }

    /**
     * @return Monster winner
     */
    public function attack(): ?Monster
    {
        if($this->o_player->get_speed() >= $this->o_enemy->get_speed()){
            // player先制
            // player
            $this->o_player->skill($this->o_enemy);
            if(!$this->o_enemy->is_arrive()){
                return $this->o_player;
            }

            // 敵攻撃
            $this->o_enemy->skill($this->o_player);
            if(!$this->o_player->is_arrive()){
                return $this->o_enemy;
            }

        }else{
            // 敵攻撃先制
            // 敵攻撃
            $this->o_enemy->skill($this->o_player);
            if(!$this->o_player->is_arrive()){
                return $this->o_enemy;
            }

            // player
            $this->o_player->skill($this->o_enemy);
            if(!$this->o_enemy->is_arrive()){
                return $this->o_player;
            }
        }

        return null;
    }

    // public function battle_over(Type $var = null)
    // {
    //     # code...
    // }
}