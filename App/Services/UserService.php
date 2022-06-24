<?php
    namespace App\Services;

    use App\Models\User;

    class UserService {

        public function post() {
            //
            // Create
            //
        }

        public function get($id = null) {
            //
            // Read
            //
            if($id) {
                //
                return User::get($id);
            }
            else {
                // return User::getAll();
            }

            return "Opa, deu certo!";
        }

        public function update() {
            //
            // Update
            //
        }

        public function delete() {
            //
            // Delete
            //
        }
    }

?>