<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\jasaModel;
use App\Models\KulinerModel;

class Iklan extends BaseController
{
    protected $jasaModel;
    protected $kulinerModel;
    protected $jasa;
    protected $kuliner;
    protected $penginapan;

    public function __construct()
    {
        helper('tegal');
        cekLogin();
        $this->jasaModel = new jasaModel();
        $this->kulinerModel = new KulinerModel();
        $this->jasa = \Config\Database::connect()->table('jasa');
        $this->kuliner = \Config\Database::connect()->table('kuliner');
        $this->penginapan = \Config\Database::connect()->table('penginapan');
    }

    public function index()
    {
        $menu = $this->request->getGet('bidang');
        $displayIklan = $this->request->getGet('menu');
        $search = $this->request->getGet('produk');

        switch ($displayIklan) {
            case 'kuliner':
                if ($search) {
                    $dataIklan = $this->kulinerModel->asArray()->like('nama_kuliner', $search)->findAll();
                } else {
                    $dataIklan = $this->kuliner->getWhere(['user_email' => session()->email])->getResultArray();
                }
                break;
            case 'penginapan':
                if ($search) {
                    $dataIklan = $this->kulinerModel->asArray()->like('nama_kuliner', $search)->findAll();
                } else {
                    $dataIklan = $this->kuliner->getWhere(['user_email' => session()->email])->getResultArray();
                }
                break;
            case 'jasa':
                if ($search) {
                    $dataIklan = $this->jasaModel->asArray()->like('nama_jasa', $search)->findAll();
                } else {
                    $dataIklan = $this->jasa->getWhere(['user_email' => session()->email])->getResultArray();
                }
                break;
            default:
                $dataJasa = $this->jasa->getWhere(['user_email' => session()->email])->getResultArray();
                $dataKuliner = $this->kuliner->getWhere(['user_email' => session()->email])->getResultArray();
        }

        if ($menu == 'kuliner') {
            $part = 'user/partial/kuliner';
        } elseif ($menu == 'penginapan') {
            $part = 'user/partial/penginapan';
        } elseif ($menu == 'jasa') {
            $part = 'user/partial/jasa';
        } else {
            $part = 'user/partial/index';
        }

        if ($displayIklan) {
            $data = [
                'title' => 'Pasang Iklan Anda',
                'user' => $this->user,
                'partial' => $part,
                'dataIklan' => $dataIklan,
                'displayIklan' => $displayIklan,
                'validation' => \Config\Services::validation(),
            ];
        } else {
            $data = [
                'title' => 'Pasang Iklan Anda',
                'user' => $this->user,
                'displayIklan' => false,
                'partial' => $part,
                'dataIklan' => false,
                'validation' => \Config\Services::validation(),
                'dataJasa' => $dataJasa,
                'dataKuliner' => $dataKuliner
            ];
        }

        return view('user/iklan', $data);
    }

    public function update($id)
    {
        $menu = $this->request->getGet('menu');

        $fileGambar = $this->request->getFile('gambar');

        // cek gambar apakah tetap gambar lama
        if ($fileGambar->getError() ==  4) {
            $namaGambar = $this->request->getPost('gambarLama');
        } else {
            // generate nama file random
            $namaGambar = $fileGambar->getRandomName();
            // pindahkan gambar
            $fileGambar->move('assets/img', $namaGambar);
            // hapus file lama
            unlink('assets/img/' . $this->request->getPost('gambarLama'));
        }

        if ($menu == 'jasa') {
            $this->jasaModel->update($id, [
                'nama_jasa' => $this->request->getPost('nama_jasa'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'harga' => $this->request->getPost('harga'),
                'maps' => $this->request->getPost('maps'),
                'gambar' => $namaGambar
            ]);

            return redirect()->to('/pasang-iklan?menu=jasa');
        } elseif ($menu == 'kuliner') {
            $this->kulinerModel->update($id, [
                'nama_jasa' => $this->request->getPost('nama_kuliner'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'harga' => $this->request->getPost('harga'),
                'maps' => $this->request->getPost('maps'),
                'gambar' => $namaGambar
            ]);

            return redirect()->to('/pasang-iklan?menu=kuliner');
        } elseif ($menu == 'penginapan') {
            $this->kulinerModel->update($id, [
                'nama_jasa' => $this->request->getPost('nama_kuliner'),
                'deskripsi' => $this->request->getPost('deskripsi'),
                'harga' => $this->request->getPost('harga'),
                'maps' => $this->request->getPost('maps'),
                'gambar' => $namaGambar
            ]);
        }
    }

    public function hapus($id)
    {
        $jasa = $this->jasaModel->find($id);

        if ($jasa['gambar'] != 'anwar.jpeg') {
            // hapus gambar
            unlink('assets/img/' . $jasa['gambar']);
        }

        $this->jasaModel->delete($id);

        return redirect()->to('/pasang-iklan');
    }
}
