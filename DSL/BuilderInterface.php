<?php

/*
 * This file is part of the ONGR package.
 *
 * (c) NFQ Technologies UAB <info@nfq.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ONGR\ElasticsearchBundle\DSL;

/**
 * Interface BuilderInterface.
 */
interface BuilderInterface
{
    /**
     * Generates array which will be passed to elasticsearch-php client.
     *
     * @return array|object
     */
    public function toArray();

    /**
     * Returns element type.
     *
     * @return string
     */
    public function getType();
}
