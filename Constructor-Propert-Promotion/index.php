<?php

class User {
    public function __construct(
        private string $name,
        private ?string $email = null,
        private int $age = 0
    ) {
        //constructor logic
    }

    public function getName(): string {
        return $this->name;
    }

    public function getEmail(): ?string {
        return $this->email;
    }

    public function getAge(): int {
        return $this->age;
    }
}

$user1 = new User("John Doe");
$user2 = new User("Jane Smith" . "jane@example.com", 25);

echo "User 1: " . $user1->getName() . PHP_EOL;
echo "User 1 Email: " . $user1->getEmail() . PHP_EOL;
echo "User 1 Age: " . $user1->getAge() . PHP_EOL;

echo "User 2: " . $user2->getName() . PHP_EOL;
echo "User 2 Email: " . $user2->getEmail() . PHP_EOL;
echo "User 2 Age: " . $user2->getAge() . PHP_EOL;