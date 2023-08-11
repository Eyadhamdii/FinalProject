<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendanceRecordsTable extends Migration
{
    public function up()
    {
        Schema::create('attendance_records', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->string('attendance_status');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('registered_courses')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('attendance_records');
    }
}
