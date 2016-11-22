<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class codilityController extends Controller
{

    function time_elapsed()
    {
        static $last = null;

        $now = microtime(true);

        if ($last != null) {
            echo ($now - $last) . '<br>';
        }

        $last = $now;
    }

    public function binaryGap($n)
    {
        $this->time_elapsed();

        $input = decbin($n);
        $result = '';
        $max = strlen($input);

        for ($i=0 ; $i<$max ; $i++) {
            if ($input[$i] == '1') {
                $count = 0;
                for ($j=$i+1;$j<$max;$j++) {
                    if ($input[$j] == '0') $count++;
                    elseif ($input[$j] == '1') break;

                    if ($j == $max-1 && $input[$j] == '0') $count = 0;
                }
                if ($count != 0) $result .= $count;
            }
        }
        if (empty($result)) $result = '0';

        $this->time_elapsed();

        print_r('Input Data - ' . $n . '<br>');
        print_r('Binary Data - ' . $input. '<br>');
        print_r('Return - ' . $result. '<br>');
    }

    public function binaryGap2($n)
    {
        $this->time_elapsed();
        $input = decbin($n);

        $counts = explode('1', $input);

        if (!($n%2)) array_pop($counts);

        foreach ($counts as $i=>$count) {
            $counts[$i] = strlen($counts[$i]);
        }
        $result = max($counts);

        $this->time_elapsed();

        print_r('Input Data - ' . $n . '<br>');
        print_r('Binary Data - ' . $input. '<br>');
        print_r('Return - ' . $result. '<br>');
    }

    public function cyclicRotation($A=null, $K=null)
    {
        $A = [3, 8, 9, 7, 6];
        $K = 4;
        $size = sizeof($A);
        var_dump($A);

        if (empty($A)) return null;

        if ($size == $K) dd($A);

        $index = $size - ($K%$size);
        $temp = array_splice($A, $index);

        $result = array_merge($temp, $A);
        dd($result);
    }

    public function oddOccurrencesInArray($A=null)
    {
        $A = [2,2,3,3,4];
        sort($A);
        $result = $A[0];

        for($i=0; $i < count($A); $i++) {
            if($i == count($A) - 1) {
                return $A[$i];
            }

            if($A[$i] == $A[$i+1]) {
                $i++;
            } else {
                return $A[$i];
            }
        }

        return $result;
    }

    public function tapeEquilibrium()
    {
        $A = [3,1,2,4,3,6,7,8,1,23,413,461,32,41,23,-1253,112346,7,8,1];
        $output = [];
        $A_count = count($A);
        $sum = array_sum($A);
        $right = 0;

        for ($i=1;$i<$A_count;$i++) {
            $right += array_pop($A);
            $left = $sum - $right;
            $output[] = abs($left-$right);
        }
        $result = min($output);
        return $result;
    }

    public function forJump()
    {
        $X=10;
        $Y=41;
        $D=30;

        $result = ceil(($Y-$X)/$D);

        return $result;
    }

    public function permMissingElem()
    {
        $this->time_elapsed();
        $A = [2,3,1,5];
        $N = count($A)+1;
        sort($A);

        $result = 1;

        for ($i=$N;$i>=1;$i--) {
            if (!in_array($i, $A)){
                $result=$i;
                break;
            }
        }
        $this->time_elapsed();

        return $result;
    }

}
