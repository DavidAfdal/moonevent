<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use BezhanSalleh\FilamentShield\Support\Utils;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\PermissionRegistrar;

class ShieldSeeder extends Seeder
{
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $rolesWithPermissions = '[
        {
            "name":"super_admin",
            "guard_name":"web",
            "permissions":[
                "ViewAny:Role",
                "View:Role",
                "Create:Role",
                "Update:Role",
                "Delete:Role",
                "Restore:Role",
                "ForceDelete:Role",
                "ForceDeleteAny:Role",
                "RestoreAny:Role",
                "Replicate:Role",
                "Reorder:Role",
                "ViewAny:Category",
                "View:Category",
                "ViewAny:Catering",
                "View:Catering",
                "View:Decoration",
                "ViewAny:Decoration",
                "ViewAny:Entertainment",
                "View:Entertainment",
                "ViewAny:MC",
                "View:MC",
                "ViewAny:MUA",
                "View:MUA",
                "ViewAny:PackageBooking",
                "View:PackageBooking",
                "ViewAny:PackageTour",
                "View:PackageTour",
                "ViewAny:Photography",
                "View:Photography",
                "ViewAny:Portofolio",
                "View:Portofolio",
                "ViewAny:User",
                "View:User",
                "View:CustomDashboard",
                "View:StatsOverview","Create:Category","Update:Category","Delete:Category",
                "Restore:Category","ForceDelete:Category","ForceDeleteAny:Category","RestoreAny:Category","Replicate:Category",
                "Reorder:Category","Create:Catering","Update:Catering","Delete:Catering","Restore:Catering","ForceDelete:Catering",
                "ForceDeleteAny:Catering","RestoreAny:Catering","Replicate:Catering","Reorder:Catering","Create:Decoration","Update:Decoration",
                "Delete:Decoration","Restore:Decoration","ForceDelete:Decoration","ForceDeleteAny:Decoration","RestoreAny:Decoration","Replicate:Decoration","Reorder:Decoration","Create:Entertainment","Update:Entertainment","Delete:Entertainment","Restore:Entertainment","ForceDelete:Entertainment","ForceDeleteAny:Entertainment","RestoreAny:Entertainment","Replicate:Entertainment","Reorder:Entertainment","Create:MC","Update:MC","Delete:MC","Restore:MC","ForceDelete:MC","ForceDeleteAny:MC","RestoreAny:MC","Replicate:MC","Reorder:MC","Create:MUA","Update:MUA","Delete:MUA","Restore:MUA","ForceDelete:MUA","ForceDeleteAny:MUA","RestoreAny:MUA","Replicate:MUA","Reorder:MUA","Create:PackageBooking","Update:PackageBooking","Delete:PackageBooking","Restore:PackageBooking","ForceDelete:PackageBooking","ForceDeleteAny:PackageBooking","RestoreAny:PackageBooking","Replicate:PackageBooking","Reorder:PackageBooking","Create:PackageTour","Update:PackageTour","Delete:PackageTour","Restore:PackageTour","ForceDelete:PackageTour","ForceDeleteAny:PackageTour","RestoreAny:PackageTour","Replicate:PackageTour","Reorder:PackageTour","Create:Photography","Update:Photography","Delete:Photography","Restore:Photography","ForceDelete:Photography","ForceDeleteAny:Photography","RestoreAny:Photography","Replicate:Photography","Reorder:Photography","Create:Portofolio","Update:Portofolio","Delete:Portofolio","Restore:Portofolio","ForceDelete:Portofolio","ForceDeleteAny:Portofolio","RestoreAny:Portofolio","Replicate:Portofolio","Reorder:Portofolio","Create:User","Update:User","Delete:User","Restore:User","ForceDelete:User","ForceDeleteAny:User","RestoreAny:User","Replicate:User","Reorder:User","View:BookingChart","View:PackageWeddingChart","View:CalendarEventWidget"]},{"name":"Admin","guard_name":"web","permissions":["ViewAny:Role","View:Role","ViewAny:Category","View:Category","ViewAny:Catering","View:Catering","View:Decoration","ViewAny:Decoration","ViewAny:Entertainment","View:Entertainment",
                "ViewAny:MC","View:MC","ViewAny:MUA","View:MUA","ViewAny:PackageBooking",
                "View:PackageBooking","ViewAny:PackageTour","View:PackageTour","ViewAny:Photography",
                "ViewAny:Testimoni",
                "View:Testimoni",
                "Create:Testimoni",
                "Update:Testimoni",
                "Delete:Testimoni",
                "Restore:Testimoni",
                "ForceDelete:Testimoni",
                "ForceDeleteAny:Testimoni",
                "RestoreAny:Testimoni",
                "Replicate:Testimoni",
                "Reorder:Testimoni",
                "Approve:PackageBooking",
                "SetWedding:Category",
                "View:Photography","ViewAny:Portofolio","View:Portofolio","ViewAny:User","View:User","View:CustomDashboard","View:StatsOverview"
                ]
         },
         {
                "name":"admin",
                "guard_name":"web",
                "permissions":[
                    "ViewAny:Testimoni","View:Testimoni",
                    "ViewAny:Category","View:Category",
                    "ViewAny:Catering","View:Catering",
                    "ViewAny:Decoration","View:Decoration",
                    "ViewAny:Entertainment","View:Entertainment",
                    "ViewAny:MC","View:MC",
                    "ViewAny:MUA","View:MUA",
                    "ViewAny:PackageBooking","View:PackageBooking",
                    "ViewAny:PackageTour","View:PackageTour",
                    "ViewAny:Photography","View:Photography",
                    "ViewAny:Portofolio","View:Portofolio",
                    "ViewAny:User","View:User",
                    "View:CustomDashboard",
                    "View:StatsOverview"
                ]
            }
        ]';

        $directPermissions = '[
            {
                "name": "checkout_package",
                "guard_name": "web"
            },
            {
                "name": "view_order",
                "guard_name": "web"
            }
        ]';
        
        static::makeRolesWithPermissions($rolesWithPermissions);
        static::makeDirectPermissions($directPermissions);

        $roleModel = Utils::getRoleModel();
        $permissionModel = Utils::getPermissionModel();

        $customerRole = $roleModel::firstOrCreate([
            'name' => 'customer',
            'guard_name' => 'web'
        ]);

        $customerRole->syncPermissions(
            $permissionModel::whereIn('name', [
                'checkout_package',
                'view_order'
            ])->get()
        );


        $superAdminRole = $roleModel::where('name', 'super_admin')->first();

        $user = User::firstOrCreate(
            ['email' => 'super@admin.com'],
            [
                'name' => 'super admin',
                'phone_number' => '0839439892',
                'avatar' => 'image/default-avatar.png',
                'password' => Hash::make('kusuma290303#*!')
            ]
        );

        
        if (!$user->hasRole('super_admin')) {
            $user->assignRole($superAdminRole);
        }



        $this->command->info('Shield Seeding Completed.');
    }

    protected static function makeRolesWithPermissions(string $rolesWithPermissions): void
{
    if (! blank($rolePlusPermissions = json_decode($rolesWithPermissions, true))) {

        /** @var Model $roleModel */
        $roleModel = Utils::getRoleModel();

        /** @var Model $permissionModel */
        $permissionModel = Utils::getPermissionModel();  // ✅ INI YANG KAMU LUPA

        foreach ($rolePlusPermissions as $rolePlusPermission) {

            $role = $roleModel::firstOrCreate([
                'name' => $rolePlusPermission['name'],
                'guard_name' => $rolePlusPermission['guard_name'],
            ]);

            if (! blank($rolePlusPermission['permissions'])) {

                $permissionModels = collect($rolePlusPermission['permissions'])
                    ->map(fn ($permission) => 
                    $permissionModel::firstOrCreate([
                        'name' => $permission,
                        'guard_name' => $rolePlusPermission['guard_name'],
                    ]))
                    ->all();

                $role->syncPermissions($permissionModels);
            }
        }
    }
}


    public static function makeDirectPermissions(string $directPermissions): void
    {
        if (! blank($permissions = json_decode($directPermissions, true))) {
            /** @var Model $permissionModel */
            $permissionModel = Utils::getPermissionModel();

            foreach ($permissions as $permission) {
                if ($permissionModel::whereName($permission)->doesntExist()) {
                    $permissionModel::create([
                        'name' => $permission['name'],
                        'guard_name' => $permission['guard_name'],
                    ]);
                }
            }
        }
    }
}
