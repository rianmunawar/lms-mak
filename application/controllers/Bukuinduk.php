<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Bukuinduk extends CI_Controller
{
    public function __construct()
    {
        goto H4VNq;
        Mnd3C:
        goto jzCcT;
        goto tSRi_;
        d4DVK:
        $this->load->model("\122\x61\x70\157\162\x5f\x6d\x6f\x64\145\x6c", "\162\141\160\157\162");
        goto MKXAW;
        MKXAW:
        $this->load->model("\x4b\145\x6c\141\x73\137\155\157\x64\145\x6c", "\153\145\154\141\x73");
        goto cTVgW;
        zqjQm:
        gl9Yk:
        goto Mnd3C;
        vzvzr:
        $this->form_validation->set_error_delimiters('', '');
        goto EtMQj;
        H4VNq:
        parent::__construct();
        goto bhnfU;
        wAEf6:
        $this->load->model("\x44\x61\x73\150\142\x6f\141\162\144\137\x6d\157\144\145\154", "\x64\141\163\150\x62\157\141\162\144");
        goto d4DVK;
        tSRi_:
        rRKQm:
        goto iGB0U;
        cobKf:
        $this->load->model("\115\x61\x73\164\145\x72\x5f\x6d\x6f\144\145\154", "\x6d\141\x73\x74\x65\162");
        goto vzvzr;
        bhnfU:
        if (!$this->ion_auth->logged_in()) {
            goto rRKQm;
        }
        goto iAeJF;
        azoXh:
        $this->load->library(["\144\141\x74\141\164\141\142\154\145\163", "\x66\157\x72\155\x5f\166\141\x6c\151\x64\x61\x74\x69\x6f\x6e"]);
        goto wAEf6;
        iGB0U:
        redirect("\x61\x75\164\x68");
        goto s0Jzm;
        cTVgW:
        $this->load->model("\x44\x72\157\160\144\157\167\156\137\155\157\144\145\x6c", "\144\162\x6f\160\x64\157\x77\156");
        goto cobKf;
        s0Jzm:
        jzCcT:
        goto azoXh;
        iAeJF:
        if (!(!$this->ion_auth->is_admin() && !$this->ion_auth->in_group("\147\x75\x72\x75"))) {
            goto gl9Yk;
        }
        goto SR3VN;
        SR3VN:
        show_error("\110\x61\x6e\x79\141\x20\101\144\155\x69\156\151\x73\x74\x72\141\164\157\x72\x20\x79\x61\156\147\40\144\x69\142\x65\162\151\40\150\x61\x6b\40\165\x6e\x74\165\153\40\155\x65\x6e\x67\141\x6b\163\145\x73\x20\150\141\x6c\141\x6d\141\x6e\40\x69\x6e\x69\x2c\x20\74\x61\x20\150\162\145\146\75\x22" . base_url("\x64\x61\163\x68\x62\x6f\x61\x72\144") . "\x22\76\113\145\x6d\142\141\154\151\40\153\145\40\x6d\145\156\x75\40\141\x77\141\x6c\x3c\57\x61\x3e", 403, "\101\x6b\163\145\163\x20\124\145\162\154\141\x72\x61\156\x67");
        goto zqjQm;
        EtMQj:
    }
    public function output_json($data, $encode = true)
    {
        goto mbPOG;
        bKtAz:
        C_5QX:
        goto F962Y;
        WBoOL:
        $data = json_encode($data);
        goto bKtAz;
        mbPOG:
        if (!$encode) {
            goto C_5QX;
        }
        goto WBoOL;
        F962Y:
        $this->output->set_content_type("\x61\x70\x70\154\151\143\x61\164\151\157\x6e\57\152\163\x6f\x6e")->set_output($data);
        goto rlefs;
        rlefs:
    }
    function generateTahunMasuk($tp, $level)
    {
        goto HXsVt;
        J0v4R:
        JfPXp:
        goto xa46w;
        c1oUw:
        if ($level == 9) {
            goto JfPXp;
        }
        goto E1iNI;
        hYUTW:
        $thn = $tahun;
        goto lFLuG;
        siE8Y:
        qjUNm:
        goto hYUTW;
        E1iNI:
        if ($level == 8) {
            goto zmxZ4;
        }
        goto Pdc8u;
        HXsVt:
        $tahun = explode("\x2f", $tp)[0];
        goto pyvpV;
        pyvpV:
        $thn = $tahun;
        goto c1oUw;
        lFLuG:
        glknK:
        goto QIFsb;
        Pdc8u:
        if ($level == 7) {
            goto qjUNm;
        }
        goto WKBlx;
        xa46w:
        $thn = $tahun - 2;
        goto ZtxAV;
        QIFsb:
        return $thn;
        goto QVY54;
        L4JYB:
        $thn = $tahun - 1;
        goto Rt6JQ;
        XLnou:
        zmxZ4:
        goto L4JYB;
        WKBlx:
        goto glknK;
        goto J0v4R;
        Rt6JQ:
        goto glknK;
        goto siE8Y;
        ZtxAV:
        goto glknK;
        goto XLnou;
        QVY54:
    }
    public function index()
    {
        goto BTcv8;
        LoppW:
        $this->load->view("\163\145\x74\164\x69\x6e\147\x2f\x69\156\144\165\x6b");
        goto j6NlO;
        LAL81:
        zh1d_:
        goto oiCKO;
        C2Xw0:
        $data["\x73\155\164\137\x61\x63\164\151\x76\145"] = $smt;
        goto av6Oi;
        NUU84:
        $level = $setting->jenjang == "\61" ? "\66" : ($setting->jenjang == "\x32" ? "\71" : ($setting->jenjang == "\x31" ? "\x33" : "\x31\62"));
        goto fBBAX;
        dt9dh:
        foreach ($siswas as $id_siswa => $siswa) {
            goto j_uit;
            la55W:
            $tahunMasuk = '';
            goto MMn81;
            a3DHx:
            XUwwi:
            goto Q9494;
            JktlY:
            eKhcT:
            goto TCrOo;
            msdxH:
            goto pkk_x;
            goto ouYNU;
            TyTnu:
            $kelainan = [];
            goto yuJhn;
            k3tSL:
            $tinggi = [];
            goto FgdWc;
            FgdWc:
            $penyakit = [];
            goto TyTnu;
            sZXQt:
            $data_tahun = [intval($tahunMasuk) . "\57" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\57" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\57" . (intval($tahunMasuk) + 3), intval($tahunMasuk) + 3 . "\57" . (intval($tahunMasuk) + 4), intval($tahunMasuk) + 4 . "\57" . (intval($tahunMasuk) + 5), intval($tahunMasuk) + 5 . "\x2f" . (intval($tahunMasuk) + 6)];
            goto AjXM6;
            j_uit:
            $rapor_fisik = isset($fisik_siswa[$id_siswa]) ? $fisik_siswa[$id_siswa] : [];
            goto Ntynf;
            Upi2a:
            $data_siswa[$siswa->id_siswa] = ["\156\x69\x73" => $siswa->nis, "\156\151\163\156" => $siswa->nisn, "\x70\x61\147\x65\61" => ["\101" => ["\164\151\x74\x6c\x65" => "\x4b\x45\124\x45\x52\101\x4e\107\x41\116\x20\x54\x45\116\124\x41\x4e\107\40\104\x49\122\x49\x20\x53\111\x53\127\x41", "\166\141\x6c\x75\x65" => ["\x4e\x61\x6d\141\x20\123\x69\163\167\141" => ["\116\141\155\141\40\x4c\145\x6e\147\x6b\141\x70" => $siswa->nama, "\x4e\x61\x6d\141\x20\x50\141\156\x67\147\x69\x6c\141\156" => ''], "\x4a\x65\156\151\x73\40\x4b\x65\x6c\x61\155\151\156" => $siswa->jenis_kelamin, "\124\x65\155\160\141\164\x20\x64\x61\x6e\x20\124\147\154\40\x4c\141\150\151\162" => $siswa->tempat_lahir, "\101\x67\x61\x6d\141" => $siswa->agama, "\113\145\167\141\x72\x67\x61\x6e\145\x67\x61\162\141\141\x6e" => $siswa->warga_negara, "\x41\x6e\x61\x6b\40\153\145" => $siswa->anak_ke, "\x4a\x75\x6d\154\141\150\x20\123\x64\162\56\40\113\141\156\144\x75\x6e\x67" => '', "\x4a\x75\155\x6c\141\x68\x20\123\144\x72\56\40\x54\x69\162\x69" => '', "\x4a\x75\x6d\x6c\x61\150\40\123\x64\x72\56\x20\x41\x6e\147\153\141\164" => '', "\101\x6e\141\153\40\131\141\x74\151\155\57\131\x61\164\x69\155\x20\x50\x69\141\164\x75" => '', "\102\141\x68\x61\x73\x61\40\x53\145\x68\141\162\x69\55\150\141\x72\x69" => '']], "\102" => ["\x74\151\x74\x6c\x65" => "\113\x45\124\x45\x52\x41\116\x47\101\x4e\x20\x54\105\115\x50\x41\124\x20\124\x49\x4e\107\x47\101\114", "\166\x61\x6c\x75\145" => ["\101\154\141\155\x61\x74" => $siswa->alamat, "\x4e\157\155\157\162\40\x54\145\154\145\160\157\156" => $siswa->hp, "\x54\x69\156\x67\x67\141\154\x20\102\145\x72\x73\x61\155\141" => '', "\x4a\141\x72\x61\153\40\153\145\x20\123\x65\153\157\x6c\141\x68" => '']], "\103" => ["\x74\x69\164\154\x65" => "\113\105\124\x45\122\101\116\107\101\x4e\40\113\105\x53\x45\x48\x41\124\101\x4e", "\166\141\154\165\145" => ["\107\157\x6c\157\156\147\x61\156\40\104\141\x72\x61\x68" => '', "\113\145\x61\144\141\141\156\x20\x4a\141\163\155\x61\156\151" => "\133\164\141\x62\x6c\x65\135"], "\x74\x61\x62\154\145" => ["\x74\x61\x68\165\x6e" => $data_tahun, "\142\x65\162\141\164" => $berat, "\164\x69\156\147\147\x69" => $tinggi, "\x70\145\x6e\171\141\x6b\151\164" => $penyakit, "\153\x65\154\141\x69\156\141\156" => $kelainan]], "\104" => ["\x74\x69\164\x6c\x65" => "\x4b\x45\124\105\122\101\x4e\107\101\x4e\x20\120\x45\116\x44\111\x44\111\113\x41\x4e", "\x76\141\154\165\145" => ["\x50\x65\156\144\x69\144\x69\153\x61\156\x20\123\x65\x62\145\154\165\x6d\x6e\x79\x61" => ["\114\165\154\x75\163\x61\x6e\x20\x44\141\x72\151" => $siswa->sekolah_asal, "\x4e\157\x6d\157\x72\x20\111\152\x61\172\x61\150" => ''], "\120\x69\x6e\x64\x61\x68\141\x6e" => ["\104\141\x72\151\40\123\x65\x6b\157\x6c\x61\150" => '', "\x41\154\141\163\x61\x6e" => ''], "\104\x69\164\145\x72\151\155\141\40\x44\x69\163\145\153\x6f\154\141\x68\40\x49\156\x69" => ["\104\x69\x20\124\151\x6e\147\x6b\x61\x74" => $siswa->kelas_awal, "\x4b\x65\x6c\x6f\155\x70\x6f\153" => '', "\112\x75\x72\165\x73\141\x6e" => '', "\x54\x61\x6e\147\147\x61\x6c" => $siswa->tahun_masuk]]]], "\x70\141\x67\x65\x32" => ["\105" => ["\x74\151\x74\154\145" => "\113\x45\124\105\122\x41\x4e\x47\101\x4e\x20\x54\105\116\x54\101\x4e\107\x20\101\131\x41\x48\x20\113\101\x4e\104\125\116\107", "\166\141\x6c\165\x65" => ["\116\141\x6d\x61" => $siswa->nama_ayah, "\124\145\x6d\x70\141\164\40\x64\x61\x6e\x20\x54\x61\x6e\x67\147\x61\154\x20\114\x61\x68\x69\x72" => $siswa->tgl_lahir_ayah, "\x41\x67\x61\x6d\141" => '', "\x4b\145\x77\x61\162\147\x61\x6e\x65\x67\x61\x72\141\141\156" => '', "\120\145\156\144\x69\x64\x69\153\141\156" => $siswa->pendidikan_ayah, "\120\145\153\145\162\x6a\x61\141\x6e" => $siswa->pekerjaan_ayah, "\x50\145\x6e\147\x68\x61\x73\x69\x6c\141\x6e\x20\x70\145\162\40\102\x75\154\141\x6e" => '', "\x41\154\141\155\x61\164\40\x2f\40\x4e\157\x6d\x6f\162\x20\x54\x65\x6c\x65\x70\x6f\156" => $siswa->nohp_ayah, "\x4b\x65\x62\145\x72\141\x64\141\x61\156\40\x41\171\x61\150" => "\x4d\x61\163\151\x68\x20\110\x69\144\x75\160\40\57\x20\115\x65\x6e\151\156\147\x67\141\x6c\x20\104\165\156\151\x61\x20\x54\x61\x68\165\156\72\x20\x2e\56\56\x2e\56\x2e\x2e\56"]], "\x46" => ["\x74\151\x74\154\145" => "\x4b\x45\124\105\x52\101\x4e\x47\x41\x4e\40\x54\x45\x4e\x54\101\116\x47\x20\x49\x42\x55\x20\x4b\x41\116\x44\125\116\x47", "\x76\x61\154\x75\x65" => ["\x4e\x61\155\141" => $siswa->nama_ayah, "\x54\x65\155\x70\141\x74\x20\144\141\156\40\x54\x61\x6e\x67\147\x61\x6c\40\x4c\141\150\x69\x72" => $siswa->tgl_lahir_ayah, "\x41\x67\141\155\x61" => '', "\x4b\145\x77\x61\x72\x67\x61\x6e\145\x67\x61\x72\141\x61\156" => '', "\x50\145\156\144\151\144\x69\x6b\141\x6e" => $siswa->pendidikan_ayah, "\x50\x65\x6b\x65\162\152\141\x61\156" => $siswa->pekerjaan_ayah, "\x50\145\156\x67\x68\x61\x73\151\154\x61\156\40\160\x65\162\x20\x42\x75\154\x61\x6e" => '', "\101\154\141\155\x61\164\x20\x2f\40\116\157\155\x6f\x72\40\124\145\154\x65\160\157\156" => $siswa->nohp_ayah, "\113\x65\x62\145\x72\x61\x64\141\x61\x6e\40\x49\x62\x75" => "\115\141\x73\151\x68\40\x48\151\144\x75\160\x20\x2f\x20\x4d\x65\156\x69\x6e\147\147\141\x6c\40\x44\x75\156\151\x61\x20\x54\x61\x68\x75\156"]], "\x47" => ["\164\x69\x74\x6c\x65" => "\x4b\x45\124\105\x52\x41\x4e\107\x41\x4e\40\x54\x45\116\124\x41\116\107\40\x57\101\x4c\x49", "\x76\x61\154\165\x65" => ["\116\141\x6d\141" => $siswa->nama_ayah, "\x54\x65\x6d\x70\141\x74\x20\x64\141\x6e\x20\x54\141\156\x67\147\x61\154\40\x4c\x61\150\151\162" => $siswa->tgl_lahir_ayah, "\x41\147\141\x6d\141" => '', "\113\x65\x77\141\x72\x67\x61\156\145\147\x61\162\x61\141\156" => '', "\120\x65\x6e\x64\x69\144\151\x6b\141\x6e" => $siswa->pendidikan_ayah, "\x50\145\153\x65\x72\x6a\x61\141\x6e" => $siswa->pekerjaan_ayah, "\120\145\156\x67\150\x61\163\151\154\x61\x6e\40\160\x65\x72\40\x42\x75\154\141\156" => '', "\x41\154\x61\155\x61\164\40\57\x20\x4e\x6f\155\x6f\162\x20\x54\x65\x6c\145\x70\x6f\156" => $siswa->nohp_ayah]], "\x48" => ["\x74\151\x74\x6c\x65" => "\113\105\x47\105\x4d\101\122\101\116\x20\x53\x49\x53\127\101", "\x76\141\x6c\165\145" => ["\113\145\163\x65\x6e\151\141\x6e" => '', "\117\x6c\141\150\40\122\x61\x67\x61" => '', "\117\162\x67\141\156\x69\x73\141\x73\x69" => '', "\x4c\x61\x69\156\342\200\223\154\x61\x69\156" => '']]], "\x70\x61\147\x65\x33" => ["\x49" => ["\x74\151\164\x6c\x65" => "\x4b\105\124\x45\x52\x41\x4e\x47\x41\x4e\x20\120\x45\122\x4b\105\115\102\101\x4e\107\x41\116\x20\123\x49\123\127\101", "\x76\141\154\x75\145" => ["\x4d\145\156\x65\x72\151\x6d\141\40\102\x65\141\40\123\x69\163\x77\141" => "\x5b\x74\141\x68\x75\x6e\x5d", "\x4d\145\x6e\151\x6e\147\x67\x61\154\153\141\156\x20\123\x65\x6b\x6f\154\x61\150" => ["\124\x61\x6e\x67\x67\141\x6c" => '', "\x41\154\x61\163\141\x6e" => ''], "\x41\153\150\x69\x72\40\120\x65\x6e\x64\151\x64\151\153\x61\156" => ["\124\141\x6d\x61\x74\x20\x42\145\x6c\x61\x6a\141\x72" => $siswa->tahun_lulus, "\116\157\155\x6f\162\x20\111\x6a\141\x7a\x61\150" => $siswa->no_ijazah]], "\164\141\x68\x75\x6e" => ["\x54\x61\x68\x75\x6e\40\56\56\x2e\x2e\x2e\56\56\56\56\56\56\56\57\x20\x54\113\x20\xe2\200\246\xe2\200\xa6\xe2\x80\xa6\342\200\246\342\x80\xa6\xe2\x80\246\xe2\x80\246\342\x80\246\56\x2e\x64\141\x72\x69\342\x80\246\xe2\200\246\xe2\x80\246\342\200\xa6\342\x80\246\342\x80\246\342\200\246\xe2\x80\xa6\x2e\x2e", "\x54\x61\x68\165\156\x20\x2e\56\56\56\x2e\56\56\x2e\56\x2e\x2e\x2e\x2f\x20\x54\x4b\x20\xe2\x80\246\xe2\200\246\xe2\200\246\342\200\xa6\xe2\x80\246\xe2\200\xa6\342\x80\246\xe2\200\xa6\56\x2e\x64\x61\162\x69\xe2\x80\246\xe2\x80\xa6\342\x80\246\xe2\200\246\xe2\200\246\342\x80\246\342\200\246\xe2\x80\xa6\x2e\56", "\x54\x61\x68\165\156\40\x2e\x2e\56\x2e\56\x2e\56\56\56\x2e\x2e\56\57\40\124\113\40\342\x80\246\342\x80\246\xe2\200\246\342\x80\xa6\xe2\x80\xa6\xe2\200\246\xe2\200\xa6\xe2\200\xa6\56\56\144\141\x72\x69\xe2\x80\246\xe2\200\xa6\342\200\246\xe2\x80\246\xe2\x80\246\342\200\246\342\200\xa6\xe2\200\246\x2e\x2e"]], "\112" => ["\164\x69\164\154\x65" => "\113\x45\124\105\x52\101\116\x47\x41\x4e\40\x53\105\x54\105\114\101\110\x20\123\x45\x4c\x45\x53\x41\x49\x20\x50\x45\x4e\x44\x49\x44\x49\x4b\101\116", "\166\x61\x6c\165\x65" => ["\115\x65\154\141\x6e\152\165\x74\x6b\141\x6e\40\x64\151" => '', "\102\x65\x6b\145\162\x6a\141" => ["\124\141\156\147\147\141\154\40\115\165\154\x61\x69\40\102\x65\153\145\x72\x6a\141" => '', "\116\x61\155\x61\x20\x54\x65\x6d\160\x61\x74\x20\x42\x65\x6b\x65\x72\152\x61" => '', "\x50\145\156\147\x68\x61\x73\151\x6c\141\156" => '']]], "\113" => ["\x74\151\x74\154\145" => "\114\x41\111\x4e\x20\342\200\x93\40\x4c\x41\111\116", "\166\x61\154\165\x65" => ["\103\141\164\141\x74\x61\156\40\131\141\x6e\147\40\x50\x65\x6e\164\151\x6e\x67" => '']]]];
            goto a3DHx;
            iP6Ke:
            LK6Hv:
            goto I620T;
            NuRNV:
            if ($setting->jenjang == "\x31") {
                goto qXxLS;
            }
            goto SnXYq;
            AjXM6:
            pkk_x:
            goto ugA7e;
            ouYNU:
            qXxLS:
            goto sZXQt;
            ugA7e:
            $berat = [];
            goto k3tSL;
            SnXYq:
            $data_tahun = [intval($tahunMasuk) . "\57" . (intval($tahunMasuk) + 1), intval($tahunMasuk) + 1 . "\57" . (intval($tahunMasuk) + 2), intval($tahunMasuk) + 2 . "\57" . (intval($tahunMasuk) + 3)];
            goto msdxH;
            AcyMh:
            $noinduk[$siswa->id_siswa] = ["\156\151\x73" => $siswa->nis, "\x6e\x69\163\x6e" => $siswa->nisn];
            goto Upi2a;
            vy9Jv:
            mlvVx:
            goto NuRNV;
            Ntynf:
            foreach ($rapor_fisik as $rf) {
                goto qGvoe;
                jTW0Y:
                JKPjn:
                goto Pfabn;
                qGvoe:
                $rf->fisik = unserialize($rf->fisik);
                goto COrtd;
                xzmKl:
                G2JK8:
                goto jTW0Y;
                COrtd:
                foreach ($rf->fisik as $value) {
                    $value->kondisi = unserialize($value->kondisi);
                    mjHOo:
                }
                goto xzmKl;
                Pfabn:
            }
            goto JktlY;
            TCrOo:
            if ($siswa->tahun_masuk != null) {
                goto LK6Hv;
            }
            goto la55W;
            I620T:
            $tahunMasuk = explode("\55", $siswa->tahun_masuk)[0];
            goto vy9Jv;
            MMn81:
            goto mlvVx;
            goto iP6Ke;
            yuJhn:
            foreach ($data_tahun as $dtp) {
                goto toxFc;
                yGUTF:
                $tinggi[$dtp][1] = '';
                goto nBs1z;
                toxFc:
                $berat[$dtp][1] = '';
                goto iOz3s;
                iOz3s:
                $berat[$dtp][2] = '';
                goto yGUTF;
                NjbJP:
                if (!isset($rapor_fisik[$dtp])) {
                    goto qVrcb;
                }
                goto uwfOC;
                j_0DM:
                $kelainan[$dtp][1] = '';
                goto GRF6l;
                GRF6l:
                $kelainan[$dtp][2] = '';
                goto NjbJP;
                HXfog:
                L1Ugd:
                goto pICje;
                r3dRF:
                bnLbo:
                goto i8oBu;
                nBs1z:
                $tinggi[$dtp][2] = '';
                goto FfsRy;
                uwfOC:
                foreach ($rapor_fisik[$dtp]->fisik as $rf) {
                    goto XF9bf;
                    ck32z:
                    $tinggi[$dtp][$rf->id_smt] = $rf->tinggi;
                    goto rtVC1;
                    XF9bf:
                    $berat[$dtp][$rf->id_smt] = $rf->berat;
                    goto ck32z;
                    rtVC1:
                    n4XNL:
                    goto caG05;
                    caG05:
                }
                goto r3dRF;
                ixrhf:
                $penyakit[$dtp][2] = '';
                goto j_0DM;
                FfsRy:
                $penyakit[$dtp][1] = '';
                goto ixrhf;
                i8oBu:
                qVrcb:
                goto HXfog;
                pICje:
            }
            goto AUUys;
            AUUys:
            o_iNK:
            goto AcyMh;
            Q9494:
        }
        goto LAL81;
        XCuwv:
        $uids = $this->db->select("\x69\144\x5f\163\151\163\167\x61\x2c\x20\x75\151\144")->from("\155\141\x73\x74\x65\x72\137\163\x69\x73\x77\x61")->get()->result();
        goto J7UoB;
        frXqU:
        $siswas = $this->master->getDataInduk();
        goto Sqe5f;
        HWbIh:
        $thn_siswa = [];
        goto dt9dh;
        tjl4S:
        $tp = $this->dashboard->getTahunActive();
        goto QAjnJ;
        saCFJ:
        $this->load->view("\x5f\x74\x65\155\x70\x6c\x61\164\x65\163\57\x64\141\163\x68\142\x6f\141\162\x64\x2f\x5f\150\x65\x61\x64\x65\162", $data);
        goto LoppW;
        dtSb6:
        $data_siswa = [];
        goto HWbIh;
        j6NlO:
        $this->load->view("\137\x74\x65\x6d\160\154\141\x74\145\163\x2f\x64\x61\x73\x68\x62\157\x61\x72\144\57\137\x66\x6f\157\164\x65\162");
        goto Ncl6S;
        bLa9F:
        mVBmq:
        goto xF4pF;
        oiCKO:
        $data["\162\141\x70\x6f\x72\x5f\x66\x69\163\x69\x6b"] = $rapor_fisik;
        goto E_8NL;
        QAjnJ:
        $smt = $this->dashboard->getSemesterActive();
        goto OkeFz;
        J7UoB:
        foreach ($uids as $uid) {
            goto g_K_p;
            Oo1Pc:
            if (!($check->get()->num_rows() == 0)) {
                goto wOTrt;
            }
            goto wXw5i;
            pYt2n:
            wOTrt:
            goto UEDi3;
            g_K_p:
            $check = $this->db->select("\151\x64\137\163\151\163\167\141")->from("\x62\x75\x6b\x75\137\x69\x6e\x64\165\153")->where("\151\x64\x5f\163\151\163\x77\x61", $uid->id_siswa);
            goto Oo1Pc;
            UEDi3:
            nPDjG:
            goto L6J3Z;
            wXw5i:
            $this->db->insert("\142\x75\x6b\x75\x5f\x69\x6e\x64\165\x6b", $uid);
            goto pYt2n;
            L6J3Z:
        }
        goto bLa9F;
        OkeFz:
        $data["\x74\160"] = $arrTp;
        goto j8Ssv;
        eLKYm:
        if (!($count_siswa > $count_induk)) {
            goto x62VQ;
        }
        goto XCuwv;
        j8Ssv:
        $data["\164\x70\137\x61\x63\164\151\x76\x65"] = $tp;
        goto MgGq0;
        iwUWj:
        $arrSmt = $this->dashboard->getSemester();
        goto tjl4S;
        MgGq0:
        $data["\163\155\x74"] = $arrSmt;
        goto C2Xw0;
        GasMA:
        $fisik_siswa = $this->rapor->getAllRaporFisik();
        goto dtSb6;
        dfiPO:
        $data["\141\x72\x72\137\164\x65\x73\164"] = $thn_siswa;
        goto NUU84;
        E_8NL:
        $data["\x6e\x6f\151\x6e\144\165\153"] = $noinduk;
        goto CjtvK;
        Sqe5f:
        $deskFisik = $this->rapor->getAllDeskripsiFisikKelas();
        goto GasMA;
        woBRD:
        $data["\x64\x65\x74\141\151\154"] = $data_siswa;
        goto dfiPO;
        fBBAX:
        $data["\152\x75\155\154\141\x68\x5f\x6c\165\x6c\165\x73"] = $this->rapor->getJumlahLulus($tp->id_tp - 1, "\x32", $level);
        goto saCFJ;
        xF4pF:
        x62VQ:
        goto frXqU;
        VtEDL:
        $data = ["\165\163\145\162" => $user, "\x6a\165\144\165\154" => "\x42\x75\153\165\x20\111\x6e\144\x75\153", "\x73\x75\x62\152\165\144\x75\154" => "\x42\165\x6b\165\x20\111\156\x64\165\153", "\x73\x65\164\164\x69\x6e\x67" => $setting];
        goto R7xIF;
        R7xIF:
        $arrTp = $this->dashboard->getTahun();
        goto iwUWj;
        BTcv8:
        $user = $this->ion_auth->user()->row();
        goto UPSva;
        hA431:
        $count_siswa = $this->db->count_all("\155\141\x73\164\x65\162\137\163\151\x73\167\141");
        goto Ab0DI;
        UPSva:
        $setting = $this->dashboard->getSetting();
        goto VtEDL;
        av6Oi:
        $data["\x70\162\157\x66\151\x6c\145"] = $this->dashboard->getProfileAdmin($user->id);
        goto hA431;
        CjtvK:
        $data["\163\151\x73\167\141\163"] = $siswas;
        goto woBRD;
        Ab0DI:
        $count_induk = $this->db->count_all("\142\x75\153\x75\137\x69\x6e\x64\x75\153");
        goto eLKYm;
        Ncl6S:
    }
}
