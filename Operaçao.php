<?php

/** 
 * Classe Operacao
 */
 
 class Operacao
 {
    // atributos
    public $numero1;
    public $numero2;
    public $tipo;
    public $resultado;
    

    //acao


    //metodo
    public function __construct($tipo , $numero1 , $numero2)
    {
        $this->tipo = $tipo;
        $this->numero1 = $numero1;
        $this->numero2 = $numero2;

    }
    
    //verifica o tipo de calculo      
    public function calculo()
    {
               
            switch ($this->tipo) 
            {
                case 'soma':
                    $this->soma();
                    break;
                case 'subtracao';
                    $this->subtracao();
                    break;
                    case 'divisao';
                        $this->divisao();
                    break;
                case 'multiplicacao';
                    $this->multiplicacao();
                    break;
                default:
                    echo"tipo Invalido";
                    break;
    
               
            }
    
        
    }
    //regra das operacoes
    public function soma()
    {
        $this->resultado = $this->numero1 + $this->numero2;
    }
    public function subtracao()
    {
        $this->resultado = $this->numero1 - $this->numero2;
    }
    public function divisao()
    {
        $this->resultado = $this->numero1 / $this->numero2;
    }
    public function multiplicacao()
    {
        $this->resultado = $this->numero1 * $this->numero2;
    }


 }
