<?php
/*   ________________________________________
    |                 GarudaCBT              |
    |    https://github.com/garudacbt/cbt    |
    |________________________________________|
*/
class Install_model extends CI_Model
{
    function install_success()
    {
        return $this->check_installer();
    }
    function check_installer()
    {
        goto IrDva;
        iYcAj:
        return "\64";
        goto ObdmS;
        Op5Qv:
        Uk_n2:
        goto li5aa;
        ObdmS:
        goto uBcAt;
        goto idvBz;
        XEtyH:
        DDWUR:
        goto xx1OY;
        LC9iW:
        $CI->load->database();
        goto F0bWG;
        lWi2v:
        $this->load->dbutil();
        goto kVEJS;
        TYrBC:
        goto MZ_S2;
        goto EEaxU;
        TDp3D:
        $CI = &get_instance();
        goto LC9iW;
        mENIg:
        MZ_S2:
        goto Fvua3;
        Nc8Kf:
        uBcAt:
        goto mENIg;
        kVEJS:
        if ($database == '') {
            goto WHOja;
        }
        goto XZHSe;
        kgifu:
        Ce70e:
        goto fDfmE;
        EEaxU:
        qQBm3:
        goto PjKUj;
        idvBz:
        RUfGo:
        goto BdNhv;
        IrDva:
        include APPPATH . "\143\157\x6e\x66\x69\x67\57\x64\x61\x74\141\x62\x61\163\x65\56\x70\x68\160";
        goto CeyXe;
        F0bWG:
        if ($CI->db->table_exists("\165\x73\x65\x72\x73")) {
            goto Ce70e;
        }
        goto gOD8j;
        CeyXe:
        $database = $db["\144\x65\x66\141\x75\154\164"]["\144\141\164\x61\x62\x61\163\x65"];
        goto lWi2v;
        NIcMF:
        WHOja:
        goto cdVaa;
        lAype:
        sENf8:
        goto Mds6d;
        XZHSe:
        if (!$this->dbutil->database_exists($database)) {
            goto sENf8;
        }
        goto TDp3D;
        xx1OY:
        goto Uk_n2;
        goto NIcMF;
        gOD8j:
        return "\62";
        goto tzAUJ;
        cdVaa:
        return "\61";
        goto Op5Qv;
        Fvua3:
        ePzUI:
        goto XzDMY;
        PjKUj:
        if ($CI->db->get("\x73\x65\164\x74\x69\x6e\147")->row()) {
            goto RUfGo;
        }
        goto iYcAj;
        Mds6d:
        return "\x35";
        goto XEtyH;
        BdNhv:
        return "\60";
        goto Nc8Kf;
        elozz:
        return "\63";
        goto TYrBC;
        fDfmE:
        if ($CI->db->get("\165\163\145\162\163")->row()) {
            goto qQBm3;
        }
        goto elozz;
        tzAUJ:
        goto ePzUI;
        goto kgifu;
        XzDMY:
        goto DDWUR;
        goto lAype;
        li5aa:
    }
}
