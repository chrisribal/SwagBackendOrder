<?php
/**
 * (c) shopware AG <info@shopware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SwagBackendOrder\Components\PriceCalculation;

class PriceStruct
{
    const ROUND_PRECISION = 2;

    /**
     * @var float
     */
    private $net;

    /**
     * @var float
     */
    private $gross;

    /**
     * @return float
     */
    public function getNet()
    {
        return $this->net;
    }

    /**
     * @param float $net
     */
    public function setNet($net)
    {
        $this->net = $net;
    }

    /**
     * @return float
     */
    public function getGross()
    {
        return $this->gross;
    }

    /**
     * @param float $gross
     */
    public function setGross($gross)
    {
        $this->gross = $gross;
    }

    /**
     * @return float
     */
    public function getRoundedNetPrice()
    {
        return round($this->getNet(), self::ROUND_PRECISION);
    }

    /**
     * @return float
     */
    public function getRoundedGrossPrice()
    {
        return round($this->getGross(), self::ROUND_PRECISION);
    }
}
