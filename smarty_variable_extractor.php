<?php
// Erforderliche PHP-Erweiterungen laden

require 'includes/vendor/autoload.php'; // Falls du PhpSpreadsheet verwendest (für Excel)
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

function findSmartyVariables($dir) {
    $variables = [];

    // Rekursiv alle TPL-Dateien durchsuchen
    $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($files as $file) {
        if ($file->getExtension() === 'tpl') {
            $content = file_get_contents($file->getPathname());

            // Alle Smarty-Variablen erfassen ({$variable})
            preg_match_all('/{\$([a-zA-Z0-9_]+)}/', $content, $matches);
            foreach ($matches[1] as $var) {
                $variables[$var][] = $file->getPathname(); // Speichere Fundort mit
            }

            // Auch {assign var="variable" value="..."} berücksichtigen
            preg_match_all('/{assign\s+var="([^"]+)"/', $content, $assignMatches);
            foreach ($assignMatches[1] as $var) {
                $variables[$var][] = $file->getPathname();
            }
        }
    }

    // Duplikate entfernen und Fundstellen zusammenfassen
    foreach ($variables as $var => $files) {
        $variables[$var] = array_unique($files);
    }

    return $variables;
}

// 📍 JTL5 Template-Ordner (Pfad anpassen)
$jtlTemplateDir = __DIR__ . '/templates';

// Alle Smarty-Variablen finden
$allSmartyVars = findSmartyVariables($jtlTemplateDir);

// 🔹 Excel-Datei erstellen
$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'Variable');
$sheet->setCellValue('B1', 'Gefunden in Datei(en)');

$row = 2;
foreach ($allSmartyVars as $var => $files) {
    $sheet->setCellValue("A$row", $var);
    $sheet->setCellValue("B$row", implode(", ", $files));
    $row++;
}

// 🔹 Datei speichern
$writer = new Xlsx($spreadsheet);
$excelFile = __DIR__ . '/smarty_variablen.xlsx';
$writer->save($excelFile);

echo "✅ Excel-Datei mit allen Smarty-Variablen wurde erstellt: $excelFile\n";
?>
