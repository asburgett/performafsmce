php artisan make:model Organization
php artisan make:controller OrganizationController --model=Organization
php artisan make:migration create_organizations_table
php artisan make:factory OrganizationFactory --model="App\Organization"
php artisan make:test OrganizationsTest

php artisan make:model Division
php artisan make:controller DivisionController --model=Division
php artisan make:migration create_divisions_table
php artisan make:factory DivisionFactory --model="App\Division"
php artisan make:test DivisionsTest

php artisan make:model Branch
php artisan make:controller BranchController --model=Branch
php artisan make:migration create_branches_table
php artisan make:factory BranchFactory --model="App\Branch"
php artisan make:test BranchesTest

php artisan make:model Department
php artisan make:controller DepartmentController --model=Department
php artisan make:migration create_departments_table
php artisan make:factory DepartmentFactory --model="App\Department"
php artisan make:test DepartmentsTest

php artisan make:model Team
php artisan make:controller TeamController --model=Team
php artisan make:migration create_teams_table
php artisan make:factory TeamFactory --model="App\Team"
php artisan make:test TeamsTest

php artisan make:model Workorder
php artisan make:controller WorkorderController --model=Workorder
php artisan make:migration create_workorders_table
php artisan make:factory WorkorderFactory --model="App\Workorder"
php artisan make:test WorkorderTest

php artisan make:model Technician
php artisan make:controller TechnicianController --model=Technician
php artisan make:migration create_technicians_table
php artisan make:factory TechnicianFactory --model="App\Technician"
php artisan make:test TechnicianTest

php artisan migrate