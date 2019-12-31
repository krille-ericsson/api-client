<?php
/**
 * PositionInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Bybit API
 *
 * ## REST API for the Bybit Exchange.
 *
 * OpenAPI spec version: 1.0.0
 * Contact: support@bybit.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.8
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PositionInfo Class Doc Comment
 *
 * @category Class
 * @description PositionInfo.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PositionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PositionInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'float',
        'user_id' => 'float',
        'risk_id' => 'float',
        'symbol' => 'string',
        'side' => 'string',
        'size' => 'float',
        'position_value' => 'float',
        'entry_price' => 'float',
        'leverage' => 'float',
        'auto_add_margin' => 'float',
        'position_margin' => 'float',
        'liq_price' => 'float',
        'bust_price' => 'float',
        'occ_closing_fee' => 'float',
        'occ_funding_fee' => 'float',
        'take_profit' => 'float',
        'stop_loss' => 'float',
        'trailing_stop' => 'float',
        'position_status' => 'string',
        'deleverage_indicator' => 'string',
        'oc_calc_data' => 'string',
        'order_margin' => 'float',
        'wallet_balance' => 'float',
        'unrealised_pnl' => 'float',
        'realised_pnl' => 'float',
        'cum_realised_pnl' => 'float',
        'cum_commission' => 'float',
        'cross_seq' => 'float',
        'position_seq' => 'float',
        'created_at' => 'string',
        'updated_at' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'user_id' => 'int32',
        'risk_id' => 'int32',
        'symbol' => null,
        'side' => null,
        'size' => 'int32',
        'position_value' => 'int32',
        'entry_price' => 'int32',
        'leverage' => 'int32',
        'auto_add_margin' => 'int32',
        'position_margin' => 'int32',
        'liq_price' => 'int32',
        'bust_price' => 'int32',
        'occ_closing_fee' => 'int32',
        'occ_funding_fee' => 'int32',
        'take_profit' => 'int32',
        'stop_loss' => 'int32',
        'trailing_stop' => 'int32',
        'position_status' => null,
        'deleverage_indicator' => null,
        'oc_calc_data' => 'JSON',
        'order_margin' => 'int32',
        'wallet_balance' => 'int32',
        'unrealised_pnl' => 'int32',
        'realised_pnl' => 'int32',
        'cum_realised_pnl' => 'int32',
        'cum_commission' => 'int32',
        'cross_seq' => 'int32',
        'position_seq' => 'int32',
        'created_at' => null,
        'updated_at' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'user_id' => 'user_id',
        'risk_id' => 'risk_id',
        'symbol' => 'symbol',
        'side' => 'side',
        'size' => 'size',
        'position_value' => 'position_value',
        'entry_price' => 'entry_price',
        'leverage' => 'leverage',
        'auto_add_margin' => 'auto_add_margin',
        'position_margin' => 'position_margin',
        'liq_price' => 'liq_price',
        'bust_price' => 'bust_price',
        'occ_closing_fee' => 'occ_closing_fee',
        'occ_funding_fee' => 'occ_funding_fee',
        'take_profit' => 'take_profit',
        'stop_loss' => 'stop_loss',
        'trailing_stop' => 'trailing_stop',
        'position_status' => 'position_status',
        'deleverage_indicator' => 'deleverage_indicator',
        'oc_calc_data' => 'oc_calc_data',
        'order_margin' => 'order_margin',
        'wallet_balance' => 'wallet_balance',
        'unrealised_pnl' => 'unrealised_pnl',
        'realised_pnl' => 'realised_pnl',
        'cum_realised_pnl' => 'cum_realised_pnl',
        'cum_commission' => 'cum_commission',
        'cross_seq' => 'cross_seq',
        'position_seq' => 'position_seq',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'user_id' => 'setUserId',
        'risk_id' => 'setRiskId',
        'symbol' => 'setSymbol',
        'side' => 'setSide',
        'size' => 'setSize',
        'position_value' => 'setPositionValue',
        'entry_price' => 'setEntryPrice',
        'leverage' => 'setLeverage',
        'auto_add_margin' => 'setAutoAddMargin',
        'position_margin' => 'setPositionMargin',
        'liq_price' => 'setLiqPrice',
        'bust_price' => 'setBustPrice',
        'occ_closing_fee' => 'setOccClosingFee',
        'occ_funding_fee' => 'setOccFundingFee',
        'take_profit' => 'setTakeProfit',
        'stop_loss' => 'setStopLoss',
        'trailing_stop' => 'setTrailingStop',
        'position_status' => 'setPositionStatus',
        'deleverage_indicator' => 'setDeleverageIndicator',
        'oc_calc_data' => 'setOcCalcData',
        'order_margin' => 'setOrderMargin',
        'wallet_balance' => 'setWalletBalance',
        'unrealised_pnl' => 'setUnrealisedPnl',
        'realised_pnl' => 'setRealisedPnl',
        'cum_realised_pnl' => 'setCumRealisedPnl',
        'cum_commission' => 'setCumCommission',
        'cross_seq' => 'setCrossSeq',
        'position_seq' => 'setPositionSeq',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'user_id' => 'getUserId',
        'risk_id' => 'getRiskId',
        'symbol' => 'getSymbol',
        'side' => 'getSide',
        'size' => 'getSize',
        'position_value' => 'getPositionValue',
        'entry_price' => 'getEntryPrice',
        'leverage' => 'getLeverage',
        'auto_add_margin' => 'getAutoAddMargin',
        'position_margin' => 'getPositionMargin',
        'liq_price' => 'getLiqPrice',
        'bust_price' => 'getBustPrice',
        'occ_closing_fee' => 'getOccClosingFee',
        'occ_funding_fee' => 'getOccFundingFee',
        'take_profit' => 'getTakeProfit',
        'stop_loss' => 'getStopLoss',
        'trailing_stop' => 'getTrailingStop',
        'position_status' => 'getPositionStatus',
        'deleverage_indicator' => 'getDeleverageIndicator',
        'oc_calc_data' => 'getOcCalcData',
        'order_margin' => 'getOrderMargin',
        'wallet_balance' => 'getWalletBalance',
        'unrealised_pnl' => 'getUnrealisedPnl',
        'realised_pnl' => 'getRealisedPnl',
        'cum_realised_pnl' => 'getCumRealisedPnl',
        'cum_commission' => 'getCumCommission',
        'cross_seq' => 'getCrossSeq',
        'position_seq' => 'getPositionSeq',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['risk_id'] = isset($data['risk_id']) ? $data['risk_id'] : null;
        $this->container['symbol'] = isset($data['symbol']) ? $data['symbol'] : null;
        $this->container['side'] = isset($data['side']) ? $data['side'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['position_value'] = isset($data['position_value']) ? $data['position_value'] : null;
        $this->container['entry_price'] = isset($data['entry_price']) ? $data['entry_price'] : null;
        $this->container['leverage'] = isset($data['leverage']) ? $data['leverage'] : null;
        $this->container['auto_add_margin'] = isset($data['auto_add_margin']) ? $data['auto_add_margin'] : null;
        $this->container['position_margin'] = isset($data['position_margin']) ? $data['position_margin'] : null;
        $this->container['liq_price'] = isset($data['liq_price']) ? $data['liq_price'] : null;
        $this->container['bust_price'] = isset($data['bust_price']) ? $data['bust_price'] : null;
        $this->container['occ_closing_fee'] = isset($data['occ_closing_fee']) ? $data['occ_closing_fee'] : null;
        $this->container['occ_funding_fee'] = isset($data['occ_funding_fee']) ? $data['occ_funding_fee'] : null;
        $this->container['take_profit'] = isset($data['take_profit']) ? $data['take_profit'] : null;
        $this->container['stop_loss'] = isset($data['stop_loss']) ? $data['stop_loss'] : null;
        $this->container['trailing_stop'] = isset($data['trailing_stop']) ? $data['trailing_stop'] : null;
        $this->container['position_status'] = isset($data['position_status']) ? $data['position_status'] : null;
        $this->container['deleverage_indicator'] = isset($data['deleverage_indicator']) ? $data['deleverage_indicator'] : null;
        $this->container['oc_calc_data'] = isset($data['oc_calc_data']) ? $data['oc_calc_data'] : null;
        $this->container['order_margin'] = isset($data['order_margin']) ? $data['order_margin'] : null;
        $this->container['wallet_balance'] = isset($data['wallet_balance']) ? $data['wallet_balance'] : null;
        $this->container['unrealised_pnl'] = isset($data['unrealised_pnl']) ? $data['unrealised_pnl'] : null;
        $this->container['realised_pnl'] = isset($data['realised_pnl']) ? $data['realised_pnl'] : null;
        $this->container['cum_realised_pnl'] = isset($data['cum_realised_pnl']) ? $data['cum_realised_pnl'] : null;
        $this->container['cum_commission'] = isset($data['cum_commission']) ? $data['cum_commission'] : null;
        $this->container['cross_seq'] = isset($data['cross_seq']) ? $data['cross_seq'] : null;
        $this->container['position_seq'] = isset($data['position_seq']) ? $data['position_seq'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return float
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param float $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return float
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param float $user_id user_id
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets risk_id
     *
     * @return float
     */
    public function getRiskId()
    {
        return $this->container['risk_id'];
    }

    /**
     * Sets risk_id
     *
     * @param float $risk_id risk_id
     *
     * @return $this
     */
    public function setRiskId($risk_id)
    {
        $this->container['risk_id'] = $risk_id;

        return $this;
    }

    /**
     * Gets symbol
     *
     * @return string
     */
    public function getSymbol()
    {
        return $this->container['symbol'];
    }

    /**
     * Sets symbol
     *
     * @param string $symbol symbol
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->container['symbol'] = $symbol;

        return $this;
    }

    /**
     * Gets side
     *
     * @return string
     */
    public function getSide()
    {
        return $this->container['side'];
    }

    /**
     * Sets side
     *
     * @param string $side side
     *
     * @return $this
     */
    public function setSide($side)
    {
        $this->container['side'] = $side;

        return $this;
    }

    /**
     * Gets size
     *
     * @return float
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param float $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets position_value
     *
     * @return float
     */
    public function getPositionValue()
    {
        return $this->container['position_value'];
    }

    /**
     * Sets position_value
     *
     * @param float $position_value position_value
     *
     * @return $this
     */
    public function setPositionValue($position_value)
    {
        $this->container['position_value'] = $position_value;

        return $this;
    }

    /**
     * Gets entry_price
     *
     * @return float
     */
    public function getEntryPrice()
    {
        return $this->container['entry_price'];
    }

    /**
     * Sets entry_price
     *
     * @param float $entry_price entry_price
     *
     * @return $this
     */
    public function setEntryPrice($entry_price)
    {
        $this->container['entry_price'] = $entry_price;

        return $this;
    }

    /**
     * Gets leverage
     *
     * @return float
     */
    public function getLeverage()
    {
        return $this->container['leverage'];
    }

    /**
     * Sets leverage
     *
     * @param float $leverage leverage
     *
     * @return $this
     */
    public function setLeverage($leverage)
    {
        $this->container['leverage'] = $leverage;

        return $this;
    }

    /**
     * Gets auto_add_margin
     *
     * @return float
     */
    public function getAutoAddMargin()
    {
        return $this->container['auto_add_margin'];
    }

    /**
     * Sets auto_add_margin
     *
     * @param float $auto_add_margin auto_add_margin
     *
     * @return $this
     */
    public function setAutoAddMargin($auto_add_margin)
    {
        $this->container['auto_add_margin'] = $auto_add_margin;

        return $this;
    }

    /**
     * Gets position_margin
     *
     * @return float
     */
    public function getPositionMargin()
    {
        return $this->container['position_margin'];
    }

    /**
     * Sets position_margin
     *
     * @param float $position_margin position_margin
     *
     * @return $this
     */
    public function setPositionMargin($position_margin)
    {
        $this->container['position_margin'] = $position_margin;

        return $this;
    }

    /**
     * Gets liq_price
     *
     * @return float
     */
    public function getLiqPrice()
    {
        return $this->container['liq_price'];
    }

    /**
     * Sets liq_price
     *
     * @param float $liq_price liq_price
     *
     * @return $this
     */
    public function setLiqPrice($liq_price)
    {
        $this->container['liq_price'] = $liq_price;

        return $this;
    }

    /**
     * Gets bust_price
     *
     * @return float
     */
    public function getBustPrice()
    {
        return $this->container['bust_price'];
    }

    /**
     * Sets bust_price
     *
     * @param float $bust_price bust_price
     *
     * @return $this
     */
    public function setBustPrice($bust_price)
    {
        $this->container['bust_price'] = $bust_price;

        return $this;
    }

    /**
     * Gets occ_closing_fee
     *
     * @return float
     */
    public function getOccClosingFee()
    {
        return $this->container['occ_closing_fee'];
    }

    /**
     * Sets occ_closing_fee
     *
     * @param float $occ_closing_fee occ_closing_fee
     *
     * @return $this
     */
    public function setOccClosingFee($occ_closing_fee)
    {
        $this->container['occ_closing_fee'] = $occ_closing_fee;

        return $this;
    }

    /**
     * Gets occ_funding_fee
     *
     * @return float
     */
    public function getOccFundingFee()
    {
        return $this->container['occ_funding_fee'];
    }

    /**
     * Sets occ_funding_fee
     *
     * @param float $occ_funding_fee occ_funding_fee
     *
     * @return $this
     */
    public function setOccFundingFee($occ_funding_fee)
    {
        $this->container['occ_funding_fee'] = $occ_funding_fee;

        return $this;
    }

    /**
     * Gets take_profit
     *
     * @return float
     */
    public function getTakeProfit()
    {
        return $this->container['take_profit'];
    }

    /**
     * Sets take_profit
     *
     * @param float $take_profit take_profit
     *
     * @return $this
     */
    public function setTakeProfit($take_profit)
    {
        $this->container['take_profit'] = $take_profit;

        return $this;
    }

    /**
     * Gets stop_loss
     *
     * @return float
     */
    public function getStopLoss()
    {
        return $this->container['stop_loss'];
    }

    /**
     * Sets stop_loss
     *
     * @param float $stop_loss stop_loss
     *
     * @return $this
     */
    public function setStopLoss($stop_loss)
    {
        $this->container['stop_loss'] = $stop_loss;

        return $this;
    }

    /**
     * Gets trailing_stop
     *
     * @return float
     */
    public function getTrailingStop()
    {
        return $this->container['trailing_stop'];
    }

    /**
     * Sets trailing_stop
     *
     * @param float $trailing_stop trailing_stop
     *
     * @return $this
     */
    public function setTrailingStop($trailing_stop)
    {
        $this->container['trailing_stop'] = $trailing_stop;

        return $this;
    }

    /**
     * Gets position_status
     *
     * @return string
     */
    public function getPositionStatus()
    {
        return $this->container['position_status'];
    }

    /**
     * Sets position_status
     *
     * @param string $position_status position_status
     *
     * @return $this
     */
    public function setPositionStatus($position_status)
    {
        $this->container['position_status'] = $position_status;

        return $this;
    }

    /**
     * Gets deleverage_indicator
     *
     * @return string
     */
    public function getDeleverageIndicator()
    {
        return $this->container['deleverage_indicator'];
    }

    /**
     * Sets deleverage_indicator
     *
     * @param string $deleverage_indicator deleverage_indicator
     *
     * @return $this
     */
    public function setDeleverageIndicator($deleverage_indicator)
    {
        $this->container['deleverage_indicator'] = $deleverage_indicator;

        return $this;
    }

    /**
     * Gets oc_calc_data
     *
     * @return string
     */
    public function getOcCalcData()
    {
        return $this->container['oc_calc_data'];
    }

    /**
     * Sets oc_calc_data
     *
     * @param string $oc_calc_data oc_calc_data
     *
     * @return $this
     */
    public function setOcCalcData($oc_calc_data)
    {
        $this->container['oc_calc_data'] = $oc_calc_data;

        return $this;
    }

    /**
     * Gets order_margin
     *
     * @return float
     */
    public function getOrderMargin()
    {
        return $this->container['order_margin'];
    }

    /**
     * Sets order_margin
     *
     * @param float $order_margin order_margin
     *
     * @return $this
     */
    public function setOrderMargin($order_margin)
    {
        $this->container['order_margin'] = $order_margin;

        return $this;
    }

    /**
     * Gets wallet_balance
     *
     * @return float
     */
    public function getWalletBalance()
    {
        return $this->container['wallet_balance'];
    }

    /**
     * Sets wallet_balance
     *
     * @param float $wallet_balance wallet_balance
     *
     * @return $this
     */
    public function setWalletBalance($wallet_balance)
    {
        $this->container['wallet_balance'] = $wallet_balance;

        return $this;
    }

    /**
     * Gets unrealised_pnl
     *
     * @return float
     */
    public function getUnrealisedPnl()
    {
        return $this->container['unrealised_pnl'];
    }

    /**
     * Sets unrealised_pnl
     *
     * @param float $unrealised_pnl unrealised_pnl
     *
     * @return $this
     */
    public function setUnrealisedPnl($unrealised_pnl)
    {
        $this->container['unrealised_pnl'] = $unrealised_pnl;

        return $this;
    }

    /**
     * Gets realised_pnl
     *
     * @return float
     */
    public function getRealisedPnl()
    {
        return $this->container['realised_pnl'];
    }

    /**
     * Sets realised_pnl
     *
     * @param float $realised_pnl realised_pnl
     *
     * @return $this
     */
    public function setRealisedPnl($realised_pnl)
    {
        $this->container['realised_pnl'] = $realised_pnl;

        return $this;
    }

    /**
     * Gets cum_realised_pnl
     *
     * @return float
     */
    public function getCumRealisedPnl()
    {
        return $this->container['cum_realised_pnl'];
    }

    /**
     * Sets cum_realised_pnl
     *
     * @param float $cum_realised_pnl cum_realised_pnl
     *
     * @return $this
     */
    public function setCumRealisedPnl($cum_realised_pnl)
    {
        $this->container['cum_realised_pnl'] = $cum_realised_pnl;

        return $this;
    }

    /**
     * Gets cum_commission
     *
     * @return float
     */
    public function getCumCommission()
    {
        return $this->container['cum_commission'];
    }

    /**
     * Sets cum_commission
     *
     * @param float $cum_commission cum_commission
     *
     * @return $this
     */
    public function setCumCommission($cum_commission)
    {
        $this->container['cum_commission'] = $cum_commission;

        return $this;
    }

    /**
     * Gets cross_seq
     *
     * @return float
     */
    public function getCrossSeq()
    {
        return $this->container['cross_seq'];
    }

    /**
     * Sets cross_seq
     *
     * @param float $cross_seq cross_seq
     *
     * @return $this
     */
    public function setCrossSeq($cross_seq)
    {
        $this->container['cross_seq'] = $cross_seq;

        return $this;
    }

    /**
     * Gets position_seq
     *
     * @return float
     */
    public function getPositionSeq()
    {
        return $this->container['position_seq'];
    }

    /**
     * Sets position_seq
     *
     * @param float $position_seq position_seq
     *
     * @return $this
     */
    public function setPositionSeq($position_seq)
    {
        $this->container['position_seq'] = $position_seq;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


