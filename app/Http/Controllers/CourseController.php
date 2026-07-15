<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course; 
use App\Models\Student; // 💡 ดึงหุ่นยนต์ Student เข้ามาใช้งานเพิ่มตรงนี้

class CourseController extends Controller
{
    // ฟังก์ชันเดิมสำหรับดึงข้อมูลวิชาเรียน
    public function index()
    {
        $courses = Course::all();
        return response()->json([
            'status' => 'success',
            'message' => 'ดึงข้อมูลรายวิชาสำเร็จ',
            'data' => $courses
        ], 200);
    }

    // 🚀 ฟังก์ชันใหม่สำหรับดึงข้อมูลรายชื่อนักศึกษา (พวกคุณ 2 คน)
    public function students()
    {
        // สั่งให้หุ่นยนต์ Student วิ่งไปดึงข้อมูลทั้งหมดจากตาราง students
        $students = Student::all();

        return response()->json([
            'status' => 'success',
            'message' => 'ดึงข้อมูลนักศึกษาสำเร็จ',
            'data' => $students
        ], 200);
    }

    // 🔐 ฟังก์ชันสำหรับระบบ Login แยกบัญชีนักศึกษา
    public function login(Request $request)
    {
        // 1. รับค่ารหัสนักศึกษาและรหัสผ่านที่ส่งมาจากหน้าบ้าน
        $studentId = $request->input('student_id');
        $password = $request->input('password');

        // 2. วิ่งไปค้นหาข้อมูลในตาราง students ว่ามีรหัสนักศึกษานี้ไหม
        $student = \App\Models\Student::where('student_id', $studentId)->first();

        // 3. เช็คเงื่อนไข: ถ้าไม่เจอตัวนักศึกษา หรือ รหัสผ่านไม่ตรงกัน
        if (!$student || $student->password !== $password) {
            return response()->json([
                'status' => 'error',
                'message' => 'รหัสนักศึกษาหรือรหัสผ่านไม่ถูกต้อง'
            ], 401);
        }

        // 4. ถ้ารหัสถูกต้อง ให้ส่งข้อมูลของนักศึกษาคนนั้นกลับไป เพื่อให้หน้าบ้านรู้ว่าใครล็อกอินสำเร็จ
        return response()->json([
            'status' => 'success',
            'message' => 'เข้าสู่ระบบสำเร็จ',
            'student' => $student
        ], 200);
    }

}