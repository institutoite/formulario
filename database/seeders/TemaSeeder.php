<?php

namespace Database\Seeders;

class TemaSeeder extends SqlDumpSeeder
{
    public function run(): void
    {
        $this->seedInsertDump('ayuda/temas.sql', 'temas');
    }
}

