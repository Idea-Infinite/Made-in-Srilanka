<?php

// File generated from our OpenAPI spec

namespace Stripe\Service\Reporting;

class ReportTypeService extends \Stripe\Service\AbstractService
{
    /**
     * Returns a full list of Report Types. (Requires a <a
     * href="https://stripe-php.com/docs/keys#test-live-modes">live-mode API key</a>.).
     *
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @return \Stripe\Collection
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    public function all($params = null, $opts = null)
    {
        return $this->requestCollection('get', '/v1/reporting/report_types', $params, $opts);
    }

    /**
     * Retrieves the details of a Report Type. (Requires a <a
     * href="https://stripe-php.com/docs/keys#test-live-modes">live-mode API key</a>.).
     *
     * @param string $id
     * @param null|array $params
     * @param null|array|\Stripe\Util\RequestOptions $opts
     *
     * @return \Stripe\Reporting\ReportType
     * @throws \Stripe\Exception\ApiErrorException if the request fails
     *
     */
    public function retrieve($id, $params = null, $opts = null)
    {
        return $this->request('get', $this->buildPath('/v1/reporting/report_types/%s', $id), $params, $opts);
    }
}
