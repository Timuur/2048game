<script>
    export let login;
    export let text;
    export let nofoto = "../src/assets/noavatar.png";
</script>

<div class="chat sidebar-block text-gray">
    <div class="sidebar-title lc_block">Чат&nbsp;активирован</div>

    <!--  -->
    <div class="lc_area ignore-select">
        <div class="lc_chat_list_area">
            <ul id="lc_chat" class="lc_chat_list">
                <li data-id="196543" class="lc_chat_li lc_chat_li_foto">
                    <a
                        onclick="ShowProfile('Vlad_Semenchuk', 'https://online-fix.me/user/Vlad_Semenchuk/', '0'); return false;"
                        href="https://online-fix.me/user/Vlad_Semenchuk/"
                        class="lc_chat_li_autor lc_group_4"
                        ><img
                            src={nofoto}
                            alt=""
                            class="lc_foto_float"
                        />Vlad_Semenchuk</a
                    >

                    <div class="lc_chat_li_date">03:02</div>
                    <div class="lc_chat_li_text" id="lc_text_196543">
                        Ребят, кто столкнулся в Форзе 5 с ошибками FH201,
                        203,204? Как решить?
                    </div>
                </li>
                <li data-id="196545" class="lc_chat_li lc_chat_li_foto">
                    <a
                        onclick="ShowProfile('eugene24', 'https://online-fix.me/user/eugene24/', '0'); return false;"
                        href="https://online-fix.me/user/eugene24/"
                        class="lc_chat_li_autor lc_group_4"
                        ><img
                            src={nofoto}
                            alt=""
                            class="lc_foto_float"
                        />eugene24</a
                    >

                    <div class="lc_chat_li_date">12:10</div>
                    <div class="lc_chat_li_text" id="lc_text_196545">
                        Привет,сделайте репак на Midnight Ghost Hunt)
                    </div>
                </li>
                <li data-id="196545" class="lc_chat_li lc_chat_li_foto">
                    <a
                        on:click="ShowProfile('eugene24', 'https://online-fix.me/user/eugene24/', '0'); return false;"
                        href="https://online-fix.me/user/eugene24/"
                        class="lc_chat_li_autor lc_group_4"
                        ><img
                            src={nofoto}
                            alt=""
                            class="lc_foto_float"
                        />eugene24</a
                    >

                    <div class="lc_chat_li_date">12:10</div>
                    <div class="lc_chat_li_text" id="lc_text_196545">
                        Привет,сделайте репак на Midnight Ghost Hunt)
                    </div>
                </li>
            </ul>
            <div class="lc_modal_smiles" />
            <div class="lc_modal_colors" />
        </div>
        <div class="lc_progress">
            <div
                class="lc_progress_bar"
                style="width: 23.5668px; overflow: hidden;"
            />
        </div>
        <div class="lc_textarea">
            <textarea id="lc_text" spellcheck="true" />
        </div>
        <div class="lc_buttons">
            <a href="#" class="lc_add" title="Ctrl-Enter">Отправить</a>
            <!--<a href="#" class="lc_archive" title="Архив"
                ><i class="lc_icon lc_icon_archive" /></a
            >-->
            <a
                href="#"
                title="Правила"
                onclick="lc_rulesaccept(); return false;"
                ><i class="lc_icon lc_icon_rules" /></a
            >

            <span class="lc_symb_left" title="Осталось символов">1000</span>
        </div>
    </div>
    <br />
    <br />
    <div class="lc_rules" style="display:none;">
        <ul>
            <li>Не флудить и не спамить;</li>
            <li>Никого не оскорблять и сильно не материться;</li>
            <li>
                Строго запрещена пропаганда экстремизма, фашизма, нацизма (и пр.
                согласно законам);
            </li>
            <li>Не попрошайничать;</li>
            <li>Не торговать.</li>
        </ul>
    </div>
</div>

<style>
    .chat {
        font-family: Tahoma, Verdana, Segoe, sans-serif;
        padding: 10px;
        padding-top: 0;
    }
    .text-gray {
        color: #a9a9a9;
    }

    .sidebar-block {
        margin-bottom: 7px;
        background-color: #ededed;
        /* box-shadow: 0 0 4px #000; */
        padding: 10px;
        position: relative;
    }
    .sidebar-title.lc_block {
        padding: 10px;
        background: #e0e0e0;
        display: block;
        margin-left: -10px;
        margin-right: -10px;
    }

    .sidebar-title {
        width: 100%;
        text-transform: uppercase;
        color: #1ea7e0;
        font-size: 18px;
        margin-bottom: 5px;
    }

    .lc_area {
        position: relative;
        vertical-align: baseline;
        background: lightgray;
        border: 1px solid #ddd;
        border-top: none;
    }

    .lc_area .lc_chat_list_area {
        position: relative;
        height: 424px;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ccc;
    }
    .lc_area ul {
        padding: 0;
        margin: 0;
        list-style: none;
    }
    .lc_chat_list {
        width: 100%;
        height: 100%;
        overflow: auto;
    }

    .lc_chat_list .lc_chat_li {
        position: relative;
        padding: 12px 7px;
        padding-bottom: 20px;
        overflow: hidden;
        color: #444;
        font: normal 11px Tahoma;
        border-bottom: 1px solid #e7e7e7;
    }

    .lc_foto_float {
        float: left;
        width: 40px;
        height: 40px;
        margin-left: -45px;
        overflow: hidden;
        text-decoration: none;
        border-radius: 50%;
    }

    a img {
        border: none;
    }

    .lc_chat_list .lc_chat_li_foto {
        padding-left: 54px !important;
    }

    .lc_chat_list .lc_chat_li .lc_group_4 {
        color: #696969;
    }
    .lc_chat_list .lc_chat_li_autor {
        padding-left: 10px;
        color: #444;
        font-weight: bold;
        text-decoration: none;
    }
    .lc_chat_list a {
        color: #0772b9;
    }

    .lc_chat_list .lc_chat_li_date {
        position: absolute;
        top: 4px;
        right: 5px;
        color: #999;
    }
    .lc_chat_list .lc_chat_li_text {
        padding: 6px 0 2px 10px;
        font-size: 1.2em;
        word-wrap: break-word;
    }

    .sidebar .chat .lc_chat_list .lc_chat_li .lc_group_4 {
        color: #bdbdbd !important;
    }

    textarea,
    img,
    a {
        outline: none;
    }

    .sidebar .chat .lc_chat_list .lc_chat_li {
        border-color: #3a3a3a !important;
    }

    a:-webkit-any-link {
        color: -webkit-link;
        cursor: pointer;
        text-decoration: underline;
    }

    .sidebar .chat .lc_chat_li:nth-child(2n) {
        background: #222 !important;
    }
    .sidebar .chat .lc_area,
    .sidebar .chat .lc_chat_list .lc_chat_li {
        border-color: #3a3a3a !important;
    }
    .sidebar .chat .lc_area,
    .sidebar .chat .lc_chat_list .lc_chat_li,
    .sidebar .chat .lc_textarea textarea {
        background: #333;
        color: #bdbdbd !important;
    }

    /* Darker chat container */
    .darker {
        border-color: #ccc;
        background-color: #ddd;
    }

    /* Clear floats */
    .container::after {
        display: table;
        clear: both;
        content: "";
    }

    /* Style images */
    .name {
        float: left;
        max-width: 4px;
        width: 100%;
    }

    /* Style time text */
    .time-right {
        float: right;
        color: #aaa;
    }
</style>
