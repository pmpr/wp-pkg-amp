<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae8e4951ee             |
    |_______________________________________|
*/
 namespace Pmpr\Module\AMP\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\AMP\Setting; trait CommonTrait { public function oywyqcgumoecwoga() : bool { return $this->smowememmgeukwki() && $this->iwwqyiewcwimqcga(); } public function iwwqyiewcwimqcga($post = null) { $iwwqyiewcwimqcga = true; if (!($gcqseksiskwueksc = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->iooowgsqoyqseyuu($post))) { goto esuiysskoweawsue; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $sciomagaqmgggsiu = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::miemwgakuokqyoqo, []); if ($sciomagaqmgggsiu && in_array($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu($post), $sciomagaqmgggsiu, true)) { goto uguigkcmukuouway; } $iwwqyiewcwimqcga = false; goto uqqaiagaeqgqgaiy; uguigkcmukuouway: $yemgmmgogcwccuky = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::egaaowwogygqqyia, []); if (!(is_array($yemgmmgogcwccuky) && in_array($gcqseksiskwueksc, $yemgmmgogcwccuky))) { goto qicwaskssogcokgm; } $iwwqyiewcwimqcga = false; qicwaskssogcokgm: uqqaiagaeqgqgaiy: esuiysskoweawsue: return $this->ocksiywmkyaqseou("\160\141\147\x65\x5f\x68\141\163\137\141\x6d\160", $iwwqyiewcwimqcga); } public function eywqecukyieuoaom() : ?string { return Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::kmeyumwewoeaweya, Setting::guksqcsoawkkscig); } public function smowememmgeukwki($iwywmkygwewiamwm = null) : bool { if ($iwywmkygwewiamwm) { goto gaomwagkcciesyqy; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(); gaomwagkcciesyqy: $aweokccqeyqmaygy = explode("\x2f", $iwywmkygwewiamwm); $aweokccqeyqmaygy = array_filter($aweokccqeyqmaygy); return end($aweokccqeyqmaygy) === $this->eywqecukyieuoaom() && is_string($iwywmkygwewiamwm) && strrev($iwywmkygwewiamwm)[0] === "\57"; } public function kmakyewuoeikaccy($iwywmkygwewiamwm) { global $wp_rewrite; if (!$wp_rewrite) { goto suqkuqygkkgwyaie; } if (!($yuyowiyumyysomoy = strpos($iwywmkygwewiamwm, "\x2f{$wp_rewrite->pagination_base}\x2f"))) { goto aegysmeecgcgayyw; } $iwywmkygwewiamwm = substr($iwywmkygwewiamwm, 0, $yuyowiyumyysomoy); aegysmeecgcgayyw: suqkuqygkkgwyaie: return $iwywmkygwewiamwm; } public function ycqquoiyyuesegsy($post) : string { $jkmcwmwkaqwqegqq = $this->caokeucsksukesyo()->eiwcuqigayigimak()->ewswusimyeosaogm(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (empty($jkmcwmwkaqwqegqq)) { goto wiysogeqqwgioyka; } if ($migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post)) { goto skkamseieeusycye; } goto soaccwqimeksgwiw; wiysogeqqwgioyka: $migiiksoiymissge = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($this->eywqecukyieuoaom(), 1, $seumokooiykcomco->ycqquoiyyuesegsy($post)); goto soaccwqimeksgwiw; skkamseieeusycye: $migiiksoiymissge = trailingslashit($migiiksoiymissge); $migiiksoiymissge = $this->eyeuasggugmiysuy($migiiksoiymissge); soaccwqimeksgwiw: return $migiiksoiymissge; } public function eyeuasggugmiysuy($eeamcawaiqocomwy) : string { if (!($eeamcawaiqocomwy && !$this->smowememmgeukwki($eeamcawaiqocomwy))) { goto cgiscsqwwgqqaeqi; } $agoaugssmsiumiym = $this->caokeucsksukesyo()->gyecsegqciqykomu()->iyooiokaaaqgesue($eeamcawaiqocomwy); $eeamcawaiqocomwy = trailingslashit($eeamcawaiqocomwy) . trailingslashit($this->eywqecukyieuoaom()) . $agoaugssmsiumiym; cgiscsqwwgqqaeqi: return $eeamcawaiqocomwy; } public function secggaqakwwmkkao($migiiksoiymissge = null) : string { if ($migiiksoiymissge) { goto syiqkaasoueowwui; } $migiiksoiymissge = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy(); syiqkaasoueowwui: if (!$migiiksoiymissge) { goto giaacoqqqsekcayy; } $migiiksoiymissge = explode("\x2f", $migiiksoiymissge); $migiiksoiymissge = array_flip($migiiksoiymissge); $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->unset($migiiksoiymissge, $this->eywqecukyieuoaom()); $migiiksoiymissge = array_flip($migiiksoiymissge); $migiiksoiymissge = implode("\57", $migiiksoiymissge); giaacoqqqsekcayy: return trailingslashit($migiiksoiymissge); } }
