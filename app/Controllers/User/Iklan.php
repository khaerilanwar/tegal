<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Models\jasaModel;
use App\Models\KulinerModel;
use App\Models\PenginapanModel;
use Exception;

class Iklan extends BaseController
{
    protected $jasaModel;
    protected $kulinerModel;
    protected $penginapanModel;
    protected $jasa;
    protected $kuliner;
    protected $penginapan;

    public function __construct()
    {
        helper('tegal');
        cekLogin();
        $this->jasaModel = new jasaModel();
        $this->kulinerModel = new KulinerModel();
        $this->penginapanModel = new PenginapanModel();
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
                    // $dataIklan = $this->kulinerModel->asArray()->like('nama_kuliner', $search)->findAll();
                    $dataIklan = $this->kulinerModel->where('status', 1)->where('user_email', session()->email)->asArray()->like('nama_kuliner', $search)->findAll();
                } else {
                    $dataIklan = $this->kuliner->getWhere(['user_email' => session()->email, 'status' => 1])->getResultArray();
                }
                break;
            case 'penginapan':
                if ($search) {
                    $dataIklan = $this->penginapanModel->where('status', 1)->where('user_email', session()->email)->asArray()->like('nama_penginapan', $search)->findAll();
                } else {
                    $dataIklan = $this->penginapan->getWhere(['user_email' => session()->email, 'status' => 1])->getResultArray();
                }
                break;
            case 'jasa':
                if ($search) {
                    $dataIklan = $this->jasaModel->where('status', 1)->where('user_email', session()->email)->asArray()->like('nama_jasa', $search)->findAll();
                } else {
                    $dataIklan = $this->jasa->getWhere(['user_email' => session()->email, 'status' => 1])->getResultArray();
                }
                break;
            default:
                $dataJasa = $this->jasa->getWhere(['user_email' => session()->email, 'status' => 1])->getResultArray();
                $dataKuliner = $this->kuliner->getWhere(['user_email' => session()->email, 'status' => 1])->getResultArray();
                $dataPenginapan = $this->penginapan->getWhere(['user_email' => session()->email, 'status' => 1])->getResultArray();
        }

        if ($menu == 'kuliner') {
            $part = 'user/partial/kuliner';
            $title = 'Pasang Iklan Kuliner';
        } elseif ($menu == 'penginapan') {
            $part = 'user/partial/penginapan';
            $title = 'Pasang Iklan Penginapan';
        } elseif ($menu == 'jasa') {
            $part = 'user/partial/jasa';
            $title = 'Pasang Iklan Jasa';
        } else {
            $part = 'user/partial/index';
            $title = 'Pasang Iklan Anda';
        }

        if ($displayIklan) {
            $data = [
                'title' => $title,
                'user' => $this->user,
                'partial' => $part,
                'dataIklan' => $dataIklan,
                'displayIklan' => $displayIklan,
                'validation' => \Config\Services::validation(),
                'dataJasa' => [],
                'dataKuliner' => [],
                'dataPenginapan' => [],
            ];
        } else {
            $data = [
                'title' => $title,
                'user' => $this->user,
                'displayIklan' => false,
                'partial' => $part,
                'dataIklan' => false,
                'validation' => \Config\Services::validation(),
                'dataJasa' => $dataJasa,
                'dataKuliner' => $dataKuliner,
                'dataPenginapan' => $dataPenginapan,
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
            // unlink('assets/img/' . $this->request->getPost('gambarLama'));
            try {
                unlink('assets/img/' . $this->request->getPost('gambarLama'));
            } catch (Exception $e) {
                session()->setFlashdata('gagalUpdate', 'Gagal update data');
                return redirect()->to('/pasang-iklan');
            }
        }

        if ($menu == 'jasa') {
            $this->jasaModel->update($id, [
                'nama_jasa' => htmlspecialchars($this->request->getPost('nama_jasa')),
                'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
                'harga' => htmlspecialchars($this->request->getPost('harga')),
                'maps' => htmlspecialchars($this->request->getPost('maps')),
                'gambar' => $namaGambar
            ]);

            session()->setFlashdata('update', 'Data berhasil diupdate!');
            return redirect()->to('/pasang-iklan?menu=jasa');
        } elseif ($menu == 'kuliner') {
            $this->kulinerModel->update($id, [
                'nama_kuliner' => htmlspecialchars($this->request->getPost('nama_kuliner')),
                'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
                'harga' => htmlspecialchars($this->request->getPost('harga')),
                'maps' => htmlspecialchars($this->request->getPost('maps')),
                'gambar' => $namaGambar
            ]);

            session()->setFlashdata('update', 'Data berhasil diupdate!');
            return redirect()->to('/pasang-iklan?menu=kuliner');
        } elseif ($menu == 'penginapan') {
            $this->penginapanModel->update($id, [
                'nama_penginapan' => htmlspecialchars($this->request->getPost('nama_penginapan')),
                'deskripsi' => htmlspecialchars($this->request->getPost('deskripsi')),
                'harga' => htmlspecialchars($this->request->getPost('harga')),
                'maps' => htmlspecialchars($this->request->getPost('maps')),
                'gambar' => $namaGambar
            ]);

            session()->setFlashdata('update', 'Data berhasil diupdate!');
            return redirect()->to('/pasang-iklan?menu=penginapan');
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
