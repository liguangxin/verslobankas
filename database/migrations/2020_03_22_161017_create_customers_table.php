<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('user_type')->default('company');
            $table->string('email')->unique();
            $table->string('city')->nullable();
            $table->string('compnay_name')->nullable();
            $table->string('phone')->nullable();
            $table->string('company_code')->nullable();
            $table->string('company_vat')->nullable();
            $table->string('company_address')->nullable();
            $table->string('web_site')->nullable();
            $table->string('billing_email')->nullable();
            $table->string('user_provider_id')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
