<?php

    class Point
    {

        /**
         * @var $x - taško x koordinatė
         * @var $y - taško y koordinatė
         */
        private $x;
        private $y;

        /**
         * @param mixed $x
         */

        public function setX($x): void{
            $this->x=$x;
        }

        /**
         * @return mixed
         */
        public function getX(){
            return $this->x;
        }

        /**
         * @param mixed
         */

        public function setY($y): void{
            $this->y=$y;
        }

        /**
         * @return mixed $y
         */

        public function getY(){
            return $this->y;
        }


        /**
         * @param $x
         * @param $y
         */

        function __construct($x, $y){
            $this->x=$x;
            $this->y=$y;
        }

        /**
         * Atvaizduoja taško vietą formatu [x;y]
         * @return string
         */

        public function __toString(): string{
            return "[" . $this->x .";". $this->y ."]";
        }

        /**
         * Grąžina atstumą nuo koordinačių pradžios taško (0,0) iki taško.
         * @return float
         */

        function distanceFromOrigin(){
        return sqrt($this->x*2 + $this->y*2);
        }

        /**
         * Perstumia tašką per dx ir dy
         * @param $dx
         * @param $dy
         * @return void
         */

        public function translate($dx, $dy)
        {
            $this->x += $dx;
            $this->y += $dy;
        }

        /**
         * Grąžina atstumą iki taško p nuo esamo taško.
         * @param $p
         * @return float
         */

        public function distance($p){
            return sqrt(pow($this->x - $p->getX(), 2) + pow($this->y - $p->getY(), 2));
        }

        /**
         * Pakeičia esamo taško koordinates.
         * @param $x
         * @param $y
         * @return void
         */

        public function setLocation($x, $y){
        $this->x=$x;
        $this->y=$y;
         }

    }