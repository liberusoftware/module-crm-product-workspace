<?php

declare(strict_types=1);

namespace Liberu\CRM\ProductWorkspace\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property string $status */
final class ProductSync extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_product_workspace_syncs';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['completed_at' => 'datetime'];
    }
}
