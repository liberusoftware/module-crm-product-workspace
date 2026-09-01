<?php

declare(strict_types=1);

namespace Liberu\CRM\ProductWorkspace\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Liberu\Foundation\Organizations\Models\Team;
use Illuminate\Database\Eloquent\Model;

/** @property int $team_id @property array $product_ids */
final class ProductBundle extends Model
{
    public function team(): BelongsTo
    {
        return $this->belongsTo(Team::class);
    }

    protected $table = 'crm_product_workspace_bundles';

    protected $guarded = [];

    protected function casts(): array
    {
        return ['product_ids' => 'array'];
    }
}
