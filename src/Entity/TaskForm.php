<?php

namespace App\Entity;

class TaskForm
{
    protected $task;
    protected $firstname;
    protected $lastname;
    protected $email;
    protected $phone;
    protected $subject;
    protected $message;
    protected $gpdr;
    protected $remarks;

    public function getTask(): string
    {
        return $this->task;
    }

    public function setTask(string $task): void
    {
        $this->task = $task;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getSubject(): string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): void
    {
        $this->subject = $subject;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }    

    public function getGpdr(): bool
    {
        return $this->gpdr;
    }

    public function setGpdr(bool $gpdr): void
    {
        $this->gpdr = $gpdr;
    }

    public function getRemarks(): string
    {
        return $this->remarks;
    }

    public function setRemarks(string $remarks): void
    {
        $this->remarks = $remarks;
    }
}