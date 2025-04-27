<?php 

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase {

    public function testExpectFullName() {

        $this->expectOutputString('Mateus Roza');

        $user = new User();
        $user->setName('Mateus');
        $user->setLastName('Roza');
        echo $user->getFullName();
    }

    // Famous late friday where isn't finalize the create methods in class User, in this case use Test Incomplete
    public function testAge() {
        // $user = new User();
        // $user->setAge(30);
        // $this->assertEquals(30, $user->getAge());

        $this->markTestIncomplete('Set and Get of age in class User is not defined');
    }

    public function testAgeString() {
        // $user = new User();
        // $user->setAge(25);
        // $this->assertEquals('25 Anos', $user->getAge());
        $this->markTestIncomplete("It's Need set return for string data in class User");
    }
}