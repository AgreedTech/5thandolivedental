<?php

namespace GeminiLabs\SiteReviews\Modules\Migrations;

use GeminiLabs\SiteReviews\Database;

class Migrate_5_14_0
{
    /**
     * @return bool
     */
    public function run()
    {
        glsr(Database::class)->deleteInvalidReviews();
        return true;
    }
}
