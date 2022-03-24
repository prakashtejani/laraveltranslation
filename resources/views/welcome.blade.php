<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .loading {
            display: block;
            height: 20px;
            width: 20px;
            background-image: url("{{ asset('loading.gif')}}");
            background-repeat: no-repeat;
            background-size: 20px 20px;
            display: none;
        }
    </style>
</head>

<body class="antialiased">
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">

                <select name="from" id="from">
                    <option value="az">Azerbaijani</option>
                    <option value="ml">Malayalam</option>
                    <option value="sq">Albanian</option>
                    <option value="mt">Maltese</option>
                    <option value="am">Amharic</option>
                    <option value="mk">Macedonian</option>
                    <option value="en" selected>English</option>
                    <option value="mi">Maori</option>
                    <option value="ar">Arabic</option>
                    <option value="mr">Marathi</option>
                    <option value="hy">Armenian</option>
                    <option value="hr">Mari></option>
                    <option value="af">Afrikaans</option>
                    <option value="mn">Mongolian</option>
                    <option value="eu">Basque</option>
                    <option value="de">German</option>
                    <option value="ba">Bashkir</option>
                    <option value="ne">Nepali</option>
                    <option value="be">Belarusian</option>
                    <option value="no">Norwegian</option>
                    <option value="bn">Bengali</option>
                    <option value="pa">Punjabi</option>
                    <option value="my">Burmese</option>
                    <option value="ap">Papiamento</option>
                    <option value="bg">Bulgarian</option>
                    <option value="fa">Persian</option>
                    <option value="bs">Bosnian</option>
                    <option value="pl">Polish</option>
                    <option value="cy">Welsh</option>
                    <option value="pt">Portuguese</option>
                    <option value="hu">Hungarian</option>
                    <option value="ro">Romanian</option>
                    <option value="vi">Vietnamese</option>
                    <option value="ru">Russian</option>
                    <option value="ht">Haitian (Creole)</option>
                    <option value="eb">Cebu></option>
                    <option value="gl">Galician</option>
                    <option value="sr">Serbian</option>
                    <option value="nl">Dutch</option>
                    <option value="si">Sinhala</option>
                    <option value="rj">gornomariyskiy></option>
                    <option value="sk">Slovak</option>
                    <option value="el">Greek</option>
                    <option value="sl">Slovenian</option>
                    <option value="ka">Georgian</option>
                    <option value="sw">Swahili</option>
                    <option value="gu">Gujarati</option>
                    <option value="su">Sundanese</option>
                    <option value="da">Danish</option>
                    <option value="tg">Tajik</option>
                    <option value="he">Hebrew</option>
                    <option value="th">Thai</option>
                    <option value="yi">Yiddish</option>
                    <option value="tl">Tagalog</option>
                    <option value="id">Indonesian</option>
                    <option value="ta">Tamil</option>
                    <option value="ga">Irish</option>
                    <option value="tt">Tatarsky</option>
                    <option value="it">Italian</option>
                    <option value="te">Telugu</option>
                    <option value="is">Icelandic</option>
                    <option value="tr">Turkish</option>
                    <option value="es">Spanish</option>
                    <option value="dm">Udmurt></option>
                    <option value="kk">Kazakh</option>
                    <option value="uz">Uzbek</option>
                    <option value="kn">Kannada</option>
                    <option value="uk">Ukrainian</option>
                    <option value="ca">Catalan</option>
                    <option value="ur">Urdu</option>
                    <option value="ky">Kyrgyz</option>
                    <option value="fi">Finnish</option>
                    <option value="zh">Chinese</option>
                    <option value="fr">French</option>
                    <option value="ko">Korean</option>
                    <option value="hi">Hindi</option>
                    <option value="xh">braid</option>
                    <option value="hr">Croatian</option>
                    <option value="km">Khmer</option>
                    <option value="cs">Czech</option>
                    <option value="lo">Lao</option>
                    <option value="sv">Swedish</option>
                    <option value="la">Latin</option>
                    <option value="gd">Scottish</option>
                    <option value="lv">Latvian</option>
                    <option value="et">Estonian</option>
                    <option value="lt">Lithuanian</option>
                    <option value="eo">Esperanto</option>
                    <option value="lb">Luxembourg</option>
                    <option value="jv">Javanese</option>
                    <option value="mg">Malagasy</option>
                    <option value="ja">Japanese</option>
                    <option value="ms">Malay</option>
                </select>
                <br />
                <textarea cols="100" rows="10" name="string" value="" id="string"></textarea>
                <div class="loading"></div>

                <br /><br />
                <select name="to" id="to">
                    <option value="az">Azerbaijani</option>
                    <option value="ml">Malayalam</option>
                    <option value="sq">Albanian</option>
                    <option value="mt">Maltese</option>
                    <option value="am">Amharic</option>
                    <option value="mk">Macedonian</option>
                    <option value="en">English</option>
                    <option value="mi">Maori</option>
                    <option value="ar">Arabic</option>
                    <option value="mr">Marathi</option>
                    <option value="hy">Armenian</option>
                    <option value="hr">Mari></option>
                    <option value="af">Afrikaans</option>
                    <option value="mn">Mongolian</option>
                    <option value="eu">Basque</option>
                    <option value="de">German</option>
                    <option value="ba">Bashkir</option>
                    <option value="ne">Nepali</option>
                    <option value="be">Belarusian</option>
                    <option value="no">Norwegian</option>
                    <option value="bn">Bengali</option>
                    <option value="pa">Punjabi</option>
                    <option value="my">Burmese</option>
                    <option value="ap">Papiamento</option>
                    <option value="bg">Bulgarian</option>
                    <option value="fa">Persian</option>
                    <option value="bs">Bosnian</option>
                    <option value="pl">Polish</option>
                    <option value="cy">Welsh</option>
                    <option value="pt">Portuguese</option>
                    <option value="hu">Hungarian</option>
                    <option value="ro">Romanian</option>
                    <option value="vi">Vietnamese</option>
                    <option value="ru">Russian</option>
                    <option value="ht">Haitian (Creole)</option>
                    <option value="eb">Cebu></option>
                    <option value="gl">Galician</option>
                    <option value="sr">Serbian</option>
                    <option value="nl">Dutch</option>
                    <option value="si">Sinhala</option>
                    <option value="rj">gornomariyskiy></option>
                    <option value="sk">Slovak</option>
                    <option value="el">Greek</option>
                    <option value="sl">Slovenian</option>
                    <option value="ka">Georgian</option>
                    <option value="sw">Swahili</option>
                    <option value="gu">Gujarati</option>
                    <option value="su">Sundanese</option>
                    <option value="da">Danish</option>
                    <option value="tg">Tajik</option>
                    <option value="he">Hebrew</option>
                    <option value="th">Thai</option>
                    <option value="yi">Yiddish</option>
                    <option value="tl">Tagalog</option>
                    <option value="id">Indonesian</option>
                    <option value="ta">Tamil</option>
                    <option value="ga">Irish</option>
                    <option value="tt">Tatarsky</option>
                    <option value="it">Italian</option>
                    <option value="te">Telugu</option>
                    <option value="is">Icelandic</option>
                    <option value="tr">Turkish</option>
                    <option value="es">Spanish</option>
                    <option value="dm">Udmurt></option>
                    <option value="kk">Kazakh</option>
                    <option value="uz">Uzbek</option>
                    <option value="kn">Kannada</option>
                    <option value="uk">Ukrainian</option>
                    <option value="ca">Catalan</option>
                    <option value="ur">Urdu</option>
                    <option value="ky">Kyrgyz</option>
                    <option value="fi">Finnish</option>
                    <option value="zh">Chinese</option>
                    <option value="fr">French</option>
                    <option value="ko">Korean</option>
                    <option value="hi" selected>Hindi</option>
                    <option value="xh">braid</option>
                    <option value="hr">Croatian</option>
                    <option value="km">Khmer</option>
                    <option value="cs">Czech</option>
                    <option value="lo">Lao</option>
                    <option value="sv">Swedish</option>
                    <option value="la">Latin</option>
                    <option value="gd">Scottish</option>
                    <option value="lv">Latvian</option>
                    <option value="et">Estonian</option>
                    <option value="lt">Lithuanian</option>
                    <option value="eo">Esperanto</option>
                    <option value="lb">Luxembourg</option>
                    <option value="jv">Javanese</option>
                    <option value="mg">Malagasy</option>
                    <option value="ja">Japanese</option>
                    <option value="ms">Malay</option>
                </select>
                <br />
                <textarea cols="100" rows="10" name="result" value="" id="result"></textarea>
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(function() {
        var ajaxReq = null;
        $("#string").on("keyup", function() {
            $(".loading").fadeIn(1000);
            var q = $(this).val();
            var from = $("#from").val();
            var to = $("#to").val();
            if (ajaxReq != null) {
                ajaxReq.abort();
            }
            ajaxReq = $.ajax({
                method: "post",
                url: "http://localhost:8000/api/translation",
                data: {
                    q: q,
                    from: from,
                    to: to
                },
                accepts: "application/json",
                success: function(data) {
                    $(".loading").fadeOut(1000);
                    ajaxReq = null;
                    $("#result").val(JSON.parse(data).text);
                },
                error: function(error) {
                    $(".loading").fadeOut(1000);
                    ajaxReq = null;
                    console.log(error);
                }
            })

        })
    })
</script>

</html>