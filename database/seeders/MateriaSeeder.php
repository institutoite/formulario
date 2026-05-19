<?php

namespace Database\Seeders;

class MateriaSeeder extends SqlDumpSeeder
{
    public function run(): void
    {
        $this->seedInsertDump('ayuda/materias.sql', 'materias');
    }
}

