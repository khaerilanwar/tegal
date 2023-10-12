<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\UserToken;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

class Registrasi extends BaseController
{
    protected $userModel;
    protected $userToken;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->userToken = new UserToken();
        helper('tegal');
        cekSession();
    }

    public function index()
    {

        $data = [
            'title' => 'Form Registrasi User',
            'validation' => \Config\Services::validation()
        ];

        return view('auth/register', $data);
    }

    public function save()
    {
        $rules = [
            'nama' => [
                'rules' => 'required|trim',
                'errors' => [
                    'required' => 'Nama tidak boleh kosong'
                ]
            ],
            'email' => [
                'rules' => 'required|trim|valid_email|is_unique[user.email]',
                'errors' => [
                    'required' => 'Email tidak boleh kosong',
                    'valid_email' => 'Alamat email tidak valid',
                    'is_unique' => 'Alamat email sudah terdaftar'
                ]
            ],
            'no_telepon' => [
                'rules' => 'required|trim|numeric',
                'errors' => [
                    'required' => 'Nomor Telepon tidak boleh kosong',
                    'numeric' => 'Masukkan nomor telepon yang benar'
                ]
            ],
            'jenis_kelamin' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Harap isi jenis kelamin'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat tidak boleh kosong'
                ]
            ],
            'password' => [
                'rules' => 'required|matches[repassword]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'matches' => 'Kata sandi tidak cocok'
                ]
            ],
            'repassword' => [
                'rules' => 'required|matches[password]',
                'errors' => [
                    'required' => 'Harap isi konfirmasi password anda',
                    'matches' => 'Kata sandi tidak cocok'
                ]
            ]

        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/registrasi')->withInput();
        }

        $password = htmlspecialchars($this->request->getPost('password'));
        $password = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            // 'nama', 'email', 'no_telp', 'jenis_kelamin', 'alamat', 'password', 'role'
            'nama' => htmlspecialchars($this->request->getPost('nama')),
            'email' => htmlspecialchars($this->request->getPost('email')),
            'no_telp' => htmlspecialchars($this->request->getPost('no_telepon')),
            'jenis_kelamin' => htmlspecialchars($this->request->getPost('jenis_kelamin')),
            'alamat' => htmlspecialchars($this->request->getPost('alamat')),
            'password' => $password,
            'gambar' => 'default.jpg',
            'is_active' => 0,
            'role_id' => 2
        ];

        // SIAPKAN TOKEN
        $token = base64_encode(random_bytes(32));
        $user_token = [
            'email' => $this->request->getPost('email'),
            'token' => $token,
            'date_created' => time()
        ];

        $this->userModel->insert($data);
        $this->userToken->insert($user_token);

        $this->_sendEmail($token);

        session()->setFlashdata('pesan', 'Berhasil daftar, Segera aktivasi akunmu!');
        session()->setFlashdata('warna', '<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Check icon</span>
    </div>');

        return redirect()->to('/login');
    }

    private function _sendEmail($token)
    {
        $mail = new PHPMailer(true);
        //Server settings
        $mail->isSMTP();
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = '12210952@bsi.ac.id';
        $mail->Password = '2002';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        //Recipients
        $mail->setFrom('1221092@bsi.ac.id', 'Kabupaten Tegal');
        $mail->addAddress($this->request->getPost('email'), 'Pengguna Baru');

        //Content
        $konten = '
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout:fixed;background-color:#ffffff" id="m_7953137614657185465bodyTable">
    <tbody>
        <tr>
            <td align="center" valign="top" style="padding-right:10px;padding-left:10px" id="m_7953137614657185465bodyCell">
                <table border="0" cellpadding="0" cellspacing="0" style="max-width:600px" width="100%">
                    <tbody>
                        <tr>
                            <td align="center" valign="top"></td>
                        </tr>
                    </tbody>
                </table>
                <table border="0" cellpadding="0" cellspacing="0" style="max-width:600px" width="100%">
                    <tbody>
                        <tr>
                            <td align="center" valign="top">
                                <table border="0" cellpadding="0" cellspacing="0" style="background-color:#ffffff;border-color:#e5e5e5;border-style:solid;border-width:0 1px 1px 1px" width="100%">
                                    <tbody>
                                        <tr>
                                            <td height="3" style="clear:both;height:5px;background:url(\'https://ci6.googleusercontent.com/proxy/gAQR6G-dK2Y5cvGEGQEUkeuvvuKZSrrmyEjpSzf4fWhsJVSXsxlXWbZo_svd-PzyEhlOk0qSSM3exPcSSYDb8Ltm=s0-d-e1-ft#https://sendy.colorlib.com/img/top-pattern2.gif\') repeat-x 0 0;background-size:46px">&nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top" style="padding-bottom:10px"><a href="#m_7953137614657185465_" style="text-decoration:none"><img src="https://ci6.googleusercontent.com/proxy/7L0aqUPBmj_uw4Beyz1bwQQcOvsBiMCmkULSBmqT2snrysU2APnyxEp5_2xrnJjPfMv14CIpPDyk2QDICJXaXR9puHhv9b98JcfCtRxA-EhZSBWAbrI=s0-d-e1-ft#https://sendy.colorlib.com/img/email-notifications/almost-there.gif" width="150" alt="" border="0" style="width:100%;max-width:150px;height:auto;display:block" class="CToWUd" data-bit="iit"></a></td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top" style="padding-bottom:5px;padding-left:20px;padding-right:20px">
                                                <h2 style="color:#000000;font-family:Helvetica,Arial,sans-serif;font-size:28px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:36px;text-transform:none;text-align:center;padding:0;margin:0">You\'re almost there!</h2>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top" style="padding-bottom:30px;padding-left:20px;padding-right:20px">
                                                <h4 style="color:#848484;font-family:Helvetica,Arial,sans-serif;font-size:16px;font-weight:500;font-style:normal;letter-spacing:normal;line-height:24px;text-transform:none;text-align:center;padding:0;margin:0">Please confirm your user activation by clicking the link below</h4>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top" style="padding-left:20px;padding-right:20px">
                                                <table border="0" cellpadding="0" cellspacing="0" style="margin-bottom:20px">
                                                    <tbody>
                                                        <tr>
                                                            <td align="left" valign="top" style="padding:15px;background:#f8f9fc">
                                                                <p style="color:#666666;font-family:\'Open Sans\',Helvetica,Arial,sans-serif;font-size:14px;font-weight:400;font-style:normal;letter-spacing:normal;line-height:22px;text-transform:none;text-align:left;padding:0;margin:0"><strong>Konfirmasi: </strong><a href="' . base_url('/registrasi/verify?email=') . $this->request->getPost('email') . '&token=' . urlencode($token) . '" target="_blank">' . base_url('/registrasi/verify?email=' . $this->request->getPost('email') . '&token=' . urlencode($token)) . '</a><br></p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td align="center" valign="top" style="padding-top:20px;padding-bottom:20px">
                                                                <table align="center" border="0" cellpadding="0" cellspacing="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="center" style="background-color:#000000;padding-top:12px;padding-bottom:12px;padding-left:35px;padding-right:35px;border-radius:50px"><a href="' . base_url('/registrasi/verify?email=') . $this->request->getPost('email') . '&token=' . urlencode($token) . '" style="color:#ffffff;font-family:Helvetica,Arial,sans-serif;font-size:13px;font-weight:600;font-style:normal;letter-spacing:1px;line-height:20px;text-transform:uppercase;text-decoration:none;display:block" target="_blank">Konfirmasi Akun Kabupaten Tegal</a></td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td height="20" style="font-size:1px;line-height:1px">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td height="30" style="font-size:1px;line-height:1px">&nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
';

        $mail->isHTML(true);
        $mail->Subject = 'Konfirmasi Aktivasi Akun';
        $mail->Body    = $konten;
        $mail->send();
    }

    public function verify()
    {
        $email = $this->request->getGet('email');
        $token = $this->request->getGet('token');

        $user = $this->userModel->where('email', $email)->first();

        if ($user) {
            $user_token = \Config\Database::connect()->table('user_token')->getWhere(['token' => $token])->getRowArray();
            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 60 * 2)) {
                    \Config\Database::connect()->table('user')->set('is_active', 1)->where('email', $email)->update();
                    \Config\Database::connect()->table('user_token')->delete(['email' => $email]);

                    session()->setFlashdata('pesan', 'Akun sudah aktif, silakan login!');
                    session()->setFlashdata('warna', '<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Check icon</span>
    </div>');
                    return redirect()->to('/login');
                } else {

                    \Config\Database::connect()->table('user')->delete(['email' => $email]);
                    \Config\Database::connect()->table('user_token')->delete(['email' => $email]);

                    session()->setFlashdata('pesan', 'Aktivasi akun gagal, token hangus!');
                    session()->setFlashdata('warna', '<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Error icon</span>
    </div>');
                    return redirect()->to('/login');
                }
            } else {
                session()->setFlashdata('pesan', 'Aktivasi akun gagal, token salah!');
                session()->setFlashdata('warna', '<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Error icon</span>
    </div>');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('pesan', 'Aktivasi akun gagal, email salah!');
            session()->setFlashdata('warna', '<div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-red-500 bg-red-100 rounded-lg dark:bg-red-800 dark:text-red-200">
        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        <span class="sr-only">Error icon</span>
    </div>');
            return redirect()->to('/login');
        }
    }
}
