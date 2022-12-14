<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class TestUnit extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('unit_test');
        //Do your magic here
    }
    private function calDisc($disRate, $oriPrice)
    {
        # code...
        $disc = $oriPrice * $disRate/100;
        return $oriPrice-$disc;
    }

    private function wordCounter($sentence)
    {
        // return count(explode(" ", $sentence));
        return str_word_count($sentence);
    }
    public function testWordCounter()
    {
        $test = $this->wordCounter("name andi");
        $expeted_result = 2;
        $test_name= "Word Counter";
        echo $this->unit->run($test, $expeted_result, $test_name);
    }


    public function testCalDis()
    {
        $test = $this->calDisc(50, 1000);
        $expeted_result = 500;
        $test_name= "Calculate Discount";
        echo $this->unit->run($test, $expeted_result, $test_name);
    }

}

/* End of file TestUnit.php */