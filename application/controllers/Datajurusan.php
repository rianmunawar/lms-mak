<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 defined("\102\101\123\105\x50\101\x54\x48") or exit("\116\x6f\x20\144\x69\x72\145\x63\164\40\x73\x63\x72\x69\x70\164\x20\141\143\143\145\163\x73\x20\x61\x6c\x6c\x6f\167\x65\x64"); use PhpOffice\PhpSpreadsheet\Spreadsheet; use PhpOffice\PhpSpreadsheet\Writer\Xlsx; use PhpOffice\PhpSpreadsheet\Writer\Xls; use PhpOffice\PhpSpreadsheet\Writer\Csv; use PhpOffice\PhpWord\PhpWord; class Datajurusan extends CI_Controller { public function __construct() { goto sE5UM; Hkpqw: leFBP: goto lDlzB; sE5UM: parent::__construct(); goto zXfXl; TTcKf: goto V61_h; goto Hkpqw; mvmFK: V61_h: goto nfwPw; diB_R: show_error("\110\141\156\171\141\40\x41\x64\x6d\x69\156\x69\x73\164\x72\141\x74\x6f\x72\x20\x79\141\x6e\147\x20\x64\x69\x62\x65\162\151\x20\x68\x61\153\40\x75\156\164\x75\x6b\x20\155\145\x6e\x67\141\x6b\x73\x65\x73\40\x68\141\154\x61\155\x61\x6e\40\151\x6e\151\54\x20\74\141\x20\150\162\x65\x66\75\x22" . base_url("\x64\x61\163\150\x62\x6f\x61\x72\144") . "\x22\76\113\x65\x6d\142\141\x6c\x69\40\153\x65\40\x6d\145\156\x75\x20\141\x77\141\x6c\74\x2f\141\x3e", 403, "\101\x6b\x73\145\x73\40\x54\145\x72\154\x61\162\x61\156\147"); goto LFO5x; gFTNg: if ($this->ion_auth->is_admin()) { goto vPgbh; } goto diB_R; xSsYS: $this->load->model("\104\162\x6f\x70\x64\x6f\167\x6e\137\x6d\x6f\144\x65\x6c", "\x64\162\157\x70\x64\157\x77\x6e"); goto l_MLe; LnJvu: $this->load->model("\104\141\163\x68\x62\x6f\141\x72\x64\137\x6d\x6f\144\x65\154", "\144\141\x73\150\x62\x6f\141\162\144"); goto xSsYS; LFO5x: vPgbh: goto TTcKf; l_MLe: $this->form_validation->set_error_delimiters('', ''); goto COVq7; zXfXl: if (!$this->ion_auth->logged_in()) { goto leFBP; } goto gFTNg; nfwPw: $this->load->library(["\144\141\x74\141\164\141\x62\x6c\x65\163", "\146\157\162\x6d\137\166\x61\154\151\x64\141\x74\x69\x6f\156"]); goto Wn3EG; lDlzB: redirect("\x61\x75\x74\150"); goto mvmFK; Wn3EG: $this->load->model("\115\141\x73\164\x65\x72\137\x6d\157\144\x65\x6c", "\x6d\141\x73\164\x65\162"); goto LnJvu; COVq7: } public function output_json($data, $encode = true) { goto tqRtp; tqRtp: if (!$encode) { goto VgN4s; } goto F3urv; nOQNK: VgN4s: goto Qyz4S; F3urv: $data = json_encode($data); goto nOQNK; Qyz4S: $this->output->set_content_type("\x61\x70\160\154\151\143\x61\164\151\157\156\57\x6a\x73\157\x6e")->set_output($data); goto h8uSu; h8uSu: } public function index() { goto Yhscg; ESTtw: $this->load->view("\155\141\x73\164\x65\x72\57\x6a\165\x72\165\x73\x61\156\57\x64\141\164\x61"); goto dzZq1; iK0zT: $data["\152\x75\x72\165\163\x61\156\x73"] = $jurusans; goto hOIP9; dzZq1: $this->load->view("\137\x74\x65\x6d\x70\x6c\x61\x74\x65\x73\x2f\x64\141\x73\x68\x62\x6f\141\162\144\57\x5f\146\157\x6f\164\145\x72"); goto atmVY; PArpo: $data["\155\141\x70\x65\154\137\160\145\x6d\151\156\141\x74\141\156"] = $this->dropdown->getAllMapelPeminatan(); goto JG0Xs; Xp2QF: $data = ["\165\x73\x65\162" => $user, "\x6a\165\144\165\x6c" => "\x4a\165\162\165\163\141\156", "\x73\165\x62\152\x75\x64\x75\154" => "\104\141\x66\x74\141\x72\x20\x4a\165\162\165\x73\x61\156", "\160\162\x6f\x66\x69\x6c\x65" => $this->dashboard->getProfileAdmin($user->id), "\x73\145\x74\164\151\156\147" => $this->dashboard->getSetting()]; goto w2JOs; QozVh: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto ITh51; hOIP9: $data["\x6a\165\162\165\x73\141\x6e\137\x6d\x61\160\x65\x6c\x73"] = $jurusan_mapels; goto JFZfv; ITh51: $data["\163\x6d\x74\137\x61\143\164\x69\x76\145"] = $this->dashboard->getSemesterActive(); goto PArpo; hdBB1: N8t8J: goto iK0zT; Yhscg: $user = $this->ion_auth->user()->row(); goto Xp2QF; JFZfv: $this->load->view("\x5f\x74\145\155\x70\x6c\x61\x74\145\x73\57\x64\141\x73\x68\142\157\141\x72\144\57\x5f\150\x65\141\144\x65\x72", $data); goto ESTtw; JG0Xs: $jurusans = $this->master->getDataJurusan(); goto k0NI7; k0NI7: $jurusan_mapels = []; goto RdA1Y; RdA1Y: foreach ($jurusans as $jurusan) { $jurusan_mapels[$jurusan->id_jurusan] = $this->master->getDataJurusanMapel(explode("\x2c", $jurusan->mapel_peminatan)); Cqr5K: } goto hdBB1; s5bas: $data["\x74\x70\x5f\141\143\x74\151\166\145"] = $this->dashboard->getTahunActive(); goto QozVh; w2JOs: $data["\164\x70"] = $this->dashboard->getTahun(); goto s5bas; atmVY: } public function add() { goto GLIr_; uHZse: $data["\163\x74\x61\164\x75\163"] = $insert; goto M7pxm; U6RgW: $row_mapels = count($this->input->post("\x6d\141\x70\x65\x6c", true)); goto y27oX; JS14_: $i++; goto lH2sW; y27oX: $i = 0; goto l31Jz; Tw_SO: array_push($mapels, $this->input->post("\x6d\x61\160\145\x6c\133" . $i . "\x5d", true)); goto HCQ2c; Oz0Ds: if (!($i <= $row_mapels)) { goto yHm8U; } goto Tw_SO; lH2sW: goto p3MVF; goto MXzJr; l31Jz: p3MVF: goto Oz0Ds; l0Fz9: $this->master->create("\155\x61\x73\x74\145\x72\x5f\152\x75\162\165\x73\141\x6e", $insert, false); goto uHZse; aH_Sr: FD1xi: goto fRGKE; MXzJr: yHm8U: goto aH_Sr; fRGKE: $insert = ["\156\x61\x6d\x61\x5f\152\165\x72\x75\x73\x61\x6e" => $this->input->post("\x6e\141\x6d\x61\137\x6a\x75\162\x75\x73\x61\x6e", true), "\153\x6f\144\145\x5f\152\x75\x72\165\x73\141\156" => $this->input->post("\153\157\144\x65\137\152\x75\162\x75\x73\141\156", true), "\x6d\141\160\145\154\137\160\x65\x6d\151\x6e\x61\164\x61\x6e" => implode("\54", $mapels)]; goto l0Fz9; cWwPh: $check_mapel = $this->input->post("\x6d\x61\x70\145\154", true); goto G6ZzE; M7pxm: $this->output_json($data); goto F_gA5; G6ZzE: if (!$check_mapel) { goto FD1xi; } goto U6RgW; GLIr_: $mapels = []; goto cWwPh; HCQ2c: LHmHk: goto JS14_; F_gA5: } public function data() { $this->output_json($this->master->getDataTableJurusan(), false); } public function save() { goto XpqOt; lkDzu: ihTO3: goto tZUfY; uIF_d: gT2ae: goto PVDPV; kkzP7: if (!($mode == "\x65\x64\x69\164")) { goto a9Rf7; } goto MlJz3; lwdAp: doLOj: goto adHrT; Q1hGI: $data["\165\x70\x64\141\x74\x65"] = $update; goto GbEnL; sRKNq: $this->form_validation->set_rules($nama_jurusan, "\112\165\x72\x75\x73\141\x6e", "\x72\145\x71\x75\151\162\x65\144"); goto JZLGs; XpqOt: $rows = count($this->input->post("\156\141\155\x61\137\x6a\x75\x72\165\163\141\156", true)); goto WLPV0; Q29Sj: KOfs0: goto ESeLf; VJcgr: if ($this->form_validation->run() === FALSE) { goto JIOk3; } goto X5oAs; r4y0z: goto KOfs0; goto wqa3w; x8PEq: if (!isset($error)) { goto doLOj; } goto QWYEn; WLPV0: $mode = $this->input->post("\155\157\144\145", true); goto KDscx; a874T: $i++; goto r4y0z; ESeLf: if (!($i <= $rows)) { goto cVBO_; } goto Qtwu5; xKC90: $this->master->update("\x6d\x61\x73\164\x65\162\x5f\x6a\x75\162\165\163\141\x6e", $update, "\x69\144\137\x6a\x75\162\x75\163\141\156", null, true); goto Q1hGI; KDscx: $i = 1; goto Q29Sj; u5aM_: JIOk3: goto i5ZUh; dpoTz: JQWyv: goto wq2wM; sY9uE: $this->output_json($data); goto nzSBk; X5oAs: if ($mode == "\x61\144\x64") { goto pLRM6; } goto kkzP7; JeLKC: if ($status) { goto W7CVx; } goto x8PEq; gnhle: if ($mode == "\x61\144\144") { goto ihTO3; } goto oIQp1; i5ZUh: $error[] = [$nama_jurusan => form_error($nama_jurusan)]; goto MshJQ; QWYEn: $data["\145\162\x72\x6f\x72\x73"] = $error; goto lwdAp; Qtwu5: $nama_jurusan = "\x6e\x61\155\x61\x5f\152\x75\x72\165\163\141\156\x5b" . $i . "\x5d"; goto sRKNq; un_Fq: $data["\151\x6e\x73\145\x72\164"] = $insert; goto HJVvB; VAcP8: $insert[] = ["\156\141\155\141\x5f\152\x75\162\x75\163\141\x6e" => $this->input->post($nama_jurusan, true)]; goto zl3Bm; GbEnL: yoysj: goto ejbux; oGBiq: a9Rf7: goto Vc0Jp; HJVvB: Bd9aZ: goto dpoTz; Bojyk: W7CVx: goto gnhle; Vc0Jp: goto Jho0B; goto Rt6JW; tZUfY: $this->master->create("\155\141\x73\164\x65\x72\137\x6a\x75\162\x75\163\x61\x6e", $insert, true); goto un_Fq; adHrT: goto JQWyv; goto Bojyk; zl3Bm: Jho0B: goto WgctU; j4U4H: goto gT2ae; goto u5aM_; ejbux: goto Bd9aZ; goto lkDzu; wq2wM: $data["\x73\x74\141\164\165\x73"] = $status; goto sY9uE; Rt6JW: pLRM6: goto VAcP8; wqa3w: cVBO_: goto JeLKC; WgctU: $status = TRUE; goto j4U4H; oIQp1: if (!($mode == "\145\x64\x69\x74")) { goto yoysj; } goto xKC90; MlJz3: $update[] = array("\151\144\x5f\152\165\162\165\163\x61\156" => $this->input->post("\151\x64\x5f\x6a\x75\162\x75\163\141\156\133" . $i . "\135", true), "\156\141\155\x61\137\x6a\x75\162\165\x73\141\x6e" => $this->input->post($nama_jurusan, true)); goto oGBiq; MshJQ: $status = FALSE; goto uIF_d; PVDPV: dK3xz: goto a874T; JZLGs: $this->form_validation->set_message("\162\145\x71\x75\x69\x72\x65\x64", "\x7b\x66\x69\x65\154\x64\175\x20\127\141\152\x69\x62\40\x64\151\x69\x73\x69"); goto VJcgr; nzSBk: } public function update() { $data = $this->master->updateJurusan(); $this->output->set_content_type("\141\160\160\x6c\x69\143\x61\x74\151\157\x6e\57\x6a\163\157\156")->set_output($data); } public function delete() { goto F9HEC; Y9pTW: goto tRK8Y; goto ILLTy; rQbla: Ygbbv: goto Y9pTW; X0hLr: aRZir: goto kjYdy; uBy0h: zPwpP: goto ZlpNb; mzEQ9: if (!$this->master->delete("\155\141\x73\x74\x65\x72\137\152\165\x72\x75\163\141\x6e", $chk, "\151\x64\137\x6a\x75\x72\x75\x73\141\156")) { goto Ygbbv; } goto x9yUl; RJjE3: $tables = []; goto TEWCH; Umfzx: foreach ($tables as $table) { goto oQxv9; iptSq: array_push($messages, $table); goto RUSjQ; hIZv2: $this->db->where_in("\151\144\137\x6a\165\x72\x75\x73\141\156", $chk); goto CnSUK; xtIbS: h1z_q: goto wCnoN; oQxv9: if (!($table != "\155\141\x73\164\145\162\x5f\x6a\x75\162\x75\x73\141\x6e")) { goto Gg221; } goto CJxyh; CJxyh: if ($table == "\x6d\x61\x73\x74\x65\x72\137\153\x65\x6c\141\163") { goto V2l4S; } goto hIZv2; CnSUK: $num = $this->db->count_all_results($table); goto VU7C8; zdjqi: $num = $this->db->count_all_results($table); goto xtIbS; RUSjQ: z1E4u: goto xnSnI; VU7C8: goto h1z_q; goto XLUTr; xBVO6: iE3sS: goto WAF19; XLUTr: V2l4S: goto sBkLg; sBkLg: $this->db->where_in("\x6a\165\162\x75\163\141\156\137\x69\x64", $chk); goto zdjqi; xnSnI: Gg221: goto xBVO6; wCnoN: if (!($num > 0)) { goto z1E4u; } goto iptSq; WAF19: } goto fhPvf; fhPvf: Wkgr8: goto X3nAU; gJuh6: $messages = []; goto RJjE3; TEWCH: $tabless = $this->db->list_tables(); goto ME_9H; X3nAU: if (count($messages) > 0) { goto CKkPe; } goto mzEQ9; F9HEC: $chk = $this->input->post("\x63\150\145\143\x6b\x65\144", true); goto cITvs; cITvs: if (!$chk) { goto zPwpP; } goto gJuh6; ZlpNb: $this->output_json(["\x73\164\141\x74\165\x73" => false, "\164\157\x74\141\154" => "\x54\x69\x64\x61\x6b\40\141\x64\x61\x20\144\x61\x74\x61\x20\171\x61\156\147\40\144\x69\160\x69\154\151\x68\x21"]); goto X0hLr; ZSUxE: Y6uOk: goto Umfzx; ME_9H: foreach ($tabless as $table) { goto bNgGR; gAQHn: v0kXZ: goto ccekZ; bNgGR: $fields = $this->db->field_data($table); goto VjSEO; sLn60: atVt3: goto gAQHn; VjSEO: foreach ($fields as $field) { goto DbAP0; DbAP0: if (!($field->name == "\x69\x64\x5f\152\165\x72\165\163\x61\156" || $field->name == "\x6a\165\x72\165\163\141\156\137\x69\144")) { goto ZNrIu; } goto RVV5j; KlnxQ: ryZBL: goto hwYbP; RVV5j: array_push($tables, $table); goto Ozf9X; Ozf9X: ZNrIu: goto KlnxQ; hwYbP: } goto sLn60; ccekZ: } goto ZSUxE; NbZt3: $this->output_json(["\x73\164\x61\164\165\x73" => false, "\x74\157\164\141\x6c" => "\104\x61\164\x61\40\x4a\165\162\165\163\141\x6e\40\x64\151\147\x75\x6e\x61\153\141\156\x20\x64\x69\x20" . count($messages) . "\40\x74\x61\x62\145\x6c\x3a\x3c\142\x72\76" . implode("\x3c\142\x72\x3e", $messages)]); goto YkBGQ; x9yUl: $this->output_json(["\163\164\141\x74\165\x73" => true, "\164\157\164\141\x6c" => count($chk)]); goto rQbla; YkBGQ: tRK8Y: goto TOxge; ILLTy: CKkPe: goto NbZt3; TOxge: goto aRZir; goto uBy0h; kjYdy: } public function load_jurusan() { $data = $this->master->getJurusan(); $this->output_json($data); } public function import($import_data = null) { goto S2Qpu; RLU16: $data["\163\155\164\x5f\141\143\x74\x69\166\x65"] = $this->dashboard->getSemesterActive(); goto g5l9L; S2Qpu: $user = $this->ion_auth->user()->row(); goto vt7YQ; vt7YQ: $data = ["\x75\163\145\x72" => $user, "\x6a\x75\144\x75\x6c" => "\x49\155\160\x6f\x72\164\40\x4a\165\x72\x75\x73\141\x6e", "\163\x75\142\152\x75\144\x75\x6c" => "\111\x6d\x70\157\x72\164\x20\x4a\165\x72\x75\x73\141\156", "\x70\x72\x6f\146\151\154\x65" => $this->dashboard->getProfileAdmin($user->id), "\163\x65\x74\164\151\156\x67" => $this->dashboard->getSetting()]; goto o3_sh; o3_sh: if (!($import_data != null)) { goto nhL0z; } goto ZWK7e; g5l9L: $this->load->view("\x5f\x74\x65\x6d\160\x6c\x61\x74\x65\163\x2f\x64\x61\163\x68\142\157\141\x72\144\57\137\x68\145\141\144\x65\x72", $data); goto K6Vf_; Y_X7z: nhL0z: goto cPDGE; PIfXC: $this->load->view("\137\164\145\x6d\x70\x6c\x61\164\145\x73\57\144\x61\163\x68\x62\x6f\141\162\144\57\x5f\x66\157\157\164\145\162"); goto f3HEQ; ZWK7e: $data["\x69\x6d\x70\157\x72\164"] = $import_data; goto Y_X7z; WX8I_: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto RLU16; cPDGE: $data["\x74\x70"] = $this->dashboard->getTahun(); goto kpmx3; K6Vf_: $this->load->view("\155\x61\x73\164\145\x72\x2f\x6a\x75\x72\x75\163\x61\x6e\57\x69\x6d\160\157\162\164"); goto PIfXC; kpmx3: $data["\164\160\137\141\x63\164\151\166\145"] = $this->dashboard->getTahunActive(); goto WX8I_; f3HEQ: } public function preview() { goto ftHhu; Mv04h: $sheetData = $spreadsheet->getActiveSheet()->toArray(); goto FmbHu; ngHTg: $i++; goto NsUpK; d_pPc: if (!$this->upload->do_upload("\x75\x70\154\x6f\x61\144\x5f\x66\151\154\145")) { goto ifsxZ; } goto XJf52; gIlgB: iVlyh: goto e3bSv; vOj90: $this->load->library("\x75\x70\x6c\157\141\x64", $config); goto d_pPc; pNerX: if (!($i < count($sheetData))) { goto M94Vw; } goto q4sOw; NsUpK: goto nVKDN; goto K3haM; CSLeI: $data[] = ["\x6e\141\155\x61" => $sheetData[$i][1], "\x6b\x6f\144\145" => $sheetData[$i][2]]; goto gIlgB; nNuE0: die; goto qZjvt; VVWMo: $ext = $this->upload->data("\x66\x69\x6c\145\137\x65\170\164"); goto whyeW; vGz8f: $spreadsheet = $reader->load($file); goto Mv04h; whyeW: switch ($ext) { case "\x2e\x78\154\163\170": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx(); goto RYRgW; case "\56\170\154\163": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xls(); goto RYRgW; case "\56\143\163\166": $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv(); goto RYRgW; default: echo "\165\x6e\153\156\x6f\x77\156\x20\x66\x69\x6c\x65\x20\x65\170\x74"; die; } goto M9ksV; H85Cg: $i = 1; goto MHuhb; co356: $error = $this->upload->display_errors(); goto BlwNS; MHuhb: nVKDN: goto pNerX; qZjvt: LSQ1N: goto I5ykY; av0q1: echo json_encode($data); goto RDDjz; Y6oKC: unlink($file); goto av0q1; vTugG: ifsxZ: goto co356; XJf52: $file = $this->upload->data("\x66\x75\x6c\x6c\x5f\160\141\x74\150"); goto VVWMo; e3bSv: cA6r9: goto ngHTg; ftHhu: $config["\x75\x70\154\x6f\141\144\137\x70\x61\x74\x68"] = "\x2e\57\x75\x70\154\x6f\141\144\163\57\x69\x6d\x70\157\x72\164\x2f"; goto HkoYb; q4sOw: if (!($sheetData[$i][0] != null)) { goto iVlyh; } goto CSLeI; K3haM: M94Vw: goto Y6oKC; Xjg2X: $config["\155\141\x78\x5f\163\x69\172\145"] = 2048; goto uXA2Q; RDDjz: goto LSQ1N; goto vTugG; HkoYb: $config["\x61\154\154\157\167\145\144\137\164\171\x70\x65\163"] = "\170\154\163\174\170\154\x73\x78\174\143\x73\x76"; goto Xjg2X; fMUzT: RYRgW: goto vGz8f; uXA2Q: $config["\x65\x6e\143\162\171\160\164\x5f\x6e\141\x6d\145"] = true; goto vOj90; M9ksV: sWQ1D: goto fMUzT; BlwNS: echo $error; goto nNuE0; FmbHu: $data = []; goto H85Cg; I5ykY: } public function previewWord() { goto CKZTY; geRD5: $dom = new DOMDocument(); goto PNvtF; Ietfv: $htmlWriter = new \PhpOffice\PhpWord\Writer\HTML($phpWord); goto csKgP; m7ljU: LofBo: goto Htc9z; VMoX_: echo json_encode($data); goto EzRo3; D3G1K: $phpWord = \PhpOffice\PhpWord\IOFactory::load($file); goto Ietfv; h_zTb: $i = 1; goto PkBBj; wyV7Y: goto iCO5w; goto rBtZi; XIllD: if (!$this->upload->do_upload("\x75\x70\154\x6f\141\144\137\x66\151\x6c\145")) { goto LofBo; } goto VtAk5; It4PI: $config["\155\x61\170\x5f\x73\151\x7a\145"] = 2048; goto eRDa2; csKgP: try { $htmlWriter->save("\x2e\57\165\160\154\157\141\x64\x73\57\164\145\155\160\57\144\x6f\143\56\x68\x74\x6d\154"); } catch (\PhpOffice\PhpWord\Exception\Exception $e) { } goto orjXi; PNvtF: $dom->loadHTML($text); goto RJUbZ; CKZTY: $config["\165\x70\x6c\x6f\141\x64\137\x70\141\x74\x68"] = "\56\57\x75\160\154\157\141\x64\163\x2f\151\x6d\160\157\x72\x74\57"; goto Uh2PY; sgSHl: $tables = $dom->getElementsByTagName("\164\x61\142\154\145"); goto GNHPA; UbEN4: if (!($i < $rows->count())) { goto zgZfW; } goto vqS7X; wxQwM: $i++; goto wyV7Y; RJUbZ: $data = []; goto YIlZg; vPAXf: die; goto eGTa6; Htc9z: $error = $this->upload->display_errors(); goto ufDJ4; EzRo3: goto Rbl_Y; goto m7ljU; vqS7X: $cols = $rows[$i]->getElementsByTagName("\x74\x64"); goto ABtcj; ufDJ4: echo $error; goto vPAXf; Uh2PY: $config["\x61\x6c\154\157\x77\145\x64\137\x74\171\x70\x65\x73"] = "\x64\x6f\143\170"; goto It4PI; GNHPA: $rows = $tables->item(0)->getElementsByTagName("\164\x72"); goto h_zTb; ABtcj: $data[] = ["\x6e\141\155\x61" => $cols->item(1)->nodeValue, "\153\157\x64\x65" => $cols->item(2)->nodeValue]; goto WPJPj; rBtZi: zgZfW: goto VMoX_; VtAk5: $file = $this->upload->data("\x66\x75\x6c\x6c\137\x70\141\164\150"); goto D3G1K; eGTa6: Rbl_Y: goto ldwyI; orjXi: unlink($file); goto BVh0g; WPJPj: hhiYV: goto wxQwM; rIAmq: $this->load->library("\x75\x70\154\157\x61\x64", $config); goto XIllD; PkBBj: iCO5w: goto UbEN4; YIlZg: $dom->preserveWhiteSpace = false; goto sgSHl; BVh0g: $text = file_get_contents("\x2e\x2f\165\x70\x6c\x6f\x61\144\x73\x2f\x74\x65\x6d\x70\x2f\144\157\143\56\150\x74\x6d\x6c"); goto geRD5; eRDa2: $config["\x65\156\143\162\171\x70\x74\137\x6e\x61\x6d\145"] = true; goto rIAmq; ldwyI: } public function do_import() { goto kvJqE; z6x7Z: foreach ($data as $j) { $jurusan[] = ["\x6e\141\155\141\x5f\x6a\165\162\165\x73\141\x6e" => $j->nama, "\153\x6f\x64\145\x5f\152\x75\x72\x75\x73\141\x6e" => $j->kode]; vt45N: } goto B_8jV; kvJqE: $data = json_decode($this->input->post("\152\x75\x72\x75\163\x61\x6e", true)); goto P3BsX; Nhy0E: $this->output->set_content_type("\x61\x70\x70\154\151\x63\x61\164\151\157\156\x2f\x6a\x73\x6f\x6e")->set_output($save); goto zQjvv; FGEN1: $save = $this->master->create("\x6d\141\163\x74\145\x72\x5f\x6a\165\x72\x75\163\x61\156", $jurusan, true); goto Nhy0E; P3BsX: $jurusan = []; goto z6x7Z; B_8jV: WKCs9: goto FGEN1; zQjvv: } function updateById() { goto ZExZS; LIWFE: $this->db->set("\x6b\157\144\145\x5f\x6a\165\x72\165\x73\141\x6e", $kode); goto S0M5Z; ZExZS: $id = $this->input->post("\x69\x64\x5f\x6a\165\x72\x75\x73\141\x6e"); goto Z2pTU; j4aP2: $this->db->set("\x6e\141\155\x61\x5f\152\165\162\165\x73\141\156", $nama); goto LIWFE; c5m0S: return $this->db->update("\x6d\141\x73\164\x65\x72\137\152\165\162\x75\163\x61\156"); goto HoBGO; Z2pTU: $nama = $this->input->post("\165\163\x65\162\156\x61\155\145", true); goto WJkec; WJkec: $kode = $this->input->post("\145\155\x61\151\154", true); goto j4aP2; S0M5Z: $this->db->where("\x69\x64\137\152\x75\162\165\163\141\x6e", $id); goto c5m0S; HoBGO: } public function hapusById() { goto S56Pd; UkX3A: $this->db->where("\151\144\137\152\165\162\165\x73\x61\156", $id); goto dTmNX; S56Pd: $id = $this->input->post("\151\144"); goto UkX3A; dTmNX: return $this->db->delete("\155\x61\x73\164\x65\x72\x5f\152\x75\162\165\163\x61\156"); goto M2JZo; M2JZo: } function exist($table, $data) { goto k5ysM; sUgm1: return true; goto mMnEQ; aI4J_: ixiMg: goto XMG91; k5ysM: $query = $this->db->get_where($table, $data); goto lt7aA; ens6i: SsyMy: goto LZjMo; lt7aA: $count = $query->num_rows(); goto Ofb6d; XMG91: return false; goto ens6i; mMnEQ: goto SsyMy; goto aI4J_; Ofb6d: if ($count === 0) { goto ixiMg; } goto sUgm1; LZjMo: } }
