<?php


namespace App\Helpers;


use Illuminate\Support\Facades\DB;

class CampaignCalc
{
    /**
     * @var int
     */
    private $companyId;

    public function __construct(int $companyId)
    {
        $this->companyId = $companyId;
    }

    public function checkBalance(int $messageCount)
    {
        $companyData = DB::select('select sms_location_id, balance FROM companies WHERE id = ?', [$this->companyId]);
        if (empty($companyData)) {
            $res = 'No company found with given ID...';
        } else {
            $smsPrice = DB::select('select price FROM sms_locations WHERE id = ?', [$companyData[0]->sms_location_id]);
            if (empty($smsPrice)) {
                $res = 'No SMS location found for the company with given ID...';
            } else {
                $res = $companyData[0]->balance - $messageCount * $smsPrice[0]->price;

            }
        }

        return $res;
    }
}
