<?php

namespace Drupal\migrate_example\Plugin\migrate\source;

use Drupal\migrate\Plugin\migrate\source\SqlBase;
use Drupal\migrate\Row;

/**
 * Source plugin for instrument content
 *
 * @Migrate_source(
 *   id = "instrument_node"
 * )
 */
class InstrumentNode extends SqlBase {

    /**
     * {@inheritdoc}
     */
    public function query(){
        
    }
}
