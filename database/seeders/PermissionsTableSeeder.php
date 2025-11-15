<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('permissions')->delete();

        DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'admins',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'مدراء النظام',
                'parent_id' => NULL,
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'admins-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:23',
                'display_name' => 'رؤية المدراء',
                'parent_id' => 1,
            ),
            2 =>
            array (
                'id' => 4,
                'name' => 'admins-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:33:07',
                'display_name' => 'اضافة تعديل مدير',
                'parent_id' => 1,
            ),
            3 =>
            array (
                'id' => 5,
                'name' => 'admins-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:58',
                'display_name' => 'تغيير حالة المدراء',
                'parent_id' => 1,
            ),
            4 =>
            array (
                'id' => 6,
                'name' => 'admins-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:47',
                'display_name' => 'حذف المدراء',
                'parent_id' => 1,
            ),
            5 =>
            array (
                'id' => 7,
                'name' => 'users',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'المستخدمين',
                'parent_id' => NULL,
            ),
            6 =>
            array (
                'id' => 8,
                'name' => 'users-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:40',
                'display_name' => 'رؤية المستخدمين',
                'parent_id' => 7,
            ),
            7 =>
            array (
                'id' => 10,
                'name' => 'users-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:21',
                'display_name' => 'اضافة وتعديل المستخدمين',
                'parent_id' => 7,
            ),
            8 =>
            array (
                'id' => 11,
                'name' => 'users-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:09',
                'display_name' => 'تغيير حالة المستخدمين',
                'parent_id' => 7,
            ),
            9 =>
            array (
                'id' => 12,
                'name' => 'users-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:32:02',
                'display_name' => 'حذف المستخدمين',
                'parent_id' => 7,
            ),
            10 =>
            array (
                'id' => 13,
                'name' => 'service',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'الخدمات',
                'parent_id' => NULL,
            ),
            11 =>
            array (
                'id' => 14,
                'name' => 'service-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:31:05',
                'display_name' => 'رؤية الخدمة',
                'parent_id' => 13,
            ),
            12 =>
            array (
                'id' => 15,
                'name' => 'service-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:53',
                'display_name' => 'اضافة وتعديل خدمة',
                'parent_id' => 13,
            ),
            13 =>
            array (
                'id' => 16,
                'name' => 'service-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:42',
                'display_name' => 'تغيير حالة الخدمة',
                'parent_id' => 13,
            ),
            14 =>
            array (
                'id' => 18,
                'name' => 'service-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:24',
                'display_name' => 'حذف الخدمة',
                'parent_id' => 13,
            ),
            15 =>
            array (
                'id' => 19,
                'name' => 'choose',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'لماذا تختارنا',
                'parent_id' => NULL,
            ),
            16 =>
            array (
                'id' => 20,
                'name' => 'choose-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:16',
                'display_name' => 'رؤية السبب',
                'parent_id' => 19,
            ),
            17 =>
            array (
                'id' => 21,
                'name' => 'choose-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:08',
                'display_name' => 'اضافة سبب',
                'parent_id' => 19,
            ),
            18 =>
            array (
                'id' => 22,
                'name' => 'choose-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:54',
                'display_name' => 'تغيير حالة  السبب',
                'parent_id' => 19,
            ),
            19 =>
            array (
                'id' => 23,
                'name' => 'choose-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:46',
                'display_name' => 'حذف السبب',
                'parent_id' => 19,
            ),
            20 =>
            array (
                'id' => 24,
                'name' => 'work',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'أعمالنا',
                'parent_id' => NULL,
            ),
            21 =>
            array (
                'id' => 25,
                'name' => 'work-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:39',
                'display_name' => 'رؤية الأعمال',
                'parent_id' => 24,
            ),
            22 =>
            array (
                'id' => 26,
                'name' => 'work-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:29:32',
                'display_name' => 'اضافة وتعديل عمل',
                'parent_id' => 24,
            ),
            23 =>
            array (
                'id' => 27,
                'name' => 'work-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:29:21',
                'display_name' => 'تغيير حالة العمل',
                'parent_id' => 24,
            ),
            24 =>
            array (
                'id' => 28,
                'name' => 'work-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:29:12',
                'display_name' => 'حذف العمل',
                'parent_id' => 24,
            ),
            25 =>
            array (
                'id' => 29,
                'name' => 'testimonials',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'قالوا عنا',
                'parent_id' => NULL,
            ),
            26 =>
            array (
                'id' => 30,
                'name' => 'testimonials-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:29:05',
                'display_name' => 'رؤية الأراء',
                'parent_id' => 29,
            ),
            27 =>
            array (
                'id' => 31,
                'name' => 'testimonials-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:28:56',
                'display_name' => 'اضافة وتعديل الأراء',
                'parent_id' => 29,
            ),
            28 =>
            array (
                'id' => 32,
                'name' => 'testimonials-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:28:38',
                'display_name' => 'تغيير حالة الأراء',
                'parent_id' => 29,
            ),
            29 =>
            array (
                'id' => 33,
                'name' => 'testimonials-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:28:45',
                'display_name' => 'حذف الأراء',
                'parent_id' => 29,
            ),
            30 =>
            array (
                'id' => 34,
                'name' => 'plans',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'الوسوم',
                'parent_id' => NULL,
            ),
            31 =>
            array (
                'id' => 35,
                'name' => 'plans-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:28:21',
                'display_name' => 'رؤية الوسوم',
                'parent_id' => 34,
            ),
            32 =>
            array (
                'id' => 36,
                'name' => 'plans-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:28:10',
                'display_name' => 'اضافة وتعديل وسم',
                'parent_id' => 34,
            ),
            33 =>
            array (
                'id' => 37,
                'name' => 'plans-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:27:52',
                'display_name' => 'تغيير حالة الوسوم',
                'parent_id' => 34,
            ),
            34 =>
            array (
                'id' => 38,
                'name' => 'plans-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:27:44',
                'display_name' => 'حذف الوسوم',
                'parent_id' => 34,
            ),
            35 =>
            array (
                'id' => 39,
                'name' => 'strategies',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'الفريق',
                'parent_id' => NULL,
            ),
            36 =>
            array (
                'id' => 40,
                'name' => 'strategies-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:27:37',
                'display_name' => 'رؤية الفريق',
                'parent_id' => 39,
            ),
            37 =>
            array (
                'id' => 41,
                'name' => 'strategies-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:27:31',
                'display_name' => 'اضافة تعديل الفريق',
                'parent_id' => 39,
            ),
            38 =>
            array (
                'id' => 42,
                'name' => 'strategies-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:27:19',
                'display_name' => 'تعديل حالة الفريق',
                'parent_id' => 39,
            ),
            39 =>
            array (
                'id' => 43,
                'name' => 'strategies-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:27:11',
                'display_name' => 'حذف الفريق',
                'parent_id' => 39,
            ),
            40 =>
            array (
                'id' => 44,
                'name' => 'docs-sections',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'من نحن',
                'parent_id' => NULL,
            ),
            41 =>
            array (
                'id' => 45,
                'name' => 'docs-sections-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:27:04',
                'display_name' => 'رؤية من نحن',
                'parent_id' => 44,
            ),
            42 =>
            array (
                'id' => 46,
                'name' => 'docs-sections-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:26:57',
                'display_name' => 'اضافة تعديل من نحن',
                'parent_id' => 44,
            ),
            43 =>
            array (
                'id' => 47,
                'name' => 'docs-sections-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:26:50',
                'display_name' => 'تغيير حالة من نحن',
                'parent_id' => 44,
            ),
            44 =>
            array (
                'id' => 49,
                'name' => 'sliders',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'Sliders',
                'parent_id' => NULL,
            ),
            45 =>
            array (
                'id' => 50,
                'name' => 'sliders-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 13:06:29',
                'display_name' => 'View All Sliders',
                'parent_id' => 49,
            ),
            46 =>
            array (
                'id' => 51,
                'name' => 'sliders-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:26:15',
                'display_name' => 'Add / Edit Slider',
                'parent_id' => 49,
            ),
            47 =>
            array (
                'id' => 52,
                'name' => 'sliders-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:26:01',
                'display_name' => 'Delete Slider',
                'parent_id' => 49,
            ),
            48 =>
            array (
                'id' => 53,
                'name' => 'library-features',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'الوظائف',
                'parent_id' => NULL,
            ),
            49 =>
            array (
                'id' => 54,
                'name' => 'library-features-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:25:52',
                'display_name' => 'رؤية والوظائف',
                'parent_id' => 53,
            ),
            50 =>
            array (
                'id' => 55,
                'name' => 'library-features-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:25:42',
                'display_name' => 'تعديل حالة الوظائف',
                'parent_id' => 53,
            ),
            51 =>
            array (
                'id' => 56,
                'name' => 'library-features-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:25:33',
                'display_name' => 'اضافة وتعديل الوظائف',
                'parent_id' => 53,
            ),
            52 =>
            array (
                'id' => 57,
                'name' => 'library-features-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:25:19',
                'display_name' => 'حذف الوظائف',
                'parent_id' => 53,
            ),
            53 =>
            array (
                'id' => 58,
                'name' => 'news',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'الأخبار والفعاليات',
                'parent_id' => NULL,
            ),
            54 =>
            array (
                'id' => 59,
                'name' => 'news-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:25:09',
                'display_name' => 'رؤية الأخبار والفعاليات',
                'parent_id' => 58,
            ),
            55 =>
            array (
                'id' => 60,
                'name' => 'news-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:24:56',
                'display_name' => 'اضافة وتعديل الأخبار والفعاليات',
                'parent_id' => 58,
            ),
            56 =>
            array (
                'id' => 61,
                'name' => 'questions',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'الحملات والعروض',
                'parent_id' => NULL,
            ),
            57 =>
            array (
                'id' => 62,
                'name' => 'questions-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:24:33',
                'display_name' => 'رؤية الحملات والعروض',
                'parent_id' => 61,
            ),
            58 =>
            array (
                'id' => 63,
                'name' => 'albums',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'الألبومات',
                'parent_id' => NULL,
            ),
            59 =>
            array (
                'id' => 64,
                'name' => 'albums-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:24:24',
                'display_name' => 'رؤية الألبومات',
                'parent_id' => 63,
            ),
            60 =>
            array (
                'id' => 65,
                'name' => 'albums-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:24:16',
                'display_name' => 'تعديل حالة الألبوم',
                'parent_id' => 63,
            ),
            61 =>
            array (
                'id' => 66,
                'name' => 'albums-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:23:47',
                'display_name' => 'اضافة وتعديل الألبومات',
                'parent_id' => 63,
            ),
            62 =>
            array (
                'id' => 67,
                'name' => 'albums-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:23:34',
                'display_name' => 'حذف الألبومات',
                'parent_id' => 63,
            ),
            63 =>
            array (
                'id' => 69,
                'name' => 'job-applications-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:23:23',
                'display_name' => 'رؤية طلبات التوظيف',
                'parent_id' => 76,
            ),
            64 =>
            array (
                'id' => 70,
                'name' => 'job-applications-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:23:06',
                'display_name' => 'حذف طلبات التوظيف',
                'parent_id' => 76,
            ),
            65 =>
            array (
                'id' => 71,
                'name' => 'contacts',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'رسائل اتصل بنا',
                'parent_id' => NULL,
            ),
            66 =>
            array (
                'id' => 72,
                'name' => 'contacts-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:22:02',
                'display_name' => 'عرض رسائل اتصل',
                'parent_id' => 71,
            ),
            67 =>
            array (
                'id' => 73,
                'name' => 'contacts-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:21:52',
                'display_name' => 'حذف رسائل اتصل بنا',
                'parent_id' => 71,
            ),
            68 =>
            array (
                'id' => 74,
                'name' => 'settings',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'الإعدادات',
                'parent_id' => NULL,
            ),
            69 =>
            array (
                'id' => 75,
                'name' => 'settings-edit',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:20:48',
                'display_name' => 'تعديل إعدادات النظام',
                'parent_id' => 74,
            ),
            70 =>
            array (
                'id' => 76,
                'name' => 'job-applications',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:24',
                'updated_at' => '2021-12-15 11:18:24',
                'display_name' => 'طلبات التوظيف',
                'parent_id' => NULL,
            ),
            71 =>
            array (
                'id' => 92,
                'name' => 'products-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 12:07:53',
                'updated_at' => '2021-12-15 12:08:25',
                'display_name' => 'تغيير حالة المنتجات',
                'parent_id' => 49,
            ),
            72 =>
            array (
                'id' => 93,
                'name' => 'news-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 12:07:53',
                'updated_at' => '2021-12-15 12:08:39',
                'display_name' => 'تغيير حالة الأخبار والفعاليات',
                'parent_id' => 58,
            ),
            73 =>
            array (
                'id' => 94,
                'name' => 'news-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 12:07:53',
                'updated_at' => '2021-12-15 12:08:49',
                'display_name' => 'حذف الأخبار والفعاليات',
                'parent_id' => 58,
            ),
            74 =>
            array (
                'id' => 95,
                'name' => 'questions-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 12:07:53',
                'updated_at' => '2021-12-15 12:09:00',
                'display_name' => 'تغيير حالة الحملات',
                'parent_id' => 61,
            ),
            75 =>
            array (
                'id' => 96,
                'name' => 'questions-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 12:07:53',
                'updated_at' => '2021-12-15 12:09:18',
                'display_name' => 'اضافة وتعديل حملات',
                'parent_id' => 61,
            ),
            76 =>
            array (
                'id' => 97,
                'name' => 'questions-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 12:07:53',
                'updated_at' => '2021-12-15 12:09:15',
                'display_name' => 'حذف الحملات',
                'parent_id' => 61,
            ),
            77 =>
            array (
                'id' => 100,
                'name' => 'docs-sections-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 13:45:39',
                'updated_at' => '2021-12-15 13:45:39',
                'display_name' => 'حذف من نحن',
                'parent_id' => 44,
            ),
            78 =>
            array (
                'id' => 101,
                'name' => 'roles',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 00:00:00',
                'updated_at' => NULL,
                'display_name' => 'الأدوار',
                'parent_id' => NULL,
            ),
            79 =>
            array (
                'id' => 102,
                'name' => 'roles-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 13:47:29',
                'updated_at' => '2021-12-15 13:47:29',
                'display_name' => 'رؤية الأدوار',
                'parent_id' => 101,
            ),
            80 =>
            array (
                'id' => 103,
                'name' => 'roles-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 13:47:29',
                'updated_at' => '2021-12-15 13:47:29',
                'display_name' => 'اضافة وتعديل دور',
                'parent_id' => 101,
            ),
            81 =>
            array (
                'id' => 104,
                'name' => 'roles-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 13:47:29',
                'updated_at' => '2021-12-15 13:47:29',
                'display_name' => 'حذف الأدوار',
                'parent_id' => 101,
            ),
            82 =>
            array (
                'id' => 105,
                'name' => 'mailing-list',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 13:47:29',
                'updated_at' => '2021-12-15 13:47:29',
                'display_name' => 'القوائم البريدية',
                'parent_id' => NULL,
            ),
            83 =>
            array (
                'id' => 106,
                'name' => 'view-mailing-list',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 13:47:29',
                'updated_at' => '2021-12-15 13:47:29',
                'display_name' => 'رؤية القائمة البريدية',
                'parent_id' => 105,
            ),
            89 =>
            array (
                'id' => 112,
                'name' => 'library-settings',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'الإحصائيات',
                'parent_id' => NULL,
            ),
            90 =>
            array (
                'id' => 113,
                'name' => 'library-settings-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:16',
                'display_name' => 'رؤية الإحصائية',
                'parent_id' => 112,
            ),
            91 =>
            array (
                'id' => 114,
                'name' => 'library-settings-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:08',
                'display_name' => 'اضافة تعديل الإحصائية',
                'parent_id' => 112,
            ),
            92 =>
            array (
                'id' => 115,
                'name' => 'library-settings-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:54',
                'display_name' => 'تغيير حالة  الإحصائية',
                'parent_id' => 112,
            ),
            93 =>
            array (
                'id' => 116,
                'name' => 'library-settings-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:46',
                'display_name' => 'حذف الإحصائية',
                'parent_id' => 112,
            ),
            119 =>
            array (
                'id' => 142,
                'name' => 'library-uses',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'اللافتات',
                'parent_id' => NULL,
            ),
            120 =>
            array (
                'id' => 143,
                'name' => 'library-uses-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:16',
                'display_name' => 'رؤية  اللافتة',
                'parent_id' => 142,
            ),
            121 =>
            array (
                'id' => 144,
                'name' => 'library-uses-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:08',
                'display_name' => 'اضافة تعديل لافتة',
                'parent_id' => 142,
            ),
            122 =>
            array (
                'id' => 145,
                'name' => 'library-uses-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:54',
                'display_name' => 'تغيير حالة اللافتة',
                'parent_id' => 142,
            ),
            123 =>
            array (
                'id' => 146,
                'name' => 'library-uses-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:46',
                'display_name' => 'حذف لافتة',
                'parent_id' => 142,
            ),
            124 =>
            array (
                'id' => 147,
                'name' => 'docs-pages',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'الاسئلة',
                'parent_id' => NULL,
            ),
            125 =>
            array (
                'id' => 148,
                'name' => 'docs-pages-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:16',
                'display_name' => 'رؤية الاسئلة',
                'parent_id' => 147,
            ),
            126 =>
            array (
                'id' => 149,
                'name' => 'docs-pages-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:08',
                'display_name' => 'اضافة تعديل سؤال',
                'parent_id' => 147,
            ),
            127 =>
            array (
                'id' => 150,
                'name' => 'docs-pages-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:54',
                'display_name' => 'تغيير حالة السؤال',
                'parent_id' => 147,
            ),
            128 =>
            array (
                'id' => 151,
                'name' => 'docs-pages-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:46',
                'display_name' => 'حذف سؤال',
                'parent_id' => 147,
            ),
            129 =>
            array (
                'id' => 152,
                'name' => 'categories',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'Categories',
                'parent_id' => NULL,
            ),
            130 =>
            array (
                'id' => 153,
                'name' => 'categories-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:16',
                'display_name' => 'View all Categories',
                'parent_id' => 152,
            ),
            131 =>
            array (
                'id' => 154,
                'name' => 'categories-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:08',
                'display_name' => 'Add \ Edit Category',
                'parent_id' => 152,
            ),
            132 =>
            array (
                'id' => 155,
                'name' => 'categories-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:54',
                'display_name' => 'Change Status for Category',
                'parent_id' => 152,
            ),
            133 =>
            array (
                'id' => 156,
                'name' => 'categories-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:46',
                'display_name' => 'Delete Category ',
                'parent_id' => 152,
            ),
            134 =>
            array (
                'id' => 157,
                'name' => 'blogs',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'Blogs',
                'parent_id' => NULL,
            ),
            135 =>
            array (
                'id' => 158,
                'name' => 'blogs-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:16',
                'display_name' => 'View all Blogs',
                'parent_id' => 157,
            ),
            136 =>
            array (
                'id' => 159,
                'name' => 'blogs-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:08',
                'display_name' => 'Add \ Edit Blog',
                'parent_id' => 157,
            ),
            137 =>
            array (
                'id' => 160,
                'name' => 'blogs-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:54',
                'display_name' => 'Change Status for Blog',
                'parent_id' => 157,
            ),
            138 =>
            array (
                'id' => 161,
                'name' => 'blogs-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:46',
                'display_name' => 'Delete Blog ',
                'parent_id' => 157,
            ),
            139 =>
            array (
                'id' => 162,
                'name' => 'blog-sections',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:18:23',
                'display_name' => 'Blog Sections',
                'parent_id' => NULL,
            ),
            140 =>
            array (
                'id' => 163,
                'name' => 'blog-sections-view',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:16',
                'display_name' => 'View all Blog Sections',
                'parent_id' => 162,
            ),
            141 =>
            array (
                'id' => 164,
                'name' => 'blog-sections-store',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:30:08',
                'display_name' => 'Add \ Edit Blog Section',
                'parent_id' => 162,
            ),
            142 =>
            array (
                'id' => 165,
                'name' => 'blog-sections-status',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:54',
                'display_name' => 'Change Status for Blog Section',
                'parent_id' => 152,
            ),
            143 =>
            array (
                'id' => 166,
                'name' => 'blog-sections-delete',
                'guard_name' => 'admin',
                'created_at' => '2021-12-15 11:18:23',
                'updated_at' => '2021-12-15 11:29:46',
                'display_name' => 'Delete Blog Section ',
                'parent_id' => 152,
            ),
        ));


    }
}
