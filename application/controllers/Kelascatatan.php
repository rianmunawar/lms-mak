<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
 class Kelascatatan extends CI_Controller { public function __construct() { goto bKpXU; bKpXU: parent::__construct(); goto lq2UE; wIIpt: show_error("\110\x61\156\x79\141\x20\101\x64\155\151\x6e\x69\x73\164\x72\x61\x74\157\x72\40\x79\141\156\147\40\x64\x69\142\145\x72\x69\x20\x68\x61\x6b\40\165\156\x74\x75\153\40\x6d\x65\156\147\141\x6b\x73\x65\163\x20\x68\x61\154\x61\155\141\156\x20\x69\x6e\151\54\40\74\x61\x20\x68\162\x65\x66\75\x22" . base_url("\x64\141\163\x68\142\157\141\x72\144") . "\42\76\113\x65\x6d\x62\141\x6c\151\40\x6b\145\40\155\x65\156\165\x20\141\167\141\x6c\x3c\57\x61\x3e", 403, "\x41\153\x73\145\x73\40\124\145\162\x6c\x61\x72\141\x6e\147"); goto rxWu5; EM0Y0: oar6n: goto NnapO; NnapO: redirect("\x61\x75\x74\150"); goto r6IFg; Z3PUt: goto l8aDI; goto EM0Y0; Va2Yx: $this->load->model("\113\145\154\141\x73\137\x6d\157\x64\x65\154", "\153\145\x6c\141\163"); goto AMMVE; SVGJS: if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\x67\165\x72\x75"))) { goto sej7g; } goto wIIpt; vuh60: $this->load->library(["\x64\x61\164\141\x74\x61\x62\154\x65\x73", "\146\x6f\x72\x6d\x5f\x76\x61\154\151\x64\141\x74\151\157\156"]); goto Los24; AMMVE: $this->form_validation->set_error_delimiters('', ''); goto VP_Nk; mM3xC: $this->load->model("\x44\x61\163\150\142\x6f\141\x72\144\x5f\155\157\x64\145\154", "\x64\x61\x73\x68\x62\157\x61\162\144"); goto quVIS; Los24: $this->load->model("\115\x61\x73\164\x65\x72\x5f\155\x6f\x64\x65\154", "\x6d\141\x73\164\x65\162"); goto mM3xC; quVIS: $this->load->model("\x44\x72\x6f\x70\144\x6f\x77\x6e\137\155\x6f\144\x65\154", "\x64\162\157\x70\x64\157\167\156"); goto Va2Yx; rxWu5: sej7g: goto Z3PUt; r6IFg: l8aDI: goto vuh60; lq2UE: if (!$this->ion_auth->logged_in()) { goto oar6n; } goto SVGJS; VP_Nk: } public function output_json($data, $encode = true) { goto GElWx; HE77P: $this->output->set_content_type("\x61\160\160\x6c\x69\143\141\x74\151\157\156\57\x6a\163\x6f\x6e")->set_output($data); goto SVYij; JA10a: $data = json_encode($data); goto JeJGB; JeJGB: hnsbW: goto HE77P; GElWx: if (!$encode) { goto hnsbW; } goto JA10a; SVYij: } public function index() { goto DC0Ep; aGJl3: $id_kelas = $this->input->get("\153\145\x6c\141\163", true); goto Gn3Bh; Sg02Q: $this->load->view("\155\145\x6d\142\145\162\163\57\x67\x75\x72\x75\x2f\x74\145\x6d\x70\154\141\x74\x65\x73\57\150\x65\141\144\145\162", $data); goto mOsfg; CkKuu: fjdQd: goto IpDh1; pPm6Q: HtQX7: goto q0nK9; MGEtl: $this->load->view("\137\164\145\x6d\160\x6c\141\x74\145\x73\57\144\x61\x73\x68\x62\157\141\162\x64\x2f\x5f\146\157\x6f\x74\x65\x72"); goto pPm6Q; RwLOp: $data["\x74\160\x5f\x61\x63\x74\151\x76\145"] = $tp; goto wjlbR; iQSmy: vUW7M: goto ljXYr; JFbhR: if (!($mapel != null)) { goto hzVTW; } goto vo67I; IVTC_: ZhVJC: goto NydsU; Cmy0B: $data["\x6b\x65\x6c\141\x73"] = $this->dropdown->getAllKelas($tp->id_tp, $smt->id_smt); goto fmvdy; mOsfg: $this->load->view("\155\145\x6d\x62\x65\x72\x73\x2f\x67\x75\162\165\x2f\x6b\x65\x6c\141\163\57\143\x61\x74\141\164\x61\x6e\x2f\144\x61\x74\x61"); goto NEPX2; L8kBf: $cat_kelas = $this->kelas->getCatatanMapelKelas($id_kelas, $id_mapel, $tp->id_tp, $smt->id_smt); goto pEWPz; kpbuD: $data["\160\162\157\146\x69\154\x65"] = $this->dashboard->getProfileAdmin($user->id); goto NQl5X; NydsU: zQSls: goto jUOyG; NQl5X: $data["\155\x61\x70\145\154"] = $this->dropdown->getAllMapel(); goto Cmy0B; Oyh3n: $smt = $this->dashboard->getSemesterActive(); goto kJCZM; vc4J4: $data["\x63\x61\x74\137\163\151\x73\x77\141"] = $this->kelas->getCatatanMapelSiswa($tp->id_tp, $smt->id_smt, $id_kelas, $id_mapel); goto iQSmy; jUOyG: $data["\155\x61\x70\145\154"] = $arrMapel; goto slSqJ; vsoep: $data["\x63\x61\164\x5f\x6b\x65\154\x61\163"] = $cat_kelas; goto vc4J4; dWpsw: $data["\151\x64\x5f\x67\x75\x72\165"] = $guru->id_guru; goto zzF7P; slSqJ: $data["\153\145\154\x61\163"] = $arrKelas; goto Sg02Q; aLSe8: foreach ($mapel as $m) { goto vaI5m; vaI5m: $arrMapel[$m->id_mapel] = $m->nama_mapel; goto Uw0uL; dsfhA: MVaCu: goto q6sJJ; Uw0uL: foreach ($m->kelas_mapel as $kls_mapel) { goto jophW; PqR1N: i4Mr_: goto pIDRC; iWilj: wJkIq: goto PqR1N; jophW: foreach ($kelasses as $key => $kelass) { goto SJ0Ni; DQTHN: $arrKelas[$m->id_mapel][$key] = $kelass; goto TfWMf; TfWMf: OYSIA: goto xQBQ0; xQBQ0: Wrjmk: goto owBP2; SJ0Ni: if (!($kls_mapel->kelas == $key)) { goto OYSIA; } goto DQTHN; owBP2: } goto iWilj; pIDRC: } goto o8Mq_; o8Mq_: aa8Y3: goto dsfhA; q6sJJ: } goto IVTC_; WJ7F0: $data["\147\165\162\165"] = $guru; goto dWpsw; XcZPg: X78cJ: goto F3aa7; nM3Id: if (!($mapel != null)) { goto zQSls; } goto aLSe8; pIl8f: goto HtQX7; goto C2vGP; fmvdy: $this->load->view("\x5f\164\x65\155\x70\154\141\x74\145\x73\x2f\144\x61\163\x68\142\157\141\x72\144\x2f\137\x68\x65\x61\144\x65\162", $data); goto yF31W; IpDh1: hzVTW: goto bcPkV; E7mXW: $data["\163\x6d\x74\x5f\x61\x63\164\151\x76\x65"] = $smt; goto aGJl3; vo67I: foreach ($mapel as $mpl) { goto u3dLH; hg8WX: L1Kkw: goto pZmTn; pZmTn: yZdMS: goto REpG1; u3dLH: foreach ($mpl->kelas_mapel as $id_mapel) { array_push($arrId, $id_mapel->kelas); GDOZf: } goto hg8WX; REpG1: } goto CkKuu; ljXYr: if ($this->ion_auth->is_admin()) { goto j3INH; } goto LpDwP; SkCFn: $kelasses = $this->dropdown->getAllKelasByArrayId($tp->id_tp, $smt->id_smt, $arrId); goto XcZPg; F3aa7: $arrMapel = []; goto LVcRS; iuhUY: ClyOT: goto vsoep; hLqQB: $data["\155\x61\160\145\x6c\137\x73\145\154\145\x63\x74\145\144"] = $id_mapel; goto T6LRV; wjlbR: $data["\x73\x6d\x74"] = $this->dashboard->getSemester(); goto E7mXW; SG2_x: $setting = $this->dashboard->getSetting(); goto Xawnd; GFyry: if (!(count($arrId) > 0)) { goto X78cJ; } goto SkCFn; kJCZM: $data["\x74\160"] = $this->dashboard->getTahun(); goto RwLOp; LpDwP: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto WJ7F0; PEZhK: $tp = $this->dashboard->getTahunActive(); goto Oyh3n; NEPX2: $this->load->view("\155\x65\155\x62\x65\x72\163\57\147\165\x72\165\57\164\x65\x6d\160\x6c\x61\164\145\x73\57\146\157\157\164\x65\162"); goto pIl8f; C2vGP: j3INH: goto kpbuD; zzF7P: $mapel_guru = $this->kelas->getGuruMapelKelas($guru->id_guru, $tp->id_tp, $smt->id_smt); goto NDrXi; yF31W: $this->load->view("\155\145\x6d\x62\x65\x72\163\57\x67\x75\162\x75\57\153\145\154\141\x73\57\x63\x61\x74\x61\x74\141\x6e\57\144\141\x74\x61"); goto MGEtl; Gn3Bh: $id_mapel = $this->input->get("\155\x61\160\x65\154", true); goto aiOak; DC0Ep: $user = $this->ion_auth->user()->row(); goto SG2_x; E8DIp: $arrId = []; goto JFbhR; bcPkV: $kelasses = []; goto GFyry; Xawnd: $data = ["\165\163\x65\x72" => $user, "\152\165\x64\x75\154" => "\x43\x61\164\141\x74\141\156\x20\x47\x75\x72\x75", "\163\x75\x62\x6a\x75\144\165\x6c" => "\103\x61\x74\x61\x74\x61\x6e\40\123\145\x6c\x61\155\141\x20\120\145\155\142\x65\x6c\141\152\x61\162\141\156", "\x73\x65\164\164\151\156\147" => $setting]; goto PEZhK; T6LRV: if (!($id_kelas != null)) { goto vUW7M; } goto L8kBf; NDrXi: $mapel = json_decode(json_encode(unserialize($mapel_guru->mapel_kelas))); goto E8DIp; pEWPz: foreach ($cat_kelas as $ck) { $ck->reading = unserialize($ck->reading); DEUde: } goto iuhUY; aiOak: $data["\153\x65\154\141\163\x5f\x73\x65\154\145\143\164\x65\144"] = $id_kelas; goto hLqQB; LVcRS: $arrKelas = []; goto nM3Id; q0nK9: } public function siswa() { goto ttGbr; wKTK0: $data["\164\x70\x5f\x61\143\164\x69\166\145"] = $tp; goto Ai7v1; iuJYd: poWIM: goto Tln7Y; XB1_c: $this->load->view("\x6d\145\155\142\145\162\x73\57\147\165\162\x75\57\x74\x65\x6d\x70\x6c\x61\x74\x65\163\57\x68\145\x61\144\145\162", $data); goto TH1H_; odwC4: $data["\155\141\x70\145\154"] = $id_mapel; goto Dnslt; ttGbr: $id_siswa = $this->input->get("\x69\144"); goto PNKl0; Znz9O: $user = $this->ion_auth->user()->row(); goto KYThk; Znxzv: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto LfdHZ; Z5bcC: $data["\x70\x72\x6f\146\151\154\145"] = $this->dashboard->getProfileAdmin($user->id); goto SeJgn; xuUaE: o6tXb: goto Z5bcC; LfdHZ: $data["\147\x75\162\165"] = $guru; goto XB1_c; HPqib: $tp = $this->master->getTahunActive(); goto bHnkw; Atck9: $id_kelas = $this->input->get("\x6b\145\154\141\163"); goto Znz9O; bHnkw: $smt = $this->master->getSemesterActive(); goto ALxlD; Dnslt: $data["\x6b\145\154\141\x73"] = $id_kelas; goto PtDY6; QKatN: $this->load->view("\x6d\x65\x6d\142\145\x72\x73\x2f\x67\165\162\165\x2f\153\x65\154\141\163\x2f\x63\x61\x74\x61\164\x61\156\57\160\x65\x72\163\x69\163\167\141"); goto emDy_; TH1H_: $this->load->view("\x6d\145\x6d\x62\145\x72\163\x2f\x67\165\162\x75\x2f\153\x65\x6c\x61\x73\x2f\x63\x61\164\141\x74\x61\x6e\57\160\145\x72\163\x69\x73\x77\x61"); goto lgGQQ; KYThk: $data = ["\x75\x73\x65\x72" => $user, "\x6a\165\144\165\x6c" => "\x43\x61\x74\x61\164\141\156\40\123\151\163\167\141", "\163\x75\142\x6a\165\x64\165\154" => "\x43\x61\164\x61\164\x61\156\40\123\151\x73\167\x61", "\163\x65\164\164\x69\156\x67" => $this->dashboard->getSetting()]; goto HPqib; E6EyT: $data["\x73\x6d\164\137\x61\x63\164\151\x76\145"] = $smt; goto wki5v; wki5v: $data["\x73\151\163\x77\141"] = $this->master->getSiswaById($id_siswa); goto uqSeZ; SeJgn: $this->load->view("\x5f\x74\145\x6d\x70\x6c\141\x74\145\163\x2f\144\x61\x73\x68\142\157\x61\162\x64\57\x5f\x68\x65\141\144\x65\x72", $data); goto QKatN; lgGQQ: $this->load->view("\155\x65\155\x62\145\162\163\57\x67\165\x72\165\x2f\x74\x65\155\x70\x6c\141\x74\145\163\x2f\146\x6f\157\164\x65\x72"); goto CDCb9; emDy_: $this->load->view("\137\x74\x65\155\x70\154\x61\164\145\x73\x2f\144\141\163\150\x62\157\141\162\x64\x2f\137\146\x6f\157\164\145\x72"); goto iuJYd; Ai7v1: $data["\163\x6d\164"] = $this->dashboard->getSemester(); goto E6EyT; ALxlD: $data["\164\x70"] = $this->dashboard->getTahun(); goto wKTK0; CDCb9: goto poWIM; goto xuUaE; PNKl0: $id_mapel = $this->input->get("\155\141\160\x65\x6c"); goto Atck9; PtDY6: if ($this->ion_auth->is_admin()) { goto o6tXb; } goto Znxzv; uqSeZ: $data["\143\141\x74\x61\x74\141\x6e\137\x73\151\x73\167\x61"] = $this->kelas->getAllCatatanMapelSiswa($id_siswa, $id_mapel, $tp->id_tp, $smt->id_smt); goto odwC4; Tln7Y: } public function saveCatatanKelas() { goto JcNSZ; qjNs5: $level = $this->input->post("\154\x65\166\145\x6c", true); goto tIWNo; QhL_Y: $insert = $this->master->create("\153\145\x6c\x61\x73\x5f\143\141\x74\x61\x74\x61\156\x5f\155\141\x70\x65\154", $data); goto nllpH; BRQ70: $text = $this->input->post("\164\145\x78\164", true); goto qjNs5; nllpH: $this->output_json($insert); goto ldbj9; mrus0: $data = ["\151\144\x5f\164\160" => $tp->id_tp, "\151\x64\137\163\155\x74" => $smt->id_smt, "\x74\x79\x70\x65" => "\61", "\x69\144\x5f\155\x61\x70\x65\154" => $id_mapel, "\151\144\137\153\x65\154\x61\163" => $id_kelas, "\x69\x64\x5f\x67\x75\x72\165" => $guru->id_guru, "\x6c\x65\x76\145\x6c" => $level, "\164\x65\x78\x74" => $text, "\162\145\x61\144\x69\156\x67" => serialize([])]; goto QhL_Y; JcNSZ: $tp = $this->dashboard->getTahunActive(); goto YFpZT; P9XZr: $id_mapel = $this->input->post("\151\x64\137\x6d\x61\x70\145\x6c", true); goto BRQ70; vhr7t: $id_kelas = $this->input->post("\151\144\x5f\x6b\145\154\x61\x73"); goto P9XZr; tIWNo: $tgl = date("\x59\55\x6d\x2d\x64"); goto mrus0; beIoU: $user = $this->ion_auth->user()->row(); goto ZnDxA; YFpZT: $smt = $this->dashboard->getSemesterActive(); goto beIoU; ZnDxA: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto vhr7t; ldbj9: } public function saveCatatanSiswa() { goto FDa6z; PrAri: $data = ["\x69\x64\137\x74\x70" => $tp->id_tp, "\151\144\137\163\x6d\x74" => $smt->id_smt, "\x74\171\160\x65" => "\62", "\151\144\137\x6d\x61\160\x65\x6c" => $id_mapel, "\151\x64\137\x73\151\x73\167\141" => $id_siswa, "\151\144\137\147\x75\x72\165" => $guru->id_guru, "\x6c\x65\x76\x65\x6c" => $level, "\164\x65\170\x74" => $text, "\x72\x65\141\144\151\156\147" => serialize([])]; goto KUvPY; EZ_ht: $level = $this->input->post("\154\x65\166\x65\154", true); goto PrAri; HYuz9: $guru = $this->dashboard->getDataGuruByUserId($user->id, $tp->id_tp, $smt->id_smt); goto Jl_i5; Six00: $id_mapel = $this->input->post("\x69\144\x5f\x6d\x61\x70\145\x6c", true); goto qxolf; KUvPY: $insert = $this->master->create("\153\145\154\x61\163\137\143\x61\x74\x61\164\141\156\137\x6d\x61\160\x65\x6c", $data); goto PIrkF; PIrkF: $this->output_json($insert); goto B_x6w; yX4zo: $user = $this->ion_auth->user()->row(); goto HYuz9; SQrfu: $smt = $this->dashboard->getSemesterActive(); goto yX4zo; FDa6z: $tp = $this->dashboard->getTahunActive(); goto SQrfu; Jl_i5: $id_siswa = $this->input->post("\x69\x64\x5f\163\151\163\167\x61"); goto Six00; qxolf: $text = $this->input->post("\x74\145\170\164", true); goto EZ_ht; B_x6w: } public function hapus($id_catatan) { $delete = $this->master->delete("\153\145\x6c\x61\163\x5f\143\141\x74\141\164\x61\156\x5f\155\x61\160\x65\154", $id_catatan, "\151\144\x5f\143\x61\164\x61\164\141\156"); $this->output_json($delete); } }