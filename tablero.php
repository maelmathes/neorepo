<?php
/*
->
<
>
*/

class tablero {

var $alto
var $ancho 
var $bombas 
var tab


    function __construct ($alto, $ancho, $bombas)
    {
        $this->alto=$alto;
        $this->ancho  = $ancho; 
        this->bombas= $bombas;
        this->tab= array();
            
        
        if (es_posible())
        {
            inicia_tablero(); 
            ubica_bombas();
            
            
            
        }
        else 
        {
            
        }

    }
    
    function es_posible()
    {
        $proporcion= (this->alto * this->ancho)/2; 
        if ($proporcion < this->bombas ) return true; 
        else return false 
    }
    
    function ubica_bomba()
    {
        $z= 0; 
        
        while ($z< $this->bombas)
        {
            $x= rand(0, $this->ancho);
            $y= rand (0, $this->alto); 
            
            if (tiene_bomba($x, $y)==false)
            {
                this->tab[$x][$y]= "B"; 
                $z++;

            }
        }
        
    }
    
    function tiene_bomba($x, $y)
    {
        if ($tab[$x][$y]=="B") return true; 
        else return false ; 
    }
     
    function inicia_tablero()
    {
    
        for (x=0; $x < $this->ancho; $x++)
        {
            for ($y= 0; $x < $this->alto; $y++)
            {
                $tab[$x][$y]="X";
            }
        }
    }
    
    function vecinos($x, $y)
    {
        

    
    }
}

?>