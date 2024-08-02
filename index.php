<?php

$api = "https://api.e-hentai.org/api.php";


?>
<!DOCTYPE html>
<html>

<head>
    <title>Embed - <?php ?> </title>
    <link rel="stylesheet" type="text/css" href="./css/x.css">
</head>

<body>
    <?php

    // echo htmlspecialchars($_GET['gallery_id'])."<br>";
    // echo htmlspecialchars($_GET['gallery_token'])."<br>";

    $content = '{"method": "gdata","gidlist": [[' . $_GET['gallery_id'] . ',"' . $_GET['gallery_token'] . '"]],"namespace": 1}';
    $options = array(
        'http' => array(
            'method'  => 'POST',
            'proxy' => 'tcp://localhost:7890',
            'content' => $content,
            'header' =>  "Content-type: application/json"

        )
    );
    $context = stream_context_create($options);
    $result = file_get_contents($api, false, $context);
    $response = json_decode($result);


    $object = $response->gmetadata[0];

    foreach ($object->tags as $tags) {
        echo $tags . "<br>";
    }



    ?>
    <div class="gm">
        <div id="gleft">
            <div id="gd1">
                <div style="width:250px; height:auto; background:transparent url(<?php echo substr($object->thumb, 0, strpos($object->thumb, "l.jpg"))."250.jpg"?>) no-repeat; background-size: 250px"></div>
            </div>
        </div>
        <div id="gd2">
            <h1 id="gn">[Yonaka Works (Shiina Shinya)] Ecchi na Katei Kyoushi Sagisawa Fumika | 色色家教鹭泽文香 (THE IDOLM@STER CINDERELLA GIRLS) [Chinese]</h1>
            <h1 id="gj">[ヨナカWorks (椎名深夜)] エッチな家庭教師鷺沢文香 (アイドルマスター シンデレラガールズ) [中国翻訳]</h1>
        </div>
        <div id="gmid">
            <div id="gd3">
                <div id="gdc">
                    <div class="cs ct2" onclick="document.location='https://exhentai.org/doujinshi'">Doujinshi</div>
                </div>
                <div id="gdn"><a href="https://exhentai.org/uploader/<?php echo $object->uploader ?>"><?php echo $object->uploader ?></a></div>
                <div id="gdd">
                    <table>
                        <tbody>
                            <tr>
                                <td class="gdt1">Posted:</td>
                                <td class="gdt2">2024-08-02 09:00</td>
                            </tr>
                            <tr>
                                <td class="gdt1">Parent:</td>
                                <td class="gdt2">None</td>
                            </tr>
                            <tr>
                                <td class="gdt1">Visible:</td>
                                <td class="gdt2">Yes</td>
                            </tr>
                            <tr>
                                <td class="gdt1">Language:</td>
                                <td class="gdt2">Chinese &nbsp;<span class="halp" title="This gallery has been translated from the original language text.">TR</span></td>
                            </tr>
                            <tr>
                                <td class="gdt1">File Size:</td>
                                <td class="gdt2">25.84 MiB</td>
                            </tr>
                            <tr>
                                <td class="gdt1">Length:</td>
                                <td class="gdt2">9 pages</td>
                            </tr>
                            <tr>
                                <td class="gdt1">Favorited:</td>
                                <td class="gdt2" id="favcount">Never</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="gdr" onmouseout="rating_reset()">
                    <table>
                        <tbody>
                            <tr>
                                <td id="grt1">Rating:</td>
                                <td id="grt2">
                                    <div id="rating_image" class="ir" style="background-position:-80px -1px"><img src="https://exhentai.org/img/blank.gif" usemap="#rating"></div>
                                </td>
                                <td id="grt3"><span id="rating_count">0</span></td>
                            </tr>
                            <tr>
                                <td id="rating_label" colspan="3">Not Yet Rated</td>
                            </tr>
                        </tbody>
                    </table><map name="rating"><area shape="rect" coords="0,0,7,16" onclick="rating_set(1)" onmouseover="rating_show(1)"><area shape="rect" coords="8,0,15,16" onclick="rating_set(2)" onmouseover="rating_show(2)"><area shape="rect" coords="16,0,23,16" onclick="rating_set(3)" onmouseover="rating_show(3)"><area shape="rect" coords="24,0,31,16" onclick="rating_set(4)" onmouseover="rating_show(4)"><area shape="rect" coords="32,0,39,16" onclick="rating_set(5)" onmouseover="rating_show(5)"><area shape="rect" coords="40,0,47,16" onclick="rating_set(6)" onmouseover="rating_show(6)"><area shape="rect" coords="48,0,55,16" onclick="rating_set(7)" onmouseover="rating_show(7)"><area shape="rect" coords="56,0,63,16" onclick="rating_set(8)" onmouseover="rating_show(8)"><area shape="rect" coords="64,0,71,16" onclick="rating_set(9)" onmouseover="rating_show(9)"><area shape="rect" coords="72,0,79,16" onclick="rating_set(10)" onmouseover="rating_show(10)"></map>
                </div>
                <div id="gdf" onclick="return pop_fav()">
                    <div style="float:left; cursor:pointer" id="fav"></div>
                    <div style="float:left">&nbsp; <a id="favoritelink" href="#" onclick="return false"><img src="https://exhentai.org/img/mr.gif"> Add to Favorites</a></div>
                    <div class="c"></div>
                </div>
            </div>
            <div id="gd4">
                <div id="taglist">
                    <table>
                        <tbody>
                            <tr>
                                <td class="tc">language:</td>
                                <td>
                                    <div id="td_language:chinese" class="gt" style="opacity:1.0"><a id="ta_language:chinese" href="https://exhentai.org/tag/language:chinese" class="" onclick="return toggle_tagmenu(3437,'language:chinese',this)">chinese</a></div>
                                    <div id="td_language:translated" class="gt" style="opacity:1.0"><a id="ta_language:translated" href="https://exhentai.org/tag/language:translated" class="" onclick="return toggle_tagmenu(1057,'language:translated',this)">translated</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tc">parody:</td>
                                <td>
                                    <div id="td_parody:the_idolmaster" class="gtl" style="opacity:1.0"><a id="ta_parody:the_idolmaster" href="https://exhentai.org/tag/parody:the+idolmaster" class="" onclick="return toggle_tagmenu(12857,'parody:the idolmaster',this)">the idolmaster</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tc">character:</td>
                                <td>
                                    <div id="td_character:fumika_sagisawa" class="gtl" style="opacity:1.0"><a id="ta_character:fumika_sagisawa" href="https://exhentai.org/tag/character:fumika+sagisawa" class="" onclick="return toggle_tagmenu(292419,'character:fumika sagisawa',this)">fumika sagisawa</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tc">group:</td>
                                <td>
                                    <div id="td_group:yonaka_works" class="gtl" style="opacity:1.0"><a id="ta_group:yonaka_works" href="https://exhentai.org/tag/group:yonaka+works" class="" onclick="return toggle_tagmenu(486937,'group:yonaka works',this)">yonaka works</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tc">artist:</td>
                                <td>
                                    <div id="td_artist:shiina_shinya" class="gtl" style="opacity:1.0"><a id="ta_artist:shiina_shinya" href="https://exhentai.org/tag/artist:shiina+shinya" class="" onclick="return toggle_tagmenu(486938,'artist:shiina shinya',this)">shiina shinya</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tc">male:</td>
                                <td>
                                    <div id="td_male:shotacon" class="gtl" style="opacity:1.0"><a id="ta_male:shotacon" href="https://exhentai.org/tag/male:shotacon" class="" onclick="return toggle_tagmenu(1144,'male:shotacon',this)">shotacon</a></div>
                                    <div id="td_male:sole_male" class="gtl" style="opacity:1.0"><a id="ta_male:sole_male" href="https://exhentai.org/tag/male:sole+male" class="" onclick="return toggle_tagmenu(354292,'male:sole male',this)">sole male</a></div>
                                    <div id="td_male:virginity" class="gtl" style="opacity:1.0"><a id="ta_male:virginity" href="https://exhentai.org/tag/male:virginity" class="" onclick="return toggle_tagmenu(271807,'male:virginity',this)">virginity</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tc">female:</td>
                                <td>
                                    <div id="td_female:school_swimsuit" class="gtl" style="opacity:1.0"><a id="ta_female:school_swimsuit" href="https://exhentai.org/tag/female:school+swimsuit" class="" onclick="return toggle_tagmenu(5403,'female:school swimsuit',this)">school swimsuit</a></div>
                                    <div id="td_female:sole_female" class="gtl" style="opacity:1.0"><a id="ta_female:sole_female" href="https://exhentai.org/tag/female:sole+female" class="" onclick="return toggle_tagmenu(354290,'female:sole female',this)">sole female</a></div>
                                    <div id="td_female:stockings" class="gtl" style="opacity:1.0"><a id="ta_female:stockings" href="https://exhentai.org/tag/female:stockings" class="" onclick="return toggle_tagmenu(3360,'female:stockings',this)">stockings</a></div>
                                    <div id="td_female:tutor" class="gtl" style="opacity:1.0"><a id="ta_female:tutor" href="https://exhentai.org/tag/female:tutor" class="" onclick="return toggle_tagmenu(284149,'female:tutor',this)">tutor</a></div>
                                </td>
                            </tr>
                            <tr>
                                <td class="tc">other:</td>
                                <td>
                                    <div id="td_other:full_color" class="gtl" style="opacity:1.0"><a id="ta_other:full_color" href="https://exhentai.org/tag/other:full+color" class="" onclick="return toggle_tagmenu(1081,'other:full color',this)">full color</a></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div id="tagmenu_act" style="display:none"></div>
                <div id="tagmenu_new">
                    <form action="" method="post" class="nopm"><input id="newtagfield" type="text" name="tags" placeholder="Enter new tags, separated with comma" size="60" maxlength="200"><input id="newtagbutton" type="submit" name="submit" value="Tag" onclick="tag_from_field(); return false"></form>
                </div>
                <div id="gwrd"><img id="waitroller" src="https://exhentai.org/img/roller.gif" style="visibility:hidden"></div>
            </div>
            <div id="gd5">
                <p class="g3 gsp"><img src="https://exhentai.org/img/mr.gif"> <a href="https://exhentai.org/g/3008007/29006ed771/?report=select">Report Gallery</a></p>
                <p class="g2 gsp"><img src="https://exhentai.org/img/mr.gif"> <a href="#" onclick="return popUp('https://exhentai.org/archiver.php?gid=3008007&amp;token=29006ed771&amp;or=478497--b701cd13848ccb654a96b0652a42884b039fae3a',480,320)">Archive Download</a></p>
                <p class="g2"><img src="https://exhentai.org/img/mr.gif"> <a href="#" onclick="return popUp('https://exhentai.org/gallerytorrents.php?gid=3008007&amp;t=29006ed771',610,590)">Torrent Download (0)</a></p>
                <p class="g2 gsp"><img src="https://exhentai.org/img/mr.gif"> <a href="https://exhentai.org/g/3008007/29006ed771/?act=expunge">Petition to Expunge</a></p>
                <p class="g2"><img src="https://exhentai.org/img/mr.gif"> <a id="renamelink" href="#" onclick="return pop_ren()">Petition to Rename</a></p>
                <p class="g2 gsp"><img src="https://exhentai.org/img/mr.gif"> <a href="https://exhentai.org/mpv/3008007/29006ed771/">Multi-Page Viewer</a></p>
            </div>
            <div class="c"></div>
        </div>
        <div class="c"></div>
    </div>
</body>

</html>