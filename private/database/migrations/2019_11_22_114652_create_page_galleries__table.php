<?php

use App\Models\Entities\Permission;
use App\Models\Entities\Role;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Kalnoy\Nestedset\NestedSet;

class CreatePageGalleriesTable extends Migration
{
    public function __construct()
    {
        $this->rootPermissions = [
            'admin.page.gallery-index' => 'Admin - PageGallery: Index',
            'admin.page.gallery-store' => 'Admin - PageGallery: Store',
            'admin.page.gallery-update' => 'Admin - PageGallery: Update',
            'admin.page.gallery-hard-delete' => 'Admin - PageGallery: Hard Delete',
            'admin.page.gallery-sort' => 'Admin - PageGallery: Sort',
        ];

        $this->adminPermissions = $this->rootPermissions;
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_galleries', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('entity_id');
            $table->string('group')->default('default');
            $table->string('image')->nullable();

            NestedSet::columns($table);

            $table->nullableTimestamps();
            $table->softDeletes();
        });

        Schema::create('page_gallery_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_gallery_id')->unsigned();
            $table->string('locale')->index();

            $table->string('title')->nullable();
            $table->mediumText('excerpt')->nullable();

            $table->unique(['page_gallery_id','locale']);
            $table->foreign('page_gallery_id', 'pgi')->references('id')->on('page_galleries')->onDelete('cascade');
        });

        // Permissions
        $rootRole = Role::find(1);
        $adminRole = Role::find(2);

        foreach ($this->rootPermissions as $name => $title) {
            $permission = Permission::firstOrCreate([
                'name' => $name,
                'title' => $title,
            ]);

            if (!is_null($rootRole)) {
                $rootRole->givePermissionTo($permission);
            }
        }

        foreach ($this->adminPermissions as $name => $title) {
            $permission = Permission::firstOrCreate([
                'name' => $name,
                'title' => $title,
            ]);

            if (!is_null($adminRole)) {
                $adminRole->givePermissionTo($permission);
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Schema::dropIfExists('page_galleries');
        Schema::dropIfExists('page_gallery_translations');

        // Permissions
        $this->permissions = array_merge($this->rootPermissions, $this->adminPermissions);

        foreach ($this->permissions as $name => $title) {
            $permission = Permission::where('name', $name)->first();

            if (!is_null($permission)) {
                $permission->delete();
            }
        }

        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
