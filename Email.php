<?php

class Email {
    public function __construct(
        public ?string $name = null,
        public ?string $subject = null,
        public ?string $email = null,
        public ?string $message = null

    ) {
    }

    public function sendMail() {
        $headers = "Mail from: " . $this->email;
        $message = "You have mail from " .$this->name.".\n\n".$this->message;
        $myMail = "umnxpaaqgkmfbjdtsh@sdvgeft.com";
        mail($myMail,$this->subject, $message);
        header("Location: contact.php?mailsend");
    }

    /**
     * @return string|null
     */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * @param string|null $name
     */
    public function setName(?string $name): void {
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getSubject(): ?string {
        return $this->subject;
    }

    /**
     * @param string|null $subject
     */
    public function setSubject(?string $subject): void {
        $this->subject = $subject;
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

    /**
     * @return string|null
     */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * @param string|null $message
     */
    public function setMessage(?string $message): void {
        $this->message = $message;
    }

}