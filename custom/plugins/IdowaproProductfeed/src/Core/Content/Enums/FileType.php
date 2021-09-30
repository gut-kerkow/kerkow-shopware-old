<?php declare(strict_types=1);

namespace Productfeed\Core\Content\Enums;

abstract class FileType
{
    const CSV = 'file_type_csv';
    const TXT = 'file_type_txt';
    const XML = 'file_type_xml';


    /**
     * @param string $type
     * @return string
     */
    public static function getFileExtension(string $type): string {
       switch($type) {
           case FileType::CSV:
               return 'csv';
           case FileType::TXT:
               return 'txt';
           case FileType::XML:
               return 'xml';
           default:
              throw new \RuntimeException('unknown filetype');
       }
    }
}
