<?php

declare(strict_types=1);

namespace Plugin\jtl_debug;

/**
 * Class ErrorHandler
 * @package Plugin\jtl_debug
 */
class ErrorHandler
{
    private array $errors = [];

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function setErrors(array $errors): void
    {
        $this->errors = $errors;
    }

    /**
     * @param $errNo
     * @param $errStr
     * @param $errFile
     * @param $errLine
     * @return bool
     */
    public function handle($errNo, $errStr, $errFile, $errLine): bool
    {
        switch ($errNo) {
            case \E_NOTICE:
            case \E_USER_NOTICE:
                $type = 'Notice';
                break;
            case \E_WARNING:
            case \E_USER_WARNING:
                $type = 'Warning';
                break;
            case \E_ERROR:
            case \E_USER_ERROR:
                $type = 'Fatal Error';
                break;
            case \E_DEPRECATED:
            case \E_USER_DEPRECATED:
                $type = 'Deprecated';
                break;
            default:
                $type = 'Unknown Error';
                break;
        }
        $msg = [
            'NO'   => $errNo,
            'MSG'  => $errStr,
            'FILE' => $errFile,
            'LINE' => $errLine,
        ];

        $this->errors[$errFile][$type][$errStr] = $msg;

        return true;
    }
}
