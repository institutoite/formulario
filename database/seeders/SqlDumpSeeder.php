<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use RuntimeException;

abstract class SqlDumpSeeder extends Seeder
{
    protected function seedInsertDump(string $relativePath, string $table, bool $allowEmpty = false): void
    {
        $path = base_path($relativePath);

        if (! file_exists($path)) {
            throw new RuntimeException("No se encontro el dump SQL: {$relativePath}");
        }

        $sql = file_get_contents($path);
        $pattern = '/INSERT INTO `' . preg_quote($table, '/') . '` \((.*?)\) VALUES\s*(.*?);\R/s';

        if (! preg_match_all($pattern, $sql, $matches, PREG_SET_ORDER)) {
            if ($allowEmpty) {
                return;
            }

            throw new RuntimeException("No se encontraron INSERT para la tabla {$table} en {$relativePath}");
        }

        foreach ($matches as $match) {
            $columnsSql = $match[1];
            $valuesSql = trim($match[2]);
            $columns = array_map(
                fn ($column) => trim($column, " `\t\n\r\0\x0B"),
                explode(',', $columnsSql)
            );

            $updates = collect($columns)
                ->reject(fn ($column) => $column === 'id')
                ->map(fn ($column) => "`{$column}` = VALUES(`{$column}`)")
                ->implode(', ');

            DB::unprepared(
                "INSERT INTO `{$table}` ({$columnsSql}) VALUES {$valuesSql} " .
                "ON DUPLICATE KEY UPDATE {$updates}"
            );
        }
    }
}
