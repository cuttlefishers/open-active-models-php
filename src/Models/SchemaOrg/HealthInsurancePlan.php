<?php

namespace OpenActive\Models\SchemaOrg;

/**
 *
 */
class HealthInsurancePlan extends \OpenActive\Models\SchemaOrg\Intangible
{
    /**
     * @return string[]|null
     */
    public static function getType()
    {
        return "schema:HealthInsurancePlan";
    }

    public static function fieldList() {
        $fields = [
            "healthPlanMarketingUrl" => "healthPlanMarketingUrl",
            "benefitsSummaryUrl" => "benefitsSummaryUrl",
            "healthPlanDrugOption" => "healthPlanDrugOption",
            "healthPlanDrugTier" => "healthPlanDrugTier",
            "includesHealthPlanFormulary" => "includesHealthPlanFormulary",
            "healthPlanId" => "healthPlanId",
            "usesHealthPlanIdStandard" => "usesHealthPlanIdStandard",
            "includesHealthPlanNetwork" => "includesHealthPlanNetwork",
        ];

        return array_merge(parent::fieldList(), $fields);
    }

    /**
     * The URL that goes directly to the plan brochure for the specific standard plan or plan variation.
     *
     *
     * @var string
     */
    protected $healthPlanMarketingUrl;

    /**
     * The URL that goes directly to the summary of benefits and coverage for the specific standard plan or plan variation.
     *
     *
     * @var string
     */
    protected $benefitsSummaryUrl;

    /**
     * TODO.
     *
     *
     * @var string
     */
    protected $healthPlanDrugOption;

    /**
     * The tier(s) of drugs offered by this formulary or insurance plan.
     *
     *
     * @var string
     */
    protected $healthPlanDrugTier;

    /**
     * Formularies covered by this plan.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HealthPlanFormulary
     */
    protected $includesHealthPlanFormulary;

    /**
     * The 14-character, HIOS-generated Plan ID number. (Plan IDs must be unique, even across different markets.)
     *
     *
     * @var string
     */
    protected $healthPlanId;

    /**
     * The standard for interpreting thePlan ID. The preferred is "HIOS". See the Centers for Medicare &amp; Medicaid Services for more details.
     *
     *
     * @var string
     */
    protected $usesHealthPlanIdStandard;

    /**
     * Networks covered by this plan.
     *
     *
     * @var \OpenActive\Models\SchemaOrg\HealthPlanNetwork
     */
    protected $includesHealthPlanNetwork;

    /**
     * @return string
     */
    public function getHealthPlanMarketingUrl()
    {
        return $this->healthPlanMarketingUrl;
    }

    /**
     * @param string $healthPlanMarketingUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanMarketingUrl($healthPlanMarketingUrl)
    {
        $types = array(
            "string",
        );

        $healthPlanMarketingUrl = self::checkTypes($healthPlanMarketingUrl, $types);

        $this->healthPlanMarketingUrl = $healthPlanMarketingUrl;
    }

    /**
     * @return string
     */
    public function getBenefitsSummaryUrl()
    {
        return $this->benefitsSummaryUrl;
    }

    /**
     * @param string $benefitsSummaryUrl
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setBenefitsSummaryUrl($benefitsSummaryUrl)
    {
        $types = array(
            "string",
        );

        $benefitsSummaryUrl = self::checkTypes($benefitsSummaryUrl, $types);

        $this->benefitsSummaryUrl = $benefitsSummaryUrl;
    }

    /**
     * @return string
     */
    public function getHealthPlanDrugOption()
    {
        return $this->healthPlanDrugOption;
    }

    /**
     * @param string $healthPlanDrugOption
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanDrugOption($healthPlanDrugOption)
    {
        $types = array(
            "string",
        );

        $healthPlanDrugOption = self::checkTypes($healthPlanDrugOption, $types);

        $this->healthPlanDrugOption = $healthPlanDrugOption;
    }

    /**
     * @return string
     */
    public function getHealthPlanDrugTier()
    {
        return $this->healthPlanDrugTier;
    }

    /**
     * @param string $healthPlanDrugTier
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanDrugTier($healthPlanDrugTier)
    {
        $types = array(
            "string",
        );

        $healthPlanDrugTier = self::checkTypes($healthPlanDrugTier, $types);

        $this->healthPlanDrugTier = $healthPlanDrugTier;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\HealthPlanFormulary
     */
    public function getIncludesHealthPlanFormulary()
    {
        return $this->includesHealthPlanFormulary;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HealthPlanFormulary $includesHealthPlanFormulary
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludesHealthPlanFormulary($includesHealthPlanFormulary)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\HealthPlanFormulary",
        );

        $includesHealthPlanFormulary = self::checkTypes($includesHealthPlanFormulary, $types);

        $this->includesHealthPlanFormulary = $includesHealthPlanFormulary;
    }

    /**
     * @return string
     */
    public function getHealthPlanId()
    {
        return $this->healthPlanId;
    }

    /**
     * @param string $healthPlanId
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setHealthPlanId($healthPlanId)
    {
        $types = array(
            "string",
        );

        $healthPlanId = self::checkTypes($healthPlanId, $types);

        $this->healthPlanId = $healthPlanId;
    }

    /**
     * @return string
     */
    public function getUsesHealthPlanIdStandard()
    {
        return $this->usesHealthPlanIdStandard;
    }

    /**
     * @param string $usesHealthPlanIdStandard
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setUsesHealthPlanIdStandard($usesHealthPlanIdStandard)
    {
        $types = array(
            "string",
        );

        $usesHealthPlanIdStandard = self::checkTypes($usesHealthPlanIdStandard, $types);

        $this->usesHealthPlanIdStandard = $usesHealthPlanIdStandard;
    }

    /**
     * @return \OpenActive\Models\SchemaOrg\HealthPlanNetwork
     */
    public function getIncludesHealthPlanNetwork()
    {
        return $this->includesHealthPlanNetwork;
    }

    /**
     * @param \OpenActive\Models\SchemaOrg\HealthPlanNetwork $includesHealthPlanNetwork
     * @return void
     * @throws \OpenActive\Exceptions\InvalidArgumentException If the provided argument is not of a supported type.
     */
    public function setIncludesHealthPlanNetwork($includesHealthPlanNetwork)
    {
        $types = array(
            "\OpenActive\Models\SchemaOrg\HealthPlanNetwork",
        );

        $includesHealthPlanNetwork = self::checkTypes($includesHealthPlanNetwork, $types);

        $this->includesHealthPlanNetwork = $includesHealthPlanNetwork;
    }

}
