<?php

// database/migrations/xxxx_xx_xx_create_members_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    public function up()
{
    if (!Schema::hasTable('members')) {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            // Tambahkan kolom-kolom lain sesuai kebutuhan
            $table->timestamps();
        });
    }
}

    public function down()
    {
        Schema::dropIfExists('members');
    }
}
