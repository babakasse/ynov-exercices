<?php
/**
 * Created by PhpStorm.
 * User: KAB1VX2
 * Date: 24/11/2017
 * Time: 13:54
 */

class Triangle
{
    private $_cote_A;
    private $_cote_B;
    private $_cote_C;

    /**
     * Triangle constructor.
     * @param $_cote_A
     * @param $_cote_B
     * @param $_cote_C
     */
    public function __construct($_cote_A, $_cote_B, $_cote_C)
    {
        $this->_cote_A = $_cote_A;
        $this->_cote_B = $_cote_B;
        $this->_cote_C = $_cote_C;
    }

    /**
     * @return mixed
     */
    public function getCoteA()
    {
        return $this->_cote_A;
    }

    /**
     * @param mixed $cote_A
     */
    public function setCoteA($cote_A)
    {
        $this->_cote_A = $cote_A;
    }

    /**
     * @return mixed
     */
    public function getCoteB()
    {
        return $this->_cote_B;
    }

    /**
     * @param mixed $cote_B
     */
    public function setCoteB($cote_B)
    {
        $this->_cote_B = $cote_B;
    }

    /**
     * @return mixed
     */
    public function getCoteC()
    {
        return $this->_cote_C;
    }

    /**
     * @param mixed $cote_C
     */
    public function setCoteC($cote_C)
    {
        $this->_cote_C = $cote_C;
    }

    // A=B ou A=C ou B=C
    public  function est_isocelle(){
        if($this->_cote_A == $this->_cote_B || $this->_cote_A == $this->_cote_C || $this->_cote_B ==$this->_cote_C ){
            return true;
        }else{
            return false;
        }
    }

    //A = B = C
    public  function est_equilateral(){
        if($this->_cote_A == $this->_cote_B && $this->_cote_A  == $this->_cote_C ){
            return true;
        }else{
            return false;
        }
    }

    //A² = B² + C².
    public  function est_recatangle(){
        if(pow($this->_cote_A,2) == pow($this->_cote_B,2 ) + pow($this->_cote_C,2 )){
            return true;
        }else{
            return false;
        }
    }

    //A != B != C
    public  function est_scaléne(){
        if($this->_cote_A != $this->_cote_B && $this->_cote_A  != $this->_cote_C ){
            return true;
        }else{
            return false;
        }
    }

}
?>