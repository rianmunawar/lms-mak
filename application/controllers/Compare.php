<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 goto cA24f; cA24f: if (defined("\102\101\x53\105\x50\101\x54\x48")) { goto U2MQ_; } goto wJman; CAtkR: U2MQ_: goto OiW_L; wJman: exit("\116\157\40\144\151\162\145\143\x74\40\x73\x63\x72\x69\160\x74\x20\141\x63\143\145\163\163\40\141\x6c\154\157\x77\145\144"); goto CAtkR; OiW_L: class Compare extends CI_Controller { function __construct() { goto sZQZ_; By0LB: $this->DB1 = $this->load->database("\x6d\x61\x69\x6e\x5f\x67\141\x72\165\x64\x61", TRUE); goto sDwZz; sqhXE: $this->CHARACTER_SET = "\165\164\x66\70\x20\x43\117\x4c\114\x41\124\x45\x20\x75\164\146\x38\x5f\x67\145\156\x65\162\x61\x6c\x5f\143\151"; goto By0LB; sDwZz: $this->DB2 = $this->load->database("\154\x69\x76\145", TRUE); goto hLLu_; sZQZ_: parent::__construct(); goto sqhXE; hLLu_: } function index() { goto ldYxd; ldYxd: $sql_commands_to_run = array(); goto k714X; rxmjS: echo "\74\x70\162\x65\x20\x73\x74\171\x6c\x65\75\x27\x70\x61\x64\x64\x69\156\147\x3a\x20\x32\60\x70\170\73\x20\x62\x61\x63\x6b\147\162\x6f\x75\156\144\55\x63\x6f\154\157\x72\x3a\40\x23\106\x46\x46\x41\x46\x30\73\x27\76\xa"; goto AAoQt; EAh0I: $sql_commands_to_run = is_array($tables_to_update) && !empty($tables_to_update) ? array_merge($sql_commands_to_run, $this->update_existing_tables($tables_to_update)) : ''; goto IR23M; hxZRt: echo "\74\x68\62\x3e\124\150\145\x20\144\x61\164\x61\142\x61\x73\145\x20\x61\x70\160\x65\141\x72\163\40\x74\x6f\x20\x62\145\40\x75\160\40\x74\x6f\x20\144\141\x74\x65\74\x2f\150\x32\x3e\12"; goto dCmuk; GvQ63: tAq_r: goto usS5G; I0YZw: $sql_commands_to_run = is_array($tables_to_create) && !empty($tables_to_create) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_create, "\x63\162\x65\x61\164\145")) : array(); goto Tmxop; Tmxop: $sql_commands_to_run = is_array($tables_to_drop) && !empty($tables_to_drop) ? array_merge($sql_commands_to_run, $this->manage_tables($tables_to_drop, "\144\162\x6f\x70")) : array(); goto GQONG; IR23M: if (is_array($sql_commands_to_run) && !empty($sql_commands_to_run)) { goto tAq_r; } goto hxZRt; usS5G: echo "\74\x68\x32\x3e\124\x68\145\x20\x64\x61\164\141\x62\x61\x73\145\40\151\163\x20\x6f\x75\x74\40\x6f\146\x20\x53\x79\156\143\41\74\57\150\x32\76\12"; goto Zi5Jv; AAoQt: foreach ($sql_commands_to_run as $sql_command) { echo "{$sql_command}\12"; oZY_J: } goto tdyGm; k7UxC: echo "\74\160\162\145\76\12"; goto mBRsd; tdyGm: PCnq9: goto k7UxC; dCmuk: goto E18i1; goto GvQ63; HraTw: $live_tables = $this->DB2->list_tables(); goto RtRbx; GQONG: $tables_to_update = $this->compare_table_structures($development_tables, $live_tables); goto HYYhn; HYYhn: $tables_to_update = array_diff($tables_to_update, $tables_to_create); goto EAh0I; mBRsd: E18i1: goto QN8YE; k714X: $development_tables = $this->DB1->list_tables(); goto HraTw; RtRbx: $tables_to_create = array_diff($development_tables, $live_tables); goto tAsXW; tAsXW: $tables_to_drop = array_diff($live_tables, $development_tables); goto I0YZw; Zi5Jv: echo "\74\160\76\124\x68\145\40\x66\x6f\154\154\x6f\167\x69\156\x67\x20\x53\121\x4c\x20\143\157\x6d\155\x61\x6e\x64\163\40\156\x65\145\144\x20\164\157\40\x62\x65\x20\x65\170\145\143\165\x74\x65\x64\x20\164\x6f\x20\x62\162\x69\x6e\147\x20\x74\150\x65\x20\x4c\x69\166\145\40\x64\141\164\x61\142\141\x73\145\x20\164\141\142\154\145\163\x20\x75\x70\40\x74\157\40\x64\x61\x74\x65\x3a\x20\x3c\x2f\160\76\12"; goto rxmjS; QN8YE: } function manage_tables($tables, $action) { goto vJvW4; C1pYY: X5Q5O: goto PkUPL; JlIv5: nwU22: goto xOajM; bgXtG: foreach ($tables as $table) { $sql_commands_to_run[] = "\x44\x52\117\x50\40\x54\x41\x42\114\x45\40{$table}\73"; lqNkp: } goto JlIv5; jJW1i: if (!($action == "\144\162\x6f\160")) { goto mvEl0; } goto bgXtG; PkUPL: FQTgS: goto jJW1i; xOajM: mvEl0: goto VoUj_; MUng1: foreach ($tables as $table) { goto rGMgc; dMWWZ: thEHA: goto J1Ql9; rGMgc: $query = $this->DB1->query("\123\x48\117\x57\x20\103\122\x45\x41\124\x45\x20\124\x41\x42\114\105\x20\140{$table}\x60\40\55\x2d\x20\143\162\145\141\x74\145\x20\x74\x61\142\154\x65\x73"); goto bYxfI; bYxfI: $table_structure = $query->row_array(); goto cP136; cP136: $sql_commands_to_run[] = $table_structure["\x43\162\145\x61\x74\x65\x20\124\141\142\x6c\x65"] . "\x3b"; goto dMWWZ; J1Ql9: } goto C1pYY; vJvW4: $sql_commands_to_run = array(); goto JxFIb; JxFIb: if (!($action == "\143\x72\145\141\x74\x65")) { goto FQTgS; } goto MUng1; VoUj_: return $sql_commands_to_run; goto XfFQt; XfFQt: } function compare_table_structures($development_tables, $live_tables) { goto lFy9S; S2JQ4: foreach ($live_tables as $table) { goto SQKVe; T1q61: $table_structure = $query->row_array(); goto umkxF; umkxF: $live_table_structures[$table] = $table_structure["\x43\x72\x65\x61\164\145\x20\x54\141\x62\154\x65"]; goto DXB3Q; DXB3Q: D4TTO: goto uEZ65; SQKVe: $query = $this->DB2->query("\123\x48\117\x57\40\103\x52\x45\101\124\x45\x20\124\101\x42\114\105\x20\x60{$table}\140\40\x2d\55\x20\154\x69\166\145"); goto T1q61; uEZ65: } goto d5ksX; UIvat: vjtkm: goto S2JQ4; De_fm: $live_table_structures = $development_table_structures = array(); goto kFILe; xA5HC: return $tables_need_updating; goto DQYsS; DLoEZ: Zemub: goto xA5HC; a20YK: foreach ($development_tables as $table) { goto dOzD2; ereTG: $tables_need_updating[] = $table; goto tVQhI; SF9oK: $live_table = isset($live_table_structures[$table]) ? $live_table_structures[$table] : ''; goto BHawC; RUotC: zK3gZ: goto y1k0X; dOzD2: $development_table = $development_table_structures[$table]; goto SF9oK; BHawC: if (!($this->count_differences($development_table, $live_table) > 0)) { goto gOfNR; } goto ereTG; tVQhI: gOfNR: goto RUotC; y1k0X: } goto DLoEZ; kFILe: foreach ($development_tables as $table) { goto fMOul; ThxJr: $table_structure = $query->row_array(); goto XVKOG; XVKOG: $development_table_structures[$table] = $table_structure["\103\162\145\x61\x74\x65\x20\124\141\x62\154\x65"]; goto nbBD4; fMOul: $query = $this->DB1->query("\x53\110\x4f\x57\x20\103\122\x45\101\124\105\x20\124\101\x42\114\105\x20\x60{$table}\x60\x20\55\55\40\144\145\x76"); goto ThxJr; nbBD4: NlMNp: goto DyR3v; DyR3v: } goto UIvat; lFy9S: $tables_need_updating = array(); goto De_fm; d5ksX: xZhOo: goto a20YK; DQYsS: } function count_differences($old, $new) { goto KtWTf; rn_s6: $new = trim(preg_replace("\x2f\134\163\x2b\57", '', $new)); goto CwksY; CwksY: if (!($old == $new)) { goto NWyNR; } goto QADFL; hG3vq: $old = explode("\x20", $old); goto okaLz; okaLz: $new = explode("\40", $new); goto L8hix; DdHo6: mIZ33: goto FtqgN; QlkGi: if (!($old[$i] != $new[$i])) { goto i_i87; } goto n2RsN; d2T3P: if (!($i < $length)) { goto tuFO_; } goto QlkGi; iXFDa: gex4i: goto d2T3P; L8hix: $length = max(count($old), count($new)); goto iWN2N; DsjMX: return $differences; goto Owmaf; WfGuk: goto gex4i; goto L8P3O; QADFL: return $differences; goto i6ZU8; KtWTf: $differences = 0; goto FsBMZ; iWN2N: $i = 0; goto iXFDa; FsBMZ: $old = trim(preg_replace("\x2f\134\x73\x2b\x2f", '', $old)); goto rn_s6; sJmFP: i_i87: goto DdHo6; L8P3O: tuFO_: goto DsjMX; FtqgN: $i++; goto WfGuk; i6ZU8: NWyNR: goto hG3vq; n2RsN: $differences++; goto sJmFP; Owmaf: } function update_existing_tables($tables) { goto srS42; srS42: $sql_commands_to_run = array(); goto MXcUZ; WwYFo: $sql_commands_to_run = array_merge($sql_commands_to_run, $this->determine_field_changes($table_structure_development, $table_structure_live)); goto avY4n; MXcUZ: $table_structure_development = array(); goto oXyYD; rpeQJ: foreach ($tables as $table) { goto FXPds; ESEHa: $table_structure_live[$table] = $this->table_field_data((array) $this->DB2, $table); goto pW1R0; FXPds: $table_structure_development[$table] = $this->table_field_data((array) $this->DB1, $table); goto ESEHa; pW1R0: FJe0C: goto JQvVZ; JQvVZ: } goto AkzUx; J35zZ: ELTgw: goto WwYFo; AkzUx: Gesk3: goto J35zZ; ZyH_W: if (!(is_array($tables) && !empty($tables))) { goto ELTgw; } goto rpeQJ; oXyYD: $table_structure_live = array(); goto ZyH_W; avY4n: return $sql_commands_to_run; goto e8Cj1; e8Cj1: } function table_field_data($database, $table) { goto JrtvY; QB9n4: cY8rt: goto Jfb5a; vq1KA: zK30P: goto km2dj; Jfb5a: if (!($row = mysql_fetch_assoc($result))) { goto zK30P; } goto HqxYB; WUkJU: $result = mysql_query("\123\110\117\127\40\x43\x4f\x4c\x55\x4d\116\x53\x20\106\122\x4f\115\x20\x60{$table}\140"); goto QB9n4; JrtvY: $conn = mysqli_connect($database["\x68\x6f\x73\x74\x6e\141\x6d\x65"], $database["\165\x73\x65\162\156\141\155\x65"], $database["\x70\x61\163\x73\x77\x6f\162\x64"]); goto kkfOL; HqxYB: $fields[] = $row; goto RqUj2; kkfOL: mysql_select_db($database["\144\x61\164\141\x62\x61\x73\145"]); goto WUkJU; RqUj2: goto cY8rt; goto vq1KA; km2dj: return $fields; goto F3dNy; F3dNy: } function determine_field_changes($source_field_structures, $destination_field_structures) { goto BMnl6; PRaxP: mXBdr: goto JLahH; teK9L: foreach ($source_field_structures as $table => $fields) { goto AC4L2; M4LGS: dDFAD: goto Em05f; Em05f: Wms7E: goto rD9JU; AC4L2: foreach ($fields as $field) { goto Bb3UT; Dy5uB: $differences = array_diff($fields[$n], $destination_field_structures[$table][$n]); goto M5EbA; Oz_f7: $modify_field .= "\73"; goto h0SrM; QqLLq: $previous_field = $fields[$n]["\x46\x69\x65\154\x64"]; goto F2PA5; NrEdr: $sql_commands_to_run[] = $add_field; goto MMAop; drOHe: $modify_field = ''; goto AP631; cJtAp: $modify_field .= isset($fields[$n]["\x45\170\x74\162\x61"]) && $fields[$n]["\105\x78\164\162\x61"] != '' ? "\40" . $fields[$n]["\105\x78\x74\x72\141"] : ''; goto w2FXx; IK_rm: Z9n_G: goto WykGB; hubZU: $add_field = "\101\114\x54\x45\122\40\124\x41\x42\114\x45\40{$table}\40\101\104\104\40\103\117\x4c\125\x4d\x4e\40\140" . $field["\x46\x69\145\154\x64"] . "\140\x20" . $field["\x54\171\x70\145"] . "\x20\103\x48\101\122\101\103\124\x45\122\40\x53\105\124\x20" . $this->CHARACTER_SET; goto gCfQZ; M5EbA: if (!(is_array($differences) && !empty($differences))) { goto H3ZHG; } goto DnXTB; MMAop: goto tE4_8; goto cuPIj; NogAx: wveje: goto KUHsZ; w2FXx: $modify_field .= isset($previous_field) && $previous_field != '' ? "\x20\101\106\124\105\x52\40" . $previous_field : ''; goto Oz_f7; WykGB: tE4_8: goto wGTNn; Bb3UT: if ($this->in_array_recursive($field["\106\151\x65\154\144"], $destination_field_structures[$table])) { goto Bl6fh; } goto hubZU; AP631: $n = 0; goto Uj5M6; h0SrM: H3ZHG: goto QqLLq; dkf65: nBf8v: goto NogAx; es2s3: if (!($modify_field != '' && !in_array($modify_field, $sql_commands_to_run))) { goto nBf8v; } goto x_KrH; gCfQZ: $add_field .= isset($field["\116\165\x6c\154"]) && $field["\116\165\154\154"] == "\x59\105\123" ? "\40\116\165\154\x6c" : ''; goto ZhXJx; lQCZc: $add_field .= "\x3b"; goto NrEdr; fhzIe: $add_field .= isset($field["\105\170\164\162\x61"]) && $field["\105\x78\164\x72\x61"] != '' ? "\40" . $field["\x45\x78\x74\x72\x61"] : ''; goto lQCZc; F2PA5: XaQJ3: goto es2s3; Uj5M6: YBQSt: goto oAI9K; x_KrH: $sql_commands_to_run[] = $modify_field; goto dkf65; ZhXJx: $add_field .= "\x20\x44\105\x46\x41\125\x4c\124\x20" . $field["\104\145\146\x61\x75\154\164"]; goto fhzIe; LWpGu: goto YBQSt; goto IK_rm; KUHsZ: $n++; goto LWpGu; TotJ_: $modify_field .= isset($fields[$n]["\x44\x65\146\141\x75\x6c\164"]) && $fields[$n]["\x44\x65\146\x61\165\154\x74"] != '' ? "\40\104\x45\106\x41\x55\x4c\124\40\x27" . $fields[$n]["\x44\145\x66\141\165\x6c\164"] . "\47" : ''; goto uAe0I; KVEqN: if (!(isset($fields[$n]) && isset($destination_field_structures[$table][$n]) && $fields[$n]["\x46\151\145\x6c\x64"] == $destination_field_structures[$table][$n]["\x46\x69\x65\154\144"])) { goto XaQJ3; } goto Dy5uB; DnXTB: $modify_field = "\101\x4c\x54\x45\122\x20\x54\x41\x42\114\x45\40{$table}\40\115\117\x44\x49\x46\x59\x20\x43\117\114\x55\115\x4e\40\140" . $fields[$n]["\x46\151\145\x6c\144"] . "\x60\40" . $fields[$n]["\124\171\160\145"] . "\x20\x43\x48\101\x52\x41\103\124\x45\x52\x20\123\x45\124\x20" . $this->CHARACTER_SET; goto TotJ_; oAI9K: if (!($n < count($fields))) { goto Z9n_G; } goto KVEqN; wGTNn: UzqTl: goto Xh4oE; uAe0I: $modify_field .= isset($fields[$n]["\x4e\165\x6c\x6c"]) && $fields[$n]["\x4e\165\x6c\154"] == "\131\x45\x53" ? "\40\x4e\125\x4c\x4c" : "\x20\x4e\117\x54\40\116\125\114\x4c"; goto cJtAp; cuPIj: Bl6fh: goto drOHe; Xh4oE: } goto M4LGS; rD9JU: } goto PRaxP; BMnl6: $sql_commands_to_run = array(); goto teK9L; JLahH: return $sql_commands_to_run; goto cOgOv; cOgOv: } function in_array_recursive($needle, $haystack, $strict = false) { goto jU3Rc; jU3Rc: foreach ($haystack as $array => $item) { goto VC9Dr; VC9Dr: $item = $item["\106\x69\x65\154\x64"]; goto Z_EEj; eagpu: ZAkaw: goto LTkiU; EEzee: return true; goto eagpu; Z_EEj: if (!(($strict ? $item === $needle : $item == $needle) || is_array($item) && in_array_recursive($needle, $item, $strict))) { goto ZAkaw; } goto EEzee; LTkiU: PMOr_: goto DIApP; DIApP: } goto rHyJF; rHyJF: RN_1y: goto bjAD2; bjAD2: return false; goto Fy7JA; Fy7JA: } }
