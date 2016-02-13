<?php

    /**
     * Created by PhpStorm.
     * User: Miguel
     * Date: 13/2/16
     * Time: 18:42
     */
    abstract class Recurso
    {
        var $id;
        var $tipo;
        var $fechaPublicacion;
        var $usuario;
        var $ubicacion;

        /**
         * @return mixed
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id)
        {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getTipo()
        {
            return $this->tipo;
        }

        /**
         * @param mixed $tipo
         */
        public function setTipo($tipo)
        {
            $this->tipo = $tipo;
        }

        /**
         * @return mixed
         */
        public function getFechaPublicacion()
        {
            return $this->fechaPublicacion;
        }

        /**
         * @param mixed $fechaPublicacion
         */
        public function setFechaPublicacion($fechaPublicacion)
        {
            $this->fechaPublicacion = $fechaPublicacion;
        }

        /**
         * @return mixed
         */
        public function getUsuario()
        {
            return $this->usuario;
        }

        /**
         * @param mixed $usuario
         */
        public function setUsuario($usuario)
        {
            $this->usuario = $usuario;
        }

        /**
         * @return mixed
         */
        public function getUbicacion()
        {
            return $this->ubicacion;
        }

        /**
         * @param mixed $ubicacion
         */
        public function setUbicacion($ubicacion)
        {
            $this->ubicacion = $ubicacion;
        }

    }