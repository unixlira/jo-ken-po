<?php

namespace App\Helpers;

use Illuminate\Support\Arr;
use App\Models\JokenpoModel;

class Judge
{

    public function decide($weapon)
    {

        $result = [];

        if(!empty($weapon)){

            $array  = [
                'pedra','papel','tesoura'
            ];
    
            $random = Arr::random($array);

            if($weapon == 'pedra' && $random == 'tesoura'){
           
                $result = [
                    "user" => "Player",
                    "weaponPlayer" => $weapon,
                    "result" => 1,
                    "weaponBot" => $random
                ];
        
            }elseif($weapon == 'papel' && $random == 'pedra'){
               
                $result = [
                    "user" => "Player",
                    "weaponPlayer" => $weapon,
                    "result" => 1,
                    "weaponBot" => $random
                ];
        
            }elseif($weapon == 'tesoura' && $random == 'papel'){
               
                $result = [
                    "user" => "Player",
                    "weaponPlayer" => $weapon,
                    "result" => 1,
                    "weaponBot" => $random
                ];
        
            }elseif($weapon == 'tesoura' && $random == 'pedra'){
    
                $result = [
                    "user" => "Bot",
                    "weaponPlayer" => $weapon,
                    "result" => 1,
                    "weaponBot" => $random
                ];
        
            }elseif($weapon == 'pedra' && $random == 'papel'){
    
                $result = [
                    "user" => "Bot",
                    "weaponPlayer" => $weapon,
                    "result" => 2,
                    "weaponBot" => $random
                ];
        
            }elseif($weapon == 'papel' && $random == 'tesoura'){
    
                $result = [
                    "user" => "Bot",
                    "weaponPlayer" => $weapon,
                    "result" => 2,
                    "weaponBot" => $random
                ];
        
            }else{
    
                $result = [
                    "user" => "EMPATE",
                    "weaponPlayer" => $weapon,
                    "result" => 3,
                    "weaponBot" => $random
                ];
            }
        }

        return $result;

    }

}
