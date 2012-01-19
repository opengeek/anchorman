<?php
/**
 * AnchorMan
 *
 * Generates #anchor tags eg. http://domain.com/page-name.html#anchor
 *
 * @author Jason Coward
 * @copyright Copyright 2011-2012 by Jason Coward
 *
 **/
$scheme = !isset($scheme) || $scheme === '' ? $modx->getOption('link_tag_scheme', $scriptProperties, 'full') : $scheme;
$resourceId = $modx->resource->get('id');
$queryString = $modx->request->getParameters();
return $modx->makeUrl($resourceId, '', modX::toQueryString($queryString), $scheme) . '#' . urlencode($anchor);
