<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. สร้างตารางนักศึกษาแบบดิบ
        DB::statement("CREATE TABLE IF NOT EXISTS `students` (
            `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            `student_id` varchar(10) NOT NULL,
            `first_name` varchar(255) NOT NULL,
            `last_name` varchar(255) NOT NULL,
            `major` varchar(255) NOT NULL,
            `faculty` varchar(255) NOT NULL,
            `year` int(11) NOT NULL,
            `password` varchar(255) NOT NULL,
            `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
            `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            UNIQUE KEY `students_student_id_unique` (`student_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");

        // 2. รายชื่อเพื่อนๆ 52 คน
        $students = [
            ['student_id' => '6704101302', 'first_name' => 'กฤตัชญ์', 'last_name' => 'ถนอมรัตน์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju302'],
            ['student_id' => '6704101303', 'first_name' => 'กฤษกร', 'last_name' => 'ชีวสิทธิรุ่งเรือง', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju303'],
            ['student_id' => '6704101304', 'first_name' => 'กฤษณา', 'last_name' => 'โพธา', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju304'],
            ['student_id' => '6704101306', 'first_name' => 'ก้องเกียรติ', 'last_name' => 'จิรวัฒนคุณากร', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju306'],
            ['student_id' => '6704101307', 'first_name' => 'กันตศักดิ์', 'last_name' => 'ตีฆาอายุ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju307'],
            ['student_id' => '6704101308', 'first_name' => 'ก่ำ', 'last_name' => 'ลุคำ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju308'],
            ['student_id' => '6704101310', 'first_name' => 'กุริญา', 'last_name' => 'ทาเทร์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju310'],
            ['student_id' => '6704101312', 'first_name' => 'เขมโสภณ', 'last_name' => 'วงศ์นฤเดชากุล', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju312'],
            ['student_id' => '6704101313', 'first_name' => 'คัมภีร์', 'last_name' => 'ชัยนรานนท์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju313'],
            ['student_id' => '6704101314', 'first_name' => 'จักรภัทร', 'last_name' => 'ชาบัญ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju314'],
            ['student_id' => '6704101315', 'first_name' => 'จารุวัฒน์', 'วัจนะรัตน์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju315'],
            ['student_id' => '6704101317', 'first_name' => 'จิรายุ', 'วรรณศิลป์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju317'],
            ['student_id' => '6704101318', 'first_name' => 'ชาญณรงค์', 'เขมารัมย์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju318'],
            ['student_id' => '6704101320', 'first_name' => 'ณรงค์พล', 'ชูหนู', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju320'],
            ['student_id' => '6704101323', 'first_name' => 'ณัฐดนัย', 'ปู่วงษ์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju323'],
            ['student_id' => '6704101324', 'first_name' => 'ณัฐพงษ์', 'บุญสถิตย์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju324'],
            ['student_id' => '6704101325', 'first_name' => 'ณัฐพล', 'ปัญญาเพิ่ม', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju325'],
            ['student_id' => '6704101327', 'first_name' => 'ณิชากร', 'คัญทัพ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju327'],
            ['student_id' => '6704101328', 'first_name' => 'ติณณภพ', 'พวงมาลา', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju328'],
            ['student_id' => '6704101332', 'first_name' => 'ธนธรณ์', 'คำต๋อ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju332'],
            ['student_id' => '6704101334', 'first_name' => 'ธนาธิป', 'ทองเปลว', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju334'],
            ['student_id' => '6704101335', 'first_name' => 'ธนาวัชร์', 'ต๊ะทอง', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju335'],
            ['student_id' => '6704101342', 'first_name' => 'นัฐฐา', 'จันทร์ปลอด', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju342'],
            ['student_id' => '6704101350', 'first_name' => 'ประวัณวิทย์', 'มาไฝ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju350'],
            ['student_id' => '6704101352', 'first_name' => 'ปวรปรัชญ์', 'ยะทอง', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju352'],
            ['student_id' => '6704101358', 'first_name' => 'พัฒธชาติ', 'ศิริเชษฐ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju358'],
            ['student_id' => '6704101359', 'first_name' => 'พัฒน์นรี', 'วันพิลา', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju359'],
            ['student_id' => '6704101360', 'first_name' => 'พัทธนันท์', 'ปันตุ้ย', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju360'],
            ['student_id' => '6704101361', 'first_name' => 'พิมพ์ลภัส', 'หอจงกล', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju361'],
            ['student_id' => '6704101363', 'first_name' => 'ภาณุพงษ์', 'เวียงห้า', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju363'],
            ['student_id' => '6704101364', 'first_name' => 'ภาณุศักดิ์', 'จงอักษร', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju364'],
            ['student_id' => '6704101365', 'first_name' => 'เมธี', 'ไชยมงคล', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju365'],
            ['student_id' => '6704101367', 'first_name' => 'วรพล', 'จำปาโชค', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju367'],
            ['student_id' => '6704101368', 'first_name' => 'วรรณภา', 'ฉัตรทอง', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju368'],
            ['student_id' => '6704101371', 'first_name' => 'ศราวุฒิ', 'ภูสี', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju371'],
            ['student_id' => '6704101373', 'first_name' => 'สมเจตน์', 'จ่าแดง', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju373'],
            ['student_id' => '6704101374', 'first_name' => 'สมันตชัย', 'นาคสุข', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju374'],
            ['student_id' => '6704101376', 'first_name' => 'สุชานัน', 'ฉวีจันทร์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju376'],
            ['student_id' => '6704101377', 'first_name' => 'สุทธิพงษ์', 'เล่ห์แสน', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju377'],
            ['student_id' => '6704101379', 'first_name' => 'สุภาวดี', 'บุญสา', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju379'],
            ['student_id' => '6704101381', 'first_name' => 'แสงเฮือน', 'last_name' => '-', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju381'],
            ['student_id' => '6704101382', 'first_name' => 'อนุชาติ', 'ณัฐธยานนท์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju382'],
            ['student_id' => '6704101390', 'first_name' => 'กาญจณา', 'ประทาน', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju390'],
            ['student_id' => '6704101391', 'first_name' => 'คุณานนต์', 'ดวงตาสิทธิ์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju391'],
            ['student_id' => '6704101395', 'first_name' => 'ณัฐธภา', 'ยงศิลป์วิริยะกุล', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju395'],
            ['student_id' => '6704101396', 'first_name' => 'ณัฐวัตร', 'จานใจ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju396'],
            ['student_id' => '6704101403', 'first_name' => 'นภัสกร', 'ยานะ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju403'],
            ['student_id' => '6704101405', 'first_name' => 'เพ็ญรัศมิ์', 'เฮงเลิศรัตน', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju405'],
            ['student_id' => '6704101413', 'first_name' => 'ศิราวุฒิ', 'สังฆวดี', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju413'],
            ['student_id' => '6704101416', 'first_name' => 'อชิรญา', 'บุญช่วย', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju416'],
            ['student_id' => '6704101419', 'first_name' => 'รัชกฤช', 'หิรัญวงศ์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju419'],
            ['student_id' => '6704101420', 'first_name' => 'วุฒิโชติ', 'เกียรตินพคุณ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju420'],
        ];

        DB::table('students')->insert($students);
    }
}