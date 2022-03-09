<?php

class ListFiles
{
    public static function createFromCsv($csvFilePath)
    {
        if (($csvFile = fopen($csvFilePath, "r")) !== false) {
            while (($row = fgetcsv($csvFile)) !== false) {
                $fileName = $row[0];
                if (!$fileName) {
                    continue;
                }
                $fileContent = $row[1] ?? '';

                $file = fopen('upload/' . $fileName, 'w');
                fputs($file, $fileContent);
                fclose($file);
            }
            fclose($csvFile);
        }
    }

}