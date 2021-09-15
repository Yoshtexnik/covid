>((>>>>))<?php $coviduz=file_get_contents( "https://coronavirus.uz/uz"); $arr_uz=explode(
"<section class=\"res section-counter\ ">", $coviduz); $arr_uz=explode( "\n", $arr_uz[1]); $ret_text=""
; foreach ($arr_uz as $key=> $value) { if(strrpos($value,"
<p class=\ "hstat\">")!==false){ $value=str_replace("
  <p class=\ "hstat\">", '', $value); $value=str_replace(" й. ҳолатига</p>", '', $value); $ret_text.=trim($value)."
  holatiga ko'ra statistika:\n🔻🔻🔻🔻🔻🔻🔻\n"; } if(strrpos($value, "
  <p class=\
  "resone prg-count\" data-count=\ "")!==false){ $value=str_replace( "<p class=\"resone prg-count\
  " data-count=\" ", '', $value);
			$value=str_replace("\ ">0</p>", '', $value); $ret_text.="🔴 Jami tasdiqlangan: "
  .trim($value). "\n▪️▪️▪️▪️▪️▪️▪️\n"; } if(strrpos($value, "<p class=\"resthree
  prg-count green\ " data-count=\" ")!==false){
			$value=str_replace("<p class=\ "resthree prg-count green\" data-count=\ "",
  '', $value); $value=str_replace( "\">0</p>", '', $value); $ret_text.="🟢 Tuzalganlar: ".trim($value)."\n"; } if(strrpos($value,
  "
  <p class=\ "restwo prg-count grey\" data-count=\ "")!==false){ $value=str_replace(
  "<p class=\"restwo prg-count grey\ " data-count=\" ", '', $value);
			$value=str_replace("\ ">0</p>", '', $value); $ret_text.="🟠 Vafot etganlar: "
  .trim($value). "\n"; } if(strrpos($value, "<p class=\"restwo prg-count davo\
  " data-count=\" ")!==false){
			$value=str_replace("<p class=\ "restwo prg-count davo\" data-count=\ "",
  '', $value); $value=str_replace( "\">0</p>", '', $value); $ret_text.="🔵 Davolanayotganlar: ".trim($value)."\n"; break;
  } } $ret_text.="\nManbaa:
  <code>minzdrav.uz</code>"; $imzo="\n\n@Nurullayev_Nurbek"; $ret_text.=$imzo; $arr['list']=$ret_text;
  echo json_encode($arr,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES);
  ?>

  <!--
Visual Code Mobile
Developed By Manish Nirmal
App Available on Play Store :-
https://play.google.com/store/apps/details?id=lk.visual.code.mobile
YouTube :-
https://youtube.com/ManishNirmal
-->
