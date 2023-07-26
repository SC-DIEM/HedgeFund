<?php
/*
Template Name: LP01
*/
?>

<?php
//if (isset($_GET['utm_source'])) {
//    $utm_source = htmlentities($_GET['utm_source'], ENT_QUOTES, "UTF-8");
//    setcookie("cookie_source", $utm_source);
//}
//if (isset($_GET['utm_medium'])) {
//    $utm_medium = htmlentities($_GET['utm_medium'], ENT_QUOTES, "UTF-8");
//    setcookie("cookie_medium", $utm_medium);
//}
//if (isset($_GET['utm_campaign'])) {
//    $utm_campaign = htmlentities($_GET['utm_campaign'], ENT_QUOTES, "UTF-8");
//    setcookie("cookie_campaign", $utm_campaign);
//}
//if (isset($_GET['gclid'])) {
//    $gclid = htmlentities($_GET['gclid'], ENT_QUOTES, "UTF-8");
//    setcookie("cookie_gclid", $gclid);
//}
//if (isset($_GET['yclid'])) {
//    $yclid = htmlentities($_GET['yclid'], ENT_QUOTES, "UTF-8");
//    setcookie("cookie_yclid", $yclid);
//}
//$docuroot = $_SERVER['DOCUMENT_ROOT']; 
$domain = $_SERVER['SERVER_NAME'];
$pageName = $_SERVER['REQUEST_URI'];
//$root = ""; 
$siteUrl = (empty($_SERVER['HTTPS']) ? "http://" : "https://") . $domain;

//----------------------------

$title = "ヘッジファンドダイレクト株式会社｜有名海外ヘッジファンドで実績豊富なプロと勝つ資産運用を";
$keywords = "ヘッジファンドダイレクト,ヘッジファンド,海外投資,海外ファンド,直接投資,投資助言,オフショア投資,オフショアファンド,富裕層";
$description = "ヘッジファンドに投資するならヘッジファンドダイレクト。投資助言契約額は累計1361.3億円で業界No.1。富裕層向け海外ファンド投資助言で創業15年。";
//----------------------------
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=0">

    <title><?php echo $title; ?></title>
    <meta name="keywords" content="<?php echo $keywords; ?>" />
    <meta name="description" content="<?php echo $description; ?>" />
    <link rel="icon" href="<?php bloginfo('template_directory') ?>/img/lp/texted01/favicon.ico">

    <?php /* タグ情報追加 start */ ?>
    <meta property="og:title" content="<?php echo $title; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="<?php echo $description; ?>" />
    <meta property="og:url" content="<?php echo $siteUrl . $pageName; ?>" />
    <meta property="og:image" content="<?php bloginfo('template_directory') ?>/img/lp/texted01/ogp_img.jpg" />
    <link rel="canonical" href="<?php echo $siteUrl . $pageName; ?>">
    <?php /* タグ情報追加 end */ ?>


    <script>
        var agent = window.navigator.userAgent.toLowerCase();
        var ipad = agent.indexOf('ipad') > -1 || agent.indexOf('macintosh') > -1 && 'ontouchend' in document;
        if (ipad == true) {
            viewportContent = "width=1400";
            document.querySelector("meta[name='viewport']").setAttribute("content", viewportContent);
        }
    </script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style_textedLp01.css">

    <?php wp_head(); ?>

    <?php get_template_part('include/common_head'); ?>

</head>

<body>

    <?php get_template_part('include/common_body'); ?>

    <div id="wrapper">

        <header>
            <div class="inner">
                <h1 class="logomark"><img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/logomark.svg" alt="ヘッジファンドダイレクト株式会社"></h1>
                <div class="contact">
                    <div class="tel pcmode">
                        <a href="tel:0120-104-359">0120-104-359</a>
                        <span>10時~19時（祝日、年末年始を除く）</span>
                    </div>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/request/document')); ?>" target="_blank">資料請求</a></li>
                        <li><a href="<?php echo esc_url(home_url('/request/contact')); ?>" target="_blank">個別相談</a></li>
                    </ul>
                </div>
            </div>
        </header>



        <div id="container" class="">

            <div class="edit-area keyvisual">
                <div class="inner w960">
                    <div class="box">
                        <div class="catch">
                            ご投資額&nbsp;&nbsp;<span>2,000</span>万円以上&nbsp;&nbsp;の方限定
                        </div>
                        <h2 class="title">
                            <span class="line">平均年利<span class="num">10<span>％</span></span>以上、</span>
                            <span class="line"><span class="num">10</span>年間以上継続！</span>
                        </h2>
                        <p>有名海外ヘッジファンドと<br>実績豊富なプロと勝つ資産運用を</p>
                    </div>
                </div>
            </div>
            <!-- edit-area keyvisual -->


            <!-- underbar_cta -->
            <div id="bottomCta">
                <div class="bottomCtaInner">
                    <ul>
                        <li class="tell">
                            <div class="pcmode">
                                <a href="tel:0120-104-359">0120-104-359</a>
                                <span>10時~19時（祝日、年末年始を除く）</span>
                            </div>
                            <div class="spmode">
                                <a href="tel:0120-104-359"><img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/tel-icon01.svg" alt="電話問合せ"></a>
                            </div>
                        </li>
                        <li class="requestCtaButton requestDocument"><a href="<?php echo esc_url(home_url('/request/contact')); ?>" target="_blank">個別相談(無料)▶</a></li>
                        <li class="requestCtaButton requestContact"><a href="<?php echo esc_url(home_url('/request/document')); ?>" target="_blank">資料請求(無料)▶</a></li>
                    </ul>
                </div>
            </div>
            <!-- underbar_cta -->

            <div class="edit-area type03">
                <div class="inner w1080">

                    <h3>世界の富裕層や機関投資家が<br>ヘッジファンドで資産運用をする<br class="pcmode"><span>3つの理由</span></h3>

                    <div class="photo-set type01 mb100">
                        <div class="txt spmode">
                            <h4 title="01">ヘッジファンドは「アセットクラス」、リスク・リターンの実績が一番良い！</h4>
                        </div>
                        <div class="photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/type03-img01.jpg" alt="各種金融商品のリスクリターン分布図">
                        </div>
                        <div class="txt">
                            <h4 title="01" class="pcmode">ヘッジファンドは「アセットクラス」、リスク・リターンの実績が一番良い！</h4>
                            <dl>
                                <dt>運用効率を測るシャープレシオを確認すると、ヘッジファンドが1.6近くなり、他の資産より数値が高いことが分かる</dt>
                                <dd>
                                    <p>一般的に、投資対象となる株や債券などの資産の種類や分類のことを「アセットクラス」と呼びます。アセットクラス毎のリターンとリスクの実績（2000年～2020年7月）を表にすると、図のようになります。運用効率を測るためにリターンをリスクで割ったシャープレシオを確認すると、ヘッジファンドが1.6近くなり、他の資産より高いことが分かります。つまりヘッジファンドは低リスクで高いリターンの実績を持ったアセットクラスということです。</p>
                                    <p class="cap">表の見方<br>
                                        もしあなたが７％以上のリターンを求めているなら、縦軸の７％のあたりを左から順に見ていけば、リスクが低い順に投資対象が並んでいます。また横軸を見てください。ヘッジファンドは金（ゴールド）や世界株、日本株よりもリスクが低いことが分かります。<br><br>つまり投資対象を実績で選ぶなら、「低リスクで高リターン」のヘッジファンドへの投資が合理的と言えます。</p>
                                </dd>
                            </dl>
                        </div>
                    </div>





                    <div class="photo-set type02 mb100">
                        <div class="txt">
                            <h4 title="02">相場に左右されない！リスクを抑えた運用ができる！</h4>
                        </div>
                        <div class="box">
                            <div class="photo">
                                <img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/type03-img02.jpg" alt="リーマンショック時2008年、ヘッジファンドBは+55.57%に対し、世界株は-42.7％">
                            </div>
                            <div class="txt">
                                <dl>
                                    <dt>ヘッジファンドなら、<br class="pcmode">リーマンショックのような下落相場でも55％リターンが可能<br class="pcmode">2020年3月コロナショック時にも8.8％プラス</dt>
                                    <dd>
                                        <p>一般的に推奨される「国際分散投資ポートフォリオ」では、2008年に起きた世界同時株安に対応できず、世界株で約▲42％の損失がでました。<br>当時は「分散投資をしていれば安心」と信じられていたのですが、実際には金融危機においては株の他、不動産や鉱物、原油などのほとんどのアセットクラスが同時に下落してしまったのです。他方で、優良なヘッジファンドであれば、リーマンショックのような下落相場でも55％リターンを出すことに成功しています。2020年3月のコロナショック時にも8.8％プラスとなりました。<br>左の図は、世界株式とヘッジファンドB（当社助言対象）との比較です。将来起こりうる金融危機に備えた資産運用を行うのが賢い投資家といえます。</p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                        <div class="box">
                            <div class="photo">
                                <img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/type03-img03.jpg" alt="ハーバード大学のポートフォリオ例">
                            </div>
                            <div class="txt">
                                <dl>
                                    <dt>世界の富裕層や機関投資家は、<br class="pcmode">投資ポートフォリオにヘッジファンドを入れ<br class="pcmode">投資全体のリスクをヘッジ（回避）している</dt>
                                    <dd>
                                        <p>ハーバード大学では、資産全体の1/3程度をヘッジファンドに割り当てています。（2019年6末時点）<br>世界の富裕層や年金基金等の機関投資家は、ポートフォリオの中に「株や債券と異なる値動きをするアセットクラス」であるヘッジファンドを入れることで、ポートフォリオ全体のリスクをヘッジ（回避）しています。左の図は世界最高の運用集団と称されるハーバード大学基金のポートフォリオです。最先端の研究成果に基づく意思決定には学ぶことが多いと言えます。</p>
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>




                    <div class="photo-set type01">
                        <div class="txt spmode">
                            <h4 title="03">実績の証明ができる<br class="pcmode">真のプロにお任せする方が合理的</h4>
                        </div>
                        <div class="photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/MrDavidTepper.jpg" alt="ファンドマネージャーのデイビットテッパー">
                            <small class="font_size_05em">David&nbsp;Tepper&nbsp;/&nbsp;Appaloosia&nbsp;Management&nbsp;L.P.<br>ゆかしウェルスメディア株式会社より</small>
                        </div>
                        <div class="txt">
                            <h4 title="03" class="pcmode">実績の証明ができる<br class="pcmode">真のプロにお任せする方が合理的</h4>
                            <dl>
                                <dt>日本で販売されている投資信託にインデックスに勝るような優秀なアクティブファンドはほぼ存在しない</dt>
                                <dd>
                                    <p>あなたが投資信託を購入することは、ファンド・マネージャーに資産運用を任すことを意味しています。ところが、日本で販売されている投資信託には、インデックスに勝るような優秀なアクティブファンドはほとんど存在しません。どうして、日本には優秀なファンド・マネージャーがいないのでしょうか？その理由は、日本の証券会社が販売手数料を目当てに短期売買を顧客に強いる傾向があったため、長期的に優良な運用実績を出せる運用商品・運用会社が育たなかったからであると言われています（2015年金融庁行政方針）。</p>
                                </dd>
                            </dl>

                            <dl>
                                <dt>ヘッジファンドを購入するということは、<br class="pcmode">世界トップレベルのファンド・マネージャーを自分のために雇い、資金運用してもらうことを意味する</dt>
                                <dd>
                                    <p>そこで、視野をグローバルに広げてみましょう。金融先進国の海外には長期間に渡り優良な実績を出す運用会社が多数存在しています。写真はファンド・マネージャーであるデビット・テッパー氏です。その最大の年収は3,500億円で、当時のセブンイレブンの年間営業利益より稼いでおり、その豊富な資金で世界中から情報を集め、運用収益を出しています。金融商品であるヘッジファンドを購入するということは、彼のような世界トップレベルのファンド・マネージャーを自分のために雇い、あなたの資金を運用してもらうことを意味しています。</p>
                                </dd>
                            </dl>

                            <dl>
                                <dt>投資経験のある日本人の約7割が通算成績で損をしていますあなた自身の過去実績はいかがですか？</dt>
                                <dd>
                                    <p>かつて当社が行った調査では、投資をしたことのある日本人のおよそ7割が通算成績で損をしていましたが、あなた自身の過去実績はいかがですか？著名ヘッジファンドのように「過去10年間の平均年率リターンが10％以上」の実績をまだ出したことがないなら、自己流で投資対象の売買をするよりも、優秀なエリートに資産運用をアウトソースしてみるのはいかがでしょうか？　少なくとも、自分自身で運用するよりは上手に運用できることが期待できます。何よりも、自分で運用する場合にかかる膨大な時間と手間と調査分析費用、トレーディングシステムへの設備投資を省くことができます。本業や社交で忙しい富裕層にこそふさわしい投資法が、優秀なヘッジファンドへの投資なのです。</p>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            <!-- edit-area type03 -->






            <div class="edit-area type04">
                <div class="inner wfull-100">


                    <h3>優秀なヘッジファンドを<br class="spmode">ご紹介</h3>

                    <div class="photo-set">
                        <div class="txt">
                            <h4>運用実績は世界トップ級。</h4>
                            <p>平均リターン17.6%のグローバルマクロ戦略ヘッジファンドA</p>
                        </div>
                        <div class="photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/hedgefund_a_graph_til_202207.jpg" alt="ヘッジファンドAの実績グラフ">
                            <small>（期間：2006年10月～2022年7月）</small>
                        </div>
                        <div class="txt">
                            <dl>
                                <dt>ヘッジファンドA 特長</dt>
                                <dd>2006年の設定来トータルリターンは1,194.6%のプラス（2022年7月末時点）。2019年には68%プラスを記録し、グローバルマクロ戦略の中でもトップクラスの実績を記録しました。投資先のファンドは運用期間が15年を超え、運用残高も4000億円を超えてきており、成熟期に入ってきています。新規資金を受け付ける期間はそう長くないと推定されます。積極的に高いリターンを目指す方に人気です。現在3年以上の長期の投資家のみ受け付けています。</dd>
                            </dl>
                        </div>
                    </div>


                    <div class="photo-set">
                        <div class="txt">
                            <h4>リーマンショックの年に55％プラス。</h4>
                            <p>平均リターン10％超のAI運用ヘッジファンドB</p>
                        </div>
                        <div class="photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/hedgefund_b_graph_til_202207.jpg" alt="ヘッジファンドBの実績グラフ">
                            <small>（期間：1999年5月～2022年7月）</small>
                        </div>
                        <div class="txt">
                            <dl>
                                <dt>ヘッジファンドB 特長</dt>
                                <dd>1999年の設定来トータルリターンは985％のプラス（2022年7月末時点）。危機に強いトレンドフォロー戦略を採用しています。リーマンショックのあった2008年は年間で55.7％プラスを記録し、2020年3月のコロナショックの月も8.8％のプラスを記録しています。ロシアのウクライナ侵攻のあった2022年は、6月までの実績で世界株が-21.2%に対して、このヘッジファンドは25.2%プラスでした。<br>受賞歴：HFM US performance awards 2018　Managed futures/CTA - over $1bn　winners<br>株式との相関性が低いため、株式に投資されている方に人気です。</dd>
                            </dl>
                        </div>
                    </div>

                    <div class="photo-set">
                        <div class="txt">
                            <h4>20年以上安定的な運用成績を誇る！</h4>
                            <p>富裕層に人気のヘッジファンドC</p>
                        </div>
                        <div class="photo">
                            <img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/hedgefund_c_graph_til_202207_fix.jpg" alt="ヘッジファンドCの実績グラフ">
                            <small>（期間：1998年4月～2022年7月）</small>
                        </div>
                        <div class="txt">
                            <dl>
                                <dt>ヘッジファンドC 特長</dt>
                                <dd>1998年の設定来トータルリターンは345％のプラス（2022年7月末時点）。複数のヘッジファンドに分散投資するファンドオブヘッジファンズ戦略で運用することで、過去において極めて価格変動リスクを抑えた形での運用を実現しています。<br>受賞歴：Hedge Funds Review 20th Anniversary European Performance Awards 2020Best diversified FoHF over 20 years　- winner<br>
                                    資産保全目的の安定的な運用を目指す方に人気です。</dd>
                            </dl>
                        </div>
                    </div>


                </div>
            </div>
            <!-- edit-area type04 -->




            <div class="edit-area type02">
                <h3>助言実績・お客様の声</h3>
                <div class="white-zone">
                    <div class="inner">

                        <div class="block column">

                            <h4>助言実績</h4>
                            <div class="box">
                                <div class="item half">
                                    <dl>
                                        <dt>サービス継続率<span>※2022年度実績</span></dt>
                                        <dd>95.6<span>%</span></dd>
                                    </dl>
                                </div>
                                <div class="item half">
                                    <dl>
                                        <dt>投資助言契約額累計<span>※2022年12月末時点</span></dt>
                                        <dd>1361.3<span>億円</span></dd>
                                    </dl>
                                </div>
                                <div class="item">
                                    <dl>
                                        <dt>メディア掲載実績</dt>
                                        <dd>
                                            <ul>
                                                <li>日本経済新聞</li>
                                                <li>日経ヴェリタス</li>
                                                <li>NHK</li>
                                                <li>Reuters</li>
                                                <li>ダイヤモンドオンライン</li>
                                            </ul>
                                        </dd>
                                    </dl>
                                </div>
                            </div>

                        </div>



                        <div class="block faq">

                            <h4>「決めた理由は、その実績です」<span>ヘッジファンドへの投資に成功した富裕層の声</span></h4>


                            <div class="photo-set">

                                <div class="photo">
                                    <img class="pcmode" src="<?php bloginfo('template_directory') ?>/img/lp/texted01/type02-img01.jpg" alt="ヘッジファンドダイレクト株式会社">
                                    <img class="spmode" src="<?php bloginfo('template_directory') ?>/img/lp/texted01/type02-img01_sp.jpg" alt="ヘッジファンドダイレクト株式会社">
                                </div>


                                <dl>
                                    <dt><span>資産運用のきっかけを教えてください</span></dt>
                                    <dd>不動産は毎年の固定資産税がリスク。相続税、あれを払い続けたら元は無いですよ。日本では過去、資産凍結や農地改革で資産を取られていますし。固定資産は危険資産だと思い、ある程度、不動産を売却・整理して、金融資産で運用を開始しました。</dd>

                                    <dt><span>ヘッジファンドダイレクト㈱へ何故選び、<br>ヘッジファンドに投資したのですか？</span></dt>
                                    <dd>虎の子の資産ですから、アドバイザーは、手数料より信頼で選ぶ主義です。<br>
                                        自ら金融資産1億円以上を有する富裕層として多くの金融機関と取引してきました。<br>
                                        調べる中で、海外の優良ファンドに個人が直接投資しようとして、投資助言会社のヘッジファンドダイレクトに行き着きました。同社から紹介された優良ファンドは、過去1回しかマイナスが出てなかった。リターンもさることながら、マイナスが1回しかないという「実績」が私にとっては一番大きな投資理由でした。</dd>
                                </dl>


                            </div>

                        </div>



                        <div class="block column">

                            <h4>お客様の声</h4>
                            <div class="box">
                                <div class="item voice">
                                    <div class="title">
                                        「ヘッジファンドに投資をするのが夢」
                                        <span class="name">出版社役員　50代男性</span>
                                    </div>
                                    <dl class="comment">
                                        <dt>欧米の社交界ではヘッジファンドの話題をするのがステイタス</dt>
                                        <dd>私は以前からヘッジファンドに関心はありました。ただし、ヘッジファンドは超富裕層向けや一部の機関投資家しか投資できなかったり、はたまた破綻したりするハイリスク・ハイリターンな危険な存在とされています。<br>そもそも日本には情報が少ないです。ところが、ヘッジファンドダイレクトのアドバイスに従うと、自分の投資できるヘッジファンドを探すことができました。シャープレシオや年率リターンなどの運用実績を他の投資信託などと比較して、賢く投資したいです。自分に合うヘッジファンドがあれば、投資するつもりです。</dd>
                                    </dl>
                                </div>
                                <div class="item voice">
                                    <div class="title">
                                        憧れのヘッジファンド投資に挑戦！
                                        <span class="name">出版社役員　50代男性</span>
                                    </div>
                                    <dl class="comment">
                                        <dt>日本で購入した金融商品に満足できないならヘッジファンド</dt>
                                        <dd>今まで日本の証券会社や、外資系金融からは紹介されたこともなかった高い利回りの金融商品があることを知りました。それは世界的に有名な賞を受賞している一流品で実績も将来性も申し分ないと感じました。さすが、富裕層顧客に強いヘッジファンドダイレクトさんだと感心しました。今まで日本で購入していた金融商品の「結果」・「実績」に満足できない人にはヘッジファンドダイレクトさんのノウハウはお勧めです。大手銀行や証券会社で直接話を聞いたりネットで検索したり、自力で調べた範囲ですが、個人向けの海外ファンドの取扱実績と専門性が１番なのはヘッジファンドダイレクトさんだと思いました。時間を無駄にしないように、まずは「実績」がある会社に相談してみるのをお勧めします。</dd>
                                    </dl>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <!-- edit-area type02 -->







            <div class="edit-area type05">
                <div class="inner wfull-100">

                    <h3>ご相談の流れ</h3>

                    <div class="block">
                        <div class="box">
                            <div class="photo"><img class="object-fit" src="<?php bloginfo('template_directory') ?>/img/lp/texted01/type05-img01.jpg" alt="資料請求画像"></div>
                            <dl>
                                <dt>資料請求</dt>
                                <dd>弊社で紹介実績のあるヘッジファンドの実績資料をお送りいたします。まずは優秀なヘッジファンドの実績をご確認ください。</dd>
                            </dl>
                        </div>
                        <div class="box">
                            <div class="photo"><img class="object-fit" src="<?php echo $siteUrl; ?>/wp-content/uploads/2023/01/interview_hedgefund-direct.webp" alt="個別面談画像"></div>
                            <dl>
                                <dt>ご面談</dt>
                                <dd>すぐに相談したい、もしくは実績資料にご納得いただけた場合、面談へとお進みいただけます。ご来社またはオンラインでの面談が可能です。</dd>
                            </dl>
                        </div>
                        <div class="box">
                            <div class="photo"><img class="object-fit" src="<?php bloginfo('template_directory') ?>/img/lp/texted01/type05-img03.jpg" alt="入会手続き画像"></div>
                            <dl>
                                <dt>入会・ファンド申込</dt>
                                <dd>各種契約書のお取り交わしをもってファンド申込み、入会手続きを実施します。</dd>
                            </dl>
                        </div>
                        <div class="box">
                            <div class="photo"><img class="object-fit" src="<?php bloginfo('template_directory') ?>/img/lp/texted01/type05-img04.jpg" alt="継続的な相談画像"></div>
                            <dl>
                                <dt>投資後の継続的な投資相談</dt>
                                <dd>投資後も継続的に投資のご相談をいただけます。ご契約者様のみに提供する情報もご案内します。</dd>
                            </dl>
                        </div>
                    </div>

                </div>
            </div>
            <!-- edit-area type05 -->

            <!-- オフィス紹介 -->
            <div class="edit-area type05">
                <div class="inner w960">
                    <h3>オフィス紹介</h3>
                    <div class="block">
                        <div class="box">
                            <div class="photo"><img class="object-fit" src="<?php echo $siteUrl; ?>/wp-content/uploads/2022/12/entrance_hfdOffice-scaled.jpg" alt="ヘッジファンドダイレクトのエントランス"></div>
                            <dl>
                                <dt>エントランス</dt>
                                <dd>面談にお越しの際は、受付テーブルの電話をお取りいただき、面談にお越しの旨をお伝えください。</dd>
                            </dl>
                        </div>
                        <div class="box">
                            <div class="photo"><img class="object-fit" src="<?php echo $siteUrl; ?>/wp-content/uploads/2022/12/hallWay_hfdOffice-scaled.jpg" alt="ヘッジファンドダイレクトの廊下"></div>
                            <dl>
                                <dt>廊下</dt>
                                <dd>窓に面した応接室まで、係の者がご案内いたします。</dd>
                            </dl>
                        </div>
                        <div class="box">
                            <div class="photo"><img class="object-fit" src="<?php echo $siteUrl; ?>/wp-content/uploads/2022/12/meetingRoom_hfdOffice-scaled.jpg" alt="ヘッジファンドダイレクトの応接室"></div>
                            <dl>
                                <dt>応接室</dt>
                                <dd>お客様の専属担当が、お客様の資産運用のお悩みなどを伺った上で、最適なプランをご提案いたします。</dd>
                            </dl>
                        </div>
                        <div class="box">
                            <div class="photo"><img class="object-fit" src="<?php echo $siteUrl; ?>/wp-content/uploads/2022/12/centerArea_hfdOffice-scaled.jpg" alt="ヘッジファンドダイレクトのコミュニケーションスペース"></div>
                            <dl>
                                <dt>コミュニケーションスペース</dt>
                                <dd>調和をテーマとした、円形のスペースがオフィス中央にございます。</dd>
                            </dl>
                        </div>
                    </div>
                </div>
            </div>
            <!-- オフィス紹介 -->


            <div class="edit-area contact">
                <div class="inner w960">

                    <div class="title">どんなことでも<br class="spmode">お気軽にご相談ください</div>
                    <div class="box">
                        <div class="tel">
                            <a href="tel:0120-104-359">0120-104-359</a>
                            <span>営業時間:月曜~金曜 10時~19時（祝日年末年始を除く）</span>
                        </div>
                        <ul class="link">
                            <li><a href="<?php echo esc_url(home_url('/request/document')); ?>" target="_blank">もっと知りたい<span>資料請求</span></a></li>
                            <li><a href="<?php echo esc_url(home_url('/request/contact')); ?>" target="_blank">メールで予約<span>個別相談</span></a></li>
                        </ul>
                    </div>

                </div>
            </div>
            <!-- edit-area contact -->







            <div class="edit-area type06">
                <h3>―CM放送中―</h3>
                <p>【プライベートジェット編】</p>
                <div class="inner w960">
                    <iframe src="https://www.youtube.com/embed/GStjZbCO14o"></iframe>
                </div>
            </div>
            <!-- edit-area type06 -->





            <div class="edit-area type07">
                <div class="inner">

                    <h3>当社のお客様属性</h3>

                    <ul>
                        <li><img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/type07-img01.jpg" alt="お客様の年代内訳グラフ"></li>
                        <li><img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/type07-img02.jpg" alt="お客様の性別内訳グラフ"></li>
                    </ul>
                </div>
            </div>
            <!-- edit-area type07 -->








            <div class="edit-area type08">
                <h3>よくあるご質問</h3>
                <div class="inner w1080">
                    <dl>
                        <dt><span>御社はどうして一流のヘッジファンドの情報を集めることができるのですか？</span></dt>
                        <dd><span>個人投資家向けの海外ファンド・ヘッジファンドに関する投資助言業者として国内最大級の助言実績があるため、欧米のヘッジファンド業界とのネットワークが確立しているからです。</span></dd>
                    </dl>
                    <dl>
                        <dt><span>ヘッジファンドに投資するための費用・コストを教えてください。</span></dt>
                        <dd><span>ヘッジファンドの過去実績は、運用会社が徴収する手数料をすべて差し引いた後の「コスト差引後のリターン」で表記されています。当サービスのご利用（専門家への相談・各種ファンド情報の入手）は無料です。当社のアドバイザリーに基づきヘッジファンドに投資をする場合には、投資額に応じて当社に対する投資助言手数料が発生します。また、当社以外に投資に係る事務手数料等が別途必要になる場合があります。ヘッジファンドにより各種費用が異なります。詳しくはご利用時に個別にお尋ねください。投資助言手数料の詳細につきましては、担当コンサルタントより交付する投資助言契約書を十分にお読みください。</span></dd>
                    </dl>
                    <dl>
                        <dt><span>投資助言サービスの内容を教えてください。</span></dt>
                        <dd><span>投資家サイドに立った「バイヤーズ・エージェント」の立場で、お客様に相応しいヘッジファンドの提案、投資に関するアドバイス、投資後のファンドのモニタリング、投資したファンドからのレポートの説明、ファンド売却による現金化の支援等、入口から出口まであなたの投資を専門家がサポートします。</span></dd>
                    </dl>
                    <dl>
                        <dt><span>御社は投資助言業で関東財務局に登録されていますが、銀行・証券会社との違いは何ですか？</span></dt>
                        <dd><span>銀行・証券会社は、金融商品の販売業です。販売業者は、金融商品の販売手数料が主な収益源なので、お客様の資産増加ではなく、金融商品販売そのものを優先する場合があります。<br>対して、投資助言業はバイサイドです。お客様の投資が成功して資産残高が増加すればするほど、収益が拡大するため、常に投資家サイドに立ったアドバイスが可能になります。お客様にファンドを紹介するにあたり、運用会社・販売会社（セルサイド）から販売手数料・広告料等の名目を問わず、直接・間接に関わらず当社は一切受領していません。</span></dd>
                    </dl>
                    <dl>
                        <dt><span>なぜ日本には「過去10年間年平均リターン10％以上」の優秀なファンドがあまりないのですか？</span></dt>
                        <dd><span>そのような高成績のファンドは、国内の投資信託には存在しません（2016年2月末 モーニングスター公表データを拠り所として当社調査済み、SMA/DCを除く投資信託全5,090本を対象）。残念なことに日本に優良なファンドが育たなかった理由は、大手販売会社が原因と言われています。詳細は金融庁「金融審議会」の資料並びに以下のオンライン書籍をご確認ください。</span></dd>
                    </dl>
                </div>
            </div>
            <!-- edit-area type08 -->







            <div class="edit-area type09">
                <div class="inner">
                    <h3>最後にもうひとつ<br><span>大切なQ&A</span></h3>

                    <dl class="qa">
                        <dt><span>過去に業務停止命令を受けたというのは本当ですか？</span></dt>
                        <dd>
                            <p><span>はい、当社の前身の会社が2013年10月に6か月間の行政処分を受けました。<br>
                                    海外ファンド助言業者は新しい業態であったことから、規制強化の観点から同時期に同業者10社に対して行政処分が行われました。<br>
                                    ※経緯の詳細は公式HPの「<a href="<?php echo esc_url(home_url('/company/improvement/')); ?>" target="_blank">行政処分に係る業務改善完了について金融庁公式HPに掲載</a>」をご確認ください。</span></p>
                        </dd>
                    </dl>

                    <div class="box">
                        <dl>
                            <dt>ですが、ご安心ください。</dt>
                            <dd>
                                <p>既に<span>「業務改善済み」と金融庁の公式HP</span>に公表されております（上記リンクからご覧ください）<br>
                                    当社に対する処分事由は、顧客資産を棄損した等ではなく、当該新事業に必要なライセンス（登録）の種類に関する問題が主でした。<br>
                                    その登録上の問題を解決し、規制に対応した上で、2014年に無事に業務を再開しております。<br>
                                    その経緯は、2021年5月出版、当社会長著書<a href="https://hedgefund-diamond.jp/" target="_blank">「富裕層のためのヘッジファンド投資入門」（ダイヤモンド社）</a>でもご覧いただけます。</p>
                            </dd>
                        </dl>
                    </div>


                    <div class="achievement">
                        <h4>
                            業務再開を果たしたその後の<span class="sub">9年間を通じてお客様を増やして、</span><br>
                            <span class="cap">おかげさまで、<span class="line"><span>累計契約額</span><br class="spmode"><span>1361億円に達し業界No.1</span></span>となりました。</span>
                        </h4>

                        <p class="caption">「顧客本位の業務運営に関する原則」を採択した金融事業者として金融庁HPに掲載<span>※2020年</span></p>

                        <dl class="ratio">
                            <dt>助言契約継続率<span>※2022年度実績</span></dt>
                            <dd>
                                <span class="num">95.6</span><span class="unit">%</span>以上
                            </dd>
                        </dl>

                    </div>

                </div>
            </div>
            <!-- edit-area type09 -->






            <div class="edit-area type10">
                <div class="inner w1080">

                    <h3>「決めた理由は、その実績です」</h3>
                    <p>ヘッジファンドへの投資に成功した富裕層の声</p>
                    <ul>
                        <li><a href="<?php echo esc_url(home_url('/request/document')); ?>" target="_blank">もっと知りたい<span>資料請求</span></a></li>
                        <li><a href="<?php echo esc_url(home_url('/request/document')); ?>" target="_blank">メールで予約<span>個別相談</span></a></li>
                    </ul>
                </div>
            </div>



        </div>



        <footer id="footer">
            <div id="footer_info" class="clearfix">
                <div class="big-container">
                    <ul>
                        <li>
                            <figure class="pc--only"><img src="<?php echo $siteUrl; ?>/wp-content/uploads/2022/12/tekko_building_outlook-scaled.jpg" data-original="<?php echo $siteUrl; ?>/wp-content/uploads/2022/12/tekko_building_outlook-scaled.jpg" class="lazy" alt="鉄鋼ビル外観" style="display: inline;"></figure>
                            <div class="info-txt">
                                <p class="fsize17 b--txt mb1">ヘッジファンドダイレクト株式会社 金融商品取引業者（投資助言・代理業）関東財務局長（金商）第532号</p>
                                <p class="fsize16 mt1">お電話でのお問い合わせ【通話料無料】</p>
                                <p class="tel-nub"><span><a href="tel:0120-104-359">0120-104-359</a></span></p>
                                <p class="mb2">[受付時間]　平日10：00～19:00　（土日祝：休み）</p>
                                <div class="f_contact-btn"><a href="<?php echo esc_url(home_url('/request/document')); ?>">資料請求のお申込みはこちら　&gt;&gt;</a></div>
                                <p>[住所]<br>東京都千代田区丸の内1-8-2<br>鉄鋼ビルディング10F（完全予約制）</p>
                                <table class="fsa-logo">
                                    <tbody>
                                        <tr>
                                            <td class="fsa-logoR"><a href="https://www.fsa.go.jp/" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/fsa.jpg" alt="金融庁ホームページ"></a></td>
                                            <td><a href="https://lfb.mof.go.jp/kantou/" target="_blank"><img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/kantou-mof.jpg" alt="財務省関東財務局"></a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                        <li>
                            <figure><img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/foot_img02.png" data-original="<?php bloginfo('template_directory') ?>/img/lp/texted01/foot_img02.png" class="lazy" alt="高岡壮一郎著「富裕層のNo.1投資戦略」（総合法令出版）" style="display: inline;"></figure>
                            <div class="info-txt">
                                <p class="fsize20 b--txt mb1">「富裕層のNo.1投資戦略」（総合法令出版）特設サイトのご紹介　書籍内容を全文無料公開中！</p>
                                <p class="mb1">著者：高岡 壮一郎<br class="sp--only">（ヘッジファンドダイレクト株式会社　代表取締役会長）</p>
                                <p class="mb1">世界10万本以上のファンドデータベースを基に中立的な立場から投資助言を行うフィンテック企業の創業者が、現代の富裕層にとって合理的で最良な投資戦略とは何かを、資産運用業界の進化と個人投資家の環境変化をふまえ、実証データやファクト、学術的な投資理論を裏付けとして解き明かす書籍です。</p>
                                <p class="mb2">投資家目線での金融機関・商品・サービスの実名評価や、ハーバード大学基金や海外の超富裕層に支持されているヘッジファンドを活用した資産運用を日本の個人投資家が実践するためのノウハウが掲載されています。ローリスク・ハイリターンの有利な資産運用をしたい方に役立つ内容です。今なら特設サイトで全文を無料で読むことができます。（期間限定）</p>
                                <div class="img-btn"><a href="https://sogohorei-books-wealthinvest.com/" target="_blank" rel="nofollow"><img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/book_bnr_pc.png" data-original="<?php bloginfo('template_directory') ?>/img/lp/texted01/book_bnr_pc.png" class="switch lazy" alt="「富裕層のNo.1投資戦略」特設サイト" style="display: inline;"></a></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div><!-- / footer_inner END -->

            <div id="footer_nav">
                <div class="pagetop"><a href="#wrapper"><img src="<?php bloginfo('template_directory') ?>/img/lp/texted01/pagetop.jpg" alt="ヘッジファンドダイレクト株式会社《公式》｜高実績ヘッジファンドに投資するなら pagetop"></a></div>
            </div>

            <div id="footer_txt">
                <p>本サイトは、投資判断の参考となる情報の提供を目的としたのもので、金融商品の取得勧誘・販売等を目的としたものではありません。本資料作成においては万全の注意を払っておりますが、本資料に含まれる情報の正確性、更新性に関しては弊社は一切保証していません。また、当該評価は過去の一定期間の実績を分析したものであり、将来の運用成果等を保証したものではございません。銘柄の選択、投資の最終決定は、ご自身の判断でなさるようにお願い致します。「投資助言実績1361.3億円以上」について：当社の投資助言サービスにより顧客が投資決定した投資額の累計（2008年6月～2022年12月末 投資決定時・円換算、長期積立投資の場合は総積立期間の投資累計額）。「業界No.1」「第1位」について：2023年3月31日現在の金融庁公表「金融商品取引業者登録一覧」において投資助言・代理業に専業登録している投資助言会社のうち、主に個人向けに投資信託を含むファンドを助言対象としている各社の顧客の資産の額を前提とした投資助言契約額・契約件数を調査(2023年4月17日～同年5月19日 TPCマーケティングリサーチ調べ)。ヘッジファンドへの最低投資額は運用会社の状況によって予告なく変更となる場合があります。本サイトに例示のファンドが常に2000万円から投資できるということは当社は一切保証しません。なお、当社は販売会社ではないため、運用会社となんらの契約関係も無く、運用会社の判断に何らの影響を与えることはできず、最低投資金額を含む運用会社やファンドに関する最新情報・投資機会について、投資助言契約者に対して情報を提供するという立場です。投資判断はお客様自身の判断でなさるようにお願い致します。「顧客リピート(継続)率95.6%」について：継続率とは当社の投資助言契約に基づく投資に関して2021年度に投資助言対象資産を有するお客様の人数を分母とし、2022年度中（2022年1月～2022年12月末まで）に売却等により投資助言対象資産残高を有しなくなったお客様を除いた人数を分子として除算した百分率です（小数点第二位を四捨五入）。「メディア掲載事例」について：掲載事例は当社グループに関するもので、メディア名は掲載当時のものです。HPのコンテンツおよびご紹介している投資対象や投資手法は元本や利益を保証するものではなく、相場の変動や金利の変動により損失が生じる場合がございます。投資対象や取引の仕組およびリスクについて十分ご理解の上、お客様ご自身の判断と責任においてお取引いただきますようお願い申し上げます。ヘッジファンドについて：助言対象の著名ヘッジファンドについては、ヘッジファンド側の状況や社会情勢等により日本からの投資受け入れを中止する場合があります。一般的に、ヘッジファンドに投資するためのトータルコストには、証券会社による販売手数料、各種専門家への費用・手数料等、当該ヘッジファンドに投資する際に経由するビークル（国内投資信託）にかかる信託報酬等のコストなどが含まれており、これらは各ファンド毎によって異なります。具体的な金融商品の固有名詞につきましては規制の関係上、弊社との投資助言契約を締結された方にのみ開示しております。当社サイトおよび当社サイトで紹介する資料について：作成時点で得られる情報を元に、細心の注意を払って作成しておりますが、その内容の正確性および安全性を保証するものではありません。また特定の銘柄や投資対象について、特定の投資行動や運用手法を推奨するものではありません。投資に関する最終決定はお客様ご自身の判断でお願い致します。なお、投資によって発生する損益は、すべて投資家の皆様へ帰属します。当該情報に基づいて被ったいかなる損害についても、情報提供者及び当社は一切の責任を負うことはありませんので、ご了承ください。【著作権に関するお願い】当社およびその関係会社が当社Webサイトで提供する文書・映像・音声・その他の著作物は、著作権法、およびその他の法律により保護されています。当社の文書での許諾なく、これらの一部又は全部をそのまま又は改変して転載・転用・送信・上映等により利用することは、その目的が営利か非営利か、その手段が電子的か否か、またメディアの如何を問わず禁止します。個人、法人を問わず、当社Webサイトのコンテンツの全部または一部にかかわらず、Webサイトへのコピーや複製など、ミラーサイトまたはそれに準ずる行為ならびに、再販売、再配布、変更、出版（紙および電子的な出版を含む)などの行為を一切禁じます。インターネット上で公開する場合は、個人の運営するホームページであっても、自然に不特定多数の人が利用可能な状態となり、私的利用としての「家庭内その他これに準じる限られた範囲内での使用」を逸脱することになるため、これは無条件には認めておりません。従って、「引用」を行う場合には、必ず出典ページへのリンクを併用していただき、引用される内容につき、当社の事前の許諾を得てください。当サイトへのリンクは自由です。著作権に関する詳しい情報は、公益社団法人 著作権情報センター著作権相談室までご確認ください。</p>
            </div>
            <div id="copyright">
                <small>Copyright © Hedgefund Direct Co.,Ltd, All Rights Reserved.</small>
            </div>
        </footer>




    </div>
    <!-- <script type="text/javascript" src="./js/jquery-2.1.1.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/object-fit-images/3.2.4/ofi.min.js"></script>
    <script>
        $(document).ready(function() {

            let bottomCta = $('#bottomCta');
            $(window).scroll(function() {
                if ($(this).scrollTop() > 100) {
                    bottomCta.fadeIn();
                } else {
                    bottomCta.fadeOut();
                }
            });

            $(".edit-area.type08 dl dt").on("click", function() {
                $(this).toggleClass('open');
                $(this).next().slideToggle();
            });

            $('a[href^="#"]').click(function() {
                var speed = 500;
                var href = $(this).attr("href");
                var target = $(href == "#" || href == "" ? 'html' : href);
                var position = target.offset().top;
                $("html, body").animate({
                    scrollTop: position
                }, speed, "swing");
                return false;
            });

            objectFitImages('.object-fit');
        });
    </script>

    <?php wp_footer(); ?>

</body>

</html>