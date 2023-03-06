<?php

namespace Mehrkanal\PdfToText;

use RuntimeException;

class PdfToText
{
    private const BIN = 'pdftotext';

    public static function getBinFullPath(): string
    {
        $file = realpath(self::getBinaryPath() . '/' . self::BIN);
        if ($file === false) {
            throw new RuntimeException('Binary not found.');
        }
        return $file;
    }

    public static function getBinaryPath(): string
    {
        return dirname(__DIR__) . '/bin';
    }
}

