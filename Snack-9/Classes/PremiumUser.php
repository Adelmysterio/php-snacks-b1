<?php 

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Membership.php';

class PremiumUser extends User {

    private $membership;

    public function __construct($membership) {
        $this->membership = $membership;
    }
}
?>