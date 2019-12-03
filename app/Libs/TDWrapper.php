<?php

namespace App\Libs;

Class TDWrapper
{
    private $api;
    function __construct()
    {
        require_once (dirname(__FILE__) . "./../../vendor/chobie/treasuredata-api-client/src/TreasureData/Autoloader.php");
        date_default_timezone_set("UTC");
        \TreasureData_Autoloader::register();
        $this->api = \TreasureData_APIFactory::createClient(array(
            "api_key" => env('TD_APIKEY',NULL)
        ));
    }
    public function getResultWithPresto($sql)
    {
        $message = $this->api
                        ->issuePrestoQuery(env('TD_DBNAME', "fujitsu_sample"), $sql , 0)
                        ->getResult();

        while (true) {
            $st = $this->api->getJobStatus($message->getJobId())->getResult();
            if ($st->isSuccess()) {
                $result = $this->api->getJobResult($message->getJobId())->getResult();
                break;
            } else if ($st->isError()) {
                throw new \RuntimeException(sprintf("job_id %s returns error", $message->getJobId()));
            } else {
                sleep(5);
            }
        }

        return $result;
    }

    public function getReloadPushCountSql($request)
    {
        $thisMonth = $request->route('year') . '-' . $request->route('month') . '-01';
        $nextMonth = date('Y-m-d', strtotime($thisMonth . "+1 month"));

        $sql = <<<SQL
select 
    TD_TIME_FORMAT(TD_TIME_PARSE(push_date, 'UTC'), 'YYYY-MM-dd') as push_date,
    push_cnt
from 
    h_tr_shopapp_push_cnt 
where
    c_commu_id = 1200000885
and
    TD_TIME_RANGE(TD_TIME_PARSE(push_date,'JST'),'$thisMonth JST','$nextMonth JST')
order by 
    push_date
SQL;
        return $sql;
    }
}
