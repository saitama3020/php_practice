<?php
require ('BitwiseFlag.php');

class User extends BitwiseFlag
{
    const FLAG_REGISTERED = 1;
    const FLAG_ACTIVE = 2;
    const FLAG_MEMBER = 4;
    const FLAG_ADMIN = 8;

    public function isRegistered() {
        return $this->isFlagSet(self::FLAG_REGISTERED);
    }

    public function isActive() {
        return $this->isFlagSet(self::FLAG_ACTIVE);
    }

    public function isMember() {
        return $this->isFlagSet(self::FLAG_MEMBER);
    }

    public function isAdmin() {
        return $this->isFlagSet(self::FLAG_ADMIN);
    }
    public function setRegistered($value) {
        $this->setFlag(self::FLAG_REGISTERED, $value);
    }
    public function setAdmin($value) {
        $this->setFlag(self::FLAG_ADMIN, $value);
    }
    
    public function setActive($value) {
        $this->setFlag(self::FLAG_ACTIVE, $value);
    }

    public function setMember($value) {
        $this->setFlag(self::FLAG_MEMBER, $value);
    }

    public function __toString() {
        return 'User [' .
        ($this->isRegistered() ? 'REGISTERED ' : '') .
        ($this->isActive() ? 'ACTIVE ' : '') .
        ($this->isMember() ? 'MEMBER ' : '') .
        ($this->isAdmin() ? 'ADMIN' : '') .
        ']';
    }
}

?>