<?php
/**
 * File containing the SortClauseVisitor\LocationDepth class
 *
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 * @version //autogentag//
 */

namespace xrow\EzPublishSolrDocsBundle\Persistence\Solrdoc\Content\Search\SortClauseVisitor;

use xrow\EzPublishSolrDocsBundle\Persistence\Solrdoc\Content\Search\SortClauseVisitor;
use eZ\Publish\API\Repository\Values\Content\Query\SortClause;

/**
 * Visits the sortClause tree into a Solr query
 */
class LocationDepth extends SortClauseVisitor
{
    /**
     * CHeck if visitor is applicable to current sortClause
     *
     * @param SortClause $sortClause
     *
     * @return boolean
     */
    public function canVisit( SortClause $sortClause )
    {
        return $sortClause instanceof SortClause\LocationDepth;
    }

    /**
     * Map field value to a proper Solr representation
     *
     * @param SortClause $sortClause
     *
     * @return string
     */
    public function visit( SortClause $sortClause )
    {
        return 'main_depth_i' . $this->getDirection( $sortClause );
    }
}

