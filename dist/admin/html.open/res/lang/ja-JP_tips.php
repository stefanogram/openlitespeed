<?php 

global $_tipsdb;

$_tipsdb['AIOBlockSize'] = new DAttrHelp("AIO Block Size", 'Specifies the sent block size for AIO. This block size multiplied by the total files being processed should be less than the physical memory of the server, otherwise, AIO will not help. If your server has enough memory, you can choose a bigger size.<br/><br/>Default value: 128K', '', 'ドロップダウンリストから選択', '');

$_tipsdb['CACertFile'] = new DAttrHelp("CA証明書ファイル", 'チェーン証明書の証明機関（CA）のすべての証明書を含むファイルを指定します。 このファイルは、PEMでエンコードされた証明書ファイルを単に優先順に連結したものです。 これは、「CA証明書パス」の代替として、またはこれに加えて使用することができる。 これらの証明書は、クライアント証明書の認証およびサーバー証明書チェーンの構築に使用されます。サーバー証明書チェーンは、サーバー証明書に加えてブラウザーにも送信されます。', '', 'ファイル名への絶対パス又は$SERVER_ROOTからの相対パス', '');

$_tipsdb['CACertPath'] = new DAttrHelp("CA証明書パス", '証明機関（CA）の証明書が保存されるディレクトリを指定します。 これらの証明書は、クライアント証明書の認証およびサーバー証明書チェーンの構築に使用されます。サーバー証明書チェーンは、サーバー証明書に加えてブラウザーにも送信されます。', '', 'path', '');

$_tipsdb['CGIPriority'] = new DAttrHelp("CGI プライオリティ", '外部アプリケーションプロセスの優先度を指定します。 値の範囲は-20〜20です。数値が小さいほど優先度が高くなります。<br/><br/>CGIプロセスは、Webサーバーよりも高い優先度を持つことはできません。この優先度がサーバーの数値より低い数値に設定されている場合は、サーバーの優先度がこの値に使用されます。', '', 'int', '');

$_tipsdb['CPUHardLimit'] = new DAttrHelp("CPUハードリミット", 'CGIプロセスの最大CPU使用時間制限を秒単位で指定します。プロセスがCPU時間を消費してハードリミットに達すると、プロセスは強制終了されます。 値が存在しないか、0に設定されている場合は、オペレーティングシステムのデフォルト設定が使用されます。', '', '整数', '');

$_tipsdb['CPUSoftLimit'] = new DAttrHelp("CPUソフトリミット(秒)", 'CGIプロセスのCPU消費制限時間を秒単位で指定します。 プロセスがソフトリミットに達すると、シグナルによって通知されます。 値が存在しない場合、または0に設定されている場合は、オペレーティングシステムのデフォルト設定が使用されます。.', '', '整数', '');

$_tipsdb['DHParam'] = new DAttrHelp("DHパラメータ", 'DHキー交換に必要なDiffie-Hellmanパラメータファイルの場所を指定します。', '', 'ファイル名への絶対パス又は$SERVER_ROOTからの相対パス', '');

$_tipsdb['GroupDBLocation'] = new DAttrHelp("グループDBの場所", 'グループデータベースの場所を指定します。<br/>グループ情報は、ユーザデータベースまたはこのスタンドアロングループDBに設定することができます。ユーザ認証の場合、ユーザDBが最初にチェックされます。ユーザDBにグループ情報も含まれている場合、グループDBはチェックされません。 <br/><br/>DBタイプのパスワードファイルの場合、グループDBロケーションは、グループ定義を含むフラットファイルへのパスでなければなりません。ファイル名をクリックするとWebAdminコンソールからこのファイルを編集できます。 <br/>グループファイルの各行には、コロンとそのあとにスペース区切りのユーザー名のグループが続くグループ名が含まれている必要があります。例：<br/><blockquote><code>testgroup: user1 user2 user3</code></blockquote> <br/>DBタイプLDAPの場合、グループDBロケーションは、グループ情報を照会するLDAP URLでなければなりません。 有効なグループごとに、このURLと&quot;必要（許可ユーザー/グループ）&quot;で指定されたグループ名に基づいて、LDAP検索リクエストで1つのレコードしか返されません。 &quot;$k&quot;はURLのフィルタ部分に指定する必要があり、グループ名に置き換えられます。 このグループのメンバーを指定する属性の名前は、&quot;グループメンバ属性&quot;によって指定されます。<br/><br/>例: objectClass posixGroupがグループ情報の格納に使用されている場合 次のURLを使用できます: <br/><blockquote><code>ldap://localhost/ou=GroupDB,dc=example,dc=com???(&(objectClass=*)(cn=$k))</code></blockquote>', '', 'ファイル名への絶対パス又は$SERVER_ROOT、$VH_ROOTからの相対パス。', '');

$_tipsdb['HANDLER_RESTART'] = new DAttrHelp("フック::HANDLER_RESTART プライオリティ", 'このモジュールコールバックの優先度をHTTPハンドラの再起動フック内で設定します。<br/>   Webサーバが現在の応答を破棄し、内部リダイレクトが要求されたときなど、最初から処理を開始する必要があるときに、HTTPハンドラの再起動フックがトリガされます。<br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['HTTP_AUTH'] = new DAttrHelp("フック::HTTP_AUTH プライオリティ", 'HTTP認証フック内のこのモジュールコールバックの優先度を設定します。<br/>  HTTP認証フックは、リソースマッピング後およびハンドラ処理の前にトリガされます。 HTTP組み込み認証の後に発生し、追加の認証チェックを実行するために使用できます。  <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['HTTP_BEGIN'] = new DAttrHelp("フック::HTTP_BEGIN プライオリティ", 'HTTP Begin フック内のこのモジュールコールバックの優先度を設定します。<br/>   TCP/IP接続がHTTPセッションを開始すると、HTTP Begin フックがトリガーされます。  <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['HTTP_END'] = new DAttrHelp("フック::HTTP_END プライオリティ", 'HTTPセッション終了フック内のこのモジュールコールバックの優先度を設定します。 <br/><br/>HTTPセッション終了フックは、HTTP接続が終了したときにトリガーされます。     <br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['L4_BEGINSESSION'] = new DAttrHelp("フック::L4_BEGINSESSION プライオリティ", 'このモジュールコールバックの優先度をL4 Begin Session フック内で設定します。<br/>  TCP/IP接続が開始されると、L4 Begin Session フックがトリガーされます。  <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['L4_ENDSESSION'] = new DAttrHelp("フック::L4_ENDSESSION プライオリティ", 'このモジュールコールバックの優先度をL4 End Session フック内で設定します。<br/>   TCP/IP接続が終了すると、L4 End Session フックがトリガーされます。 <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['L4_RECVING'] = new DAttrHelp("フック::L4_RECVING プライオリティ", 'L4 Receiving フック内のこのモジュールコールバックの優先度を設定します。<br/>   TCP/IP接続がデータを受信すると、L4 Receiving フックがトリガーされます。  <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['L4_SENDING'] = new DAttrHelp("フック::L4_SENDING プライオリティ", 'このモジュールコールバックの優先度をL4 Sendingフック内で設定します。<br/>  L4_SENDINGフックは、TCP/IP接続がデータを送信するときにトリガーされます。  <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['MAIN_ATEXIT'] = new DAttrHelp("フック::MAIN_ATEXIT プライオリティ", 'メインの出口フック内のこのモジュールコールバックの優先度を設定します <br/><br/>メインの出口フックは、終了する直前のメイン（コントローラ）プロセスによって起動されます。 これは、メインプロセスによって呼び出される最後のフックポイントです。.   <br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['MAIN_INITED'] = new DAttrHelp("フック::MAIN_INITED プライオリティ", 'メイン初期化フック内のこのモジュールコールバックの優先度を設定します。 <br/><br/>メイン初期化フックは、起動時、メイン（コントローラ）プロセスによってサーバー構成と初期化が完了した後、および要求が処理される前に一度起動されます。   <br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先順位はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['MAIN_POSTFORK'] = new DAttrHelp("フック::MAIN_POSTFORK プライオリティ", 'Main Postfork フック内のこのモジュールコールバックの優先度を設定します。<br/><br/>Main Postfork Hookは、新しいワーカープロセスが開始（フォーク）された直後にメイン（コントローラ）プロセスによってトリガされます。 これは各ワーカーに呼び出され、システムの起動時やワーカが再起動されたときに発生する可能性があります。   <br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['MAIN_PREFORK'] = new DAttrHelp("フック::MAIN_PREFORK プライオリティ", 'Main Prefork フック内のこのモジュールコールバックの優先度を設定します。 <br/><br/>Main Prefork フックは、新しいワーカープロセスが開始（分岐）される直前にメイン（コントローラ）プロセスによってトリガされます。 これは各ワーカーに呼び出され、システムの起動時やワーカが再起動されたときに発生する可能性があります。   <br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['RCVD_REQ_BODY'] = new DAttrHelp("フック::RCVD_REQ_BODY プライオリティ", 'HTTP Received Request Body Hook内のこのモジュールコールバックの優先度を設定します。  <br/><br/>Webサーバーが要求本体データの受信を終了すると、HTTP受信要求本体フックがトリガーされます。  <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['RCVD_RESP_BODY'] = new DAttrHelp("フック::RCVD_RESP_BODY プライオリティ", 'HTTP受信応答ボディフック内のこのモジュールコールバックの優先度を設定します。  <br/><br/>HTTP受信応答ボディフックは、Webサーバーのバックエンドが応答本体の受信を終了するとトリガーされます。  <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['RECV_REQ_BODY'] = new DAttrHelp("フック::RECV_REQ_BODY プライオリティ", 'HTTP受信要求ボディフック内のこのモジュールコールバックの優先度を設定します。  <br/><br/>Webサーバーが要求本体データを受信すると、HTTP受信要求ボディフックがトリガーされます。  <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['RECV_REQ_HEADER'] = new DAttrHelp("フック::RECV_REQ_HEADER プライオリティ", 'HTTP受信要求ヘッダーフック内のこのモジュールコールバックの優先度を設定します。<br/>   HTTP受信要求ヘッダーフックは、Webサーバーが要求ヘッダーを受信するとトリガーされます。  <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['RECV_RESP_BODY'] = new DAttrHelp("フック::RECV_RESP_BODY プライオリティ", 'HTTP受信応答ボティフック内のこのモジュールコールバックの優先度を設定します。  <br/><br/>HTTP受信応答ボティフックは、Webサーバーのバックエンドが応答本体を受信するとトリガーされます。  <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['RECV_RESP_HEADER'] = new DAttrHelp("Hook::RECV_RESP_HEADER Priority", 'HTTP受信応答ヘッダーフック内のこのモジュールコールバックの優先度を設定します。  <br/><br/>HTTP受信応答ヘッダーフックは、Webサーバーが応答ヘッダーを作成するときにトリガーされます。  <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['SEND_RESP_BODY'] = new DAttrHelp("フック::SEND_RESP_BODY プライオリティ", 'HTTP送信レスポンスボディフック内のこのモジュールコールバックの優先度を設定します。 <br/><br/>HTTP送信レスポンスボディフックは、Webサーバがレスポンスボディを送信するときにトリガされます。  <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['SEND_RESP_HEADER'] = new DAttrHelp("フック::SEND_RESP_HEADER プライオリティ", 'このモジュールコールバックの優先度を、HTTP送信応答ヘッダーフック内で設定します。 <br/><br/>Webサーバーが応答ヘッダーを送信する準備ができたら、HTTP送信応答ヘッダーフックがトリガーされます。  <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['UDBgroup'] = new DAttrHelp("グループ", 'A comma seperated list of groups that this user belongs to. The user will only be able to access resources belonging to these groups.<br/><br/>If group information is added here, this information will be used for resource authorization and any group database settings involving this user will be ignored.', '', '', '');

$_tipsdb['UDBpass'] = new DAttrHelp("New Password", 'Password can be any length and contain any characters.', '', '', '');

$_tipsdb['UDBpass1'] = new DAttrHelp("Retype Password", 'Password can be any length and contain any characters.', '', '', '');

$_tipsdb['UDBusername'] = new DAttrHelp("User Name", 'A user name containing only letters and numbers. (no special characters)', '', '', '');

$_tipsdb['URI_MAP'] = new DAttrHelp("フック::URI_MAP プライオリティ", 'このモジュールコールバックの優先度をHTTP URIマップフック内で設定します。<br/>  HTTP URI マップフックは、WebサーバーがURI要求をコンテキストにマップするときにトリガーされます。 <br/><br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['VHlsrecaptcha'] = new DAttrHelp("reCAPTCHA Protection", 'reCAPTCHA Protection is a service provided as a way to mitigate heavy server load. reCAPTCHA Protection will activate after one of the below situations is hit. Once active, all requests by NON TRUSTED(as configured) clients will be redirected to a reCAPTCHA validation page. After validation, the client will be redirected to their desired page.<br/><br/>The following situations will activate reCAPTCHA Protection:<br/>1. The server or vhost concurrent requests count passes the configured connection limit.<br/>2. Anti-DDoS is enabled and a client is hitting a url in a suspicious manner. The client will redirect to reCAPTCHA first instead of getting denied when triggered.<br/>3. A new rewrite rule environment is provided to activate reCAPTCHA via RewriteRules. &#039;verifycaptcha&#039; can be set to redirect clients to reCAPTCHA. A special value &#039;: deny&#039; can be set to deny the client if it failed too many times. For example, [E=verifycaptcha] will always redirect to reCAPTCHA until verified. [E=verifycaptcha: deny] will redirect to reCAPTCHA until Max Tries is hit, after which the client will be denied.', '', '', '');

$_tipsdb['WORKER_ATEXIT'] = new DAttrHelp("フック::WORKER_ATEXIT プライオリティ", 'このモジュールコールバックの優先度を、終了時のワーカーのフック内で設定します。 <br/><br/>退出時のワーカーは、退出する直前のワーカープロセスによってトリガされます。 これは、ワーカーによって呼び出される最後のフックポイントです。   <br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['WORKER_POSTFORK'] = new DAttrHelp("フック::WORKER_POSTFORK プライオリティ", 'Worker Postfork Hook内のこのモジュールコールバックの優先度を設定します。 <br/><br/>Worker Postfork Hookは、メイン（コントローラ）プロセスによって作成された後、ワーカープロセスによってトリガされます。 対応するMain Postfork Hookは、このコールバックの前または後のメインプロセスによって呼び出されることに注意してください。ck.   <br/>モジュールにフックポイントがある場合にのみ有効です。 設定されていない場合、優先度はモジュールで定義されたデフォルト値になります。', '', '整数値は-6000から6000です。値が小さいほど優先度が高くなります。', '');

$_tipsdb['accessAllowed'] = new DAttrHelp("アクセス許可", 'このコンテキストでリソースにアクセスできるIPまたはサブネットワークを指定します。 &quot;アクセス拒否&quot;とサーバー/バーチャルホスト・レベルのアクセス制御とともに、アクセシビリティは、クライアントのIPアドレスが入る最小の範囲によって決まります。', '', 'IP/サブネットワークのカンマ区切りリスト。', 'サブネットワークは以下のように書くことができます 192.168.1.0/255.255.255.0, 192.168.1, 又は 192.168.1.*.');

$_tipsdb['accessControl'] = new DAttrHelp("アクセス制御", 'どのサブネットワークおよび/またはIPアドレスがサーバーにアクセスできるかを指定します。 サーバレベルでは、この設定はすべてのバーチャルホストに影響します。 バーチャルホストレベルで各バーチャルホストに固有のアクセス制御を設定することもできます。 バーチャルホストレベルの設定はサーバーレベルの設定を上書きしません。 <br/><br/>ブロック/ IPの許可は、許可リストと拒否リストの組み合わせによって決まります。 特定のIPまたはサブネットワークのみをブロックする場合は、&quot;許可リスト&quot;に*またはALLを入れ、ブロックされたIPまたはサブネットワークを&quot;拒否リスト&quot;。<br/>特定のIPまたはサブネットワークのみを許可する場合は、&quot;拒否リスト&quot;に*またはALLを入れ、許可されたIPまたはサブネットワークを&quot;許可リスト&quot;。<br/>IPに適合する最小スコープの設定は、アクセスを決定するために使用されます。<br/><br/><b>サーバーレベル：</b>信頼できるIPまたはサブネットワークは、&quot;許可リスト&quot;に、末尾の &quot;T&quot;を追加することで指定する必要があります。 信頼できるIPまたはサブネットワークは、接続/スロットリング制限の影響を受けません。 信頼できるIP/サブネットワークは、サーバーレベルのアクセス制御でのみ設定できます。', '[セキュリティ]すべてのバーチャルホストに適用される一般的な制限については、サーバーレベルでこれを使用してください。', '', '');

$_tipsdb['accessControl_allow'] = new DAttrHelp("許可リスト", '許可されるIPまたはサブネットワークのリストを指定します。 *またはALLが受け入れられます。', '[セキュリティ]サーバーレベルのアクセス制御で設定された信頼されたIPまたはサブネットワークは、接続/スロットリングの制限から除外されます。', 'IPアドレスまたはサブネットワークのカンマ区切りリスト。 末尾の「T」は、192.168.1.*Tなどの信頼できるIPまたはサブネットワークを示すために使用できます。', '<b>Sub-networks:</b> 192.168.1.0/255.255.255.0, 192.168.1.0/24, 192.168.1, or 192.168.1.*<br/><b>IPv6 addresses:</b> ::1 or [::1] <br/><b>IPv6 subnets:</b> 3ffe:302:11:2:20f:1fff:fe29:717c/64 or  [3ffe:302:11:2:20f:1fff:fe29:717c]/64');

$_tipsdb['accessControl_deny'] = new DAttrHelp("拒否リスト", '許可されていないIPまたはサブネットワークのリストを指定します。', '', 'IPアドレスまたはサブネットワークのカンマ区切りリスト。 *またはALLが受け入れられます。', '<b>Sub-networks:</b> 192.168.1.0/255.255.255.0, 192.168.1.0/24, 192.168.1, or 192.168.1.*<br/><b>IPv6 addresses:</b> ::1 or [::1] <br/><b>IPv6 subnets:</b> 3ffe:302:11:2:20f:1fff:fe29:717c/64 or  [3ffe:302:11:2:20f:1fff:fe29:717c]/64');

$_tipsdb['accessDenied'] = new DAttrHelp("アクセス拒否", 'このコンテキストでリソースにアクセスできないIPまたはサブネットワークを指定します。 &quot;アクセス許可&quot;とサーバー/バーチャルホストレベルのアクセス制御とともに、アクセシビリティはクライアントのIPアドレスが入る最小の範囲で決まります。', '', 'IP/サブネットワークのカンマ区切りリスト。', 'サブネットワークは以下のように書くことができます 192.168.1.0/255.255.255.0, 192.168.1, 又は 192.168.1.*.');

$_tipsdb['accessDenyDir'] = new DAttrHelp("アクセスが拒否されたディレクトリ", 'アクセスをブロックするディレクトリを指定します。 重要なデータを含むディレクトリをこのリストに追加して、誤って機密ファイルをクライアントに公開しないようにします。 すべてのサブディレクトリを含めるためにパスに「*」を追加します。 &quot;シンボリックリンクに従う&quot;と&quot;シンボリックリンクを確認する&quot;の両方を有効にすると、拒否されたディレクトリに対してシンボリックリンクがチェックされます。', '[セキュリティ]重要な点：この設定では、これらのディレクトリから静的ファイルを提供することができません。 これは、PHP/Ruby/CGIなどの外部スクリプトによるエクスポージャーを防ぐものではありません。', 'ディレクトリのカンマ区切りリスト', '');

$_tipsdb['accessLog_bytesLog'] = new DAttrHelp("バイトログ", '帯域幅バイトのログファイルへのパスを指定します。 指定すると、cPanel互換の帯域幅ログが作成されます。 これにより、要求と応答本体の両方を含む要求に対して転送された合計バイトが記録されます。', '[パフォーマンス]ログファイルを別のディスクに配置します。', 'ファイル名への絶対パス又は$SERVER_ROOTからの相対パス', '');

$_tipsdb['accessLog_fileName'] = new DAttrHelp("ファイル名", 'アクセスログファイル名。', '[パフォーマンス]アクセスログファイルを別のディスクに入れます。', 'ファイル名への絶対パス又は$SERVER_ROOTからの相対パス', '');

$_tipsdb['accessLog_logFormat'] = new DAttrHelp("Log Format", ' アクセスログのログ形式を指定します。 ログフォーマットが設定されると、&quot;ログヘッダー&quot;の設定より優先されます。', '', '文字列。ログフォーマットの構文はApache 2.0のカスタムと互換性があります  <a href="http://httpd.apache.org/docs/current/mod/mod_log_config.html#formats" target="_blank" rel="noopener noreferrer">log format</a>。', '<br> <b>共通ログフォーマット（CLF）</b><br/>    &quot;%h %l %u %t \&quot;%r\&quot; %>s %b&quot;<br/><br/><b>バーチャルホストによる共通ログフォーマット</b><br/>    &quot;%v %h %l %u %t \&quot;%r\&quot; %>s %b&quot;<br/><br/><b>NCSA拡張/結合ログフォーマット</b><br/>    &quot;%h %l %u %t \&quot;%r\&quot; %>s %b \&quot;%{Referer}i\&quot; \&quot;%{User-agent}i\&quot; <br/><br/><b>FoobarのログCookie値</b><br/>    &quot;%{Foobar}C&quot;');

$_tipsdb['accessLog_logHeader'] = new DAttrHelp("ログヘッダー", 'Referer、UserAgent、HostのいずれかをHTTPリクエストヘッダとして記録するかどうかを指定します。', '[パフォーマンス]これらのヘッダーがアクセスログに必要ない場合は、これをオフにします。', 'チェックボックス', '');

$_tipsdb['accessLog_pipedLogger'] = new DAttrHelp("パイプロガー", 'LiteSpeedがSTDINストリーム上のパイプを通じて送信するアクセスログデータを受け取る外部アプリケーションを指定します（ファイルハンドルは0）。 このフィールドが指定されると、アクセスログはロガーアプリケーションにのみ送信され、前のエントリで指定されたアクセスログファイルには送信されません。<br/><br/>ロガーアプリケーションは、最初に&quot;外部アプリケーション&quot;セクションで定義する必要があります。 サーバー・レベルのアクセス・ロギングは、サーバー・レベルで定義された外部ロガー・アプリケーションのみを使用できます。 バーチャルホストレベルのアクセスロギングでは、バーチャルホストレベルで定義されたロガーアプリケーションのみを使用できます。<br/><br/>ロガープロセスは、他の外部（CGI/FastCGI/LSAPI）プロセスと同じ方法で生成されます。 つまり、バーチャルホストの&quot;外部アプリ Set UID モード&quot;設定で指定されたユーザーIDとして実行され、特権ユーザーのために実行されることはありません。. <br/><br/>LiteSpeed Webサーバーは、複数のロガーアプリケーションのインスタンスが設定されている場合、複数のロガーアプリケーション間で簡単なロードバランシングを実行します。 LiteSpeedサーバーは、常にロガーアプリケーションの数を可能な限り低く抑えようとします。 1つのロガーアプリケーションがアクセスログエントリを時間内に処理できない場合にのみ、サーバーはロガーアプリケーションの別のインスタンスを生成しようとします。 <br/><br/>ロガーがクラッシュした場合、Webサーバーは別のインスタンスを開始しますが、ストリームバッファーのログデータは失われます。 外部ロガーがログ・ストリームの速度と量に追いつけない場合、ログ・データを失う可能性があります。', '', '選択', '');

$_tipsdb['aclogUseServer'] = new DAttrHelp("ログ制御", 'アクセスログを書き込むべき場所。 3つのオプションがあります:  <ol> <li>サーバのアクセスログに書き込む</li> <li>このバーチャルホストのアクセスログを作成する</li> <li>アクセスログを無効にする</li> </ol>', '', '選択', '');

$_tipsdb['addDefaultCharset'] = new DAttrHelp("デフォルトの文字セットを追加", 'コンテンツタイプが &quot;text/html&quot;または &quot;text/plain&quot;のいずれかのパラメータがない場合、文字セットタグを &quot;Content-Type&quot;レスポンスヘッダーに追加するかどうかを指定します。 Offに設定すると、この機能は無効になります。 Onに設定すると、&quot;カスタマイズされたデフォルトの文字セット&quot;で指定された文字セットまたはデフォルトの &quot;iso-8859-1&quot;のいずれかが追加されます。', '', 'ラジオボックスから選択', '');

$_tipsdb['addMIMEType'] = new DAttrHelp("MIMEタイプ", 'このコンテキストに追加のMIMEタイプとマッピングを指定します。 新しいマッピングは、このコンテキストとその子コンテキストのもとで既存のマッピングを上書きします。<br/>スクリプトとして実行するのではなく、PHPスクリプトをテキストファイルとして表示するには、MIMEタイプ &quot;text/plain&quot;への.phpマッピングをオーバーライドするだけです。', '', 'MIME-type1 extension extension ..., MIME-type2 extension ... 		カンマを使用してMIMEタイプを区切り、スペースを使用して複数の拡張子を区切ります。', 'image/jpg jpeg jpg, image/gif gif');

$_tipsdb['addonmodules'] = new DAttrHelp("アドオンモジュール", '使用するアドオンモジュールを選択します。 ここに記載されていないバージョンを使用する場合は、手動でソースコードを更新することができます。 （PHPビルドのこのステップでは、ソースコードの場所がプロンプトに表示されます）。', '', 'チェックボックスから選択', '');

$_tipsdb['adminEmails'] = new DAttrHelp("管理者Eメール", 'サーバー管理者の電子メールアドレスを指定します。 このオプションを指定すると、重大イベントが電子メールで管理者に通知されます（例えば、LiteSpeedサービスがクラッシュを検出したために自動的に再開された場合、またはライセンスの期限切れになった時など）。', 'メールアラート機能は、サーバにpostfix、exim、sendmailなどのアクティブなMXサーバがある場合にのみ機能します。', 'Eメールアドレスのカンマ区切りリスト。', '');

$_tipsdb['adminUser'] = new DAttrHelp("WebAdminユーザー", 'WebAdmin Consoleのユーザー名とパスワードを変更します。 変更を保存するには、古いパスワードを入力して確認する必要があります。', '', '', '');

$_tipsdb['allowBrowse'] = new DAttrHelp("アクセス可能", 'このコンテキストにアクセスできるかどうかを指定します。 アクセスを拒否するにはいいえに設定してください。 この機能を使用して、指定したディレクトリが訪問されないように保護できます。 このコンテキストのコンテンツを更新している場合、またはこのディレクトリに特別なデータがある場合に使用することができます。', '', 'ラジオボックスから選択', '');

$_tipsdb['allowQuic'] = new DAttrHelp("Open HTTP3/QUIC (UDP) port", 'Allows the use of the HTTP3/QUIC network protocol for virtual hosts mapped to this listener. For this setting to take effect, &quot;Enable HTTP3/QUIC&quot; must also be set to Yes at the server level. Default value is Yes.', 'When this setting is set to Yes, HTTP3/QUIC can still be disabled at the virtual host level through the &quot;Enable HTTP3/QUIC&quot; setting.', '', '');

$_tipsdb['allowSetUID'] = new DAttrHelp("UIDの設定を許可する", '設定されたUIDビットがCGIスクリプトに許可されるかどうかを指定します。 設定されたUIDビットが許可され、CGIスクリプトに対して設定されたUIDビットが有効になっている場合、CGIスクリプトがどのユーザーに代わって起動されたかにかかわらず、CGIプロセスのユーザーIDは、CGIスクリプトの所有者のユーザーIDに切り替わります。<br/>デフォルトは「オフ」です。', '[セキュリティ]可能であれば、UID CGIスクリプトを設定しないでください。 本質的にセキュリティリスクです。', 'ラジオボックスから選択', '');

$_tipsdb['allowSymbolLink'] = new DAttrHelp("シンボリックリンク参照", 'このバーチャルホスト内のシンボリックリンクをたどるかどうかを指定します。 IF OWNER MATCHオプションは、同じ所有権を持つ場合にのみシンボリックリンクに従います。 この設定は、デフォルトのサーバーレベルの設定よりも優先されます。', '[パフォーマンスとセキュリティ]セキュリティを強化するために、この機能を無効にしてください。 パフォーマンスを向上させるには、有効にします。', 'ドロップダウンリストから選択', '');

$_tipsdb['antiddos_blocked_ip'] = new DAttrHelp("Anti-DDoS Blocked IP", 'A comma-separated list of IP addresses blocked by Anti-DDoS protection, each ending with a semi-colon and reason code indicating why the IP address was blocked.<br/><br/>Potential Reason Codes: <ul>   <li>A: BOT_UNKNOWN</li>   <li>B: BOT_OVER_SOFT</li>   <li>C: BOT_OVER_HARD</li>   <li>D: BOT_TOO_MANY_BAD_REQ</li>   <li>E: BOT_CAPTCHA</li>   <li>F: BOT_FLOOD</li>   <li>G: BOT_REWRITE_RULE</li>   <li>H: BOT_TOO_MANY_BAD_STATUS</li>   <li>I: BOT_BRUTE_FORCE</li> </ul><br/><br/>The full list of blocked IPs is also available in the Real-Time Stats report file set in &quot;統計出力ディレクトリ&quot;.', '', '&lt;blocked_ip_address&gt;;&lt;reason_code&gt;', '1.0.100.50;E, 1.0.100.60;D, 1.0.100.70;F');

$_tipsdb['appServerContext'] = new DAttrHelp("App Server Context", 'An App Server Context provides an easy way to configure a Ruby Rack/Rails, WSGI, or Node.js application. To add a an application through an App Server Context, only mounting the URL and the application&#039;s root directory is required. There is no need to go through all the trouble to define an external application, add a 404 handler, and rewrite rules, etc.', '', '', '');

$_tipsdb['appType'] = new DAttrHelp("Application Type", 'The type of application used for this context. Rack/Rails, WSGI, or Node.js are supported.', '', '', '');

$_tipsdb['appserverEnv'] = new DAttrHelp("Run-Time Mode", 'Specifies which mode the application will be running as: &quot;Development&quot;, &quot;Production&quot;, or &quot;Staging&quot;. The default is &quot;Production&quot;.', '', 'ドロップダウンリストから選択', '');

$_tipsdb['as_location'] = new DAttrHelp("Location", 'Specifies the corresponding location of this context in the file system.<br/><br/>Default value: $DOC_ROOT + &quot;URI&quot;', '', 'It can be an absolute path or path relative to $SERVER_ROOT, $VH_ROOT, or $DOC_ROOT. $DOC_ROOT is the default relative path, and can be omitted.<br/><br/>If the &quot;URI&quot; is a regular expression, then the matched sub-string can be used to form the &quot;Root&quot; string. The matched sub-string can be referenced with the values &quot;$1&quot; - &quot;$9&quot;. &quot;$0&quot; and &quot;&&quot; can be used to reference the whole matched string. Additionally, a query string can be set by appending a &quot;?&quot; followed by the query string. Be careful. &quot;&&quot; should be escaped as &quot;\&&quot; in the query string.', 'A plain URI like /examples/ with &quot;ロケーション&quot; set to /home/john/web_examples will map the request &quot;/examples/foo/bar.html&quot; to file &quot;/home/john/web_examples/foo/bar.html&quot;.<br/>To simulate Apache&#039;s mod_userdir, set URI to exp: ^/~([A-Za-z0-9]+)(.*), set &quot;ロケーション&quot; to /home/$1/public_html$2. With these settings, a request of URI /~john/foo/bar.html will map to file /home/john/public_html/foo/bar.html.');

$_tipsdb['as_startupfile'] = new DAttrHelp("Startup File", 'The location of file used to start the application, relative to the application root directory.<br/><br/>Default startup file names include &#039;config.ru&#039; for Rack/Rails, &#039;wsgi.py&#039; and &#039;passenger_wsgi.py&#039; for WSGI, and &#039;app.js&#039; for NodeJS.', '', 'Path relative to application root directory', '');

$_tipsdb['authName'] = new DAttrHelp("認証名", '現在のコンテキストの認証レルムの代替名を指定します。 指定しない場合、元のレルム名が使用されます。 認証名は、ブラウザのログインポップアップに表示されます。', '', 'テキスト', '');

$_tipsdb['autoFix503'] = new DAttrHelp("自動修正 503 エラー", '「503 Service Unavailable」エラーを修正するかどうかを指定します。 サーバーを正常に再起動します。 通常、「503」エラーは外部アプリケーションが誤動作したために発生し、Webサーバーを再起動するとエラーが一時的に修正されることがあります。 有効にすると、30秒間に50件以上の「503」エラーが発生すると、サーバーは自動的に再起動します。 この機能はデフォルトで有効になっています。', '', 'ラジオボックスから選択', '');

$_tipsdb['autoIndex'] = new DAttrHelp("自動インデックス", '&quot;インデックスファイル&quot;にリストされている索引ファイルがディレクトリで使用できないときに、その場でディレクトリー索引を生成するかどうかを指定します。 このオプションは、バーチャルホストおよびコンテキストレベルでカスタマイズ可能で、明示的に上書きされるまでディレクトリツリーに沿って継承されます。 生成された索引ページをカスタマイズできます。 オンラインウィキHow-tosを確認してください。', '[セキュリティ]可能であれば、自動インデックスをオフにして、機密データを漏らさないようにすることをお勧めします。', 'ラジオボックスから選択', '');

$_tipsdb['autoIndexURI'] = new DAttrHelp("自動インデックス URI", '&quot;インデックスファイル&quot;にリストされているインデックスファイルがディレクトリで使用できない場合に、インデックスページを生成するために使用されるURIを指定します。 LiteSpeed Webサーバーは外部スクリプトを使用してインデックスページを生成し、最大限のカスタマイズの柔軟性を提供します。 デフォルトスクリプトは、Apacheと同じ外観のインデックスページを生成します。 生成されたインデックスページをカスタマイズするには、オンラインウィキHow-tosを読んでください。 索引付けされるディレクトリーは、環境変数 &quot;LS_AI_PATH&quot;を介してスクリプトに渡されます。', '', 'URI', '');

$_tipsdb['autoLoadHtaccess'] = new DAttrHelp("Auto Load from .htaccess", 'Autoload rewrite rules contained in a directory&#039;s .htaccess file when first accessing that directory if an HttpContext for that directory using the <b>rewritefile</b> directive does not already exist. Once initially loaded, a graceful restart must be performed for any further changes to that .htaccess file to take effect.<br/><br/>Virtual Host-level setting overrides Server-level setting. Default values:<br/><br/><b>Server-level:</b> No<br/><br/><b>VH-Level:</b> Inherit Server-level setting', '', 'ラジオボックスから選択', '');

$_tipsdb['autoStart'] = new DAttrHelp("自動スタート", 'Webサーバーでアプリケーションを自動的に開始するかどうかを指定します。 同じマシン上で実行されているFastCGIおよびLSAPIアプリケーションのみを自動的に起動することができます。 &quot;アドレス&quot;のIPはローカルIPでなければなりません。 メインサーバプロセスではなくLiteSpeed CGIデーモンを起動すると、システムのオーバーヘッドを軽減できます。', '', 'ドロップダウンリストから選択', '');

$_tipsdb['backlog'] = new DAttrHelp("バックログ", 'リスニングソケットのバックログを指定します。 &quot;自動スタート&quot;が有効な場合は必須です。', '', '整数', '');

$_tipsdb['banPeriod'] = new DAttrHelp("禁止期間（秒）", '&quot;猶予期間（秒）&quot;経過後、接続数がまだ&quot;接続ソフトリミット&quot;以上の場合、新しい接続がIPから拒否される期間を指定します。 IPが繰り返し禁止されている場合は、禁止期間を延長して虐待のペナルティを強化することをお勧めします。', '', '整数', '');

$_tipsdb['binPath'] = new DAttrHelp("Binary Path", 'The location of the App Server application binary.', '', '', '');

$_tipsdb['blockBadReq'] = new DAttrHelp("不良リクエストをブロックする", '&quot;禁止期間（秒）&quot;に不正な形式のHTTP要求を送信し続けるIPをブロックします。 デフォルトははいです。 これは、ジャンク要求を繰り返し送信するボットネット攻撃をブロックするのに役立ちます。', '', 'ラジオボックスから選択', '');

$_tipsdb['brStaticCompressLevel'] = new DAttrHelp("Brotli Compression Level (Static File)", 'Specifies the level of Brotli compression applied to static files. Ranges from 0 (disabled) to 11 (highest).<br/><br/>When set to 0, brotli compression will be disabled globally.<br/><br/>Default value: 5', ' Save network bandwidth. Text-based responses such as html, css, and javascript files benefit the most and on average can be compressed to half of their original size.', 'Number between 0 and 11.', '');

$_tipsdb['bubbleWrap'] = new DAttrHelp("Bubblewrap Container", 'Set to Enabled if you wish to start CGI processes (including PHP programs) in a bubblewrap sandbox. See <a href="   https://wiki.archlinux.org/title/Bubblewrap " target="_blank" rel="noopener noreferrer">   https://wiki.archlinux.org/title/Bubblewrap </a> for details on using bubblewrap. Bubblewrap must be installed on your system prior to using this setting.<br/><br/>This setting cannot be turned on at the Virtual Host level if set to &quot;Disabled&quot; at the Server level.<br/><br/>Default values:<br/><b>Server level:</b> Disabled<br/><b>VH level:</b> Inherit Server level setting', '', 'ドロップダウンリストから選択', '');

$_tipsdb['bubbleWrapCmd'] = new DAttrHelp("Bubblewrap Command", 'The full bubblewrap use command, including the bubblewrap program itself. More on configuring this command can be found here: <a href="   https://openlitespeed.org/kb/bubblewrap-in-openlitespeed/ " target="_blank" rel="noopener noreferrer">   https://openlitespeed.org/kb/bubblewrap-in-openlitespeed/ </a>. If not specified, the default command listed below will be used.<br/><br/>Default value: /bin/bwrap --ro-bind /usr /usr --ro-bind /lib /lib --ro-bind-try /lib64 /lib64 --ro-bind /bin /bin --ro-bind /sbin /sbin --dir /var --dir /tmp --proc /proc --symlink ../tmp var/tmp --dev /dev --ro-bind-try /etc/localtime /etc/localtime --ro-bind-try /etc/ld.so.cache /etc/ld.so.cache --ro-bind-try /etc/resolv.conf /etc/resolv.conf --ro-bind-try /etc/ssl /etc/ssl --ro-bind-try /etc/pki /etc/pki --ro-bind-try /etc/man_db.conf /etc/man_db.conf --ro-bind-try /home/$USER /home/$USER --bind-try /var/lib/mysql/mysql.sock /var/lib/mysql/mysql.sock --bind-try /home/mysql/mysql.sock /home/mysql/mysql.sock --bind-try /tmp/mysql.sock /tmp/mysql.sock  --unshare-all --share-net --die-with-parent --dir /run/user/$UID ‘$PASSWD 65534’ ‘$GROUP 65534’', '', '', '');

$_tipsdb['certChain'] = new DAttrHelp("チェーン証明書", '証明書がチェーン証明書であるかどうかを指定します。 チェーン証明を格納するファイルは、PEM形式でなければならず、証明書は最下位レベル（実際のクライアントまたはサーバー証明書）から最上位（ルート）CAまでの連鎖の順序でなければなりません。', '', 'ラジオボックスから選択', '');

$_tipsdb['certFile'] = new DAttrHelp("証明書ファイル", 'SSL証明書ファイルのファイル名。', '[セキュリティ]証明書ファイルは、サーバーが実行されるユーザーへの読み取り専用アクセスを可能にする安全なディレクトリに配置する必要があります。', 'ファイル名への絶対パス又は$SERVER_ROOTからの相対パス', '');

$_tipsdb['cgiContext'] = new DAttrHelp("CGIコンテキスト", 'CGIコンテキストは、特定のディレクトリ内のスクリプトをCGIスクリプトとして定義します。 このディレクトリは、ドキュメントルートの内側または外側にすることができます。 このディレクトリの下にあるファイルが要求されると、サーバは実行可能かどうかに関わらず、常にCGIスクリプトとして実行しようとします。 このように、CGIコンテキスト下のファイルの内容は常に保護されており、静的なコンテンツとして読み込むことができません。 すべてのCGIスクリプトをディレクトリに置いて、それらにアクセスするためのCGIコンテキストを設定することをお勧めします。', '', '', '');

$_tipsdb['cgiResource'] = new DAttrHelp("CGI設定", '次の設定は、CGIプロセスを制御します。 これらのアプリケーションに対して制限が明示的に設定されていない場合は、メモリおよびプロセスの制限も他の外部アプリケーションのデフォルトとして機能します。', '', '', '');

$_tipsdb['cgi_path'] = new DAttrHelp("パス", 'CGIスクリプトの場所を指定します。', '', 'パスは$VH_ROOT/myapp/cgi-bin/のようなCGIスクリプトのグループが含まれているディレクトリにすることができます。 この場合、コンテキスト&quot;URI&quot;は/app1/cgi/のように &quot;/&quot;で終わらなければなりません。 パスは、$VH_ROOT/myapp/myscript.plのように、CGIスクリプトを1つだけ指定することもできます。 このスクリプトには対応する&quot;URI&quot;/myapp/myscript.plが必要です。', '');

$_tipsdb['cgidSock'] = new DAttrHelp("CGIデーモンソケット", 'CGIデーモンとの通信に使用される一意のソケットアドレス。 LiteSpeedサーバーは、スタンドアロンのCGIデーモンを使用して、最高のパフォーマンスとセキュリティを実現するCGIスクリプトを生成します。 デフォルトソケットはuds://$SERVER_ROOT/admin/lscgid/.cgid.sock &quot;です。 別の場所に配置する必要がある場合は、ここにUnixドメインソケットを指定します。', '', 'UDS://path', 'UDS://tmp/lshttpd/cgid.sock');

$_tipsdb['cgroups'] = new DAttrHelp("cgroups", 'A Linux kernel feature that limits, accounts for, and isolates the resource usage (CPU, memory, disk I/O, network, etc.) of a collection of processes. You must be running cgroups v2 which is determined by the existence of the file /sys/fs/cgroup/cgroup.controllers.<br/><br/>Setting this to Disabled at the Server level will disable this setting server-wide. In all other cases, the Server level setting can be overridden at the Virtual Host level.<br/><br/>Default values:<br/><b>Server level:</b> Off<br/><b>VH level:</b> Inherit Server level setting', '', 'ドロップダウンリストから選択', '');

$_tipsdb['checkSymbolLink'] = new DAttrHelp("シンボリックリンクを確認する", '&quot;シンボリックリンクに従う&quot;がオンになっているときに、&quot;アクセスが拒否されたディレクトリ&quot;に対するシンボリックリンクをチェックするかどうかを指定します。 有効にすると、URLで参照されるリソースのカノニカル実パスが、設定可能なアクセス拒否ディレクトリと照合されます。 アクセスが拒否されたディレクトリ内にある場合、アクセスは拒否されます。', '[パフォーマンス & セキュリティ]最高のセキュリティを実現するには、このオプションを有効にします。 最高のパフォーマンスを得るには、無効にしてください。', 'ラジオボックスから選択', '');

$_tipsdb['ciphers'] = new DAttrHelp("暗号", 'SSLハンドシェイクのネゴシエーション時に使用する暗号スイートを指定します。 LSWSは、SSL v3.0、TLS v1.0、およびTLS v1.2で実装された暗号スイートをサポートしています。', '[セキュリティ] SSL暗号のベストプラクティスに従ったデフォルトの暗号を使用する場合は、このフィールドを空白のままにすることをお勧めします。', 'コロンで区切られた暗号仕様の文字列。', 'ECDHE-RSA-AES128-SHA256:RC4:HIGH:!MD5:!aNULL:!EDH');

$_tipsdb['clientVerify'] = new DAttrHelp("クライアントの検証", 'クライアント証明書認証のタイプを指定します。 使用できるタイプは次のとおりです： <ul> <li><b>None:</b> クライアント証明書は必要ありません。</li> <li><b>Optional:</b> クライアント証明書はオプションです。</li> <li><b>Require:</b> クライアントには有効な証明書が必要です。</li> <li><b>Optional_no_ca:</b> オプションと同じです。</li> </ul> デフォルトは &quot;None&quot;です。', '&quot;None&quot;または &quot;Require&quot;をお勧めします。', 'ドロップダウンリストから選択', '');

$_tipsdb['compilerflags'] = new DAttrHelp("コンパイラフラグ", '最適化されたコンパイラオプションのような追加のコンパイラフラグを追加します。', '', 'サポートされているフラグは、CFLAGS、CXXFLAGS、CPPFLAGS、LDFLAGSです。 スペースを使用して、異なるフラグを区切ります。 フラグ値には一重引用符（二重引用符ではない）を使用します。', 'CFLAGS=&#039;-O3 -msse2 -msse3 -msse4.1 -msse4.2 -msse4 -mavx&#039;');

$_tipsdb['compressibleTypes'] = new DAttrHelp("圧縮可能なタイプ", '圧縮できるMIMEタイプを指定します。', '[パフォーマンス] GZIP圧縮の恩恵を受けるタイプのみを許可します。 gif / png / jpegイメージやフラッシュファイルなどのバイナリファイルは、圧縮の恩恵を受けません。', 'MIMEタイプのリストをカンマで区切って指定します。 ワイルドカード &quot;*&quot;と否定記号 &quot;！&quot; はtext/*、！text/jsなどで許可されています。', 'text/cssではないtext/*を圧縮する場合は、次のようなルールを設定できます。 text/*, !text/css. &quot;!&quot;はそのMIMEタイプを除外します。');

$_tipsdb['configFile'] = new DAttrHelp("設定ファイル", 'このバーチャルホストの設定ファイル名とディレクトリ。 設定ファイルは、$SERVER_ROOT/conf/vhosts/ディレクトリの下になければなりません。', '$SERVER_ROOT/conf/vhosts/$VH_NAME/vhconf.confをお勧めします。', 'ファイル名への絶対パス又は$SERVER_ROOTからの相対パス', '');

$_tipsdb['configureparams'] = new DAttrHelp("パラメータの設定", 'PHPビルド用のパラメータを設定します。 Apache固有のパラメータと &quot; - prefix&quot;の値は自動的に削除され、次のステップをクリックすると &quot;--with-litespeed&quot;が自動的に追加されます。 （前のフィールドにプレフィックスを設定することができます）このようにして、既存の動作中のPHPビルドのphpinfo（）出力からconfigureパラメータをコピーして貼り付けることができます。', '', 'スペース区切りの一連のオプション（二重引用符を使用する場合と使用しない場合）', '');

$_tipsdb['connTimeout'] = new DAttrHelp("コネクションタイムアウト（秒）", '1つの要求の処理中に許容される最大接続アイドル時間を指定します。 この時間の間、接続がアイドル状態の場合、つまりI/Oアクティビティがない場合は、接続が閉じられます。', '[セキュリティ]潜在的なDoS攻撃の間に不在接続を回復するのに役立つように、この値を低く設定します。', '整数', '');

$_tipsdb['consoleSessionTimeout'] = new DAttrHelp("セッションタイムアウト（秒）", 'WebAdmin Consoleのセッションタイムアウトの長さをカスタマイズします。 デフォルトは60秒です。', '[セキュリティ]プロダクション使用に適切な値を設定します。通常は300秒未満です。', '整数', '');

$_tipsdb['cpuAffinity'] = new DAttrHelp("CPU Affinity", 'CPU affinity binds a process to one or more CPUs (cores). It is beneficial for a process to always use the same CPU because then the process can make use of data left in CPU cache. If the process moves to a different CPU, there is no use of CPU cache and unnecessary overhead is required.<br/><br/>The CPU Affinity setting controls how many CPUs (cores) one server process will be associated with. The minimum value is 0, which will disable this feature. The maximum value is the number of cores the server has. Generally, 1 is the best setting because it creates the strictest use of CPU affinity and thus makes the most use of CPU cache.<br/><br/>Default value: 0', '', 'Integer value from 0 to 64. (0 will disable this feature)', '');

$_tipsdb['crlFile'] = new DAttrHelp("クライアント失効ファイル", '取り消されたクライアント証明書を列挙するPEMエンコードCA CRLファイルを含むファイルを指定します。 これは、代わりに、または&quot;クライアントの失効パス&quot;に加えて使用することができます。', '', 'ファイル名への絶対パス又は$SERVER_ROOTからの相対パス', '');

$_tipsdb['crlPath'] = new DAttrHelp("クライアントの失効パス", '取り消されたクライアント証明書のPEMエンコードされたCA CRLファイルを含むディレクトリを指定します。 このディレクトリのファイルはPEMでエンコードする必要があります。 これらのファイルは、ハッシュファイル名、hash-value.rNによってアクセスされます。 ハッシュファイル名の作成については、openSSLまたはApache mod_sslのドキュメントを参照してください。', '', 'パス', '');

$_tipsdb['ctxType'] = new DAttrHelp("コンテキストタイプ", '<b>静的</b>コンテキストを使用して、URIをドキュメントルートの外部またはその内部のディレクトリにマップできます。<br> <b>Java Webアプリ</b>コンテキストは、AJPv13コンパイラJavaサーブレットエンジンで定義済みのJavaアプリケーションを自動的にインポートするために使用されます。<br> <b>サーブレット</b>コンテキストは、Webアプリケーションの下にある特定のサーブレットをインポートするために使用されます。<br> <b>Fast CGI</b>コンテキストは、Fast CGIアプリケーションのマウントポイントです。<br> <b>LiteSpeed SAPI</b>コンテキストを使用して、URIをLSAPIアプリケーションに関連付けることができます。<br> <b>プロキシー</b>コンテキストにより、このバーチャルホストは、外部のWebサーバーまたはアプリケーションサーバーへのトランスペアレントリバースプロキシサーバーとして機能します。<br> <b>CGI</b>コンテキストを使用して、ディレクトリにCGIスクリプトのみを指定することができます。<br> <b>ロードバランサー</b>コンテキストを使用して、そのコンテキストに異なるクラスタを割り当てることができます。<br> <b>リダイレクト</b>コンテキストで内部リダイレクトURIまたは外部リダイレクトURIを設定できます。<br> <b>Rack/Rails</b>コンテキストは、特にRack/Railsアプリケーションに使用されます。<br> <b>モジュールハンドラー</b>コンテキストは、ハンドラー型モジュールのマウントポイントです。<br>', '', '', '');

$_tipsdb['defaultCharsetCustomized'] = new DAttrHelp("カスタマイズされたデフォルトの文字セット", '&quot;デフォルトの文字セットを追加&quot;がOnのときに使用される文字セットを指定します。        これはオプションです。 デフォルト値は iso-8859-1 です。        &quot;デフォルトの文字セットを追加&quot;が Off の場合、このエントリは無効です。', '', '文字セットの名前。', 'utf-8');

$_tipsdb['defaultType'] = new DAttrHelp("デフォルトのMIMEタイプ", 'この型を指定すると、ドキュメントの接尾辞でMIMEタイプのマッピングを判別できない場合、または接尾辞がない場合にこの型が使用されます。        指定しない場合、デフォルト値application/octet-streamが使用されます。', '', 'MIMEタイプ', '');

$_tipsdb['destinationuri'] = new DAttrHelp("宛先URI", 'リダイレクトのターゲットの場所を指定します。 このリダイレクトされたURIが別のリダイレクトコンテキストのURIにマップされると、リダイレクトされます。', '', 'このURIは、&quot;/&quot;で始まる同じWebサイトの相対URIでもか、&quot;http(s)：//&quot;で始まる別のWebサイトを指す絶対URIでもかまいません。 &quot;URI&quot;に正規表現が含まれている場合、宛先は$1や$2などの一致した変数を参照できます。', '');

$_tipsdb['disableInitLogRotation'] = new DAttrHelp("初期ログローテーションを無効にする", '起動時にサーバーエラーログファイルのローテーションを有効/無効にするかどうかを指定します。 値が「未設定」の場合、初期ログローテーションはデフォルトで有効になっています。', '', 'ラジオボックスから選択', '');

$_tipsdb['docRoot'] = new DAttrHelp("ドキュメントルート", 'このバーチャルホストのドキュメントルートを指定します。 $VH_ROOT/htmlをお勧めします。 このディレクトリは、コンテキストでは$DOC_ROOTと呼ばれます。', '', '絶対パスか$SERVER_ROOTからの相対パス又は$VH_ROOTからの相対パス。', '');

$_tipsdb['domainName'] = new DAttrHelp("ドメイン", 'マッピングドメイン名を指定します。 ドメイン名は大文字と小文字を区別せず、先頭の &quot;www.&quot; 削除されます。 ワイルドカード文字「*」と「？」 は許可されます。 「？」 1文字のみを表します。 「*」は任意の数の文字を表します。 重複したドメイン名は許可されません。', '[パフォーマンス]リスナーが1つのバーチャルホスト専用の場合は、不要なチェックを避けるために、ドメイン名に常に*を使用します。 可能であれば、ワイルドカード文字（キャッチオールドメイン以外）を使用するドメイン名は避けてください。', 'カンマで区切られたリスト。', 'www?.example.com<br/>&quot;*.mydomain.com&quot;はmydomain.comのすべてのサブドメインと一致します。<br/>「*」はそれ自体がキャッチオールドメインであり、不一致のドメイン名と一致します。');

$_tipsdb['dynReqPerSec'] = new DAttrHelp("動的リクエスト/秒", '確立された接続の数に関係なく、1秒ごとに処理できる単一のIPアドレスからの動的に生成されるコンテンツへの要求の最大数を指定します。 この制限に達すると、今後のすべての動的コンテンツへのリクエストは、次の秒までタールピットされます。 <br/><br/>静的コンテンツの要求制限は、この制限とは関係ありません。 このクライアントごとの要求制限は、サーバーまたはバーチャルホストレベルで設定できます。 バーチャルホストレベルの設定は、サーバーレベルの設定よりも優先されます。', '[セキュリティ]この制限によって、信頼できるIPまたはサブネットワークは制限されません。', '整数', '');

$_tipsdb['enableCoreDump'] = new DAttrHelp("コアダンプを有効にする", 'サーバーが「root」ユーザーによって開始されたときにコア・ダンプを使用可能にするかどうかを指定します。 最新のUnixシステムでは、セキュリティ上の理由から、ユーザーIDまたはグループIDを変更するプロセスはコアファイルをダンプできません。 ただし、コアダンプを持つ問題の根本原因を特定する方がはるかに簡単です。 このオプションは、Linuxカーネル2.4以上でのみ動作します。 Solarisユーザーは coreadm コマンドを使用してこの機能を制御する必要があります。', '[セキュリティ]サーバログファイルにコアファイルが作成されていないと表示されている場合にのみ有効にします。 コアファイルを生成した直後に無効にしてください。 コアダンプが作成されたときにバグレポートを提出してください。', 'ラジオボックスから選択', '');

$_tipsdb['enableDHE'] = new DAttrHelp("DHキー交換を有効にする", 'さらにSSL暗号化のためにDiffie-Hellman鍵交換を使用できます。', '[セキュリティ] DHキーの交換は、RSAキーを使用するよりも安全です。 ECDHとDHキーの交換は同等に安全です。<br/><br/>[パフォーマンス] DHキー交換を有効にするとCPU負荷が増加し、ECDHキー交換とRSAよりも遅くなります。 ECDH鍵交換が利用可能である場合に優先される。', 'ラジオボックスから選択', '');

$_tipsdb['enableDynGzipCompress'] = new DAttrHelp("動的圧縮を有効にする", '動的に生成されるHTTPレスポンスのGZIP圧縮を制御します。 動的なGZIP圧縮を有効にするには、&quot;圧縮を有効にする&quot;をはいに設定する必要があります。', '[パフォーマンス]動的応答を圧縮すると、CPUとメモリの使用率は向上しますが、ネットワーク帯域幅は節約されます。', 'ラジオボックスから選択', '');

$_tipsdb['enableECDHE'] = new DAttrHelp("ECDH鍵交換を有効にする", 'さらにSSL暗号化のために楕円曲線 Diffie-Hellman鍵交換を使用できます。', '[セキュリティ] ECDH鍵交換は、RSA鍵だけを使用するより安全です。 ECDHとDHキーの交換は同等に安全です。<br/><br/>[パフォーマンス] ECDH鍵交換を有効にするとCPU負荷が増加し、RSA鍵だけを使用する場合よりも遅くなります。', 'ラジオボックスから選択', '');

$_tipsdb['enableExpires'] = new DAttrHelp("有効期限を有効にする", '静的ファイルのExpiresヘッダーを生成するかどうかを指定します。 有効にすると、&quot;デフォルトの期限&quot;と&quot;タイプ別の期限&quot;に基づいてExpiresヘッダーが生成されます。<br/><br/>これは、サーバー、バーチャルホスト、コンテキストレベルで設定できます。 下位レベルの設定は上位レベルの設定を上書きします。 コンテキスト設定はバーチャルホストの設定を上書きし、バーチャルホストの設定はサーバーの設定を上書きします。', '', 'ラジオボックスから選択', '');

$_tipsdb['enableGzipCompress'] = new DAttrHelp("圧縮を有効にする", '静的HTTP応答と動的HTTP応答の両方のGZIP圧縮を制御します。', '[パフォーマンス]ネットワーク帯域幅を節約するために有効にします。 html、css、およびjavascriptファイルなどのテキストベースの応答が最大の利益をもたらし、平均で元のサイズの半分に圧縮できます。', 'ラジオボックスから選択', '');

$_tipsdb['enableIpGeo'] = new DAttrHelp("IPジオロケーションを有効にする", ' IPジオロケーション検索を有効/無効にするかどうかを指定します。 サーバ、バーチャルホスト、コンテキストレベルで設定できます。 値 「未設定」を使用すると、IPジオロケーションはデフォルトで無効になります。', '', 'ラジオボックスから選択', '');

$_tipsdb['enableLVE'] = new DAttrHelp("Cloud-Linux", 'CloudLinuxの軽量バーチャル環境（LVE）が存在する場合に有効にするかどうかを指定します。 LiteSpeedをLVEと共に使用すると、より良いリソース管理を実現できます。 詳細については、<a href="http://www.cloudlinux.com" target="_blank" rel="noopener noreferrer">http://www.cloudlinux.com</a>を参照してください。', '', '選択', '');

$_tipsdb['enableRecaptcha'] = new DAttrHelp("Enable reCAPTCHA", 'Enable the reCAPTCHA Protection feature at the current level. This setting must be set to Yes at the Server level before the reCAPTCHA Protection feature can be used.<br/><br/>Default values:<br/><b>Server-level:</b> Yes<br/><b>VH-Level:</b> Inherit Server level setting', '', 'ラジオボックスから選択', '');

$_tipsdb['enableRewrite'] = new DAttrHelp("Rewriteを有効にする", 'LiteSpeedのURL書き換えエンジンを有効にするかどうかを指定します。 このオプションは、バーチャルホストまたはコンテキストレベルでカスタマイズでき、明示的に上書きされるまでディレクトリツリーに沿って継承されます。', '', 'ラジオボックスから選択', '');

$_tipsdb['enableScript'] = new DAttrHelp("スクリプトを有効にする", 'このバーチャルホストでスクリプティング（非静的ページ）を許可するかどうかを指定します。 無効にすると、CGI、FastCGI、LSAPI、サーブレットエンジン、その他のスクリプト言語はこのバーチャルホストでは許可されません。 このため、スクリプトハンドラを使用する場合は、スクリプトハンドラもここで有効にする必要があります。', '', 'ラジオボックスから選択', '');

$_tipsdb['enableSpdy'] = new DAttrHelp("SPDY/HTTP2を有効にする", 'HTTP/2とSPDYは、ページロード時間を短縮する目的で、HTTPネットワークプロトコルの新バージョンです。 より多くの情報は<a href="   http://en.wikipedia.org/wiki/HTTP/2 " target="_blank" rel="noopener noreferrer">   http://en.wikipedia.org/wiki/HTTP/2 </a>で見つけることができます。', 'This setting can be set at the listener and virtual host levels.', '有効にするプロトコルを確認します。 すべてのボックスをチェックしないと、SPDYとHTTP/2のサポート（デフォルト）が有効になります。 SPDYとHTTP/2を無効にする場合は、「なし」のみをチェックし、その他のチェックボックスはすべてオフにします。', '');

$_tipsdb['enableStapling'] = new DAttrHelp("OCSPステープルを有効にする", 'OCSPステープルを有効にするかどうかを決定します。これは、公開鍵証明書を検証するより効率的な方法です。', '', 'ラジオボックスから選択', '');

$_tipsdb['enableh2c'] = new DAttrHelp("HTTP/2 over Cleartext TCPを有効にする", '暗号化されていないTCP接続に対してHTTP/2を有効にするかどうかを指定します。 デフォルトは無効です。', '', 'ラジオボックスから選択', '');

$_tipsdb['env'] = new DAttrHelp("環境", '外部アプリケーション用の追加の環境変数を指定します。', '', 'Key=value. 複数の変数は &quot;ENTER&quot;で区切ることができます。', '');

$_tipsdb['errCode'] = new DAttrHelp("エラーコード", 'SエラーページのHTTPステータスコードを指定します。 選択したHTTPステータスコードだけがこのカスタマイズされたエラーページを持ちます。', '', '選択', '');

$_tipsdb['errPage'] = new DAttrHelp("カスタマイズされたエラーページ", 'サーバーが要求を処理する際に問題が発生すると、サーバーはエラーコードとhtmlページをエラーメッセージとしてWebクライアントに返します。 エラーコードはHTTPプロトコルで定義されています（RFC 2616参照）。 LiteSpeed Webサーバーには、エラーコードごとにデフォルトのエラーページが組み込まれていますが、各エラーコードに対してカスタマイズされたページを設定することもできます。 これらのエラーページは、各バーチャルホストごとに一意になるようにさらにカスタマイズすることができます。', '', '', '');

$_tipsdb['errURL'] = new DAttrHelp("URL", 'カスタマイズされたエラーページのURLを指定します。 サーバーは、対応するHTTPステータスコードが返されたときに、このURLにリクエストを転送します。 このURLが存在しないリソースを参照する場合は、組み込みのエラーページが使用されます。 URLは、静的ファイル、動的に生成されたページ、または別のWebサイトのページ（「http(s)：//」で始まるURL文字列）にすることができます。 別のWebサイトのページを参照する場合、クライアントは元のステータスコードの代わりにリダイレクトステータスコードを受け取ります。', '', 'URL', '');

$_tipsdb['expWSAddress'] = new DAttrHelp("アドレス", '外部Webサーバーによって使用されるHTTPまたはHTTPSアドレス。', '[セキュリティ]同じマシン上で実行されている別のWebサーバーにプロキシする場合は、IPアドレスをlocalhostまたは127.0.0.1に設定します。 外部アプリケーションは他のマシンからはアクセスできません。', 'IPv4またはIPV6アドレス（：ポート）。 外部Webサーバーがhttpsを使用する場合は、先頭に「https：//」を追加します。 外部Webサーバーが標準ポート80または443を使用する場合、ポートはオプションです。', '192.168.0.10 <br/>127.0.0.1:5434<br/>https://10.0.8.9<br/>https://127.0.0.1:5438');

$_tipsdb['expiresByType'] = new DAttrHelp("タイプ別の期限", '各MIMEタイプのExpiresヘッダー設定を指定します。', '', '&quot;MIME-type=A|Mseconds&quot;のカンマで区切られたリスト。 このファイルは、基本時間（A|M）に指定された秒を加えた後に期限切れになります。<br/><br/>ベース時刻 &quot;A&quot;はクライアントのアクセス時間に値を設定し、 &quot;M&quot;はファイルの最終変更時刻を設定します。 MIMEタイプはimage/*のようなワイルドカード &quot;*&quot;を受け入れます。', '');

$_tipsdb['expiresDefault'] = new DAttrHelp("デフォルトの期限", 'Expiresヘッダー生成のデフォルト設定を指定します。 この設定は、&quot;有効期限を有効にする&quot;が &quot;はい&quot;に設定されているときに有効になります。 &quot;タイプ別の期限&quot;で上書きできます。 すべてのページのExpiresヘッダーが生成されるため、必要がない限り、このデフォルトをサーバーまたはバーチャルホストレベルで設定しないでください。 ほとんどの場合、これは頻繁に変更されない特定のディレクトリのコンテキストレベルで設定する必要があります。 デフォルト設定がない場合、&quot;タイプ別の期限&quot;で指定されていないタイプに対してExpiresヘッダーは生成されません。', '', 'A|M秒<br/>このファイルは、基本時間（A | M）に指定された秒を加えた後に期限切れになります。 ベース時刻 &quot;A&quot;はクライアントのアクセス時間に値を設定し、 &quot;M&quot;はファイルの最終変更時刻を設定します。', '');

$_tipsdb['expuri'] = new DAttrHelp("URI", 'このコンテキストのURIを指定します。', '', 'URIは、プレーンURI（ &quot;/&quot;で始まる）またはPerl互換の正規表現URI（ &quot;exp：&quot;で始まる）にすることができます。 プレーンURIが &quot;/&quot;で終わる場合、このコンテキストはこのURIの下にすべてのサブURIを含みます。 コンテキストがファイルシステム上のディレクトリにマップされている場合は、末尾に「/」を追加する必要があります。', '');

$_tipsdb['extAppAddress'] = new DAttrHelp("アドレス", '外部アプリケーションによって使用される一意のソケットアドレス。 IPv4/IPv6ソケットとUnixドメインソケット（UDS）がサポートされています。 IPv4/IPv6ソケットは、ネットワークを介した通信に使用できます。 UDSは、外部アプリケーションがサーバーと同じマシンにある場合にのみ使用できます。', '[セキュリティ]外部アプリケーションが同じマシン上で実行される場合は、UDSが優先されます。 IPv4|IPV6ソケットを使用する必要がある場合は、IPアドレスをlocalhostまたは127.0.0.1に設定して、外部アプリケーションに他のマシンからアクセスできないようにします。<br/>[パフォーマンス] Unixドメインソケットは、通常、IPv4ソケットよりも高いパフォーマンスを提供します。', 'IPv4またはIPV6アドレス：ポートまたはUDS：//パス', '127.0.0.1:5434<br/>UDS://tmp/lshttpd/php.sock.');

$_tipsdb['extAppName'] = new DAttrHelp("名前", 'この外部アプリケーションの一意の名前。 設定の他の部分でこの名前を使用するときは、この名前で参照します。', '', '', '');

$_tipsdb['extAppPath'] = new DAttrHelp("コマンド", '外部アプリケーションを実行するためのパラメータを含む完全なコマンドラインを指定します。 &quot;自動スタート&quot;が有効な場合は必須値です。 パラメータにスペースまたはタブ文字が含まれている場合は、パラメータを二重引用符または一重引用符で囲む必要があります。', '', 'オプションのパラメータを含む実行可能ファイルへのフルパス。', '');

$_tipsdb['extAppPriority'] = new DAttrHelp("優先度", '外部アプリケーション・プロセスの優先度を指定します。 値の範囲は−20〜20です。 数字が小さいほど優先度が高くなります。 外部アプリケーションプロセスは、Webサーバーよりも高い優先度を持つことはできません。 この優先度がサーバーの数値より低い数値に設定されている場合は、サーバーの優先度がこの値に使用されます。', '', '整数', '');

$_tipsdb['extAppType'] = new DAttrHelp("タイプ", '外部アプリケーションのタイプを指定します。 アプリケーションタイプは、提供するサービスまたはサーバーとの通信に使用するプロトコルによって区別されます。 以下から選んでください。 <ul> <li>FastCGI: Responderロールを持つFastCGIアプリケーションです。</li> <li>FastCGI Authorizer: Authorizerロールを持つFastCGIアプリケーション</li> <li>Servlet Engine: tomcatなどのAJPv13コネクタを持つサーブレットエンジンです。</li> <li>Web Server: HTTPプロトコルをサポートするWebサーバーまたはアプリケーションサーバー。</li> <li>LiteSpeed SAPI App: LSAPIプロトコルを使用してWebサーバーと通信するアプリケーションです。</li> <li>Load Balancer:ワーカーアプリケーション間の負荷を分散できるバーチャルアプリケーションです。</li> <li>Piped Logger: STDINストリームで受け取ったアクセスログエントリを処理できるアプリケーションです。</li> </ul>', 'ほとんどのアプリケーションは、LSAPIまたはFastCGIプロトコルを使用します。 LSAPIはPHP、Ruby、Pythonをサポートしています。 PerlはFastCGIで使用できます。 （PHP、Ruby、およびPythonはFastCGIを使用して実行するように設定することもできますが、LSAPIを使用する方が高速です）。Javaはサーブレットエンジンを使用します。', 'ドロップダウンリストから選択', '');

$_tipsdb['extAuthorizer'] = new DAttrHelp("承認者", '権限のある/権限のないかの決定を生成するために使用できる外部アプリケーションを指定します。 現在、FastCGI Authorizerのみが使用可能です。 FastCGI Authorizerの役割の詳細については、<a href="   https://fastcgi-archives.github.io/ " target="_blank" rel="noopener noreferrer">   https://fastcgi-archives.github.io/ </a>を参照してください。 。', '', 'ドロップダウンリストから選択', '');

$_tipsdb['extGroup'] = new DAttrHelp("suEXECグループ", '外部アプリケーションが実行されるグループ名を指定します。', '', '有効なグループ名。', '');

$_tipsdb['extMaxIdleTime'] = new DAttrHelp("最大アイドル時間", 'サーバーが外部アプリケーションを停止するまでの最大アイドル時間を指定します。 &quot;-1&quot;に設定すると、外部アプリケーションはサーバーによって停止されません。 デフォルト値は &quot;-1&quot;です。 この機能により、アイドル状態のアプリケーションが使用するリソースを解放することができます。 最大限のセキュリティを確保するために、setuidモードで動作する多くのアプリケーションを定義する必要がある場合には、マスホスティング環境で特に便利です。', '[パフォーマンス]この機能は、大規模なホスティング環境で特に便利です。 あるバーチャルホストが所有するファイルが別のバーチャルホストの外部アプリケーションスクリプトによってアクセスされないようにするため、大量ホスティングではSetUIDモードで同時に多くの異なるアプリケーションを実行する必要があります。 これらの外部アプリケーションが不必要にアイドリングしないように、この最大アイドル時間を低く設定します。', 'ラジオボックスから選択', '');

$_tipsdb['extUmask'] = new DAttrHelp("umask", 'この外部アプリケーションのプロセスのデフォルトumaskを設定します。 詳細は、man 2 umaskを参照してください。 デフォルト値はサーバーレベルの&quot;umask&quot;設定から取得されます。', '', '有効範囲[000]〜[777]の値。', '');

$_tipsdb['extUser'] = new DAttrHelp("suEXECユーザー", '外部アプリケーションが実行されるユーザー名を指定します。 設定されていない場合、外部アプリケーションはWebサーバーのユーザーとして実行されます。', '', '有効なユーザー名。', '');

$_tipsdb['extWorkers'] = new DAttrHelp("ワーカー", '以前に外部ロードバランサで定義されたワーカーグループのリスト。', '', 'ExternalAppType::ExternalAppNameという形式のカンマ区切りリスト', 'fcgi::localPHP, proxy::backend1');

$_tipsdb['externalredirect'] = new DAttrHelp("外部リダイレクト", 'このリダイレクトが外部かどうかを指定します。 外部リダイレクトの場合は、&quot;ステータスコード&quot;を指定し、&quot;宛先URI&quot;は &quot;/&quot;または &quot;http(s)：//&quot;で開始できます。 内部リダイレクトの場合、&quot;宛先URI&quot;は &quot;/&quot;で始まらなければなりません。', '', '', '');

$_tipsdb['extraHeaders'] = new DAttrHelp("Extra Headers", '追加される余分な応答ヘッダーを指定します。 1行に1つのヘッダーを追加できます。 親コンテンツから継承したヘッダーを無効にするには、&quot;NONE&quot;を入力します。', ' Syntax and usage are similar to <a href="https://httpd.apache.org/docs/2.2/mod/mod_headers.html#header" target="_blank" rel="noopener noreferrer">Apache&#039;s mod_headers directives</a> for supported operations.<br/><br/> The &#039;Header&#039; directive is is optional and can be excluded or left in when copying rules from elsewhere without issue.', '各行に &quot;[HeaderName]: [HeaderValue]&quot;', 'Cache-control: no-cache, no-store <br/>My-header: Custom header value');

$_tipsdb['extrapathenv'] = new DAttrHelp("特別なPATH環境変数", 'ビルドスクリプトの現在のPATH環境変数に追加される追加のPATH値。', '', '&quot;：&quot;で区切られたパス値', '');

$_tipsdb['fcgiContext'] = new DAttrHelp("FastCGIコンテキスト", 'FastCGIアプリケーションは直接使用することはできません。 FastCGIアプリケーションは、スクリプトハンドラとして構成するか、FastCGIコンテキストを介してURLにマップする必要があります。 FastCGIコンテキストは、URIをFastCGIアプリケーションに関連付けます。', '', '', '');

$_tipsdb['fcgiapp'] = new DAttrHelp("FastCGI アプリ", 'FastCGIアプリケーションの名前を指定します。 このアプリケーションは、サーバーまたはバーチャルホストレベルの&quot;外部アプリケーション&quot;セクションで定義する必要があります。', '', '選択', '');

$_tipsdb['fileETag'] = new DAttrHelp("ファイルETag", 'ファイルのinode、last-modified time、およびsize属性を使用するかどうかを指定します。 静的ファイル用のETag HTTP応答ヘッダーを生成します。 3つの属性はすべてデフォルトで有効になっています。 ミラー化されたサーバーから同じファイルを提供する予定の場合は、iノードを含めないでください。 それ以外の場合、1つのファイルに対して生成されるETagは、異なるサーバーで異なります。', '', 'チェックボックスから選択', '');

$_tipsdb['fileUpload'] = new DAttrHelp("ファイルアップロード", 'Request Body Parserを使用してファイルをアップロードしてサーバーのローカルディレクトリにファイルを解析し、第三者のモジュールによる悪意のある行為を簡単にスキャンできるようにする、追加のセキュリティ機能を提供します。 Request Body Parserは、&quot;ファイルパスによるアップロードデータの転送&quot;が有効になっているか、モジュールがLSI_HKPT_HTTP_BEGINレベルでLSIAPIのset_parse_req_bodyを呼び出すときに使用されます。 ソースパッケージで提供されるAPIの例', '', '', '');

$_tipsdb['followSymbolLink'] = new DAttrHelp("シンボリックリンクに従う", '静的ファイルを提供する際のシンボリックリンクのサーバーレベルのデフォルト設定を指定します。 <br/><br/>選択肢ははい、オーナーと一致する場合 いいえです。 <br/><br/>はいは、シンボリックリンクに常に従うようにサーバーを設定します。 所有者の一致がの場合は、リンクの所有者とターゲットの所有者が同じ場合にのみシンボリックリンクに従うようにサーバーを設定します。  いいえは、サーバーがシンボリックリンクを決して辿らないことを意味します。  この設定はバーチャルホスト設定で上書きできますが、.htaccessファイルで上書きすることはできません。', '[パフォーマンスとセキュリティ]最高のセキュリティを実現するには、いいえまたは{Owner}が一致する場合を選択します。 最高のパフォーマンスを得るには、はいを選択します。', 'ドロップダウンリストから選択', '');

$_tipsdb['forceGID'] = new DAttrHelp("強制GID", 'suEXECモードで起動したすべての外部アプリケーションに使用するグループIDを指定します。 ゼロ以外の値に設定すると、すべてのsuEXEC外部アプリケーション（CGI/FastCGI/LSAPI）がこのグループIDを使用します。 これにより、外部アプリケーションが他のユーザーが所有するファイルにアクセスするのを防ぐことができます。<br/><br/>たとえば、共有ホスティング環境では、LiteSpeedはユーザー &quot;www-data&quot;として実行され、グループ &quot;www-data&quot;として実行されます。 各docrootは、 &quot;www-data&quot;のグループと許可モード0750を持つユーザーアカウントによって所有されています。 強制GIDが &quot;nogroup&quot;（または &#039;www-data&#039;以外のグループ）に設定されている場合、すべてのsuEXEC外部アプリケーションは特定のユーザーとして実行されますが、グループ &quot;nogroup&quot;に実行されます。 これらの外部アプリケーション・プロセスは（ユーザーIDのために）特定のユーザーが所有するファイルには引き続きアクセスできますが、他のユーザーのファイルにアクセスするためのグループ権限は持っていません。 一方、サーバは、（グループIDのために）どんなユーザのdocrootディレクトリ下でもファイルを提供することができます。', '[セキュリティ]システムユーザーが使用するすべてのグループを除外するのに十分な高さに設定します。', '整数', '');

$_tipsdb['forceStrictOwnership'] = new DAttrHelp("厳格な所有権チェックを強制する", '厳密なファイル所有権チェックを実施するかどうかを指定します。 有効になっている場合、Webサーバーは、提供されるファイルの所有者がバーチャルホストの所有者と同じかどうかをチェックします。 異なる場合は、403アクセス拒否エラーが返されます。 これはデフォルトではオフになっています。', '[セキュリティ]共有ホスティングの場合、このチェックを有効にしてセキュリティを強化します。', 'ラジオボックスから選択', '');

$_tipsdb['forceType'] = new DAttrHelp("強制MIMEタイプ", 'このコンテキストの下にあるすべてのファイルは、指定すると、ファイルの接尾辞に関係なくMIMEタイプが指定された静的ファイルとして提供されます。         NONE に設定すると、継承された強制タイプの設定は無効になります。', '', 'MIMEタイプまたはNONE。', '');

$_tipsdb['gdb_groupname'] = new DAttrHelp("Group Name", 'A group name containing only letters and numbers (no special characters).', '', 'string', '');

$_tipsdb['gdb_users'] = new DAttrHelp("Users", 'Space separated list of users belonging to this group.', '', '', '');

$_tipsdb['generalContext'] = new DAttrHelp("静的コンテキスト", 'コンテキスト設定は、特定の場所にあるファイルの特別な設定を指定するために使用されます。 これらの設定は、ApacheのAliasやAliasMatchディレクティブのようなドキュメントルートの外部にファイルを持ち込み、認可領域を使用して特定のディレクトリを保護したり、ドキュメントルート内の特定のディレクトリへのアクセスをブロックまたは制限するために使用できます。', '', '', '');

$_tipsdb['geoipDBFile'] = new DAttrHelp("DBファイルのパス", ' MaxMind GeoIPデータベースへのパスを指定します。', '', 'ファイルパス', '/usr/local/share/GeoIP/GeoLite2-Country.mmdb');

$_tipsdb['geoipDBName'] = new DAttrHelp("DB Name", 'MaxMind GeoIP database name. As of GeoIP2, this setting is required.<br/><br/>When upgrading from a GeoIP to a GeoIP2, using values &quot;COUNTRY_DB&quot;, &quot;CITY_DB&quot;, or &quot;ASN_DB&quot; for this setting will automatically populate PHP&#039;s $_SERVER variable with some GeoIP compatible entries (listed by DB Name value below) to help ease this transition.<br/><br/><b>CITY_DB:</b> &#039;GEOIP_COUNTRY_CODE&#039;, &#039;GEOIP_COUNTRY_NAME&#039;, &#039;GEOIP_CONTINENT_CODE&#039;, &#039;GEOIP_COUNTRY_CONTINENT&#039;, &#039;GEOIP_DMA_CODE&#039;, &#039;GEOIP_METRO_CODE&#039;, &#039;GEOIP_LATITUDE&#039;, &#039;GEOIP_LONGITUDE&#039;, &#039;GEOIP_POSTAL_CODE&#039;, and &#039;GEOIP_CITY&#039;.<br/><b>COUNTRY_DB:</b> &#039;GEOIP_COUNTRY_CODE&#039;, &#039;GEOIP_COUNTRY_NAME&#039;, &#039;GEOIP_CONTINENT_CODE&#039;, and &#039;GEOIP_COUNTRY_CONTINENT&#039;.<br/><b>ASN_DB:</b> &#039;GEOIP_ORGANIZATION&#039; and &#039;GEOIP_ISP&#039;.', '', '', 'COUNTRY_DB');

$_tipsdb['geolocationDB'] = new DAttrHelp("IPからジオロケーションDB", ' 複数のMaxMindジオロケーションデータベースをここで指定できます。 MaxMindには、国、地域、市区町村、組織、ISP、Netspeedの各タイプのDBがあります。 「国」、「地域」、および「都市」タイプの複数のデータベースが構成されている場合は、最後のデータベースが有効になります。', '', '', '');

$_tipsdb['gracePeriod'] = new DAttrHelp("猶予期間（秒）", '1つのIPから確立された接続の数が&quot;接続ソフトリミット&quot;を超えた後に新しい接続が受け入れられる期間を指定します。 この期間内に、総接続数が&quot;接続ハードリミット&quot;未満の場合は、新しい接続が受け入れられます。 この期間が経過した後、まだ接続数が&quot;接続ソフトリミット&quot;よりも高い場合、問題のIPは&quot;禁止期間（秒）&quot;でブロックされます。', '[パフォーマンス & セキュリティ]ダウンロードに十分な大きさに設定してください。 完全なページですが、故意の攻撃を防ぐのに十分な低さです。', '整数', '');

$_tipsdb['gracefulRestartTimeout'] = new DAttrHelp("緩やかな再起動タイムアウト（秒）", '緩やかな再起動時には、新しいサーバーインスタンスが起動した後でも、古いインスタンスは既存の要求を引き続き処理します。 このタイムアウトは、前のインスタンスが終了するまでの待機時間を定義します。 デフォルト値は300秒です。 -1は永遠に待つことを意味します。 0は待機しないことを意味し、直ちに中止します。', '', '整数', '');

$_tipsdb['groupDBCacheTimeout'] = new DAttrHelp("グループDBキャッシュタイムアウト（秒）", 'バックエンドグループデータベースの変更の確認頻度を指定します。 詳細については、&quot;ユーザーDBキャッシュタイムアウト（秒）&quot;を参照してください。', '', '整数', '');

$_tipsdb['groupDBMaxCacheSize'] = new DAttrHelp("グループDB最大キャッシュサイズ", 'グループデータベースの最大キャッシュサイズを指定します。', '[パフォーマンス]キャッシュが大きくなるとメモリが消費されるため、値が高くなるほどパフォーマンスが向上する場合があります。 ユーザーのデータベースサイズとサイトの使用状況に応じて適切なサイズに設定します。', '整数', '');

$_tipsdb['gzipAutoUpdateStatic'] = new DAttrHelp("静的ファイルの自動更新", 'Sサーバが圧縮可能な静的ファイルのGZIP圧縮バージョンを自動的に作成/更新するかどうかを指定します。 &quot;圧縮可能なタイプ&quot;にリストされているMIMEタイプのファイルが要求されたときにはいに設定されている場合、サーバーは圧縮ファイルのタイムスタンプに応じてファイルの対応する圧縮バージョンを作成または更新できます。 この圧縮ファイルは、&quot;静的GZIPキャッシュディレクトリ&quot;の下に作成されます。 ファイル名は元のファイルのパスのMD5ハッシュに基づいています。', '', 'ラジオボックスから選択', '');

$_tipsdb['gzipCacheDir'] = new DAttrHelp("静的GZIPキャッシュディレクトリ", '静的コンテンツ用の圧縮ファイルの格納に使用されるディレクトリのパスを指定します。 デフォルトは&quot;スワップディレクトリ&quot;です。', '', 'ディレクトリパス', '');

$_tipsdb['gzipCompressLevel'] = new DAttrHelp("圧縮レベル（動的コンテンツ）", '動的コンテンツの圧縮レベルを指定します。 1（最低）から9（最高）までの範囲です。 デフォルトは2です。', '[パフォーマンス]高い圧縮レベルは、より多くのメモリとCPUサイクルを使用します。 マシンに追加の電源がある場合は、それをより高いレベルに設定することができます。 6と9の間に大きな違いはありませんが、9ではCPUサイクルが多く使用されます。', '1と9の間の数字。', '');

$_tipsdb['gzipMaxFileSize'] = new DAttrHelp("最大静的ファイルサイズ（バイト）", '静的ファイルの最大サイズを指定します。 サーバーは自動的に圧縮ファイルを作成します。', '[パフォーマンス]大規模なファイルに対してサーバーが圧縮ファイルを作成/更新することはお勧めできません。 圧縮は、サーバープロセス全体をブロックし、圧縮が完了するまで、それ以上の要求は処理できません。', '1K以上のバイト数', '');

$_tipsdb['gzipMinFileSize'] = new DAttrHelp("最小静的ファイルサイズ（バイト）", '静的ファイルの最小サイズを指定します。 サーバーは対応する圧縮ファイルを作成します。', '帯域幅の節約はごくわずかなため、非常に小さいファイルを圧縮する必要はありません。', 'バイト数は200より小さくない。', '');

$_tipsdb['gzipStaticCompressLevel'] = new DAttrHelp("圧縮レベル（静的コンテンツ）", '静的コンテンツの圧縮レベルを指定します。 1（最低）から9（最高）までの範囲です。 デフォルトは6です。', '', '1から9の間の数字。', '');

$_tipsdb['hardLimit'] = new DAttrHelp("接続ハードリミット", '単一のIPアドレスから同時に許可される接続の最大数を指定します。 この制限は常に強制され、クライアントはこの制限を超えることはできません。 HTTP/1.0クライアントは通常、埋め込みコンテンツを同時にダウンロードするのに必要な数の接続を設定しようとします。 この制限は、HTTP/1.0クライアントが引き続きサイトにアクセスできるように十分に高く設定する必要があります。 &quot;接続ソフトリミット&quot;を使用して、目的の接続制限を設定します。', '[セキュリティ]数字が小さいほど、より明確なクライアントに対応できます。<br/>[セキュリティ]信頼できるIPまたはサブネットワークは影響を受けません。<br/>[パフォーマンス]多数の同時クライアントマシンでベンチマークテストを実行する場合は、高い値に設定します。', '整数', '');

$_tipsdb['httpdWorkers'] = new DAttrHelp("ワーカーの数", 'httpdワーカーの数を指定します。', '[パフォーマンス]ニーズに合わせて適切な番号を設定します。 より多くのワーカーを追加することは、必ずしもより良いパフォーマンスを意味するとは限りません。', '整数値は1〜16です。', '');

$_tipsdb['inBandwidth'] = new DAttrHelp("受信帯域幅（バイト/秒）", '確立された接続の数に関係なく、単一のIPアドレスからの最大許容着信スループット。 実際の帯域幅は効率上の理由からこの設定よりわずかに高くなることがあります。 帯域幅は1KB単位で割り当てられます。 スロットルを無効にするには、0に設定します。 クライアント単位の帯域幅制限（バイト/秒）は、バーチャルホストレベルの設定がサーバーレベルの設定を上回るサーバーまたはバーチャルホストレベルで設定できます。', '[セキュリティ]信頼できるIPまたはサブネットワークは影響を受けません。', '整数', '');

$_tipsdb['inMemBufSize'] = new DAttrHelp("最大I/Oバッファサイズ", '要求本体およびその動的生成応答を格納するために使用される最大バッファー・サイズを指定します。 この制限に達すると、サーバーは&quot;スワップディレクトリ&quot;の下に一時的なスワップファイルを作成し始めます。', '[パフォーマンス]メモリとディスクのスワップを避けるために、すべての同時要求/応答を収容できる大きさのバッファサイズを設定します。 スワップ・ダイレクトイに頻繁にI/Oアクティビティがある場合（デフォルトでは/tmp/lshttpd/swap/）、このバッファ・サイズは低すぎるため、LiteSpeedはディスクにスワップします。', '整数', '');

$_tipsdb['indexFiles'] = new DAttrHelp("インデックスファイル", 'URLがディレクトリにマップされたときに順番に検索されるインデックスファイルの名前を指定します。 サーバー、バーチャルホスト、コンテキストレベルでカスタマイズできます。', '[パフォーマンス]必要なインデックスファイルのみを設定します。', 'インデックスファイル名のカンマ区切りリスト。', '');

$_tipsdb['indexUseServer'] = new DAttrHelp("サーバーインデックスファイルを使用する", 'サーバーのインデックスファイル設定を使用するかどうかを指定します。 はいに設定すると、サーバーの設定だけが使用されます。 いいえに設定すると、サーバーの設定は使用されません。 追加に設定すると、このバーチャルホストのインデックスファイルリストに追加のインデックスファイルを追加できます。 このバーチャルホストのインデックスファイルを無効にする場合は、値をいいえに設定して、インデックスファイルのフィールドを空のままにします。', '', '選択', '');

$_tipsdb['initTimeout'] = new DAttrHelp("初期要求タイムアウト（秒）", 'サーバーが、新しいアプリケーションが新しい確立された接続を介して最初の要求に応答するのを待つ最長時間を秒単位で指定します。 サーバーがこのタイムアウト制限内に外部アプリケーションからデータを受信しない場合、この接続は不良とマークされます。 これにより、外部アプリケーションとの通信の問題をできるだけ迅速に特定することができます。 処理に時間がかかるリクエストがある場合は、この制限を増やして503のエラー・メッセージを避けてください。', '', '整数', '');

$_tipsdb['installpathprefix'] = new DAttrHelp("インストールパスのプレフィックス", '&quot;--prefix&quot;設定オプションの値を設定します。 デフォルトのインストール場所はLiteSpeed Web Serverのインストールディレクトリの下にあります。', 'LiteSpeed Web Serverは、複数のPHPバージョンを同時に使用できます。 複数のバージョンをインストールする場合は、異なるプレフィックスを付ける必要があります。', 'パス', '/usr/local/lsws/lsphp5');

$_tipsdb['instances'] = new DAttrHelp("インスタンス", 'サーバーが作成する外部アプリケーションの最大インスタンスを指定します。 &quot;自動スタート&quot;が有効な場合は必須です。 ほとんどのFastCGI/LSAPIアプリケーションは、プロセスインスタンスごとに1つの要求しか処理できません。これらのタイプのアプリケーションの場合、インスタンスは&quot;最大接続数&quot;の値に一致するように設定する必要があります。 一部のFastCGI / LSAPIアプリケーションでは、複数の子プロセスを生成して複数の要求を同時に処理できます。 これらのタイプのアプリケーションでは、インスタンスを &quot;1&quot;に設定し、環境変数を使用してアプリケーションが生成できる子プロセスの数を制御する必要があります。', '', '整数', '');

$_tipsdb['internalmodule'] = new DAttrHelp("内部", 'モジュールが外部の.soライブラリではなく、静的にリンクされている内部モジュールであるかどうかを指定します。', '', 'ラジオボックスから選択', '');

$_tipsdb['ip2locDBCache'] = new DAttrHelp("DB Cache Type", 'The caching method used. The default value is Memory.', '', 'ドロップダウンリストから選択', '');

$_tipsdb['ip2locDBFile'] = new DAttrHelp("IP2Location DB File Path", 'The location of a valid database file.', '', 'ファイル名への絶対パス又は$SERVER_ROOTからの相対パス。', '');

$_tipsdb['javaServletEngine'] = new DAttrHelp("サーブレットエンジン", 'このWebアプリケーションを提供するサーブレットエンジンの名前を指定します。 サーブレットエンジンは、サーバーまたはバーチャルホストレベルの&quot;外部アプリケーション&quot;セクションで定義する必要があります。', '', '選択', '');

$_tipsdb['javaWebAppContext'] = new DAttrHelp("Java Webアプリコンテキスト", 'Javaアプリケーションを実行している多くの人々は、サーブレットエンジンを使用して静的コンテンツを提供しています。 しかし、サーブレットエンジンは、これらのプロセスではLiteSpeed Web Serverほど効率的ではありません。 全体のパフォーマンスを向上させるために、LiteSpeed Web Serverをゲートウェイサーバーとして構成することができます。ゲートウェイサーバーは静的コンテンツを処理し、動的Javaページ要求をサーブレットエンジンに転送します。 <br/><br/>LiteSpeed Web Serverでは、Javaアプリケーションを実行するために特定のコンテキストを定義する必要があります。 Java Webアプリケーションコンテキストは、Java Webアプリケーションの構成ファイル（WEB-INF/web.xml）に基づいて、必要なすべてのコンテキストを自動的に作成します。 <br/><br/>Java Webアプリケーションコンテキストを設定する際に留意すべき点がいくつかあります：<br/><ul> <li>Java Webアプリコンテキストを設定する前に、サーブレットエンジン外部アプリケーションを&quot;外部アプリケーション&quot;に設定する必要があります</li>  <li>.jspファイルの&quot;スクリプトハンドラ&quot;も同様に定義する必要があります。</li> <li>Webアプリケーションが.warファイルにパックされている場合は、.warファイルを展開する必要があります。サーバーは圧縮されたアーカイブファイルにアクセスできません。</li><li>同じリソースの場合、LiteSpeed Web Serverを介してアクセスするか、サーブレットエンジンの組み込みHTTPサーバーを介してアクセスするかにかかわらず、同じURLを使用する必要があります。<br> <br> 例えば、<br> Tomcat 4.1は/ opt / tomcatにインストールされます。<br> &quot;examples&quot; Webアプリケーションのファイルは、/opt/tomcat/webapps/examples/にあります。<br> TomcatのビルトインHTTPサーバーを通じて、 &quot;examples&quot; Webアプリケーションは &quot;/ examples / ***&quot;のようなURIでアクセスされます。<br> したがって、対応するJava Webアプリコンテキストを設定する必要があります： <br> URI = /examples/, Location = /opt/tomcat/webapps/examples/.</li> </ul>', '', '', '');

$_tipsdb['javaWebApp_location'] = new DAttrHelp("ロケーション", 'このWebアプリケーションのファイルを含むディレクトリを指定します。 これは &quot;WEB-INF/web.xml&quot;を含むディレクトリです。', '', 'パス', '');

$_tipsdb['jsonReports'] = new DAttrHelp("Output JSON reports", 'Output additional JSON formatted report files, with the .json extension, to the /tmp/lshttpd directory.<br/><br/>Default value: No', ' This is useful for application developers who may want to integrate LiteSpeed status and real-time reports into their applications using standard JSON processing tools built-in to most programming languages.', 'ラジオボックスから選択', 'When set to Yes, .status.json and .rtreport.json, .rtreport.2.json, etc report files will be created in addition to the usual .status and .rtreport, .rtreport.2, etc report files.');

$_tipsdb['keepAliveTimeout'] = new DAttrHelp("キープアライブタイムアウト（秒）", 'キープアライブ接続からの要求間の最大アイドル時間を指定します。 この期間中に新しい要求が受信されない場合、接続は閉じられます。 この設定は、HTTP/1.1接続にのみ適用されます。 HTTP/2接続は、設計によって長いキープアライブタイムアウトを持ち、この設定の影響を受けません。', '[セキュリティ & パフォーマンス]ロードする必要がある単一のページで参照されるアセットが多くある場合、クライアントからの後続のリクエストを待機するのに十分な時間だけこの値を設定することをお勧めします。 キープアライブ接続で次のページが配信されることを期待して、これを長く設定しないでください。 多くのアイドル状態のキープアライブ接続を維持することはサーバーリソースの浪費であり、（D）DoS攻撃によって活用される可能性があります。 2-5秒はほとんどのアプリケーションにとって妥当な範囲です。 LiteSpeedは非キープアライブ環境で非常に効率的です。', '整数', '');

$_tipsdb['keyFile'] = new DAttrHelp("秘密鍵ファイル", 'SSL秘密鍵ファイルのファイル名。キーファイルは暗号化しないでください。', '[セキュリティ]秘密鍵ファイルは、サーバーが実行されるユーザーへの読み取り専用アクセスを可能にするセキュリティ保護されたディレクトリに配置する必要があります。', 'ファイル名への絶対パス又は$SERVER_ROOTからの相対パス', '');

$_tipsdb['lbContext'] = new DAttrHelp("ロードバランサコンテキスト", '他の外部アプリケーションと同様に、ロードバランサワーカーアプリケーションは直接使用できません。 それらは、コンテキストを介してURLにマップされなければなりません。 ロードバランサコンテキストは、ロードバランサワーカーによって負荷分散されるURIを関連付けます。', '', '', '');

$_tipsdb['lbapp'] = new DAttrHelp("ロードバランサー", 'このコンテキストに関連付けるロードバランサの名前を指定します。 このロードバランサはバーチャルアプリケーションであり、サーバーまたはバーチャルホストレベルの&quot;外部アプリケーション&quot;セクションで定義する必要があります', '', '選択', '');

$_tipsdb['listenerBinding'] = new DAttrHelp("バインディング", 'リスナーが割り当てられているlshttpd子プロセスを指定します。 リスナーをプロセスに手動で関連付けることによって、異なるリスナーへのリクエストを処理するために、異なる子プロセスを使用できます。 デフォルトでは、すべての子プロセスにリスナーが割り当てられます。', '', 'チェックボックスから選択', '');

$_tipsdb['listenerIP'] = new DAttrHelp("IPアドレス", 'このリスナーのIPを指定します。 使用可能なすべてのIPアドレスがリストされます。 IPv6アドレスは &quot;[]&quot;で囲まれています。 すべてのIPv4 IPアドレスをリッスンするには、ANYを選択します。 すべてのIPv4とIPv6のIPアドレスをリッスンするには、[ANY]を選択します。 IPv4とIPv6の両方のクライアントにサービスを提供するには、プレーンなIPv4アドレスの代わりに、IPv4でマップされたIPv6アドレスを使用する必要があります。 IPv4でマップされたIPv6アドレスは[:: FFFF：x.x.x.x]と書かれています。', '[セキュリティ]お使いのマシンに異なるサブネットワーク上に複数のIPがある場合、特定のIPを選択して、対応するサブネットワークからのトラフィックのみを許可することができます。', 'ドロップダウンリストから選択', '');

$_tipsdb['listenerModules'] = new DAttrHelp("リスナーモジュール", 'リスナーモジュール設定データは、デフォルトでサーバーモジュール設定から継承されます。 リスナモジュールは、TCP / IPレイヤ4フックに限定されています。', '', '', '');

$_tipsdb['listenerName'] = new DAttrHelp("リスナー名", 'このリスナーの一意の名前。', '', '', '');

$_tipsdb['listenerPort'] = new DAttrHelp("ポート", 'リスナーのTCPポートを指定します。 スーパーユーザー（&quot;root&quot;）のみが1024より小さいポートを使用できます。  ポート80はデフォルトのHTTPポートです。 ポート443はデフォルトのHTTPSポートです。', '', '65535までの整数', '');

$_tipsdb['listenerSecure'] = new DAttrHelp("セキュア", 'Sこれがセキュア（SSL）リスナーかどうかを指定します。 セキュアリスナーの場合は、追加のSSL設定を適切に設定する必要があります。', '', 'ラジオボックスから選択', '');

$_tipsdb['lmap'] = new DAttrHelp("バーチャルホストマッピング", '特定のリスナーからのバーチャルホストへの現在確立されているマッピングを表示します。 バーチャルホスト名は括弧内に表示され、このリスナーに一致するドメイン名が続きます。', 'バーチャルホストが正常にロードされていない場合（バーチャルホストの致命的なエラー）、そのバーチャルホストへのマッピングは表示されません。', '', '');

$_tipsdb['lname'] = new DAttrHelp("名前 - リスナー", 'このリスナーを識別する固有の名前。 これは、リスナーを設定するときに指定した&quot;リスナー名&quot;です。', '', '', '');

$_tipsdb['location'] = new DAttrHelp("ロケーション", 'ファイルシステム内のこのコンテキストの対応する場所を指定します。', '', '$SERVER_ROOT、$VH_ROOT、または$DOC_ROOTに関連する絶対パスまたは絶対パスにすることができます。 $DOC_ROOTはデフォルトの相対パスであり省略することができます。<br/><br/>&quot;URI&quot;が正規表現であれば、一致した部分文字列を使用して &quot;Root&quot;文字列を形成することができます。 一致した部分文字列は、値 &quot;$1&quot; - &quot;$9&quot;で参照できます。 一致した文字列全体を参照するには、 &quot;$0&quot;と &quot;＆&quot;を使用できます。 さらに、クエリ文字列は、 &quot;？&quot; その後にクエリ文字列が続きます。 注意してください。 &quot;＆&quot;はクエリ文字列で &quot;\＆&quot;としてエスケープする必要があります。', '&quot;ロケーション&quot;を/home/john/web_examplesに設定した/examples/のような単純なURIは、リクエスト &quot;/examples/foo/bar.html&quot;をファイル &quot;/home/john/web_examples/foo/bar.html&quot;をマップします。<br/>Apacheのmod_userdirをシミュレートするには、URIをexp：^ /〜（[A-Za-z0-9] +）（。*）に設定し、&quot;ロケーション&quot;を/home/$1/public_html$2に設定します。 これらの設定で、URI /~john/foo/bar.html のリクエストが/home/john/public_html/foo/bar.htmlにマップします。');

$_tipsdb['logUseServer'] = new DAttrHelp("サーバーのログを使用する", '独自のログファイルを作成するのではなく、このバーチャルホストからのログメッセージをサーバーログファイルに入れるかどうかを指定します。', '', 'ラジオボックスから選択', '');

$_tipsdb['log_compressArchive'] = new DAttrHelp("アーカイブを圧縮する", 'ディスク領域を節約するためにローテーションしたログファイルを圧縮するかどうかを指定します。', 'ログファイルは圧縮率が高く、古いログのディスク使用量を減らすために推奨されます。', 'ラジオボックスから選択', '');

$_tipsdb['log_debugLevel'] = new DAttrHelp("デバッグレベル", 'デバッグログのレベルを指定します。 この機能を使用するには、&quot;ログレベル&quot;を DEBUG に設定する必要があります。 &quot;ログレベル&quot;が DEBUG に設定されていても、「デバッグレベル」が NONE に設定されていると、デバッグロギングは無効になります。 &quot;デバッグログを切り替える&quot;は、再起動せずにライブサーバー上のデバッグレベルを制御するために使用できます。.', '[パフォーマンス]重要！ 詳細なデバッグログが必要ない場合は、常にこれを NONE に設定してください。 アクティブデバッグロギングは、サービスのパフォーマンスを著しく低下させ、非常に短時間でディスクスペースを飽和させる可能性があります。 デバッグログには、各要求と応答の詳細情報が含まれています。<br/>ログレベルを DEBUG に設定し、デバッグレベルを NONE に設定することをお勧めします。 これらの設定は、ハードディスクにデバッグログを書き込まないことを意味しますが、&quot;デバッグログを切り替える&quot;アクションを使用してデバッグ出力を制御することができます。 これにより、デバッグログのオン/オフを切り替えることができ、多忙な運用サーバーのデバッグに役立ちます。', '選択', '');

$_tipsdb['log_enableStderrLog'] = new DAttrHelp("stderrログを有効にする", 'サーバーが開始したプロセスからstderr出力を受け取ったときにログに書き込むかどうかを指定します。 有効にすると、stderrメッセージは固定名 &quot;stderr.log&quot;を持つサーバーログと同じディレクトリに記録されます。 無効にすると、すべてのstderr出力は破棄されます。', '設定された外部アプリケーション（PHP、Ruby、Java、Python、Perl）をデバッグする必要がある場合にオンにします。', 'ラジオボックスから選択', '');

$_tipsdb['log_fileName'] = new DAttrHelp("ファイル名", 'ログファイルのパスを指定します。', '[パフォーマンス]ログファイルを別のディスクに配置します。', 'ファイル名への絶対パス又は$SERVER_ROOTからの相対パス', '');

$_tipsdb['log_keepDays'] = new DAttrHelp("Keep Days", 'Specifies how many days the access log file will be kept on disk.  Only rotated log files older than the specified number of days will be deleted. The current  log file will not be touched regardless how many days worth of data it contains.  If you do not want to auto-delete stale and very old log files, set this to 0.', '', '整数', '');

$_tipsdb['log_logLevel'] = new DAttrHelp("ログレベル", 'ログファイルに含めるログのレベルを指定します。 使用可能なレベルは、エラー、警告、通知、情報および DEBUG です。 現在の設定以上のレベルのメッセージのみが記録されます。', '[パフォーマンス] &quot;デバッグレベル&quot;が NONE 以外のレベルに設定されていない限り、 DEBUG ログレベルを使用してもパフォーマンスに影響はありません。 ログレベルを DEBUG に設定し、デバッグレベルを NONE に設定することをお勧めします。 これらの設定は、ハードディスクにデバッグログを書き込まないことを意味しますが、&quot;デバッグログを切り替える&quot;アクションを使用してデバッグ出力を制御することができます。 これにより、デバッグログのオン/オフを切り替えることができ、多忙な運用サーバーのデバッグに役立ちます。', '選択', '');

$_tipsdb['log_rollingSize'] = new DAttrHelp("ローテーションサイズ（バイト）", '現在のログファイルをロールオーバーする必要があるとき、つまりログローテーションを指定します。 ファイルサイズがロールオーバー制限を超えると、アクティブなログファイルは同じディレクトリにlog_name.mm_dd_yyyy（.sequence）という名前に変更され、新しいアクティブなログファイルが作成されます。 回転ログファイルが実際に作成されると、そのサイズはこのサイズ制限より少し大きくなることがあります。 ログのローテーションを無効にするには、 0 に設定します。', 'キロ、メガ、ギガバイトの数字に「K」、「M」、「G」を追加します。', '整数', '');

$_tipsdb['lsapiContext'] = new DAttrHelp("LiteSpeed SAPIコンテキスト", '外部アプリケーションは直接使用することはできません。 スクリプトハンドラとして設定するか、コンテキストを介してURLにマップする必要があります。 LiteSpeed SAPIコンテキストは、URIをLSAPI（LiteSpeed Server Application Programming Interface）アプリケーションに関連付けます。 現在PHP、Ruby、PythonにはLSAPIモジュールがあります。 LiteSpeed Webサーバー用に特別に開発されたLSAPIは、LiteSpeed Webサーバーと通信するための最も効率的な方法です。', '', '', '');

$_tipsdb['lsapiapp'] = new DAttrHelp("LiteSpeed SAPIアプリ", 'このコンテキストに接続するLiteSpeed SAPIアプリケーションの名前を指定します。 このアプリケーションは、サーバーまたはバーチャルホストレベルの&quot;外部アプリケーション&quot;セクションで定義する必要があります。', '', '選択', '');

$_tipsdb['lsrecaptcha'] = new DAttrHelp("reCAPTCHA Protection", 'reCAPTCHA Protection is a service provided as a way to mitigate heavy server load. reCAPTCHA Protection will activate after one of the below situations is hit. Once active, all requests by NON TRUSTED(as configured) clients will be redirected to a reCAPTCHA validation page. After validation, the client will be redirected to their desired page.<br/><br/>The following situations will activate reCAPTCHA Protection:<br/>1. The server or vhost concurrent requests count passes the configured connection limit.<br/>2. Anti-DDoS is enabled and a client is hitting a url in a suspicious manner. The client will redirect to reCAPTCHA first instead of getting denied when triggered.<br/>3. A new rewrite rule environment is provided to activate reCAPTCHA via RewriteRules. &#039;verifycaptcha&#039; can be set to redirect clients to reCAPTCHA. A special value &#039;: deny&#039; can be set to deny the client if it failed too many times. For example, [E=verifycaptcha] will always redirect to reCAPTCHA until verified. [E=verifycaptcha: deny] will redirect to reCAPTCHA until Max Tries is hit, after which the client will be denied.', '', '', '');

$_tipsdb['lstatus'] = new DAttrHelp("ステータス - リスナー", 'このリスナーの現在のステータス。 ステータスはRunningかErrorのいずれかです。', 'リスナーがError状態にある場合は、サーバーログを表示して理由を調べることができます。', '', '');

$_tipsdb['mappedListeners'] = new DAttrHelp("マッピングされたリスナー", 'このテンプレートがマップするすべてのリスナーの名前を指定します。 このテンプレートのメンバーバーチャルホストのリスナー/バーチャルホストマッピングが、このフィールドで指定されたリスナーに追加されます。 このマッピングは、メンババーチャルホストの個々の設定で設定されたドメイン名とエイリアスに基づいて、リスナをバーチャルホストにマッピングします。', '', 'カンマ区切りリスト', '');

$_tipsdb['maxCGIInstances'] = new DAttrHelp("最大CGIインスタンス", 'サーバーが開始できる同時CGIプロセスの最大数を指定します。 CGIスクリプトに対する各要求に対して、サーバーはスタンドアロンCGIプロセスを開始する必要があります。 Unixシステムでは、並行プロセスの数が制限されています。 過度の並行処理は、システム全体のパフォーマンスを低下させ、DoS攻撃を実行する1つの方法です。 LiteSpeedサーバーはCGIスクリプトへの要求をパイプライン処理し、同時のCGIプロセスを制限して最適なパフォーマンスと信頼性を確保します。 上限は2000です。', '[セキュリティ & パフォーマンス]上限が高いと必ずしもパフォーマンスが向上するとは限りません。 ほとんどの場合、下限値を指定するとパフォーマンスとセキュリティが向上します。 上限は、CGI処理中にI / O待ち時間が過大になる場合にのみ役立ちます。', '整数', '');

$_tipsdb['maxCachedFileSize'] = new DAttrHelp("最大キャッシュサイズの小さいファイルサイズ（バイト）", '事前に割り当てられたメモリバッファにキャッシュされる最大の静的ファイルを指定します。 静的ファイルは、メモリバッファキャッシュ、メモリマップキャッシュ、プレーンリード/ライト、およびsendfile（）の4つの方法で提供できます。 サイズがこの設定より小さいファイルはメモリバッファキャッシュから提供されます。 サイズがこの設定より大きく、&quot;最大MMAPファイルサイズ（バイト）&quot;より小さいファイルは、メモリマップドキャッシュから処理されます。 &quot;最大MMAPファイルサイズ（バイト）&quot;より大きいサイズのファイルは、プレーン・リード/ライトまたはsendfile（）を介して処理されます。 メモリバッファキャッシュから4Kより小さい静的ファイルを提供することが最適です。', '', '整数', '');

$_tipsdb['maxConnections'] = new DAttrHelp("最大接続数", 'サーバーが受け入れることができる同時接続の最大数を指定します。 これには、プレーンTCP接続とSSL接続の両方が含まれます。 最大同時接続制限に達すると、サーバーはアクティブな要求が完了するとキープアライブ接続を閉じます。', 'サーバーが &quot;root&quot;ユーザーによって起動されると、サーバーはプロセスごとのファイル記述子の制限を自動的に調整しようとしますが、失敗した場合は手動でこの制限を増やす必要があります。', '整数', '');

$_tipsdb['maxConns'] = new DAttrHelp("最大接続数", 'サーバーと外部アプリケーションの間で確立できる同時接続の最大数を指定します。 この設定は、外部アプリケーションによって同時に処理できる要求の数を制御しますが、実際の制限は外部アプリケーション自体によっても異なります。 この値を高く設定すると、外部アプリケーションの速度が不十分であるか、多数の同時要求に対応できない場合に役立ちません。', '[パフォーマンス]高い値を設定しても、高いパフォーマンスに直接変換されるわけではありません。 制限を外部アプリケーションに負荷をかけない値に設定すると、最高のパフォーマンス/スループットが得られます。', '整数', '');

$_tipsdb['maxDynRespHeaderSize'] = new DAttrHelp("最大動的応答ヘッダーサイズ（バイト）", '動的に生成される応答の最大ヘッダーサイズを指定します。 ハードリミットは8KBです。', '[信頼性 & パフォーマンス]適度に低く設定すると、外部アプリケーションによって動的に生成された不正な応答を認識するのに役立ちます。', '整数', '');

$_tipsdb['maxDynRespSize'] = new DAttrHelp("最大動的応答ボディサイズ（バイト）", '動的に生成される応答の最大ボディサイズを指定します。 ハードリミットは2047MBです。', '[信頼性 & パフォーマンス]不適切なレスポンスを識別するのに役立ちます。 不正なスクリプトに無限ループが含まれて無限大の応答が生じることは珍しいことではありません。', '整数', '');

$_tipsdb['maxKeepAliveReq'] = new DAttrHelp("最大キープアライブ要求", 'キープアライブ（永続的）セッションを介して処理できる要求の最大数を指定します。 この制限に達すると接続は終了します。 バーチャルホストごとにこの制限を設定することもできます。', '[パフォーマンス]適度に高い値に設定します。 &quot;1&quot;または &quot;0&quot;の値はキープアライブを無効にします。', '整数', '');

$_tipsdb['maxMMapFileSize'] = new DAttrHelp("最大MMAPファイルサイズ（バイト）", 'メモリマップされる最大の静的ファイル（MMAP）を指定します。   静的ファイルは、メモリバッファキャッシュ、メモリマップキャッシュ、プレーンリード/ライト、およびsendfile（）の4つの方法で提供できます。 サイズが&quot;最大キャッシュサイズの小さいファイルサイズ（バイト）&quot;より小さいファイルはメモリバッファキャッシュから提供されます。 サイズが&quot;最大キャッシュサイズの小さいファイルサイズ（バイト）&quot;よりも大きいが最大MAPファイルサイズより小さいファイルは、メモリマップドキャッシュから提供されます。 最大MMAPファイルサイズよりも大きいファイルは、プレーンな読み取り/書き込みまたはsendfile（）を介して提供されます。 サーバは32ビットのアドレス空間（2GB）を持っているので、非常に大きなファイルをメモリに格納することは推奨されません。', '', '整数', '');

$_tipsdb['maxMindDBEnv'] = new DAttrHelp("Environment Variables", 'Assign the results of database lookups to environment variables.', '', 'Variable_Name mapped_DB_data<br/><br/>One entry per line. Path to data can use map keys or 0-based array indexes, both being separated by /.', 'COUNTRY_CODE COUNTRY_DB/country/iso_code<br/>REGION_CODE  CITY_DB/subdivisions/0/iso_code');

$_tipsdb['maxReqBodySize'] = new DAttrHelp("最大リクエストボディサイズ（バイト）", 'HTTPリクエスト本文の最大サイズを指定します。 32ビットOSの場合、2GBはハード制限です。 64ビットOSの場合、実質的に無制限です。', '[セキュリティ] DoS攻撃を防ぐには、この制限を実際に必要なものだけに制限してください。 スワッピング空間には、この制限に対応するための十分な空き領域が必要です。', '整数', '');

$_tipsdb['maxReqHeaderSize'] = new DAttrHelp("最大要求ヘッダーサイズ（バイト）", '要求URLを含むHTTP要求ヘッダーの最大サイズを指定します。 ハード制限は16380バイトです。', '[セキュリティとパフォーマンス]メモリ使用量を減らし、偽のリクエストとDoS攻撃を特定するのに役立つよう、適度に低く設定します。<br/>4-8Kは、ほとんどのWebサイトで十分です。', '整数', '');

$_tipsdb['maxReqURLLen'] = new DAttrHelp("最大リクエストURLの長さ（バイト）", 'リクエストURLの最大サイズを指定します。 URLは、クエリ文字列を含むサーバーリソースへのアクセスに使用されるフルテキストアドレスです。 8192バイトがハードリミットです。', '[セキュリティとパフォーマンス]メモリ使用量を減らし、偽のリクエストとDoS攻撃を特定するのに役立つよう、適度に低く設定します。<br/>HTTP GETメソッドがPOSTの代わりに大きなクエリ文字列とともに使用されていない限り、2-3KはほとんどのWebサイトにとって十分です。', '整数', '');

$_tipsdb['maxSSLConnections'] = new DAttrHelp("最大SSL接続数", 'サーバーが受け入れる同時SSL接続の最大数を指定します。 同時SSL接続と非SSL接続の合計が&quot;最大接続数&quot;で指定された制限を超えることはできないため、許可される同時SSL接続の実際の数はこの制限より小さくなければなりません。', '', '整数', '');

$_tipsdb['memHardLimit'] = new DAttrHelp("メモリハードリミット", 'ソフトリミットをユーザープロセス内のハードリミットまで上げることができることを除けば、&quot;メモリソフトリミット（バイト）&quot;と同じくらい同じです。 ハード・リミットは、サーバー・レベルまたは個々の外部アプリケーション・レベルで設定できます。 サーバーレベルの制限は、個々のアプリケーションレベルで設定されていない場合に使用されます。 <br/><br/>値が両方のレベルにないか、0に設定されている場合、オペレーティングシステムのデフォルトが使用されます。', ' Do not over adjust this limit. This may result in 503 errors if your application need more memory.', '整数', '');

$_tipsdb['memSoftLimit'] = new DAttrHelp("メモリソフトリミット（バイト）", '外部アプリケーション・プロセスまたはサーバーによって開始された外部アプリケーションのメモリー消費制限をバイト単位で指定します。<br/><br/>この制限の主な目的は、ソフトウェアのバグや意図的な攻撃のために過度のメモリ使用を防止し、通常の使用に制限を設けないことです。 十分なヘッドスペースを確保してください。そうしないと、アプリケーションが失敗し、503エラーが返される可能性があります。 サーバーレベルまたは個々の外部アプリケーションレベルで設定できます。 サーバーレベルの制限は、個々のアプリケーションレベルで設定されていない場合に使用されます。<br/><br/>オペレーティングシステムのデフォルト設定は、値が両方のレベルにないか、0に設定されている場合に使用されます。', '[注意]この制限を過度に調整しないでください。 アプリケーションでより多くのメモリが必要な場合は、503のエラーが発生する可能性があります。', '整数', '');

$_tipsdb['memberVHRoot'] = new DAttrHelp("メンバーバーチャルホストルート", 'このバーチャルホストのルートディレクトリを指定します。 ブランクのままにすると、このテンプレートのデフォルトのバーチャルホストルートが使用されます。<br/><br/>Note: これはドキュメントルートでは<b>ありません</b>。 バーチャルホストに関連するすべてのファイル（バーチャルホスト設定、ログファイル、htmlファイル、CGIスクリプトなど）をこのディレクトリの下に配置することをお勧めします。 バーチャルホストのルートは$VH_ROOTと呼ばれます。', '', 'パス', '');

$_tipsdb['mime'] = new DAttrHelp("MIME設定", 'このサーバーのMIME設定を含むファイルを指定します。 chrootモードで絶対パスが指定されている場合、実際のルートと常に相対的です。 詳細なMIMEエントリを表示/編集するには、ファイル名をクリックします。', 'ファイル名をクリックしてMIME設定を編集します。', 'ファイル名への絶対パス又は$SERVER_ROOTからの相対パス', '');

$_tipsdb['mimesuffix'] = new DAttrHelp("サフィックス", '同じMIMEタイプの複数のサフィックスをカンマで区切って指定することができます。', '', '', '');

$_tipsdb['mimetype'] = new DAttrHelp("MIMEタイプ", 'MIMEタイプは、タイプとサブタイプの形式で &quot;タイプ/サブタイプ&quot;で構成されます。', '', '', '');

$_tipsdb['minGID'] = new DAttrHelp("最小GID", '外部アプリケーションの最小グループIDを指定します。 ここで指定した値よりも小さいグループIDを持つ外部の実行は拒否されます。 LiteSpeed Webサーバーが &quot;root&quot;ユーザーによって起動された場合、Apacheで見つかった &quot;suEXEC&quot;モードで外部アプリケーションを実行できます（Webサーバー以外のユーザー/グループIDに変更する）。', '[セキュリティ]システムユーザーが使用するすべてのグループを除外するのに十分な高さに設定します。', '整数', '');

$_tipsdb['minUID'] = new DAttrHelp("最小UID", '外部アプリケーションの最小ユーザーIDを指定します。 ここで指定した値よりも小さいユーザーIDを持つ外部スクリプトの実行は拒否されます。 LiteSpeed Webサーバーが「root」ユーザーによって起動された場合、Apacheなどの「suEXEC」モードで外部アプリケーションを実行できます（Webサーバー以外のユーザー/グループIDに変更する）。', '[セキュリティ]すべてのシステム/特権ユーザーを除外するのに十分な高さに設定します。', '整数', '');

$_tipsdb['modParams'] = new DAttrHelp("モジュールのパラメータ", 'モジュールのパラメータを設定します。 モジュールパラメータは、モジュール開発者によって定義されます。<br/><br/>デフォルト値をグローバルに割り当てるようにサーバー構成内の値を設定します。 ユーザーは、この設定をリスナー、バーチャルホストまたはコンテキスト・レベルでオーバーライドできます。 「未設定」ラジオボタンが選択されている場合、それは上位レベルから継承されます。', '', 'モジュールインタフェースで指定されます。', '');

$_tipsdb['moduleContext'] = new DAttrHelp("モジュールハンドラコンテキスト", 'モジュールハンドラコンテキストは、登録されたモジュールにURIを関連付けます。 モジュールは[サーバーモジュールの構成]タブに登録する必要があります。', '', '', '');

$_tipsdb['moduleEnabled'] = new DAttrHelp("フックを有効にする", 'モジュールフックをグローバルに有効または無効にします。 <br/>「未設定」ラジオボタンが選択され、モジュールにフック機能が含まれている場合、デフォルトが有効になります。 ユーザーは、各レベルでこのグローバル設定を上書きできます。', '', 'ラジオボックスから選択', '');

$_tipsdb['moduleEnabled_lst'] = new DAttrHelp("フックを有効にする", 'Listenerレベルでモジュールフックを有効または無効にします。 モジュールにTCP/IPレベルのフック（L4_BEGSESSION、L4_ENDSESSION、L4_RECVING、L4_SENDING）がある場合のみ、この設定が有効になります。<br/><br/>「未設定」ラジオボタンが選択されている場合、デフォルトはServer設定から継承されます。 ユーザーはデフォルト設定を上書きするためにここで設定するだけです。', '', 'ラジオボックスから選択', '');

$_tipsdb['moduleEnabled_vh'] = new DAttrHelp("フックを有効にする", 'バーチャルホストまたはコンテキスト・レベルでモジュール・フックを使用可能または使用不可にします。 モジュールにHTTPレベルのフックがある場合のみ、この設定が有効になります。<br/><br/>「未設定」ラジオボタンを選択すると、バーチャルホストレベルのデフォルト設定がサーバー設定から継承されます。 コンテキストレベルの設定は、バーチャルホストレベルから継承されます。 ユーザーはデフォルト設定を上書きするためにここで設定するだけです。', '', 'ラジオボックスから選択', '');

$_tipsdb['moduleNameSel'] = new DAttrHelp("Module", 'モジュールの名前。 モジュールはサーバーモジュールの設定タブに登録する必要があります。 登録されると、モジュール名がリスナーおよび仮想ホスト構成のドロップダウンボックスで使用可能になります。', '', 'ドロップダウンリストから選択', '');

$_tipsdb['modulename'] = new DAttrHelp("モジュール", 'モジュールの名前。 モジュール名はモジュールファイル名と同じになります。 モジュール・ファイルは、サーバー・アプリケーションによってロードされるために$SERVER_ROOT/modules/modulename.soの下になければなりません。 サーバーは起動時に登録されたモジュールをロードします。 このためには、新しいモジュールが登録された後でサーバーを再起動する必要があります。', '', '.soのライブラリ名。', '');

$_tipsdb['namespace'] = new DAttrHelp("Namespace Container", 'Set to Enabled if you wish to start CGI processes (including PHP programs) in a namespace container sandbox. Only used when &quot;Bubblewrap Container&quot; is set to Disabled.<br/><br/>When not Disabled at the Server level, this settings value can be overridden at the Virtual Host level.<br/><br/>Default values:<br/><b>Server level:</b> Disabled<br/><b>Virtual Host Level:</b> Inherit Server level setting', '', 'ドロップダウンリストから選択', '');

$_tipsdb['namespaceConf'] = new DAttrHelp("Namespace Template File", 'Path to an existing configuration file containing a list of directories to be mounted along with the methods used to mount them. When &quot;Namespace Container&quot; is set to Enabled and this value is not set, the following secure default configuration settings will be used:<br/><br/> $HOMEDIR/.lsns/tmp /tmp,tmp<br/>/usr,ro-bind<br/>/lib,ro-bind<br/>/lib64,ro-bind-try<br/>/bin,ro-bind<br/>/sbin,ro-bind<br/>/var,dir<br/>/var/www,ro-bind-try<br/>/proc,proc<br/>../tmp var/tmp,symlink<br/>/dev,dev<br/>/etc/localtime,ro-bind-try<br/>/etc/ld.so.cache,ro-bind-try<br/>/etc/resolv.conf,ro-bind-try<br/>/etc/ssl,ro-bind-try<br/>/etc/pki,ro-bind-try<br/>/etc/man_db.conf,ro-bind-try<br/>/usr/local/bin/msmtp /etc/alternatives/mta,ro-bind-try<br/>/usr/local/bin/msmtp /usr/sbin/exim,ro-bind-try<br/>$HOMEDIR,bind-try<br/>/var/lib/mysql/mysql.sock,bind-try<br/>/home/mysql/mysql.sock,bind-try<br/>/tmp/mysql.sock,bind-try<br/>/run/mysqld/mysqld.sock,bind-try<br/>/var/run/mysqld.sock,bind-try<br/>/run/user/$UID,bind-try<br/>$PASSWD<br/>$GROUP<br/>/etc/exim.jail/$USER.conf $HOMEDIR/.msmtprc,copy-try<br/>/etc/php.ini,ro-bind-try<br/>/etc/php-fpm.conf,ro-bind-try<br/>/etc/php-fpm.d,ro-bind-try<br/>/var/run,ro-bind-try<br/>/var/lib,ro-bind-try<br/>/etc/imunify360/user_config/,ro-bind-try<br/>/etc/sysconfig/imunify360,ro-bind-try<br/>/opt/plesk/php,ro-bind-try<br/>/opt/alt,bind-try<br/>/opt/cpanel,bind-try<br/>/opt/psa,bind-try<br/>/var/lib/php/sessions,bind-try ', '', '絶対パス又は$SERVER_ROOTからの相対パス。', '');

$_tipsdb['namespaceConfVhAdd'] = new DAttrHelp("Additional Namespace Template File", 'Path to an existing configuration file containing a list of directories to be mounted along with the methods used to mount them. If &quot;Namespace Template File&quot; is also set at the Server level, both files will be used.', '', '絶対パスか$SERVER_ROOTからの相対パス又は$VH_ROOTからの相対パス。', '');

$_tipsdb['nodeBin'] = new DAttrHelp("Node Path", 'Path to Node.js executable.', '', '絶対パス', '');

$_tipsdb['nodeDefaults'] = new DAttrHelp("Node.js App Default Settings", 'Default configurations for Node.js applications. These settings can be overriden at the context level.', '', '', '');

$_tipsdb['note'] = new DAttrHelp("ノート", 'あなた自身のためにメモを追加してください。', '', '', '');

$_tipsdb['ocspCACerts'] = new DAttrHelp("OCSP CA証明書", 'OCSP認証局（CA）証明書が格納されるファイルの場所を指定します。 これらの証明書は、OCSPレスポンダからのレスポンスを確認するために使用されます（また、そのレスポンスが偽装されていないか、または妥協されていないことを確認してください）。 このファイルには、証明書チェーン全体が含まれている必要があります。 このファイルにルート証明書が含まれていない場合、LSWSはファイルに追加することなくシステムディレクトリのルート証明書を見つけることができますが、この検証に失敗した場合はルート証明書をこのファイルに追加してください。<br/><br/>この設定はオプションです。 この設定が設定されていない場合、サーバーは自動的に&quot;CA証明書ファイル&quot;をチェックします。', '', 'ファイル名への絶対パス又は$SERVER_ROOTからの相対パス', '');

$_tipsdb['ocspRespMaxAge'] = new DAttrHelp("OCSPの応答最大年齢（秒）", 'このオプションは、OCSP応答の許容可能な最大経過時間を設定します。 OCSP応答がこの最大年齢より古い場合、サーバーはOCSP応答者に新しい応答を要求します。 デフォルト値は86400です。 この値を-1に設定すると、最大年齢を無効にすることができます。', '', '秒数', '');

$_tipsdb['ocspResponder'] = new DAttrHelp("OCSPレスポンダ", '使用するOCSPレスポンダのURLを指定します。 設定されていない場合、サーバーは認証局の発行者証明書に記載されているOCSPレスポンダに接続を試みます。 一部の発行者証明書には、OCSPレスポンダURLが指定されていない場合があります。', '', 'http：//で始まるURL', 'http://rapidssl-ocsp.geotrust.com ');

$_tipsdb['outBandwidth'] = new DAttrHelp("送信帯域幅（バイト/秒）", '確立された接続の数に関係なく、単一のIPアドレスへの最大の送信スループット。 実際の帯域幅は効率上の理由からこの設定よりわずかに高くなることがあります。 帯域幅は4KB単位で割り当てられます。 スロットルを無効にするには、0に設定します。 クライアント単位の帯域幅制限（バイト/秒）は、バーチャルホストレベルの設定がサーバーレベルの設定を上回るサーバーまたはバーチャルホストレベルで設定できます。', '[パフォーマンス]パフォーマンスを向上させるため、帯域幅を8KB単位で設定します。.<br/><br/>[セキュリティ]信頼できるIPまたはサブネットワークは影響を受けません。', '整数', '');

$_tipsdb['pcKeepAliveTimeout'] = new DAttrHelp("キープアライブタイムアウト（秒）", 'アイドル状態の永続的な接続を開いたままにする最大時間を指定します。 &quot;-1&quot;に設定すると、接続はタイムアウトしません。 0以上に設定すると、この時間が経過した後に接続が閉じられます。', '', 'int', '');

$_tipsdb['perClientConnLimit'] = new DAttrHelp("クライアント単位のスロットル", 'これらは、クライアントIPに基づいた接続制御設定です。 これらの設定は、DoS（サービス拒否）攻撃とDDoS（分散サービス拒否）攻撃を緩和するのに役立ちます。', '', '', '');

$_tipsdb['persistConn'] = new DAttrHelp("永続的な接続", '要求後に接続を開いたままにするかどうかを指定します。 処理されました。 永続的接続はパフォーマンスを向上させる可能性がありますが、一部のFastCGI外部アプリケーションは永続的接続を完全にサポートしません。 デフォルトは &quot;オン&quot;です。', '', 'ラジオボックスから選択', '');

$_tipsdb['phpIniOverride'] = new DAttrHelp("php.ini Override", 'Used to overwrite php.ini settings in the current context (Virtual Host level or Context level).<br/><br/>Supported directives are:<br/>php_value<br/>php_flag<br/>php_admin_value<br/>php_admin_flag<br/><br/>All other lines/directives will be ignored.', '', 'Override syntax is similar to Apache, a newline separated list of directives and their values with each directive being prepended by php_value, php_flag, php_admin_value, or php_admin_flag appropriately.', 'php_value include_path &quot;.:/usr/local/lib/php&quot;<br/>php_admin_flag engine on<br/>php_admin_value open_basedir &quot;/home&quot;');

$_tipsdb['pid'] = new DAttrHelp("PID", '現在のサーバープロセスのPID（プロセスID）。', 'PIDは、サーバーが再起動されるたびに変更されます。', '', '');

$_tipsdb['procHardLimit'] = new DAttrHelp("プロセスハードリミット", 'ソフトリミットをユーザープロセス内のハードリミットまで上げることができることを除けば、&quot;プロセスソフトリミット&quot;とほとんど同じです。 ハードリミットは、サーバー・レベルまたは個々の外部アプリケーションレベルで設定できます。 サーバーレベルの制限は、個々のアプリケーションレベルで設定されていない場合に使用されます。 オペレーティングシステムのデフォルト値は、値が両方のレベルにないか、0に設定されている場合に使用されます。', '', '整数', '');

$_tipsdb['procSoftLimit'] = new DAttrHelp("プロセスソフトリミット", 'ユーザーに代わって作成できるプロセスの総数を制限します。 既存のすべてのプロセスは、開始される新しいプロセスだけでなく、この限度に対してカウントされます。 制限は、サーバーレベルまたは個々の外部アプリケーションレベルで設定できます。<br/>サーバーレベルの制限は、個々のアプリケーションレベルで設定されていない場合に使用されます。 この値が0または両方のレベルにない場合、オペレーティングシステムのデフォルト設定が使用されます。', 'PHPスクリプトはプロセスをフォークするために呼び出すことができます。 この制限の主な目的は、フォーク爆弾や他のプロセスを作成するPHPプロセスによって引き起こされる他の攻撃を防ぐための最終防衛線です。<br/>この設定を低すぎると、機能が著しく損なわれる可能性があります。 この設定は特定のレベル以下では無視されます。<br/>suEXECデーモンモードを使用する場合、親プロセスが制限されないように、実際のプロセス制限はこの設定よりも高くなります。', '整数', '');

$_tipsdb['proxyContext'] = new DAttrHelp("プロキシコンテキスト", 'プロキシコンテキストは、このバーチャルホストを透過的なリバースプロキシサーバとして有効にします。 このプロキシサーバーは、HTTPプロトコルをサポートするWebサーバーまたはアプリケーションサーバーの前で実行できます。 このバーチャルホストがプロキシする外部Webサーバーは、プロキシコンテキストを設定する前に&quot;外部アプリケーション&quot;で定義されている必要があります。', '', '', '');

$_tipsdb['proxyProtocol'] = new DAttrHelp("PROXY protocol", 'List of IPs/subnets for front-end proxies that communicate with this server using PROXY protocol. Once set, the server will use PROXY protocol for incoming connections from listed IPs/subnets or fall back to a regular connection if PROXY protocol is unavailable.<br/><br/>Applies to HTTP, HTTPS, HTTP2, and websocket connections.', '', 'Comma delimited list of IP addresses or sub-networks.', '');

$_tipsdb['proxyWebServer'] = new DAttrHelp("Webサーバー", '外部Webサーバーの名前を指定します。 この外部Webサーバーは、サーバーまたはバーチャルホストレベルの&quot;外部アプリケーション&quot;セクションで定義する必要があります。', '', '選択', '');

$_tipsdb['quicBasePLPMTU'] = new DAttrHelp("PLPMTU Base Value", 'The maximum value of PLPMTU (maximum packet size without headers) in bytes that QUIC will use by default. Setting this to 0 will allow QUIC to pick the size.<br/><br/>This setting should be set lower than &quot;PLPMTU Max Value&quot;.<br/><br/>Default value: 0', '', '0 or integer number between 1200 and 65527', '');

$_tipsdb['quicCfcw'] = new DAttrHelp("Connection Flow Control Window", 'The initial size of the buffer allocated for a QUIC connection. Default value is 1.5M.', 'A larger window size will use more memory.', 'Number between 64K and 512M', '');

$_tipsdb['quicCongestionCtrl'] = new DAttrHelp("Congestion Control", 'The congestion control algorithm used. This can be set manually or left up to the QUIC library in use by selecting the &quot;Default&quot; option.<br/><br/>Default value: Default', '', 'ドロップダウンリストから選択', '');

$_tipsdb['quicEnable'] = new DAttrHelp("Enable HTTP3/QUIC", 'Enables the HTTP3/QUIC network protocol server wide. Default value is Yes.', 'When this setting is set to Yes, HTTP3/QUIC can still be disabled at the listener level through the &quot;Open HTTP3/QUIC (UDP) port&quot; setting, or at the virtual host level through the &quot;Enable HTTP3/QUIC&quot; setting.', 'ラジオボックスから選択', '');

$_tipsdb['quicEnableDPLPMTUD'] = new DAttrHelp("Enable DPLPMTUD", 'Enable Datagram Packetization Layer Path Maximum Transmission Unit Discovery (DPLPMTUD).<br/><br/><b>   <a href="     https://tools.ietf.org/html/rfc8899   " target="_blank" rel="noopener noreferrer">     Background on DPLPMTUD (RFC 8899)   </a> </b><br/><br/>Default value: Yes', '', 'ラジオボックスから選択', '');

$_tipsdb['quicHandshakeTimeout'] = new DAttrHelp("Handshake Timeout", 'The time in seconds a new QUIC connection is given to complete its handshake, after which the connection is aborted. Default value is 10.', '', 'Integer number between 1 and 15', '');

$_tipsdb['quicIdleTimeout'] = new DAttrHelp("Idle Timeout", 'The time in seconds after which an idle QUIC connection will be closed. Default value is 30.', '', 'Integer number between 10 and 30', '');

$_tipsdb['quicMaxCfcw'] = new DAttrHelp("Max Connection Flow Control Window", 'Specifies the maximum size that a connection flow control window buffer is allowed to reach due to window auto-tuning.<br/><br/>Default value is 0, which means that the value of &quot;Connection Flow Control Window&quot; is used and no auto-tuning is performed.', 'A larger window size will use more memory.', '0 or a number between 64K and 512M', '');

$_tipsdb['quicMaxPLPMTU'] = new DAttrHelp("PLPMTU Max Value", 'The PLPMTU (maximum packet size without headers) probe upper limit in bytes. This setting is used to limit the &quot;maximum packet size&quot; in the DPLPMTUD search space.  Setting this to 0 will allow QUIC to pick the size (By default LSQUIC assumes that MTU is 1,500 bytes (Ethernet)).<br/><br/>This setting should be set higher than &quot;PLPMTU Base Value&quot;.<br/>Default value: 0', '', '0 or integer number between 1200 and 65527', '');

$_tipsdb['quicMaxSfcw'] = new DAttrHelp("Max Stream Flow Control Window", 'Specifies the maximum size that a stream flow control window is allowed to reach due to window auto-tuning.<br/><br/>Default value is 0, which means that the value of &quot;Stream Flow Control Window&quot; is used and no auto-tuning is performed.', 'A larger window size will use more memory.', '0 or a number between 64K and 128M', '');

$_tipsdb['quicMaxStreams'] = new DAttrHelp("Max Concurrent Streams Per Connection", 'The maximum number of concurrent streams allowed per QUIC connection. Default value is 100.', '', 'Integer number between 10 and 1000', '');

$_tipsdb['quicSfcw'] = new DAttrHelp("Stream Flow Control Window", 'The initial amount of data a QUIC connection is willing to receive per stream. Default value is 1M.', 'A larger window size will use more memory.', 'Number between 64K and 128M', '');

$_tipsdb['quicShmDir'] = new DAttrHelp("QUIC SHM Directory", 'Specifies the directory used to save QUIC data to shared memory.<br/><br/>By default, the server&#039;s default SHM directory, /dev/shm, will be used.', 'A RAM based partition, such as /dev/shm, is recommended.', 'Path', '');

$_tipsdb['quicVersions'] = new DAttrHelp("HTTP3/QUIC Versions", 'A list of enabled HTTP3/QUIC versions. This setting should only be used to limit HTTP3/QUIC support to the versions listed and is best left blank.', 'It is recommended to leave this setting blank to have the the best configuration applied automatically.', 'Comma-separated list', 'h3-29, h3-Q050');

$_tipsdb['railsDefaults'] = new DAttrHelp("Rack/Rails Default Settings", 'Default configurations for Rack/Rails applications. These settings can be overriden at the context level.', '', '', '');

$_tipsdb['rcvBufSize'] = new DAttrHelp("受信バッファサイズ（バイト）", '各TCPソケットの受信バッファーサイズ。 512Kは許容されるバッファの最大サイズです。', '[パフォーマンス]オペレーティングシステムのデフォルトのバッファサイズを使用するには、この値を &quot;未設定&quot;のままにするか、0に設定することをお勧めします。<br/>[パフォーマンス]大きい受信バッファは、大きなペイロード、すなわちファイルアップロードで着信要求を処理するときのパフォーマンスを向上させます。<br/>[パフォーマンス]これを低い値に設定すると、ソケットあたりのスループットとメモリ使用量が減少し、メモリがボトルネックになった場合にサーバーがより多くの同時ソケットを持つことが可能になります。', '整数', '');

$_tipsdb['realm'] = new DAttrHelp("レルム", 'このコンテキストの認可レルムを指定します。 このコンテキストにアクセスするには、有効なユーザー名とパスワードを指定する必要があります。 &quot;認可レルム&quot;は&quot;バーチャルホストのセキュリティ&quot;セクションに設定されています。 この設定では、各レルムの&quot;レルム名&quot;が使用されます。', '', '選択', '');

$_tipsdb['realmName'] = new DAttrHelp("レルム名", '認可レルムの一意の名前を指定します。', '', '', '');

$_tipsdb['realms'] = new DAttrHelp("認可レルム", 'このバーチャルホストのすべての許可レルムをリストします。 認可レルムは、権限のないユーザーが保護されたWebページにアクセスするのをブロックするために使用されます。 レルムは、オプションのグループ分類を持つユーザー名とパスワードを含むユーザーディレクトリです。 認可は、コンテキスト・レベルで実行されます。 異なるコンテキストは同じレルム（ユーザデータベース）を共有できるため、レルムはそれらを使用するコンテキストとは別に定義されます。 コンテキスト設定では、これらの名前でレルムを参照できます。', '', '', '');

$_tipsdb['realtimerpt'] = new DAttrHelp("リアルタイム統計", 'リアルタイム統計のリンクは、リアルタイムのサーバステータスレポートを含むページにつながります。 これは、システムを監視するのに便利なツールです。 <br/><br/>このレポートには、サーバー統計のスナップショットが表示されます。 このスナップショットのリフレッシュレートは、右上隅のリフレッシュインターバルドロップダウンリストによって制御されます。<br/><br/>このレポートには、次のセクションが含まれています： <ul><li>サーバーの正常性は、基本的なサーバーの統計情報、稼働時間、負荷、および阻止されたDDoS阻止IPを示します。</li>   <li>現在のトラフィックのスループット、接続、およびリクエストの統計情報を表示します。</li>  <li>バーチャルホストは、各バーチャルホストの要求処理状況と外部アプリケーションの状態を表示します</li>  <li>外部アプリケーションは、現在実行中の外部アプリケーションとその使用状況の統計情報を表示します。   CGIデーモンプロセスlscgidは、常に外部アプリケーションとして実行されます。</li> </ul><br/><br/>リアルタイム統計の行の多くにグラフアイコンがあります。 このアイコンをクリックすると、その行の統計がリアルタイムで更新されたグラフが開きます。<br/><br/>「サーバー」セクションの「要求」の横に、「詳細」というラベルの付いたリンクがあります。 このリンクをクリックすると、Requests Snapshotが表示されます。ここでは、どのクライアントが特定の種類のリクエストを行っているのか、サイトのどの部分がボトルネックになっているのかを詳しく見ることができます。 青色の領域のフィールドを使用すると、スナップショットをフィルタリングしてサーバーの特定の部分を分離したり、特定の処理を実行しているクライアントを探すことができます。', '', '', '');

$_tipsdb['recaptchaAllowedRobotHits'] = new DAttrHelp("Allowed Robot Hits", 'Number of hits per 10 seconds to allow ‘good bots’ to pass. Bots will still be throttled when the server is under load.<br/><br/>Default value is 3.', '', '整数', '');

$_tipsdb['recaptchaBotWhiteList'] = new DAttrHelp("Bot White List", 'List of custom user agents to allow access. Will be subject to the ‘good bots’ limitations, including allowedRobotHits.', '', 'List of user agents, one per line. Regex is supported.', '');

$_tipsdb['recaptchaMaxTries'] = new DAttrHelp("Max Tries", 'Max Tries specifies the maximum number of reCAPTCHA attempts permitted before denying the visitor.<br/><br/>Default value is 3.', '', '整数', '');

$_tipsdb['recaptchaRegConnLimit'] = new DAttrHelp("Connection Limit", 'The number of concurrent connections (SSL & non-SSL) needed to activate reCAPTCHA. reCAPTCHA will be used until concurrent connections drop below this number.<br/><br/>Default value is 15000.', '', '整数', '');

$_tipsdb['recaptchaSecretKey'] = new DAttrHelp("Secret Key", 'The secret key is the private key provided by Google via its reCAPTCHA service. A default Secret Key will be used if not set.', '', '', '');

$_tipsdb['recaptchaSiteKey'] = new DAttrHelp("Site Key", 'The site key is the public key provided by Google via its reCAPTCHA service. A default Site Key will be used if not set.', '', '', '');

$_tipsdb['recaptchaSslConnLimit'] = new DAttrHelp("SSL Connection Limit", 'The number of concurrent SSL connections needed to activate reCAPTCHA. reCAPTCHA will be used until concurrent connections drop below this number.<br/><br/>Default value is 10000.', '', '整数', '');

$_tipsdb['recaptchaType'] = new DAttrHelp("reCAPTCHA Type", 'Specify the reCAPTCHA type to use with the key pairs.<br/>If a key pair has not been provided and this setting is set to Not Set, a default key pair of type Invisible will be used.<br/><br/>Checkbox will display a checkbox reCAPTCHA for the visitor to validate.<br/><br/>Invisible will attempt to validate the reCAPTCHA automatically and if successful, will redirect to the desired page.<br/><br/>hCaptcha can be used to support reCAPTCHA provider <a href="https://www.hcaptcha.com" target="_blank" rel="noopener noreferrer">hCaptcha</a>.<br/><br/>Default value is Invisible.', '', 'ドロップダウンリストから選択', '');

$_tipsdb['recaptchaVhReqLimit'] = new DAttrHelp("Concurrent Request Limit", 'The number of concurrent requests needed to activate reCAPTCHA. reCAPTCHA will be used until concurrent requests drop below this number.<br/><br/>Default value is 15000.', '', '整数', '');

$_tipsdb['redirectContext'] = new DAttrHelp("リダイレクトコンテキスト", 'リダイレクトコンテキストは、1つのURIまたはURIのグループを別の場所に転送するために使用できます。 宛先URIは、同じWebサイト（内部リダイレクト）または別のWebサイトを指す絶対URI（外部リダイレクト）のいずれかにすることができます。', '', '', '');

$_tipsdb['renegProtection'] = new DAttrHelp("SSL再交渉保護", 'SSL再交渉保護を有効にするかどうかを指定します。 SSLハンドシェイクベースの攻撃に対して防御します。 デフォルト値は &quot;Yes&quot;です。', 'This setting can be enabled at the listener and virtual host levels.', 'ラジオボックスから選択', '');

$_tipsdb['required'] = new DAttrHelp("必要（許可ユーザー/グループ）", 'このコンテキストにアクセスできるユーザー/グループを指定します。 これにより、複数のコンテキストにわたって1つのユーザー/グループデータベース（&quot;レルム&quot;で指定）を使用できますが、そのデータベースの特定のユーザー/グループのみがこのコンテキストにアクセスできます。', '', '構文はApache Requireディレクティブと互換性があります。 例えば：  <ul> <li>user username [username ...] <br/>リストされたユーザーだけがこのコンテキストにアクセスできます。</li> <li> group groupid [groupid ...]<br/>リストされたグループに属するユーザーのみがこのコンテキストにアクセスできます。</li> </ul> この設定を指定しないと、すべての有効なユーザーがこのリソースにアクセスできます。', '');

$_tipsdb['requiredPermissionMask'] = new DAttrHelp("必要な許可マスク", 'サーバーが提供する静的ファイルに必要なアクセス許可マスクを指定します。 たとえば、全員が読み取り可能なファイルのみを処理できる場合は、値を0004に設定します。 すべての値についてman 2 statを参照してください', '', '8進数', '');

$_tipsdb['respBuffer'] = new DAttrHelp("応答バッファリング", '外部から受信した応答をバッファリングするかどうかを指定します。 アプリケーション。 &quot;nph-&quot; (Non-Parsed-Header)スクリプトが検出された場合、完全なHTTPヘッダーを持つ応答ではバッファリングがオフになります。', '', 'ドロップダウンリストから選択', '');

$_tipsdb['restart'] = new DAttrHelp("変更を適用する/緩やかなリスタート", '緩やかな再起動をクリックすると、新しいサーバープロセスが開始されます。 緩やかな再起動の場合、古いサーバープロセスは、すべての要求が完了した後（または&quot;緩やかな再起動タイムアウト（秒）&quot;に達すると）終了します。<br/><br/>設定の変更は、次回の再起動時に適用されます。 緩やかな再起動は、サーバーのダウンタイムなしにこれらの変更を適用します。', '緩やかな再起動は、新しいサーバー・プロセスを生成するために2秒以下で完了します。', '', '');

$_tipsdb['restrained'] = new DAttrHelp("拘束された", 'このバーチャルホストのルート（$VH_ROOT）を超えるファイルにこのWebサイトからアクセスできるかどうかを指定します。 はいに設定すると、$VH_ROOT以下のファイルにしかアクセスできず、シンボリックリンクや$VH_ROOTを超えるファイルやディレクトリを指すコンテキストへのアクセスが拒否されます。 しかし、これはCGIスクリプトのアクセシビリティを制限しません。 これは共有ホスティング環境で便利です。 &quot;シンボリックリンク参照&quot;は、ユーザーが$VH_ROOTでシンボリックリンクを使用できるようにはいに設定できます。 $VH_ROOTを超えるものはありません。', '[セキュリティ]共有ホスティング環境で有効にします。', 'ラジオボックスから選択', '');

$_tipsdb['restrictedDirPermissionMask'] = new DAttrHelp("スクリプトディレクトリのアクセス許可マスクの制限", 'Sサーバーが提供しないスクリプトファイルの親ディレクトリの制限付きアクセス許可マスクを指定します。 たとえば、グループおよびワールド書き込み可能なディレクトリでPHPスクリプトを処理することを禁止するには、マスクを022に設定します。 デフォルト値は000です。 このオプションを使用して、アップロードされたファイルのディレクトリ下でスクリプトを提供しないようにすることができます。<br/><br/>すべての値についてman 2 statを参照してください。', '', '8進数', '');

$_tipsdb['restrictedPermissionMask'] = new DAttrHelp("制限付き許可マスク", 'サーバーが提供しない静的ファイルに対する制限付きのアクセス許可マスクを指定します。 たとえば、実行可能ファイルの配信を禁止するには、マスクを0111に設定します。<br/><br/>すべての値についてman 2 statを参照してください。', '', '8進数', '');

$_tipsdb['restrictedScriptPermissionMask'] = new DAttrHelp("スクリプトのアクセス許可マスクの制限", 'サーバーが提供しないスクリプトファイルに対する制限付きアクセス許可マスクを指定します。 たとえば、グループおよびワールド書き込み可能なPHPスクリプトの配信を禁止するには、マスクを022に設定します。 デフォルト値は000です。<br/><br/>すべての値についてman 2 statを参照してください。', '', '8進数', '');

$_tipsdb['retryTimeout'] = new DAttrHelp("リトライタイムアウト（秒）", '以前の通信に問題があった外部アプリケーションを再試行する前に、サーバーが待機する時間を指定します。', '', '整数', '');

$_tipsdb['reusePort'] = new DAttrHelp("Enable REUSEPORT", 'Use SO_REUSEPORT socket option to distribute incoming traffic to multiple workers. This setting is only effective for multi-worker licenses. When enabled, all workers are automatically bound to this listener and &quot;Binding&quot; configuration is ignored.<br/><br/>Default value: On', '', 'ラジオボックスから選択', '');

$_tipsdb['rewriteBase'] = new DAttrHelp("書き換えベース", '書き換えルールのベースURLを指定します。', '', 'URL', '');

$_tipsdb['rewriteInherit'] = new DAttrHelp("継承を書き直す", '親コンテキストから書き換えルールを継承するかどうかを指定します。 書き換えが有効で継承されていない場合は、このコンテキストで定義されている書き換えのベースルールと書き換えルールが使用されます。', '', 'ラジオボックスから選択', '');

$_tipsdb['rewriteLogLevel'] = new DAttrHelp("ログレベル", '書き換えエンジンのデバッグ出力の詳細レベルを指定します。 この値の範囲は0-9です。0はロギングを無効にします。9は最も詳細なログを生成します。 このオプションを有効にするには、サーバーとバーチャルホストのエラーログ&quot;ログレベル&quot;を少なくともINFO以上に設定する必要があります。 これは、書き換えルールをテストする場合に便利です。', '', '整数', '');

$_tipsdb['rewriteMapLocation'] = new DAttrHelp("ロケーション", 'MapType：MapSource構文を使用して、書き換えマップの場所を指定します。<br/>LiteSpeedの書き換えエンジンは、次の3種類の書き換えマップをサポートしています: <ul> 	<li><b>標準プレーンテキスト</b> <blockquote> 		<b>MapType:</b> txt; <br/>		<b>MapSource:</b> ファイルパスを有効なプレーンASCIIファイルに変換します。 </blockquote> 		このファイルの各行には空白で区切られた2つの要素が含まれていなければなりません。         最初の要素はキーで、2番目の要素は値です。 コメントには先頭に「#」という記号を付けることができます。  	</li> 	<li><b>ランダム化されたプレーンテキスト</b> <blockquote> 		<b>MapType:</b> rnd;<br/>		<b>MapSource:</b> 有効なプレーンASCIIファイルのファイルパス。 </blockquote> 		ファイル形式は、標準のプレーンテキストファイルと似ていますが、2番目の要素には &quot; | &quot;記号で区切られた         複数の選択肢があり、書き換えエンジンによってランダムに選択できます。 	</li> 	<li><b>内部機能</b> <blockquote> 	    <b>MapType:</b> int;<br/>		<b>MapSource:</b> 内部文字列関数 </blockquote> 		4つの機能を利用できます： 		<ul> 			<li><b>toupper:</b> 検索キーを大文字に変換します。</li> 			<li><b>tolower:</b> 検索キーを小文字に変換します。</li> 			<li><b>escape:</b> 検索キーでURLエンコーディングを実行します。</li> 			<li><b>unescape:</b> 検索キーでURLデコードを実行します。</li> 		</ul> 	</li> 	Apacheで利用可能な次のマップタイプはLiteSpeedでは実装されていません：<br/>ハッシュファイルと外部書き換えプログラム。 </ul> LiteSpeedのリライトエンジンの実装は、Apacheのリライトエンジンの仕様に準拠しています。 書き直しマップの詳細については、<a href="http://httpd.apache.org/docs/current/mod/mod_rewrite.html" target="_blank" rel="noopener noreferrer">Apacheのmod_rewrite文書</a>を参照してください。', '', '文字列', '');

$_tipsdb['rewriteMapName'] = new DAttrHelp("名前", 'バーチャルホスト・レベルでの再書き込みマップの一意の名前を指定します。 この名前は、書き換えルールのマッピング参照によって使用されます。 この名前を参照するときは、次の構文のいずれかを使用する必要があります: <blockquote><code> $\{MapName:LookupKey\}<br/>$\{MapName:LookupKey|DefaultValue\} </code></blockquote><br/>LiteSpeedのリライトエンジンの実装は、Apacheのリライトエンジンの仕様に準拠しています。 書き直しマップの詳細については、<a href="http://httpd.apache.org/docs/current/mod/mod_rewrite.html" target="_blank" rel="noopener noreferrer">Apacheのmod_rewrite文書</a>を参照してください。', '', '文字列', '');

$_tipsdb['rewriteRules'] = new DAttrHelp("Rewriteルール", 'バーチャルホストまたはコンテキスト・レベルでの書き換えルールのリストを指定します。 書き換えルールは、RewriteRuleディレクティブから構成され、オプションとして複数のRewriteCondディレクティブが前に付いています。  <ul> <li>各ディレクティブは1行だけを取る必要があります。</li> <li>RewriteCondとRewriteRuleは、Apacheのリライト命令構文に従います。 あなたのApache設定ファイルから書き換え命令文をコピー＆ペーストするだけです。</li> <li>LiteSpeedとApache mod_rewriteには小さな違いがあります 実装:  <ul> 　<li>LiteSpeed書き換えエンジンでは、％\ {LA-U：変数\} と％\ {LA-F：変数\} は無視されます</li>   <li>LiteSpeed書き換えエンジンに2つの新しいサーバー変数が追加されました。:    LiteSpeed書き換えエンジンに2つの新しいサーバー変数が追加されました。 ％\{CURRENT_URI\}は、書き換えエンジンによって処理されている現在のURIを表し、％\{SCRIPT_NAME\}は対応するCGI環境変数と同じ意味を持ちます。</li> </ul></li> </ul> LiteSpeedのリライトエンジンの実装は、Apacheのリライトエンジンの仕様に従います。 書き換えルールの詳細については、<a href="http://httpd.apache.org/docs/current/mod/mod_rewrite.html" target="_blank" rel="noopener noreferrer">Apacheのmod_rewriteドキュメント</a>と<a href="http://httpd.apache.org/docs/current/rewrite/" target="_blank" rel="noopener noreferrer">ApacheのURL書き換えガイド</a>を参照してください。', '', '文字列', '');

$_tipsdb['rubyBin'] = new DAttrHelp("Rubyパス", 'Ruby実行可能ファイルへの指定されたパス。 Rubyがどこにインストールされているかによって、/usr/bin/ruby又は/usr/local/bin/rubyになります。', '', '絶対パス。', '');

$_tipsdb['runOnStartUp'] = new DAttrHelp("起動時に実行", 'サーバーの起動時に外部アプリケーションを起動するかどうかを指定します。 自身の子プロセスを管理できる外部アプリケーション、および&quot;インスタンス&quot;の値が &quot;1&quot;に設定されている場合にのみ適用されます。 有効にすると、実行時ではなくサーバーの起動時に外部プロセスが作成されます。', '[パフォーマンス] Railsアプリケーションのように、設定された外部プロセスに重大な起動オーバーヘッドがある場合、このオプションを有効にして最初のページ応答時間を短縮する必要があります。', 'ラジオボックスから選択', '');

$_tipsdb['runningAs'] = new DAttrHelp("実行ユーザ・グループ", 'サーバープロセスが実行されるユーザー/グループを指定します。 これは、インストールの前にconfigureコマンドを実行するときに、 &quot;--with-user&quot;と &quot;--with-group&quot;というパラメータを使用して設定されます。これらの値をリセットするには、configureコマンドを再実行して再インストールする必要があります。', '[セキュリティ]サーバは、 &quot;root&quot;のような特権ユーザーとして実行しないでください。 サーバーが、ログイン/シェルアクセスを持たない特権のないユーザー/グループの組み合わせで実行するように構成されていることが重要です。 一般的にnobodyのユーザー/グループが良い選択です。', '', '');

$_tipsdb['servAction'] = new DAttrHelp("アクション", 'このメニューからは、次の6つのアクションを使用できます：  緩やかな再起動, デバッグログの切り替え, サーバーログビューア, リアルタイム統計,  バージョンマネージャ, and PHPをコンパイル.  <ul><li>&quot;変更を適用する/緩やかなリスタート&quot;は、処理中のリクエストを中断することなく、正常にサーバプロセスを再起動します。</li> 	<li>&quot;デバッグログを切り替える&quot;は、デバッグログのオン/オフを切り替えます。</li> 	<li>&quot;サーバーログビューア&quot;は、ログビューアを介してサーバーログを表示できます。</li> 	<li>&quot;リアルタイム統計&quot;は、リアルタイムのサーバステータスを表示できます。</li> 	<li>&quot;バージョン管理&quot;は、LSWSの新しいバージョンをダウンロードし、異なるバージョン間で切り替えることができます。</li> 	<li>PHPをコンパイルすると、PHPをLiteSpeed Web Server用にコンパイルできます。</li> </ul>', 'シェルユーティリティ$SERVER_ROOT/bin/lswsctrlを使用してサーバープロセスを制御することもできますが、ログインシェルが必要です。', '', '');

$_tipsdb['servModules'] = new DAttrHelp("サーバーモジュール", 'サーバーモジュール構成は、モジュール構成データをグローバルに定義します。 一度定義されると、リスナーとバーチャルホストはモジュールとモジュール構成にアクセスできます。 <br/><br/>処理されるすべてのモジュールは、サーバー構成に登録する必要があります。 サーバー構成では、モジュール・パラメーター・データのデフォルト値も定義されています。 これらの値は、リスナーおよびバーチャルホスト構成データによって継承または上書きできます。<br/><br/>モジュールの優先順位は、サーバーレベルでのみ定義され、リスナーとバーチャルホストの設定によって継承されます。', '', '', '');

$_tipsdb['serverName'] = new DAttrHelp("サーバー名", 'このサーバーの一意の名前。 値として$HOSTNAMEを使用できます。', '', '', '');

$_tipsdb['serverPriority'] = new DAttrHelp("プライオリティ", 'サーバープロセスの優先度を指定します。値の範囲は-20〜20です。 数値が小さいほど優先度が高くなります。', '[パフォーマンス]通常、ビジー状態のサーバーで優先度を高くすると、Webパフォーマンスが若干高くなります。 データベースプロセスの優先度よりも高い優先度を設定しないでください。', '整数', '');

$_tipsdb['servletContext'] = new DAttrHelp("サーブレットコンテキスト", 'サーブレットは、サーブレットコンテキストを介して個別にインポートできます。 サーブレットコンテキストは、サーブレットのURIとサーブレットエンジンの名前を指定するだけです。 Webアプリケーション全体をインポートしたくない場合や、異なるサーブレットを異なる認可レルムで保護したい場合にのみ、これを使用する必要があります。 このURIには、&quot;Java Webアプリコンテキスト&quot;と同じ要件があります。', '', '', '');

$_tipsdb['servletEngine'] = new DAttrHelp("サーブレットエンジン", 'このWebアプリケーションを提供するサーブレットエンジンの名前を指定します。 サーブレットエンジンは、サーバーまたはバーチャルホストレベルの&quot;外部アプリケーション&quot;セクションで定義する必要があります。', '', '選択', '');

$_tipsdb['setUidMode'] = new DAttrHelp("外部アプリ Set UID モード", '外部アプリケーション・プロセスにユーザーIDを設定する方法を指定します。 3つの選択肢があります：  <ul><li>サーバー UID: 外部アプリケーション・プロセスのユーザー/グループIDをサーバーのユーザー/グループIDと同じに設定します。</li>     <li>CGIファイル UID: 実行可能ファイルのユーザー/グループIDに基づいて、外部CGIプロセスのユーザー/グループIDを設定します。 このオプションは、FastCGIまたはLSPHPではなく、CGIにのみ適用されます。</li>     <li>Doc Root UID: 現在のバーチャルホストのドキュメントルートのユーザー/グループIDに基づいて、外部アプリケーションプロセスのユーザー/グループIDを設定します。</li> </ul>', '[セキュリティ]共有ホスティング環境では、CGIファイルUIDまたはDocルートUIDモードを使用して、1つのバーチャルホストが所有するファイルに別のバーチャルホストの外部アプリケーションスクリプト。', '選択', '');

$_tipsdb['shHandlerName'] = new DAttrHelp("ハンドラ名", 'ハンドラタイプがFastCGI、Web Server、LSAPI、Load Balancer、またはServlet Engineの場合にスクリプトファイルを処理する外部アプリケーションの名前を指定します。', '', 'ドロップダウンリストから選択', '');

$_tipsdb['shType'] = new DAttrHelp("ハンドラタイプ", 'これらのスクリプトファイルを処理する外部アプリケーションのタイプを指定します。 使用可能なタイプは以下のとおりです：CGI、FastCGI、Webサーバー、LSAPI app、ロードバランサ 又はサーブレットエンジン。 FastCGI、Webサーバー、およびServlet Engineの場合は、&quot;ハンドラ名&quot;を指定する必要があります。 これは、&quot;外部アプリケーション&quot;セクションで事前定義されている外部アプリケーション名です。', '', 'ドロップダウンリストから選択', '');

$_tipsdb['shmDefaultDir'] = new DAttrHelp("デフォルトのSHMディレクトリ", '共有メモリのデフォルトディレクトリを指定されたパスに変更します。 ディレクトリが存在しない場合は作成されます。 特に指定のない限り、すべてのSHMデータはこのディレクトリに保存されます。', '', 'パス', '');

$_tipsdb['showVersionNumber'] = new DAttrHelp("サーバー署名", 'サーバーの署名とバージョン番号を次の場所に表示するかどうかを指定します。 レスポンスヘッダの「Server」値。 3つのオプションがあります： バージョンを隠すに設定すると、LiteSpeedのみが表示されます。 バージョンを表示するに設定すると、LiteSpeedとバージョン番号が表示されます。  フルヘッダーを隠すに設定すると、サーバーヘッダー全体がレスポンスヘッダーに表示されなくなります。', '[セキュリティ]サーバのバージョン番号を公開したくない場合は、バージョンを隠すに設定します。', '選択', '');

$_tipsdb['sname'] = new DAttrHelp("名前 - サーバー", 'このサーバーを識別する一意の名前。 これは一般的な設定で指定された&quot;サーバー名&quot;です。', '', '', '');

$_tipsdb['sndBufSize'] = new DAttrHelp("送信バッファサイズ（バイト）", '各TCPソケットの送信バッファサイズ。 512Kは許容されるバッファの最大サイズです。', '[パフォーマンス]オペレーティングシステムのデフォルトのバッファサイズを使用するには、この値を &quot;未設定&quot;のままにするか、0に設定することをお勧めします。<br/>[パフォーマンス] Webサイトで大きな静的ファイルが使用されている場合は、送信バッファサイズを大きくしてパフォーマンスを向上させてください。<br/>[パフォーマンス]これを低い値に設定すると、ソケットあたりのスループットとメモリ使用量が減少し、メモリがボトルネックになった場合にサーバーがより多くの同時ソケットを持つことが可能になります。', '整数', '');

$_tipsdb['softLimit'] = new DAttrHelp("接続ソフトリミット", '1つのIPから許可される同時接続のソフト制限を指定します。 このソフトリミットは、&quot;猶予期間（秒）&quot;の間に&quot;接続ハードリミット&quot;以下になると一時的に超過することができますが、接続の数が限界よりも少なくなるまで、キープアライブ接続はできるだけ早く閉じられます。 &quot;猶予期間（秒）&quot;の後に接続数がまだ制限を超えている場合、そのIPは&quot;禁止期間（秒）&quot;でブロックされます。<br/><br/>例えば、ページに多数の小さなグラフが含まれている場合、ブラウザは、特にHTTP/1.0クライアントの場合、同時に多くの接続を設定しようとする可能性があります。 これらの接続を短期間で許可する必要があります。<br/><br/>HTTP/1.1クライアントは、複数の接続を設定してダウンロード速度を上げることができ、SSLにはSSL以外の接続とは別の接続が必要です。 通常のサービスに悪影響を及ぼさないように、制限値が適切に設定されていることを確認してください。 推奨される制限は、5〜10です。', '[セキュリティ]数字が小さいほど、より明確なクライアントに対応できます。<br/>[セキュリティ]信頼できるIPまたはサブネットワークは影響を受けません。<br/>[パフォーマンス]多数の同時クライアントマシンでベンチマークテストを実行する場合は、高い値に設定します。', '整数', '');

$_tipsdb['sslCert'] = new DAttrHelp("SSL秘密鍵と証明書", 'すべてのSSLリスナーには、ペアのSSL秘密鍵とSSL証明書が必要です。 複数のSSLリスナーは、同じ鍵と証明書を共有できます。<br/>OpenSSLなどのSSLソフトウェアパッケージを使用して、SSL秘密鍵を自分で生成することができます。 SSL証明書は、VeriSignやThawteのような認可された証明書の発行者から購入することもできます。 自分で証明書に署名することもできます。 自己署名証明書はWebブラウザから信頼されないため、重要なデータを含む公開Webサイトでは使用しないでください。 ただし、自己署名証明書は内部使用に十分適しており、 例えば LiteSpeed WebサーバーのWebAdminコンソールへのトラフィックを暗号化します。', '', '', '');

$_tipsdb['sslDefaultCiphers'] = new DAttrHelp("Default Cipher Suite", 'Default cipher suite for SSL certificates.<br/><br/>Default value: Server Internal Default (Based on current best practices)', '', 'Colon-separated string of cipher specifications.', '');

$_tipsdb['sslEnableMultiCerts'] = new DAttrHelp("複数のSSL証明書を有効にする", 'リスナー/バーチャルホストが複数のSSL証明書を設定できるようにします。 複数の証明書が有効な場合、証明書/キーは命名規則に従うことが想定されます。 証明書の名前がserver.crtの場合、その他の可能な証明書名はserver.crt.rsa、server.crt.dsa、server.crt.eccです。 「未設定」の場合、デフォルトは「いいえ」です。', '', 'ラジオボックスから選択', '');

$_tipsdb['sslOCSP'] = new DAttrHelp("OCSPステープリング", 'オンライン証明書ステータスプロトコル（OCSP）は、デジタル証明書が有効かどうかを確認するより効率的な方法です。 OCSP応答者である他のサーバーと通信して、証明書失効リスト（CRL）をチェックする代わりに証明書が有効であることを確認します。<br/>OCSPステープリングは、このプロトコルのさらなる改良であり、証明書が要求されるたびにではなく、定期的な間隔でサーバーがOCSPレスポンダを確認できるようにします。 詳細については、<a href="   http://en.wikipedia.org/wiki/OCSP_Stapling " target="_blank" rel="noopener noreferrer">   OCSP Wikipedia </a>のページをご覧ください。', '', '', '');

$_tipsdb['sslOcspProxy'] = new DAttrHelp("OCSP Proxy", 'Socket address used as the proxy server address for OCSP verification. Leave this setting unset If not using a proxy.<br/><br/>Default value: not set', '', 'Socket Address', '');

$_tipsdb['sslProtocol'] = new DAttrHelp("プロトコルバージョン", '使用するSSLプロトコルのバージョンを指定します。 SSL v3.0とTLS v1.0から選択できます。 OpenSSL 1.0.1以降、TLS v1.1およびTLS v1.2もサポートされています。', '', 'チェックボックスから選択', '');

$_tipsdb['sslSessionCache'] = new DAttrHelp("セッションキャッシュを有効にする", 'セッションIDキャッシングを有効にします。 「未設定」の場合、デフォルトは「いいえ」です。 （Opensslデフォルト）', '', 'ラジオボックスから選択', '');

$_tipsdb['sslSessionCacheSize'] = new DAttrHelp("セッションキャッシュサイズ（バイト）", 'キャッシュに格納するSSLセッションIDの最大数を設定します。 デフォルトは1,000,000です。', '', '整数', '');

$_tipsdb['sslSessionCacheTimeout'] = new DAttrHelp("セッションキャッシュタイムアウト（秒）", 'この値は、再ネゴシエーションが必要な前にセッションIDがキャッシュ内で有効である期間を決定します。 デフォルトは3,600です。', '', '整数', '');

$_tipsdb['sslSessionTicketKeyFile'] = new DAttrHelp("SSLセッションチケットキーファイル", 'SSLチケットキーを管理者が作成または維持できるようにします。 ファイルの長さは48バイトでなければなりません。 このオプションを空のままにすると、ロードバランサは独自のキーセットを生成してローテーションします。<br/><br/>重要：転送秘密を維持するには、<b> SSLセッションチケットの有効期間</b>秒単位でキーを変更することを強くお勧めします。 これができない場合は、このフィールドを空のままにすることをお勧めします。', '', 'パス', '');

$_tipsdb['sslSessionTicketLifetime'] = new DAttrHelp("SSLセッションチケットの有効期間（秒）", 'この値は、再ネゴシエーションが必要となる前にセッションチケットが有効になる期間を決定します。 デフォルトは3,600です。', '', '整数', '');

$_tipsdb['sslSessionTickets'] = new DAttrHelp("セッションチケットを有効にする", 'セッションチケットを有効にします。 「未設定」の場合、サーバーはopenSSLのデフォルトチケットを使用します。', '', 'ラジオボックスから選択', '');

$_tipsdb['sslStrictSni'] = new DAttrHelp("Strict SNI Certificate", 'Specifies whether to strictly require a dedicated virtual host certificate configuration. When enabled, SSL connections to virtual hosts without a dedicated certificate configuration will fail instead of using a default catch-all certificate.<br/><br/>Default value: No', '', 'ラジオボックスから選択', '');

$_tipsdb['sslStrongDhKey'] = new DAttrHelp("SSL Strong DH Key", 'Specifies whether to use 2048 or 1024 bit DH keys for SSL handshakes. If set to &quot;Yes&quot;, 2048 bit DH keys will be used for 2048 bit SSL keys and certificates. 1024 bit DH keys will still be used in other situations. Default is &quot;Yes&quot;.<br/><br/>Earlier versions of Java do not support DH key size higher than 1024 bits. If Java client compatibility is required, this should be set to &quot;No&quot;.', '', 'radio', '');

$_tipsdb['statDir'] = new DAttrHelp("統計出力ディレクトリ", 'Real-Time Statsレポートファイルが書き込まれるディレクトリが作成されます。 デフォルトのディレクトリは<b>/tmp/lshttpd/</b>です。', 'サーバーの操作中に.rtreportファイルが1秒ごとに書き込まれます。 不必要なディスク書き込みを避けるには、これをRAMディスクに設定します。<br/>.rtreportファイルはサードパーティ製の監視ソフトウェアと一緒に使用してサーバーの状態を追跡できます。', '絶対パス。', '');

$_tipsdb['staticReqPerSec'] = new DAttrHelp("静的リクエスト/秒", '確立された接続の数に関係なく、1秒間に処理できる単一のIPアドレスからの静的コンテンツへの要求の最大数を指定します。<br/><br/>この制限に達すると、将来のすべての要求は次の秒までタールピットされます。 動的に生成されるコンテンツのリクエスト制限は、この制限とは関係ありません。 クライアントごとの要求制限は、サーバーまたはバーチャルホストレベルで設定できます。 バーチャルホストレベルの設定は、サーバーレベルの設定よりも優先されます。', '[セキュリティ]信頼できるIPまたはサブネットワークは影響を受けません。', '整数', '');

$_tipsdb['statuscode'] = new DAttrHelp("ステータスコード", '外部リダイレクトの応答ステータスコードを指定します。 ステータスコードが300〜399の場合、&quot;宛先URI&quot;を指定できます。', '', '選択', '');

$_tipsdb['suexecGroup'] = new DAttrHelp("suEXEC Group", 'At the current context level, run as this group. Either <b>suEXEC User</b> at the Virtual Host level, or <b>Run As User</b> at the External Application level, must be set for <b>suEXEC Group</b> to take effect.<br/><br/>This configuration can be overridden at the External Application level using the <b>Run As Group</b> setting.<br/><br/>Default value: <b>suExec User</b> setting value', '', 'Valid group name or uid', '');

$_tipsdb['suexecUser'] = new DAttrHelp("suEXEC User", 'At the current context level, run as this user. If set, this value will override the Virtual Host level <b>ExtApp Set UID Mode</b> setting.<br/><br/>This configuration may be overridden at the External Application level using the <b>Run As User</b> setting.<br/><br/>Default value: Not Set', '', 'Valid user name or uid.', '');

$_tipsdb['suffix'] = new DAttrHelp("サフィックス", 'このスクリプトハンドラによって処理されるスクリプトファイルのサフィックスを指定します。 接尾辞は一意である必要があります。', 'サーバーは、リスト内の最初の接尾辞に特殊なMIMEタイプ（ &quot;application / x-httpd- [suffix]&quot;）を自動的に追加します。 たとえば、接尾辞 &quot;php53&quot;にMIMEタイプ &quot;application / x-httpd-php53&quot;が追加されます。 接尾辞は&quot;MIME設定&quot;設定で最初に設定する必要があります。<br/>このフィールドではサフィックスを列挙していますが、スクリプトハンドラは接尾辞ではなくMIMEタイプを使用して、処理するスクリプトを決定します。<br/>[パフォーマンスとセキュリティ]本当に必要なサフィックスのみを指定してください。', 'カンマ区切りリストでピリオド&quot;.&quot;は禁止されています。', '');

$_tipsdb['swappingDir'] = new DAttrHelp("スワップディレクトリ", 'スワップファイルを配置するディレクトリを指定します。 サーバがchrootモードで起動されると、このディレクトリは新しいルートディレクトリに相対的です。それ以外の場合は、実際のルートディレクトリに相対的です。<br/>サーバーは、独自のバーチャルメモリーを使用してシステムのメモリー使用量を削減します。 バーチャルメモリとディスクスワッピングは、大きな要求本体と動的に生成された応答を格納するために使用されます。 スワッピングディレクトリは、十分なスペースを持つディスク上に配置する必要があります。', '[パフォーマンス]スワッピングディレクトリを別のディスクに配置するか、最大I/Oバッファサイズを増やしてスワッピングを排除します。', '絶対パス。', '');

$_tipsdb['templateFile'] = new DAttrHelp("テンプレートファイル", 'このテンプレートの構成ファイルへのパスを指定します。 このファイルは$SERVER_ROOT/conf/templates/の中に &quot;.conf&quot;ファイル名で置く必要があります。 指定したファイルが存在しない場合、テンプレートを保存しようとすると、 &quot;CLICK TO CREATE&quot;というリンクが表示されます。 このリンクは新しい空のテンプレートファイルを生成します。 テンプレートを削除すると、その設定は設定から削除されますが、実際のテンプレート設定ファイルは削除されません。', '', 'パス', '');

$_tipsdb['templateFileRef'] = new DAttrHelp("テンプレートで使用されるファイル名", 'メンバーバーチャルホストに使用されるファイルのパスを指定します。 変数$VH_NAMEまたは$VH_ROOTは、各メンババーチャルホストが独自のファイルを持つように、パスに現れなければなりません。', '', '文字列', '');

$_tipsdb['templateName'] = new DAttrHelp("テンプレート名", 'テンプレートの一意の名前。', '', '', '');

$_tipsdb['templateVHAliases'] = new DAttrHelp("エイリアス", 'バーチャルホストの代替名を指定します。 すべての可能なホスト名とIPアドレスをこのリストに追加する必要があります。 ワイルドカード文字*と？は名前に使用できます。 ポート80にないWebサイトの場合は、：<port> を追加します。<br/><br/>エイリアスは、以下の状況で使用されます: <ol>   <li>要求を処理するときにホストヘッダー内のホスト名を照合する。</li>   <li>FrontPageやAWstatsなどのアドオンのドメイン名/エイリアス設定を設定する</li>   <li>バーチャルホストテンプレートに基づいてリスナーからバーチャルホストへのマッピングを構成する。</li> </ol>', '', 'ドメイン名のカンマ区切りリスト。', '');

$_tipsdb['templateVHConfigFile'] = new DAttrHelp("インスタンス化されたVHost設定ファイル", 'メンバーバーチャルホストをインスタンス化するときに生成される構成ファイルの場所を指定します。 変数$VH_NAMEは、各バーチャルホストが独自のファイルを持つように、パスに現れなければなりません。 $SERVER_ROOT/conf/vhosts/にある必要があります。 この設定ファイルは、メンバのバーチャルホストをインスタンス化によってテンプレートから移動した場合にのみ作成されます。', '$VH_NAME/ vhconf.confは管理が簡単です。', '$VH_NAME変数と.conf接尾辞付きの文字列', '');

$_tipsdb['templateVHDocRoot'] = new DAttrHelp("ドキュメントルート", '各メンバーバーチャルホストのドキュメントルートの一意のパスを指定します。 変数$VH_NAMEまたは$VH_ROOTは、各メンババーチャルホストが独自のドキュメントルートを持つように、パスに現れなければなりません。', '', '$VH_NAME又は$VH_ROOT変数を含むパス', '$VH_ROOT/public_html/ 又は $SERVER_ROOT/$VH_NAME/public_html.');

$_tipsdb['templateVHDomain'] = new DAttrHelp("ドメイン", 'このメンバーバーチャルホストのメインドメイン名を指定します。 空白のままにすると、バーチャルホスト名が使用されます。 これは完全修飾ドメイン名である必要がありますが、IPアドレスも使用できます。 ポート80以外のWebサイトには、：<port>を追加することをお勧めします。 ドメイン名を含む設定の場合、このドメインは変数$VH_DOMAINで参照できます。<br/><br/>このドメイン名は、以下の状況で使用されます: <ol>   <li>要求を処理する際にホストヘッダー内のホスト名を照合する。</li>   <li>FrontPageやAWstatsなどのアドオンのドメイン名設定を入力する。</li>   <li>バーチャルホストテンプレートに基づいてリスナーからバーチャルホストへのマッピングを構成する。</li> </ol>', '', 'ドメイン名', '');

$_tipsdb['templateVHName'] = new DAttrHelp("バーチャルホスト名", 'このバーチャルホストの一意の名前。 この名前は、すべてのテンプレートメンバーバーチャルホストとスタンドアロンバーチャルホストで一意でなければなりません。 ディレクトリパス設定では、この名前は変数$VH_NAMEによって参照できます。<br/><br/>同じ名前のスタンドアロンバーチャルホストも設定されている場合、メンバーバーチャルホスト設定は無視されます。', '', '', '');

$_tipsdb['templateVHRoot'] = new DAttrHelp("デフォルトのバーチャルホストルート", 'このテンプレートを使用して、メンバーバーチャルホストのデフォルトルートディレクトリを指定します。 変数$VH_NAMEはパスに指定する必要があります。 これにより、各メンバーテンプレートに名前に基づいて別々のルートディレクトリが自動的に割り当てられます。', '', 'パス', '');

$_tipsdb['toggleDebugLog'] = new DAttrHelp("デバッグログを切り替える", 'デバッグログの切り替えは、&quot;デバッグレベル&quot;の値をNONEとHIGHの間で切り替えます。 デバッグロギングはパフォーマンスに影響を与え、ハードドライブをすばやく埋めることができるため、通常は本番サーバーで&quot;デバッグレベル&quot;をNONEに設定する必要があります。 この機能を代わりに使用して、本番サーバー上の問題をデバッグするために、デバッグログを素早くオン/オフすることができます。 このようにデバッグロギングをオンまたはオフにしても、サーバー構成に表示されるものは変更されません。', '&quot;デバッグログを切り替える&quot;は、&quot;ログレベル&quot;がDEBUGに設定されている場合にのみ機能します。<br/>[パフォーマンス]重要！ デバッグログには、各要求と応答の詳細情報が含まれています。 アクティブデバッグロギングは、サービスパフォーマンスを著しく低下させ、非常に短時間でディスクスペースを飽和させる可能性があります。 この機能は、サーバーの問題を診断しようとすると、短時間しか使用しないでください', '', '');

$_tipsdb['totalInMemCacheSize'] = new DAttrHelp("小ファイルキャッシュサイズ合計（バイト）", '小さな静的ファイルをキャッシュ/提供するためにバッファーキャッシュに割り振ることができる合計メモリーを指定します。', '', '整数', '');

$_tipsdb['totalMMapCacheSize'] = new DAttrHelp("MMAPキャッシュサイズ合計（バイト）", '中規模の静的ファイルをキャッシュ/配信するためにメモリマップされたキャッシュに割り当てることができる合計メモリを指定します。', '', '整数', '');

$_tipsdb['umask'] = new DAttrHelp("umask", 'CGIプロセスのデフォルトのumaskを設定します。 詳細は、man 2 umaskを参照してください。 これは、外部アプリケーション&quot;umask&quot;のデフォルト値としても機能します。', '', '有効範囲値[000]〜[777]。', '');

$_tipsdb['uploadPassByPath'] = new DAttrHelp("ファイルパスによるアップロードデータの転送", 'ファイルデータをパスでアップロードするかどうかを指定します。 有効にすると、アップロード時にファイル自体ではなく、バックエンドハンドラにファイルパスと他の情報が送信されます。 これにより、CPUリソースとファイル転送時間が節約されますが、実装するためにバックエンドに若干の更新が必要です。 無効にすると、ファイルの内容はバックエンドハンドラに転送され、要求本文は引き続きファイルに解析されます。', '[パフォーマンス]下位互換性が問題にならないようにするには、これを有効にしてファイルのアップロード処理を高速化します。', 'ラジオボックスから選択', '');

$_tipsdb['uploadTmpDir'] = new DAttrHelp("一時ファイルパス", '要求本体パーサーが動作している間に、サーバーにアップロードされるファイルが格納される一時ディレクトリ。 デフォルト値は/tmp/lshttpd/です。', '', '$SERVER_ROOT（ServerおよびVHostレベルの場合）または$VH_ROOT（VHostレベルの場合）で始まる絶対パスまたはパス。', '');

$_tipsdb['uploadTmpFilePermission'] = new DAttrHelp("一時ファイルのアクセス許可", '一時ディレクトリに格納されているファイルに使用されるファイルのアクセス権を決定します。 サーバーレベルの設定はグローバルで、VHostレベルでオーバーライドできます。', '', '3桁の8進数。 デフォルト値は666です。', '');

$_tipsdb['uri'] = new DAttrHelp("URI", 'このコンテキストのURIを指定します。 URIは &quot;/&quot;で始まる必要があります。 URIが「/」で終わる場合、このコンテキストはこのURIの下にすべてのサブURIを含みます。', '', 'URI', '');

$_tipsdb['useAIO'] = new DAttrHelp("Use AIO", 'Specifies whether to use asynchronous I/O to serve static files along with the AIO implementation to use. Options LINUX AIO and io_uring are only available on Linux machines.<br/><br/>Default value: No', ' AIO can help improve performance in servers with a high I/O wait.<br/> When io_uring is selected but not supported on the current machine, Linux AIO will be used instead.', 'ドロップダウンリストから選択', '');

$_tipsdb['useIpInProxyHeader'] = new DAttrHelp("ヘッダーにクライアントIPを使用する", '&quot;X-Forwarded-For&quot; HTTPリクエストヘッダーに記載されているIPアドレスを使用するかどうかを指定します。 接続/帯域幅スロットリング、アクセス制御、IPジオロケーションなどがあります。<br/><br/>この機能は、Webサーバーがロードバランサまたはプロキシサーバーの背後にある場合に便利です。 「信頼できるIPのみ」を選択した場合、X-Forwarded-For IPは、サーバーレベル&quot;許可リスト&quot;で定義された信頼できるIPからの要求が送信された場合にのみ使用されます。', '', '選択', '');

$_tipsdb['useSendfile'] = new DAttrHelp("sendfile（）を使用する", '静的ファイルを提供するためにsendfile（）システムコールを使用するかどうかを指定します。 静的ファイルは、メモリバッファキャッシュ、メモリマップキャッシュ、プレーンリード/ライト、およびsendfile（）の4つの方法で提供できます。 &quot;最大キャッシュサイズの小さいファイルサイズ（バイト）&quot;より小さいファイルはメモリバッファキャッシュから提供されます。 &quot;最大キャッシュサイズの小さいファイルサイズ（バイト）&quot;より大きいが、&quot;最大MMAPファイルサイズ（バイト）&quot;より小さいファイルは、メモリマップドキャッシュから提供されます。 &quot;最大MMAPファイルサイズ（バイト）&quot;より大きいファイルは、プレーンな読み取り/書き込みまたはsendfile（）で処理されます。 Sendfile（）は、非常に大きな静的ファイルを処理するときにCPU使用率を大幅に下げることができる「ゼロコピー」システムコールです。 Sendfile（）は最適化されたネットワークカードカーネルドライバを必要とするため、一部の小規模ベンダーのネットワークアダプタには適していない可能性があります。', '', 'ラジオボックスから選択', '');

$_tipsdb['userDBCacheTimeout'] = new DAttrHelp("ユーザーDBキャッシュタイムアウト（秒）", 'バックエンドユーザーデータベースの変更の確認頻度を指定します。 キャッシュ内のすべてのエントリにタイムスタンプがあります。 キャッシュされたデータが指定されたタイムアウトよりも古い場合、バックエンドデータベースの変更がチェックされます。 変更がなければ、タイムスタンプは現在の時刻にリセットされ、そうでない場合は新しいデータがロードされます。 Sevrerのリロードと穏やかな再起動により、キャッシュは直ちにクリアされます。', '[パフォーマンス]バックエンドデータベースが頻繁に変更されない場合は、パフォーマンスを向上させるために、より長いタイムアウトを設定します。', '整数', '');

$_tipsdb['userDBLocation'] = new DAttrHelp("ユーザーDBの場所", 'ユーザーデータベースの場所を指定します。 DBタイプパスワードファイルの場合、ユーザ/パスワード定義を含むフラットファイルへのパスです。 ファイル名をクリックするとWebAdminコンソールからこのファイルを編集できます。<br/><br/>ユーザーファイルの各行には、ユーザー名の後にコロン、crypt()で暗号化されたパスワードが続き、オプションでコロンとユーザーが所属するグループ名が続きます。 グループ名はカンマで区切られます。 グループ情報がユーザーデータベースに指定されている場合、グループデータベースはチェックされません。<br/>例：<blockquote><code>john:HZ.U8kgjnMOHo:admin,user</code></blockquote><br/><br/>DBタイプ LDAP の場合、ユーザー情報を照会するのはLDAP URLです。 有効なユーザーごとに、LDAPサーバーに格納されている認証データには、少なくともユーザーIDとユーザーパスワードが含まれている必要があります。 HTTP認証ヘッダーで受け取ったこのURLとユーザー名に基づいて、LDAP検索要求で1つだけのレコードを返す必要があります。 &quot;$ k&quot;はURLのフィルタ部分で指定する必要があり、ユーザー名で置き換えられます。 ユーザーのパスワード属性は、照会結果に戻されなければなりません。 ユーザーのパスワードの属性名は、&quot;パスワード属性&quot;で指定します。 グループ情報は、&quot;Member-of属性&quot;で任意に指定できます。<br/><br/>例: 少なくとも、オブジェクトクラス（uidObject、simpleSecurityObject、およびorganizationalRole）を使用してLDAPでユーザーを定義できます。 次のURLを使用できます: <br/><br/><blockquote><code>ldap://localhost/ou=UserDB,dc=example,dc=com???(&(objectClass=*)(uid=$k))</code></blockquote>', '', 'ユーザーDBファイルまたはLDAP URL（RFC 2255）へのパス。', '');

$_tipsdb['userDBMaxCacheSize'] = new DAttrHelp("ユーザーDB最大キャッシュサイズ", 'ユーザーデータベースの最大キャッシュサイズを指定します。 最近アクセスされたユーザー認証データは、最大のパフォーマンスを提供するためにメモリにキャッシュされます。', '[パフォーマンス]キャッシュが大きくなるとメモリが消費されるため、値が高くなるほどパフォーマンスが向上する場合があります。 ユーザーのデータベースサイズとサイトの使用状況に応じて適切なサイズに設定します。', '整数', '');

$_tipsdb['vaction'] = new DAttrHelp("アクション - バーチャルホスト", 'このフィールドには、バーチャルホストを無効化、有効化、または再起動するためのボタンが表示されます。 1つのバーチャルホストで実行されたアクションは、残りのWebサーバーには影響しません。', 'バーチャルホストをコンテンツを更新するときに一時的に無効にすることをお勧めします。', '', '');

$_tipsdb['vdisable'] = new DAttrHelp("無効", '無効アクションは、実行中のバーチャルホストを停止します。 新しいリクエストは受け付けられませんが、処理中のリクエストは通常通り終了します。', '', '', '');

$_tipsdb['venable'] = new DAttrHelp("有効", '有効アクションは、停止したバーチャルホストを起動します。 これにより、新しい要求を受け入れることができます。', '', '', '');

$_tipsdb['verifyDepth'] = new DAttrHelp("検証の深さ", 'クライアントに有効な証明書がないと判断する前に、証明書の検証の深さを指定します。 デフォルトは &quot;1&quot;です。', '', 'ドロップダウンリストから選択', '');

$_tipsdb['vhEnableBr'] = new DAttrHelp("Enable Brotli Compression", 'Specifies whether to enable Brotli compression for this virtual host. This setting is only effective when &quot;Brotli Compression Level (Static File)&quot; is set to a non-zero value at the server level.', '', 'ラジオボックスから選択', '');

$_tipsdb['vhEnableGzip'] = new DAttrHelp("GZIPを有効にする", 'このバーチャルホストに対してGZIP圧縮を有効にするかどうかを指定します。 この設定は、サーバーレベルでGZIP圧縮が有効になっている場合にのみ有効です。 圧縮設定はサーバーレベルで設定されます（チューニング> GZIP）。', '', 'ラジオボックスから選択', '');

$_tipsdb['vhEnableQuic'] = new DAttrHelp("Enable HTTP3/QUIC", 'Enables the HTTP3/QUIC network protocol for this virtual host. For this setting to take effect, both &quot;Enable HTTP3/QUIC&quot; and &quot;Open HTTP3/QUIC (UDP) port&quot; must also be set to Yes at the server and listener levels respectively. Default value is Yes.', 'When this setting is set to No, the HTTP3/QUIC advertisement will no longer be sent. If a browser still contains cached HTTP3/QUIC information and HTTP3/QUIC is still enabled at the server and listener levels, an HTTP3/QUIC connection will continue to be used until this information is no longer cached or an HTTP3/QUIC protocol error is encountered.', 'ラジオボックスから選択', '');

$_tipsdb['vhMaxKeepAliveReq'] = new DAttrHelp("最大キープアライブ要求", 'キープアライブ（永続的）接続を介して提供できる最大要求を特定します。 この制限に達すると接続が閉じられます。 バーチャルホストごとに異なる制限を指定できます。 この数値は、サーバーレベルの&quot;最大キープアライブ要求&quot;の制限を超えることはできません。', '[パフォーマンス]合理的に高い値に設定します。 「1」以下の値を指定すると、キープアライブ接続が無効になります。', '整数', '');

$_tipsdb['vhModuleUrlFilters'] = new DAttrHelp("バーチャルホストモジュールのコンテキスト", 'バーチャルホストコンテキストのモジュール設定をカスタマイズするための集中管理された場所です。 コンテキストURIの設定は、バーチャルホストまたはサーバーレベルの設定を上書きします。', '', '', '');

$_tipsdb['vhModules'] = new DAttrHelp("バーチャルホストモジュール", 'バーチャルホストモジュール構成データは、デフォルトでサーバーモジュール設定から継承されます。 バーチャルホストモジュールはHTTPレベルのフックに制限されています。', '', '', '');

$_tipsdb['vhName'] = new DAttrHelp("バーチャルホスト名", 'バーチャルホストの一意の名前。 バーチャルホストのドメイン名をバーチャルホスト名として使用することをお勧めします。 バーチャルホスト名は、変数$VH_NAMEを使用して参照できます。', '', '', '');

$_tipsdb['vhRoot'] = new DAttrHelp("バーチャルホスト Root", 'バーチャルホストのルートディレクトリを指定します。 注：これはドキュメントのルートではありません<b> NOT </b>です。 このディレクトリの下に、バーチャルホストに関連するすべてのファイル（ログファイル、htmlファイル、CGIスクリプトなど）を置くことをお勧めします。 バーチャルホストルートは、変数$VH_ROOTを使用して参照できます。', '[パフォーマンス]さまざまなハードドライブに異なるバーチャルホストを配置します。', '絶対パス又は$SERVER_ROOTからの相対パス。', '');

$_tipsdb['vhaccessLog_fileName'] = new DAttrHelp("ファイル名", 'アクセスログファイル名。', '[パフォーマンス]アクセスログファイルを別のディスクに配置します。', 'ファイル名への絶対パス又は$SERVER_ROOT、$VH_ROOTからの相対パス。', '');

$_tipsdb['vhadminEmails'] = new DAttrHelp("管理者用電子メール", 'このバーチャルホストの管理者の電子メールアドレスを指定します。', '', '電子メールアドレスのカンマ区切りリスト', '');

$_tipsdb['vhlog_fileName'] = new DAttrHelp("File Name", 'ログファイルのパスを指定します。', '[パフォーマンス]ログファイルを別のディスクに配置します。', 'ファイル名への絶対パス又は$SERVER_ROOT、$VH_ROOTからの相対パス。', '');

$_tipsdb['vhlog_logLevel'] = new DAttrHelp("ログレベル", 'ロギングのレベルを指定します。 使用可能なレベルは、ERROR、WARNING、NOTICE、INFO、DEBUGです。 現在の設定以上のレベルのメッセージのみが記録されます。 DEBUGに設定する場合は、サーバログレベルをDEBUGに設定する必要があります。 デバッグのレベルは、&quot;デバッグレベル&quot;によってサーバーレベルでのみ制御されます。', '[パフォーマンス] &quot;デバッグレベル&quot;がNONE以外のレベルに設定されていない限り、DEBUGログレベルはパフォーマンスに影響を及ぼさず、推奨されます。', '選択', '');

$_tipsdb['viewlog'] = new DAttrHelp("サーバーログビューア", 'Tサーバーログビューアは、現在のサーバーログを参照してエラーまたは問題をチェックするための便利なツールです。 ログ・ビューアーは、サーバーログファイルを指定されたログ・レベルのブロックで検索します。 <br/><br/>デフォルトのブロックサイズは20KBです。 Begin、End、Next、Prevボタンを使用して、大きなログファイルをナビゲートできます。', '動的に生成されるページのサイズは、&quot;最大動的応答ボディサイズ（バイト）&quot;によって制限されます。 したがって、ブロックが大きすぎると、ページが切り捨てられることがあります。', '', '');

$_tipsdb['virtualHostMapping'] = new DAttrHelp("バーチャルホストマッピング", 'リスナーとバーチャルホストの関係を指定します。 リスナーとバーチャルホストはドメイン名によって関連付けられています。 HTTP要求は、一致するドメイン名を持つバーチャルホストにルーティングされます。 1つのリスナーは、異なるドメイン名の複数のバーチャルホストにマップできます。 1つのバーチャルホストを異なるリスナーからマップすることもできます。 1人のリスナーは、ドメイン名の値「*」を持つ1つのキャッチオールバーチャルホストを許可できます。 リスナーのマッピングに明示的に一致するドメイン名がない場合、 リスナーはその要求をそのキャッチオールバーチャルホストに転送します。', '[パフォーマンス]必要なマッピングのみを追加します。 リスナーが1つのバーチャルホストにのみマッピングされている場合は、キャッチオールマッピング &quot;*&quot;のみを設定します。', '', '');

$_tipsdb['virtualHostName'] = new DAttrHelp("バーチャルホスト", 'バーチャルホストの名前を指定します。', '', 'ドロップダウンリストから選択', '');

$_tipsdb['vname'] = new DAttrHelp("名前 - バーチャルホスト", 'このバーチャルホストを識別する一意の名前。 これは、このバーチャルホストを設定するときに指定した&quot;バーチャルホスト名&quot;です。', '', '', '');

$_tipsdb['vreload'] = new DAttrHelp("再起動 - バーチャルホスト", 'Restartアクションにより、Webサーバーはこのバーチャルホストの最新の構成をロードします。 処理中のリクエストは古い設定で終了します。 新しい設定は新しいリクエストにのみ適用されます。 バーチャルホストへのすべてのハングは、この方法でオンザフライで適用できます。', '', '', '');

$_tipsdb['vstatus'] = new DAttrHelp("ステータス - バーチャルホスト", 'バーチャルホストの現在のステータス。   ステータスはRunning、Stopped、Restart Required、またはRunning - Removed from onfigurationです。  <ul>     <li>Runningは、バーチャルホストがロードされ、サービス中であることを意味します。</li>     <li>Stoppedは、バーチャルホストがロードされていてもサービスされていない（無効になっている）ことを意味します。 </li>     <li>Restart Requiredは、これが新しく追加されたバーチャルホストであり、サーバがまだ設定をロードしていないことを意味します。 </li>     <li>Running - Removed from Configurationは、バーチャルホストがサーバの設定から削除されたが、まだ稼働中であることを意味します。 </li> </ul>', '', '', '');

$_tipsdb['wsaddr'] = new DAttrHelp("アドレス", 'WebSocketバックエンドによって使用される一意のソケットアドレス。 IPv4ソケット、IPv6ソケット、Unixドメインソケット（UDS）がサポートされています。 IPv4およびIPv6ソケットは、ネットワークを介した通信に使用できます。 UDSは、WebSocketバックエンドがサーバーと同じマシンに存在する場合にのみ使用できます。', '[セキュリティ] WebSocketバックエンドが同じマシン上で実行される場合、UDSが優先されます。 IPv4またはIPv6ソケットを使用する必要がある場合は、IPアドレスをlocalhostまたは127.0.0.1に設定して、WebSocketバックエンド 他のマシンからはアクセスできません。<br/>[パフォーマンス] Unixドメインソケットは、一般にIPv4またはIPv6ソケットよりも高いパフォーマンスを提供します。', 'IPv4またはIPV6アドレス：ポートまたはUDS：//パス', '127.0.0.1:5434 <br/>UDS://tmp/lshttpd/php.sock.');

$_tipsdb['wsgiBin'] = new DAttrHelp("WSGI Path", 'Path to LiteSpeed Python Web Server Gateway Interface executable (lswsgi).<br/><br/>This executable is created by compiling Python with LiteSpeed&#039;s WSGI LSAPI module.', '', '絶対パス', '');

$_tipsdb['wsgiDefaults'] = new DAttrHelp("Python WSGI Default Settings", 'Default configurations for Python WSGI applications. These settings can be overriden at the context level.', '', '', '');

$_tipsdb['wsuri'] = new DAttrHelp("URI", 'このWebSocketバックエンドを使用するURIを指定します。 このURIへのトラフィックは、WebSocketのアップグレード要求が含まれている場合にのみWebSocketバックエンドに転送されます。<br/><br/>このアップグレード要求のないトラフィックは、このURIが属するコンテキストに自動的に転送されます。 このURIに対してContextが存在しない場合、LSWSはこのトラフィックを、$DOC_ROOT/URIの場所で静的コンテキストにアクセスしているものとして扱います。', '', 'URIは、プレーンURI（ &quot;/&quot;で始まる）またはPerlと互換性のある正規表現URI（ &quot;exp：&quot;で始まる）にすることができます。 プレーンURIが &quot;/&quot;で終わる場合、このWebSocketバックエンドはこのURIの下にすべてのサブURIを含みます。', 'WebSocketプロキシをコンテキストとともに使用すると、同じページでさまざまな種類のトラフィックをさまざまな方法で処理できるため、パフォーマンスが最適化されます。 WebSocketトラフィックをWebSocketバックエンドに送信し、LSWSがページの静的コンテンツまたはLSAPIコンテキストを提供できるように静的コンテキストを設定し、LSWSがPHPコンテンツ（両方ともLSSがWebSocketバックエンドより効率的に機能する）を提供できるようにします。');


$_tipsdb['EDTP:GroupDBLocation'] = array('It is recommended that the database be stored under the $SERVER_ROOT/conf/vhosts/$VH_NAME/ directory.');

$_tipsdb['EDTP:UDBgroup'] = array('ここでグループ情報を入力すると、グループDBはチェックされません。','複数のグループを入力したり、カンマで区切ったりすることができます。 スペースはグループ名の一部として扱われます。');

$_tipsdb['EDTP:accessControl_allow'] = array('サーバー、バーチャルホスト、コンテキストレベルでアクセス制御を設定できます。 サーバーレベルでアクセス制御がある場合、サーバー規則が満たされた後にバーチャルホスト規則が適用されます。','入力形式は、192.168.0.2のようなIP、192.168.*のようなサブネットワーク、または192.168.128.5/255.255.128.0のようなサブネット/ネットマスクです。','信頼できるIPまたはサブネットワークをお持ちの場合は、192.168.1.* Tのような末尾の &quot;T&quot;を追加して許可リストに指定する必要があります。 信頼できるIPまたはサブネットワークは、接続/スロットリング制限によって制限されません。');

$_tipsdb['EDTP:accessControl_deny'] = array('特定のアドレスからのアクセスを拒否するには、許可リストに &quot;ALL&quot;を入れ、サブネットまたはIPを拒否リストに入れます。 特定のIPまたはサブネットのみがサイトにアクセスできるようにするには、拒否リストに &quot;ALL&quot;を入れ、許可リストにそのアドレスを指定します。');

$_tipsdb['EDTP:accessDenyDir'] = array('特定のディレクトリへのアクセスを拒否するにはフルパスを入力します。 *を続けてパスを入力すると、すべてのサブディレクトリが無効になります。','パスは、絶対パスでも、$SERVER_ROOTパスでも構いません。カンマで区切ります。','<b>シンボリックリンクを実行</ b>と<b>シンボリックリンクを確認</ b>の両方が有効な場合、シンボリックリンクは拒否されたディレクトリと照合されます。');

$_tipsdb['EDTP:accessLog_fileName'] = array('ログファイルのパスは絶対パスでも、$SERVER_ROOTからの相対パスでもかまいません。');

$_tipsdb['EDTP:aclogUseServer'] = array('必要に応じて、このバーチャルホストのアクセスログを無効にして、ディスクI/Oに節約することができます。');

$_tipsdb['EDTP:adminEmails'] = array('複数の管理用メールを入力することができます：カンマで区切ります。');

$_tipsdb['EDTP:adminOldPass'] = array('セキュリティ上の理由から、管理者パスワードを忘れた場合は、WebAdminコンソールから変更することはできません。  代わりに以下のシェルコマンドを使用してください：  <br><br> /usr/local/lsws/admin/misc/admpass.sh.  <br><br> このスクリプトは、入力されたすべての管理ユーザーIDを削除し、1人の管理ユーザーで上書きします。');

$_tipsdb['EDTP:allowBrowse'] = array('静的コンテキストを使用して、URIをドキュメントルートの外部またはその内部のディレクトリにマップできます。 ディレクトリは、ドキュメントルート（デフォルト）、$VH_ROOTまたは$SERVER_ROOTの絶対パスまたは相対パスにすることができます。','「アクセス可能」をチェックすると、このコンテキストで静的ファイルをブラウズできます。 静的ファイルを表示しないように無効にすることができます。 例えば コンテンツを更新するとき。');

$_tipsdb['EDTP:appType'] = array('','');

$_tipsdb['EDTP:as_location'] = array('The App Server context is for easy configuration of running Rack/Rails, WSGI, or Node.js applications. You only need to specify the root location of your application in the &quot;Location&quot; field.');

$_tipsdb['EDTP:as_startupfile'] = array('','');

$_tipsdb['EDTP:autoFix503'] = array('<b>自動修正 503 エラー</b>を有効にすると、監視プロセスによって自動的に新しいサーバープロセスが起動し、クラッシュが検出された場合にサービスが即座に再開します。');

$_tipsdb['EDTP:backlog'] = array('ローカルアプリケーションは、Webサーバーによって開始できます。 この場合、パス、バックログ、インスタンス数を指定する必要があります。');

$_tipsdb['EDTP:binPath'] = array('','');

$_tipsdb['EDTP:bubbleWrap'] = array('');

$_tipsdb['EDTP:bubbleWrapCmd'] = array('');

$_tipsdb['EDTP:cgi_path'] = array('CGIコンテキストを使用して、ディレクトリにCGIスクリプトのみを指定することができます。 パスは絶対パスでも、$SERVER_ROOT、$VH_ROOT、$DOC_ROOT（デフォルト）でもかまいません。 パスとURIは、cgi-binディレクトリのために &quot;/&quot;で終わらなければなりません。','そのディレクトリに特定のスクリプトだけが必要な場合は、そのスクリプトのCGIコンテキストを作成することをお勧めします。 この場合、pathとURIはディレクトリである必要はありません。 たとえば、pathは〜/myapp/myscript.pl、URIは/myapp/myscript.plです。 その他のファイルはすべてCGIとして提供されません。');

$_tipsdb['EDTP:checkSymbolLink'] = array('Check-Symbolic-Link制御は、Follow-Symbolic-Linkがオンになっている場合にのみ有効です。 これは、シンボリックリンクがアクセス拒否ディレクトリに対してチェックされるかどうかを制御します。');

$_tipsdb['EDTP:compressibleTypes'] = array('「圧縮可能タイプ」は、カンマで区切られた圧縮可能なMIMEタイプのリストです。 * / *、text / *などのMIMEタイプにワイルドカード &quot;*&quot;を使用できます。 あたたは、 &quot;！&quot; を特定のタイプを除外するために前面に置くことができます。 &quot;！&quot;を使用すると、リストの順序が重要になります。 たとえば、 &quot;text/*、！text/css、！text/js&quot;のようなリストは、cssとjsを除くすべてのテキストファイルを圧縮します。');

$_tipsdb['EDTP:ctxType'] = array('<b>静的</b>コンテキストを使用して、URIを文書のルートの外またはその内部のディレクトリにマップできます。','<b>Java Web アプリ</b>コンテキストは、AJPv13コンパイラJavaサーブレットエンジンで定義済みのJavaアプリケーションを自動的にインポートするために使用されます。','<b>サーブレット</b>コンテキストは、Webアプリケーションの下で特定のサーブレットをインポートするために使用されます。','<b>Fast CGI</b>コンテキストは、Fast CGIアプリケーションのマウントポイントです。','<b>LiteSpeed SAPI</b>コンテキストを使用して、URIをLSAPIアプリケーションに関連付けることができます。','<b>プロキシー</b>コンテキストでは、このバーチャルホストを透過的な逆プロキシー・サーバーとして外部Webサーバーまたはアプリケーション・サーバーに使用できます。','<b>CGI</b>コンテキストを使用して、ディレクトリにCGIスクリプトのみを指定することができます。','<b>ロードバランサー</b>コンテキストを使用して、そのコンテキストに異なるクラスタを割り当てることができます。','<b>リダイレクト</b>コンテキストでは、内部リダイレクトURIまたは外部リダイレクトURIを設定できます。','<b>Rack/Rails</b>コンテキストは、特にRack/Railsアプリケーションに使用されます。','<b>モジュールハンドラ</b>コンテキストは、ハンドラタイプモジュールのマウントポイントです。');

$_tipsdb['EDTP:docRoot'] = array('ここにドキュメントルートを設定します。これは絶対パスでも$SERV_ROOTまたは$VH_ROOTとの相対パスでもかまいません。','このバーチャルホストでは、ドキュメントルートは$DOC_ROOTと呼ばれ、他のパス設定で使用できます。');

$_tipsdb['EDTP:domainName'] = array('このリスナーに応答させるすべてのドメインを入力します。 個々のドメインを区切るには、カンマ「、」を使用します。','指定されていないすべてのドメインを処理するバーチャルホストを1つだけ選択し、ドメインに「*」を入れることができます。');

$_tipsdb['EDTP:enableDynGzipCompress'] = array('動的GZIP圧縮コントロールは、GZIP圧縮が有効な場合にのみ有効です。');

$_tipsdb['EDTP:enableExpires'] = array('Expiresは、Server / Virtual Host / Contextレベルで設定できます。 低いレベルの設定は、高いレベルの設定を上書きします。 上書き優先度の観点から： <br><br> コンテキストレベル > バーチャルホストレベル > サーバーレベル <br><br>');

$_tipsdb['EDTP:enableRecaptcha'] = array('When this setting is set to <b>Yes</b> at the Server level, reCAPTCHA Protection can still be disabled at the Virtual Host level.');

$_tipsdb['EDTP:errURL'] = array('さまざまなエラーコードに対してカスタムエラーページを設定できます。');

$_tipsdb['EDTP:expiresByType'] = array('タイプ別の期限のデフォルト設定を上書きします。 各エントリは、&quot;MIME-type=A|Mseconds&quot;の形式であり、間にスペースはありません。 カンマで区切って複数のエントリを入力できます。');

$_tipsdb['EDTP:expiresDefault'] = array('Expires構文では、 &quot;A | Mseconds&quot;は、基準時間（AまたはM）に指定された時間（秒）を加えた後、ファイルの有効期限が切れます。 「A」はクライアントのアクセス時間を意味し、「M」はファイルが変更された時間を意味する。 このデフォルト設定を異なるMIMEタイプで上書きすることができます.A86400は、クライアントのアクセス時間に基づいて1日後にファイルが期限切れになることを意味します。','1時間= 3600秒、1日= 86400秒、1週間= 604800秒、1ヶ月= 2592000秒、1年= 31536000秒という一般的な数字があります。');

$_tipsdb['EDTP:extAppAddress'] = array('アドレスは、UDS：//tmp/lshttpd/myfcgi.sockのように192.168.1.3:7777およびlocalhost：7777のようなIPv4ソケットアドレス &quot;IP：PORT&quot;またはUnixドメインソケットアドレス &quot;UDS：//path&quot;とすることができます。','UDSはchroot環境でchrootされます。','ローカルアプリケーションの場合、セキュリティとパフォーマンスが向上するため、Unixドメインソケットが優先されます。 IPv4ソケットを使用する必要がある場合は、IP部分をlocalhostまたは127.0.0.1に設定します。したがって、アプリケーションは他のマシンからアクセスできません。');

$_tipsdb['EDTP:extAppName'] = array('覚えやすい名前をつけ、他の場所はその名前でこのアプリを参照します。');

$_tipsdb['EDTP:extAppType'] = array('外部Fast CGIアプリケーションとAJPv13（Apache JServ Protocol v1.3）互換サーブレットエンジンを設定できます。');

$_tipsdb['EDTP:extWorkers'] = array('ロードバランサワーカーは、事前に定義されている必要があります。','使用可能なExtAppタイプは、fcgi（高速CGIアプリケーション）、LSAPIアプリケーション（LSAPIアプリケーション）、サーブレット（サーブレット/JSPエンジン）、プロキシ（Webサーバー）です。','1つの負荷分散クラスタに異なるタイプの外部アプリケーションを混在させることができます。');

$_tipsdb['EDTP:externalredirect'] = array('リダイレクトURIをここに設定します。 外部リダイレクトの場合は、ステータスコードを指定できます。 内部リダイレクトは「/」で始まり、外部リダイレクトは&quot;/&quot;または&quot;http(s)：//&quot;で始まります。');

$_tipsdb['EDTP:extraHeaders'] = array('The Header Operations setting is backwards compatible with the old &#039;header_name: value1,value2,...&#039; syntax, which is equivalent to setting the header + values using the &#039;Header&#039; directive.');

$_tipsdb['EDTP:fcgiapp'] = array('Fast CGIコンテキストは、Fast CGIアプリケーションのマウントポイントです。 Fast CGIアプリケーションは、サーバーレベルまたはバーチャルホストレベルであらかじめ定義されている必要があります。');

$_tipsdb['EDTP:followSymbolLink'] = array('Follow-Symbolic-Linkが有効になっている場合でも、バーチャルホストレベルでそれを無効にできます。');

$_tipsdb['EDTP:gdb_groupname'] = array('Group Name should comprise of letter and numbers only.');

$_tipsdb['EDTP:gzipCompressLevel'] = array('GZIP圧縮レベルの範囲は1（最小）〜9（最大）です。');

$_tipsdb['EDTP:hardLimit'] = array('ウェブページのコンテンツとトラフィックの負荷に応じて、{val}20{/}〜{val}50{/}の間で設定することをお勧めします。');

$_tipsdb['EDTP:indexUseServer'] = array('インデックスファイルのデフォルトのサーバーレベル設定を使用するか、独自のサーバーレベル設定を使用できます。','サーバーレベルの設定に加えて、設定を使用することができます。','インデックスファイルを無効にするには、サーバーレベルの設定を使用しないで、バーチャルレベルの設定を空白のままにします。','コンテキスト・レベルで「自動インデックス」を有効/無効にすることができます。');

$_tipsdb['EDTP:javaServletEngine'] = array('サーブレットエンジンが別のマシン上で動作する場合は、webappsディレクトリのコピーをローカルに作成することをお勧めします。 それ以外の場合は、アクセス可能な一般的なネットワークドライブにファイルを配置する必要があり、パフォーマンスに影響する可能性があります。');

$_tipsdb['EDTP:javaWebApp_location'] = array('JJava Webアプリケーションコンテキストは、AJPv13コンパイラJavaサーブレットエンジンで事前定義されたJavaアプリケーションを自動的にインポートするために使用されます。サーブレットエンジンは、外部アプリケーションセクション（サーバーまたはバーチャルホストレベルのいずれか）に設定する必要があります。','ロケーションはWEB-INF/サブディレクトリを含むWebアプリケーションファイルを含むディレクトリです。','Webサーバーは、自動的に &quot;location&quot;で指定されたドライバーのWEB-INF/web.xmlであるWebアプリケーションの構成ファイルをインポートします。');

$_tipsdb['EDTP:listenerIP'] = array('リストからIPアドレスを選択します。特定のアドレスを指定しない場合、システムはこのマシン上の使用可能なすべてのIPアドレスにバインドします。');

$_tipsdb['EDTP:listenerName'] = array('リスナーに理解しやすく覚えやすい名前を付けてください。');

$_tipsdb['EDTP:listenerPort'] = array('このリスナーに対して、このIP上に一意のポート番号を入力します。 スーパーユーザー（root）のみが1024より小さいポートを使用できます。 ポート80はデフォルトのHTTPポートです。 ポート443はデフォルトのHTTPSポートです。');

$_tipsdb['EDTP:listenerSecure'] = array('<b>セキュリティ</b>で[はい]を選択すると、このリスナーはhttpsを使用します。 これをSSL設定でさらに構成する必要があります。');

$_tipsdb['EDTP:logUseServer'] = array('<b>サーバーのログを使用する</b>に「はい」を選択すると、ログはサーバーレベルで設定されたサーバーファイルに書き込まれます。');

$_tipsdb['EDTP:log_enableStderrLog'] = array('Stderrログは、サーバーログと同じディレクトリにあります。 有効にすると、stderrへのすべての外部アプリケーション出力がこのファイルに記録されます。');

$_tipsdb['EDTP:log_fileName'] = array('ログファイルのパスは絶対パスでも、$SERVER_ROOTからの相対パスでもかまいません。');

$_tipsdb['EDTP:log_rollingSize'] = array('現在のログファイルがローリングサイズを超えると、新しいログファイルが作成されます。 ファイルサイズはバイト単位で、10240,10K、または1Mの複数の入力フォーマットにすることができます。');

$_tipsdb['EDTP:maxCGIInstances'] = array('CGIプログラムが使用できるリソースを制限します。 これは、DoS攻撃に役立ちます。','最大CGIインスタンスは、Webサーバーが起動できるCGIプロセスの数を制御します。');

$_tipsdb['EDTP:maxReqHeaderSize'] = array('数字は、10240,10K、または1Mとして表すことができます。');

$_tipsdb['EDTP:mime'] = array('MIME設定は前のページから編集できます。 mime構成ファイルの場所は、絶対パスでも、$SERVER_ROOTからの相対パスでも指定できます。');

$_tipsdb['EDTP:namespace'] = array('');

$_tipsdb['EDTP:namespaceConf'] = array('');

$_tipsdb['EDTP:nodeBin'] = array('');

$_tipsdb['EDTP:phpIniOverride'] = array('');

$_tipsdb['EDTP:procSoftLimit'] = array('プロセスソフト/ハードリミットは、1人のユーザーに許可されるプロセスの数を制御します。 これには、CGIアプリケーションによって生成されたすべてのプロセスが含まれます。 設定されていない場合、OSレベル制限が使用されます。','0または空に設定すると、すべてのソフト/ハードリミットにオペレーティングシステムのデフォルト値が使用されます。','ソフトリミットは、カーネルが対応するリソースに対して実施する値です。 ハードリミットは、ソフトリミットの上限として機能します。');

$_tipsdb['EDTP:proxyWebServer'] = array('プロキシコンテキストは、このバーチャルホストを透過的なリバースプロキシサーバとして機能させ、外部のWebサーバまたはアプリケーションサーバに提供します。','外部Webサーバーは、サーバーまたはバーチャルホストレベルで外部アプリケーションの下にあらかじめ定義されている必要があります。');

$_tipsdb['EDTP:realm'] = array('コンテキストは、バーチャルホストセキュリティセクションで設定されている定義済みのレルムで保護することができます。 必要に応じて、代替名と追加要件を指定することができます。');

$_tipsdb['EDTP:realmName'] = array('ここであなたのHT Accessレルムを定義します。これはコンテキストに使用できます。');

$_tipsdb['EDTP:recaptchaAllowedRobotHits'] = array('');

$_tipsdb['EDTP:recaptchaBotWhiteList'] = array('');

$_tipsdb['EDTP:recaptchaMaxTries'] = array('');

$_tipsdb['EDTP:recaptchaRegConnLimit'] = array('');

$_tipsdb['EDTP:recaptchaSecretKey'] = array('');

$_tipsdb['EDTP:recaptchaSiteKey'] = array('The server level site/secret key pair must be configured to skip domain checking if the server manages multiple domains. Otherwise, the reCAPTCHA verification will not work properly.');

$_tipsdb['EDTP:recaptchaSslConnLimit'] = array('');

$_tipsdb['EDTP:recaptchaType'] = array('');

$_tipsdb['EDTP:recaptchaVhReqLimit'] = array('');

$_tipsdb['EDTP:restrained'] = array('共有ホスティング環境での拘束をオンにします。');

$_tipsdb['EDTP:reusePort'] = array('');

$_tipsdb['EDTP:rewriteMapLocation'] = array('場所のURIを入力します。 URIは「/」で始まる必要があります。');

$_tipsdb['EDTP:rewriteRules'] = array('Only virtual host level rewrite rules should be used here, such as those found in an Apache virtual host config file. Do NOT add any document root level rewrite rules here. If you have any document root level rewrite rules from .htaccess, you should instead create a static context with uri &quot;/&quot; and add the rewrite rules there.');

$_tipsdb['EDTP:rubyBin'] = array('<b>Rubyパス</b>は、Ruby実行ファイルの絶対パスです。 たとえば、/usr/local/bin/ruby');

$_tipsdb['EDTP:serverName'] = array('サーバープロセスのユーザーおよびグループの設定は変更できません。 これはインストール時に設定されました。 このオプションを変更するには、再インストールする必要があります。');

$_tipsdb['EDTP:servletEngine'] = array('サーブレットエンジンが別のマシン上で動作する場合は、webappsディレクトリのコピーをローカルに作成することをお勧めします。 それ以外の場合は、アクセス可能な一般的なネットワークドライブにファイルを配置する必要があり、パフォーマンスに影響する可能性があります。');

$_tipsdb['EDTP:shHandlerName'] = array('CGIを除いて、他のハンドラは「外部アプリケーション」セクションで事前に定義する必要があります。');

$_tipsdb['EDTP:shType'] = array('スクリプトハンドラは、CGI、FCGIアプリ、モジュールハンドラ、サーブレットエンジン、またはWebサーバーへのプロキシにすることができます。');

$_tipsdb['EDTP:sndBufSize'] = array('数字は、10240,10K、または1Mとして表すことができます。','送信/受信バッファサイズが0の場合、OSのデフォルトTCPバッファサイズが使用されます。');

$_tipsdb['EDTP:softLimit'] = array('ここでIPレベルのスロットル制限を設定します。 番号は4K単位に切り上げられます。 スロットリングを無効にするには、「0」に設定します。','猶予期間中のハードリミットの間は、接続数が一時的にソフトリミットを超えることがあります。 猶予期間の後、まだソフトリミットを超えている場合、そのIPからの禁止期間の接続は許可されません。');

$_tipsdb['EDTP:sslSessionCache'] = array('Sセッションキャッシュを使用すると、クライアントはSSLハンドシェイクを再実行せずに一定時間内にセッションを再開できます。 これを行うには、<b>セッションキャッシュを有効にする</b>を使用するか、セッションチケットを作成して使用して、クライアントにセッションIDを割り当てます。');

$_tipsdb['EDTP:sslSessionTicketKeyFile'] = array('チケットがサーバーによって生成されている場合、セッションチケットは自動的にローテーションされます。 <b>SSLセッションチケットキーファイル</b>オプションを使用して独自のセッションチケットを作成および管理する場合は、cronジョブを使用してチケットを自分自身でローテーションする必要があります。');

$_tipsdb['EDTP:swappingDir'] = array('ディレクトリをスワップすることは、/tmpなどのローカルディスクに配置することをお勧めします。 ネットワークドライブは絶対に避けてください。 スワップは、設定されたメモリのI/Oバッファが使い果たされたときに行われます。');

$_tipsdb['EDTP:userDBLocation'] = array('It is recommended that the database be stored under the $SERVER_ROOT/conf/vhosts/$VH_NAME/ directory.');

$_tipsdb['EDTP:vhRoot'] = array('全てのディレクトリがあらかじめ存在する必要があります。 このWebインターフェイスでは、ディレクトリは作成されません。 新しいバーチャルホストを作成する場合は、空のルートディレクトリを作成して最初から設定することができます。 パッケージに同梱されている &quot;例&quot;バーチャルルートをこのバーチャルホストルートにコピーして変更することができます。','バーチャルホストルート（$VH_ROOT）は、絶対パスでも、$SERVER_ROOTに関連してもかまいません。');

$_tipsdb['EDTP:vhaccessLog_fileName'] = array('ログファイルのパスは絶対パスまたは$SERVER_ROOT、$VH_ROOTの相対パスにすることができます。');

$_tipsdb['EDTP:vhadminEmails'] = array('カンマで区切って複数の管理用メールを入力できます。');

$_tipsdb['EDTP:vhlog_fileName'] = array('ログファイルのパスは絶対パスでも、$SERVER_ROOT、$VH_ROOTからの相対パスでもかまいません。','ログ・レベルをDEBUGに設定する場合は、サーバー・ログ・レベルもDEBUGに設定する必要があります。 デバッグのレベルは、サーバーDEBUGレベルによって制御されます。  DEBUGを使用するのは、サーバーのパフォーマンスに大きな影響を与え、ディスクスペースをすばやく埋める必要がある場合のみです。');

$_tipsdb['EDTP:virtualHostName'] = array('このリスナーにマップするバーチャルホストを選択します。','マッピングするバーチャルホストを設定していない場合は、この手順をスキップして後で戻ってください。');

$_tipsdb['EDTP:wsgiBin'] = array('');
