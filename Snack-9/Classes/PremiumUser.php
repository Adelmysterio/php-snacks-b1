<?php 

require_once __DIR__ . '/User.php';

class PremiumUser extends User {

    private $membership;
    public function __construct($email, $password, $membership) {
        parent::__construct($email, $password);
        $this->membership = $membership;
    }
}
?>