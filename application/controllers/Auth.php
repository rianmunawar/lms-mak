<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
defined("\102\x41\x53\x45\120\x41\124\x48") or exit("\116\157\40\144\x69\x72\x65\x63\x74\x20\x73\143\x72\x69\160\164\40\x61\x63\143\145\163\163\x20\x61\154\154\x6f\x77\145\x64");
class Auth extends CI_Controller
{
    public $data = array();
    public function __construct()
    {
        goto wwXOx;
        geM7l:
        $this->load->model("\123\x65\164\x74\x69\x6e\x67\x73\137\155\157\x64\x65\154", "\x73\145\x74\x74\x69\x6e\x67\163");
        goto pz9uo;
        YwmvI:
        $this->load->helper(["\165\162\154", "\x6c\141\x6e\x67\165\x61\147\145"]);
        goto a9Jmd;
        pz9uo:
        $this->load->model("\x4c\157\x67\x5f\155\157\144\145\x6c", "\154\157\x67\147\x69\x6e\147");
        goto QKyYt;
        Xv59f:
        $this->load->database();
        goto rMYIA;
        wwXOx:
        parent::__construct();
        goto Xv59f;
        a9Jmd:
        $this->form_validation->set_error_delimiters($this->config->item("\x65\x72\162\157\x72\137\163\x74\141\162\164\137\x64\145\154\151\x6d\x69\x74\145\x72", "\x69\x6f\x6e\x5f\x61\165\x74\x68"), $this->config->item("\145\x72\x72\x6f\x72\x5f\145\x6e\144\137\144\145\x6c\x69\155\151\164\x65\x72", "\151\x6f\x6e\137\x61\165\164\150"));
        goto TEyw3;
        rMYIA:
        $this->load->library("\146\x6f\x72\155\x5f\166\x61\x6c\151\x64\141\164\151\157\156");
        goto YwmvI;
        TEyw3:
        $this->lang->load("\141\165\x74\150");
        goto geM7l;
        QKyYt:
    }
    public function output_json($data)
    {
        $this->output->set_content_type("\141\160\160\x6c\x69\143\141\x74\x69\x6f\x6e\57\152\163\157\156")->set_output(json_encode($data));
    }
    public function index()
    {
        goto sKgWH;
        QAC4M:
        $this->load->view("\137\164\145\155\x70\x6c\141\x74\145\163\x2f\x61\x75\164\x68\57\137\146\157\157\164\x65\x72");
        goto htF6r;
        cp_E4:
        redirect("\x64\x61\163\x68\x62\157\141\162\144");
        goto bBqmM;
        bBqmM:
        t8Nsx:
        goto OzFf8;
        IfTD5:
        PnkA6:
        goto dPCVg;
        On7Rl:
        $group = $this->ion_auth->get_users_groups($user_id)->row()->name;
        goto cp_E4;
        Xf2IY:
        k_CI9:
        goto hK4MR;
        hK4MR:
        $setting = $this->settings->getSetting();
        goto DjUTW;
        LD0is:
        redirect("\151\x6e\x73\164\x61\154\154");
        goto Xf2IY;
        h3Iq6:
        redirect("\151\156\163\164\x61\x6c\x6c");
        goto IfTD5;
        yNWck:
        $this->data["\x69\144\x65\156\164\x69\164\171"] = ["\x6e\x61\x6d\145" => "\x69\x64\x65\x6e\164\x69\x74\171", "\151\x64" => "\151\x64\x65\156\164\x69\x74\171", "\x74\x79\x70\x65" => "\x74\x65\170\164", "\x70\154\141\143\145\150\x6f\x6c\x64\145\162" => "\125\x73\145\162\x6e\141\155\x65", "\x61\165\x74\157\x66\x6f\143\165\x73" => "\141\x75\x74\157\x66\x6f\143\x75\x73", "\x63\154\141\163\163" => "\146\157\x72\155\55\x63\x6f\156\164\x72\157\154", "\141\165\x74\157\143\x6f\x6d\160\x6c\145\164\x65" => "\157\x66\x66"];
        goto pKhRF;
        dPCVg:
        if (!$this->ion_auth->logged_in()) {
            goto t8Nsx;
        }
        goto viz4E;
        sKgWH:
        if (!(count($this->db->list_tables()) == 0)) {
            goto k_CI9;
        }
        goto LD0is;
        waHb4:
        $this->load->view("\141\165\164\150\x2f\154\157\x67\151\156");
        goto QAC4M;
        Chpkd:
        $this->data["\155\x65\163\163\141\147\145"] = validation_errors() ? validation_errors() : $this->session->flashdata("\155\145\x73\163\141\147\x65");
        goto nDkO1;
        pKhRF:
        $this->data["\x70\141\163\163\x77\157\162\x64"] = ["\x6e\x61\155\x65" => "\160\x61\163\163\167\157\162\x64", "\x69\144" => "\x70\x61\x73\x73\x77\157\162\144", "\x74\171\x70\x65" => "\160\141\163\x73\x77\x6f\x72\x64", "\160\x6c\x61\x63\x65\x68\x6f\x6c\x64\x65\x72" => "\x50\141\163\163\x77\157\x72\x64", "\143\x6c\141\163\x73" => "\146\x6f\162\155\55\x63\157\x6e\164\162\x6f\154"];
        goto Chpkd;
        OzFf8:
        $this->data["\163\x65\x74\164\151\156\x67"] = $setting;
        goto yNWck;
        viz4E:
        $user_id = $this->ion_auth->user()->row()->id;
        goto On7Rl;
        DjUTW:
        if (!($setting == null)) {
            goto PnkA6;
        }
        goto h3Iq6;
        nDkO1:
        $this->load->view("\x5f\x74\x65\155\x70\154\141\x74\x65\x73\x2f\x61\x75\x74\x68\57\137\x68\x65\x61\x64\145\x72", $this->data);
        goto waHb4;
        htF6r:
    }
    public function cek_login()
    {
        goto ebY32;
        VzQT2:
        KznkX:
        goto Cezj1;
        jkPq6:
        goto qemZI;
        goto Qn5P_;
        iGMJF:
        if ($this->form_validation->run() === TRUE) {
            goto KznkX;
        }
        goto p5xjB;
        TWhCs:
        goto DuoIz;
        goto VzQT2;
        v5xPL:
        DuoIz:
        goto kdLTl;
        dJE_r:
        $data = ["\163\164\141\x74\165\x73" => false, "\146\x61\151\154\x65\x64" => "\111\156\x63\x6f\x72\x72\x65\143\x74\x20\x4c\x6f\x67\x69\x6e"];
        goto Ea4z2;
        Qn5P_:
        pbsbS:
        goto qYWjp;
        Ea4z2:
        $this->output_json($data);
        goto jkPq6;
        uAkzE:
        qemZI:
        goto v5xPL;
        K1Do8:
        $data = ["\x73\x74\x61\x74\x75\163" => false, "\x69\156\x76\141\x6c\x69\144" => $invalid];
        goto RWz2o;
        RWz2o:
        $this->output_json($data);
        goto TWhCs;
        ebY32:
        $this->form_validation->set_rules("\151\x64\145\x6e\164\x69\164\171", str_replace("\x3a", '', $this->lang->line("\154\x6f\x67\x69\156\137\151\144\145\x6e\164\151\164\171\137\x6c\x61\142\x65\154")), "\162\145\x71\x75\x69\x72\x65\x64\x7c\164\x72\x69\x6d");
        goto NdHVp;
        p5xjB:
        $invalid = ["\151\x64\x65\156\x74\x69\x74\x79" => form_error("\x69\x64\145\156\164\x69\x74\x79"), "\x70\141\163\163\x77\157\x72\144" => form_error("\160\141\x73\x73\x77\x6f\x72\144")];
        goto K1Do8;
        Cezj1:
        $remember = (bool) $this->input->post("\162\145\x6d\x65\x6d\142\x65\162");
        goto oY9Gr;
        oY9Gr:
        if ($this->ion_auth->login($this->input->post("\x69\x64\x65\x6e\x74\x69\x74\171"), $this->input->post("\x70\141\163\163\x77\x6f\x72\x64"), $remember)) {
            goto pbsbS;
        }
        goto dJE_r;
        NdHVp:
        $this->form_validation->set_rules("\x70\141\163\163\167\157\162\x64", str_replace("\72", '', $this->lang->line("\154\x6f\147\x69\156\x5f\x70\x61\163\163\167\157\x72\144\137\x6c\141\x62\x65\x6c")), "\x72\145\161\x75\151\162\x65\144\x7c\x74\162\151\155");
        goto iGMJF;
        qYWjp:
        $this->cek_akses();
        goto uAkzE;
        kdLTl:
    }
    public function cek_akses()
    {
        goto EsiiZ;
        nB7T4:
        $url = "\144\x61\x73\x68\142\x6f\141\162\x64";
        goto bcbz7;
        Es6AN:
        $this->logging->saveLog(1, "\114\x6f\147\x69\156");
        goto nB7T4;
        lWROL:
        sx5xU:
        goto x3jrg;
        bcbz7:
        goto sx5xU;
        goto cFOcQ;
        cFOcQ:
        AhjNc:
        goto DslLN;
        gfxX6:
        $url = "\x61\165\x74\x68";
        goto lWROL;
        DslLN:
        $status = false;
        goto gfxX6;
        hdFbp:
        $status = true;
        goto Es6AN;
        dhpBQ:
        $this->output_json($data);
        goto G0unL;
        x3jrg:
        $data = ["\x73\x74\x61\x74\165\163" => $status, "\165\x72\x6c" => $url];
        goto dhpBQ;
        EsiiZ:
        if (!$this->ion_auth->logged_in()) {
            goto AhjNc;
        }
        goto hdFbp;
        G0unL:
    }
    public function logout()
    {
        $this->ion_auth->logout();
        redirect("\x6c\157\147\x69\x6e", "\x72\x65\x66\162\x65\x73\x68");
    }
    public function change_password()
    {
        goto Xn32Y;
        ezma4:
        $user = $this->ion_auth->user()->row();
        goto GUWn0;
        MIv1r:
        $identity = $this->session->userdata("\x69\x64\145\x6e\x74\x69\164\171");
        goto PIYJH;
        CJ0vK:
        $this->session->set_flashdata("\155\x65\163\x73\141\x67\145", $this->ion_auth->errors());
        goto czrgm;
        U2Peb:
        if ($change) {
            goto JHocS;
        }
        goto CJ0vK;
        F_9e0:
        $this->data["\156\x65\167\x5f\160\x61\x73\163\167\x6f\162\144"] = ["\156\x61\x6d\145" => "\156\145\x77", "\x69\x64" => "\156\x65\167", "\x74\x79\160\145" => "\160\141\x73\x73\167\x6f\162\x64", "\160\x61\x74\x74\145\162\x6e" => "\x5e\56\x7b" . $this->data["\x6d\x69\156\x5f\160\x61\163\163\167\x6f\162\144\x5f\x6c\145\x6e\x67\164\150"] . "\x7d\x2e\52\x24"];
        goto e2SnX;
        CRN1W:
        $this->data["\157\154\144\x5f\160\141\163\x73\167\x6f\x72\x64"] = ["\156\x61\x6d\x65" => "\157\x6c\144", "\x69\144" => "\x6f\x6c\x64", "\164\171\x70\145" => "\160\x61\163\163\x77\157\x72\144"];
        goto F_9e0;
        fFZ0v:
        if ($this->ion_auth->logged_in()) {
            goto CtORh;
        }
        goto bVaTy;
        cgixM:
        Dksop:
        goto gA8ZH;
        Xn32Y:
        $this->form_validation->set_rules("\x6f\154\144", $this->lang->line("\143\150\x61\156\x67\x65\x5f\x70\141\163\x73\x77\x6f\162\x64\x5f\166\141\154\x69\144\x61\164\151\157\156\137\x6f\x6c\144\x5f\x70\x61\163\x73\167\157\162\x64\x5f\x6c\141\x62\145\x6c"), "\162\x65\x71\165\151\162\x65\x64");
        goto XadVN;
        pE5BF:
        $this->data["\x6d\145\x73\x73\x61\147\x65"] = validation_errors() ? validation_errors() : $this->session->flashdata("\x6d\145\x73\163\x61\147\145");
        goto QqLdu;
        QTeOR:
        $this->_render_page("\141\x75\164\150" . DIRECTORY_SEPARATOR . "\143\x68\141\x6e\x67\x65\137\x70\141\163\163\x77\157\x72\144", $this->data);
        goto hMFVx;
        e2SnX:
        $this->data["\156\x65\x77\137\x70\141\163\x73\167\157\x72\x64\x5f\x63\157\x6e\146\x69\x72\x6d"] = ["\x6e\141\155\x65" => "\156\x65\167\137\143\157\x6e\x66\151\x72\155", "\x69\144" => "\x6e\145\167\137\143\x6f\x6e\x66\x69\162\155", "\x74\x79\160\x65" => "\160\141\x73\163\x77\157\x72\144", "\x70\141\x74\164\x65\162\156" => "\136\x2e\173" . $this->data["\x6d\151\x6e\x5f\160\141\163\163\167\x6f\x72\144\x5f\154\x65\156\x67\x74\150"] . "\175\x2e\x2a\44"];
        goto TsQTT;
        czrgm:
        redirect("\x61\165\x74\150\x2f\x63\150\x61\x6e\147\145\x5f\x70\141\x73\x73\167\157\x72\x64", "\162\145\146\162\x65\163\x68");
        goto vfWfi;
        QdVRa:
        CtORh:
        goto ezma4;
        fhjns:
        $this->logout();
        goto cgixM;
        f_JHw:
        JHocS:
        goto eBVhQ;
        vfWfi:
        goto Dksop;
        goto f_JHw;
        bVaTy:
        redirect("\x61\x75\x74\150\x2f\x6c\157\147\151\x6e", "\x72\145\146\x72\x65\163\x68");
        goto QdVRa;
        eBVhQ:
        $this->session->set_flashdata("\x6d\x65\163\163\141\147\x65", $this->ion_auth->messages());
        goto fhjns;
        PIYJH:
        $change = $this->ion_auth->change_password($identity, $this->input->post("\x6f\x6c\x64"), $this->input->post("\x6e\x65\x77"));
        goto U2Peb;
        gA8ZH:
        goto FYt0C;
        goto QTc9j;
        zPtbN:
        $this->form_validation->set_rules("\156\x65\167\137\x63\x6f\x6e\x66\151\162\155", $this->lang->line("\x63\x68\141\x6e\147\145\x5f\x70\141\x73\163\167\157\x72\x64\x5f\x76\x61\154\x69\x64\141\164\x69\x6f\x6e\x5f\x6e\145\167\137\160\x61\163\163\x77\157\162\x64\137\x63\x6f\x6e\x66\x69\x72\x6d\x5f\x6c\x61\142\x65\x6c"), "\162\145\161\x75\x69\162\x65\144");
        goto fFZ0v;
        hMFVx:
        FYt0C:
        goto Iza42;
        QTc9j:
        NLc5c:
        goto pE5BF;
        QqLdu:
        $this->data["\155\x69\x6e\137\160\141\x73\163\x77\x6f\162\x64\x5f\154\145\156\x67\x74\x68"] = $this->config->item("\x6d\x69\x6e\x5f\160\141\163\x73\167\x6f\x72\x64\x5f\154\145\156\147\x74\x68", "\151\157\156\x5f\141\165\164\150");
        goto CRN1W;
        TsQTT:
        $this->data["\165\x73\x65\162\x5f\x69\x64"] = ["\x6e\x61\155\x65" => "\x75\163\x65\x72\137\x69\x64", "\151\x64" => "\165\x73\x65\x72\137\151\x64", "\x74\171\x70\145" => "\x68\151\x64\144\145\156", "\166\141\154\x75\x65" => $user->id];
        goto QTeOR;
        XadVN:
        $this->form_validation->set_rules("\156\145\x77", $this->lang->line("\143\x68\141\156\x67\145\137\160\x61\163\163\167\157\162\144\x5f\166\x61\154\x69\144\x61\164\151\157\156\x5f\x6e\x65\x77\x5f\x70\141\163\x73\x77\157\162\x64\x5f\154\x61\x62\x65\154"), "\162\145\x71\165\x69\162\145\x64\x7c\155\151\156\137\154\x65\x6e\x67\x74\x68\133" . $this->config->item("\x6d\x69\156\137\160\x61\163\x73\167\x6f\x72\144\x5f\x6c\145\x6e\147\x74\x68", "\x69\157\156\x5f\141\165\164\x68") . "\135\174\x6d\x61\x74\143\150\145\163\133\x6e\145\167\137\143\x6f\156\146\151\162\155\135");
        goto zPtbN;
        GUWn0:
        if ($this->form_validation->run() === FALSE) {
            goto NLc5c;
        }
        goto MIv1r;
        Iza42:
    }
    public function forgot_password()
    {
        goto OL8OX;
        YE3kk:
        goto dZJKl;
        goto xlYOU;
        aX3gx:
        $forgotten = $this->ion_auth->forgotten_password($identity->{$this->config->item("\151\144\145\156\164\151\164\171", "\x69\157\x6e\137\141\x75\x74\150")});
        goto r8fP2;
        GPF_o:
        if (!empty($identity)) {
            goto CzGuJ;
        }
        goto p8CWI;
        Mw9hh:
        $this->form_validation->set_rules("\151\144\x65\x6e\164\x69\164\171", $this->lang->line("\x66\157\x72\147\x6f\x74\137\160\x61\x73\163\167\157\x72\144\137\151\144\x65\156\164\151\164\x79\x5f\x6c\141\x62\x65\154"), "\x72\x65\x71\165\x69\x72\x65\x64");
        goto Ra2H0;
        AkqVg:
        CzGuJ:
        goto aX3gx;
        DLvFD:
        redirect("\141\165\164\150\57\x66\157\162\147\x6f\164\x5f\x70\x61\x73\x73\x77\x6f\162\x64", "\x72\x65\x66\162\x65\x73\x68");
        goto y0zy6;
        xlYOU:
        ELeEC:
        goto ETnHe;
        V_lFb:
        $this->data["\151\144\x65\156\x74\151\x74\x79"] = ["\156\141\155\x65" => "\151\144\x65\156\x74\151\x74\x79", "\151\144" => "\x69\x64\145\x6e\x74\151\x74\x79", "\143\x6c\x61\163\163" => "\146\157\162\x6d\55\x63\157\x6e\164\162\x6f\154", "\141\165\x74\x6f\x63\x6f\155\x70\x6c\145\x74\145" => "\x6f\146\146", "\141\165\x74\157\x66\157\x63\x75\163" => "\141\x75\x74\x6f\146\157\x63\x75\163"];
        goto H5zX6;
        H5zX6:
        if ($this->config->item("\x69\x64\x65\156\164\x69\x74\x79", "\151\157\156\x5f\141\x75\164\150") != "\145\x6d\141\x69\x6c") {
            goto ELeEC;
        }
        goto s5C_r;
        cmLZd:
        $this->form_validation->set_rules("\x69\x64\145\156\x74\x69\164\171", $this->lang->line("\146\157\162\x67\x6f\164\137\160\x61\x73\163\167\x6f\x72\144\137\x76\141\x6c\x69\x64\141\x74\151\157\x6e\137\145\155\x61\x69\x6c\137\x6c\x61\142\145\x6c"), "\x72\x65\161\x75\151\x72\145\144\x7c\x76\x61\154\151\x64\x5f\145\x6d\141\151\x6c");
        goto wdJv9;
        OL8OX:
        $this->data["\164\151\164\154\145"] = $this->lang->line("\146\x6f\x72\147\x6f\164\x5f\x70\x61\x73\163\167\x6f\x72\x64\137\150\145\141\x64\151\x6e\x67");
        goto HYRFk;
        UmCVw:
        $this->load->view("\x5f\164\145\155\x70\154\141\x74\145\163\x2f\141\165\x74\150\x2f\137\146\x6f\x6f\164\x65\162");
        goto Csla3;
        Csla3:
        Am52Y:
        goto a9qn3;
        aQYyh:
        redirect("\x61\x75\164\150\x2f\146\157\162\147\157\x74\137\160\x61\163\163\x77\157\162\x64", "\162\x65\x66\162\145\x73\150");
        goto AkqVg;
        y0zy6:
        goto uERUU;
        goto JVd_S;
        wdJv9:
        goto E3ubM;
        goto W2Vy5;
        KcRJG:
        $this->session->set_flashdata("\155\145\163\163\x61\x67\145", $this->ion_auth->errors());
        goto aQYyh;
        t4BaL:
        $this->load->view("\x61\165\x74\150\57\146\x6f\162\147\157\x74\x5f\x70\141\x73\163\x77\157\x72\x64");
        goto UmCVw;
        p8CWI:
        if ($this->config->item("\151\144\145\156\164\x69\164\x79", "\151\157\x6e\137\141\x75\x74\x68") != "\x65\155\x61\151\154") {
            goto LMg7O;
        }
        goto ZCLrL;
        r8fP2:
        if ($forgotten) {
            goto LJzuh;
        }
        goto iNUGW;
        s5C_r:
        $this->data["\x69\144\145\x6e\x74\151\164\171\137\154\141\142\x65\x6c"] = $this->lang->line("\x66\x6f\162\147\157\164\137\160\x61\x73\163\167\157\162\x64\137\x65\155\x61\151\154\137\x69\x64\x65\x6e\164\151\164\171\x5f\154\x61\x62\x65\154");
        goto YE3kk;
        PYHZx:
        goto Am52Y;
        goto utNRs;
        utNRs:
        Vlku3:
        goto uqQxd;
        GRrZv:
        goto QGka8;
        goto XMlpO;
        XMlpO:
        LMg7O:
        goto DIjZa;
        ZCLrL:
        $this->ion_auth->set_error("\x66\x6f\162\147\x6f\x74\x5f\x70\x61\163\163\x77\x6f\162\144\137\x65\x6d\x61\151\x6c\x5f\x6e\x6f\164\x5f\146\157\x75\x6e\144");
        goto GRrZv;
        ExuA7:
        $this->data["\x6d\145\163\163\x61\147\145"] = validation_errors() ? validation_errors() : $this->session->flashdata("\155\145\163\x73\x61\x67\145");
        goto h4A81;
        ETnHe:
        $this->data["\151\x64\x65\x6e\x74\x69\164\171\137\x6c\x61\142\145\154"] = $this->lang->line("\x66\157\x72\147\x6f\164\x5f\x70\141\x73\x73\167\x6f\x72\x64\137\x69\x64\x65\156\x74\151\164\x79\137\x6c\141\x62\x65\154");
        goto vg5Ck;
        PGXDR:
        redirect("\141\x75\x74\150\x2f\x66\x6f\162\x67\157\x74\x5f\160\x61\163\163\167\157\x72\x64", "\x72\145\146\162\x65\163\150");
        goto N0CPQ;
        W2Vy5:
        MW25B:
        goto Mw9hh;
        E3G1I:
        $identity_column = $this->config->item("\151\x64\145\156\164\x69\x74\171", "\x69\x6f\x6e\137\141\x75\x74\x68");
        goto PLRVa;
        Ra2H0:
        E3ubM:
        goto xoH9l;
        h4A81:
        $this->load->view("\137\x74\x65\x6d\x70\154\x61\x74\145\163\x2f\x61\x75\x74\150\57\137\x68\145\141\144\145\162", $this->data);
        goto t4BaL;
        xoH9l:
        if ($this->form_validation->run() === FALSE) {
            goto Vlku3;
        }
        goto E3G1I;
        JVd_S:
        LJzuh:
        goto tOzcR;
        vg5Ck:
        dZJKl:
        goto ExuA7;
        tOzcR:
        $this->session->set_flashdata("\x73\165\143\x63\145\163\x73", $this->ion_auth->messages());
        goto PGXDR;
        uqQxd:
        $this->data["\164\x79\160\145"] = $this->config->item("\151\x64\x65\x6e\x74\151\x74\x79", "\x69\157\x6e\137\x61\x75\x74\150");
        goto V_lFb;
        N0CPQ:
        uERUU:
        goto PYHZx;
        PLRVa:
        $identity = $this->ion_auth->where($identity_column, $this->input->post("\151\x64\145\x6e\164\x69\x74\x79"))->users()->row();
        goto GPF_o;
        HYRFk:
        if ($this->config->item("\x69\x64\145\x6e\x74\151\x74\171", "\151\157\x6e\x5f\x61\165\x74\150") != "\x65\x6d\x61\x69\154") {
            goto MW25B;
        }
        goto cmLZd;
        iNUGW:
        $this->session->set_flashdata("\x6d\145\x73\163\x61\x67\x65", $this->ion_auth->errors());
        goto DLvFD;
        DIjZa:
        $this->ion_auth->set_error("\146\x6f\162\x67\x6f\x74\137\x70\x61\163\x73\x77\x6f\162\144\137\151\x64\x65\x6e\164\x69\x74\171\137\x6e\157\x74\x5f\146\x6f\x75\156\x64");
        goto Cf8Ol;
        Cf8Ol:
        QGka8:
        goto KcRJG;
        a9qn3:
    }
    public function reset_password($code = NULL)
    {
        goto Sybl0;
        Z1NBU:
        redirect("\141\x75\164\150\x2f\x66\157\162\147\x6f\164\137\160\141\163\x73\167\157\162\144", "\x72\x65\146\162\x65\x73\x68");
        goto D5XdT;
        E8M55:
        ro6PU:
        goto IlHkt;
        Sybl0:
        if ($code) {
            goto KO7mS;
        }
        goto geLvG;
        V2dIt:
        if ($change) {
            goto Q81Sd;
        }
        goto Iecd2;
        tNq9S:
        $this->data["\x63\x73\162\x66"] = $this->_get_csrf_nonce();
        goto sgkbv;
        ZMa0P:
        if ($user) {
            goto UOic2;
        }
        goto R6pX4;
        P2tHY:
        $this->load->view("\x61\x75\164\150\57\162\145\163\x65\x74\x5f\x70\x61\x73\x73\167\157\x72\144", $this->data);
        goto QDJhl;
        S_HSq:
        $this->data["\x6e\145\x77\x5f\160\x61\163\163\x77\157\x72\x64\137\x63\x6f\x6e\146\151\x72\155"] = ["\x6e\x61\x6d\x65" => "\x6e\x65\167\x5f\143\x6f\x6e\146\x69\x72\155", "\x69\144" => "\x6e\145\167\137\143\x6f\156\x66\151\x72\155", "\x74\171\x70\x65" => "\x70\141\163\x73\x77\x6f\162\144", "\160\141\164\164\145\x72\x6e" => "\x5e\x2e\173" . $this->data["\155\x69\x6e\x5f\160\x61\163\163\x77\157\x72\x64\x5f\154\x65\x6e\x67\164\x68"] . "\x7d\x2e\52\x24"];
        goto by8hy;
        sgkbv:
        $this->data["\143\x6f\x64\x65"] = $code;
        goto h2S2s;
        lkR6C:
        $change = $this->ion_auth->reset_password($identity, $this->input->post("\156\145\x77"));
        goto V2dIt;
        by8hy:
        $this->data["\x75\163\x65\162\137\x69\144"] = ["\156\x61\x6d\145" => "\165\x73\x65\x72\137\151\x64", "\151\x64" => "\165\163\145\x72\x5f\x69\x64", "\x74\171\160\x65" => "\150\x69\x64\144\x65\x6e", "\x76\141\154\x75\x65" => $user->id];
        goto tNq9S;
        qIesc:
        KO7mS:
        goto Vj8fi;
        D5XdT:
        goto s5y1i;
        goto R6RH3;
        Evo9Y:
        if ($this->_valid_csrf_nonce() === FALSE || $user->id != $this->input->post("\x75\x73\x65\x72\x5f\x69\x64")) {
            goto yZdWd;
        }
        goto lkR6C;
        R6pX4:
        $this->session->set_flashdata("\x6d\145\x73\x73\141\x67\x65", $this->ion_auth->errors());
        goto Z1NBU;
        Iecd2:
        $this->session->set_flashdata("\155\x65\x73\163\141\147\145", $this->ion_auth->errors());
        goto mccre;
        geLvG:
        show_404();
        goto qIesc;
        R6RH3:
        UOic2:
        goto psK9z;
        h2S2s:
        $this->load->view("\x5f\x74\145\x6d\160\x6c\x61\x74\x65\163\x2f\141\165\x74\150\57\x5f\150\145\x61\144\145\x72");
        goto P2tHY;
        HnBLh:
        goto KHD3C;
        goto E8M55;
        IlHkt:
        $this->data["\x6d\x65\163\163\141\x67\x65"] = validation_errors() ? validation_errors() : $this->session->flashdata("\x6d\145\163\x73\x61\x67\x65");
        goto VJB8T;
        lddQI:
        $this->form_validation->set_rules("\x6e\x65\x77\137\x63\157\x6e\146\x69\162\x6d", $this->lang->line("\162\145\x73\145\x74\137\x70\141\x73\x73\167\157\162\144\x5f\166\141\x6c\151\x64\141\x74\x69\157\x6e\137\156\x65\x77\x5f\160\141\163\163\167\x6f\x72\x64\x5f\143\157\x6e\146\151\x72\x6d\x5f\154\x61\x62\x65\x6c"), "\162\x65\x71\165\151\162\x65\144");
        goto ZfD9s;
        Oiw_n:
        goto ZN9Os;
        goto bXANR;
        nj3t0:
        s82mh:
        goto Oiw_n;
        AE9tK:
        Q81Sd:
        goto Rr8uv;
        bXANR:
        yZdWd:
        goto mtuTs;
        iKZ39:
        $this->data["\156\145\x77\137\160\141\163\x73\167\157\x72\144"] = ["\x6e\x61\x6d\x65" => "\x6e\145\167", "\151\144" => "\156\145\167", "\x74\x79\x70\145" => "\x70\x61\163\163\x77\x6f\162\x64", "\160\x61\164\164\x65\x72\x6e" => "\136\56\173" . $this->data["\x6d\x69\156\x5f\160\141\x73\163\x77\157\x72\144\137\x6c\x65\156\x67\164\150"] . "\x7d\56\x2a\x24"];
        goto S_HSq;
        ZfD9s:
        if ($this->form_validation->run() === FALSE) {
            goto ro6PU;
        }
        goto FjGmG;
        nOINK:
        redirect("\141\165\x74\x68\57\154\157\x67\151\x6e", "\162\145\146\162\145\x73\150");
        goto nj3t0;
        mccre:
        redirect("\x61\x75\164\x68\57\162\145\x73\145\x74\x5f\x70\x61\163\x73\167\x6f\x72\144\x2f" . $code, "\x72\x65\x66\x72\x65\x73\150");
        goto EterV;
        M0vgP:
        $user = $this->ion_auth->forgotten_password_check($code);
        goto ZMa0P;
        Rr8uv:
        $this->session->set_flashdata("\x6d\145\x73\163\141\147\145", $this->ion_auth->messages());
        goto nOINK;
        Vj8fi:
        $this->data["\164\151\164\154\145"] = $this->lang->line("\162\x65\x73\145\164\137\x70\x61\x73\163\x77\x6f\x72\144\137\150\145\x61\144\151\156\x67");
        goto M0vgP;
        lwnzk:
        KHD3C:
        goto T5_pj;
        FjGmG:
        $identity = $user->{$this->config->item("\151\x64\145\156\164\x69\164\x79", "\x69\157\x6e\137\x61\165\x74\x68")};
        goto Evo9Y;
        mtuTs:
        $this->ion_auth->clear_forgotten_password_code($identity);
        goto OPwHr;
        EterV:
        goto s82mh;
        goto AE9tK;
        VJB8T:
        $this->data["\x6d\151\x6e\x5f\x70\141\163\163\167\x6f\162\x64\137\154\x65\x6e\x67\x74\x68"] = $this->config->item("\155\x69\156\x5f\x70\x61\163\163\167\157\x72\144\x5f\154\x65\x6e\x67\164\150", "\x69\x6f\x6e\137\x61\x75\x74\150");
        goto iKZ39;
        psK9z:
        $this->form_validation->set_rules("\156\x65\167", $this->lang->line("\162\x65\163\x65\x74\137\160\x61\x73\163\167\157\162\x64\137\x76\x61\x6c\151\x64\x61\164\x69\157\x6e\x5f\x6e\145\x77\137\x70\141\163\x73\167\x6f\x72\x64\137\x6c\141\142\145\154"), "\162\145\161\165\151\x72\x65\x64\x7c\155\x69\x6e\137\x6c\x65\x6e\x67\164\150\x5b" . $this->config->item("\155\151\156\137\160\x61\x73\x73\x77\x6f\x72\144\x5f\x6c\x65\156\x67\x74\150", "\x69\x6f\156\x5f\141\x75\164\x68") . "\x5d\174\x6d\141\x74\x63\x68\x65\163\133\156\145\167\137\x63\x6f\156\146\151\x72\155\x5d");
        goto lddQI;
        nO8Kn:
        ZN9Os:
        goto HnBLh;
        T5_pj:
        s5y1i:
        goto TYffR;
        OPwHr:
        show_error($this->lang->line("\145\162\x72\157\x72\137\x63\x73\x72\146"));
        goto nO8Kn;
        QDJhl:
        $this->load->view("\137\x74\x65\x6d\x70\154\141\x74\145\163\x2f\x61\x75\x74\150\x2f\137\146\x6f\x6f\x74\145\x72");
        goto lwnzk;
        TYffR:
    }
    public function activate($id, $code = FALSE)
    {
        goto s35Nb;
        M1DOj:
        $activation = $this->ion_auth->activate($id);
        goto x_u3k;
        BauAl:
        if ($activation) {
            goto tfDc6;
        }
        goto bmlzg;
        rxJ8e:
        $this->session->set_flashdata("\x6d\x65\163\x73\x61\x67\x65", $this->ion_auth->messages());
        goto LPLTC;
        OgaoO:
        $activation = $this->ion_auth->activate($id, $code);
        goto ig1_h;
        s35Nb:
        $activation = FALSE;
        goto t5WDH;
        bmlzg:
        $this->session->set_flashdata("\x6d\x65\x73\x73\x61\x67\x65", $this->ion_auth->errors());
        goto cEply;
        V2aZz:
        def2u:
        goto z0g0m;
        xTdYg:
        goto Ndcmn;
        goto F82_G;
        t5WDH:
        if ($code !== FALSE) {
            goto ed6A9;
        }
        goto M8aCV;
        F82_G:
        ed6A9:
        goto OgaoO;
        x_u3k:
        oEsCR:
        goto xTdYg;
        M8aCV:
        if (!$this->ion_auth->is_admin()) {
            goto oEsCR;
        }
        goto M1DOj;
        NE4an:
        goto def2u;
        goto QA_ar;
        LPLTC:
        redirect("\x61\x75\164\150", "\x72\x65\146\162\x65\163\150");
        goto V2aZz;
        cEply:
        redirect("\141\165\164\150\x2f\x66\157\162\147\157\x74\137\160\141\x73\163\x77\x6f\x72\144", "\162\x65\146\162\x65\x73\x68");
        goto NE4an;
        QA_ar:
        tfDc6:
        goto rxJ8e;
        ig1_h:
        Ndcmn:
        goto BauAl;
        z0g0m:
    }
    public function deactivate($id = NULL)
    {
        goto mN0pr;
        fxbnH:
        $this->_render_page("\x61\165\x74\x68" . DIRECTORY_SEPARATOR . "\x64\145\141\x63\x74\x69\x76\x61\x74\x65\x5f\x75\163\145\x72", $this->data);
        goto Rw671;
        VpEFP:
        hFBUd:
        goto QmOQF;
        cckcc:
        $this->data["\165\x73\x65\x72"] = $this->ion_auth->user($id)->row();
        goto fxbnH;
        mN0pr:
        if (!(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())) {
            goto b2rgv;
        }
        goto m3G0D;
        mCA2B:
        mcn0O:
        goto dQDSc;
        i1Cd0:
        b2rgv:
        goto e_sUo;
        Giswp:
        redirect("\141\165\164\x68", "\x72\x65\x66\x72\x65\x73\150");
        goto cQZL1;
        Y3JBm:
        if (!($this->input->post("\x63\157\x6e\146\151\x72\155") == "\x79\x65\x73")) {
            goto ECO1b;
        }
        goto H506e;
        dQDSc:
        $this->data["\x63\163\x72\x66"] = $this->_get_csrf_nonce();
        goto cckcc;
        H506e:
        if (!($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post("\x69\x64"))) {
            goto r8ZIn;
        }
        goto hBFhq;
        cQZL1:
        goto DWovS;
        goto mCA2B;
        Pm8Kq:
        if (!($this->ion_auth->logged_in() && $this->ion_auth->is_admin())) {
            goto hFBUd;
        }
        goto Eju4Q;
        QmOQF:
        ECO1b:
        goto Giswp;
        Eju4Q:
        $this->ion_auth->deactivate($id);
        goto VpEFP;
        hBFhq:
        show_error($this->lang->line("\x65\162\x72\157\162\x5f\x63\x73\x72\x66"));
        goto fNp1D;
        oDARr:
        if ($this->form_validation->run() === FALSE) {
            goto mcn0O;
        }
        goto Y3JBm;
        EipVd:
        $this->form_validation->set_rules("\x69\x64", $this->lang->line("\x64\x65\x61\x63\164\x69\166\141\164\x65\x5f\166\x61\x6c\x69\144\x61\164\x69\157\x6e\x5f\165\163\145\162\137\151\x64\x5f\x6c\141\x62\x65\154"), "\162\145\x71\x75\151\x72\145\x64\174\x61\x6c\x70\x68\141\x5f\x6e\x75\155\145\x72\151\x63");
        goto oDARr;
        Rw671:
        DWovS:
        goto b5JzP;
        fNp1D:
        r8ZIn:
        goto Pm8Kq;
        e_sUo:
        $id = (int) $id;
        goto nFWdn;
        m3G0D:
        show_error("\x59\x6f\165\40\x6d\165\163\164\40\x62\x65\40\x61\156\40\x61\144\155\151\156\x69\163\164\162\141\164\157\162\x20\x74\157\40\x76\151\x65\x77\x20\164\150\x69\163\40\160\141\147\x65\x2e");
        goto i1Cd0;
        lUg1K:
        $this->form_validation->set_rules("\143\x6f\x6e\146\x69\x72\x6d", $this->lang->line("\x64\145\141\x63\164\151\166\141\164\x65\137\166\x61\x6c\151\144\141\164\151\x6f\x6e\137\143\x6f\156\146\x69\x72\x6d\x5f\x6c\x61\x62\x65\154"), "\x72\x65\161\x75\x69\162\x65\144");
        goto EipVd;
        nFWdn:
        $this->load->library("\x66\157\x72\x6d\x5f\166\141\154\151\144\x61\x74\151\x6f\156");
        goto lUg1K;
        b5JzP:
    }
    public function create_user()
    {
        goto k1kGR;
        XDDJr:
        if ($this->form_validation->run() === TRUE && $this->ion_auth->register($identity, $password, $email, $additional_data)) {
            goto LwWuE;
        }
        goto kskjJ;
        XXT3H:
        if ($identity_column !== "\x65\x6d\141\x69\x6c") {
            goto Km19P;
        }
        goto l2l9G;
        YU6DJ:
        if (!(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())) {
            goto R5NHt;
        }
        goto ErE0m;
        Y1mMF:
        $this->data["\151\144\145\156\x74\x69\x74\x79\x5f\143\157\154\165\x6d\156"] = $identity_column;
        goto W1lMO;
        JcWst:
        izbDF:
        goto dsLIK;
        meDl1:
        Km19P:
        goto tb8tA;
        hyvM3:
        $this->data["\160\141\x73\x73\167\157\162\144"] = ["\x6e\x61\155\145" => "\x70\141\x73\x73\x77\157\162\144", "\151\144" => "\160\x61\163\x73\167\x6f\162\144", "\164\x79\x70\145" => "\x70\141\x73\x73\x77\157\x72\144", "\x76\141\154\x75\145" => $this->form_validation->set_value("\160\x61\163\x73\x77\x6f\162\x64")];
        goto fFCce;
        k1kGR:
        $this->data["\x74\x69\164\x6c\x65"] = $this->lang->line("\x63\162\x65\x61\164\x65\x5f\x75\163\x65\x72\x5f\x68\145\x61\x64\151\156\147");
        goto YU6DJ;
        Gl_eb:
        $additional_data = ["\146\x69\162\163\164\137\x6e\141\x6d\x65" => $this->input->post("\x66\151\x72\x73\164\137\156\141\x6d\145"), "\x6c\141\163\x74\137\156\x61\x6d\x65" => $this->input->post("\154\x61\x73\x74\x5f\156\x61\x6d\145"), "\143\157\155\160\141\x6e\171" => $this->input->post("\143\x6f\x6d\x70\x61\x6e\x79"), "\160\150\x6f\x6e\x65" => $this->input->post("\160\x68\157\156\x65")];
        goto hmhjw;
        vH24g:
        $password = $this->input->post("\x70\141\x73\163\167\157\x72\144");
        goto Gl_eb;
        o4CT7:
        redirect("\141\165\164\150", "\x72\145\146\x72\x65\163\x68");
        goto koqA4;
        O0exY:
        $email = strtolower($this->input->post("\145\x6d\x61\151\154"));
        goto x7Fbb;
        l2l9G:
        $this->form_validation->set_rules("\145\155\x61\151\x6c", $this->lang->line("\x63\x72\x65\x61\164\x65\x5f\x75\x73\145\x72\x5f\166\x61\x6c\x69\x64\141\164\x69\157\x6e\137\145\155\141\151\154\x5f\154\141\142\x65\154"), "\164\162\151\x6d\x7c\162\145\x71\165\x69\162\x65\x64\174\x76\x61\154\151\144\x5f\145\x6d\141\151\x6c\x7c\x69\163\137\x75\x6e\151\161\x75\x65\x5b" . $tables["\x75\163\145\162\163"] . "\x2e\x65\155\141\x69\154\x5d");
        goto u4n14;
        bxyPv:
        R5NHt:
        goto j1bLn;
        dsLIK:
        $this->form_validation->set_rules("\x70\x68\157\156\x65", $this->lang->line("\x63\x72\145\141\x74\145\137\x75\x73\x65\162\137\166\141\154\151\144\141\x74\x69\x6f\156\137\160\150\157\156\145\137\154\141\x62\145\x6c"), "\x74\x72\x69\x6d");
        goto FiSFR;
        tY7mX:
        $this->data["\x70\x68\x6f\x6e\x65"] = ["\156\141\x6d\145" => "\160\x68\157\156\145", "\151\144" => "\160\x68\x6f\x6e\x65", "\164\x79\x70\x65" => "\164\x65\x78\x74", "\x76\141\x6c\165\145" => $this->form_validation->set_value("\160\150\x6f\156\145")];
        goto hyvM3;
        tb8tA:
        $this->form_validation->set_rules("\151\144\x65\156\x74\151\x74\x79", $this->lang->line("\143\162\x65\141\x74\x65\137\x75\x73\x65\x72\x5f\x76\141\x6c\151\x64\141\164\x69\x6f\x6e\137\x69\x64\145\156\x74\x69\164\171\x5f\x6c\141\x62\x65\154"), "\x74\x72\x69\x6d\x7c\162\145\161\165\x69\x72\145\144\x7c\x69\x73\x5f\165\x6e\x69\161\165\145\x5b" . $tables["\x75\x73\145\x72\x73"] . "\56" . $identity_column . "\135");
        goto Sj13Y;
        EUXJX:
        $this->data["\x6c\141\163\164\137\x6e\x61\x6d\145"] = ["\x6e\141\155\145" => "\x6c\141\x73\164\137\x6e\x61\x6d\145", "\x69\144" => "\x6c\141\163\x74\x5f\156\141\155\145", "\x74\x79\x70\x65" => "\164\145\x78\164", "\166\141\154\x75\x65" => $this->form_validation->set_value("\x6c\x61\163\164\137\x6e\141\155\x65")];
        goto lgn5T;
        FiSFR:
        $this->form_validation->set_rules("\143\157\155\160\141\156\171", $this->lang->line("\143\x72\145\141\x74\x65\137\165\x73\145\162\x5f\166\x61\154\151\x64\x61\x74\151\157\x6e\x5f\143\157\x6d\160\141\x6e\x79\x5f\x6c\141\142\145\154"), "\x74\162\x69\x6d");
        goto gg5yB;
        lgn5T:
        $this->data["\x69\x64\x65\x6e\164\x69\164\171"] = ["\x6e\x61\x6d\145" => "\x69\144\145\156\164\151\164\171", "\x69\x64" => "\x69\144\x65\x6e\x74\x69\x74\171", "\x74\171\160\x65" => "\164\145\x78\164", "\166\141\154\x75\x65" => $this->form_validation->set_value("\151\x64\x65\x6e\164\151\x74\x79")];
        goto uDlN1;
        x7Fbb:
        $identity = $identity_column === "\x65\155\x61\151\x6c" ? $email : $this->input->post("\x69\x64\x65\x6e\164\151\x74\x79");
        goto vH24g;
        iocfu:
        if (!($this->form_validation->run() === TRUE)) {
            goto iuLbO;
        }
        goto O0exY;
        J_yUJ:
        $this->form_validation->set_rules("\x70\141\163\x73\167\157\x72\144\x5f\x63\x6f\x6e\146\151\x72\155", $this->lang->line("\x63\x72\145\141\x74\145\137\x75\x73\145\162\x5f\166\141\x6c\x69\144\141\164\151\157\x6e\137\x70\141\x73\163\167\x6f\162\x64\x5f\143\x6f\x6e\x66\151\x72\155\x5f\x6c\x61\x62\145\x6c"), "\162\145\161\x75\151\x72\x65\x64");
        goto iocfu;
        Sj13Y:
        $this->form_validation->set_rules("\x65\155\x61\x69\154", $this->lang->line("\143\x72\x65\141\x74\x65\137\165\163\x65\162\137\x76\141\154\151\144\x61\164\x69\x6f\x6e\x5f\x65\x6d\x61\x69\154\x5f\154\141\142\145\x6c"), "\164\x72\151\155\174\162\145\x71\x75\151\x72\x65\144\174\x76\141\154\151\x64\137\x65\155\141\151\x6c");
        goto JcWst;
        PxoXj:
        $this->data["\x66\151\x72\x73\164\137\156\141\x6d\x65"] = ["\x6e\141\155\x65" => "\146\151\x72\163\x74\137\x6e\141\x6d\145", "\151\144" => "\146\x69\162\163\164\137\x6e\x61\155\x65", "\164\171\x70\x65" => "\x74\145\x78\x74", "\166\141\154\165\145" => $this->form_validation->set_value("\x66\x69\x72\x73\164\137\156\x61\x6d\145")];
        goto EUXJX;
        kskjJ:
        $this->data["\x6d\145\163\x73\x61\x67\x65"] = validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata("\155\x65\x73\x73\141\x67\x65"));
        goto PxoXj;
        j1bLn:
        $tables = $this->config->item("\164\x61\142\154\x65\x73", "\151\x6f\x6e\137\x61\165\164\x68");
        goto CFbVD;
        qHKwg:
        goto DK9ul;
        goto v3w8r;
        ErE0m:
        redirect("\x61\x75\x74\150", "\162\x65\x66\162\x65\x73\x68");
        goto bxyPv;
        i2pGP:
        $this->_render_page("\141\x75\x74\150" . DIRECTORY_SEPARATOR . "\x63\x72\x65\141\x74\x65\137\x75\163\x65\162", $this->data);
        goto qHKwg;
        CFbVD:
        $identity_column = $this->config->item("\151\x64\x65\x6e\164\151\x74\x79", "\x69\157\156\x5f\x61\x75\164\x68");
        goto Y1mMF;
        uDlN1:
        $this->data["\x65\155\x61\x69\154"] = ["\x6e\141\155\145" => "\x65\155\141\151\154", "\x69\144" => "\x65\155\141\x69\x6c", "\x74\x79\160\x65" => "\x74\x65\170\164", "\x76\141\154\x75\145" => $this->form_validation->set_value("\x65\155\x61\x69\154")];
        goto ikDjS;
        gg5yB:
        $this->form_validation->set_rules("\x70\141\x73\x73\167\x6f\x72\144", $this->lang->line("\x63\162\x65\x61\164\145\137\165\163\x65\162\x5f\166\x61\154\151\144\141\164\151\x6f\x6e\137\160\141\x73\x73\x77\x6f\x72\x64\137\154\x61\142\145\x6c"), "\162\145\x71\165\x69\162\x65\x64\x7c\155\151\x6e\x5f\154\x65\x6e\147\x74\150\133" . $this->config->item("\x6d\x69\x6e\x5f\160\x61\163\x73\167\157\x72\144\x5f\154\145\x6e\147\164\150", "\x69\x6f\156\x5f\141\165\164\150") . "\x5d\174\x6d\141\164\x63\x68\145\163\x5b\x70\x61\163\x73\x77\157\x72\144\x5f\x63\x6f\156\146\x69\x72\x6d\x5d");
        goto J_yUJ;
        veISg:
        $this->form_validation->set_rules("\x6c\x61\163\164\137\156\141\155\x65", $this->lang->line("\143\162\145\141\x74\145\137\x75\x73\x65\162\137\x76\x61\154\x69\x64\x61\164\x69\x6f\x6e\x5f\x6c\156\141\155\145\137\x6c\141\x62\x65\x6c"), "\x74\x72\x69\x6d\x7c\x72\x65\161\x75\151\x72\145\x64");
        goto XXT3H;
        hmhjw:
        iuLbO:
        goto XDDJr;
        fFCce:
        $this->data["\x70\141\163\163\167\157\x72\x64\x5f\143\157\156\146\x69\x72\x6d"] = ["\156\x61\155\145" => "\x70\x61\163\163\x77\x6f\162\x64\x5f\x63\x6f\x6e\146\151\x72\x6d", "\151\x64" => "\x70\x61\163\163\167\x6f\162\x64\137\x63\157\156\146\x69\162\155", "\164\171\x70\x65" => "\160\141\163\x73\167\x6f\162\x64", "\166\141\154\x75\145" => $this->form_validation->set_value("\160\141\163\x73\x77\157\x72\144\137\x63\157\156\x66\151\162\155")];
        goto i2pGP;
        ikDjS:
        $this->data["\143\x6f\x6d\x70\141\156\x79"] = ["\x6e\x61\x6d\145" => "\143\157\155\x70\141\156\x79", "\x69\144" => "\143\157\x6d\160\141\x6e\x79", "\164\171\x70\x65" => "\164\x65\170\x74", "\x76\x61\x6c\165\145" => $this->form_validation->set_value("\143\157\x6d\x70\x61\x6e\x79")];
        goto tY7mX;
        u4n14:
        goto izbDF;
        goto meDl1;
        W1lMO:
        $this->form_validation->set_rules("\146\x69\x72\x73\x74\x5f\156\141\155\145", $this->lang->line("\143\x72\x65\141\164\x65\x5f\165\163\x65\x72\137\x76\x61\154\x69\144\141\164\x69\157\x6e\137\146\156\x61\x6d\x65\137\154\x61\142\145\154"), "\x74\x72\151\155\x7c\162\x65\x71\x75\151\162\145\144");
        goto veISg;
        koqA4:
        DK9ul:
        goto gWFwx;
        v3w8r:
        LwWuE:
        goto PGjdp;
        PGjdp:
        $this->session->set_flashdata("\155\x65\163\163\x61\147\x65", $this->ion_auth->messages());
        goto o4CT7;
        gWFwx:
    }
    public function redirectUser()
    {
        goto L3u5w;
        apjwj:
        g1tZ2:
        goto suc6W;
        D9AlD:
        redirect("\141\165\164\150", "\x72\x65\146\x72\x65\x73\150");
        goto apjwj;
        suc6W:
        redirect("\57", "\x72\x65\146\162\x65\x73\150");
        goto ceP2o;
        L3u5w:
        if (!$this->ion_auth->is_admin()) {
            goto g1tZ2;
        }
        goto D9AlD;
        ceP2o:
    }
    public function edit_user($id)
    {
        goto K6wUD;
        cYuAX:
        if (!($this->_valid_csrf_nonce() === FALSE || $id != $this->input->post("\x69\144"))) {
            goto zkDJ1;
        }
        goto ABkVo;
        D0INy:
        $this->data["\x66\x69\162\163\164\x5f\156\x61\155\145"] = ["\156\141\x6d\145" => "\x66\x69\162\x73\164\137\156\141\155\x65", "\151\x64" => "\x66\x69\x72\x73\164\x5f\x6e\x61\x6d\x65", "\x74\x79\160\145" => "\164\145\170\x74", "\x76\x61\154\x75\x65" => $this->form_validation->set_value("\146\151\162\x73\x74\137\156\141\155\145", $user->first_name)];
        goto Hec1B;
        UkAKa:
        $user = $this->ion_auth->user($id)->row();
        goto apspT;
        Zfsw_:
        if (!(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin() && !($this->ion_auth->user()->row()->id == $id))) {
            goto qtbXB;
        }
        goto BXD9Q;
        XygG7:
        $this->form_validation->set_rules("\160\x68\157\156\145", $this->lang->line("\x65\x64\151\x74\x5f\x75\163\145\x72\x5f\x76\141\154\x69\x64\141\164\x69\x6f\156\137\x70\150\x6f\x6e\x65\x5f\x6c\x61\x62\x65\x6c"), "\x74\162\151\x6d");
        goto foXaS;
        JFQaj:
        $this->data["\147\162\x6f\x75\x70\163"] = $groups;
        goto tkqjv;
        jS440:
        $this->form_validation->set_rules("\x70\x61\163\163\x77\157\162\144", $this->lang->line("\x65\144\x69\x74\x5f\x75\x73\145\162\137\166\141\x6c\x69\144\141\164\151\157\x6e\x5f\x70\141\x73\x73\x77\157\x72\144\137\154\x61\x62\145\x6c"), "\x72\x65\161\165\151\x72\x65\144\x7c\155\151\156\x5f\154\x65\156\x67\x74\x68\x5b" . $this->config->item("\155\x69\x6e\137\160\141\x73\163\167\157\x72\144\137\x6c\145\156\147\x74\150", "\x69\x6f\x6e\137\x61\x75\x74\150") . "\x5d\x7c\155\141\164\143\x68\145\163\133\160\141\x73\x73\167\157\x72\x64\x5f\143\x6f\156\x66\x69\x72\155\x5d");
        goto F4Zu4;
        ABkVo:
        show_error($this->lang->line("\145\x72\x72\x6f\x72\x5f\x63\x73\162\x66"));
        goto dL3ft;
        kkMem:
        if (!(isset($_POST) && !empty($_POST))) {
            goto wWb4s;
        }
        goto cYuAX;
        TpcM0:
        $this->redirectUser();
        goto kYi__;
        KGioo:
        pCAsp:
        goto qluX7;
        KUSrD:
        g3u44:
        goto HFEF2;
        K6wUD:
        $this->data["\164\x69\x74\154\145"] = $this->lang->line("\145\144\151\x74\137\x75\163\x65\162\137\150\x65\x61\x64\151\156\147");
        goto Zfsw_;
        FagUD:
        if ($this->ion_auth->update($user->id, $data)) {
            goto d5VoE;
        }
        goto muXNo;
        kYi__:
        goto XviSA;
        goto q4Umx;
        foXaS:
        $this->form_validation->set_rules("\143\157\x6d\160\141\156\x79", $this->lang->line("\145\144\x69\164\x5f\x75\163\145\162\x5f\x76\141\x6c\x69\x64\141\164\151\x6f\x6e\137\x63\157\155\160\141\x6e\x79\x5f\x6c\x61\142\x65\154"), "\x74\162\151\155");
        goto kkMem;
        BXD9Q:
        redirect("\x61\x75\164\x68", "\x72\x65\146\162\x65\163\x68");
        goto S3hjh;
        qFRD3:
        XviSA:
        goto KUSrD;
        tkqjv:
        $this->data["\143\x75\x72\162\145\x6e\164\107\x72\x6f\x75\160\x73"] = $currentGroups;
        goto D0INy;
        pAjDE:
        $this->data["\160\x61\x73\x73\x77\x6f\162\144"] = ["\156\141\155\145" => "\x70\x61\x73\x73\167\x6f\162\144", "\x69\x64" => "\160\141\163\163\x77\157\162\x64", "\164\x79\160\x65" => "\160\141\x73\x73\x77\x6f\162\144"];
        goto lTjHD;
        XX9zt:
        if (!(isset($groupData) && !empty($groupData))) {
            goto YtahF;
        }
        goto E1AiP;
        HFEF2:
        wWb4s:
        goto XssHS;
        yfdIw:
        if (!($this->form_validation->run() === TRUE)) {
            goto g3u44;
        }
        goto Gsh8U;
        Hec1B:
        $this->data["\154\141\163\x74\137\x6e\x61\155\x65"] = ["\x6e\141\155\x65" => "\x6c\141\163\x74\x5f\x6e\141\x6d\x65", "\x69\144" => "\x6c\141\163\164\x5f\x6e\x61\x6d\x65", "\164\171\x70\145" => "\164\x65\170\164", "\166\141\x6c\165\145" => $this->form_validation->set_value("\154\x61\163\164\x5f\x6e\141\155\x65", $user->last_name)];
        goto YTD4Z;
        qluX7:
        YtahF:
        goto MCe5N;
        ND8x4:
        $currentGroups = $this->ion_auth->get_users_groups($id)->result();
        goto GjwNW;
        o8fTW:
        $this->data["\155\145\163\x73\141\147\145"] = validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata("\x6d\145\163\x73\141\x67\145"));
        goto o4LkP;
        RY1yi:
        $this->form_validation->set_rules("\154\141\163\x74\x5f\156\x61\155\145", $this->lang->line("\x65\x64\x69\x74\137\165\163\145\x72\x5f\166\141\154\x69\x64\x61\x74\x69\x6f\x6e\x5f\x6c\x6e\x61\155\x65\x5f\154\x61\x62\145\154"), "\x74\162\x69\x6d\174\x72\x65\161\x75\x69\x72\x65\144");
        goto XygG7;
        MCe5N:
        cD2zZ:
        goto FagUD;
        vunc0:
        O4D64:
        goto yfdIw;
        Tjrnk:
        $this->_render_page("\x61\x75\164\x68\57\145\144\x69\164\137\165\163\x65\x72", $this->data);
        goto h5qnr;
        F4Zu4:
        $this->form_validation->set_rules("\160\x61\x73\x73\x77\157\x72\x64\137\x63\157\x6e\146\151\x72\155", $this->lang->line("\x65\x64\151\x74\x5f\165\x73\x65\x72\x5f\166\x61\x6c\x69\x64\x61\164\x69\157\156\137\160\x61\163\163\167\x6f\162\x64\137\143\x6f\x6e\x66\x69\162\x6d\x5f\x6c\x61\x62\145\x6c"), "\162\145\161\x75\151\x72\145\x64");
        goto vunc0;
        lTjHD:
        $this->data["\160\141\x73\x73\167\x6f\162\x64\x5f\143\x6f\156\x66\x69\162\155"] = ["\x6e\141\x6d\x65" => "\x70\141\x73\x73\167\157\x72\144\137\143\157\156\x66\x69\x72\155", "\x69\144" => "\160\x61\163\x73\x77\x6f\162\x64\137\143\157\156\146\151\162\x6d", "\164\x79\160\145" => "\160\141\x73\163\x77\157\162\x64"];
        goto Tjrnk;
        apspT:
        $groups = $this->ion_auth->groups()->result_array();
        goto ND8x4;
        qeUZ9:
        if (!$this->ion_auth->is_admin()) {
            goto cD2zZ;
        }
        goto ZJDOb;
        Gsh8U:
        $data = ["\146\151\162\163\x74\137\156\x61\x6d\x65" => $this->input->post("\x66\151\162\163\x74\x5f\156\141\155\x65"), "\154\x61\x73\x74\137\156\141\155\145" => $this->input->post("\154\x61\163\164\x5f\x6e\x61\x6d\145"), "\143\x6f\x6d\x70\141\156\171" => $this->input->post("\143\x6f\x6d\x70\x61\x6e\x79"), "\x70\150\x6f\x6e\x65" => $this->input->post("\x70\x68\x6f\156\145")];
        goto BEMdJ;
        E1AiP:
        foreach ($groupData as $grp) {
            $this->ion_auth->add_to_group($grp, $id);
            cPAuj:
        }
        goto KGioo;
        zOR06:
        $this->redirectUser();
        goto qFRD3;
        YTD4Z:
        $this->data["\143\x6f\x6d\x70\141\x6e\171"] = ["\x6e\x61\x6d\145" => "\143\x6f\x6d\x70\x61\156\171", "\151\144" => "\143\x6f\155\160\x61\156\x79", "\x74\171\160\145" => "\x74\145\x78\164", "\x76\141\x6c\x75\145" => $this->form_validation->set_value("\x63\157\155\160\141\156\x79", $user->company)];
        goto RV8Mb;
        q4Umx:
        d5VoE:
        goto TG0zM;
        rqatX:
        if (!$this->input->post("\160\141\x73\163\167\157\162\x64")) {
            goto O4D64;
        }
        goto jS440;
        GjwNW:
        $this->form_validation->set_rules("\x66\x69\162\x73\x74\x5f\x6e\x61\155\x65", $this->lang->line("\x65\x64\x69\164\x5f\165\x73\x65\162\137\x76\x61\154\x69\144\x61\x74\x69\x6f\x6e\137\x66\x6e\141\155\145\x5f\x6c\x61\142\145\154"), "\164\162\151\155\174\162\145\x71\x75\151\x72\145\x64");
        goto RY1yi;
        BEMdJ:
        if (!$this->input->post("\160\141\x73\163\167\157\162\x64")) {
            goto cxKGJ;
        }
        goto cjfFd;
        cjfFd:
        $data["\160\141\x73\163\x77\x6f\x72\x64"] = $this->input->post("\160\x61\163\x73\167\x6f\x72\x64");
        goto LywAr;
        S3hjh:
        qtbXB:
        goto UkAKa;
        muXNo:
        $this->session->set_flashdata("\155\x65\x73\x73\x61\x67\145", $this->ion_auth->errors());
        goto TpcM0;
        XssHS:
        $this->data["\143\163\x72\146"] = $this->_get_csrf_nonce();
        goto o8fTW;
        RV8Mb:
        $this->data["\x70\150\157\x6e\x65"] = ["\x6e\141\155\145" => "\160\x68\157\x6e\x65", "\x69\x64" => "\160\x68\157\156\145", "\164\x79\160\145" => "\x74\145\x78\164", "\x76\141\x6c\165\145" => $this->form_validation->set_value("\x70\x68\157\156\145", $user->phone)];
        goto pAjDE;
        ZJDOb:
        $this->ion_auth->remove_from_group('', $id);
        goto bKV8P;
        o4LkP:
        $this->data["\165\x73\145\162"] = $user;
        goto JFQaj;
        bKV8P:
        $groupData = $this->input->post("\x67\x72\x6f\x75\160\x73");
        goto XX9zt;
        dL3ft:
        zkDJ1:
        goto rqatX;
        TG0zM:
        $this->session->set_flashdata("\155\x65\x73\163\x61\147\x65", $this->ion_auth->messages());
        goto zOR06;
        LywAr:
        cxKGJ:
        goto qeUZ9;
        h5qnr:
    }
    public function create_group()
    {
        goto WeXns;
        XUetB:
        if ($new_group_id) {
            goto i7mJg;
        }
        goto T1CwP;
        N1XZC:
        M54YR:
        goto TN8Qk;
        pE79Z:
        redirect("\141\165\x74\x68", "\x72\145\x66\162\x65\163\150");
        goto vRij4;
        WeXns:
        $this->data["\164\x69\164\x6c\145"] = $this->lang->line("\x63\x72\x65\x61\164\145\x5f\147\162\157\165\160\x5f\x74\151\x74\x6c\x65");
        goto CNVKT;
        CNVKT:
        if (!(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())) {
            goto M54YR;
        }
        goto DGO8C;
        T1CwP:
        $this->session->set_flashdata("\x6d\x65\x73\163\141\147\x65", $this->ion_auth->errors());
        goto KBzIB;
        TN8Qk:
        $this->form_validation->set_rules("\147\x72\x6f\165\160\137\156\141\155\145", $this->lang->line("\x63\162\x65\x61\x74\x65\137\147\x72\x6f\165\160\x5f\x76\x61\x6c\151\144\x61\x74\x69\157\x6e\137\156\x61\155\x65\137\x6c\x61\x62\145\154"), "\x74\162\151\x6d\x7c\x72\145\161\165\151\162\145\x64\x7c\x61\x6c\x70\150\x61\x5f\144\141\x73\150");
        goto MaTtp;
        qG_m4:
        i7mJg:
        goto t_rjd;
        NpYXv:
        $this->data["\147\162\x6f\165\x70\x5f\156\x61\155\145"] = ["\x6e\x61\155\145" => "\147\162\x6f\x75\x70\x5f\x6e\141\155\145", "\x69\x64" => "\147\162\157\165\160\x5f\156\141\x6d\x65", "\164\x79\160\x65" => "\164\145\x78\164", "\x76\141\154\x75\x65" => $this->form_validation->set_value("\x67\162\x6f\165\160\137\156\x61\155\x65")];
        goto uLg4P;
        vRij4:
        ZaCFw:
        goto HEcZu;
        DGO8C:
        redirect("\x61\165\x74\150", "\x72\x65\x66\162\145\x73\x68");
        goto N1XZC;
        MaTtp:
        if (!($this->form_validation->run() === TRUE)) {
            goto Zxpib;
        }
        goto OtVTq;
        OtVTq:
        $new_group_id = $this->ion_auth->create_group($this->input->post("\147\x72\x6f\x75\x70\137\x6e\x61\x6d\145"), $this->input->post("\x64\145\x73\x63\x72\151\160\x74\151\x6f\x6e"));
        goto XUetB;
        XgvKR:
        $this->data["\x6d\x65\163\163\141\x67\x65"] = validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata("\x6d\x65\163\163\141\x67\145"));
        goto NpYXv;
        HEcZu:
        Zxpib:
        goto XgvKR;
        t_rjd:
        $this->session->set_flashdata("\155\x65\x73\163\141\x67\x65", $this->ion_auth->messages());
        goto pE79Z;
        uLg4P:
        $this->data["\144\145\x73\143\162\151\160\x74\151\157\x6e"] = ["\156\141\x6d\x65" => "\144\145\x73\x63\162\151\x70\164\x69\x6f\156", "\x69\x64" => "\x64\x65\x73\143\162\151\x70\164\x69\x6f\156", "\x74\171\160\145" => "\164\x65\170\164", "\x76\141\x6c\165\x65" => $this->form_validation->set_value("\x64\x65\163\x63\162\x69\x70\164\151\157\x6e")];
        goto k8urp;
        k8urp:
        $this->_render_page("\141\165\x74\x68\x2f\143\162\x65\x61\164\x65\x5f\147\x72\157\165\160", $this->data);
        goto PmHv4;
        KBzIB:
        goto ZaCFw;
        goto qG_m4;
        PmHv4:
    }
    public function edit_group($id)
    {
        goto YIQPO;
        WDzhr:
        $this->data["\164\x69\164\154\x65"] = $this->lang->line("\145\144\x69\x74\137\147\x72\x6f\x75\x70\137\164\151\164\154\x65");
        goto wN5nQ;
        qvXIi:
        $group_update = $this->ion_auth->update_group($id, $_POST["\x67\x72\157\165\x70\x5f\x6e\141\155\x65"], array("\144\145\163\x63\x72\151\x70\164\x69\157\156" => $_POST["\x67\x72\x6f\x75\160\x5f\x64\145\x73\x63\x72\151\x70\164\151\157\156"]));
        goto zG5M8;
        dI1qH:
        $this->data["\147\162\157\165\160\x5f\156\141\x6d\x65"]["\x72\x65\141\x64\x6f\156\x6c\171"] = "\x72\145\141\144\x6f\156\x6c\x79";
        goto aSXuf;
        YIQPO:
        if (!(!$id || empty($id))) {
            goto P6Nhf;
        }
        goto Xapun;
        nMo3Q:
        $group = $this->ion_auth->group($id)->row();
        goto ffPXz;
        b1QL3:
        if (!($this->config->item("\x61\x64\155\151\x6e\x5f\147\162\x6f\x75\x70", "\x69\157\x6e\x5f\141\x75\x74\x68") === $group->name)) {
            goto gDoXo;
        }
        goto dI1qH;
        XsQZr:
        MTC_P:
        goto NgIpg;
        g1ymu:
        WFL6O:
        goto XsQZr;
        SBnlm:
        redirect("\141\x75\x74\x68", "\162\x65\146\x72\x65\x73\x68");
        goto Pucuy;
        sonsm:
        $this->data["\x67\x72\157\165\x70\137\156\141\x6d\145"] = ["\156\141\155\x65" => "\x67\x72\x6f\x75\160\x5f\x6e\x61\155\x65", "\x69\x64" => "\147\162\157\165\160\x5f\x6e\x61\155\145", "\164\x79\x70\145" => "\164\145\170\164", "\166\x61\154\165\x65" => $this->form_validation->set_value("\x67\x72\157\165\x70\x5f\x6e\141\x6d\x65", $group->name)];
        goto b1QL3;
        zG5M8:
        if ($group_update) {
            goto Seko2;
        }
        goto d8PcY;
        HhktQ:
        redirect("\141\165\x74\x68", "\162\145\x66\x72\145\163\150");
        goto wZ6h7;
        Avy4l:
        Seko2:
        goto RddB4;
        ffPXz:
        $this->form_validation->set_rules("\x67\x72\157\x75\160\x5f\156\x61\x6d\x65", $this->lang->line("\145\144\151\164\x5f\147\162\157\165\160\137\x76\x61\x6c\151\144\141\x74\151\x6f\x6e\x5f\x6e\x61\155\145\137\154\x61\142\145\154"), "\x74\162\x69\155\174\x72\x65\x71\x75\151\162\x65\x64\x7c\x61\x6c\x70\150\x61\x5f\x64\x61\163\150");
        goto zzEWM;
        Mj92F:
        if (!($this->form_validation->run() === TRUE)) {
            goto WFL6O;
        }
        goto qvXIi;
        aSXuf:
        gDoXo:
        goto nf3_e;
        wZ6h7:
        vfP_B:
        goto nMo3Q;
        vKsKe:
        $this->data["\x67\162\x6f\x75\x70"] = $group;
        goto sonsm;
        n9OFT:
        goto ZLS58;
        goto Avy4l;
        Aj80H:
        P6Nhf:
        goto WDzhr;
        zzEWM:
        if (!(isset($_POST) && !empty($_POST))) {
            goto MTC_P;
        }
        goto Mj92F;
        RddB4:
        $this->session->set_flashdata("\x6d\145\x73\163\141\x67\145", $this->lang->line("\145\144\x69\x74\137\x67\x72\x6f\x75\x70\x5f\163\x61\166\x65\144"));
        goto SBnlm;
        Pc_p4:
        $this->_render_page("\x61\x75\164\x68" . DIRECTORY_SEPARATOR . "\145\144\x69\164\x5f\x67\162\x6f\x75\160", $this->data);
        goto XJaYv;
        Xapun:
        redirect("\141\x75\164\150", "\x72\x65\x66\x72\145\163\x68");
        goto Aj80H;
        NgIpg:
        $this->data["\x6d\145\x73\x73\x61\147\x65"] = validation_errors() ? validation_errors() : ($this->ion_auth->errors() ? $this->ion_auth->errors() : $this->session->flashdata("\155\145\163\163\141\147\x65"));
        goto vKsKe;
        wN5nQ:
        if (!(!$this->ion_auth->logged_in() || !$this->ion_auth->is_admin())) {
            goto vfP_B;
        }
        goto HhktQ;
        d8PcY:
        $this->session->set_flashdata("\x6d\x65\x73\x73\141\147\145", $this->ion_auth->errors());
        goto n9OFT;
        Pucuy:
        ZLS58:
        goto g1ymu;
        nf3_e:
        $this->data["\x67\x72\x6f\x75\160\137\144\145\x73\143\x72\x69\160\x74\151\x6f\x6e"] = ["\x6e\141\x6d\145" => "\x67\x72\157\165\160\137\144\x65\163\143\162\151\x70\164\151\x6f\x6e", "\151\144" => "\x67\162\157\x75\x70\137\x64\145\163\143\x72\x69\x70\164\151\157\x6e", "\x74\171\160\x65" => "\164\x65\170\x74", "\x76\141\154\x75\145" => $this->form_validation->set_value("\147\x72\157\165\160\x5f\x64\x65\x73\143\x72\x69\160\x74\151\157\x6e", $group->description)];
        goto Pc_p4;
        XJaYv:
    }
    public function _get_csrf_nonce()
    {
        goto USnb3;
        VzTe2:
        return [$key => $value];
        goto gQfpA;
        AmHdn:
        $this->session->set_flashdata("\x63\x73\162\x66\x6b\x65\171", $key);
        goto AhWVc;
        AhWVc:
        $this->session->set_flashdata("\143\163\x72\146\166\x61\154\165\145", $value);
        goto VzTe2;
        VBJ1V:
        $key = random_string("\141\154\156\165\155", 8);
        goto S3z7K;
        S3z7K:
        $value = random_string("\141\154\x6e\165\155", 20);
        goto AmHdn;
        USnb3:
        $this->load->helper("\x73\164\x72\x69\156\147");
        goto VBJ1V;
        gQfpA:
    }
    public function _valid_csrf_nonce()
    {
        goto McFU1;
        xMrIr:
        yldXd:
        goto XESOG;
        Y_hib:
        if (!($csrfkey && $csrfkey === $this->session->flashdata("\143\163\162\146\x76\x61\154\165\x65"))) {
            goto yldXd;
        }
        goto mCZqK;
        XESOG:
        return FALSE;
        goto IVJ4j;
        mCZqK:
        return TRUE;
        goto xMrIr;
        McFU1:
        $csrfkey = $this->input->post($this->session->flashdata("\x63\163\x72\x66\153\145\x79"));
        goto Y_hib;
        IVJ4j:
    }
    public function _render_page($view, $data = NULL, $returnhtml = FALSE)
    {
        goto Z6Dgc;
        Z6Dgc:
        $viewdata = empty($data) ? $this->data : $data;
        goto ZihAL;
        T122O:
        oUPIQ:
        goto YaM1V;
        pduLl:
        if (!$returnhtml) {
            goto oUPIQ;
        }
        goto tqEo8;
        ZihAL:
        $view_html = $this->load->view($view, $viewdata, $returnhtml);
        goto pduLl;
        tqEo8:
        return $view_html;
        goto T122O;
        YaM1V:
    }
}
