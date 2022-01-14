<?php

class User {

    public function __construct(
        public ?string $id = null,
        public ?string $username = null,
        public ?string $password = null,
        public ?string $email = null

    ) {
    }

    /**
     * @return string|null
     */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * @param string|null $id
     */
    public function setId(?string $id): void {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getUsername(): ?string {
        return $this->username;
    }

    /**
     * @param string|null $username
     */
    public function setUsername(?string $username): void {
        $this->username = $username;
    }

    /**
     * @return string|null
     */
    public function getPassword(): ?string {
        return $this->password;
    }

    /**
     * @param string|null $password
     */
    public function setPassword(?string $password): void {
        $this->password = $password;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * @param string|null $email
     */
    public function setEmail(?string $email): void {
        $this->email = $email;
    }


}