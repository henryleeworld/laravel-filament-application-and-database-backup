<?php

return [

    'components' => [
        'backup_destination_list' => [
            'table' => [
                'actions' => [
                    'download' => '下載',
                    'delete' => '刪除',
                ],

                'fields' => [
                    'path' => '路徑',
                    'disk' => '磁碟',
                    'date' => '日期',
                    'size' => '大小',
                ],

                'filters' => [
                    'disk' => '磁碟',
                ],
            ],
        ],

        'backup_destination_status_list' => [
            'table' => [
                'fields' => [
                    'name' => '名稱',
                    'disk' => '磁碟',
                    'healthy' => '健康',
                    'amount' => '數量',
                    'newest' => '最新',
                    'used_storage' => '使用的儲存量',
                ],
            ],
        ],
    ],

    'pages' => [
        'backups' => [
            'actions' => [
                'create_backup' => '建立備份',
            ],

            'heading' => '備份',

            'messages' => [
                'backup_success' => '背景作業建立新備份。',
                'backup_delete_success' => '背景作業刪除此備份。',
            ],

            'modal' => [
                'buttons' => [
                    'only_db' => '僅限資料庫',
                    'only_files' => '僅限檔案',
                    'db_and_files' => '資料庫和檔案',
                ],

                'label' => '請選擇一個選項',
            ],

            'navigation' => [
                'group' => '設定',
                'label' => '備份',
            ],
        ],
    ],

];
