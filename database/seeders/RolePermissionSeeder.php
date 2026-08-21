<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Clear permission cache
        app()[PermissionRegistrar::class]
            ->forgetCachedPermissions();


        // =========================
        // PERMISSIONS
        // =========================

        $viewuser = Permission::firstOrCreate([
            'name' => 'View Users',
            'guard_name' => 'web',
        ]);

        $createuser = Permission::firstOrCreate([
            'name' => 'Create Users',
            'guard_name' => 'web',
        ]);

        $edituser = Permission::firstOrCreate([
            'name' => 'Edit Users',
            'guard_name' => 'web',
        ]);

        $deleteuser = Permission::firstOrCreate([
            'name' => 'Delete Users',
            'guard_name' => 'web',
        ]);

        $downloadreport = Permission::firstOrCreate([
            'name' => 'Download Report',
            'guard_name' => 'web',
        ]);

        $attendclass = Permission::firstOrCreate([
            'name' => 'Attend Class',
            'guard_name' => 'web',
        ]);

        $viewtimetable = Permission::firstOrCreate([
            'name' => 'View Timetable',
            'guard_name' => 'web',
        ]);

        $updatetimetable = Permission::firstOrCreate([
            'name' => 'Update Timetable',
            'guard_name' => 'web',
        ]);

        $viewstudentlist = Permission::firstOrCreate([
            'name' => 'View Student List',
            'guard_name' => 'web',
        ]);

        $viewreport = Permission::firstOrCreate([
            'name' => 'View Report',
            'guard_name' => 'web',
        ]);

        $createreport = Permission::firstOrCreate([
            'name' => 'Create Report',
            'guard_name' => 'web',
        ]);


        // =========================
        // ROLES
        // =========================

        $admin = Role::firstOrCreate([
            'name' => 'Admin',
            'guard_name' => 'web',
        ]);

        $teacher = Role::firstOrCreate([
            'name' => 'Teacher',
            'guard_name' => 'web',
        ]);

        $student = Role::firstOrCreate([
            'name' => 'Student',
            'guard_name' => 'web',
        ]);

        $reporting = Role::firstOrCreate([
            'name' => 'Reporting',
            'guard_name' => 'web',
        ]);


        // =========================
        // ADMIN PERMISSIONS
        // =========================

        $admin->syncPermissions([
            $viewuser,
            $createuser,
            $edituser,
            $deleteuser,
            $downloadreport,
            $attendclass,
            $viewtimetable,
            $updatetimetable,
            $viewstudentlist,
            $viewreport,
            $createreport,
        ]);


        // =========================
        // TEACHER PERMISSIONS
        // =========================

        $teacher->syncPermissions([
            $viewuser,
            $createuser,
            $edituser,
            $downloadreport,
            $attendclass,
            $viewtimetable,
            $updatetimetable,
            $viewstudentlist,
            $viewreport,
            $createreport,
        ]);


        // =========================
        // STUDENT PERMISSIONS
        // =========================

        $student->syncPermissions([
            $viewuser,
            $createuser,
            $downloadreport,
            $viewtimetable,
            $viewstudentlist,
            $viewreport,
        ]);


        // =========================
        // REPORTING PERMISSIONS
        // =========================

        $reporting->syncPermissions([
            $viewreport,
            $createreport,
            $downloadreport,
        ]);


        // =========================
        // ASSIGN ADMIN TO USER
        // =========================

        $user = User::where(
            'email',
            'luqmanmunawar100@gmail.com'
        )->first();

        if ($user) {
            $user->syncRoles([$admin]);
        }


        // Clear permission cache
        app()[PermissionRegistrar::class]
            ->forgetCachedPermissions();
    }
}