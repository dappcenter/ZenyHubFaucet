# ZenyFaucet
ZenyHub Faucet

## 動作環境
- PHP >= 7.0 (7.0で動作確認)
- PDO
- MySQL

[ZenyHub](https://open.bitzeny.link)のAPIを利用したFaucetのサンプルです。

APIキーは上記のサイトのmypageから取得して下さい。ユーザーIDはAPIキーの下部に記載されているものを利用して下さい

## インストール方法
1.zipファイルをダウンロードし、解凍、サーバーにアップロード or `git clone https://github.com/maa123/ZenyFaucet.git` (Gitを利用する場合は.gitフォルダへのアクセスを禁止する事を推奨します)

2.configs.phpを開き、DBの設定と各APIキーを入力、引き出し間隔や額もここで設定して下さい

3.index.htmlを開き、BitzenyFaucetとなっているところをFaucetの名前に書き換え、RecaptchaSiteKeyにreCaptchaのサイトキーを入れて下さい。この時Donation:部分が邪魔であれば削除してください。また、このreCapctchaのキーを取得する時はv2でなくinvisibleを選択して下さい。

4.install.phpにアクセスし、エラーが発生しない事を確認してください

5.サイトにアクセスし、引き出せることを確認してインストール作業は終わりです。

ZIPファイルは右上の緑のボタンの中 Download ZIPからダウンロード可能です

もしくは[ここから](https://github.com/maa123/ZenyHubFaucet/archive/master.zip)
