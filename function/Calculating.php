<?php

Class Calculating
{
    /**
    * Function to detect problem
    */
    public function simpleAlgorithm(Array $problem)
    {
        $ram = [1,1,0,0,0,0,0,0,0,0];
        $prc = [0,0,1,1,0,0,0,0,0,0];
        $pow = [0,0,0,0,1,1,0,0,0,0];
        $chp = [0,0,0,0,0,0,1,1,0,0];
        $vga = [0,0,0,0,0,0,0,0,1,1];
        
        if (count($problem) == 10) {
            $prob = ['probRam' => 'ram', 'probPrc' => 'prc', 'probPow' => 'pow', 'probChp' => 'chp', 'probVga' => 'vga'];
            
            $probRam = 0;
            $probPrc = 0;
            $probPow = 0;
            $probChp = 0;
            $probVga = 0;
            
            // ALGORITHM START HERE
            foreach ($prob as $key => $value) {
                for ($i = 0; $i < 10; $i++) {                
                    if ($problem[$i] != 0 and $problem[$i] == ${$value}[$i]) {
                        ${$key} = ${$key} + (float)($$value[$i]/10);
                    }
                }
            }
            
            return [
                'probRam' => $probRam,
                'probPrc' => $probPrc,
                'probPow' => $probPow,
                'probChp' => $probChp,
                'probVga' => $probVga
            ];
        }
    }
}