<?php

class Validate
{
    private $err;

    function __construct()
    {
        $this->err = false;
        $_SESSION["error"] = [];
    }

    public function valid($data, $type, $text_err)
    {

        switch ($type) {
            case "text":
                if (strlen($data) < 2) $this->err = true;
                break;

            case "email":
                if (filter_var($data, FILTER_VALIDATE_EMAIL) === false) $this->err = true;
                break;
        }


        if ($this->err) $_SESSION["error"][] = $text_err;

    }


    public function getErr()
    {
        return $this->err;
    }

}