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
            ['student_id' => '6704101315', 'first_name' => 'จารุวัฒน์', 'last_name' => 'วัจนะรัตน์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju315'],
            ['student_id' => '6704101317', 'first_name' => 'จิรายุ', 'last_name' => 'วรรณศิลป์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju317'],
            ['student_id' => '6704101318', 'first_name' => 'ชาญณรงค์', 'last_name' => 'เขมารัมย์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju318'],
            ['student_id' => '6704101320', 'first_name' => 'ณรงค์พล', 'last_name' => 'ชูหนู', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju320'],
            ['student_id' => '6704101323', 'first_name' => 'ณัฐดนัย', 'last_name' => 'ปู่วงษ์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju323'],
            ['student_id' => '6704101324', 'first_name' => 'ณัฐพงษ์', 'last_name' => 'บุญสถิตย์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju324'],
            ['student_id' => '6704101325', 'first_name' => 'ณัฐพล', 'last_name' => 'ปัญญาเพิ่ม', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju325'],
            ['student_id' => '6704101327', 'first_name' => 'ณิชากร', 'last_name' => 'คัญทัพ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju327'],
            ['student_id' => '6704101328', 'first_name' => 'ติณณภพ', 'last_name' => 'พวงมาลา', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju328'],
            ['student_id' => '6704101332', 'first_name' => 'ธนธรณ์', 'last_name' => 'คำต๋อ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju332'],
            ['student_id' => '6704101334', 'first_name' => 'ธนาธิป', 'last_name' => 'ทองเปลว', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju334'],
            ['student_id' => '6704101335', 'first_name' => 'ธนาวัชร์', 'last_name' => 'ต๊ะทอง', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju335'],
            ['student_id' => '6704101342', 'first_name' => 'นัฐฐา', 'last_name' => 'จันทร์ปลอด', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju342'],
            ['student_id' => '6704101350', 'first_name' => 'ประวัณวิทย์', 'last_name' => 'มาไฝ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju350'],
            ['student_id' => '6704101352', 'first_name' => 'ปวรปรัชญ์', 'last_name' => 'ยะทอง', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju352'],
            ['student_id' => '6704101358', 'first_name' => 'พัฒธชาติ', 'last_name' => 'ศิริเชษฐ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju358'],
            ['student_id' => '6704101359', 'first_name' => 'พัฒน์นรี', 'last_name' => 'วันพิลา', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju359'],
            ['student_id' => '6704101360', 'first_name' => 'พัทธนันท์', 'last_name' => 'ปันตุ้ย', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju360'],
            ['student_id' => '6704101361', 'first_name' => 'พิมพ์ลภัส', 'last_name' => 'หอจงกล', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju361'],
            ['student_id' => '6704101363', 'first_name' => 'ภาณุพงษ์', 'last_name' => 'เวียงห้า', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju363'],
            ['student_id' => '6704101364', 'first_name' => 'ภาณุศักดิ์', 'last_name' => 'จงอักษร', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju364'],
            ['student_id' => '6704101365', 'first_name' => 'เมธี', 'last_name' => 'ไชยมงคล', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju365'],
            ['student_id' => '6704101367', 'first_name' => 'วรพล', 'last_name' => 'จำปาโชค', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju367'],
            ['student_id' => '6704101368', 'first_name' => 'วรรณภา', 'last_name' => 'ฉัตรทอง', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju368'],
            ['student_id' => '6704101371', 'first_name' => 'ศราวาฒิ', 'last_name' => 'ภูสี', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju371'],
            ['student_id' => '6704101373', 'first_name' => 'สมเจตน์', 'last_name' => 'จ่าแดง', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju373'],
            ['student_id' => '6704101374', 'first_name' => 'สมันตชัย', 'last_name' => 'นาคสุข', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju374'],
            ['student_id' => '6704101376', 'first_name' => 'สุชานัน', 'last_name' => 'ฉวีจันทร์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju376'],
            ['student_id' => '6704101377', 'first_name' => 'สุทธิพงษ์', 'last_name' => 'เล่ห์แสน', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju377'],
            ['student_id' => '6704101379', 'first_name' => 'สุภาวดี', 'last_name' => 'บุญสา', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju379'],
            ['student_id' => '6704101381', 'first_name' => 'แสงเฮือน', 'last_name' => '-', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju381'],
            ['student_id' => '6704101382', 'first_name' => 'อนุชาติ', 'last_name' => 'ณัฐธยานนท์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju382'],
            ['student_id' => '6704101390', 'first_name' => 'กาญจณา', 'last_name' => 'ประทาน', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju390'],
            ['student_id' => '6704101391', 'first_name' => 'คุณานนต์', 'last_name' => 'ดวงตาสิทธิ์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju391'],
            ['student_id' => '6704101395', 'first_name' => 'ณัฐธภา', 'last_name' => 'ยงศิลป์วิริยะกุล', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju395'],
            ['student_id' => '6704101396', 'first_name' => 'ณัฐวัตร', 'last_name' => 'จานใจ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju396'],
            ['student_id' => '6704101403', 'first_name' => 'นภัสกร', 'last_name' => 'ยานะ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju403'],
            ['student_id' => '6704101405', 'first_name' => 'เพ็ญรัศมิ์', 'last_name' => 'เฮงเลิศรัตน', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju405'],
            ['student_id' => '6704101413', 'first_name' => 'ศิราวุฒิ', 'last_name' => 'สังฆวดี', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju413'],
            ['student_id' => '6704101416', 'first_name' => 'อชิรญา', 'last_name' => 'บุญช่วย', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju416'],
            ['student_id' => '6704101419', 'first_name' => 'รัชกฤช', 'last_name' => 'หิรัญวงศ์', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju419'],
            ['student_id' => '6704101420', 'first_name' => 'วุฒิโชติ', 'last_name' => 'เกียรตินพคุณ', 'major' => 'วิทยาการคอมพิวเตอร์', 'faculty' => 'คณะวิทยาศาสตร์', 'year' => 3, 'password' => 'mju420'],
        ];

        DB::table('students')->insert($students);

   DB::statement("CREATE TABLE IF NOT EXISTS `courses` (
            `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
            `course_id` varchar(20) NOT NULL,
            `name` varchar(255) NOT NULL,
            `credits` int(11) NOT NULL,
            `day` varchar(10) NOT NULL,
            `start_time` time NOT NULL,
            `end_time` time NOT NULL,
            `color` varchar(7) NOT NULL,
            `description` text NULL,
            `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
            `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY (`id`),
            UNIQUE KEY `courses_course_id_unique` (`course_id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;");

        // 4. ข้อมูลวิชาเรียนจริงทั้ง 14 วิชา ปรับ Key ให้ตรงกับหน้าบ้านแล้ว
        $courses = [
            [
                'course_id' => '10301111',
                'name' => 'การเขียนโปรแกรมเบื้องต้น (Introduction to Computer Programming)',
                'credits' => 3,
                'day' => 'Mon',
                'start_time' => '09:00:00',
                'end_time' => '12:00:00',
                'color' => '#3b82f6',
                'description' => 'ปูพื้นฐานการเขียนโค้ด ลอจิกการคิด ตัวแปร เงื่อนไข การวนซ้ำ และฟังก์ชันพื้นฐาน ภาษาโปรแกรมมิ่งที่ใช้ python ส่วน editor คือ colab จากweb browser'
            ],
            [
                'course_id' => '10301112',
                'name' => 'เทคโนโลยีสารสนเทศและการสื่อสาร',
                'credits' => 3,
                'day' => 'Tue',
                'start_time' => '09:00:00',
                'end_time' => '12:00:00',
                'color' => '#10b981',
                'description' => 'เรียนรู้ภาพรวมเทคโนโลยี ระบบเครือข่าย และการสื่อสารในยุคดิจิทัล'
            ],
            [
                'course_id' => '10305108',
                'name' => 'แคลคูลัสสำหรับวิทยาศาสตร์และเทคโนโลยี',
                'credits' => 3,
                'day' => 'Wed',
                'start_time' => '13:00:00',
                'end_time' => '16:00:00',
                'color' => '#f59e0b',
                'description' => 'ฟังก์ชัน ลิมิต อนุพันธ์ และการอินทิเกรตเพื่อการประยุกต์ใช้ทางวิทยาศาสตร์'
            ],
            [
                'course_id' => '10301114',
                'name' => 'องค์ประกอบและสถาปัตยกรรมคอมพิวเตอร์',
                'credits' => 3,
                'day' => 'Thu',
                'start_time' => '09:00:00',
                'end_time' => '12:00:00',
                'color' => '#a855f7',
                'description' => 'เจาะลึกระบบฮาร์ดแวร์ การทำงานของ CPU หน่วยความจำ และการประมวลผลระดับต่ำ'
            ],
            [
                'course_id' => '10301141',
                'name' => 'เครือข่ายคอมพิวเตอร์เบื้องต้น',
                'credits' => 3,
                'day' => 'Fri',
                'start_time' => '13:00:00',
                'end_time' => '16:00:00',
                'color' => '#6366f1',
                'description' => 'เรียนรู้สถาปัตยกรรมเครือข่าย OSI Model, TCP/IP, การตั้งค่า IP Address และ Routing'
            ],
            [
                'course_id' => '10301212',
                'name' => 'การเขียนโปรแกรมและทักษะการแก้ปัญหา',
                'credits' => 3,
                'day' => 'Mon',
                'start_time' => '13:00:00',
                'end_time' => '16:00:00',
                'color' => '#2563eb',
                'description' => 'ฝึกทักษะการแก้ปัญหาขั้นสูง (Problem Solving) อัลกอริทึมแนวคิดเชิงคำนวณ'
            ],
            [
                'course_id' => '10301113',
                'name' => 'คณิตศาสตร์ดีสครีต',
                'credits' => 3,
                'day' => 'Tue',
                'start_time' => '13:00:00',
                'end_time' => '16:00:00',
                'color' => '#d97706',
                'description' => 'ตรรกศาสตร์ เซต ความสัมพันธ์ ฟังก์ชัน กราฟ และคณิตศาสตร์เชิงไม่ต่อเนื่อง'
            ],
            [
                'course_id' => '10301222',
                'name' => 'โครงสร้างข้อมูลและอัลกอริทึม (Data Structures and Algorithms)',
                'credits' => 3,
                'day' => 'Wed',
                'start_time' => '09:00:00',
                'end_time' => '12:00:00',
                'color' => '#f97316',
                'description' => 'ศึกษาโครงสร้างข้อมูลแบบ Array, Linked List, Stack, Queue, Tree และการวัดประสิทธิภาพ Big O'
            ],
            [
                'course_id' => '10301223',
                'name' => 'ฐานข้อมูลโครงสร้างเชิงสัมพันธ์ (Relational Database)',
                'credits' => 3,
                'day' => 'Thu',
                'start_time' => '13:00:00',
                'end_time' => '16:00:00',
                'color' => '#06b6d4',
                'description' => 'การออกแบบฐานข้อมูลเชิงสัมพันธ์, ER-Diagram, การทำ Normalization และการเขียน SQL Query ขั้นสูง'
            ],
            [
                'course_id' => '10301231',
                'name' => 'เว็บเทคโนโลยี (Web Technology)',
                'credits' => 3,
                'day' => 'Fri',
                'start_time' => '09:00:00',
                'end_time' => '12:00:00',
                'color' => '#f43f5e',
                'description' => 'การพัฒนาเว็บแอปพลิเคชันฝั่งหน้าบ้าน (Frontend) ด้วย HTML, CSS, JavaScript และ Framework สมัยใหม่'
            ],
            [
                'course_id' => '10301225',
                'name' => 'วิศวกรรมซอฟต์แวร์ (Software Engineering)',
                'credits' => 3,
                'day' => 'Tue',
                'start_time' => '09:00:00',
                'end_time' => '12:00:00',
                'color' => '#14b8a6',
                'description' => 'กระบวนการผลิตซอฟต์แวร์ระดับอุตสาหกรรม การบริหารโครงการ การเก็บความต้องการ (Requirements) และการทดสอบระบบ'
            ],
            [
                'course_id' => '10301221',
                'name' => 'การวิเคราะห์และออกแบบเชิงวัตถุ (Object-Oriented Analysis and Design)',
                'credits' => 3,
                'day' => 'Mon',
                'start_time' => '09:00:00',
                'end_time' => '12:00:00',
                'color' => '#7c3aed',
                'description' => 'ศึกษาและปฏิบัติเกี่ยวกับการเขียนโค้ดในรูปแบบ Class, Object, การสืบทอด (Inheritance) และการเขียน UML Diagram โดยใช้ภาษาโปรแกรมมิ่ง Java'
            ],
            [
                'course_id' => '10301232',
                'name' => 'การพัฒนาระบบฝั่งเซิร์ฟเวอร์ (Server-Side Development)',
                'credits' => 3,
                'day' => 'Thu',
                'start_time' => '09:00:00',
                'end_time' => '12:00:00',
                'color' => '#ef4444',
                'description' => 'การพัฒนาเว็บฝั่งหลังบ้าน (Backend) การสร้าง API การจัดการ Session, Authentication และความปลอดภัย'
            ],
            [
                'course_id' => '10301233',
                'name' => 'การพัฒนาซอฟต์แวร์บนอุปกรณ์เคลื่อนที่',
                'credits' => 3,
                'day' => 'Wed',
                'start_time' => '13:00:00',
                'end_time' => '16:00:00',
                'color' => '#d946ef',
                'description' => 'การพัฒนาแอปพลิเคชันบนสมาร์ตโฟน (Mobile Application Development) ทั้งระบบปฏิบัติการ iOS และ Android'
            ]
        ];

        DB::table('courses')->insert($courses);
    }
}