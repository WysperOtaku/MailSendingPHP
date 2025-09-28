<?php
    class Mail {
        private string $nombre;
        private string $email;
        private string $msg;

        public function __construct(string $nombre, string $email, string $msg) {
            $errorMsg = "Error: ";
            $errorOccurred = false;

            if (!self::isEmailValid($email)) {
                $errorMsg .= "Email invalido <br>";
                $errorOccurred = true;
            }

            if (empty($nombre)) {
                 $errorMsg .= "Nombre vacio <br>";
                 $errorOccurred = true;
            }

            if (empty($msg)) {
                $errorMsg .= "Mensaje vacio <br>";
                $errorOccurred = true;
            }

            if ($errorOccurred) {
                throw new InvalidArgumentException($errorMsg);
            }

            $this->email = $email;
            $this->nombre = $nombre;
            $this->msg = $msg;
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