#定義系
php artisan make:migration create_plan_definitions_table --create=plan_definitions
php artisan make:migration create_user_operation_definitions_table --create=user_operation_definitions
php artisan make:migration create_tweet_property_definitions_table --create=tweet_property_definitions
php artisan make:migration create_tweet_search_query_definitions_table --create=tweet_search_query_definitions
#業務機能型
php artisan make:migration create_csv_uploaded_histories_table --create=csv_uploaded_histories
php artisan make:migration create_twitter_accounts_table --create=twitter_accounts
php artisan make:migration create_tweets_table --create=tweets
php artisan make:migration create_tweet_list_row_settings_table --create=tweet_list_row_settings
php artisan make:migration create_saved_tweet_search_queries_table --create=saved_tweet_search_queries
php artisan make:migration create_tweet_search_query_histories_table --create=tweet_search_query_histories
php artisan make:migration create_memos_table --create=memos
#ユーザー基盤系
php artisan make:migration create_plan_histories_table --create=plan_histories
php artisan make:migration create_settlement_histories_table --create=settlement_histories
php artisan make:migration create_operation_log_table --create=operation_log


