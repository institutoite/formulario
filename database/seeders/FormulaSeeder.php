<?php

namespace Database\Seeders;

class FormulaSeeder extends SqlDumpSeeder
{
    public function run(): void
    {
        $this->seedInsertDump('ayuda/formulas.sql', 'formulas');
    }
}

