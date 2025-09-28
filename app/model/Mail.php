<?php
    class Mail {
        private string $nombre;
        private string $email;
        private string $msg;

        public function __construct(string $nombre, string $email, string $msg) {
            if (self::isEmailValid($email)) throw new InvalidArgumentException("Email invalido");
            $this->email = $email;
            $this->nombre = (!empty($nombre)) ? $nombre :  throw new InvalidArgumentException("Empty name");
            $this->msg = (!empty($msg)) ? $msg :  throw new InvalidArgumentException("Empty message");
        }

        /**
         * Funcion que devuelve si un email es valido o no
         * @param email -> correo electronico a validar
         * @return bool segun si es valido o no
         */
        public static function isEmailValid(string $email): bool {
            $pattern = "/^[\w.-]+@[\w.-]+\.[a-z]{2,}$/i"; // REGEX MATCHES: test@ejemplo.es
            return preg_match($pattern, $email);
        }

        public function getNombre(): string {
            return $this->nombre;
        }

        public function getEmail(): string {
            return $this->email;
        }

        public function getMsg(): string {
            return $this->msg;
        }
    }
?>