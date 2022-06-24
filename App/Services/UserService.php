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
                $user = User::get($id);
                return $user;
            }
            else {
                //
                $users = User::getAll();
                return $users;
            }
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