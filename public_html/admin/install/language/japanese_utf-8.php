<?php

/* Reminder: always indent with 4 spaces (no tabs). */
// +---------------------------------------------------------------------------+
// | Geeklog 2.1                                                               |
// +---------------------------------------------------------------------------+
// | japanese_utf-8.php                                                        |
// |                                                                           |
// | Japanese language file for the Geeklog installation script                |
// +---------------------------------------------------------------------------+
// | Copyright (C) 2000-2010 by the following authors:                         |
// |                                                                           |
// | Authors: Tony Bibbs        - tony AT tonybibbs DOT com                    |
// |          Mark Limburg      - mlimburg AT users DOT sourceforge DOT net    |
// |          Jason Whittenburg - jwhitten AT securitygeeks DOT com            |
// |          Dirk Haun         - dirk AT haun-online DOT de                   |
// |          Randy Kolenko     - randy AT nextide DOT ca                      |
// |          Matt West         - matt AT mattdanger DOT net                   |
// |          Geeklog.jp group  - info AT geeklog DOT jp                       |
// |          mystral-kk        - geeklog AT mystral-kk DOT net                |
// +---------------------------------------------------------------------------+
// |                                                                           |
// | This program is free software; you can redistribute it and/or             |
// | modify it under the terms of the GNU General Public License               |
// | as published by the Free Software Foundation; either version 2            |
// | of the License, or (at your option) any later version.                    |
// |                                                                           |
// | This program is distributed in the hope that it will be useful,           |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
// | GNU General Public License for more details.                              |
// |                                                                           |
// | You should have received a copy of the GNU General Public License         |
// | along with this program; if not, write to the Free Software Foundation,   |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.           |
// |                                                                           |
// +---------------------------------------------------------------------------+

// +---------------------------------------------------------------------------+

$LANG_CHARSET = 'utf-8';

// +---------------------------------------------------------------------------+
// | Array Format:                                                             |
// | $LANG_NAME[XX]: $LANG - variable name                                     |
// |                 NAME  - where array is used                               |
// |                 XX    - phrase id number                                  |
// +---------------------------------------------------------------------------+

// +---------------------------------------------------------------------------+
// install.php

$LANG_INSTALL = array(
    0 => 'Geeklog - The secure CMS.',
    1 => 'インストールで困ったら、こちらのサイトへ',
    2 => 'The secure CMS.',
    3 => 'Geeklogをインストールする',
    4 => 'PHP %s以上が必要です',
    5 => '残念ながらGeeklogをインストールするには最低でもPHP %sが必要です(現在のバージョンは ',
    6 => ')。自分で<a href="http://www.php.net/downloads.php">PHPをバージョンアップする</a>か、ホスティング会社に依頼してください。',
    7 => 'Geeklogファイルが見つかりません',
    8 => 'Geeklogの重要なファイルが見つかりません。既定の位置から移動させていると思われます。下のテキストボックスにファイルのパスを入力してください。:',
    9 => 'Geeklogへようこそ!　Geeklogを選んでいただき、ありがとうございます。',
    10 => 'ファイル/ディレクトリ',
    11 => 'パーミッション',
    12 => '推奨値',
    13 => '現在',
    14 => '',
    15 => 'Geeklogのフィード(RSS)が無効になっています。<code>backend</code>ディレクトリのテストを行いませんでした。',
    16 => '移行',
    17 => 'ユーザー写真が無効になっています。<code>userphotos</code>ディレクトリのテストを行いませんでした。',
    18 => '記事に画像を添付する機能が無効になっています。<code>articles</code>ディレクトリのテストを行いませんでした。',
    19 => 'Geeklogでは、いくつかのファイルとディレクトリがWebサーバーから書き込める必要があります。以下は、変更する必要のあるファイルとディレクトリの一覧です。',
    20 => '警告',
    21 => '以下のエラーが解消されるまで、インストールできません。先に必要な変更を行ってください。',
    22 => '不明',
    23 => 'インストールの種類を選択してください:',
    24 => '新規インストール',
    25 => 'アップグレード',
    26 => '変更できませんでした：',
    27 => '。ファイルはWebサーバーから書き込みできますか?',
    28 => 'siteconfig.php。このファイルはWebサーバーから書き込みできますか?',
    29 => 'Geeklog Site',
    30 => 'Another Nifty Geeklog Site',
    31 => '必須の設定情報',
    32 => 'サイト名',
    33 => 'サイトのスローガン',
    34 => 'データベースの種類',
    35 => 'MySQL',
    36 => 'MySQL（InnoDBテーブルをサポート）',
    37 => 'Microsoft SQL',
    38 => 'エラー',
    39 => 'データベースのホスト名',
    40 => 'データベース名',
    41 => 'データベースのユーザ名',
    42 => 'データベースのパスワード',
    43 => 'データベースの接頭子',
    44 => 'オプションの設定',
    45 => 'サイトのURL',
    46 => '(末尾のスラッシュをつけない)',
    47 => 'Adminディレクトリのパス',
    48 => 'サイトのEmail',
    49 => 'サイトのNo-Reply Email',
    50 => 'インストール',
    51 => '少なくともMySQL %sが必要です',
    52 => '残念ながら、Geeklogをインストールするには最低でもMySQL %sが必要です(現在のバージョンは ',
    53 => ')。自分で<a href="http://dev.mysql.com/downloads/mysql/">MySQLをアップグレードする</a>か、ホスティング会社に依頼してください。',
    54 => 'データベース情報が不正確です',
    55 => '残念ながら入力したデータベース情報が不正確です。戻ってやり直してください。',
    56 => 'データベースに接続できません',
    57 => '残念ながら指定されているデータベースが見つかりません。データベースが存在しないか、綴り（大文字小文字）が違うのでしょう。戻ってやり直してください。',
    58 => '。このファイルはWebサーバーから書き込みできますか?',
    59 => '注意',
    60 => 'お使いのMySQLのバージョンではInnoDBテーブルはサポートされていません。InnoDBサポートなしで、インストールを続けますか?',
    61 => '戻る',
    62 => '次へ',
    63 => 'インストール済みのGeeklogのデータベースが既に存在しています。既存のGeeklogデータベースを上書きして新規インストールを行うことはできません。続けるには、次のどちらかを行ってください:',
    64 => '1. 既存のデータベースからテーブルを削除する。2. データベースを削除してから作成し直す。その後、下の"再試行"をクリックしてください。',
    65 => '下の"アップグレード"オプションを選択することで、(Geeklogの新バージョンへ)データベースのアップグレードを行います。',
    66 => '再試行',
    67 => 'Geeklogのデータベースを設定中にエラーが発生しました',
    68 => 'データベースが空ではありません。データベース中のテーブルを全て削除してから、やり直してください。',
    69 => 'Geeklogをアップグレード',
    70 => '始める前に現在のGeeklogのデータベースのバックアップを行ってください。インストール・スクリプトはGeeklogのデータベースを変更するので、失敗してアップグレードをやり直すには、オリジナルのデータベースのバックアップが必要になります。警告しましたよ!',
    71 => '現在のGeeklogのバージョンを下で正確に選択してください。インストール・スクリプトは入力されたバージョンから少しずつアップグレードしていきます（つまり、任意の古いバージョンから次のバージョンへアップグレードできます:',
    72 => '）。',
    73 => 'インストール・スクリプトはGeeklogのベータ版やリリース候補(RC)版からのアップグレードは行いません。',
    74 => 'データベースは既に最新の状態になっています!',
    75 => 'データベースは既に最新の状態になっているようです。以前、アップグレードを実行したことがあるのでしょう。再びアップグレードを実行する必要があるなら、データベースのバックアップから復元を行ってからにしてください。',
    76 => '現在のGeeklogのバージョンを選択してください',
    77 => 'インストーラは現在のGeeklogのバージョンを判定できませんでした。下のリストから選択してください:',
    78 => 'アップグレードエラー',
    79 => 'Geeklogのアップグレード中にエラーが発生しました。',
    80 => '変更',
    81 => 'ちょっと待って!',
    82 => '下に列挙されたファイルのパーミッションを必ず変更する必要があります。変更するまでGeeklogをインストールできません。',
    83 => 'インストールエラー',
    84 => 'パス "',
    85 => '" は正しくありません。戻ってやり直してください。',
    86 => '言語',
    87 => 'http://www.geeklog.jp/forum/index.php?forum=6',
    88 => '以下のファイルを含むディレクトリに変更してください：',
    89 => '現在のバージョン:',
    90 => 'データベースは空?',
    91 => 'データベースが空のままか、入力してデータベースの情報が不正確なようです。ひょっとすると、アップグレードではなく、新規インストールするつもりだったのではないでしょうか?　戻ってやり直してください。',
    92 => 'UTF-8を使用する',
    93 => '成功',
    94 => 'パスのヒント:',
    95 => 'インストールスクリプトファイルへの完全なパスはこちらです:',
    96 => 'インストーラはここで %s を探しています:',
    97 => 'パーミッション設定',
    98 => 'アドバンストユーザ',
    99 => 'コマンドライン (SSH) が使えるなら、Webサーバーにアクアセスしてください。shellを使えば、以下のコマンドのコピー・ペーストで簡単に実行できます。:',
    100 => '無効なモードを指定',
    101 => 'ステップ',
    102 => 'コンフィギュレーションモード入力',
    103 => '',
    104 => '不正な管理者パス',
    105 => '入力した管理者のディレクトリパスは不正確でした。もう一度やり直してください。',
    106 => 'PostgreSQL',
    107 => 'データベースのパスワードが必要です。',
    108 => 'データベースドライバーがありません!',
    109 => '緊急レスキューツール',
    110 => 'パーミッションは正しいようですが、インストールスクリプトはGeeklogのディレクトリに書き込むことができません。SELinuxを使っているなら、httpd プロセスに書き込み権限を与えてください。次のコマンドを試してみてください:',
    111 => 'Geeklog のバージョン',
    112 => 'インストール(すべてのプラグインも同時に)',
    113 => 'インストール(次の画面でインストールするプラグインを選択)',
    114 => '自動インストールに対応しているプラグインだけをインストールします(コアプラグインは対応しています)。対応していないプラグインは管理画面の「プラグイン」からインストールできます。',
    115 => 'アップグレード',
    116 => '「アップグレード」ボタンをクリックすると、Geeklogを最新バージョンにアップグレードします。このとき必要ならコアプラグインもアップグレードします。'
);

// +---------------------------------------------------------------------------+
// success.php

$LANG_SUCCESS = array(
    0 => 'インストール完了',
    1 => 'Geeklog ',
    2 => ' のインストールが完了しました!',
    3 => 'おめでとうございます。Geeklogの',
    4 => 'に成功しました。少し時間をさいて、以下の情報をご覧ください。',
    5 => '新しいGeeklogサイトにログインするには、次のアカウントを使用してください:',
    6 => 'ユーザ名:',
    7 => 'Admin',
    8 => 'パスワード:',
    9 => 'password',
    10 => 'セキュリティ警告',
    11 => '次の',
    12 => 'つのことを忘れずに行ってください',
    13 => 'installディレクトリを削除またはリネームする:',
    14 => '変更する',
    15 => 'アカウントのパスワードを変更する。',
    16 => 'パーミッションを設定する:',
    17 => 'と',
    18 => 'のパーミッションを次のものに変更する:',
    19 => '<strong>注意:</strong> セキュリティモデルを変更したので、新しいサイトの管理権限を持ったアカウントを作成しました。ユーザ名は <strong>NewAdmin</strong> で、パスワードは <strong>password</strong> です。',
    20 => 'インストール',
    21 => 'アップグレード',
    22 => '移行',
    23 => 'インストールに使用したファイルとディレクトリをすべて削除しますか?',
    24 => 'はい、削除します。',
    25 => 'いいえ、後で自分で削除します。'
);

// +---------------------------------------------------------------------------+
// migration

$LANG_MIGRATE = array(
    0 => 'バックアップファイルに"DROP TABLE"が追加されている場合、同じ名前のテーブルがあれば上書きされます。',
    1 => '実行する前に',
    2 => '以前のプラグインが新しいサーバーにコピーされていることを確認してください。',
    3 => '画像ディレクトリ<code>public_html/images/articles/</code>、<code>public_html/images/topics/</code>および<code>public_html/images/userphotos/</code>が、新しいサーバーに移行されていることを確認してください。',
    4 => '<strong>1.5.0</strong>以前のバージョンからアップグレードする場合は、<code>config.php</code>もコピーしてください。移行後、これを参照して設定できます。',
    5 => 'アップグレードの場合、テーマをそのままアップロードしないでください。テーマを完全に移行するまでは、付属のデフォルトテーマを活用してください。',
    6 => 'バックアップファイルを選択',
    7 => 'ファイル選択...',
    8 => 'サーバーのbackupsディレクトリから',
    9 => 'あなたのコンピュータから',
    10 => 'ファイル選択...',
    11 => 'バックアップファイルが見つかりませんでした。',
    12 => 'このサーバーのアップロード制限は',
    13 => 'です。バックアップファイルがこれより大きい場合は制限値の',
    14 => 'を変更してください。タイムアウトになる場合は、FTPでバックアップファイルをサーバーにアップロードしてください。',
    15 => 'バックアップディレクトリが書き込み可能になっていません。パーミッションを777に設定してください。',
    16 => '移行',
    17 => 'バックアップファイルからの移行',
    18 => 'バックアップファイルが選択されませんでした。',
    19 => '保存されませんでした',
    20 => ' へ ',
    21 => 'ファイル',
    22 => 'が既にサーバーにあります。指定したファイルに置き換えますか?',
    23 => 'はい',
    24 => 'いいえ',
    25 => '',
    26 => '移行通知:',
    27 => '"',
    28 => '" プラグインが無効になっています。いつでも管理セクションからインストールを再開できます。',
    29 => '画像 "',
    30 => '" の中の "',
    31 => '" テーブルはここにあります ',
    32 => 'このデータベースファイルには、移行スクリプトで',
    33 => 'ディレクトリへの配置ができなかったプラグインがあります。それらのプラグインは無効にしました。無効になったプラグインは管理画面でいつでもインストールして再び有効にできます。',
    34 => 'このデータベースファイル',
    35 => 'には、移行スクリプトでディレクトリへの配置ができなかったファイル情報が含まれます。詳しくは<code>error.log</code>をチェックしてください。',
    36 => 'いつでもこれらを修正できます',
    37 => '移行完了',
    38 => '移行プロセスは完了しました。次の問題があるので対応してください:',
    39 => 'PEARが見つかりません。残念ながらPEARがない場合はバックアップの圧縮形式を処理できません。',
    40 => '圧縮ファイル "%1$s" には、SQLファイルが含まれていません。移行をやり直すには、<a href="%2$s">ここ</a>クリックしてください。',
    41 => 'データベース \'%s\' におけるバックアップファイルの解凍でエラーが発生しました。',
    42 => 'バックアップファイル \'%s\' が消えました...',
    43 => 'インポートアボート: ファイル \'%s\'がSQLダンプで表示されません。',
    44 => '致命的なエラー: データベースはインポートに失敗しました。継続できません。',
    45 => 'データベースのバージョンがわかりません。手動でアップデートしてください。',
    46 => '',
    47 => 'データベースに対して %s から %s へのアップグレードに失敗しました。',
    48 => 'プラグインを更新できなかったものがあります。それらのプラグインは無効にしてください。',
    49 => '現在のデータベースのデータを使用する'
);

// +---------------------------------------------------------------------------+
// install-plugins.php

$LANG_PLUGINS = array(
    1 => 'プラグインのインストール',
    2 => 'ステップ',
    3 => 'プラグインは新しい機能を提供する追加コンポーネントで、Geeklogの内部サービスを更に強化します。Geeklogはデフォルトでインストールしたくなる便利なプラグインを同梱しています。',
    4 => 'また、追加のプラグインをアップロードすることができます。',
    5 => 'アップロードしたファイルは ZIP または GZip 圧縮形式のプラグインファイルではありません。',
    6 => 'アップロードしたプラグインはすでに存在しています!',
    7 => '成功!',
    8 => '%s プラグインのアップロードに成功しました。',
    9 => 'プラグインをアップロードする',
    10 => 'プラグインファイルの指定',
    11 => 'アップロード',
    12 => 'インストールするプラグインを選択してください',
    13 => 'インストールする',
    14 => 'プラグイン名',
    15 => 'バージョン',
    16 => '不明',
    17 => '注意',
    18 => 'このプラグインは、プラグイン管理パネルから手動で有効化する必要があります。',
    19 => '一覧を更新',
    20 => '新しいプラグインはありません。'
);

// +---------------------------------------------------------------------------+
// bigdump.php

$LANG_BIGDUMP = array(
    0 => 'インポート開始',
    1 => ' バックアップファイル名:',
    2 => ' データベース名:',
    3 => ' データベースホスト名:',
    4 => 'シーク不可 ',
    5 => 'オープン不可 ',
    6 => ' インポート。',
    7 => '予期しないエラー：開始位置とオフセット位置が数値ではない値になっています',
    8 => '作業中 ファイル:',
    9 => 'ファイルの末尾にファイルポインタを移動できません。',
    10 => 'ファイルポインタ移動不可:',
    11 => 'PHPのMySQLエクステンションが利用できません。',
    14 => '中止した行番号:',
    15 => '。このクエリには',
    16 => '行以上が含まれています。各クエリの末尾にセミコロンを付けないツールでダンプファイルを生成した場合や、ダンプファイルの中に複数行INSERT文が含まれる場合に発生する可能性があります。',
    17 => 'エラーの発生した行番号:',
    18 => 'クエリ:',
    19 => 'MySQL:',
    20 => 'ファイルポインタオフセットを読み込めません。',
    21 => 'gzip形式で圧縮されているファイルが利用できない',
    22 => '進捗状況',
    23 => 'このデータベースの移行が正常に完了しました!',
    24 => '待機中 ',
    25 => ' ミリ秒</b> 次のセッションが始まるまで...',
    26 => 'インポート中止',
    27 => 'インポートの中止はこちら。',
    28 => 'インポートが完了するまでしばらく待ってください!',
    29 => 'エラーが発生しました。',
    30 => '最初からスタート',
    31 => '(再起動する前に古いテーブルを削除してください)'
);

// +---------------------------------------------------------------------------+
// Error Messages

$LANG_ERROR = array(
    0 => 'アップロードしたファイルは、php.iniで指定された制限 upload_max_filesize を超えています。他の方法、たとえばFTPでアップロードしてください。',
    1 => 'アップロードしたファイルのサイズは、HTMLのフォームで指定したMAX_FILE_SIZEを超えています。バックアップファイルをFTPなどの他の方法でアップロードしてください。',
    2 => 'ファイルの一部しかアップロードされませんでした。',
    3 => 'ファイルはアップロードされませんでした。',
    4 => '一時フォルダがありません。',
    5 => 'ディスク書き込みエラーです。',
    6 => '拡張子制限により、アップロードを中止しました。',
    7 => 'アップロードするファイルはphp.iniで指定されたpost_max_sizeを超えています。データベースをFTPなどでアップロードしてください。',
    8 => 'エラー',
    9 => 'データベース接続エラー:',
    10 => 'データベースの設定をチェックしてください。',
    11 => '警告',
    12 => '情報',
    14 => 'アップグレードの注意点',
    15 => '話題IDと話題の最大長が128文字から75文字へ変更されました。このため、アップグレードの際に話題IDが強制的に切り詰められ、問題が発生するかもしれません(話題IDが75文字を超える場合)。75文字を超える話題IDを75文字に切り詰めたものが他の話題IDと重複しないか確認してください。',
    16 => '話題IDと話題の最大長が128文字から75文字へ変更されました。アップグレードを進める前に修正する必要のある話題IDを検出しました。',
    17 => 'Professionalテーマはサポートされなくなりました。Geeklog 2.1.1以前からProfessionalテーマやProfessional_cssテーマを使っている場合はサイトが正常に機能しなくなる可能性があります。',
    18 => 'Comment Signatures',
    19 => "Comment Signatures before Geeklog 2.2.0 where stored with the comment. Now they are added when the comment is viewed. For backwards compatibility the upgrade will remove all comment signatures stored directly\n    with the comment  (so comment signatures will not display twice).",
    20 => 'Plugin Compatibility',
    21 => 'Geeklog internally has undergone some changes which may affect compatibility of some older plugins which have not been updated in a while. Please make sure all the plugins you have installed have been updated to the latest version before upgrading Geeklog to v2.2.0.<br><br>If you still wish to upgrade Geeklog to v2.2.0 and you are not sure about a plugin please post a question about it on our <a href="https://www.geeklog.net/forum/index.php?forum=2" target="_blank">Geeklog Forum</a>. Else, you can also disable or uninstall the plugin and then perform the Geeklog upgrade.<br><br>If you do perform the upgrade and run into problems you can then use the <a href="/admin/install/rescue.php">Geeklog Emergency Rescue Tool</a> to disable the plugin with the issue.',
    22 => 'Default Security Group Assignments',
    23 => 'User security group assignments for groups "Root" and "All Users" will be fixed along with the security group assignments for the "Admin" (2) user. The "Admin" user had duplicate permissions in some cases and these will be removed after this upgrade.<br><br>Please Note: The issue that caused duplicate permissions has been fixed but it does mean any user that you may have edited in the Admin User Editor before Geeklog v2.2.1 may have been affected. This only really affects permissions when you have security groups within security groups. While these permissions at the time of saving the user are correct if you modified security groups since then these users may still have access to groups they may have been removed from now. As each site is setup differently, the only way to fix this is for the Admin to review each user manually and confirm their security privileges.', 
    24 => 'FCKEditor Removed',
    25 => 'The Advanced Editor FCKEditor has been removed from Geeklog since development for it has been stopped. If your Geeklog website is currently set to use the FCKEditor it will be updated to use the editor which currently ships with Geeklog called the CKEditor.',
    26 => 'Google+ OAuth Login',
    27 => 'The <a href="https://support.google.com/plus/answer/9195133" target="_blank">Google+ service shut down on April 2, 2019</a>. As of Geeklog v2.2.1 we will move from the Google+ OAuth authentication method and scope to the Google OAuth authentication method and scope. Because of this change and depending on when you created your Google API keys, you may need to update these keys in the Geeklog configuration or users who use this login method may receive an error.<br><br>Geeklog now offers the option to convert remote accounts to local accounts. If you have any remote accounts (like Google OAuth, Facebook OAuth, OpenID, etc..) you want to convert, edit the user account from the User Manager and then check off the "convert from remote to a local account" option and click on save. At this point the account will be converted to a local account and a random password will be generated. If the account has an email address and the status is set to "Active" an email will be automatically sent to the user about how to access their account. If not, you will manually have to fill in this information and let the user know how they can access their local account.',
    28 => 'Duplicate Usernames & Usernames with Trailing Spaces',
    29 => 'In some cases through remote accounts blank or duplicate usernames (some may have had trailing spaces) could be created. Blank username accounts are the results of remote account login errors so they will be deleted. Accounts that have duplicate names (could include local accounts) will have their accounts renamed. Some local account users may need to use the "Forget Your Password" to retrieve their new username.<br><br>Please note: This issue is a very rare occurrence and can only happen if you have remote user accounts. Most users will be unaffected.'    
);

// +---------------------------------------------------------------------------+
// help.php

$LANG_HELP = array(
    0 => 'インストールヘルプ',
    'site_name' => 'サイト名を入力します。後から変更することもできます。',
    'site_slogan' => 'サイトのスローガンを入力します。後から変更することもできます。',
    'db_type' => 'データベースの種類を入力します。MySQL, MySQL(InnoDB), Microsoft SQL Serverの中から選びます。</p><p class="indent"><strong>注意:</strong> 大規模なサイトでは、InnoDBテーブルを使用すれば、パフォーマンスが改善されるかもしれませんが、バックアップを行うのが難しくなります。',
    'db_host' => 'ホスト名を入力します。',
    'db_name' => 'データベース名を入力します。',
    'db_user' => 'データベースのユーザ名（アカウント）を入力します。',
    'db_pass' => 'パスワードを入力します。',
    'db_prefix' => 'テーブル名の接頭子を入力します。データベース内に他にテーブルがなければ、既定値を変更する必要はありません。',
    'site_url' => 'サイトのURLを入力します。',
    'site_admin_url' => 'AdminディレクトリのURLを入力します。',
    'site_mail' => 'サイト管理者のEmailアドレスを入力します。',
    'noreply_mail' => 'サイト管理者のNo-Reply Email（返信を受け付けないEmailアドレス）を入力します。',
    'utf8' => 'サイトのデフォルト言語としてUTF-8を使用するかどうかを指示します。多言語サイトを作成するなら、チェックを入れることをお勧めします。',
    'migrate_file' => '移行するバックアップファイル(*.sql)を選択します。"backups"ディレクトリ内のファイルから、あるいはあなたのコンピュータからファイルをアップロードできます。または、データベースの現在の内容を移行することもできます。',
    'plugin_upload' => 'アップロードするプラグインの圧縮ファイル(.zip, .tar.gz, .tgzファーマット)を選んでインストールしてください。'
);

// +---------------------------------------------------------------------------+
// rescue.php

$LANG_RESCUE = array(
    0 => 'ログインに成功しました。',
    1 => 'Geeklog緊急レスキューツール',
    2 => 'インストーラーへ',
    3 => 'Geeklog緊急レスキューツール',
    4 => '終了したら、<strong>必ずこのファイル( {{SELF}} )とinstallディレクトリを削除してください!</strong>  他のユーザーがパスワードの推測に成功した場合、インストールしているGeeklogが重大な被害を被る可能性があります。',
    5 => '状態',
    6 => 'これからセキュリティで保護されたセクションにアクセスします。セキュリティ・チェックに合格しなければ、先に進むことはできません。',
    7 => '本人確認のために、データベースのパスワードを入力する必要があります。パスワードはGeeklogの "非公開領域/db-config.php" に保存されています。',
    8 => 'パスワード',
    9 => '確認する',
    10 => 'パスワードが不正です!',
    11 => '有効化 ',
    12 => '無効化 ',
    13 => '成功 ',
    14 => 'エラー ',
    15 => '設定を更新する際にエラーが発生しました。',
    16 => '設定を更新しました。',
    17 => 'パスワードを更新する際にエラーが発生しました。',
    18 => 'Geeklogパスワードリクエスト',
    19 => 'パスワードをリクエストしました',
    20 => '誰か(あなたであれば幸いです)がGeeklog緊急レスキューツールの緊急パスワードリクエストフォームにアクセスしました。新しいパスワード "%s" (アカウント "%s" サーバー %s)が作成されました。',
    21 => 'リクエストした覚えがない場合、サイトのセキュリティを確認してください。緊急レスキューツール "/admin/install/rescue.php" を忘れずに削除してください。',
    22 => '新しいパスワードが記録されたメールアドレスへ送られました。',
    23 => 'メールを送る際にエラーが発生しました。件名: ',
    24 => 'PHP情報',
    25 => 'メイン画面へ戻る',
    26 => 'システム情報',
    27 => 'PHPバージョン',
    28 => 'Geeklogバージョン',
    29 => 'オプション',
    30 => 'サイトに不具合を引き起こすプラグインやアドオンをインストールしてしまった場合、以下のオプションで問題点を修正できます。',
    31 => 'プラグインの有効化/無効化',
    32 => 'ブロックの有効化/無効化',
    33 => '主要な$_CONF変数の編集',
    34 => '管理者パスワードのリセット',
    35 => 'このサイトに現在インストールされているプラグインを有効/無効にできます。',
    36 => 'プラグインを選択してください',
    37 => '有効化',
    38 => '無効化',
    39 => 'このサイトに現在インストールされているブロックを有効/無効にできます。',
    40 => 'ブロックを選択してください',
    41 => '実行',
    42 => '主要な$_CONF変数を編集できます。',
    43 => 'Geeklogのroot/adminパスワードをリセットできます。',
    44 => 'パスワードをメールで送信する',
    45 => 'Geeklogのデータベースにコア情報がないため、Geeklogは未インストールまたはインストールが正常に完了していないようです。したがって、このレスキューツールを使用することはできません。'
);

// which texts to use as labels, so they don't have to be translated again
$LANG_LABEL = array(
    'site_name'      => $LANG_INSTALL[32],
    'site_slogan'    => $LANG_INSTALL[33],
    'db_type'        => $LANG_INSTALL[34],
    'db_host'        => $LANG_INSTALL[39],
    'db_name'        => $LANG_INSTALL[40],
    'db_user'        => $LANG_INSTALL[41],
    'db_pass'        => $LANG_INSTALL[42],
    'db_prefix'      => $LANG_INSTALL[43],
    'site_url'       => $LANG_INSTALL[45],
    'site_admin_url' => $LANG_INSTALL[47],
    'site_mail'      => $LANG_INSTALL[48],
    'noreply_mail'   => $LANG_INSTALL[49],
    'utf8'           => $LANG_INSTALL[92],
    'migrate_file'   => $LANG_MIGRATE[6],
    'plugin_upload'  => $LANG_PLUGINS[10]
);
