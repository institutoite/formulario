<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require __DIR__ . '/../bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

$tables = DB::select('SHOW TABLES');
$database = DB::getDatabaseName();
$key = "Tables_in_{$database}";
$markers = ['�', 'Ã', 'Â', 'â'];

foreach ($tables as $tableRow) {
    $table = $tableRow->{$key};
    $columns = collect(DB::select("SHOW COLUMNS FROM `{$table}`"))
        ->filter(fn ($column) => preg_match('/char|text|enum|set/i', $column->Type))
        ->pluck('Field')
        ->all();

    if ($columns === []) {
        continue;
    }

    foreach ($columns as $column) {
        $query = DB::table($table);

        $query->where(function ($q) use ($column, $markers) {
            foreach ($markers as $marker) {
                $q->orWhereRaw("BINARY `{$column}` LIKE ?", ["%{$marker}%"]);
            }
        });

        $count = $query->count();

        if ($count === 0) {
            continue;
        }

        echo "{$table}.{$column}: {$count}\n";

        $samples = DB::table($table)
            ->select('id', $column)
            ->where(function ($q) use ($column, $markers) {
                foreach ($markers as $marker) {
                    $q->orWhereRaw("BINARY `{$column}` LIKE ?", ["%{$marker}%"]);
                }
            })
            ->limit(3)
            ->get();

        foreach ($samples as $sample) {
            $value = preg_replace('/\s+/', ' ', (string) $sample->{$column});
            echo "  #{$sample->id}: " . mb_substr($value, 0, 180) . "\n";
        }
    }
}
