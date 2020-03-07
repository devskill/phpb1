<?php
class Membership
{
    public $membershipId;
    public $discountAmount;

    public function __construct($membershipId, $discountAmount)
    {
        $this->membershipId = $membershipId;
        $this->discountAmount = $discountAmount;
    }
}