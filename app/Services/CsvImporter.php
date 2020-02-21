<?php

namespace App\Services;

//useしないと 自動的にnamespaceのパスが付与されるのでuse
use SplFileObject;
use Illuminate\Support\Carbon;

class CSVimporter
{
    private $csvDefine;
    private $csvDefineTitle;
    public function __construct(CSVDefine $csvDefine)
    {
        $this->csvDefine = $csvDefine;
        $this->csvDefineTitle = $this->csvDefine->getTitleRow();
    }

    // ファイルの絶対パスを引数
    public function import($filePath)
    {
        // ロケールを設定(日本語に設定)
        setlocale(
            LC_ALL,
            'ja_JP.UTF-8'
        );

        //SplFileObjectを生成
        $file = new SplFileObject($filePath);

        //SplFileObject::READ_CSV が最速らしい
        $file->setFlags(SplFileObject::READ_CSV);

        $return_array = [];

        $row_count = 1;
        //取得したオブジェクトを読み込み
        foreach ($file as $row) {
            // 空行対策
            if ($row === [null]) {
                continue;
            }

            // １行目
            if ($row_count === 1) {
                $col_count = count($row);
                for ($i = 0;$i < $col_count;$i++) {
                    if ($row[$i] !== $this->csvDefineTitle[$i]) {
                        // Todo:例外を発生させる
                        // ヘッダーが予期していない文字列を含む
                    }
                }
            }
        
            // 1行目のヘッダーは取り込まない
            if ($row_count > 1) {
                // Todo:列名と値の対応
                // Todo:この辺の定義を別クラスに切り出す
                $csvimport_array = [
                    "twitter_account_id" => 1,
                    "twitter_tweet_id" => $row[0],
                    "content" => $row[2],
                    "posted_at"=> (new Carbon($row[3]))->addHour(9),
                    "impression_num" => $row[4],
                    "engage_num" => $row[5],
                    "engage_rate" => $row[5],
                    "retweet_num" => $row[5],
                    "retweet_rate" => $row[5],
                    "reply_num" => $row[5],
                    "reply_rate" => $row[5],
                    "like_num" => $row[5],
                    "like_rate" => $row[5],
                    "prof_click_num" => $row[5],
                    "prof_click_rate" => $row[5],
                    "url_click_num" => $row[5],
                    "url_click_rate" => $row[5],
                    "hash_click_num" => $row[5],
                    "hash_click_rate" => $row[5],
                    "detail_click_num" => $row[5],
                    "detail_click_rate" => $row[5],
                    "fixed_link_click_num" => $row[5],
                    "fixed_link_click_rate" => $row[5],
                    "app_show_num" => $row[5],
                    "app_show_rate" => $row[5],
                    "app_inst_num" => $row[5],
                    "app_inst_rate" => $row[5],
                    "following_num" => $row[5],
                    "following_rate" => $row[5],
                    "tweet_mail_num" => $row[5],
                    "tweet_mail_rate" => $row[5],
                    "dial_tel_num" => $row[5],
                    "dial_tel_rate" => $row[5],
                    "media_play_num" => $row[5],
                    "media_play_rate" => $row[5],
                    "medhi_engage_num" => $row[5],
                    "medhi_engage_rate" => $row[5],
                    // "promo_impression_num",
                    // "promo_engage_num",
                    // "promo_engage_rate",
                    // "promo_retweet_num",
                    // "promo_retweet_rate",
                    // "promo_reply_num",
                    // "promo_reply_rate",
                    // "promo_like_num",
                    // "promo_like_rate",
                    // "promo_prof_click_num",
                    // "promo_prof_click_rate",
                    // "promo_url_click_num",
                    // "promo_url_click_rate",
                    // "promo_hash_click_num",
                    // "promo_hash_click_rate",
                    // "promo_detail_click_num",
                    // "promo_detail_click_rate",
                    // "promo_fixed_link_click_num",
                    // "promo_fixed_link_click_rate",
                    // "promo_app_show_num",
                    // "promo_app_show_rate",
                    // "promo_app_inst_num",
                    // "promo_app_inst_rate",
                    // "promo_following_num",
                    // "promo_following_rate",
                    // "promo_tweet_mail_num",
                    // "promo_tweet_mail_rate",
                    // "promo_dial_tel_num",
                    // "promo_dial_tel_rate",
                    // "promo_media_play_num",
                    // "promo_media_play_rate",
                    // "promo_medhi_engage_num",
                    // "promo_medhi_engage_rate"
                ];

                // つくった配列の箱($array)に追加
                array_push($return_array, $csvimport_array);
            }
            $row_count++;
        }

        return $return_array;
    }
}
