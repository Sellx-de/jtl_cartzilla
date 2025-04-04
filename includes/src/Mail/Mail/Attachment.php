<?php

declare(strict_types=1);

namespace JTL\Mail\Mail;

use PHPMailer\PHPMailer\PHPMailer;
use ReflectionClass;
use stdClass;

/**
 * Class Attachment
 * @package JTL\Mail\Mail
 */
final class Attachment
{
    /**
     * @var string
     */
    private string $mime = 'application/octet-stream';

    /**
     * @var string
     */
    private string $dir = \PFAD_ROOT . \PFAD_ADMIN . \PFAD_INCLUDES . \PFAD_EMAILPDFS;

    /**
     * @var string
     */
    private string $fileName = '';

    /**
     * @var string
     */
    private string $name = '';

    /**
     * @var string
     */
    private string $encoding = PHPMailer::ENCODING_BASE64;

    /**
     * @return string
     */
    public function getMime(): string
    {
        return $this->mime;
    }

    /**
     * @param string $mime
     * @return Attachment
     */
    public function setMime(string $mime): self
    {
        $this->mime = $mime;

        return $this;
    }

    /**
     * @return string
     */
    public function getDir(): string
    {
        return $this->dir;
    }

    /**
     * @param string $dir
     * @return Attachment
     */
    public function setDir(string $dir): self
    {
        $this->dir = $dir;

        return $this;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->fileName;
    }

    /**
     * @param string $fileName
     * @return Attachment
     */
    public function setFileName(string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Attachment
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getEncoding(): string
    {
        return $this->encoding;
    }

    /**
     * @param string $encoding
     * @return Attachment
     */
    public function setEncoding(string $encoding): self
    {
        $this->encoding = $encoding;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullPath(): string
    {
        return $this->dir . $this->fileName;
    }

    /**
     * @return stdClass
     */
    public function toObject(): stdClass
    {
        $reflect    = new ReflectionClass($this);
        $properties = $reflect->getProperties();
        $toArray    = [];
        foreach ($properties as $property) {
            $propertyName           = $property->getName();
            $toArray[$propertyName] = $property->getValue($this);
        }

        return (object)$toArray;
    }

    /**
     * @param object $object
     * @return $this
     */
    public function hydrateWithObject(object $object): self
    {
        $attributes = \get_object_vars($this);
        foreach ($attributes as $attribute => $value) {
            $setMethod = 'set' . \ucfirst($attribute);
            $getMethod = 'get' . \ucfirst($attribute);
            if (
                \method_exists($this, $setMethod)
                && \method_exists($object, $getMethod)
                && $object->{$getMethod}() !== null
            ) {
                $this->$setMethod($object->{$getMethod}());
                continue;
            }
            if (
                \property_exists($object, $attribute)
                && \method_exists($this, $setMethod)
            ) {
                $this->$setMethod($object->$attribute);
            }
        }

        return $this;
    }
}
